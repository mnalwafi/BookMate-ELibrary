<?php

namespace Database\Factories;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create();

        $book_id = DB::table('books')->pluck('id');
        return [
            'book_id' => $faker->randomDigitNot(0),
            'username' => $faker->unique()->userName(),
            'email' => $faker->unique()->safeEmail(),
            'password' => $faker->password(8,10),
            'nomortelp' => $faker->unique()->phoneNumber(),
            'level' => $faker->randomElement(['admin', 'user'])
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
