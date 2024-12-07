<?php

namespace App\Http\Controllers\Users;

use App\Services\SmartContractService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TransactionHistory;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Process\Process;
use Illuminate\Support\Facades\Http;

class SmartContractController extends Controller
{
    protected $smartContractService;

    public function __construct(SmartContractService $smartContractService)
    {
        $this->smartContractService = $smartContractService;
    }

    public function withdraw(Request $request)
    {


        // Get user and necessary details
        $user = auth()->user();
        $recipient = $user->user_address; // Assuming 'user_address' is stored for the user
        $flag = $request->flag;

        $amount = ($flag == 1) ? $user->activation_balance : $user->reffeal_income;



        if ($amount < 10) {
            return response()->json(['success' => false, 'message' => 'Min Withdrawal is 10 USDT']);
        }

        $admin_charge = $amount * 10 / 100;
        $amount = $amount - $admin_charge; // Debug override
        Log::info('Final amount after admin charge:', ['amount' => $amount]);

        try {
            // Prepare the payload
            $payload = [
                'recipient' => $recipient,
                'amount' => (string)$amount,
                'flag' => (string)$flag,
            ];

            Log::info('API Request Payload:', $payload); // Correct array logging

            // Call the external API
            $response = Http::post('http://biobitcoin.io:3000/api/withdraw', $payload);

            Log::info('API Response:', ['response' => $response->body()]);

            if ($response->failed()) {
                Log::error('API request failed:', ['error' => $response->body()]);
                return response()->json(['success' => false, 'message' => 'API request failed'], 500);
            }

            $responseData = $response->json();

            if (!isset($responseData['transactionHash'])) {
                return response()->json(['success' => false, 'message' => 'Invalid API response'], 500);
            }

            // Update user balances
            if ($flag == 1) {
                $user->activation_balance = 0;
            } else {
                $user->reffeal_income = 0;
            }
            $user->save();

            // Save the transaction to the database
            TransactionHistory::create([
                'user_id' => $user->id,
                'amount' => $amount,
                'type' => "1",
                'tx_hash' => $responseData['transactionHash'],
            ]);

            return response()->json([
                'success' => true,
                'txHash' => $responseData['transactionHash'],
            ]);
        } catch (\Exception $e) {
            Log::error('Withdrawal process error:', ['exception' => $e->getMessage()]);
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }
}
