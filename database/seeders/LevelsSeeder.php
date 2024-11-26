<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelsSeeder extends Seeder
{
    public function run()
    {
        DB::table('levels')->insert([
            [
                'level' => '1',
                'L_P' => 50,
                'direct_referals' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'level' => '2',
                'L_P' => 20,
                'direct_referals' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'level' => '3',
                'L_P' => 10,
                'direct_referals' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'level' => '4',
                'L_P' => 5,
                'direct_referals' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'level' => '5',
                'L_P' => 3,
                'direct_referals' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'level' => '6',
                'L_P' => 3,
                'direct_referals' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'level' => '7',
                'L_P' => 3,
                'direct_referals' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'level' => '8',
                'L_P' => 3,
                'direct_referals' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'level' => '9',
                'L_P' => 3,
                'direct_referals' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'level' => '10',
                'L_P' => 3,
                'direct_referals' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'level' => '11',
                'L_P' => 2,
                'direct_referals' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'level' => '12',
                'L_P' => 2,
                'direct_referals' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'level' => '13',
                'L_P' => 2,
                'direct_referals' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'level' => '14',
                'L_P' => 2,
                'direct_referals' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'level' => '15',
                'L_P' => 2,
                'direct_referals' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'level' => '16',
                'L_P' => 1,
                'direct_referals' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'level' => '17',
                'L_P' => 1,
                'direct_referals' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'level' => '18',
                'L_P' => 1,
                'direct_referals' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'level' => '19',
                'L_P' => 1,
                'direct_referals' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'level' => '20',
                'L_P' => 1,
                'direct_referals' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'level' => '21',
                'L_P' => 0.5,
                'direct_referals' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'level' => '22',
                'L_P' => 0.5,
                'direct_referals' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'level' => '23',
                'L_P' => 0.5,
                'direct_referals' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'level' => '24',
                'L_P' => 0.5,
                'direct_referals' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'level' => '25',
                'L_P' => 0.5,
                'direct_referals' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'level' => '26',
                'L_P' => 0.5,
                'direct_referals' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'level' => '27',
                'L_P' => 0.5,
                'direct_referals' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'level' => '28',
                'L_P' => 0.5,
                'direct_referals' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'level' => '29',
                'L_P' => 0.5,
                'direct_referals' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'level' => '30',
                'L_P' => 0.5,
                'direct_referals' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
