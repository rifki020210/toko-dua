<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KLS | {{ $page['title'] }}</title>
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
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-black bg-gradient border-bottom border-body" data-bs-theme="dark">
        <div class="container">
          <a class="navbar-brand" href="/">KLS STORE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link " href="/">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Presensi</a>
              </li>
              <li class="nav-item dropdown-center">
                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Produk
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/produkReady">Produk Ready</a></li>
                  <li><a class="dropdown-item" href="#">Produk Kosong</a></li>
                  <li><a class="dropdown-item" href="/produkBermasalah">Produk Bermasalah</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown-center">
                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Aduan
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/aduanPelanggan">Pengaduan Pelanggan</a></li>
                  <li><a class="dropdown-item" href="/aduanKaryawan">Pengaduan Karyawan</a></li>
                </ul>
              </li>
                <li class="nav-item dropdown-center">
                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Personal
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/pengaduanSaya">Pengaduan Saya</a></li>
                  <li><a class="dropdown-item" href="/pengaturanAkun">Pengaturan Akun</a></li>
                  <li><a class="dropdown-item" href="/logout">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      {{-- Akhir Navbar --}}

      {{-- Utama --}}
        <div class="mt-5 container">
          @includeWhen($page['halaman'] == 15 , 'users.beranda')
          @includeWhen($page['halaman'] == 16 , 'users.produk')
          @includeWhen($page['halaman'] == 17 , 'users.produkBermasalah')
           @includeWhen($page['halaman'] == 18 , 'users.aduanKaryawan')
           @includeWhen($page['halaman'] == 19 , 'users.aduanPelanggan')
           @includeWhen($page['halaman'] == 20 , 'users.pengaduanSaya')
           @includeWhen($page['halaman'] == 21 , 'users.pengaturanAkun')
        </div>
      
      {{-- Akhir Bagian Utama --}}
   
      {{-- Footer --}}
      <footer class="bg-black bg-gradient text-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 pt-1">

                    <p>&copy; 2023 <a href="" class="text-decoration-none">Muhamad Rifki Rahmadi</a>. Hak Cipta Dilindungi Undang-Undang.</p>
                </div>
                <div class="col-md-6 text-md-end pt-2">
                    <ul class="list-inline ">
                        <li class="list-inline-item">
                          <a href="#" class="text-light text-decoration-none">
                            <i class="bi bi-facebook"></i>
                            <span class="pt-2">Facebook</span>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="text-light text-decoration-none">
                            <i class="bi bi-whatsapp"></i>
                            <span class="pt-2">WhatsApp</span>
                          </a>
                        </li>
                          <li class="list-inline-item">
                          <a href="#" class="text-light text-decoration-none">
                            <i class="bi bi-github"></i>
                            <span class="pt-2">Github</span>
                          </a>
                        </li>
                          <li class="list-inline-item">
                            <a href="#" class="text-light text-decoration-none">
                              <i class="bi bi-youtube"></i>
                              <span class="pt-2">Youtube</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    
      {{-- Akhir Footer --}}
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/script.js') }}"></script>
  </body>
</html>