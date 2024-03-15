<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Contoh: Mendapatkan data pengguna saat ini
        $user = auth()->user();

        // Jika Anda memiliki model atau data lain yang ingin disertakan, lakukan pengambilan data di sini

        // Kemudian, kirim data ke view
        return view('dashboard_webpajak', compact('user'));
    }
}
