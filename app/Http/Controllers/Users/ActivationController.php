<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TransactionHistory;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Carbon\Carbon;

class ActivationController extends Controller
{
    public function id_activate(Request $request)
    {
        DB::beginTransaction();
        // dd($request->all());
        try {

            $user_details = User::where('id', auth()->id())->first();

            $upline = User::where('id', $user_details->referal_by)
                ->where('activation', 1)->first();
            if ($upline) {

                $amount = 30;
                $per = $amount * 80 / 100;

                $upline->activation_balance += $per;
                $upline->save();

                $TransactionHistory = TransactionHistory::create([
                    'user_id' => $upline->id,
                    'amount' => $per,
                    'to'  => $upline->id,
                    'by'  => $user_details->id,
                    'type' => "6",
                    'tx_hash' => $request->transaction_hash,
                ]);
            }

            $user_details->activation = 1;
            $user_details->activation_date = Carbon::now();

            $user_details->save();



            DB::commit();
            return redirect()->back()->with('success', 'Your Id Activation successfully!');
            // return response()->json(['message' => 'Transaction successful', 'transaction' => $transaction], 200);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json(['error' => 'Transaction failed', 'message' => $e->getMessage()], 500);
        }
    }

    public function my_direct()
    {
        $user = User::where('id', auth()->id())->first();
        $Referral = User::where('referal_by', $user->id)->get();
        return view('users.mynetworks.refferalteam', compact('Referral'));
    }

    public function my_Level(Request $request)
    {
        $user_data = User::where('id', auth()->id())->first();
        $selectedLevel = $request->input('level', 1); // Default to level 1 if no level is selected

        // Initialize a collection to store users at the selected level
        $levelUsers = collect();
        $userCounts = [];
        // Start with the user's referral code (first level)
        $currentReferalCodes = collect([$user_data->id]);

        // Loop through levels up to the selected level
        for ($i = 1; $i <= 30; $i++) {
            $users = User::whereIn('referal_by', $currentReferalCodes)->get();

            if ($users->isEmpty()) {
                break; // Stop if no users at this level
            }

            // Add level attribute to each user
            $users->each->setAttribute('level', $i);
            $userCounts[$i] = $users->count();

            // Check if we are at the selected level
            if ($selectedLevel == $i) {
                $levelUsers = $users;

                // Paginate users at this level
                $paginatedUsers = $this->paginateCollection($users, 10); // Paginate with 10 users per page
                // dd($paginatedUsers);
                return view('users.mynetworks.levelteam', [
                    'users' => $paginatedUsers,
                    'selectedLevel' => $selectedLevel,
                    'userCounts' => $userCounts,
                ]);
            }

            // Prepare referral codes for the next level
            $currentReferalCodes = $users->pluck('id');
        }

        // If no users found for the selected level, show an empty state
        return view('users.mynetworks.levelteam', [
            'users' => $levelUsers, // This will be empty if no users for the selected level
            'selectedLevel' => $selectedLevel,
            'userCounts' => $userCounts,
        ]);
    }

    /**
     * Paginate a Laravel Collection
     */
    private function paginateCollection(Collection $collection, $perPage)
    {
        $page = request()->input('page', 1); // Get the current page from the request

        // Calculate the total number of items
        $total = $collection->count();

        // Slice the collection to get the items for the current page
        $results = $collection->slice(($page - 1) * $perPage, $perPage)->values();

        // Create a LengthAwarePaginator instance
        return new LengthAwarePaginator(
            $results,
            $total,
            $perPage,
            $page,
            [
                'path' => request()->url(),  // Current URL
                'query' => request()->query() // Query parameters (ensure it is an array)
            ]
        );
    }
}
