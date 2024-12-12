<?php

namespace App\Http\Controllers;

use App\Models\Printer;
use Illuminate\Http\Request;

class PrinterController extends Controller
{
    /**
     * Menampilkan daftar semua printer.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Mengambil semua printer dari database
        $printers = Printer::all();
        
        // Mengembalikan view dengan data printer
        return view('printer', compact('printers'));
    }
}