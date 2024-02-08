<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class daftarController extends Controller
{
   public function daftar()
    {
           return view('login&register', ["page" => [
            "title" => "Daftar Akun",
            "navAktif" => 1,
            "halaman" => 22
        ]
    ]);
    }

    public function store(Request $request)
    {

    $rules = $request->validate([   
        "namaDepan" => ["required", "min:2", "max:50", "regex:/^[a-zA-Z\s]+$/"],
        "namaBelakang" => ["required", "min:2", "max:50", "regex:/^[a-zA-Z\s]+$/"],
        "status" => ["numeric"],
        "email" => ["required", "min:3", "email", "max:255"],
        "password" =>  ["required", "min:8", "max:128"]
    ]);

         // Cek apakah user sudah terdaftar
        $userExists = User::where('email', $request->input('email'))->first();

        if ($userExists) {
            return redirect()->back()->withErrors(['Email atau username sudah terdaftar.']);
        }

        $user = new User();
        $user->first_name = $rules['namaDepan'];
        $user->last_name = $rules['namaBelakang'];
        $user->status = $rules['status'];
        $user->email = $rules['email'];
        $user->password = Hash::make($rules['password']);
        $user->save();

        return redirect('/login');
    }
}
