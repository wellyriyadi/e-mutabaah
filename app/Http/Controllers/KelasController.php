<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function lihat()
    {
        return view('content.kelas.lihat');
    }
}
