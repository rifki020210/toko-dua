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
	<h3>Produk Ready</h3>
    <hr class="border border-secondary border-2 opacity-50">
        <div class="d-flex justify-content-end mb-3">
            <form id="formDelete" action="/delete-selected-items" class="mt-4" method="post">

             <div class="btn-group d-flex justify-content-center" role="group" aria-label="Basic example">
                    <button type="button"  class="btn btn-success " href="#" role="button">Ubah</button>
                    <button type="button"  class="btn btn-dark " href="#" role="button">Kosong</button>
                    <button type="button"  class="btn btn-danger " href="#" role="button">Hapus</button>
            </div>
             
        </div>
    <table class="table table-hover ">
        <thead class="table-dark text-center">
          <tr>
            <th scope="col">
                    <div class="form-check ">
                <input class="form-check-input" type="checkbox"  value="" id="selectAll">
              </div>
            </th>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Stok</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody class="text-center">
          @php
          $i = 1;
      @endphp
      @foreach ($produk as $item)
          <tr>
            <th scope="row">                    
                <div class="form-check">
                <input class="form-check-input border border-3 deleteCheckbox" name="selectedIds[]" type="checkbox" value="" id="flexCheckDefault">
                </div>
            </th>
            <th scope="row">{{ $i++ }}</th>
            <td>{{ $item->nama_produk }}</td>
            <td>{{ $item->kuantiti }}</td>
            <td class="">
                <div class="btn-group d-flex justify-content-center" role="group" aria-label="Basic example">
                    <a class="btn btn-success btn-sm" href="/admin/ubahProduk/{{ $item->id }}/{{ $item->status }}" role="button">Ubah</a>
                    <form action="/admin/statusKosong/{{ $item->id }}/{{ $item->status }}" method="post">
                      @method('PUT')
						          @csrf
                    <button class="btn btn-dark btn-sm" href="" role="button">Kosong</button>
                    </form>
                    <a class="btn btn-danger btn-sm" href="#" role="button">Hapus</a>
                  </div>
            </td>
          </tr>
        @endforeach
         
        </tbody>
      </table>
      </form>
</div>
<script src="{{ asset('bootstrap/js/produk.js') }}"></script>