<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table='guru';
    public $fillable=[
        'nama_guru','tempat_lahir','tanggal_lahir','alamat','nomor_telepon','tanggal_bergabung','tanggal_berhenti'
    ];
}
