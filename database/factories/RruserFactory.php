<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Book;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\rruser>
 */
class RruserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create();

        $user_id = DB::table('users')->pluck('id')->toArray();
        $book_id = DB::table('books')->pluck('id')->toArray();
        return [
            'user_id' => $faker->numberBetween(1,10),
            'book_id' => $faker->numberBetween(1,20),
            'rating' => $faker->numberBetween(1,5),
            'review' => $faker->paragraph(),
        ];
    }
}
