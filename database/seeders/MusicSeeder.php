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
            'lyric' => 'When you try your ....., but you dont succeed',
            'option1' => 'best',
            'option2' => 'day',
            'option3' => 'west',
            'option4' => 'way',
            'option5' => 'self',
            'option6' => 'well',
            'answer_key' => 1,
            'youtube_link' => 'AQl5nFnZPwk',
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
            'lyric' => 'When you love someone, but it goes to .....',
            'option1' => 'best',
            'option2' => 'day',
            'option3' => 'west',
            'option4' => 'way',
            'option5' => 'waste',
            'option6' => 'well',
            'answer_key' => 5,
            'youtube_link' => 'vxQtby0s7iI',
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
            'lyric' => 'Lights will ..... you home',
            'option1' => 'white',
            'option2' => 'guide',
            'option3' => 'fight',
            'option4' => 'right',
            'option5' => 'write',
            'option6' => 'might',
            'answer_key' => 2,
            'youtube_link' => 'W891qcD-Da0',
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
            'lyric' => 'We were both ..... when I first saw you',
            'option1' => 'yang',
            'option2' => 'young',
            'option3' => 'yawn',
            'option4' => 'yarn',
            'option5' => 'yolk',
            'option6' => 'yunk',
            'answer_key' => 2,
            'youtube_link' => 'ep1U4gtuZTU',
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
            'lyric' => 'And I was ..... on the staircase
            Beggin you, Please dont go',
            'option1' => 'frying',
            'option2' => 'cried',
            'option3' => 'buying',
            'option4' => 'flying',
            'option5' => 'lying',
            'option6' => 'cryin',
            'answer_key' => 6,
            'youtube_link' => '43XEBGGHkmk',
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
            'lyric' => "Romeo, take me ..... we can be alone I'll be waiting",
            'option1' => 'somewhat',
            'option2' => 'someone',
            'option3' => 'somewhere',
            'option4' => 'somehow',
            'option5' => 'someday',
            'option6' => 'something',
            'answer_key' => 3,
            'youtube_link' => 'F3pKUxrk5A4',
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
            'lyric' => 'I used to rule the world Seas would rise when I gave the .....',
            'option1' => 'ward',
            'option2' => 'world',
            'option3' => 'wore',
            'option4' => 'word',
            'option5' => 'wired',
            'option6' => 'warred',
            'answer_key' => 4,
            'youtube_link' => 'A429odNmeRM',
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
            'lyric' => 'And I discovered that my castles stand Upon pillars of ..... and pillars of sand',
            'option1' => 'result',
            'option2' => 'salt',
            'option3' => 'fault',
            'option4' => 'assault',
            'option5' => 'cult',
            'option6' => 'vault',
            'answer_key' => 2,
            'youtube_link' => 'nZ67CH3Wjfg',
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
            'lyric' => 'I hear Jerusalem bells a-ringin Roman Cavalry ..... are singing',
            'option1' => 'choirs',
            'option2' => 'quiet',
            'option3' => 'quarters',
            'option4' => 'quire',
            'option5' => 'quirk',
            'option6' => 'chords',
            'answer_key' => 1,
            'youtube_link' => 'ZgE14Y0b9Dg',
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
            'lyric' => "You know I want you It's not a secret I try to .....",
            'option1' => 'side',
            'option2' => 'hide',
            'option3' => 'wide',
            'option4' => 'fight',
            'option5' => 'guide',
            'option6' => 'write',
            'answer_key' => 2,
            'youtube_link' => '4t8Ci5BA2Z8',
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
            'lyric' => "But you're hearing my heart So who can stop me if I ..... it's on my destiny?",
            'option1' => 'design',
            'option2' => 'desist',
            'option3' => 'descent',
            'option4' => 'decide',
            'option5' => 'devide',
            'option6' => 'deceit',
            'answer_key' => 4,
            'youtube_link' => 'Axph6S8RZs8',
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
            'lyric' => 'What if we rewrite the stars? Say you were made to be .....',
            'option1' => 'shine',
            'option2' => 'fine',
            'option3' => 'fine',
            'option4' => 'my',
            'option5' => 'mind',
            'option6' => 'mine',
            'answer_key' => 6,
            'youtube_link' => 'yrG9gfNnFgQ',
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
            'lyric' => "When I first saw you From across the .....",
            'option1' => 'gloom',
            'option2' => 'bloom',
            'option3' => 'zoom',
            'option4' => 'doom',
            'option5' => 'moon',
            'option6' => 'room',
            'answer_key' => 6,
            'youtube_link' => 'SjkCzj1bUy8',
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
            'lyric' => "And if you like having secret ..... rendezvous",
            'option1' => 'little',
            'option2' => 'bottle',
            'option3' => 'bitter',
            'option4' => 'settle',
            'option5' => 'kettle',
            'option6' => 'mettle',
            'answer_key' => 1,
            'youtube_link' => 'HlZXIRj13bs',
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
            'lyric' => "If you like to do whatever you've been ..... about",
            'option1' => 'streaming',
            'option2' => 'gleaming',
            'option3' => 'scheming',
            'option4' => 'dreaming',
            'option5' => 'seeming',
            'option6' => 'beaming',
            'answer_key' => 4,
            'youtube_link' => 'fBP-YoLcc3w',
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
            'lyric' => 'When I ..... off then your girl gave me just a little bit of lockjaw',
            'option1' => 'copped',
            'option2' => 'topped',
            'option3' => 'dropped',
            'option4' => 'popped',
            'option5' => 'hopped',
            'option6' => 'flopped',
            'answer_key' => 4,
            'youtube_link' => 'QCmiwiSVYXI',
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
            'lyric' => '..... with my jewels but check the bank Finally got that money, say my thanks',
            'option1' => 'modish',
            'option2' => 'modulate',
            'option3' => 'modern',
            'option4' => 'modify',
            'option5' => 'module',
            'option6' => 'modest',
            'answer_key' => 6,
            'youtube_link' => '3NIWWXfJ33A',
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
            'lyric' => 'Bankroll so low, I got nothing else that I can ..... Ran out the door',
            'option1' => 'withhold',
            'option2' => 'withdraw',
            'option3' => 'withstand',
            'option4' => 'withdrew',
            'option5' => 'without',
            'option6' => 'within',
            'answer_key' => 2,
            'youtube_link' => '2b3EzAqv_vM',
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
            When you ..... at me ",
            'option1' => 'took',
            'option2' => 'crook',
            'option3' => 'cook',
            'option4' => 'hook',
            'option5' => 'look',
            'option6' => 'book',
            'answer_key' => 5,
            'youtube_link' => 'Ecy7nJ_EstE',
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
            'lyric' => 'I know you said "gimme a hug", and I said "gimme a ....."',
            'option1' => 'breaker',
            'option2' => 'break',
            'option3' => 'brick',
            'option4' => 'brake',
            'option5' => 'brook',
            'option6' => 'breeze',
            'answer_key' => 2,
            'youtube_link' => 'e_X3LLOEQp8',
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
            'lyric' => "All these .....
            Let's work it out with me
            I don't think it hurts to give another try on it",
            'option1' => 'explosions',
            'option2' => 'cushions',
            'option3' => 'oceans',
            'option4' => 'cations',
            'option5' => 'evasions',
            'option6' => 'occasions',
            'answer_key' => 6,
            'youtube_link' => 'e_X3LLOEQp8',
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
            'lyric' => "Uh, and I don't even care
            'Cause if me and my ..... in there
            There's gon' be some weed in the air",
            'option1' => 'team',
            'option2' => 'steam',
            'option3' => 'dream',
            'option4' => 'beam',
            'option5' => 'cream',
            'option6' => 'stream',
            'answer_key' => 1,
            'youtube_link' => 'gEmJqtgXaWE',
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
            'lyric' => "So what we get .....
            So what we smoke weed",
            'option1' => 'drum',
            'option2' => 'drudge',
            'option3' => 'drank',
            'option4' => 'drunk',
            'option5' => 'trunk',
            'option6' => 'dunk',
            'answer_key' => 4,
            'youtube_link' => 'ZFYj9x4os5Q',
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
            That's how it's ..... to be
            Living young and wild and free",
            'option1' => 'deposed',
            'option2' => 'exposed',
            'option3' => 'opposed',
            'option4' => 'supposed',
            'option5' => 'composed',
            'option6' => 'opposed',
            'answer_key' => 4,
            'youtube_link' => 'H06OkMTSzyI',
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
            'lyric' => "So you're ..... thinking of me
            Just like I know you should",
            'option1' => 'spill',
            'option2' => 'skill',
            'option3' => 'still',
            'option4' => 'fill',
            'option5' => 'mill',
            'option6' => 'thrill',
            'answer_key' => 3,
            'youtube_link' => 'k0XXJPlr0eI',
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
            Young, young dumb and .....",
            'option1' => 'choke',
            'option2' => 'joke',
            'option3' => 'broke',
            'option4' => 'poke',
            'option5' => 'broke',
            'option6' => 'bloke',
            'answer_key' => 5,
            'youtube_link' => 'O07ygvv5d_o',
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
            'lyric' => "Jump then we ....., leave it all in the game of love",
            'option1' => 'link',
            'option2' => 'wink',
            'option3' => 'pink',
            'option4' => 'blink',
            'option5' => 'sink',
            'option6' => 'think',
            'answer_key' => 6,
            'youtube_link' => '42RwYoJSE80',
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
            'lyric' => "I'm beginnin' to feel like a Rap God, Rap God All my people from the ..... to the back nod, back nod",
            'option1' => 'brunt',
            'option2' => 'front',
            'option3' => 'hunt',
            'option4' => 'grunt',
            'option5' => 'blunt',
            'option6' => 'stunt',
            'answer_key' => 2,
            'youtube_link' => 'kAQIMXMUUIU',
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
            Did nothing but shoot for the Moon .....',
            'option1' => 'since',
            'option2' => 'winch',
            'option3' => 'mince',
            'option4' => 'prince',
            'option5' => 'winch',
            'option6' => 'vince',
            'answer_key' => 1,
            'youtube_link' => 'M0UbSzyjKW0',
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
            I make ..... music, you make elevator music",
            'option1' => 'elevate',
            'option2' => 'elevator',
            'option3' => 'elevated',
            'option4' => 'levitate',
            'option5' => 'elevating',
            'option6' => 'elevation',
            'answer_key' => 5,
            'youtube_link' => '0lTTtrIjhz4',
            'artist' => 'Eminem',
            'year_released' => '2013',
            'guess_duration' => 0,
            'status' => false,
            'point' => 0,
            'image' => 'rap_god.png',
        ]);
    }
}
