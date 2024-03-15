<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginKonsultanController extends Controller
{
    public function showLoginForm()
    {
        return view('loginkonsultan_webpajak');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard_konsultan');
        } else {
            return redirect()->route('login.konsultan')->withInput()->withErrors(['error' => 'Email atau password yang Anda masukkan salah, silakan coba lagi']);
        }
    }
}
