@extends('layouts.layout')
@push('styles')
  <link rel="stylesheet" href="{{asset('frontend/css/page.css')}}">
@endpush
@section('content')
<div class="row justify-content-center padding-top padding-bottom">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Customer Login</div>
          <div class="card-body">
          @if (session('error'))
            <div class="alert alert-danger">
              {{ session('error') }}
            </div>
          @endif
          <form method="POST" action="{{ route('customer_login_auth') }}">
            @csrf

                <div class="row form-group">
                  <legend for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</legend>
                  <div class="col-md-6">
                    <input style="-webkit-box-shadow: 0 0 0 30px #f5f5f5 inset;" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Type Email">
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>


                <div class="row form-group">
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

            <div class="form-group row mb-0 text-right">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn showbtn">
                        {{ __('Login') }} &emsp; &emsp;<img class="img-fluid"src="{{asset('frontend/images/arrow-g.png')}}" />
                    </button>
                </div>
            </div>
          </form>
        </div>
      </div>  
    </div>
  </div>
@endsection