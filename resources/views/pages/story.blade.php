@extends('layouts.layout')
@push('styles')
  <link rel="stylesheet" href="{{asset('frontend/css/page.css')}}">
@endpush
@section('content')

<div class="row justify-content-center story-banner">
    <div class="col-lg-10 pl-lg-0">
      <div class="row">
        <div class="col-md-6 story-img pl-lg-0 px-0 text-right">
          <img class="img-fluid"src="{{asset('frontend/images/story-banner.png')}}" />
        </div>
        <div class="col-md-5 pb-3 padding-top">
          <div class="story-content">
            <h1>We are with <br>Youth</h1>
            <p>
              	Fineway Foods and Beverage was founded in December 28, 2004 in Comilla BSCIC (Bangladesh Small and Cottage Industries Corporation) Industrial Estate where the factory is located. 
				Our factory has Hazard Analysis Critical Control Point (HACCP), a pre-requisite to enter markets in the US and the European Union. So, the HACCP implementation should generate confidence on product safety among the consumers not only in international markets but also in our domestic market.
				Our factory is strategically located in Comilla which is halfway in between Chittagong and Dhaka.

            </p>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="row justify-content-center story-sports">
    <div class="col-lg-10 pl-lg-0">
      <div class="row">
        
        <div class="col-md-8 sports-content order-md-0 order-1 padding-top">
            <h1>We Keep Our <br>Sportsman Sprite alive</h1>
            <p>
              	Fineway Foods and Beverage was founded in December 28, 2004 in Comilla BSCIC (Bangladesh Small and Cottage Industries Corporation) Industrial Estate where the factory is located. 
				Our factory has Hazard Analysis Critical Control Point (HACCP), a pre-requisite to enter markets in the US and the European Union. So, the HACCP implementation should generate confidence on product safety among the consumers not only in international markets but also in our domestic market.
				Our factory is strategically located in Comilla which is halfway in between Chittagong and Dhaka.

            </p>
        </div>
        <!-- <div class="col-md-4 pb-3 story-img pl-lg-0 px-0 text-right  order-md-1 order-0">
          <img class="img-fluid"src="{{asset('frontend/images/bottle.png')}}" />
        </div> -->
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