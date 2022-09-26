<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;
    protected $table='santri';
    public $fillable=[
        'nama_santri','tempat_lahir','tanggal_lahir','alamat','tingkat_pendidikan','nama_ayah','nama_ibu','nomor_telepon','waktu_belajar'
    ];

    public function data_kelas()
    {
        return $this->hasOne(KelasDetail::class,'santri_id','id');
    }

    public function belum_punya_kelas()
    {
        return $this->hasMany(KelasDetail::class,'santri_id','id');
    }
    public function data_mutabaah()
    {
        return $this->hasMany(Mutabaah::class,'santri_id','id');
    }
}
