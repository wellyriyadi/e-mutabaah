<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function lihat()
    {
        return view('content.santri.lihat');
    }
}
