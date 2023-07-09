<?php

namespace App\Http\Controllers;

use App\Models\kategori_menu;
use Illuminate\Http\Request;

class kategori_menuController extends Controller
{
    public function index()
    {
        $dataKategori = Kategori_menu::get();
        return view('pages.kategori_menu.index', ['dataKategori' => $dataKategori]);
    }

    public function create()
    {
        return view('pages.kategori_menu.create');
    }

    public function store(Request $request)
    {
        $dataKategori = new Kategori_menu();
        $dataKategori->nama_kategori = $request->nama_kategori;
        $dataKategori->save();

        return redirect()->to('/kategori_menu')->with('success', 'Data berhasil disimpan');
    }

    public function view($id)
    {
        // Ambil data menu berdasarkan ID yang diberikan
        $dataKategori = kategori_menu::findOrFail($id);
    
        // Kirim menuData ke view
        return view('pages.kategori_menu.view', ['dataKategori' => $dataKategori]);
    }
    
    public function formEdit($id)
    {
        $dataKategori = Kategori_menu::find($id);
        return view('pages.kategori_menu.form_edit', ['dataKategori' => $dataKategori]);
    }

    public function update($id, Request $request)
    {
        $dataKategori = Kategori_menu::find($id);

        if (!$dataKategori) {
            return redirect()->to('/kategori_menu')->with('error', 'Data tidak ditemukan');
        }

        $dataKategori->nama_kategori = $request->nama_kategori;
        $dataKategori->save();

        return redirect()->to('/kategori_menu')->with('success', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $dataKategori = Kategori_menu::find($id);

        if (!$dataKategori) {
            return redirect()->to('/kategori_menu')->with('error', 'Data tidak ditemukan');
        }

        $dataKategori->delete();

        return redirect()->to('/kategori_menu')->with('success', 'Data berhasil dihapus');
    }
}







