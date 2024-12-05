<?php

namespace App\Services;

use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use Illuminate\Support\Facades\Log;

class SmartContractService
{
    public function withdraw(string $recipient, int $amount)
    {
        Log::info("Smart Contract Service call functin");
        $nodeScript = base_path('node-scripts/withdraw.js'); // Adjust path to your Node.js script
        $process = new Process(['node', $nodeScript, $recipient, $amount]);
        Log::info("nodeScript = " . $nodeScript . " command = " . $process->getCommandLine());
        try {
            $process->mustRun();
            $output = $process->getOutput();
            Log::info("Smart Contract Service output = " . $output);
            return json_decode($output, true);
        } catch (ProcessFailedException $e) {
            throw new \RuntimeException("Smart Contract Call Failed: " . $e->getMessage());
        }
    }
}
