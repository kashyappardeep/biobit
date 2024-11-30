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
use Illuminate\Support\Facades\Log;

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
        //dd($user);
        // Calculate user's business details
        $power_leg_business = User::where('referal_by', $user->id)
            ->where('status', 2)
            ->pluck('team_business')
            ->max();

        // dd($power_leg_business);

        $total_leg_business = User::where('referal_by', $user->id)
            ->where('status', 2)
            ->pluck('team_business')
            ->sum();

        $other_team_business = $total_leg_business - $power_leg_business;

        // Calculate the total principle
        $total_Principle = InvestmentHistory::where('user_id', auth()->id())->sum('amount');


        $reward = Reward::get();
        $bronze_row   = $reward[0];


        if ($user->Rewards_Renk == 0) {

            $bronze_row   = $reward[0];
            $other_leg_cond = $bronze_row->team_business * 60 / 100;
            $power_leg_cond = $bronze_row->team_business * 40 / 100;
            // dd($power_leg_business);
            // dd($bronze_row);

            if (
                $power_leg_business >= $power_leg_cond &&
                $other_team_business >= $other_leg_cond
                && $total_Principle >= $bronze_row->self_business
            ) {

                $user->Rewards_Renk = 1;
                $user->save();
            }
        }

        if ($user->Rewards_Renk == 1) {

            $Silver_row   = $reward[1];
            $other_leg_cond = $Silver_row->team_business * 60 / 100;
            $power_leg_cond = $Silver_row->team_business * 40 / 100;


            if (
                $power_leg_business >= $power_leg_cond &&
                $other_team_business >= $other_leg_cond
                && $total_Principle >= $Silver_row->self_business
            ) {

                $user->Rewards_Renk = 2;
                $user->save();
            }
        }

        if ($user->Rewards_Renk == 2) {

            $Gold_row   = $reward[2];
            $other_leg_cond = $Gold_row->team_business * 60 / 100;
            $power_leg_cond = $Gold_row->team_business * 40 / 100;


            if (
                $power_leg_business >= $power_leg_cond &&
                $other_team_business >= $other_leg_cond
                && $total_Principle >= $Gold_row->self_business
            ) {

                $user->Rewards_Renk = 3;
                $user->save();
            }
        }
        if ($user->Rewards_Renk == 3) {

            $Gold_row   = $reward[3];

            $status = 3;
            $gold_array = $this->getTeamMemberCountsByStatus2($user->id, $status);

            $gold_count = $gold_array['left_team_count'] + $gold_array['right_team_count'];

            if ($gold_count >= 3  && $total_Principle >= $Gold_row->self_business) {

                $user->Rewards_Renk = 4;
                $user->save();
            }
        }
        if ($user->Rewards_Renk == 4) {

            $Platinum_row   = $reward[4];

            $status = 4;
            $gold_array = $this->getTeamMemberCountsByStatus2($user->id, $status);

            $gold_count = $gold_array['left_team_count'] + $gold_array['right_team_count'];

            if ($gold_count >= 3  && $total_Principle >= $Platinum_row->self_business) {

                $user->Rewards_Renk = 5;
                $user->save();
            }
        }
        if ($user->Rewards_Renk == 5) {

            $Diamond_row   = $reward[5];

            $status = 5;
            $gold_array = $this->getTeamMemberCountsByStatus2($user->id, $status);

            $gold_count = $gold_array['left_team_count'] + $gold_array['right_team_count'];

            if ($gold_count >= 3  && $total_Principle >= $Diamond_row->self_business) {

                $user->Rewards_Renk = 6;
                $user->save();
            }
        }

        if ($user->Rewards_Renk == 6) {

            $Ruby_row   = $reward[6];

            $status = 6;
            $gold_array = $this->getTeamMemberCountsByStatus2($user->id, $status);

            $gold_count = $gold_array['left_team_count'] + $gold_array['right_team_count'];

            if ($gold_count >= 3  && $total_Principle >= $Ruby_row->self_business) {

                $user->Rewards_Renk = 6;
                $user->save();
            }
        }


        if ($user->Rewards_Renk  != 0) {
            $reward_already_received = TransactionHistory::where('user_id', auth()->id())
                ->where('reward_id', $user->Rewards_Renk)
                ->exists();


            if (!$reward_already_received) {
                // dd($reward_already_received);
                $reward_detail = $reward[$user->Rewards_Renk - 1];
                $user->activation_balance += $reward_detail->reward;
                $user->save();


                TransactionHistory::create([
                    'user_id' => auth()->id(),
                    'amount' => $reward_detail->reward,
                    'reward_id' => $reward_detail->id,
                    'type' => "3",
                    'status' => "2",
                ]);
            }
        }





        $reward->Rewards_Renk = $user->Rewards_Renk;


        // dd($reward); 
        // Return view with rewards

        return view('users.reward', compact('reward',));
    }


    public function getTeamMemberCountsByStatus2($userId, $status)
    {
        $user = User::findOrFail($userId);

        $teamCounts = $user->countTeamMembersByStatus2($status);

        return [
            'user_id' => $userId,
            'left_team_count' => $teamCounts['left'],
            'right_team_count' => $teamCounts['right'],
        ];
    }
    // public function activateReward($id)
    // {
    //     $reward = Reward::where('id', $id)->first();
    //     $user = User::where('id', auth()->id())->first();

    //     if ($user->Rewards_Renk >= $reward->id) {
    //         $reward_already_received = TransactionHistory::where('user_id', auth()->id())
    //             ->where('reward_id', $reward->id)
    //             ->exists();

    //         if (!$reward_already_received) {


    //             $user->activation_balance += $reward->reward;
    //             $user->save();


    //             TransactionHistory::create([
    //                 'user_id' => auth()->id(),
    //                 'amount' => $reward->reward,
    //                 'reward_id' => $reward->id,
    //                 'type' => "3",
    //                 'status' => "2",
    //             ]);
    //             return back()->with('success', 'Reward claimed successfully!');
    //         }
    //         return back()->with('error', 'Invalid reward or already claimed.');
    //     }
    //     return back()->with('error', 'Invalid reward ');
    // }
}
