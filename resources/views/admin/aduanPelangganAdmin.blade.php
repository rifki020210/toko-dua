<div class="container">
	<h3>Aduan Pelanggan</h3>
    <hr class="border border-secondary border-2 opacity-50">
        <div class="d-flex justify-content-end mb-3">
            <form id="formDelete" action="/delete-selected-items" class="mt-4" method="post">

             <div class="btn-group d-flex justify-content-center" role="group" aria-label="Basic example">
                    <button type="button"  class="btn btn-success " href="#" role="button">Ubah</button>
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
            <th scope="col">Platform</th>
            <th scope="col">Permasalahan</th>
            <th scope="col">Opsi</th>
          </tr>
        </thead>
        <tbody class="text-center">
          <tr>
            <th scope="row">                    
                <div class="form-check">
                <input class="form-check-input border border-3 deleteCheckbox" name="selectedIds[]" type="checkbox" value="" id="flexCheckDefault">
                </div>
            </th>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>Otto</td>
            <td class="">
                <div class="btn-group d-flex justify-content-center" role="group" aria-label="Basic example">
                    <a class="btn btn-dark btn-sm" href="#" role="button" data-bs-toggle="modal" data-bs-target="#selengkapnyaAP">Selengkapnya</a>
                   <a class="btn btn-success btn-sm" href="#" role="button">Ubah</a>
                   <a class="btn btn-danger btn-sm" href="#" role="button">Hapus</a>
                 </div>
            </td>
          </tr>
         <tr>
            <th scope="row">                    
                <div class="form-check">
                <input class="form-check-input border border-3 deleteCheckbox" name="selectedIds[]"  type="checkbox" value="" id="flexCheckDefault">
                </div>
            </th>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>Otto</td>
            <td class="">
                <div class="btn-group d-flex justify-content-center" role="group" aria-label="Basic example">
                    <a class="btn btn-dark btn-sm" href="#" role="button" >Selengkapnya</a>
                   <a class="btn btn-success btn-sm" href="#" role="button">Ubah</a>
                   <a class="btn btn-danger btn-sm" href="#" role="button">Hapus</a>
                 </div>
            </td>
          </tr>
        </tbody>
      </table>
      </form>
</div>
<!-- Modal -->
<div class="modal fade" id="selengkapnyaAP" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Nama</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Platform
        <hr>
       Permasalahan
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<script src="{{ asset('bootstrap/js/produk.js') }}"></script>
<script src="{{ asset('bootstrap/js/produk.js') }}"></script>