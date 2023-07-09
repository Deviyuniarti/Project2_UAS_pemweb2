<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $menuData = Menu::get();
        return view('pages.menu.index', ['menuData' => $menuData]);
    }


    public function create()
    {
        return view('pages.menu.create');
    }

    public function store(Request $request)
    {
        $menuData = new Menu;
        $menuData->nama_menu = $request->nama_menu;
        $menuData->harga = $request->harga;
        $menuData->kontak = $request->kontak;
        $menuData->kategori_menu_id = $request->kategori_menu_id;
        $menuData->save();

        return redirect()->to('/menu')->with('success', 'Data berhasil disimpan');
    }

    public function view($id)
    {
        // Ambil data menu berdasarkan ID yang diberikan
        $menuData = Menu::findOrFail($id);
    
        // Kirim menuData ke view
        return view('pages.menu.view', ['menuData' => $menuData]);
    }
    

    public function formEdit($id)
    {
        $menuData = Menu::find($id);
        return view('pages.menu.form_edit', ['menuData' => $menuData]);
    }

    public function update($id, Request $request)
    {
        $menuData = Menu::find($id);

        if (!$menuData) {
            return redirect()->to('/menu')->with('error', 'Data tidak ditemukan');
        }

        $menuData->nama_menu = $request->nama_menu;
        $menuData->harga = $request->harga;
        $menuData->kontak = $request->kontak;
        $menuData->kategori_menu_id = $request->kategori_menu_id;
        $menuData->save();

        return redirect()->to('/menu')->with('success', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $menuData = Menu::find($id);

        if (!$menuData) {
            return redirect()->to('/menu')->with('error', 'Data tidak ditemukan');
        }

        $menuData->delete();

        return redirect()->to('/menu')->with('success', 'Data berhasil dihapus');
    }
}
