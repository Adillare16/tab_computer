<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Printer extends Model
{
    use HasFactory;

    // Menentukan nama tabel jika tidak sesuai dengan konvensi Laravel
    protected $table = 'printers';

    // Menentukan kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'nama_produk',
        'deskripsi',
        'harga',
        'gambar',
    ];
}
