<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santri;
use App\Models\Guru;
use App\Models\Mapel;

class MutabaahController extends Controller
{
    public function lihat()
    {
        $dataSantri = Santri::all();
        $dataGuru = Guru::all();
        $dataMapel = Mapel::all();
        return view('content.mutabaah.lihat',compact('dataSantri','dataGuru','dataMapel'));
    }

}
