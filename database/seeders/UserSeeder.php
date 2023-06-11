<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => 'Muhammad Nashih Al Wafi',
            "username" => 'mnalwafi',
            "email" => 'mnalwafi@gmail.com',
            "phone-number" => '6288229793327',
            "password" => bcrypt('password'),
            "level" => 'admin'
        ]);

        User::create([
            "name" => 'Levianita Rahmawati',
            "username" => 'levintr',
            "email" => 'levi@gmail.com',
            "phone-number" => '6277208367729',
            "password" => bcrypt('password'),
            "level" => 'admin'
        ]);

        User::create([
            "name" => 'Farah',
            "username" => 'farahbns',
            "email" => 'farah@gmail.com',
            "phone-number" => '6287339163820',
            "password" => bcrypt('password'),
            "level" => 'user'
        ]);

        User::factory(10)->create();
    }
}
