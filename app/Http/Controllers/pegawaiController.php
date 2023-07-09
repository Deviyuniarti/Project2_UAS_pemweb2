<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class pegawaiController extends Controller
{
    public function index()
    {
        $dataPegawai = Pegawai::get();
        return view('pages.pegawai.index', ['dataPegawai' => $dataPegawai]);
    }

    public function create()
    {
        return view('pages.pegawai.create');
    }

    public function store(Request $request)
    {
        $dataPegawai = new Pegawai();
        $dataPegawai->nama = $request->nama;
        $dataPegawai->nip = $request->nip;
        $dataPegawai->posisi_pekerjaan_id = $request->posisi_pekerjaan_id;
        $dataPegawai->kontak = $request->kontak;
        $dataPegawai->alamat = $request->alamat;
        $dataPegawai->save();

        return redirect()->to('/pegawai')->with('success', 'Data berhasil disimpan');
    }

    public function view($id)
    {
        // Ambil data menu berdasarkan ID yang diberikan
        $dataPegawai = Pegawai::findOrFail($id);
    
        // Kirim menuData ke view
        return view('pages.pegawai.view', ['dataPegawai' => $dataPegawai]);
    }

    public function formEdit($id)
    {
        $dataPegawai = Pegawai::find($id);
        return view('pages.pegawai.form_edit', ['dataPegawai' => $dataPegawai]);
    }

    public function update($id, Request $request)
    {
        $dataPegawai = Pegawai::find($id);

        if (!$dataPegawai) {
            return redirect()->to('/pegawai')->with('error', 'Data tidak ditemukan');
        }

        $dataPegawai->nama = $request->nama;
        $dataPegawai->nip = $request->nip;
        $dataPegawai->posisi_pekerjaan_id = $request->posisi_pekerjaan_id;
        $dataPegawai->kontak = $request->kontak;
        $dataPegawai->alamat = $request->alamat;
        $dataPegawai->save();

        return redirect()->to('/pegawai')->with('success', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $dataPegawai = Pegawai::find($id);

        if (!$dataPegawai) {
            return redirect()->to('/pegawai')->with('error', 'Data tidak ditemukan');
        }

        $dataPegawai->delete();

        return redirect()->to('/pegawai')->with('success', 'Data berhasil dihapus');
    }
}

