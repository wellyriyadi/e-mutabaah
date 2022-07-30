<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapel;

class MapelController extends Controller
{
    public function lihat()
    {
        $dataMapel = Mapel::all();
        return view('content.mapel.lihat',compact('dataMapel'));
    }
    public function simpanMapel()
    {
        $this->mapel = new Mapel();
        $params = array_filter(request()->all(),function($key){
            return in_array($key,$this->mapel->fillable)!==false;
        },ARRAY_FILTER_USE_KEY);
    //    dd($params);
        $ins = Mapel::create($params);
        return redirect()->back()->with([
            "error"=> !$ins,
            "message"=>($ins?'Tambah Berhasil':'Tambah Gagal')
        ]);
    }
}
