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
}
