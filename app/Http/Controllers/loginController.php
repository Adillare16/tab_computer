<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class loginController extends Controller
{
    public function index()
    {
        return view('login');
    }


}
