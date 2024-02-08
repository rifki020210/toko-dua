<div class="d-flex justify-content-center">
    <div class="card w-75  text-center shadow">
        <div class="card-header">
            Pengumuman
        </div>
        <div class="card-body">
          {{-- @dd($pengumuman) --}}
        <h5 class="card-title">
          {{-- @if ($pengumuman->count() > 0)
          @foreach($pengumuman as $peng)
              <li>{{ $peng->pengumuman }}</li>
          @endforeach
        @else
        data gaada
        @endif --}}
        @forelse($isi as $pengumuman)
        
        {{ $pengumuman->pengumuman }}
        @empty
		  <div class="alert alert-danger  d-flex align-items-center justify-content-center">
			  <i class="bi bi-exclamation-triangle-fill"></i>
			  <div class="ms-2">
				   Tidak ada pengumuman!
			  </div>
			</div>
    @endforelse
        {{-- {{ dd($isi) }} --}}
      </h5>
          
        </div>
        <div class="card-footer text-body-secondary">
        2 days ago
        </div>
    </div>
</div>
    <div class="row text-center mt-4">
        <div class="col">
            <p class="h3">Total Orderan Hari Ini <span class="badge bg-secondary">300</span></p>
        </div>
        <div class="col">
            <p class="h3">Giliran Piket Hari Ini <span class="badge bg-secondary">Jajang</span></p>
        </div>
    </div>
    <div class="row mt-5 mb-5">
        <div class="col-sm-6 mb-3 mb-sm-0 " >
            <div class="card shadow mb-3" >
                <div class="card-header text-center bg-transparent">Karyawan Hadir Hari Ini</div>
                    <div class="card-body text-success">
                        <table class="table text-center">
                            <thead class="table-dark">
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Posisi</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td><span class="badge text-bg-danger">Admin</span></td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td><span class="badge text-bg-success">Buyer</span></td>
                              </tr>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td><span class="badge text-bg-secondary">Karyawan</span></td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td><span class="badge text-bg-secondary">Karyawan</span></td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                <div class="card-footer bg-transparent ">Footer</div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card shadow mb-3" >
                <div class="card-header text-center bg-transparent">Karyawan Tidak Hadir Hari Ini</div>
                <div class="card-body text-success">
                    <table class="table text-center">
                        <thead class="table-dark">
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Posisi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td><span class="badge text-bg-danger">Admin</span></td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td><span class="badge text-bg-success">Buyer</span></td>
                          </tr>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td><span class="badge text-bg-secondary">Karyawan</span></td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td><span class="badge text-bg-secondary">Karyawan</span></td>
                          </tr>
                        </tbody>
                      </table>
                </div>
                <div class="card-footer bg-transparent">Footer</div>
            </div>
        </div>
    </div>
