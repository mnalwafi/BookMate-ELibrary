<?php

namespace Database\Seeders;

use App\Models\Rruser;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RruserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rruser::factory(50)->create();
    }
}
