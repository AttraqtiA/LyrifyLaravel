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
        //FIX YOU (AMAN)
        DB::table('music')->insert([
            'challenge_type' => 'Chapter 1',
            'title' => 'Fix You',
            'genre' => 'Pop',
            'lyric' => 'When you try your best, but you dont succeed',
            'youtube_link' => 'https://youtu.be/AQl5nFnZPwk?si=CFEC5Px4H7XkKFDR',
            'artist' => 'Coldplay',
            'year_released' => '2005',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'fix_you.jpg',
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Chapter 1',
            'title' => 'Fix You',
            'genre' => 'Pop',
            'lyric' => 'When you love someone, but it goes to waste',
            'youtube_link' => 'https://youtu.be/vxQtby0s7iI',
            'artist' => 'Coldplay',
            'year_released' => '2005',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'fix_you.jpg',
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Chapter 1',
            'title' => 'Fix You',
            'genre' => 'Pop',
            'lyric' => 'Lights will guide you home',
            'youtube_link' => 'https://youtu.be/W891qcD-Da0?si=vlFo45GJPLwGZlAN',
            'artist' => 'Coldplay',
            'year_released' => '2005',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'fix_you.jpg',
        ]);
        //LOVE STORY (AMAN)
        DB::table('music')->insert([
            'challenge_type' => 'Chapter 1',
            'title' => 'Love Story',
            'genre' => 'Pop',
            'lyric' => 'We were both young when I first saw you',
            'youtube_link' => 'https://youtu.be/ep1U4gtuZTU',
            'artist' => 'Taylor Swift',
            'year_released' => '2008',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'love_story.png',
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Chapter 1',
            'title' => 'Love Story',
            'genre' => 'Pop',
            'lyric' => 'And I was cryin on the staircase
            Beggin you, Please dont go',
            'youtube_link' => 'https://youtu.be/43XEBGGHkmk?si=1uK5F0Qci3AFqyRG',
            'artist' => 'Taylor Swift',
            'year_released' => '2008',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'love_story.png',
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Chapter 1',
            'title' => 'Love Story',
            'genre' => 'Pop',
            'lyric' => "Romeo, take me somewhere we can be alone I'll be waiting",
            'youtube_link' => 'https://youtu.be/F3pKUxrk5A4?si=bLNvkQbUjQp57nd0',
            'artist' => 'Taylor Swift',
            'year_released' => '2008',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'love_story.png',
        ]);
        //VIVA LA VIDA (AMAN)
        DB::table('music')->insert([
            'challenge_type' => 'Chapter 1',
            'title' => 'Viva La Vida',
            'genre' => 'Pop',
            'lyric' => 'I used to rule the world Seas would rise when I gave the word',
            'youtube_link' => 'https://youtu.be/A429odNmeRM?si=Nioyjs5lF0XWP4Mz',
            'artist' => 'Coldplay',
            'year_released' => '2008',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'vivalavida.jpg',
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Chapter 1',
            'title' => 'Viva La Vida',
            'genre' => 'Pop',
            'lyric' => 'And I discovered that my castles stand Upon pillars of salt and pillars of sand',
            'youtube_link' => 'https://youtu.be/nZ67CH3Wjfg?si=xqCwbQvcZY7sPGsQ',
            'artist' => 'Coldplay',
            'year_released' => '2008',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'vivalavida.jpg',
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Chapter 1',
            'title' => 'Viva La Vida',
            'genre' => 'Pop',
            'lyric' => 'I hear Jerusalem bells a-ringin Roman Cavalry choirs are singing',
            'youtube_link' => 'https://youtu.be/ZgE14Y0b9Dg?si=WbxEpOBL0_qImuFy',
            'artist' => 'Coldplay',
            'year_released' => '2008',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'vivalavida.jpg',
        ]);
        //REWRITE TEH STARS (AMAN)
        DB::table('music')->insert([
            'challenge_type' => 'Chapter 1',
            'title' => 'Rewrite The Stars',
            'genre' => 'Pop',
            'lyric' => "You know I want you It's not a secret I try to hide",
            'youtube_link' => 'https://youtu.be/4t8Ci5BA2Z8',
            'artist' => 'Anne-Marie & James Arthur',
            'year_released' => '2017',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'greatest_showman.jpg',
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Chapter 1',
            'title' => 'Rewrite The Stars',
            'genre' => 'Pop',
            'lyric' => "But you're hearing my heart So who can stop me if I decide it's on my destiny?",
            'youtube_link' => 'https://youtu.be/Axph6S8RZs8',
            'artist' => 'Anne-Marie & James Arthur',
            'year_released' => '2017',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'greatest_showman.jpg',
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Chapter 1',
            'title' => 'Rewrite The Stars',
            'genre' => 'Pop',
            'lyric' => 'What if we rewrite the stars? Say you were made to be mine',
            'youtube_link' => 'https://youtu.be/yrG9gfNnFgQ',
            'artist' => 'Anne-Marie & James Arthur',
            'year_released' => '2017',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'greatest_showman.jpg',
        ]);
        //PREFECT (AMAN)
        DB::table('music')->insert([
            'challenge_type' => 'Chapter 1',
            'title' => 'Perfect',
            'genre' => 'Pop',
            'lyric' => "When I first saw you From across the room",
            'youtube_link' => 'https://youtu.be/SjkCzj1bUy8?si=eKkV_rzrwI1VIzWd',
            'artist' => 'One Direction',
            'year_released' => '2015',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'one_direction.png',
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Chapter 1',
            'title' => 'Perfect',
            'genre' => 'Pop',
            'lyric' => "And if you like having secret little rendezvous",
            'youtube_link' => 'https://youtu.be/HlZXIRj13bs?si=m2GD8-4OYL_HDG0k',
            'artist' => 'One Direction',
            'year_released' => '2015',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'one_direction.png',
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Chapter 1',
            'title' => 'Perfect',
            'genre' => 'Pop',
            'lyric' => "If you like to do whatever you've been dreaming about",
            'youtube_link' => 'https://youtu.be/fBP-YoLcc3w',
            'artist' => 'One Direction',
            'year_released' => '2015',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'one_direction.png',
        ]);
        //CHAPTER 2
        //LALALA (AMAN)
        DB::table('music')->insert([
            'challenge_type' => 'Chapter 2',
            'title' => 'Lalala',
            'genre' => 'Hip-Hop',
            'lyric' => 'When I popped off then your girl gave me just a little bit of lockjaw',
            'youtube_link' => 'https://youtu.be/QCmiwiSVYXI?si=ZWiMpRGJz5Hc78kA',
            'artist' => 'Y2K, bbno$',
            'year_released' => '2019',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'lalala.jpeg',
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Chapter 2',
            'title' => 'Lalala',
            'genre' => 'Hip-Hop',
            'lyric' => 'Modest with my jewels but check the bank Finally got that money, say my thanks',
            'youtube_link' => 'https://youtu.be/3NIWWXfJ33A',
            'artist' => 'Y2K, bbno$',
            'year_released' => '2019',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'lalala.jpeg',
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Chapter 2',
            'title' => 'Lalala',
            'genre' => 'Hip-Hop',
            'lyric' => 'Bankroll so low, I got nothing else that I can withdraw Ran out the door',
            'youtube_link' => 'https://youtu.be/2b3EzAqv_vM?si=RqHYTvAO6Y-RQGE_',
            'artist' => 'Y2K, bbno$',
            'year_released' => '2019',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'lalala.jpeg',
        ]);
        //HISTORY
        DB::table('music')->insert([
            'challenge_type' => 'Chapter 2',
            'title' => 'History',
            'genre' => 'Hip-Hop',
            'lyric' => "We got history
            Got me feeling the nostalgia
            When you look at me ",
            'youtube_link' => 'https://youtu.be/Ecy7nJ_EstE',
            'artist' => 'Rich Brian',
            'year_released' => '2018',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'history.jpg',
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Chapter 2',
            'title' => 'History',
            'genre' => 'Hip-Hop',
            'lyric' => 'I know you said "gimme a hug", and I said "gimme a break"',
            'youtube_link' => 'https://youtu.be/e_X3LLOEQp8',
            'artist' => 'Rich Brian',
            'year_released' => '2018',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'history.jpg',
        ]);
        //belum upload youtube
        DB::table('music')->insert([
            'challenge_type' => 'Chapter 2',
            'title' => 'History',
            'genre' => 'Hip-Hop',
            'lyric' => "All these occasions
            Let's work it out with me
            I don't think it hurts to give another try on it",
            'youtube_link' => 'https://youtu.be/e_X3LLOEQp8',
            'artist' => 'Rich Brian',
            'year_released' => '2018',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'history.jpg',
        ]);
        //Young Wild and Free
        DB::table('music')->insert([
            'challenge_type' => 'Chapter 2',
            'title' => 'Young Wild and Free',
            'genre' => 'Hip-Hop',
            'lyric' => "So what we get drunk
            So what we smoke weed",
            'youtube_link' => 'https://youtu.be/ZFYj9x4os5Q',
            'artist' => 'Wiz Khalifa & Snoop Dogg',
            'year_released' => '2021',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'wild.png',
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Chapter 2',
            'title' => 'Young Wild and Free',
            'genre' => 'Hip-Hop',
            'lyric' => "So what we go out
            That's how it's supposed to be
            Living young and wild and free",
            'youtube_link' => 'https://youtu.be/H06OkMTSzyI',
            'artist' => 'Wiz Khalifa & Snoop Dogg',
            'year_released' => '2021',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'wild.png',
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Chapter 2',
            'title' => 'Young Wild and Free',
            'genre' => 'Hip-Hop',
            'lyric' => "Uh, and I don't even care
            'Cause if me and my team in there
            There's gon' be some weed in the air",
            'youtube_link' => 'https://youtu.be/gEmJqtgXaWE',
            'artist' => 'Wiz Khalifa & Snoop Dogg',
            'year_released' => '2021',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'wild.png',
        ]);
        //YOUNG DUMB & BROKE
        DB::table('music')->insert([
            'challenge_type' => 'Chapter 2',
            'title' => 'Young Dumb & Broke',
            'genre' => 'Hip-Hop',
            'lyric' => "So you're still thinking of me
            Just like I know you should",
            'youtube_link' => 'https://youtu.be/k0XXJPlr0eI',
            'artist' => 'Khalid            ',
            'year_released' => '2017',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'young.png',
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Chapter 2',
            'title' => 'Young Dumb & Broke',
            'genre' => 'Hip-Hop',
            'lyric' => "Young dumb
            Young, young dumb and broke",
            'youtube_link' => 'https://youtu.be/O07ygvv5d_o',
            'artist' => 'Khalid',
            'year_released' => '2017',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'young.png',
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Chapter 2',
            'title' => 'Young Dumb & Broke',
            'genre' => 'Hip-Hop',
            'lyric' => "Jump then we think, leave it all in the game of love",
            'youtube_link' => 'https://youtu.be/42RwYoJSE80',
            'artist' => 'Khalid',
            'year_released' => '2017',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'young.png',
        ]);
        //RAPGOD
        DB::table('music')->insert([
            'challenge_type' => 'Chapter 2',
            'title' => 'Rap God',
            'genre' => 'Hip-Hop',
            'lyric' => "I'm beginnin' to feel like a Rap God, Rap God All my people from the front to the back nod, back nod",
            'youtube_link' => 'https://youtu.be/kAQIMXMUUIU',
            'artist' => 'Eminem',
            'year_released' => '2013',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'rap_god.png',
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Chapter 2',
            'title' => 'Rap God',
            'genre' => 'Hip-Hop',
            'lyric' => 'Everybody loves to root for a nuisance
            Hit the Earth like an asteroid
            Did nothing but shoot for the Moon since',
            'youtube_link' => 'https://youtu.be/M0UbSzyjKW0',
            'artist' => 'Eminem',
            'year_released' => '2013',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'rap_god.png',
        ]);
        DB::table('music')->insert([
            'challenge_type' => 'Chapter 2',
            'title' => 'Rap God',
            'genre' => 'Hip-Hop',
            'lyric' => "'Cause I know the way to get 'em motivated
            I make elevating music, you make elevator music",
            'youtube_link' => 'https://youtu.be/0lTTtrIjhz4',
            'artist' => 'Eminem',
            'year_released' => '2013',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'rap_god.png',
        ]);
    }
}
