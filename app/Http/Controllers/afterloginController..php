<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Proses login
        // Setelah login berhasil
        return redirect()->route('afterlogin');
    }

    public function afterLogin()
    {
        return view('afterlogin');  // Pastikan 'afterlogin' sesuai dengan nama file view
    }
}