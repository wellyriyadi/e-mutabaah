<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function lihat()
    {
        $dataKelas = Kelas::all();
        return view('content.kelas.lihat',compact('dataKelas'));
    }
    public function simpanKelas()
    {
        $this->kelas = new Kelas();
        $params = array_filter(request()->all(),function($key){
            return in_array($key,$this->kelas->fillable)!==false;
        },ARRAY_FILTER_USE_KEY);
    //    dd($params);
        $ins = Kelas::create($params);
        return redirect()->back()->with([
            "error"=> !$ins,
            "message"=>($ins?'Tambah Berhasil':'Tambah Gagal')
        ]);
    }
    public function editKelas($id)
    {
        return response()->json(Kelas::where(['id'=>$id])->first());
    }
}
