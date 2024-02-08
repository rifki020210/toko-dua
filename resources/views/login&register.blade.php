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
      body {
        display: flex;
        flex-direction: column;
        min-height: 125vh;
      }

     .utama {
      flex: 1;
      
    }
    </style>
  </head>
  <body>
    {{-- Navbar --}}
        <div class="bg-black bg-gradient h-75 p-5 text-light">
            <h1 class="text-center">KLS SPORT</h1>
        </div>
      {{-- Akhir Navbar --}}

      {{-- Utama --}}
        <div class="utama container">
            @includeWhen($page['halaman'] == 22 , 'users.daftar')
            @includeWhen($page['halaman'] == 23 , 'users.login')
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