<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('levels')->insert([
            'chapter_id' => 1,
            'music_id' => 1,
            'difficulty' => 'Normal',
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 1,
            'music_id' => 2,
            'difficulty' => 'Hard',
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 2,
            'music_id' => 4,
            'difficulty' => 'Normal',
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 2,
            'music_id' => 5,
            'difficulty' => 'Hard',
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 3,
            'music_id' => 7,
            'difficulty' => 'Normal',
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 3,
            'music_id' => 8,
            'difficulty' => 'Hard',
        ]);
    }
}
