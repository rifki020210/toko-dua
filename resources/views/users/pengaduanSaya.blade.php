<div class="mx-auto w-75">
    <h2>Pengaduan Saya</h2>
    <form id="formDelete" action="/delete-selected-items" class="mt-4" method="post">
      <div class="form-check float-start ms-3">
        <input class="form-check-input" type="checkbox"  value="" id="selectAll">
        <label class="form-check-label" for="selectAll">
          Pilih Semua
        </label>
      </div>
      <div class="d-flex justify-content-end mb-3">
          <button type="button"  class="btn btn-danger " href="#" role="button">Hapus</button>
      </div>
  </div>
  <div class="card w-75 mb-3 mx-auto">
      <div class="card-header">
        <div class="form-check ">
          <input class="form-check-input border border-3 deleteCheckbox" name="selectedIds[]" type="checkbox" value="" id="flexCheckDefault">
        </div>
      </div>
      <div class="card-body">
        <h5 class="card-title">Nama</h5>
            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        <p class="card-text mb-4">Permasalahan</p>
        <h6>Setuju</h6>
        <div class="progress mb-3" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
          <div class="progress-bar bg-success" style="width: 25%">25%</div>
        </div>
        <h6>Tidak Setuju</h6>
        <div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
          <div class="progress-bar bg-danger" style="width: 100%">100%</div>
        </div>
      </div>
    </div>
  <div class="card w-75 mb-3 mx-auto">
      <div class="card-header">
        <div class="form-check ">
          <input class="form-check-input border border-3 deleteCheckbox" name="selectedIds[]" type="checkbox" value="" id="flexCheckDefault">
        </div>
      </div>
      <div class="card-body">
        <h5 class="card-title">Nama</h5>
            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        <p class="card-text mb-4">Permasalahan</p>
        <h6>Setuju</h6>
        <div class="progress mb-3" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
          <div class="progress-bar bg-success" style="width: 25%">25%</div>
        </div>
        <h6>Tidak Setuju</h6>
        <div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
          <div class="progress-bar bg-danger" style="width: 100%">100%</div>
        </div>
      </div>
    </div>
  </form>
  <script src="{{ asset('bootstrap/js/produk.js') }}"></script>