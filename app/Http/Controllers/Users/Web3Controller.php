<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Services\Web3Service;
use Illuminate\Http\Request;


class Web3Controller extends Controller
{
    protected $web3Service;

    public function __construct(Web3Service $web3Service)
    {
        $this->web3Service = $web3Service;
    }

    public function withdrawal(Request $request)
    {

        $user = auth()->user();
        $address = $user->user_address;
        $amount = $user->activation_balance;
        // Call the Web3 service to get the user's balance
        $balance = $this->web3Service->withdraw($address, $amount);

        return response()->json($balance);
    }
}
