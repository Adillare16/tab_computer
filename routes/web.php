<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\AccessoriesController;
use App\Http\Controllers\PrinterController;
use App\Http\Controllers\CartController;


// Route untuk halaman utama
Route::get('/', function () {
    return view('tampilan.index');
});

Route::get('/halaman-pertama', function () {
    $data = "data"; // Menyimpan data
    return redirect()->route('printer')->with('data', $data); // Mengirimkan data ke route kedua
});

// Route untuk halaman register
Route::get('/register', function () {
    return view('register');
});
// Route untuk halaman login
Route::get('/login', function () {
    return view('login');
});

//route controller register
Route::get('/regist',[registerController::class,'store'])->name('register.store');

//input data
Route::middleware(['guest'])->group(function () {
    Route::post('/register', [registerController::class, 'store'])->name('register.store');
});

Route::get('/index', function () {
    return view('tampilan.index');
});


Route::get('/register', [registerController::class, 'index'])->name('register.index');
Route::post('/register', [registerController::class, 'store'])->name('register.store');

//accessories
Route::get('/accessories', [AccessoriesController::class, 'index'])->name('accessories.index');

Route::get('/printers', [PrinterController::class, 'index'])->name('printers.index');
Route::get('/printers', [PrinterController::class, 'show'])->name('printer.show');
Route::get('/printer', [PrinterController::class, 'index']);

Route::get('/laptops', [LaptopController::class, 'index'])->name('laptops.index');
Route::get('/laptops', [LaptopController::class, 'show'])->name('laptop.show');
Route::get('/laptop', [LaptopController::class, 'index']);

// Route untuk halaman login
Route::get('/cart', function () {
    return view('cart');
});