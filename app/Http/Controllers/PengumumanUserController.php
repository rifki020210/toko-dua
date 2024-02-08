<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanUserController extends Controller
{
    public function pengumumanUser(){
        $isi = Pengumuman::all();
        return view('users', ["page" => [
            "title" => "Beranda",
            "navAktif" => 1,
            "halaman" => 15
        ],"isi" => $isi]);
    }
}
