<?php

namespace App\Http\Controllers;
use App\Models\Laptop;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    /**
     * Menampilkan daftar semua printer.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Mengambil semua printer dari database
        $laptops = Laptop::all();
        
        // Mengembalikan view dengan data printer
        return view('laptop', compact('laptops'));
    }
}
