<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.auth.login');
    }

    // Memproses login
    public function login(Request $request)
    {
        // Memvalidasi inputan dari form
        $input = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        // Mengecek data inputan dengan data di database, jika cocok login
        if (Auth::attempt($input)) {
            // Mengalihkan ke halaman selanjutnya
            return redirect('/menu');
        } else {
            // Balik ke halaman login karena gagal
            return redirect()->back();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/login');
    }
}
