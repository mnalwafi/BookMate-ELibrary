<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Reviewrating;
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

        $book_id = DB::table('books')->select('id')->get();
        return [
            'book_id' => $faker->numberBetween(1,20),
            'rruser_id' => $faker->numberBetween(1,50),
            'username' => $faker->unique()->userName(),
            'name' => $faker->Name(),
            'email' => $faker->unique()->safeEmail(),
            'password' => $faker->password(8,10),
            'phone-number' => $faker->unique()->phoneNumber(),
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
