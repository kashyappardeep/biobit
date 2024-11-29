<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class DistributeBinaryIncome extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'binary:distribute';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Distribute binary income to users based on their team business';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $users = User::all();

        foreach ($users as $user) {
            $teamBusiness = $user->calculateTeamBusiness();

            $processed = $user->binary_processed ?? 0;
            $leftBusiness = $teamBusiness['left_business'];
            $rightBusiness = $teamBusiness['right_business'];

            $newLeft = $leftBusiness - $processed;
            $newRight = $rightBusiness - $processed;

            $matchingBusiness = min($newLeft, $newRight);

            if ($matchingBusiness > 0) {
                $binaryIncome = $matchingBusiness * 0.10;

                $user->binary_income += $binaryIncome;
                $user->binary_processed += $matchingBusiness;

                $user->save();

                $user->transactions()->create([
                    'user_id' => $user->id,
                    'amount' => $binaryIncome,
                    'type' => 8,
                ]);

                $this->info("Distributed $binaryIncome to User ID: {$user->id}");
            }
        }

        $this->info('Binary income distribution completed.');
    }
}
