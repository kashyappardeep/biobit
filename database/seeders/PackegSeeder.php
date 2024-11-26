<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackegSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('packegs')->insert([
            [
                'name' => 'Basic Plan',
                'daily_ear_per' => '0.4',
                'days' => '30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Standard Plan',
                'daily_ear_per' => '0.5',
                'days' => '90',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Premium Plan',
                'daily_ear_per' => '0.6',
                'days' => '180',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Premium Plan',
                'daily_ear_per' => '0.75',
                'days' => '360',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
