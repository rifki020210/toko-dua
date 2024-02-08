<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::middleware([\App\Http\Middleware\AuthCheckLogin::class])->group(function(){
    Route::get('/', [\App\Http\Controllers\PengumumanUserController::class, 'pengumumanUser']);

    Route::prefix('admin')->middleware('admin')->group( function () {
        Route::get('/', function () {
            return view('admin', ["page" => [
                "title" => "Dashboard",
                "halaman" => 1
            ]]);
        });
        Route::get('/buatPengumuman', [\App\Http\Controllers\PengumumanController::class, 'pengumuman']);
        Route::post('/buatPengumuman', [\App\Http\Controllers\PengumumanController::class, 'store']);
        Route::delete('/buatPengumuman/{pengumuman}', [\App\Http\Controllers\PengumumanController::class, 'destroy']);
    
        Route::get('/tambahProduk', [\App\Http\Controllers\tambahProdukController::class, 'produk']);
        Route::post('/tambahProduk', [\App\Http\Controllers\tambahProdukController::class, 'store']);
    
    
        Route::get('/aturJadwalPiket', function () {
            return view('admin', ["page" => [
                "title" => "Atur Jadwal Piket",
                "halaman" => 4
            ]]);
        });
    
        Route::get('/buatJumlahOrderan', function () {
            return view('admin', ["page" => [
                "title" => "Buat Jumlah Orderan",
                "halaman" => 5
            ]]);
        });
    
        Route::get('/buatAduan', function () {
            return view('admin', ["page" => [
                "title" => "Buat Aduan",
                "halaman" => 6
            ]]);
        });
    
        Route::get('/daftarAkunHalamanAdmin', function () {
            return view('admin', ["page" => [
                "title" => "Daftar Akun",
                "halaman" => 7
            ]]);
        });
    
        Route::get('/produkReady', [\App\Http\Controllers\produkController::class, 'produkReady']);
    
        Route::get('/produkKosong', [\App\Http\Controllers\produkController::class, 'produKosong']);
        Route::get('/ubahProduk/{id}/{status}', [\App\Http\Controllers\produkController::class, 'ubahProduk']);
        Route::put('/ubahProduk/{id}/{status}', [\App\Http\Controllers\produkController::class, 'ubah']);
        Route::put('/ubahProduk/{id}/{status}', [\App\Http\Controllers\produkController::class, 'ubah']);
    
        Route::get('/produkBermasalahAdmin', function () {
            return view('admin', ["page" => [
                "title" => "Produk Bermasalah Admin",
                "halaman" => 10
            ]]);
    
        });
    
        Route::get('/orderanHariiniAdmin', function () {
            return view('admin', ["page" => [
                "title" => "Orderan Hari ini Admin",
                "halaman" => 11
            ]]);
        });
    
        Route::get('/aduanPelangganAdmin', function () {
            return view('admin', ["page" => [
                "title" => "Aduan Pelanggan Admin",
                "halaman" => 12
            ]]);
        });
    
        Route::get('/aduanKaryawanAdmin', function () {
            return view('admin', ["page" => [
                "title" => "Aduan Karyawan Admin",
                "halaman" => 13
            ]]);
        });
    
        Route::get('/pengaturanAdmin', function () {
            return view('admin', ["page" => [
                "title" => "Pengaturan Admin",
                "halaman" => 14
            ]]);
        });
    });

    
// akhir halaman admin
    Route::get('/produkReady', function () {
        return view('users', ["page" => [
            "title" => "Produk Ready",
            "navAktif" => 1,
            "halaman" => 16
        ]]);


    });
    Route::get('/produkBermasalah', function () {
        return view('users', ["page" => [
            "title" => "Produk Bermasalah",
            "navAktif" => 1,
            "halaman" => 17
        ]]);
    });
    Route::get('/aduanKaryawan', function () {
        return view('users', ["page" => [
            "title" => "Pengaduan Karyawan",
            "navAktif" => 1,
            "halaman" => 18
        ]]);
    });
    Route::get('/aduanPelanggan', function () {
        return view('users', ["page" => [
            "title" => "Pengaduan Pelanggan",
            "navAktif" => 1,
            "halaman" => 19
        ]]);
    });
    Route::get('/pengaduanSaya', function () {
        return view('users', ["page" => [
            "title" => "Pengaduan Saya",
            "navAktif" => 1,
            "halaman" => 20
        ]]);
    });
    Route::get('/pengaturanAkun', function () {
        return view('users', ["page" => [
            "title" => "Pengaturan Akun",
            "navAktif" => 1,
            "halaman" => 21
        ]]);
    });
    Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout']);
});


Route::get('/daftar', [\App\Http\Controllers\daftarController::class, 'daftar'])->middleware('guest');
Route::post('/daftar', [\App\Http\Controllers\daftarController::class, 'store']);
Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'authenticate']);