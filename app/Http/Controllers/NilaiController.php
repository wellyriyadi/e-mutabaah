<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TahunAjaran;

class NilaiController extends Controller
{
    public function lihat()
    {
        return view('content.nilai.lihat');
    }
    public function tambah()
    {
        $dataTahunAjaran = TahunAjaran::all();
        $dataSurat = Surat::all();
        return view('content.nilai.tambah',compact('dataTahunAjaran'));
    }
}
