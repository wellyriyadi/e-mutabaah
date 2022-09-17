<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santri;
use App\Models\Guru;
use App\Models\Kelas;

class MutabaahController extends Controller
{

    public function lihat()
    {
        $dataKelas = Kelas::all();
        return view('content.mutabaah.lihat',compact('dataKelas'));
    }

}
