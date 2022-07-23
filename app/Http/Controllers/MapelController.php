<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function lihat()
    {
        return view('content.mapel.lihat');
    }
}
