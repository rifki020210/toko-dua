<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class produkController extends Controller
{
    public function produkReady(){
        $data = Produk::where('status', 1)->get();
        return view('admin', ["page" => [
            "title" => "Produk Ready",
            "halaman" => 8
        ],"produk" => $data]);
    }

    public function produKosong(){
        $data = Produk::where('status', 0)->get();
        return view('admin', ["page" => [
            "title" => "Produk Kosong",
            "halaman" => 9
        ],"produk" => $data]);
    }


    public function ubahProduk($id){
        $data = Produk::find($id);
        return view('admin', ["page" => [
            "title" => "Produk Kosong",
            "halaman" => 15
        ],"produk" => $data]);
    }

    public function ubah(Request $request, $id,$status){
        $aturan = $request->validate([
            "namaProduk" => ["required", "min:2", "max:500", "regex:/^[a-zA-Z\s]+$/"],
            "kuantiti" => ["required", "numeric"],
        ]);

        if (!$aturan) {
            if ($status == 1) {
                return redirect('/admin/ubahProduk')->with('error', 'Data yang di ubah tidak sesuai dengan aturan');
            }elseif($status == 0){
                return redirect('/admin/ubahProduk')->with('error', 'Data yang di ubah tidak sesuai dengan aturan');
            }
            
        } else {
        
        // Temukan data berdasarkan ID
        $produk = Produk::find($id);

        $produk->nama_produk = $aturan['namaProduk'];
        $produk->kuantiti = $aturan['kuantiti'];
        // $produk->status = 1;
        $produk->save();

        if ($status == 1) {
            return redirect('/admin/produkReady')->with('success', 'Berhasil mengubah data produk');
        }elseif($status == 0){
            return redirect('/admin/produkKosong')->with('success', 'Berhasil mengubah data produk');
        }
    }
  }

  public function ubahKosong($id,$status){
    
  }
}
