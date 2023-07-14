<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class master_chefsController extends Controller
{
    public function index(Request $request){
        return view ('master_chefs');
    }
}
