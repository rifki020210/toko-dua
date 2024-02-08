<div class="container">
	  @if (session('success'))
	  <div class="alert alert-success d-flex align-items-center" role="alert">
		<i class="bi bi-check-circle-fill"></i>
		<div class="ms-2">
			{{ session('success') }}
		</div>
		<button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>
	  @elseif (session('error'))
	  <div class="alert alert-danger d-flex align-items-center" role="alert">
		<i class="bi bi-exclamation-triangle-fill"></i>
		<div class="ms-2">
			 Menghapus data gagal!
		</div>
		<button type="button" class="btn-close ms auto" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>
	  @endif
	<h3 class="mb-3">Buat Pengumuman</h3>
	<hr class="border border-secondary border-2 opacity-50">
	<div class="mt-4">
		<form action="/admin/buatPengumuman" class="p-3" method="post">
			@csrf
			<div class="mb-3">
				<textarea name="pengumuman" class="form-control @error('pengumuman') is-invalid @enderror shadow" rows="3"></textarea>
				@error('pengumuman')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
			</div>
			{{-- <trix-editor input="pengumuman" name="pengumuman"></trix-editor> --}}
			<div class="d-flex justify-content-md-end">
				<button type="submit" class="btn btn-outline-success mt-3 ">Kirim</button>
			</div>
	    </form>
	</div>
	<hr class="border border-secondary border-2 opacity-50">
    <table class="table table-hover mt-5">
        <thead class="table-dark text-center">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Pengumuman</th>
            <th scope="col">Dibuat</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody class="text-center">
			@php $i= 1;@endphp
			@forelse ($isi as $item)
			<tr>
				<th scope="row">{{ $i++ }}</th>
				<td>{{ $item->pengumuman }}</td>
				<td>{{ $item->created_at }}</td>
				<td class="d-flex justify-content-center">
					<form action="/admin/buatPengumuman/{{ $item->id }}" method="post">
						@method('delete')
						@csrf
					<div class="btn-group" role="group" aria-label="Basic example">
						<button class="btn btn-danger">Hapus</button>
					</div>
				</form>
				</td>
				
			</tr>
			@empty
		  <div class="alert alert-danger d-flex align-items-center">
			  <i class="bi bi-exclamation-triangle-fill"></i>
			  <div class="ms-2">
				   Tidak ada pengumuman!
			  </div>
			</div>
		  @endforelse
			
        </tbody>
      </table>

</div>
