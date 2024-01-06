<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('chapters')->insert([
            'title' => '"Melodic Radiance: Exploring the Pop Realm"',
            'description' => "Embark on a melodic journey through the world of Pop in this chapter. Engage in quests that test your rhythmic prowess and discover the diverse landscapes of Pop music.",
            'image' => 'pop.png'
        ]);
        DB::table('chapters')->insert([
            'title' => '"Urban Chronicles: Navigating the Hip Hop Scene"',
            'description' => "Immerse yourself in the dynamic world of Hip Hop in this chapter. Dive into electrifying beats, engage in challenges showcasing your rhythmic and lyrical finesse, and explore the influential evolution of Hip Hop.",
            'image' => 'hiphop.png'
        ]);
    }
}
