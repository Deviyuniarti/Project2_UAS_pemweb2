<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; // Import model User

class RegisterController extends Controller
{
    // Memanggil halaman register
    public function index()
    {
        return view('pages.auth.register');
    }

    public function register(Request $request)
    {
        // Validasi input
        $validatedUser = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users', 
            'contact' => 'required',
            'password' => 'required',
        ]);

        // Simpan ke database
        $userData = new User;
        $userData->name = $request->name;
        $userData->email = $request->email;
        $userData->contact = $request->contact;
        $userData->password = bcrypt($request->password); // Menggunakan fungsi bcrypt untuk mengenkripsi password
        $userData->save();

        // Redirect
        return redirect('/login')->with('success', 'Berhasil register');
    }
}
