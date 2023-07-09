<?php

namespace App\Http\Controllers;

use App\Models\Inventaris_restoran;
use Illuminate\Http\Request;

class inventaris_restoranController extends Controller
{
    public function index()
    {
        $dataInventaris = Inventaris_restoran::get();
        return view('pages.inventaris_restoran.index', ['dataInventaris' => $dataInventaris]);
    }


    public function create()
    {
        return view('pages.inventaris_restoran.create');
    }

    public function store(Request $request)
    {
        $dataInventaris= new Inventaris_restoran();
        $dataInventaris->nama = $request->nama;
        $dataInventaris->kode = $request->kode;
        $dataInventaris->jumlah_barang = $request->jumlah_barang;
        $dataInventaris->save();

        return redirect()->to('/inventaris_restoran')->with('success', 'Data berhasil disimpan');
    }

    public function view($id)
    {
        // Ambil data inventaris_restoran berdasarkan ID yang diberikan
        $dataInventaris = Inventaris_restoran::findOrFail($id);
    
        // Kirim dataInventaris ke view
        return view('pages.inventaris_restoran.view', ['dataInventaris' => $dataInventaris]);
    }
    
    public function formEdit($id)
    {
        $dataInventaris= Inventaris_restoran::find($id);
        return view('pages.inventaris_restoran.form_edit', ['dataInventaris' => $dataInventaris]);
    }

    public function update($id, Request $request)
    {
        $dataInventaris= Inventaris_restoran::find($id);

        if (!$dataInventaris) {
            return redirect()->to('/dataInventaris')->with('error', 'Data tidak ditemukan');
        }

        $dataInventaris->nama = $request->nama;
        $dataInventaris->kode = $request->kode;
        $dataInventaris->jumlah_barang = $request->jumlah_barang;
        $dataInventaris->save();

        return redirect()->to('/inventaris_restoran')->with('success', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $dataInventaris = Inventaris_restoran::find($id);

        if (!$dataInventaris) {
            return redirect()->to('/inventarsi_restoran')->with('error', 'Data tidak ditemukan');
        }

        $dataInventaris->delete();

        return redirect()->to('/inventaris_restoran')->with('success', 'Data berhasil dihapus');
    }
}


