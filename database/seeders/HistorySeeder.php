<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('histories')->insert([
            'user_id' => 1,
            'chapter_id' => 1,
            'all_point' => 2500,
            'last_played' => '2023-01-01',
        ]);

        DB::table('histories')->insert([
            'user_id' => 2,
            'chapter_id' => 2,
            'all_point' => 2500,
            'last_played' => '2023-02-01',
        ]);
    }
}
