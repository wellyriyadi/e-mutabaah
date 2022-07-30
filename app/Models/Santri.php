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
}
