<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MusicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ws tk bantu bikin 6, fix you mbe lalala, sisane isa banyak i ae, upload maneh lk gabut
        // lagune bbno& angel pol jerr
        DB::table('music')->insert([
            'challenge_type' => 'Chapter',
            'title' => 'Fix You',
            'genre' => 'Pop',
            'lyric' => "When you try your best, but you don't succeed",
            'youtube_link' => 'AQl5nFnZPwk',
            'artist' => 'Coldplay',
            'year_released' => '2005',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'fix_you.jpg',
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Chapter',
            'title' => 'Fix You',
            'genre' => 'Pop',
            'lyric' => 'When you love someone, but it goes to waste',
            'youtube_link' => 'vxQtby0s7iI',
            'artist' => 'Coldplay',
            'year_released' => '2005',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'fix_you.jpg',
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Chapter',
            'title' => 'Fix You',
            'genre' => 'Pop',
            'lyric' => 'Lights will guide you home',
            'youtube_link' => 'W891qcD-Da0',
            'artist' => 'Coldplay',
            'year_released' => '2005',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'fix_you.jpg',
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Chapter',
            'title' => 'Lalala',
            'genre' => 'Hip-Hop',
            'lyric' => 'When I popped off then your girl gave me just a little bit of lockjaw',
            'youtube_link' => 'QCmiwiSVYXI',
            'artist' => 'Y2K, bbno$',
            'year_released' => '2019',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'lalala.jpg',
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Chapter',
            'title' => 'Lalala',
            'genre' => 'Hip-Hop',
            'lyric' => 'Bankroll so low, I got nothing else that I can withdraw. Ran out the door',
            'youtube_link' => '2b3EzAqv_vM',
            'artist' => 'Y2K, bbno$',
            'year_released' => '2019',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'lalala.jpg',
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Chapter',
            'title' => 'Lalala',
            'genre' => 'Hip-Hop',
            'lyric' => 'Modest with my jewels but check the bank. Finally got that money, say my thanks',
            'youtube_link' => '3NIWWXfJ33A',
            'artist' => 'Y2K, bbno$',
            'year_released' => '2019',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'lalala.jpg',
        ]);
    }
}
