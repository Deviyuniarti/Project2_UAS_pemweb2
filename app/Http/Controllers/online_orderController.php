<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class online_orderController extends Controller
{
    public function index(Request $request){
        return view ('online_order');
    }
}
