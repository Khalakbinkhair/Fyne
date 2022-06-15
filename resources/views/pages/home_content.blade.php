@extends('layouts.layout')
@push('styles')
  <link rel="stylesheet" href="{{asset('frontend/css/home.css')}}">
@endpush
@section('content')
<div class="bg1">
  <img class="img-fluid"src="{{asset('frontend/images/bg1.png')}}" />
</div>
<div class="row justify-content-center banner">
    <div class="col-lg-10 px-lg-0">
      <div class="row">
  			<div class="col-md-5 pb-3 pl-lg-0  order-md-0 order-1">
  				<div class="header-content">
  					<h1>Water the way nature intended.</h1>
  					<p>It’s a uniquely sourced deep tube well water that’s always refreshing and naturally hydrating, with nothing added for taste or enhanced with extras - so you can reach your natural peak.</p>
  				</div>
  			</div>
  			<div class="col-md-7 pb-3 text-right banner-img pr-lg-0 order-md-1 order-0">
          <img class="img-fluid img-3"src="{{asset('frontend/images/banner-bg.png')}}" />
          <div class="left-bottle d-flex justify-content-center align-items-center"><img class="img-fluid img-1"src="{{asset('frontend/images/bottle.png')}}" /></div>	
          <div class="right-bottle d-flex justify-content-center align-items-center"> <img class="img-fluid img-2"src="{{asset('frontend/images/bottle.png')}}" /></div> 
  			</div>
        <div class="col-lg-12 bannerBtn px-lg-0">
          <div class="box"></div>
          <a class="btn showbtn" href="#">Learn More &nbsp;<img class="img-fluid"src="{{asset('frontend/images/arrow-w.png')}}" /></a>
        </div>
		  </div>
    </div>
</div>
<div class="row justify-content-center padding-top padding-bottom story">
    <div class="col-lg-12 pl-lg-0">
      <div class="row">
        <div class="col-md-6 pb-3 story-img pl-lg-0 px-0">
          <img class="img-fluid"src="{{asset('frontend/images/story-bg.png')}}" />
        </div>
        <div class="col-md-5 pb-3">
          <div class="story-content ">
            <h1>Our Story</h1>
            <p>
              Fineway Foods and Beverage was founded in December 28, 2004 in Comilla BSCIC (Bangladesh Small and Cottage Industries Corporation) Industrial Estate where the factory is located. 
              Our factory has Hazard Analysis Critical Control Point (HACCP), a pre-requisite to enter markets in the US and the European Union. So, the HACCP implementation should generate confidence on product safety among the consumers not only in international markets but also in our domestic market.
              Our factory is strategically located in Comilla which is halfway in between Chittagong and Dhaka.
            </p>
             <a class="btn showbtn" href="{{route('story')}}">Learn More &emsp; &emsp;<img class="img-fluid"src="{{asset('frontend/images/arrow.png')}}" /></a>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="row justify-content-center padding-top padding-bottom sustainability">
    <div class="col-lg-12">
      <div class="row align-items-center">
        
        <div class="offset-md-1 col-md-5 pb-3 order-md-0 order-1">
          <div class="sustainability-content ">
            <h1>Our Sustainability Actions</h1>
            <p>
              Fineway Foods and Beverage was founded in December 28, 2004 in Comilla BSCIC (Bangladesh Small and Cottage Industries Corporation) Industrial Estate where the factory is located. 
              Our factory has Hazard Analysis Critical Control Point (HACCP), a pre-requisite to enter markets in the US and the European Union. So, the HACCP implementation should generate confidence on product safety among the consumers not only in international markets but also in our domestic market.
              Our factory is strategically located in Comilla which is halfway in between Chittagong and Dhaka.
            </p>
             <a class="btn showbtn" href="#">Learn More &emsp; &emsp;<img class="img-fluid"src="{{asset('frontend/images/arrow.png')}}" /></a>
          </div>
        </div>

        <div class="col-md-5 pb-3 sustainability-img order-md-1 order-0">
       <img class="img-fluid img-1"src="{{asset('frontend/images/bottle.png')}}" />
          <img class="img-fluid img-2"src="{{asset('frontend/images/bottle.png')}}" />
        </div>
      </div>
    </div>
</div>
<div class="bg2">
  <img class="img-fluid"src="{{asset('frontend/images/bg2.png')}}" />
</div>
<div class="row justify-content-center padding-top padding-bottom product">
    <div class="col-lg-8 text-center">
        <h1>Our Product</h1>
        <p class="text-center">
          All of our plastic products are BPA-free, ensuring drinking safety. They are non-toxic, tasteless, anti-impact. Most importantly, they are more flexible in molding. Our state-of-the-art facility is BSTI audited. We guarantee all our products. We enhance quality of life for everyone, today and for generations to come
        </p>
    </div>
</div>

<div class="row justify-content-center padding-bottom service">
    <div class="col-lg-9 text-center">
        <h1>Our Services</h1>
        <div class="row justify-content-center">
          <div class="col-md-3 pb-4">
            <div class="card">
              <img class="card-img-top" src="{{asset('frontend/images/FYNE Bottle 1.png')}}" alt="Card image cap">
              <div class="card-body ">
                <h5 class="card-title">Corporate office</h5>
                <p class="card-text">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 pb-4">
            <div class="card">
              <img class="card-img-top" src="{{asset('frontend/images/FYNE Bottle 1.png')}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Retail / Distributor</h5>
                <p class="card-text">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 pb-4">
            <div class="card">
              <img class="card-img-top" src="{{asset('frontend/images/FYNE Bottle 1.png')}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Fast Food / Restaurant</h5>
                <p class="card-text">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 pb-4">
            <div class="card">
              <img class="card-img-top" src="{{asset('frontend/images/FYNE Bottle 1.png')}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Hotels</h5>
                <p class="card-text">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
                </p>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
<div class="bg3">
  <img class="img-fluid"src="{{asset('frontend/images/bg3.png')}}" />
</div>
<div class="row justify-content-center padding-top padding-bottom product-info">
    <div class="col-lg-9">
      <div class="row">     
        <div class="col-md-6 pb-3">
          <div class="info-content">
            <h1>Product<br> Information</h1>
            <p>
              Fine drinking water is pure and safe, processed through reverse osmosis and ozonize technology from natural drinking water.
            </p>
            <h5>
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
            </h5>
          </div>
        </div>
        <div class="col-md-6 pb-3 story-img">
          <img class="img-fluid"src="{{asset('frontend/images/FYNE Bottle 3.png')}}" />
        </div>
      </div>
      <div class="col-lg-12 pb-3 text-center">
          <img class="img-fluid"src="{{asset('frontend/images/product-info.svg')}}" />
        </div>
    </div>
</div>
<div class="row justify-content-center padding-top padding-bottom reward">
    <div class="col-lg-8 text-center ">
        <h1>Rewards</h1>
        <p class="text-center ">
          All of our plastic products are BPA-free, ensuring drinking safety. They are non-toxic, tasteless, anti-impact. Most importantly, they are more flexible in molding. Our state-of-the-art facility is BSTI audited. We guarantee all our products. We enhance quality of life for everyone, today and for generations to come
        </p>
    </div>
    <div class="col-lg-8 pb-3 text-center">
          <img class="img-fluid"src="{{asset('frontend/images/gift card.png')}}" />
        </div>
</div>
@push('scripts')
<script type="text/javascript">
	$(document).ready(function() {

	});
</script>
@endpush
@endsection