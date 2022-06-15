@extends('layouts.app')
@section('content')
<div class="container" style="padding-top: 5rem;">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="image" style="padding-bottom: 3rem;">
        <center>
          <img src=" {{asset('frontend/image/nav/anwarlogo.png')}}" class="img-fluid">
            <!-- <h2 style="color: #006B6E;">Anwar Ispat</h2> -->
        </center>
      </div>
      @if (session('error'))
        <div class="alert alert-danger">
          {{ session('error') }}
        </div>
      @endif
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="field">
          <fieldset>
            <div class="row">
              <legend for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</legend>
              <div class="col-md-6">
                <input style="-webkit-box-shadow: 0 0 0 30px #f5f5f5 inset;" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Type Email">
                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
          </fieldset>
        </div>

        <div class="field">
          <fieldset>
            <div class="row">
              <legend for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</legend>
              <div class="col-md-6">
                <input style="-webkit-box-shadow: 0 0 0 30px #f5f5f5 inset"; id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Type password">
                @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
          </fieldset>
        </div>

        <div class="form-group row mb-0" style="padding-top:1rem">
          <div class="col-md-8 offset-md-4">
            <center>
              <button type="submit" class="btn btn-primary"style="background: #006B6E;padding: 0.5rem 5rem 0.5rem 5rem;box-shadow: -8px -8px 8px rgba(255, 255, 255, 0.25), 8px 8px 4px rgba(129, 129, 129, 0.25);">
                {{ __('Login') }}
              </button>
            </center>
            <!--@if (Route::has('password.request'))
            @endif -->
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
