@extends('layouts.app')
@section('title','Login')
@section('login_content')
<main>
    <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="pub/assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">OCAE APP</span>
                </a>
              </div><!-- End Logo -->
              <div class="card mb-3">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your email & password to login</p>
                  </div>

                  <form class="row g-3 user" method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Email -->
                    <div class="col-12">
                      <label for="email" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <input 
                          id="email" 
                          type="email" 
                          name="email" 
                          class="form-control @error('email') is-invalid @enderror"
                          value="{{ old('email') }}" 
                          required autocomplete="email" 
                          autofocusaria-describedby="emailHelp">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>

                    <!-- Password -->
                    <div class="col-12">
                      <label for="password" class="form-label">Password</label>
                      <input 
                        id="password"
                        type="password" 
                        name="password" 
                        class="form-control @error('password') is-invalid @enderror"
                        required autocomplete="current-password">
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>

                    <!-- Remember Me -->
                    <div class="col-12">
                      <div class="form-check">
                        <input 
                          class="form-check-input" 
                          type="checkbox" 
                          name="remember" 
                          id="remember"
                          {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                      </div>
                    </div>

                    <!-- Login -->
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">{{ __('Login') }}</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="{{ route('register') }}">Create an account</a></p>
                    </div>
                  </form>
                  <hr>
                  <!-- Forgot Password -->
                  <div class="text-center small mb-0">
                      @if (Route::has('password.request'))
                          <a href="{{ route('password.request') }}">
                              {{ __('Forgot Your Password?') }}
                          </a>
                      @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->
@endsection
