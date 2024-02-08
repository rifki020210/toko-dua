<style>
    .form-floating .form-control:not(:placeholder-shown)~label::after{
      background-color: transparent !important;
    }
    .warna-formulir {
      background-color: #D6CC99;
    }
  </style>
  <div class="w-75 mx-auto warna-formulir p-3">
    <h2 class="mb-5 mt-5">Daftar</h2>
    <form class="mb-5" method="POST" action="/daftar">
      @csrf
      <div class="form-floating mb-3 ">
          <input type="text" name="namaDepan" class="form-control @error('namaDepan') is-invalid @enderror" id="namaDepan" placeholder="" value="{{ old('namaDepan') }}" autocomplete="off" required>
          <label for="namaDepan">Nama Depan</label>
        @error('namaDepan')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="form-floating mb-3">
          <input type="text" name="namaBelakang" class="form-control @error('namaBelakang') is-invalid @enderror" id="namaBelakang" placeholder="" value="{{old('namaBelakang')}}" autocomplete="off" required>
          <label for="namaBelakang">Nama Belakang</label>
         @error('namaBelakang')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="form-floating mb-3">
        <select class="form-select @error('status') is-invalid @enderror" id="pilihPosisi" name="status" required>
          <option value="" disabled selected>Pilih Posisi</option>
          <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Admin</option>
          <option value="2" {{ old('status') == '2' ? 'selected' : '' }}>Buyer</option>
          <option value="3" {{ old('status') == '3' ? 'selected' : '' }}>Karyawan</option>
        </select>
        <label for="pilihPosisi">Posisi</label>
        @error('status')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      
      <div class="form-floating mb-3">
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror @error(0) is-invalid @enderror" id="email" placeholder="Email" value="{{old('email')}}" autocomplete="off" required>
        <label for="email">Email</label>
        @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
           @error(0)
          <div class="invalid-feedback">
              <!-- Pesan kesalahan untuk error dengan key '0' -->
              {{ $message }}
          </div>
      @enderror
      </div>
      <div class="form-floating mb-3">
           <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" value="{{old('password')}}" required>
           <label for="password">Password</label>
        @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="d-flex justify-content-md-end mt-5">
      <div class=" d-grid gap-2 d-md-block">
                <a href="/login" class="btn btn-dark">Ke Halaman Login</a>
                <button type="submit" class="btn btn-success">Daftar</button>
            </div>
          </div>
    </form>
  </div>