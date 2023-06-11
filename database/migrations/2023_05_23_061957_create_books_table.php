<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('isbn')->unique();
            $table->string('bahasa');
            $table->string('judul')->unique();
            $table->string('penulis');
            $table->string('penerbit');
            $table->integer('jumlahHalaman');
            $table->integer('lebar');
            $table->integer('panjang');
            $table->text('deskripsi');
            $table->date('tanggalTerbit');
            $table->string('cover');
            $table->string('slug')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
