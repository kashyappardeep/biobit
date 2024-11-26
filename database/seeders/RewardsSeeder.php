<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RewardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rewards')->insert([
            [
                'name' => 'Bronze',
                'team_business' => '10000',
                'self_business' => '100',
                'reward' => '250',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Silver',
                'team_business' => '20000',
                'self_business' => '500',
                'reward' => '500',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gold',
                'team_business' => '50000',
                'self_business' => '2000',
                'reward' => '1000',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Platinum',
                'team_business' => '3 Gold Achivers ',
                'self_business' => '2500',
                'reward' => '8000',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Diamond',
                'team_business' => '3 platinum Achivers ',
                'self_business' => '3000',
                'reward' => '25000',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Ruby',
                'team_business' => '3  Diamond
Achivers',
                'self_business' => '4000',
                'reward' => '75000',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Emerald',
                'team_business' => '3 Ruby Achivers ',
                'self_business' => '5000',
                'reward' => '250000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
