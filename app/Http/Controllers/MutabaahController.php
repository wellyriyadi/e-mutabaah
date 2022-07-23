<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MutabaahController extends Controller
{
    public function lihat()
    {
        return view('content.mutabaah.lihat');
    }
}
