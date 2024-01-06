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
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 1,
            'music_id' => 2,
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 1,
            'music_id' => 3,
        ]);
        //LOVE STORY
        DB::table('levels')->insert([
            'chapter_id' => 1,
            'music_id' => 4,
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 1,
            'music_id' => 5,
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 1,
            'music_id' => 6,
        ]);
        //VIVA LA VIDA
        DB::table('levels')->insert([
            'chapter_id' => 1,
            'music_id' => 7,
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 1,
            'music_id' => 8,
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 1,
            'music_id' => 9,
        ]);
        //REWRITE TEH STARS
        DB::table('levels')->insert([
            'chapter_id' => 1,
            'music_id' => 10,
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 1,
            'music_id' => 11,
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 1,
            'music_id' => 12,
        ]);
        //PREFECT
        DB::table('levels')->insert([
            'chapter_id' => 1,
            'music_id' => 13,
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 1,
            'music_id' => 14,
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 1,
            'music_id' => 15,
        ]);
        //CHAPTER 2
        //LALALA
        DB::table('levels')->insert([
            'chapter_id' => 2,
            'music_id' => 16,
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 2,
            'music_id' => 17,
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 2,
            'music_id' => 18,
        ]);
        //HISTORY
        DB::table('levels')->insert([
            'chapter_id' => 2,
            'music_id' => 19,
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 2,
            'music_id' => 20,
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 2,
            'music_id' => 21,
        ]);
        //Young Wild and Free
        DB::table('levels')->insert([
            'chapter_id' => 2,
            'music_id' => 22,
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 2,
            'music_id' => 23,
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 2,
            'music_id' => 24,
        ]);
        //Young Dumb & Broke
        DB::table('levels')->insert([
            'chapter_id' => 2,
            'music_id' => 25,
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 2,
            'music_id' => 26,
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 2,
            'music_id' => 27,
        ]);
        //RAPGOD
        DB::table('levels')->insert([
            'chapter_id' => 2,
            'music_id' => 28,
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 2,
            'music_id' => 29,
        ]);
        DB::table('levels')->insert([
            'chapter_id' => 2,
            'music_id' => 30,
        ]);
    }
}
