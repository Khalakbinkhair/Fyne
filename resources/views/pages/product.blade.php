@extends('layouts.layout')
@push('styles')
  <link rel="stylesheet" href="{{asset('frontend/css/page.css')}}">
@endpush
@section('content')

<div class="row justify-content-center padding-top padding-bottom product-banner">
  <div class="offset-md-2 col-lg-10 d-flex align-items-center">
  	<h4 class="product-banner-content">
      Free Carbon Dioxide Nil <br>
      TDS       <200<br>
      Arsenic     Nil<br>
      Cadmium     Nil<br>
      Lead        Nil<br>
      Chlorine      Nil<br>
      Magnesium     <1.00 mg/L<br>
      Nitrate       <4.50 mg/L<br>
      Cyanide     Nil<br>
      PH        6.8 – 7.4<br>
    </h4>
     <!-- <img class="img-fluid w-100"src="{{asset('frontend/images/product-banner.png')}}" /> -->
  </div>
</div>
<div class="row justify-content-center padding-top">
	<div class="col-lg-12 pb-3 text-center">
      <img class="img-fluid"src="{{asset('frontend/images/product-info.svg')}}" />
    </div> 
</div>
<div class="row justify-content-center padding-top">
    <div class="col-lg-12 px-0 text-center">
      <img class="img-fluid w-100"src="{{asset('frontend/images/product-img.png')}}" />
    </div>  
</div>

@push('scripts')
<script type="text/javascript">
	$(document).ready(function() {

	});
</script>
@endpush
@endsection