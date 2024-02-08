<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function pengumuman()
    {
        $isiPengumuman = Pengumuman::all();
        return view('admin', [
            "page" => [
                "title" => "Buat Pengumuman",
                "halaman" => 2
            ], "isi" => $isiPengumuman
        ]);
    }

    public function destroy(Pengumuman $pengumuman){
            $terhapus = Pengumuman::destroy($pengumuman->id);
            
            if ($terhapus) {
                return redirect('/admin/buatPengumuman')->with('success', 'Data berhasil dihapus');
            } else {
                return redirect('/admin/buatPengumuman')->with('error', 'Gagal menghapus data');
            }

            // return redirect('/buatPengumuman')->with('success', 'Data berhasil dihapus');
    }

    public function store(Request $request)
    {
        $aturan = $request->validate([
            "pengumuman" => ["required","min:2", "max:1000"],
    ]);
        if (!$aturan) {
            return redirect('/admin/buatPengumuman')->with('error', 'Gagal menambahkan pengumuman');
        } else {
            $pengumuman = new Pengumuman();
            $pengumuman->pengumuman = $aturan['pengumuman'];
            $pengumuman->user_id = auth()->user()->id;
            $pengumuman->save();
    
            return redirect('/admin/buatPengumuman')->with('success', 'Berhasil menambahkan pengumuman');
        }
    }
}
