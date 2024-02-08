<div class="container">
	<h3>Orderan Hari ini</h3>
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
            <th scope="col">Nama Ekspedisi</th>
            <th scope="col">Jumlah</th>
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
            <td class="">
                <div class="btn-group d-flex justify-content-center" role="group" aria-label="Basic example">
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
            <td class="">
                <div class="btn-group d-flex justify-content-center" role="group" aria-label="Basic example">
                    <a class="btn btn-success btn-sm" href="#" role="button">Ubah</a>
                    <a class="btn btn-danger btn-sm" href="#" role="button">Hapus</a>
                  </div>
            </td>
          </tr>
         
        </tbody>
        <tfoot>
          <tr class="text-center">
            <td colspan="2"></td>
            <td colspan="1">Total : </td>
            <td>200 </td>
            <td> </td>

          </tr>
        </tfoot>
      </table>
      </form>
</div>
<script src="{{ asset('bootstrap/js/produk.js') }}"></script>