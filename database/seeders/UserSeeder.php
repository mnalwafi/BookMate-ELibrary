<?php

namespace Database\Seeders;

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
        DB::table('users')->insert([
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin123'),
            'level' => 'admin'
        ]);
        DB::table('users')->insert([
            'email' => 'user1@user.com',
            'password' => Hash::make('userSatu'),
            'level' => 'user'
        ]);
        DB::table('users')->insert([
            'email' => 'user2@user.com',
            'password' => Hash::make('userDua'),
            'level' => 'user'
        ]);
    }
}
