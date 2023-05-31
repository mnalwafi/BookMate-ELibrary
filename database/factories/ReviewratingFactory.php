<?php

namespace Database\Factories;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\reviewrating>
 */
class ReviewratingFactory extends Factory
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
            'user_id' => $faker->randomElement($user_id),
            'book_id' => $faker->randomElement($book_id),
            'rating' => $faker->numberBetween(3,5),
            'review' => $faker->paragraph(),
            'jumlah' => $faker->numberBetween(1,10),
        ];
    }
}
