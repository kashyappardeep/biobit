<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Referral;
use App\Models\Level;
use App\Models\InvestmentHistory;
use App\Models\TransactionHistory;
use App\Models\User;
use App\Models\Reward;

class RewardsController extends Controller
{
    public function index()
    {
        $Referral = Referral::get();
        $Level = Level::get();
        return view('users.reward-chart', compact('Referral', 'Level')); // Pass rewards to the view
    }

    public function reward()
    {
        $user = User::where('id', auth()->id())->first();

        // Calculate user's business details
        $power_leg_business = User::where('referal_by', $user->id)
            ->where('status', 2)
            ->pluck('team_business')
            ->max();

        $total_leg_business = User::where('referal_by', $user->id)
            ->where('status', 2)
            ->pluck('team_business')
            ->sum();

        $other_team_business = $total_leg_business - $power_leg_business;

        // Calculate the total principle
        $total_Principle = InvestmentHistory::where('user_id', auth()->id())->sum('amount');

        // Process rewards
        $Reward = Reward::all()->map(function ($reward) use ($power_leg_business, $other_team_business, $total_Principle) {
            $power_leg_condition = (float) $reward->team_business * 40 / 100;
            $other_leg_condition = (float) $reward->team_business * 60 / 100;
            $self_business = (float) $reward->self_business;

            $reward->is_activatable =
                (float) $power_leg_business >= $power_leg_condition &&
                (float) $other_team_business >= $other_leg_condition &&
                (float) $total_Principle >= $self_business;

            $reward->is_claimed = TransactionHistory::where('user_id', auth()->id())
                ->where('reward_id', $reward->id)
                ->exists();
            return $reward;
        });

        // dd($Reward);
        // Return view with rewards
        return view('users.reward', compact('Reward'));
    }

    public function activateReward($id)
    {
        $reward = Reward::where('id', $id)->first();
        $user = User::where('id', auth()->id())->first();

        // Calculate user's business details
        $power_leg_business = User::where('referal_by', $user->id)
            ->where('status', 2)
            ->pluck('team_business')
            ->max();

        $total_leg_business = User::where('referal_by', $user->id)
            ->where('status', 2)
            ->pluck('team_business')
            ->sum();

        $other_team_business = $total_leg_business - $power_leg_business;

        // Calculate the total principle
        $total_Principle = InvestmentHistory::where('user_id', auth()->id())->sum('amount');
        $power_leg_condition = (float) $reward->team_business * 40 / 100;
        $other_leg_condition = (float) $reward->team_business * 60 / 100;
        $self_business = (float) $reward->self_business;
        if (
            (float) $power_leg_business >= $power_leg_condition &&
            (float) $other_team_business >= $other_leg_condition &&
            (float) $total_Principle >= $self_business
        ) {
            $reward_already_received = TransactionHistory::where('user_id', auth()->id())
                ->where('reward_id', $reward->id)
                ->exists();

            if (!$reward_already_received) {


                $user->activation_balance += $reward->reward;
                $user->save();


                TransactionHistory::create([
                    'user_id' => auth()->id(),
                    'amount' => $reward->reward,
                    'reward_id' => $reward->id,
                    'type' => "3",
                    'status' => "2",
                ]);
                return back()->with('success', 'Reward claimed successfully!');
            }
            return back()->with('error', 'Invalid reward or already claimed.');
        }
        return back()->with('error', 'Invalid reward.');
        // dd($reward);
    }
}
