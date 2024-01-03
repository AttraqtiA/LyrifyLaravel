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
        //FIX YOU
        DB::table('levels')->insert([
            'chapter_id' => 1,
            'music_id' => 1,
            'difficulty' => 'Easy',
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 1,
            'music_id' => 2,
            'difficulty' => 'Normal',
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 1,
            'music_id' => 3,
            'difficulty' => 'Hard',
        ]);
        //LOVE STORY
        DB::table('levels')->insert([
            'chapter_id' => 1,
            'music_id' => 4,
            'difficulty' => 'Easy',
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 1,
            'music_id' => 5,
            'difficulty' => 'Normal',
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 1,
            'music_id' => 6,
            'difficulty' => 'Hard',
        ]);
        //VIVA LA VIDA
        DB::table('levels')->insert([
            'chapter_id' => 1,
            'music_id' => 7,
            'difficulty' => 'Easy',
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 1,
            'music_id' => 8,
            'difficulty' => 'Normal',
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 1,
            'music_id' => 9,
            'difficulty' => 'Hard',
        ]);
        //REWRITE TEH STARS
        DB::table('levels')->insert([
            'chapter_id' => 1,
            'music_id' => 10,
            'difficulty' => 'Easy',
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 1,
            'music_id' => 11,
            'difficulty' => 'Normal',
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 1,
            'music_id' => 12,
            'difficulty' => 'Hard',
        ]);
        //PREFECT
        DB::table('levels')->insert([
            'chapter_id' => 1,
            'music_id' => 13,
            'difficulty' => 'Easy',
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 1,
            'music_id' => 14,
            'difficulty' => 'Normal',
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 1,
            'music_id' => 15,
            'difficulty' => 'Hard',
        ]);
        //CHAPTER 2
        //LALALA
        DB::table('levels')->insert([
            'chapter_id' => 2,
            'music_id' => 16,
            'difficulty' => 'Easy',
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 2,
            'music_id' => 17,
            'difficulty' => 'Normal',
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 2,
            'music_id' => 18,
            'difficulty' => 'Hard',
        ]);
        //HISTORY
        DB::table('levels')->insert([
            'chapter_id' => 2,
            'music_id' => 19,
            'difficulty' => 'Easy',
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 2,
            'music_id' => 20,
            'difficulty' => 'Normal',
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 2,
            'music_id' => 21,
            'difficulty' => 'Hard',
        ]);
        //Young Wild and Free
        DB::table('levels')->insert([
            'chapter_id' => 2,
            'music_id' => 22,
            'difficulty' => 'Easy',
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 2,
            'music_id' => 23,
            'difficulty' => 'Normal',
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 2,
            'music_id' => 24,
            'difficulty' => 'Hard',
        ]);
        //Young Dumb & Broke
        DB::table('levels')->insert([
            'chapter_id' => 2,
            'music_id' => 25,
            'difficulty' => 'Easy',
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 2,
            'music_id' => 26,
            'difficulty' => 'Normal',
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 2,
            'music_id' => 27,
            'difficulty' => 'Hard',
        ]);
        //RAPGOD
        DB::table('levels')->insert([
            'chapter_id' => 2,
            'music_id' => 28,
            'difficulty' => 'Easy',
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 2,
            'music_id' => 29,
            'difficulty' => 'Normal',
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 2,
            'music_id' => 30,
            'difficulty' => 'Hard',
        ]);
    }
}
