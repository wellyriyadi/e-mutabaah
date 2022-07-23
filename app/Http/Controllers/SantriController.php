<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santri;

class SantriController extends Controller
{
    public function lihat()
    {
        $dataSantri = Santri::all();
        return view('content.santri.lihat',compact('dataSantri'));
    }
    public function simpanSantri()
    {
        $this->santri = new Santri();
        $params = array_filter(request()->all(),function($key){
            return in_array($key,$this->santri->fillable)!==false;
        },ARRAY_FILTER_USE_KEY);
        $ins = Santri::create($params);
        return redirect()->back()->with([
            "error"=> !$ins,
            "message"=>($ins?'Tambah Berhasil':'Tambah Gagal')
        ]);
    }
}
