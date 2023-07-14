<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class varianmenuController extends Controller
{
    public function index(Request $request){
        return view ('varianmenu');
    }
}
