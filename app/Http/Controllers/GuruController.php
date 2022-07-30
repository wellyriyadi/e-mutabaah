<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    public function lihat()
    {
        $dataGuru = Guru::all();
        return view('content.guru.lihat',compact('dataGuru'));
    }
    public function simpanGuru()
    {
        $this->guru = new Guru();
        $params = array_filter(request()->all(),function($key){
            return in_array($key,$this->guru->fillable)!==false;
        },ARRAY_FILTER_USE_KEY);
        $ins = Guru::create($params);
        return redirect()->back()->with([
            "error"=> !$ins,
            "message"=>($ins?'Tambah Berhasil':'Tambah Gagal')
        ]);
    }
}
