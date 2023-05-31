<?php

namespace Database\Seeders;

use App\Models\Reviewrating;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReviewratingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reviewrating::factory(20)->create();
    }
}
