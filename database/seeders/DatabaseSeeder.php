<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
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

        $this->call([
            BookSeeder::class,
            ReviewratingSeeder::class,
            RruserSeeder::class,
            UserSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
