<div class="container">
	<h3 class="mb-3">Buat Aduan</h3>
    <hr class="border border-secondary border-2 opacity-50">
    <form class="p-3 mt-4">
        <div class="row mb-3">
          <label for="nama" class="col-sm-2 col-form-label">Nama Toko</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nama" placeholder="Nama">
          </div>
        </div>
        <div class="row mb-3">
          <label for="namaPlatform" class="col-sm-2 col-form-label">Nama Platform</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="namaPlatform" placeholder="Nama Platform">
          </div>
        </div>
        <div class="row mb-3">
          <label for="kesalahan" class="col-sm-2 col-form-label">Kesalahan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="kesalahan"  placeholder="Kesalahan">
          </div>
        </div>
        <div class="row mb-3">
          <label for="waktuOrder" class="col-sm-2 col-form-label">Waktu Order</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" id="waktuOrder"  placeholder="Waktu Order">
          </div>
        </div>
        <div class="row mb-3">
          <label for="waktuOrder" class="col-sm-2 col-form-label">Catatan</label>
          <div class="col-sm-10">
            <trix-editor input="catatan"></trix-editor>
          </div>
        </div>
        <div class="d-flex justify-content-md-end">
            <button type="submit" class="btn btn-outline-success mt-3 ">Kirim</button>
        </div>
      </form>
</div>