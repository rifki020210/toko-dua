<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function index()
    {
        return view('login&register', [
            "page" => [
                "title" => "Login",
                "navAktif" => 1,
                "halaman" => 23
            ]
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ["required", "min:3", "email", "max:255"],
            'password' => ["required", "min:8", "max:128"]
        ]);

        // Cek apakah user sudah terdaftar
        $user = User::where('email', $request->input('email'))->first();

        if (!$user) {
            return redirect()->back()->withErrors(['Email tidak terdaftar.']);
        }

        // Cek apakah password valid
        if (!Hash::check($request->input('password'), $user->password)) {
            return redirect()->back()->withErrors(['Password salah.']);
        }

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        }

        return back()->with('error', 'Email atau password salah');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->flush();

        return redirect('/login');
    }
}
