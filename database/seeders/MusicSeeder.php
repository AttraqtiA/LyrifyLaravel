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
            'title' => 'Fix You - Coldplay',
            'genre' => 'Pop',
            'lyric' => 'Sample lyrics for song 1',
            'youtube_link' => 'https://youtu.be/AQl5nFnZPwk?si=CFEC5Px4H7XkKFDR',
            'artist' => 'Sample Artist 1',
            'year_released' => '2022-01-01',
            'guess_duration' => 0,
            'status' => true,
            'point' => 0,
            'image' => 'picture_1',
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Type 2',
            'title' => 'Fix You - Coldplay',
            'genre' => 'Pop',
            'lyric' => 'Sample lyrics for song 2',
            'youtube_link' => 'https://youtu.be/vxQtby0s7iI',
            'artist' => 'Sample Artist 2',
            'year_released' => '2022-02-01',
            'guess_duration' => 0,
            'status' => true,
            'point' => 0,
            'image' => 'picture_1',
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Type 3',
            'title' => 'Fix You - Coldplay',
            'genre' => 'Pop',
            'lyric' => 'Sample lyrics for song 3',
            'youtube_link' => 'https://youtu.be/W891qcD-Da0?si=vlFo45GJPLwGZlAN',
            'artist' => 'Sample Artist 3',
            'year_released' => '2022-03-01',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'picture_2',
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Type 4',
            'title' => 'Love Story - Taylor Swift',
            'genre' => 'Pop',
            'lyric' => 'Sample lyrics for song 4',
            'youtube_link' => 'https://youtu.be/ep1U4gtuZTU',
            'artist' => 'Sample Artist 4',
            'year_released' => '2022-04-01',
            'guess_duration' => 0,
            'status' => true,
            'point' => 0,
            'image' => 'picture_2',
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Type 5',
            'title' => 'Love Story - Taylor Swift',
            'genre' => 'Pop',
            'lyric' => 'Sample lyrics for song 5',
            'youtube_link' => 'https://youtu.be/43XEBGGHkmk?si=1uK5F0Qci3AFqyRG',
            'artist' => 'Sample Artist 5',
            'year_released' => '2022-05-01',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'picture_3',
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Type 6',
            'title' => 'Love Story - Taylor Swift',
            'genre' => 'Pop',
            'lyric' => 'Sample lyrics for song 6',
            'youtube_link' => 'https://youtu.be/F3pKUxrk5A4?si=bLNvkQbUjQp57nd0',
            'artist' => 'Sample Artist 6',
            'year_released' => '2022-05-01',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'picture_3',
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Type 7',
            'title' => 'Y2K, bbno$ - Lalala',
            'genre' => 'Hip-Hop',
            'lyric' => 'Sample lyrics for song 4',
            'youtube_link' => 'https://youtu.be/QCmiwiSVYXI?si=ZWiMpRGJz5Hc78kA',
            'artist' => 'Sample Artist 4',
            'year_released' => '2022-04-01',
            'guess_duration' => 0,
            'status' => true,
            'point' => 0,
            'image' => 'picture_2',
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Type 8',
            'title' => 'Y2K, bbno$ - Lalala',
            'genre' => 'Hip-Hop',
            'lyric' => 'Sample lyrics for song 5',
            'youtube_link' => 'https://youtu.be/2b3EzAqv_vM?si=keXtiYYv6mim5e98',
            'artist' => 'Sample Artist 5',
            'year_released' => '2022-05-01',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'picture_3',
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Type 9',
            'title' => 'Y2K, bbno$ - Lalala',
            'genre' => 'Hip-Hop',
            'lyric' => 'Sample lyrics for song 6',
            'youtube_link' => 'https://youtu.be/3NIWWXfJ33A?si=FZKt2A_hxIR5Eb1_',
            'artist' => 'Sample Artist 6',
            'year_released' => '2022-05-01',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'picture_3',
        ]);
    }
}
