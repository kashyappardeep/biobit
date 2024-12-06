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

        // dd($amount);
        $flag = $request->input('flag', '1');

        if ($flag == 2) {
            $amount = $user->activation_balance;
        } else {
            $amount = $user->reffeal_income;
        }

        try {
            $payload = [
                'recipient' => $recipient,
                'amount' => $amount, // Ensure this is a string if required
                'flag' => $flag,     // Use string if the API requires it
            ];
            // Call the external API
            $response = Http::post('http://biobitcoin.io:3000/api/withdraw', $payload);
            log::info('response =' . $response);
            // Check if the API call was successful
            if ($response->failed()) {

                return response()->json(['success' => false, 'message' => 'API request failed'], 500);
            }

            $responseData = $response->json();

            // Ensure the response contains a transaction hash
            if (!isset($responseData['transactionHash'])) {
                return response()->json(['success' => false, 'message' => 'Invalid API response'], 500);
            }
            if ($flag == 1) {

                $user->reffeal_income = 0;
                $user->save();
            }

            $user->activation_balance = 0;
            $user->save();

            // Save the transaction to the database
            TransactionHistory::create([
                'user_id' => $user->id,
                'amount' => $amount,
                'type' => "1",
                'tx_hash' => $responseData['transactionHash'],
            ]);



            // Return success response
            return response()->json([
                'success' => true,
                'txHash' => $responseData['transactionHash'],
            ]);
        } catch (\Exception $e) {
            // Handle errors
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}
