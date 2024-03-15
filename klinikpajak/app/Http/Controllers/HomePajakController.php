<?php

// File: app\Http\Controllers\HomePajakController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePajakController extends Controller
{
    public function index()
    {
        return view('Homepajak');
    }
}
