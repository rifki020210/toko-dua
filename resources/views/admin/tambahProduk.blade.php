<div class="container">
  @if (session('success'))
    <div class="alert alert-success d-flex align-items-center" role="alert">
      <i class="bi bi-check-circle-fill"></i>
        <div class="ms-2">
          {{ session('success') }}
        </div>
      <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
 
  @endif
  
  {{-- @elseif (session('error'))
  <div class="alert alert-danger d-flex align-items-center" role="alert">
  <i class="bi bi-exclamation-triangle-fill"></i>
  <div class="ms-2">
     Menghapus data gagal!
  </div>
  <button type="button" class="btn-close ms auto" data-bs-dismiss="alert" aria-label="Close"></button>
  </div> --}}
	<h3 class="mb-3">Tambah Produk</h3>
    <hr class="border border-secondary border-2 opacity-50">
    <form action="/admin/tambahProduk" method="post" class="p-3 mt-4">
      @csrf
        <div class="row mb-3">
          <label for="namaProduk" class="col-sm-2 col-form-label">Nama Produk</label>
          <div class="col-sm-10">
            <input type="text" class="form-control  @error('namaProduk') is-invalid @enderror" name="namaProduk" value="{{ old('namaProduk') }}" autocomplete="off" required id="namaProduk" placeholder="Nama Produk">
            @error('namaProduk')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <label for="jumlahPCS" class="col-sm-2 col-form-label">Jumlah PCS</label>
          <div class="col-sm-10">
            <input type="text" class="form-control @error('kuantiti') is-invalid @enderror" name="kuantiti" id="jumlahPCS" value="{{ old('kuantiti') }}" autocomplete="off"  placeholder="Jumlah PCS">
            @error('kuantiti')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
          </div>
        </div>
        <div class="d-flex justify-content-md-end">
            <button type="submit" class="btn btn-outline-success mt-3 ">Kirim</button>
        </div>
      </form>
</div>