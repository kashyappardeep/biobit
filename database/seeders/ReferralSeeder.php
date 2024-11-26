<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReferralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('referrals')->insert([
            [
                'name' => 'Level 1',
                'R_L' => '1',
                'R_P' => '10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Level 2',
                'R_L' => '2',
                'R_P' => '8',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Level 3',
                'R_L' => '3',
                'R_P' => '7',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Level 4',
                'R_L' => '4',
                'R_P' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Level 5',
                'R_L' => '5',
                'R_P' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Level 6',
                'R_L' => '6',
                'R_P' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Level 7',
                'R_L' => '7',
                'R_P' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Level 8',
                'R_L' => '8',
                'R_P' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Level 9',
                'R_L' => '9',
                'R_P' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Level 10',
                'R_L' => '10',
                'R_P' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Level 11',
                'R_L' => '11',
                'R_P' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Level 12',
                'R_L' => '12',
                'R_P' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Level 13',
                'R_L' => '13',
                'R_P' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Level 14',
                'R_L' => '14',
                'R_P' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Level 15',
                'R_L' => '15',
                'R_P' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Level 16',
                'R_L' => '16',
                'R_P' => '0.5',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Level 17',
                'R_L' => '17',
                'R_P' => '0.5',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Level 18',
                'R_L' => '18',
                'R_P' => '0.5',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Level 19',
                'R_L' => '19',
                'R_P' => '0.5',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Level 20',
                'R_L' => '20',
                'R_P' => '0.5',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Level 21',
                'R_L' => '21',
                'R_P' => '0.25',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Level 22',
                'R_L' => '22',
                'R_P' => '0.25',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Level 23',
                'R_L' => '23',
                'R_P' => '0.25',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Level 24',
                'R_L' => '24',
                'R_P' => '0.25',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Level 25',
                'R_L' => '25',
                'R_P' => '0.25',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Level 26',
                'R_L' => '26',
                'R_P' => '0.25',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Level 27',
                'R_L' => '27',
                'R_P' => '0.25',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Level 28',
                'R_L' => '28',
                'R_P' => '0.25',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Level 29',
                'R_L' => '29',
                'R_P' => '0.25',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Level 30',
                'R_L' => '30',
                'R_P' => '0.25',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
