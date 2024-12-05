<?php

namespace App\Http\Controllers\Users;

use App\Services\SmartContractService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SmartContractController extends Controller
{
    protected $smartContractService;

    public function __construct(SmartContractService $smartContractService)
    {
        $this->smartContractService = $smartContractService;
    }

    public function withdraw(Request $request)
    {
        Log::info("Smart Contract Controller call functin");

        $user = auth()->user();
        $recipient = $user->user_address;
        $amount = $user->activation_balance;
        Log::info(" recipient = " . $recipient . "amount = " . $amount);
        try {

            $transactionHash = $this->smartContractService->withdraw($recipient, $amount);
            Log::info("Smart Contract transactionHash " . $transactionHash . " gggg",);

            return response()->json(['success' => true, 'transactionHash' => $transactionHash]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }
}
