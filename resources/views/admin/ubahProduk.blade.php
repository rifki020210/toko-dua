<style>
    .form-floating .form-control:not(:placeholder-shown)~label::after{
      background-color: transparent !important;
    }
  
  </style>
  <div class="mx-auto p-3">
    <h2 class="mb-3">Ubah Produk</h2>
    <hr class="border border-secondary border-2 opacity-50">
    <form class="p-3 mt-4" method="POST" action="/admin/ubahProduk/{{ $produk['id'] }}/{{ $produk['status'] }}">
      @csrf
      @method('PUT')
      <div class="form-floating mb-3 ">
          <input type="text" name="namaProduk" class="form-control @error('namaProduk') is-invalid @enderror" id="namaProduk" value="{{ $produk['nama_produk'] }}" autocomplete="off" required>
          <label for="namaProduk">Nama Produk</label>
        @error('namaProduk')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="form-floating mb-3 {{ $produk['status'] == 0 ? 'd-none' : '' }}">
          <input type="text" name="kuantiti" class="form-control @error('kuantiti') is-invalid @enderror" id="kuantiti" placeholder="" value="{{ $produk['kuantiti']}}" autocomplete="off" required>
          <label for="kuantiti">Stok</label>
         @error('kuantiti')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="d-flex justify-content-md-end mt-5">
      <div class=" d-grid gap-2 d-md-block">
                <button type="submit" class="btn btn-success">Simpan Perubahan</button>
            </div>
          </div>
    </form>
  </div>