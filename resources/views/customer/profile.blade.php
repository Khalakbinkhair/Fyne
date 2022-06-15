@extends('layouts.layout')
@push('styles')
  <link rel="stylesheet" href="{{asset('frontend/css/page.css')}}">
@endpush
@section('content')
    <div class="row justify-content-center py-5">
        <div class="col-md-8">
            @if (session('message'))
                <div class="alert alert-success  alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                  {{ session('message') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">Customer Profile</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('customer_update',$data->id) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name*') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $data->name}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address*') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $data->email}}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contact-no" class="col-md-4 col-form-label text-md-right">{{ __('Contact Number*') }}</label>

                            <div class="col-md-6">
                                <input id="contact-no" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $data->phone}}" required>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="card-no" class="col-md-4 col-form-label text-md-right">{{ __('Card Number*') }}</label>

                            <div class="col-md-6">
                                <input id="card-no" type="number" class="form-control @error('card_no') is-invalid @enderror" name="card_no" value="{{ $data->card_no}}" required disabled="true">
                                @error('card_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0 text-right">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn showbtn">
                                    {{ __('Update') }} &emsp; &emsp;<img class="img-fluid"src="{{asset('frontend/images/arrow-g.png')}}" />
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection