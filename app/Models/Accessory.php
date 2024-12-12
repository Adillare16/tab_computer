<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    use HasFactory;

    // Menentukan nama tabel jika tidak sesuai dengan konvensi Laravel
    protected $table = 'accessories';

    // Menentukan kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'nama_produk',
        'deskripsi',
        'harga',
        'gambar',
    ];

    // Jika Anda memiliki relasi, Anda bisa mendefinisikannya di sini
    // Contoh: public function category() { return $this->belongsTo(Category::class); }
}