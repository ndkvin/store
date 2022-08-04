@extends('layouts.auth')

@section('content')
  <div class="page-content page-auth" id="register">
    <div class="section-store-auth" data-aos="fade-up">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <h2>
              Memulai untuk jual beli <br />
              dengan cara terbaru
            </h2>
            <form class="mt-3"method="POST" action="{{ route('register') }}">
              @csrf
              <div class="form-group">
                <label>Full Name</label>
                <input 
                  id="name" 
                  v-model="name"
                  type="text" 
                  class="form-control 
                    @error('name') 
                      is-invalid 
                    @enderror" 
                  name="name" 
                  value="{{ old('name') }}" 
                  required 
                  autocomplete="name" 
                  autofocus
                >
                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group">
                <label>Email</label>
                <input 
                  id="email" 
                  type="email"
                  v-model="email" 
                  class="form-control 
                    @error('email') 
                      is-invalid 
                    @enderror" 
                  name="email" 
                  value="{{ old('email') }}" 
                  required 
                  autocomplete="email"
                >

                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group">
                <label>Password</label>
                <input 
                  id="password"
                  type="password" 
                  class="form-control 
                    @error('password') 
                      is-invalid 
                    @enderror" 
                  name="password" 
                  required 
                  autocomplete="new-password"
                >
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group">
                <label>Password Confirmation</label>
                <input 
                  id="password-confirm"
                  type="password" 
                  class="form-control 
                    @error('password_confirmation') 
                      is-invalid 
                    @enderror" 
                  name="password_confirmation" 
                  required 
                  autocomplete="new-password"
                >
                  @error('password_confirm')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <button type="submit" class="btn btn-success btn-block mt-4">
                Sign Up Now
              </button>
              <a class="btn btn-signup btn-block mt-2" href={{ route('login') }}>
                Back to Sign In
              </a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection