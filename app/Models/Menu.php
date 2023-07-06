<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = "menus";

    protected $filelable = [
        'nama_menu',
        'harga',
        'kontak',
        'kategori_menu_id',

    ];

};
