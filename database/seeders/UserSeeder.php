<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'John Doe',
            'image' => "profile_default.png",
            'email' => 'john.doe@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'birthdate' => '1990-01-01',
            'registration_date' => now(),
            'gender' => '0',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'achievement' => 0,
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Hansen Vendi Agus',
            'image' => "profile_default.png",
            'email' => 'hansenvendiagusabc@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'birthdate' => '1990-01-01',
            'registration_date' => now(),
            'gender' => '0',
            'description' => 'Lu olang punya muka pengen gw hantam a!',
            'achievement' => 0,
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
