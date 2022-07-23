<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function lihat()
    {
        return view('content.guru.lihat');
    }
}
