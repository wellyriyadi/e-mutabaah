<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TahunAjaran;
use App\Models\Surat;
use App\Models\Kelas;
use App\Models\Nilai;
use App\Models\Santri;
use DB;
use App\Models\Guru;

class NilaiController extends Controller
{
    public function lihat()
    {
        $dataNilai = Nilai::with(['data_guru','data_santri','data_kelas','data_semester','data_surat'])->get();
        return view('content.nilai.lihat',compact('dataNilai'));
    }
    public function tambah()
    {
        $dataKelas = Kelas::all();
        return view('content.nilai.tambah',compact('dataKelas'));
    }
    public function lihatNilai($id)
    {
        $dataNilai = Nilai::all();
        $dataKelas = Kelas::where(['id'=>$id])->first();
        $dataSantri = Santri::with(['data_kelas','data_nilai'=>function($q){
            $q->where(DB::raw('CAST(created_at AS DATE)'),date('Y-m-d'));
        }])->whereHas('data_kelas',function($q) use ($id){
            $q->where('kelas_id',$id);
        })->get();
        // dd($dataSantri);
        $dataGuru = Guru::with('dataKelas')->whereHas('dataKelas',function($q) use ($id){
            $q->where('kelas_id',$id);
        })->get();
        // dd($dataGuru);

        return view('content.nilai.detail',compact('dataNilai','dataSantri','dataKelas','dataGuru'));
    }
    public function nilai($kelas_id,$santri_id)
    {
        $dataKelas = Kelas::where(['id'=>$kelas_id])->first();
        $dataSantri = Santri::findOrFail($santri_id);
        $dataGuru = Guru::with('dataKelas')->whereHas('dataKelas',function($q) use ($kelas_id){
            $q->where('kelas_id',$kelas_id);
        })->get();
        $surat = Surat::all();
        return view('content.nilai.nilai',compact('dataSantri','dataKelas','dataGuru','surat'));
    }
    public function simpanNilai()
    {
        // dd(request()->all());
        $this->nilai = new Nilai();
        for($i=0;$i<(count(request('surat_id')??[]));$i++){
            $params = [
                'guru_id'=>request('guru_id'),
                'santri_id'=>request('santri_id'),
                'kelas_id'=>request('kelas_id'),
                'semester_id'=>request('semester_id'),
                'surat_id'=>request('surat_id')[$i]??0,
                'makhraj'=>request('makhraj')[$i]??0,
                'mad'=>request('mad')[$i]??0,
                'ghunnah'=>request('ghunnah')[$i]??0,
                'kelancaran'=>request('kelancaran')[$i]??0,

            ];
            $ins = Nilai::create($params);
        }
        return redirect()->route('lihat-nilai',[$params['kelas_id']])->with([
            "error"=> !$ins,
            "message"=>($ins?'Tambah Berhasil':'Tambah Gagal')
        ]);
    }
}
