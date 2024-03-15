<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Pastikan Anda mengganti ini sesuai dengan model pengguna Anda
use Illuminate\Support\Facades\Hash;

class RegisterUserController extends Controller
{
    public function showRegistrationForm()
    {
        return view('registeruser_webpajak');
    }
}
