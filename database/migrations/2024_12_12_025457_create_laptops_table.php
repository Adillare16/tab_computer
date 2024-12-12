<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaptopsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('laptops', function (Blueprint $table) {
            $table->id(); // Kolom ID
            $table->string('nama_produk'); // Kolom untuk nama produk
            $table->text('deskripsi'); // Kolom untuk deskripsi produk
            $table->decimal('harga', 10, 2); // Kolom untuk harga produk
            $table->string('gambar'); // Kolom untuk menyimpan nama file gambar
            $table->timestamps(); // Kolom untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laptops');
    }
};
