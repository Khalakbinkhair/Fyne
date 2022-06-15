@extends('layouts.layout')
@push('styles')
  <link rel="stylesheet" href="{{asset('frontend/css/page.css')}}">
@endpush
@section('content')

<div class="row justify-content-center padding-bottom padding-top banner">
  <div class="col-lg-10">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-5 pb-3">
        <div class="reward-content">
          <h1>Reward With Fyne Bottle</h1>
        </div>
      </div>
      <div class="col-md-5 pb-3 text-right">
        <img class="img-fluid"src="{{asset('frontend/images/reward-banner.png')}}" />
      </div>
    </div>
  </div>
</div>
<div class="row justify-content-center padding-bottom">
  <div class="col-lg-10">
    <h1>
      Get Your Netflix Or Chorki <br>
        account With The Reward Card Number
    </h1>
    <p>
      Go To registration Page , Login WIth The Card Number and agt a reward <br> mail With a Exciting Netflix account .Valid Till December 22
    </p>
    <a class="btn showbtn" href="{{ route('customer_register') }}"> Regestration &emsp; &emsp;<img class="img-fluid"src="{{asset('frontend/images/arrow-g.png')}}" /></a> &emsp;
    <a class="btn showbtn" href="{{ route('customer_login') }}"> Login &emsp; &emsp;<img class="img-fluid"src="{{asset('frontend/images/arrow-g.png')}}" /></a>
  </div>
</div>
<div class="row justify-content-center padding-bottom service">
    <div class="col-lg-9 text-center">
        <div class="row justify-content-center">
          <div class="col-md-3 col-6">
            <img class="img-fluid" src="{{asset('frontend/images/chorki.png')}}" alt=" ">
          </div>
          <div class="col-md-3 col-6">
            <img class="img-fluid" src="{{asset('frontend/images/netflix.png')}}" alt=" ">
          </div>
        </div>
    </div>
</div>

@push('scripts')
<script type="text/javascript">
	$(document).ready(function() {

	});
</script>
@endpush
@endsection