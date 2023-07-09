<?php

namespace App\Http\Controllers;

use App\Models\Posisi_pekerjaan;
use Illuminate\Http\Request;

class Posisi_pekerjaanController extends Controller
{
    public function index()
    {
        $dataPosisi = Posisi_pekerjaan::get();
        return view('pages.posisi_pekerjaan.index', ['dataposisi' => $dataPosisi]);
    }

    public function create()
    {
        return view('pages.posisi_pekerjaan.create');
    }

    public function store(Request $request)
    {
        $dataPosisi = new Posisi_pekerjaan();
        $dataPosisi->nama_posisi = $request->nama_posisi;
        $dataPosisi->save();

        return redirect()->to('/posisi_pekerjaan')->with('success', 'Data berhasil disimpan');
    }

    public function view($id)
    {
        // Ambil data menu berdasarkan ID yang diberikan
        $dataPosisi = Posisi_pekerjaan::findOrFail($id);
    
        // Kirim menuData ke view
        return view('pages.posisi_pekerjaan.view', ['dataPosisi' => $dataPosisi]);
    }
    
    public function formEdit($id)
    {
        $dataPosisi = Posisi_pekerjaan::find($id);
        
        if (!$dataPosisi) {
            return redirect()->to('/posisi_pekerjaan')->with('error', 'Data tidak ditemukan');
        }

        return view('pages.posisi_pekerjaan.form_edit', ['dataPosisi' => $dataPosisi]);
    }

    public function update($id, Request $request)
    {
        $dataPosisi = Posisi_pekerjaan::find($id);

        if (!$dataPosisi) {
            return redirect()->to('/posisi_pekerjaan')->with('error', 'Data tidak ditemukan');
        }

        $dataPosisi->nama_posisi = $request->nama_posisi;
        $dataPosisi->save();

        return redirect()->to('/posisi_pekerjaan')->with('success', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $dataPosisi = Posisi_pekerjaan::find($id);

        if (!$dataPosisi) {
            return redirect()->to('/posisi_pekerjaan')->with('error', 'Data tidak ditemukan');
        }

        $dataPosisi->delete();

        return redirect()->to('/posisi_pekerjaan')->with('success', 'Data berhasil dihapus');
    }
}
