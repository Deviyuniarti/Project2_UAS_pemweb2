<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posisi_pekerjaan extends Model
{
    use HasFactory;

    protected $table = "posisi_pekerjaans";

    protected $filelable = [
        'nama_posisi',
    ];
    
};
