<?php

namespace App\Http\Controllers;
use App\Models\Accessory; // Import model Accessory
use Illuminate\Http\Request;

class AccessoriesController extends Controller
{
    // Menampilkan halaman accessories
    public function index()
    {
        // Mengambil semua data aksesori dari database
        $accessories = Accessory::all(); 

        // Mengirim data ke tampilan
        return view('accessories', compact('accessories')); 
    }
}