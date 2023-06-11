<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            "user_id" => Faker::create()->numberBetween(1,13),
            "judul" => Faker::create()->sentence(),
            "slug" => Faker::create()->slug(),
            "isbn" => '9781423146735',
            "penulis" => Faker::create()->name(),
            "penerbit" => Faker::create()->company(),
            "deskripsi" => Faker::create()->paragraph(20),
            "tanggalTerbit" => Faker::create()->dateTime(),
            "lebar" => Faker::create()->numberBetween(15, 30),
            "panjang" => Faker::create()->numberBetween(15, 30),
            "bahasa" => Faker::create()->randomElement(['Indonesia', 'Inggris']),
            "jumlahHalaman" => Faker::create()->numberBetween(200,500)
        ]);

        Book::create([
            "user_id" => Faker::create()->numberBetween(1,13),
            "judul" => Faker::create()->sentence(),
            "slug" => Faker::create()->slug(),
            "isbn" => '9780786838653',
            "penulis" => Faker::create()->name(),
            "penerbit" => Faker::create()->company(),
            "deskripsi" => Faker::create()->paragraph(20),
            "tanggalTerbit" => Faker::create()->dateTime(),
            "lebar" => Faker::create()->numberBetween(15, 30),
            "panjang" => Faker::create()->numberBetween(15, 30),
            "bahasa" => Faker::create()->randomElement(['Indonesia', 'Inggris']),
            "jumlahHalaman" => Faker::create()->numberBetween(200,500)
        ]);

        Book::create([
            "user_id" => Faker::create()->numberBetween(1,13),
            "judul" => Faker::create()->sentence(),
            "slug" => Faker::create()->slug(),
            "isbn" => '9780747532743',
            "penulis" => Faker::create()->name(),
            "penerbit" => Faker::create()->company(),
            "deskripsi" => Faker::create()->paragraph(20),
            "tanggalTerbit" => Faker::create()->dateTime(),
            "lebar" => Faker::create()->numberBetween(15, 30),
            "panjang" => Faker::create()->numberBetween(15, 30),
            "bahasa" => Faker::create()->randomElement(['Indonesia', 'Inggris']),
            "jumlahHalaman" => Faker::create()->numberBetween(200,500)
        ]);

        Book::create([
            "user_id" => Faker::create()->numberBetween(1,13),
            "judul" => Faker::create()->sentence(),
            "slug" => Faker::create()->slug(),
            "isbn" => '9780553593716',
            "penulis" => Faker::create()->name(),
            "penerbit" => Faker::create()->company(),
            "deskripsi" => Faker::create()->paragraph(20),
            "tanggalTerbit" => Faker::create()->dateTime(),
            "lebar" => Faker::create()->numberBetween(15, 30),
            "panjang" => Faker::create()->numberBetween(15, 30),
            "bahasa" => Faker::create()->randomElement(['Indonesia', 'Inggris']),
            "jumlahHalaman" => Faker::create()->numberBetween(200,500)
        ]);

        Book::create([
            "user_id" => Faker::create()->numberBetween(1,13),
            "judul" => Faker::create()->sentence(),
            "slug" => Faker::create()->slug(),
            "isbn" => '9780064471046',
            "penulis" => Faker::create()->name(),
            "penerbit" => Faker::create()->company(),
            "deskripsi" => Faker::create()->paragraph(20),
            "tanggalTerbit" => Faker::create()->dateTime(),
            "lebar" => Faker::create()->numberBetween(15, 30),
            "panjang" => Faker::create()->numberBetween(15, 30),
            "bahasa" => Faker::create()->randomElement(['Indonesia', 'Inggris']),
            "jumlahHalaman" => Faker::create()->numberBetween(200,500)
        ]);

        Book::create([
            "user_id" => Faker::create()->numberBetween(1,13),
            "judul" => Faker::create()->sentence(),
            "slug" => Faker::create()->slug(),
            "isbn" => '6020351173',
            "penulis" => Faker::create()->name(),
            "penerbit" => Faker::create()->company(),
            "deskripsi" => Faker::create()->paragraph(20),
            "tanggalTerbit" => Faker::create()->dateTime(),
            "lebar" => Faker::create()->numberBetween(15, 30),
            "panjang" => Faker::create()->numberBetween(15, 30),
            "bahasa" => Faker::create()->randomElement(['Indonesia', 'Inggris']),
            "jumlahHalaman" => Faker::create()->numberBetween(200,500)
        ]);

        Book::create([
            "user_id" => Faker::create()->numberBetween(1,13),
            "judul" => Faker::create()->sentence(),
            "slug" => Faker::create()->slug(),
            "isbn" => '602033211X',
            "penulis" => Faker::create()->name(),
            "penerbit" => Faker::create()->company(),
            "deskripsi" => Faker::create()->paragraph(20),
            "tanggalTerbit" => Faker::create()->dateTime(),
            "lebar" => Faker::create()->numberBetween(15, 30),
            "panjang" => Faker::create()->numberBetween(15, 30),
            "bahasa" => Faker::create()->randomElement(['Indonesia', 'Inggris']),
            "jumlahHalaman" => Faker::create()->numberBetween(200,500)
        ]);

        Book::create([
            "user_id" => Faker::create()->numberBetween(1,13),
            "judul" => Faker::create()->sentence(),
            "slug" => Faker::create()->slug(),
            "isbn" => '6020331601',
            "penulis" => Faker::create()->name(),
            "penerbit" => Faker::create()->company(),
            "deskripsi" => Faker::create()->paragraph(20),
            "tanggalTerbit" => Faker::create()->dateTime(),
            "lebar" => Faker::create()->numberBetween(15, 30),
            "panjang" => Faker::create()->numberBetween(15, 30),
            "bahasa" => Faker::create()->randomElement(['Indonesia', 'Inggris']),
            "jumlahHalaman" => Faker::create()->numberBetween(200,500)
        ]);

        Book::create([
            "user_id" => Faker::create()->numberBetween(1,13),
            "judul" => Faker::create()->sentence(),
            "slug" => Faker::create()->slug(),
            "isbn" => '6020301125',
            "penulis" => Faker::create()->name(),
            "penerbit" => Faker::create()->company(),
            "deskripsi" => Faker::create()->paragraph(20),
            "tanggalTerbit" => Faker::create()->dateTime(),
            "lebar" => Faker::create()->numberBetween(15, 30),
            "panjang" => Faker::create()->numberBetween(15, 30),
            "bahasa" => Faker::create()->randomElement(['Indonesia', 'Inggris']),
            "jumlahHalaman" => Faker::create()->numberBetween(200,500)
        ]);

        Book::create([
            "user_id" => Faker::create()->numberBetween(1,13),
            "judul" => Faker::create()->sentence(),
            "slug" => Faker::create()->slug(),
            "isbn" => '1480769134',
            "penulis" => Faker::create()->name(),
            "penerbit" => Faker::create()->company(),
            "deskripsi" => Faker::create()->paragraph(20),
            "tanggalTerbit" => Faker::create()->dateTime(),
            "lebar" => Faker::create()->numberBetween(15, 30),
            "panjang" => Faker::create()->numberBetween(15, 30),
            "bahasa" => Faker::create()->randomElement(['Indonesia', 'Inggris']),
            "jumlahHalaman" => Faker::create()->numberBetween(200,500)
        ]);

        Book::create([
            "user_id" => Faker::create()->numberBetween(1,13),
            "judul" => Faker::create()->sentence(),
            "slug" => Faker::create()->slug(),
            "isbn" => '1368081150',
            "penulis" => Faker::create()->name(),
            "penerbit" => Faker::create()->company(),
            "deskripsi" => Faker::create()->paragraph(20),
            "tanggalTerbit" => Faker::create()->dateTime(),
            "lebar" => Faker::create()->numberBetween(15, 30),
            "panjang" => Faker::create()->numberBetween(15, 30),
            "bahasa" => Faker::create()->randomElement(['Indonesia', 'Inggris']),
            "jumlahHalaman" => Faker::create()->numberBetween(200,500)
        ]);

        Book::create([
            "user_id" => Faker::create()->numberBetween(1,13),
            "judul" => Faker::create()->sentence(),
            "slug" => Faker::create()->slug(),
            "isbn" => '1338596705',
            "penulis" => Faker::create()->name(),
            "penerbit" => Faker::create()->company(),
            "deskripsi" => Faker::create()->paragraph(20),
            "tanggalTerbit" => Faker::create()->dateTime(),
            "lebar" => Faker::create()->numberBetween(15, 30),
            "panjang" => Faker::create()->numberBetween(15, 30),
            "bahasa" => Faker::create()->randomElement(['Indonesia', 'Inggris']),
            "jumlahHalaman" => Faker::create()->numberBetween(200,500)
        ]);

        Book::create([
            "user_id" => Faker::create()->numberBetween(1,13),
            "judul" => Faker::create()->sentence(),
            "slug" => Faker::create()->slug(),
            "isbn" => '133821666X',
            "penulis" => Faker::create()->name(),
            "penerbit" => Faker::create()->company(),
            "deskripsi" => Faker::create()->paragraph(20),
            "tanggalTerbit" => Faker::create()->dateTime(),
            "lebar" => Faker::create()->numberBetween(15, 30),
            "panjang" => Faker::create()->numberBetween(15, 30),
            "bahasa" => Faker::create()->randomElement(['Indonesia', 'Inggris']),
            "jumlahHalaman" => Faker::create()->numberBetween(200,500)
        ]);

        Book::create([
            "user_id" => Faker::create()->numberBetween(1,13),
            "judul" => Faker::create()->sentence(),
            "slug" => Faker::create()->slug(),
            "isbn" => '1250091667',
            "penulis" => Faker::create()->name(),
            "penerbit" => Faker::create()->company(),
            "deskripsi" => Faker::create()->paragraph(20),
            "tanggalTerbit" => Faker::create()->dateTime(),
            "lebar" => Faker::create()->numberBetween(15, 30),
            "panjang" => Faker::create()->numberBetween(15, 30),
            "bahasa" => Faker::create()->randomElement(['Indonesia', 'Inggris']),
            "jumlahHalaman" => Faker::create()->numberBetween(200,500)
        ]);

        Book::create([
            "user_id" => Faker::create()->numberBetween(1,13),
            "judul" => Faker::create()->sentence(),
            "slug" => Faker::create()->slug(),
            "isbn" => '1250233895',
            "penulis" => Faker::create()->name(),
            "penerbit" => Faker::create()->company(),
            "deskripsi" => Faker::create()->paragraph(20),
            "tanggalTerbit" => Faker::create()->dateTime(),
            "lebar" => Faker::create()->numberBetween(15, 30),
            "panjang" => Faker::create()->numberBetween(15, 30),
            "bahasa" => Faker::create()->randomElement(['Indonesia', 'Inggris']),
            "jumlahHalaman" => Faker::create()->numberBetween(200,500)
        ]);

        Book::create([
            "user_id" => Faker::create()->numberBetween(1,13),
            "judul" => Faker::create()->sentence(),
            "slug" => Faker::create()->slug(),
            "isbn" => '054579143X',
            "penulis" => Faker::create()->name(),
            "penerbit" => Faker::create()->company(),
            "deskripsi" => Faker::create()->paragraph(20),
            "tanggalTerbit" => Faker::create()->dateTime(),
            "lebar" => Faker::create()->numberBetween(15, 30),
            "panjang" => Faker::create()->numberBetween(15, 30),
            "bahasa" => Faker::create()->randomElement(['Indonesia', 'Inggris']),
            "jumlahHalaman" => Faker::create()->numberBetween(200,500)
        ]);

        Book::create([
            "user_id" => Faker::create()->numberBetween(1,13),
            "judul" => Faker::create()->sentence(),
            "slug" => Faker::create()->slug(),
            "isbn" => '0545791340',
            "penulis" => Faker::create()->name(),
            "penerbit" => Faker::create()->company(),
            "deskripsi" => Faker::create()->paragraph(20),
            "tanggalTerbit" => Faker::create()->dateTime(),
            "lebar" => Faker::create()->numberBetween(15, 30),
            "panjang" => Faker::create()->numberBetween(15, 30),
            "bahasa" => Faker::create()->randomElement(['Indonesia', 'Inggris']),
            "jumlahHalaman" => Faker::create()->numberBetween(200,500)
        ]);

        Book::create([
            "user_id" => Faker::create()->numberBetween(1,13),
            "judul" => Faker::create()->sentence(),
            "slug" => Faker::create()->slug(),
            "isbn" => '6020324788',
            "penulis" => Faker::create()->name(),
            "penerbit" => Faker::create()->company(),
            "deskripsi" => Faker::create()->paragraph(20),
            "tanggalTerbit" => Faker::create()->dateTime(),
            "lebar" => Faker::create()->numberBetween(15, 30),
            "panjang" => Faker::create()->numberBetween(15, 30),
            "bahasa" => Faker::create()->randomElement(['Indonesia', 'Inggris']),
            "jumlahHalaman" => Faker::create()->numberBetween(200,500)
        ]);

        Book::create([
            "user_id" => Faker::create()->numberBetween(1,13),
            "judul" => Faker::create()->sentence(),
            "slug" => Faker::create()->slug(),
            "isbn" => '006289594X',
            "penulis" => Faker::create()->name(),
            "penerbit" => Faker::create()->company(),
            "deskripsi" => Faker::create()->paragraph(20),
            "tanggalTerbit" => Faker::create()->dateTime(),
            "lebar" => Faker::create()->numberBetween(15, 30),
            "panjang" => Faker::create()->numberBetween(15, 30),
            "bahasa" => Faker::create()->randomElement(['Indonesia', 'Inggris']),
            "jumlahHalaman" => Faker::create()->numberBetween(200,500)
        ]);

        Book::create([
            "user_id" => Faker::create()->numberBetween(1,13),
            "judul" => Faker::create()->sentence(),
            "slug" => Faker::create()->slug(),
            "isbn" => '0063080087',
            "penulis" => Faker::create()->name(),
            "penerbit" => Faker::create()->company(),
            "deskripsi" => Faker::create()->paragraph(20),
            "tanggalTerbit" => Faker::create()->dateTime(),
            "lebar" => Faker::create()->numberBetween(15, 30),
            "panjang" => Faker::create()->numberBetween(15, 30),
            "bahasa" => Faker::create()->randomElement(['Indonesia', 'Inggris']),
            "jumlahHalaman" => Faker::create()->numberBetween(200,500)
        ]);
    }
}
