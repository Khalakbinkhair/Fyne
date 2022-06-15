@extends('layouts.layout')
@push('styles')
  <link rel="stylesheet" href="{{asset('frontend/css/page.css')}}">
@endpush
@section('content')
<div class="row justify-content-center padding-top">
  <div class="col-lg-10 text-center">
  	@if (session('message'))
        <div class="alert alert-success  alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
          {{ session('message') }}
        </div>
    @endif
	<h3>
      To Get Your Netflix Or Chorki <br>
        account click on the request button.
    </h3>
  </div>
</div>
<div class="row justify-content-center padding-bottom service">
    <div class="col-lg-9 text-center">
        <div class="row justify-content-center">
          <div class="col-md-3 col-6">
            <img class="img-fluid" src="{{asset('frontend/images/chorki.png')}}" alt=" ">
            <form method="POST" action="{{ route('reward_request') }}">
              @csrf
              <input  type="hidden" name="reward_name"  value="chorki" required >
              <input  type="hidden" name="customer_id"  value="{{$data->id}}" required >
             
              @if($reward_check->contains('reward_name','chorki'))
              <button type="submit" class="btn showbtn btn-danger" disabled>
                 Already Requested &emsp; &emsp;<img class="img-fluid" src="{{asset('frontend/images/arrow-g.png')}}" />
              </button>
              @else
              <button type="submit" class="btn showbtn">
                  Request Access &emsp; &emsp;<img class="img-fluid"src="{{asset('frontend/images/arrow-g.png')}}" />
              </button>
              @endif
          </form>
          </div>
          <div class="col-md-3 col-6">
            <img class="img-fluid" src="{{asset('frontend/images/netflix.png')}}" alt=" ">
            <form method="POST" action="{{ route('reward_request') }}">
              @csrf
              <input  type="hidden" name="reward_name"  value="netflix" required >
              <input  type="hidden" name="customer_id"  value="{{$data->id}}" required >
            @if($reward_check->contains('reward_name','netflix'))
              <button type="submit" class="btn showbtn btn-danger" disabled>
                  Already Requested &emsp; &emsp;<img class="img-fluid"src="{{asset('frontend/images/arrow-g.png')}}" />
              </button>
            @else
              <button type="submit" class="btn showbtn">
                  Request Access &emsp; &emsp;<img class="img-fluid"src="{{asset('frontend/images/arrow-g.png')}}" />
              </button>
            @endif
          </form>
          </div>
        </div>
    </div>
</div>
@endsection