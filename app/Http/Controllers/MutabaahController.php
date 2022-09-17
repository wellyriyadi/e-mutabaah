<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santri;
use App\Models\Mutabaah;
use App\Models\Kelas;
use App\Models\Guru;

class MutabaahController extends Controller
{

    public function lihatKelas()
    {
        $dataKelas = Kelas::all();
        return view('content.mutabaah.lihat',compact('dataKelas'));
    }

    public function lihatMutabaah($id)
    {
        $dataMutabaah = Mutabaah::all();
        $dataSantri = Santri::with('data_kelas')->whereHas('data_kelas',function($q) use ($id){
            $q->where('kelas_id',$id);
        })->get();

        return view('content.mutabaah.detail',compact('dataMutabaah','dataSantri'));
    }

}
