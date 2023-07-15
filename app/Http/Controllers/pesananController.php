<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;

class PesananController extends Controller
{
    public function index()
    {
        $orders = Pesanan::all();
        return view('pages.pesanan.daftar_pesanan', compact('orders'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'menu' => 'required',
            'drink' => 'required',
            'quantity' => 'required',
        ]);

        $order = new Pesanan();
        $order->name = $request->input('name');
        $order->email = $request->input('email');
        $order->menu = $request->input('menu');
        $order->drink = $request->input('drink');
        $order->quantity = $request->input('quantity');
        $order->save();


        return redirect()->route('pesanan.index');
    }
    public function view($id)
    {
        // Ambil data menu berdasarkan ID yang diberikan
        $order = pesanan::findOrFail($id);

        // Kirim menuData ke view
        return view('pages.pesanan.view', ['order' => $order]);
    }
    public function delete($id)
    {
        $order = Pesanan::find($id);

        if (!$order) {
            return redirect()->to('/pesanan')->with('error', 'Data tidak ditemukan');
        }

        $order->delete();

        return redirect()->to('/pesanan')->with('success', 'Data berhasil dihapus');
    }
}
