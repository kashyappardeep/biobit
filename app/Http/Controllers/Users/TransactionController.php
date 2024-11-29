<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TransactionHistory;

class TransactionController extends Controller
{
    public function index()
    {

        $History = TransactionHistory::where('user_id', auth()->id())->get();
        // dd($History);
        return view('users.transaction', compact('History'));
    }
    public function staking_income()
    {

        $History = TransactionHistory::where('type', 4)->where('user_id', auth()->id())->get();
        // dd($History);
        return view('users.incomereports.stakingincome', compact('History'));
    }
    public function binary_income()
    {

        $History = TransactionHistory::where('type', 8)->where('user_id', auth()->id())->get();
        // dd($History);
        return view('users.incomereports.binaryincome', compact('History'));
    }
    public function refferal_income()
    {

        $History = TransactionHistory::where('type', 2)->where('user_id', auth()->id())->get();
        // dd($History);
        return view('users.incomereports.refferalincome', compact('History'));
    }
    public function level_income()
    {

        $History = TransactionHistory::where('type', 5)->where('user_id', auth()->id())->get();
        // dd($History);
        return view('users.incomereports.levelincome', compact('History'));
    }
}
