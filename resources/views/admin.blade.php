<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin KLS | {{ $page['title'] }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/style.css') }}">
    
    {{-- Trix editor --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    {{-- Akhir Trix editor --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <style>
           trix-toolbar [data-trix-button-group="file-tools"]{
             display: none
           }
    </style>
  </head>
  <body>
   <div class="row pe-0" style="width: 1378px">
   {{-- siderbar --}}
    <div class="col-2 sidebar bg-dark text-light p-3 ">
        <div class=" my-3">
            <h2 class="text-center mt-4">KLS STORE</h2>
        </div>
        <div class="p-3">
          <ul class="navbar-nav link-light ">
            <li class="nav-item  d-flex align-items-center">
              <a class="text-decoration-none ps-2 link-light icon-link icon-link-hover link-opacity-50-hover "  href="/admin">
                 <i class="bi bi-speedometer2 fs-4 me-2 align-middle" ></i>
                 <span class="align-middle pt-3">Dashboard</span> 
              </a>
            </li>
            <li class="nav-item  d-flex align-items-center">
              <a class="text-decoration-none ps-2 link-light icon-link icon-link-hover link-opacity-50-hover "  href="/admin/buatPengumuman">
                 <i class="bi bi-house-add fs-4 me-2 align-middle" ></i>
                 <span class="align-middle pt-3">Buat Pengumuman</span> 
              </a>
            </li>
            <li class="nav-item  d-flex align-items-center">
              <a class="text-decoration-none ps-2 link-light icon-link icon-link-hover link-opacity-50-hover "  href="/admin/tambahProduk">
                 <i class="bi bi-database-add fs-4 me-2 align-middle" ></i>
                 <span class="align-middle pt-3">Tambah Produk</span> 
              </a>
            </li>
            <li class="nav-item  d-flex align-items-center">
              <a class="text-decoration-none ps-2 link-light icon-link icon-link-hover link-opacity-50-hover "  href="/admin/aturJadwalPiket">
                 <i class="bi bi-calendar2-plus fs-4 me-2 align-middle" ></i>
                 <span class="align-middle pt-3">Atur Jadwal Piket</span> 
              </a>
            </li>
            <li class="nav-item  d-flex align-items-center">
              <a class="text-decoration-none ps-2 link-light icon-link icon-link-hover link-opacity-50-hover "  href="#">
                 <i class="bi bi-regex fs-4 me-2 align-middle" ></i>
                 <span class="align-middle pt-3">Buat Kode Presensi</span> 
              </a>
            </li>
            <li class="nav-item  d-flex align-items-center">
              <a class="text-decoration-none ps-2 link-light icon-link icon-link-hover link-opacity-50-hover "  href="/admin/buatJumlahOrderan">
                 <i class="bi bi-cart-check fs-4 me-2 align-middle" ></i>
                 <span class="align-middle pt-3">Buat Jumlah Orderan</span> 
              </a>
            </li>
            <li class="nav-item  d-flex align-items-center">
              <a class="text-decoration-none ps-2 link-light icon-link icon-link-hover link-opacity-50-hover "  href="/admin/buatAduan">
                 <i class="bi bi-cursor fs-4 me-2 align-middle" ></i>
                 <span class="align-middle pt-3">Buat Aduan</span> 
              </a>
            </li>
          </ul>
        </div>
    </div>
    {{-- Akhir sidebar --}}

    {{-- Bagian Utama --}}
    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    {{-- Navbar --}}
    <nav class="navbar-kami bg-body-secondary p-3 w-100 rounded-5 rounded-top-0">
      <div class="d-flex justify-content-center align-items-center">
        <div class="dropdown-center me-4">
          <a class=" text-decoration-none text-body link-dark icon-link icon-link-hover link-opacity-50-hover" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-speedometer2 fs-5 me-2 mb-2 align-middle"></i>
            <span class="align-middle ">Dashboard</span> 
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/admin/daftarAkunHalamanAdmin">Daftar Akun <span class="badge bg-success count-up">200</span></a></li>
            <li><a class="dropdown-item" href="/admin/produkReady">Produk Ready <span class="badge bg-success count-up">500</span></a></li>
            <li><a class="dropdown-item" href="/admin/produkKosong">Produk Kosong <span class="badge bg-success count-up">500</span></a></li>
            <li><a class="dropdown-item" href="/admin/produkBermasalahAdmin">Produk Bermasalah <span class="badge bg-success count-up">500</span></a></li>
            <li><a class="dropdown-item disabled" href="/admin/orderanHariiniAdmin">Orderan Hari Ini <span class="badge bg-success count-up">500</span></a></li>
            <li><a class="dropdown-item" href="/admin/aduanPelangganAdmin">Aduan Pelanggan <span class="badge bg-success count-up">500</span></a></li>
            <li><a class="dropdown-item" href="/admin/aduanKaryawanAdmin">Aduan Karyawan <span class="badge bg-success count-up">500</span></a></li>
          </ul>
        </div>
            <form class="d-flex w-50 ms-5" role="search">
                <input class="form-control me-2 " type="search" placeholder="Pencarian" aria-label="Search">
                <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
              </form>
          <div class="d-flex align-items-center justify-content-end mx-4"> 
              <a class="text-decoration-none text-body link-dark icon-link icon-link-hover link-opacity-50-hover ms-5"  href="/admin/pengaturanAdmin">
                      <i class="bi bi-gear fs-5 me-2 mb-2 align-middle" ></i>
                      <span class="align-middle ">Pengaturan</span> 
              </a>
          </div>
        </div>
      </nav>   
    {{-- Akhir Navbar --}}
      <div class="main mt-5">
        <div class="mt-5 container">
          @includeWhen($page['halaman'] == 1 , 'admin.dashboard')
          @includeWhen($page['halaman'] == 2, 'admin.buatPengumuman')
          @includeWhen($page['halaman'] == 3, 'admin.tambahProduk')
          @includeWhen($page['halaman'] == 4, 'admin.aturJadwalPiket')
          @includeWhen($page['halaman'] == 5, 'admin.buatJumlahOrderan')
          @includeWhen($page['halaman'] == 6, 'admin.buatAduan')
          @includeWhen($page['halaman'] == 7, 'admin.daftarAkunAdmin')
          @includeWhen($page['halaman'] == 8, 'admin.produkReady')
          @includeWhen($page['halaman'] == 9, 'admin.produkKosong')
          @includeWhen($page['halaman'] == 10, 'admin.produkBermasalahAdmin')
          @includeWhen($page['halaman'] == 11, 'admin.orderanHariIniAdmin')
          @includeWhen($page['halaman'] == 12, 'admin.aduanPelangganAdmin')
          @includeWhen($page['halaman'] == 13, 'admin.aduanKaryawanAdmin')
          @includeWhen($page['halaman'] == 14, 'admin.pengaturanAdmin')
          @includeWhen($page['halaman'] == 15, 'admin.ubahProduk')
        </div>
      </div>
  {{-- Akhir Bagian Utama --}}
    </div>
</div>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/script.js') }}"></script>
  </body>
</html>