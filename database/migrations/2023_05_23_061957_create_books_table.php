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
            $table->bigInteger('ISBN') -> Unique();
            $table->string('Bahasa');
            $table->text('Judul');
            $table->string('Penulis');
            $table->string('Penerbit');
            $table->integer('Berat');
            $table->integer('Lebar');
            $table->integer('Panjang');
            $table->longText('Deskripsi');
            $table->date('TanggalTerbit');
            $table->string('Cover');
            $table->string('slug');
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
