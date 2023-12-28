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
        DB::table('music')->insert([
            'challenge_type' => 'Type 1',
            'title' => 'Sample Title 1',
            'genre' => 'Pop',
            'lyric' => 'Sample lyrics for song 1',
            'audio' => 1,
            'artist' => 'Sample Artist 1',
            'year_released' => '2022-01-01',
            'guess_duration' => 0,
            'status' => true,
            'point' => 0,
            'image' => 1,
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Type 2',
            'title' => 'Sample Title 2',
            'genre' => 'Pop',
            'lyric' => 'Sample lyrics for song 2',
            'audio' => 2,
            'artist' => 'Sample Artist 2',
            'year_released' => '2022-02-01',
            'guess_duration' => 0,
            'status' => true,
            'point' => 0,
            'image' => 2,
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Type 3',
            'title' => 'Sample Title 3',
            'genre' => 'Rock',
            'lyric' => 'Sample lyrics for song 3',
            'audio' => 3,
            'artist' => 'Sample Artist 3',
            'year_released' => '2022-03-01',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 3,
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Type 4',
            'title' => 'Sample Title 4',
            'genre' => 'Rock',
            'lyric' => 'Sample lyrics for song 4',
            'audio' => 4,
            'artist' => 'Sample Artist 4',
            'year_released' => '2022-04-01',
            'guess_duration' => 0,
            'status' => true,
            'point' => 0,
            'image' => 4,
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Type 5',
            'title' => 'Sample Title 5',
            'genre' => 'Country',
            'lyric' => 'Sample lyrics for song 5',
            'audio' => 5,
            'artist' => 'Sample Artist 5',
            'year_released' => '2022-05-01',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 5,
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Type 6',
            'title' => 'Sample Title 6',
            'genre' => 'Country',
            'lyric' => 'Sample lyrics for song 6',
            'audio' => 6,
            'artist' => 'Sample Artist 6',
            'year_released' => '2022-05-01',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 6,
        ]);
    }
}
