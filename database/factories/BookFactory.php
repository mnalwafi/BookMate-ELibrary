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

        $user_id = DB::table('users')->pluck('id')->toArray();
        $reviewrating_id = DB::table('reviewratings')->pluck('id')->toArray();
        return [
            'user_id' => $faker->randomElement($user_id),
            'reviewrating_id' => $faker->randomDigitNotNull(),
            'ISBN' => $faker->unique()->randomElement(['9781423146735','9780786838653','9780747532743','9780553593716','9780064471046','6020351173','602033211X','6020331601','6020301125','1480769134','1368081150','1338596705','133821666X','1250233895','1250091667','054579143X','0545791340','0063080087','006289594X','6020324788']),
            'bahasa' => $faker->randomElement(['Indonesia', 'Inggris']),
            'judul' => $faker->sentence(),
            'penulis' => $faker->name(),
            'penerbit' => $faker->company(),
            'jmlHalaman' => $faker->numberBetween(200,500),
            'lebar' => $faker->numberBetween(15,20),
            'panjang' => $faker->numberBetween(15,20),
            'deskripsi' => $faker->paragraph(20),
            'tanggalterbit' => $faker->dateTime(),
            'kuantitas' => $faker->numberBetween(0,10),
            'cover' => $faker->word(),
            'slug' => $faker->slug(),
        ];
    }
}
