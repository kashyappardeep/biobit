<?php

namespace App\Http\Controllers\Users;

use App\Services\SmartContractService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Process\Process;

class SmartContractController extends Controller
{
    protected $smartContractService;

    public function __construct(SmartContractService $smartContractService)
    {
        $this->smartContractService = $smartContractService;
    }

    public function withdraw(Request $request)
    {
        // Validate incoming parameters
        $user = auth()->user();
        $recipient = $user->user_address;
        $amount = 100;
        // Build the command to execute the Node.js script
        // $command = "node " . base_path('node-scripts/withdraw.js') . " $recipient $amount";
        $command = "\"C:\\Program Files\\nodejs\\node.exe\" " . base_path('node-scripts/withdraw.js') . " $recipient $amount";

        // Run the command and capture the output
        $process = Process::fromShellCommandline($command);
        $process->run();

        // Check for errors during execution
        if (!$process->isSuccessful()) {
            return response()->json([
                'success' => false,
                'error' => $process->getErrorOutput(),
            ]);
        }

        // Output the result of the smart contract call
        return response()->json([
            'success' => true,
            'transactionHash' => $process->getOutput(),
        ]);
    }
}
