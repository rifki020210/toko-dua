<div class="container">
	<h3 class="mb-3">Buat Jumlah Orderan</h3>
    <hr class="border border-secondary border-2 opacity-50">
    <form class="p-3 mt-4">
        <div class="row mb-3">
          <label for="namaEkspedisi" class="col-sm-2 col-form-label">Nama Ekspedisi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="namaEkspedisi" placeholder="Nama Ekspedisi">
          </div>
        </div>
        <div class="row mb-3">
          <label for="Jumlah" class="col-sm-2 col-form-label">Jumlah</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="Jumlah" name="jumlah" oninput="this.value = this.value.replace(/[^0-9]/g, '')" placeholder="Jumlah">
          </div>
        </div>
        <div class="d-flex justify-content-md-end">
            <button type="submit" class="btn btn-outline-success mt-3 ">Kirim</button>
        </div>
      </form>
</div>