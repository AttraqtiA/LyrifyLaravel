<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = "Budi Doremi";
        $user->email = "budi123@gmail.com";
        $user->password = Hash::make('Budi12345');
        $user->bio = "Why are you g!";
        $user->birthdate = "1999-05-20";
        $user->gender = "Male";
        $user->save ();

        $user = new User();
        $user->name = "Usain Bold";
        $user->email = "ashcole@gmail.com";
        $user->password = Hash::make('Ash12345');
        $user->bio = "Im Fast as f boi!";
        $user->birthdate = "1999-05-20";
        $user->gender = "Male";
        $user->save ();
    }
}
