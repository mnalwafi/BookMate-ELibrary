<?php

namespace Database\Factories;

use App\Models\reviewrating;
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

        $isbn = ['','','','','','','','','','','','','','','','','','','',''];

        $user_id = DB::table('users')->pluck('id')->toArray();
        $reviewrating_id = DB::table('reviewratings')->pluck('id')->toArray();
        $rruser_id = DB::table('rrusers')->pluck('id')->toArray();
        return [
            'user_id' => $faker->numberBetween(1,10),
            'isbn' => $faker->$isbn,
            'bahasa' => $faker->randomElement(['Indonesia', 'Inggris']),
            'judul' => $faker->sentence(),
            'penulis' => $faker->name(),
            'penerbit' => $faker->company(),
            'jumlahHalaman' => $faker->numberBetween(200,500),
            'lebar' => $faker->numberBetween(15,20),
            'panjang' => $faker->numberBetween(15,20),
            'deskripsi' => $faker->paragraph(20),
            'tanggalTerbit' => $faker->dateTime(),
            'cover' => $faker->word(),
            'slug' => $faker->slug(),
        ];
    }
}
