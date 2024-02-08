<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;


class tambahProdukController extends Controller
{
    public function produk(){
        return view('admin', ["page" => [
            "title" => "Tambah Produk",
            "halaman" => 3
        ]]);
    }

    public function store(Request $request){
        $aturan = $request->validate([
            "namaProduk" => ["required", "min:2", "max:500", "regex:/^[a-zA-Z\s]+$/"],
            "kuantiti" => ["required", "numeric"],
        ]);

        if (!$aturan) {
            return redirect('/admin/tambahProduk')->with('error', 'Data yang di kirim kan tidak sesuai dengan aturan');
        } else {
             
        $produk = new Produk();
        $produk->nama_produk = $aturan['namaProduk'];
        $produk->kuantiti = $aturan['kuantiti'];
        $produk->status = 1;
        $produk->save();

        return redirect('/admin/tambahProduk')->with('success', 'Berhasil menambahkan data produk');
        }
       
    }
}
