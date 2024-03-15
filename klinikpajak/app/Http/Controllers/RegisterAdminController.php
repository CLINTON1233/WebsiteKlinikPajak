<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class RegisterAdminController extends Controller
{
    public function showRegistrationForm()
    {
        return view('registeradmin_webpajak');
    }
}
