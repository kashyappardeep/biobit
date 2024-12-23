<?php

namespace App\Http\Controllers\Users;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\User;
use App\Models\Referral;
use App\Models\Reward;
use App\Models\Level;
use App\Models\TransactionHistory;
use Illuminate\Support\Facades\Log;
use App\Models\InvestmentHistory;
use Carbon\Carbon;

class InvestmentController extends Controller
{
    public function index()
    {
        $Package = Package::get();
        $histroy = InvestmentHistory::with('package')->where('user_id', auth()->id())->get();
        $user = User::where('id', auth()->id())->first();
        $referralLink = url('/register?ref=' . $user->referal_code);
        // dd($histroy);
        return view('users.funds', compact('Package', 'user', 'referralLink', 'histroy'));
    }
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            // Validate the input
            $request->validate([
                'package_id' => 'required|exists:packegs,id', // Correct table name
                'invest_amount' => 'required|numeric|min:1',  // Ensure valid amount
                'transactionHash' => 'required',
            ]);

            if (!$request->transactionHash) {
                return redirect()->back()->with('error', 'Transaction Hash not found.');
            }
            $currentUser = User::find(auth()->id());

            if (!$currentUser) {
                return redirect()->back()->with('error', 'User not found.');
            }
            if ($currentUser->activation == 0) {

                return redirect()->back()->with('error', 'Please activate your account first.');
            }
            // Update the current user's team business and status
            $currentUser->team_business += $request->invest_amount;
            $currentUser->status = 2;
            $currentUser->save();

            $referralConfig = Referral::get(); // Assuming Referral contains level data
            $referralLimit = 30; // Maximum referral levels to process
            $sponsorCode = $currentUser->referal_by;

            for ($level = 1; $level <= $referralLimit; $level++) {
                // Find sponsor user
                $sponsorUser = User::where('referal_code', $sponsorCode)
                    ->where('status', 2)->first();

                if (!$sponsorUser) {
                    Log::info("No sponsor found for User ID {$currentUser->id} at level {$level}. Ending loop.");
                    break; // Stop if no sponsor is found
                }

                // Update sponsor's team business
                $sponsorUser->team_business += $request->invest_amount;

                // Get the referral percentage for the current level
                $levelConfig = $referralConfig->where('R_L', $level)->first();

                if (!$levelConfig) {
                    Log::info("No configuration found for level {$level}. Skipping bonus calculation.");
                    break;
                }

                $referralBonusPercentage = $levelConfig->R_P; // Dynamic referral percentage
                $referralBonus = $request->invest_amount * $referralBonusPercentage / 100;

                // Update sponsor's activation balance with the referral bonus
                $sponsorUser->activation_balance += $referralBonus;


                // Record transaction history for the referral bonus
                TransactionHistory::create([
                    'user_id' => $sponsorUser->id,
                    'to' => $sponsorUser->id,
                    'by' => $currentUser->id,
                    'amount' => $referralBonus,
                    'type' => 2,
                    'level' => $levelConfig->R_L,

                ]);

                // Save sponsor user
                $sponsorUser->save();

                // Set the next sponsor code for the next iteration
                $sponsorCode = $sponsorUser->referal_by;

                // Break if no further sponsor exists
                if (!$sponsorCode) {
                    break;
                }
            }


            // Create a new investment record
            InvestmentHistory::create([
                'user_id' => auth()->id(),
                'package_id' => $request->package_id,
                'amount' => $request->invest_amount,
                'tx_hash' => $request->transactionHash,
                'status' => 2,
                'type' => 1,
            ]);

            DB::commit();

            return redirect()->back()->with('success', 'Investment successfully');
        } catch (\Exception $e) {
            DB::rollback();
            Log::error('Error in processing investment: ' . $e->getMessage());

            return redirect()->back()->with('error', 'An error occurred while processing your investment.');
        }
    }

    public function claimDailyROI()
    {
        $currentDate = Carbon::now();

        $users = User::whereHas('investmentHistory', function ($query) {
            $query->where('status', 2)
                ->where('type', 1); // Only include users with active investments
        })->get();
        // dd($users);
        foreach ($users as $user) {
            Log::info("Active user  {$user->id}");

            $lastClaim = TransactionHistory::where('user_id', $user->id)
                ->where('type', 4)
                ->latest()
                ->first();
            $lastinvestment = InvestmentHistory::where('user_id', $user->id)
                ->latest()
                ->first();

            // Determine last claim date
            if ($lastClaim === null) {
                $lastClaimDate = $lastinvestment->created_at; // Use the user's created date if no claims
            } else {
                $lastClaimDate = $lastClaim->created_at;
            }

            // Calculate the number of hours since the last claim
            $hoursSinceLastClaim = $lastClaimDate->diffInHours($currentDate);

            if ($hoursSinceLastClaim >= 24) {
                // if ($hoursSinceLastClaim) {  //testing 
                $user_investments = InvestmentHistory::with('package')
                    ->where('user_id', $user->id)
                    ->where('status', 2)
                    ->get();
                // dd($user_investments);
                $totalBalance = 0;

                // Calculate total ROI for the number of days since the last claim
                foreach ($user_investments as $investment) {
                    $daily_roi = floatval($investment->package->daily_ear_per); // ROI percentage
                    $amount = floatval($investment->amount); // Investment amount

                    // Calculate daily ROI for the number of days since the last claim
                    $one_day_roi = $amount * $daily_roi / 100;
                    $totalBalance += $one_day_roi * ($hoursSinceLastClaim / 24);
                }


                $today = now()->format('Y-m-d');

                $levelStats = Level::all()->keyBy('level');
                $referrer = $user->referal_by;
                $currentLevel = 1;
                // dd($referrer);
                while ($currentLevel <= 30) {
                    // If no referrer code is present, break out of the loop
                    if (!$referrer) {
                        Log::info("No referrer found for User ID: {$user->id} at Level: {$currentLevel}. Ending distribution.");
                        break;
                    }

                    // Get the referrer user data
                    $referrerUser = User::where('referal_code', $referrer)
                        ->where('status', 2)
                        ->first();

                    // If referrer user does not exist or is inactive, log and move to the next level
                    if (!$referrerUser) {
                        Log::info("Referrer User not found or inactive for referral code: {$referrer}. Skipping to next level.");
                        $currentLevel++;
                        $referrer = null; // Set referrer to null to exit in the next iteration
                        continue;
                    }

                    // Check the referrer's direct referral count
                    $referrerUserCount = User::where('referal_by', $referrerUser->referal_code)
                        ->where('status', 2)
                        ->count();

                    // Ensure that the current level exists in levelStats
                    if (isset($levelStats[$currentLevel])) {
                        $levelStat = $levelStats[$currentLevel];
                        Log::info("Level {$currentLevel} Stats - Required Directs: {$levelStat->direct}");

                        // Check if the direct condition is fulfilled for the current level
                        if ($referrerUserCount >= $levelStat->direct_referals) {
                            Log::info("Referrer User ID: {$referrerUser->id} meets direct condition.");

                            // If the referrer hasn't received income for this level and user today
                            if (!$this->hasReceivedIncome($referrerUser->id, $user->id, $currentLevel, $today)) {
                                // Calculate income based on the user's total investment and level percentage
                                $incomeAmount = ($totalBalance * $levelStat->L_P) / 100;
                                $referrerUser->activation_balance += $incomeAmount;
                                $referrerUser->save();
                                $referrerUser->increment('activation_balance', $incomeAmount); // Update referrer’s level balance

                                // Log the income distribution
                                $this->logIncome($referrerUser->id, $user->id, $incomeAmount, $currentLevel, $today);

                                Log::info("Distributed Income: {$incomeAmount} to Referrer User ID: {$referrerUser->id} at Level: {$currentLevel}");
                            } else {
                                Log::info("Income already distributed for Referrer User ID: {$referrerUser->id} at Level: {$currentLevel}.");
                            }
                        } else {
                            Log::info("Direct condition not met for Referrer User ID: {$referrerUser->id} at Level: {$currentLevel}. Moving to next level.");
                        }
                    } else {
                        Log::info("Level stats not found for Level: {$currentLevel}. Ending distribution.");
                        break;
                    }

                    // Move to the next level and update referrer
                    $referrer = $referrerUser->referal_by;
                    $currentLevel++;
                }











                if ($totalBalance > 0) {
                    // Create a transaction record for the user
                    TransactionHistory::create([
                        'user_id' => $user->id,
                        'amount' => $totalBalance,
                        'type' => "4",
                    ]);

                    // Update the user's balance
                    $user->activation_balance += $totalBalance; // Directly add the total balance
                    $user->save();
                }
            } else {
                echo "user id " . $user->id . "already credited with today roi income ";
            }
        }
        echo "successfull executed";
    }



    private function hasReceivedIncome($referrerId, $userId, $level, $date)
    {
        return TransactionHistory::where('user_id', $referrerId)
            ->where('to', $referrerId)
            ->where('by', $userId)
            ->where('level', $level)
            ->where('cred_date', $date)
            ->where('type', 5)
            ->exists();
    }

    /**
     * Log the income payment in the database to prevent multiple payouts.
     */
    private function logIncome($referrerId, $userId, $amount, $level, $date)
    {
        TransactionHistory::create([
            'user_id' => $referrerId,
            'to' => $referrerId,
            'by' => $userId,
            'amount' => $amount,
            'level' => $level,
            'cred_date' => $date,
            'type' => 5
        ]);
    }

    public function withdrawal()
    {
        // Get the current user
        $user = User::where('id', auth()->id())->first();

        // Check if the user has enough balance
        if ($user->activation_balance <= 0) {
            return back()->with('error', 'Insufficient balance for withdrawal.');
        }

        // Deduct the withdrawal amount from the user's balance
        $withdrawalAmount = $user->activation_balance;

        // Create a transaction history entry for the withdrawal
        TransactionHistory::create([
            'user_id' => auth()->id(),
            'amount' => $withdrawalAmount,
            'type' => "1", // Assuming "1" denotes withdrawal
        ]);

        // Deduct the amount from the user's activation balance
        $user->activation_balance -= $withdrawalAmount;
        $user->save();

        // Return a success message
        return back()->with('success', 'Withdrawal successful!');
    }
}
