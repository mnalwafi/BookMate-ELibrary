<?php

namespace Database\Factories;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create();

        $user_id = DB::table('users')->pluck('id');
        $reviewrating_id = DB::table('reviewratings')->pluck('id');
        return [
            'user_id' => $faker->randomElement($user_id),
            'reviewrating_id' => $faker->randomDigitNotNull(0),
            'ISBN' => $faker->isbn13(),
            'bahasa' => $faker->randomElement(['Indonesia', 'Inggris']),
            'judul' => $faker->sentence(),
            'penulis' => $faker->name(),
            'penerbit' => $faker->company(),
            'berat' => $faker->numberBetween(100,500),
            'lebar' => $faker->numberBetween(15,20),
            'panjang' => $faker->numberBetween(15,20),
            'deskripsi' => $faker->paragraph(20),
            'tanggalterbit' => $faker->dateTime(),
            'kuantitas' => $faker->numberBetween(20,50),
            'cover' => $faker->word(),
            'slug' => $faker->slug(),
        ];
    }
}
