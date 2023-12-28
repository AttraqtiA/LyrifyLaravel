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
            'title' => 'Chapter 1',
            'description'  => 'Chapter 1 Desc',
            'total_point' => 100,
            'status' => true,
            'image' => 1
        ]);
        DB::table('chapters')->insert([
            'title' => 'Chapter 2',
            'description'  => 'Chapter 2 Desc',
            'total_point' => 100,
            'status' => true,
            'image' => 2
        ]);
        DB::table('chapters')->insert([
            'title' => 'Chapter 3',
            'description'  => 'Chapter 3 Desc',
            'total_point' => 100,
            'status' => true,
            'image' => 3
        ]);
        DB::table('chapters')->insert([
            'title' => 'Chapter 4',
            'description'  => 'Chapter 4 Desc',
            'total_point' => 100,
            'status' => true,
            'image' => 4
        ]);
    }
}
