<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function lihat()
    {
        return view('content.nilai.lihat');
    }
}
