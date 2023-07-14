<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testimonialController extends Controller
{
    public function index(Request $request){
        return view ('testimonial');
    }
}
