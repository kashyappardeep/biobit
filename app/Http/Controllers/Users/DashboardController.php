<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\InvestmentHistory;
use App\Models\TransactionHistory;

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::where('id', auth()->id())->first();

        $left_team = User::where('referal_by', $user->id)
            ->where('team_position', 1)->count();
        $right_team = User::where('referal_by', $user->id)
            ->where('team_position', 2)->count();

        $Referral_From = User::where('id', $user->referal_by)->first();
        $Team_count = User::where('referal_by', $user->id)->count();
        $total_Principle = InvestmentHistory::where('user_id', auth()->id())
            ->sum('amount');

        $Total_Revenue = TransactionHistory::where('user_id', auth()->id())
            ->where('type', 1)->sum('amount');
        $Self_Earned = TransactionHistory::where('user_id', auth()->id())
            ->where('type', 4)->sum('amount');
        $Level_incoum = TransactionHistory::where('user_id', auth()->id())
            ->where('type', 5)->sum('amount');
        $reffral_income = TransactionHistory::where('user_id', auth()->id())
            ->where('type', 2)->sum('amount');
        $withdraw = TransactionHistory::where('user_id', auth()->id())
            ->where('type', 1)->sum('amount');
        $Binary = TransactionHistory::where('user_id', auth()->id())
            ->where('type', 8)->sum('amount');
        $Royalty = TransactionHistory::where('user_id', auth()->id())
            ->where('type', 7)->sum('amount');
        $referralLink = url('/register?ref=' . $user->id);

        // dd($total_Principle);
        $power_leg_business = User::where('referal_by', $user->id)
            ->where('status', 2)
            ->pluck('team_business')
            ->max();
        $total_leg_business = User::where('referal_by', $user->id)
            ->where('status', 2)
            ->pluck('team_business')
            ->sum();
        $other_team_business = $total_leg_business - $power_leg_business;

        return view('dashboard', compact('user', 'Royalty', 'Binary', 'withdraw', 'other_team_business',  'total_leg_business', 'power_leg_business', 'right_team', 'left_team', 'Referral_From', 'referralLink', 'Team_count', 'Level_incoum', 'reffral_income', 'Self_Earned', 'Total_Revenue', 'total_Principle'));
    }
}
