
@error(0)
  <div class="alert alert-danger alert-dismissible fade show mt-5  d-flex align-items-center" role="alert">
    <i class="bi bi-exclamation-triangle-fill"></i>
    <div class="ms-2">
      <strong> {{ $message }} </strong>
      </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@enderror

<div class="card mx-auto my-5 w-50 shadow p-3">
  <div class="card-body">
    <h3 class="card-title text-center mb-4">Login</h3>
     <form class="" method="POST" action="/login">
      @csrf
    <div class="form-floating mb-3">
      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" name="email" value="{{ old('email') }}" autocomplete="off" required>
      <label for="email">Email</label>
    @error('email')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
    </div>
    <div class="form-floating  mb-3">
       <input type="password" class="form-control  @error('password') is-invalid @enderror" id="password" name="password" placeholder="password" required>
       <label for="password">Password</label>
        @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
    </div>
    {{-- {{ dump($_POST) }} --}}
    {{-- <pre>{{ $credentials }}</pre> --}}
   <div class="d-grid gap-2">
    <button class="btn btn-success" type="submit">Login</button>
    <a class="btn btn-dark" href="/daftar">Daftar</a>
   </div>
</form>
  
  </div>
</div>