<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaris_restoran extends Model
{
    use HasFactory;

    protected $table = "inventaris_restorans";

    protected $filelable = [
       'nama',
       'kode',
       'jumlah_barang',
    ];
};
