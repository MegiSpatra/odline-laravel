@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        
        <main class="form-daftar">
         <h1 class="h3 mb-3 fw-normal text-center">Formulir Pendaftaran</h1>
            <form action="/daftar " method="post"> 
                @csrf
              <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror"
                id="name" placeholder="name" required value="{{ old('name') }}"><label for="name">Name</label>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>                    
                @enderror
            </div>
            <div class="form-floating">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
              <label for="email">Alamat Email</label>
              @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>                    
                @enderror
            </div>
              <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" required value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>                    
                @enderror
              </div>
              <div class="form-floating">
                <input type="text" name="NoTelephone" class="form-control @error('NoTelephone') is-invalid @enderror" id="NoTelephone" placeholder="NoTelephone" required value="{{ old('NoTelephone') }}">
                <label for="username">No. Telephone</label>
                @error('NoTelephone')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>                    
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror rounded-bottom" id="password" placeholder="password" required value="{{ old('password') }}">
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>                    
                @enderror
              </div>
          
              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Daftar</button>
            </form>
            <small class="d-block text-center mt-2">Jika sudah Daftar?<a href="/login">Silangkan Login!</a></small>
          </main>

        
    </div>    
</div>        
@endsection