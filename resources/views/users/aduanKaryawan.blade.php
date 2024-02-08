
<div class="card w-75 mb-3 p-3 shadow mx-auto">
	<h5 class="card-title">Buat Pengaduan</h5>
	<form action="" class="mb-3">
		<trix-editor input="editor"></trix-editor>
		<div class="d-flex justify-content-md-end">
			<button type="submit" class="btn btn-outline-success mt-3 ">Kirim</button>
		</div>
	</form>
  </div>

<div class="card w-75 mb-3 mx-auto shadow">
    {{-- <div class="card-header">
        <h6 class="card-subtitle text-body-secondary">No</h6>
        
      </div> --}}
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