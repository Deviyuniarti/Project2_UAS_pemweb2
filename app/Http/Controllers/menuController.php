<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class menuController extends Controller
{
    function index()
    {
        $menukData = Menu::get();
        return view('pages.menu.index', ['menuData' => $menukData]);
    }
}
