<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function lihat()
    {
        return view('content.informasi');
    }
}