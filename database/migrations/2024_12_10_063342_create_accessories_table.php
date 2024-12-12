<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccessoriesTable extends Migration
{
    public function up()
    {
        Schema::create('accessories', function (Blueprint $table) {
            $table->id(); // Kolom ID
            $table->string('nama_produk'); // Kolom untuk nama produk
            $table->text('deskripsi'); // Kolom untuk deskripsi produk
            $table->decimal('harga', 10, 2); // Kolom untuk harga produk
            $table->string('gambar'); // Kolom untuk menyimpan nama file gambar
            $table->timestamps(); // Kolom untuk created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('accessories');
    }
}
