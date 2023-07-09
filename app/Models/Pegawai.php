<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = "pegawais";

    protected $filelable = [
        'nama',
        'nip',
        'posisi_pekerjaan_id',
        'kontak',
        'alamat',
    ];

};
