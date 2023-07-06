<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class menuController extends Controller
{
    function index()
    {
        $menuData = Menu::get();
        return view('pages.menu.index', ['menuData' => $menuData]);
    }

    function create()
    {
        return view('pages.menu.create');
    }

    function store(Request $request)
    {
        $menuData = new Menu;
        $menuData->menu = $request->menu;
        $menuData->save();
    }
    
}
