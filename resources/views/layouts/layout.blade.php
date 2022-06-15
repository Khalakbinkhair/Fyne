<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="UTF-8">
  	<meta name="description" content="Free Web tutorials">
  	<meta name="keywords" content="HTML, CSS, JavaScript">
  	<meta name="author" content="Md. Imranul Islam">
    <title>FYNE</title>
    <!-- <meta property="og:url" content="https://fatmonk.studio/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Fatmonk Studio">
    <meta property="og:description" content="Transform Your Idea Into Reality with Finsweet">
    <meta property="og:image" content="https://fatmonk.studio/frontend/images/logo.png">
    
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="https://fatmonk.studio/">
    <meta name="twitter:title" content="Fatmonk Studio">
    <meta name="twitter:description" content="Transform Your Idea Into Reality with Finsweet">
    <meta name="twitter:image" content="https://fatmonk.studio/frontend/images/logo.png"> -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('frontend/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="{{asset('frontend/css/site.css')}}">
      <!-- Favicon Icon-->
    <link rel="icon" href="{{asset('frontend/images/fab.png')}}" type="image/gif" sizes="16x16">
    @stack('styles')
    <style type="text/css">
      .dropdown:hover>.dropdown-menu {
      display: block;
    }
    </style>
  </head>
  <div class="container-fluid">
  <header>
  <div class="navigation"id="nav">
    <div class="row justify-content-center">
      <div class="col-lg-10 text-center nav-content">
        <a class="navbar-brand pl-4" id="main-nav"href="{{ URL::to('/') }}">    
            <img class="nav-img img-fluid"src="{{asset('frontend/images/logo.png')}}" />
          </a>
        <nav class="navbar navbar-expand-lg navbar-dark">   
          <button id="topbar-menu-icon" class="navbar-toggler fas fa-bars" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          </button>
          <div id="topbar-menu" class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ URL::to('/') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('product') ? 'active' : '' }}" href="{{ URL::to('/product') }}">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('story') ? 'active' : '' }}" href="{{ URL::to('/story') }}">Our Story</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('sustainability') ? 'active' : '' }}" href="{{ URL::to('/sustainability') }}">Sustainability</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('rewards') ? 'active' : '' }}" href="{{ URL::to('/rewards') }}">Rewards</a>
              </li>
               @if (session()->has('loginId'))
              <li class="nav-item">
                <a class="nav-link {{ request()->is('customer-dashboard') ? 'active' : '' }}" href="{{ URL::to('/customer-dashboard') }}">Dashboard</a>
              </li>
              @endif
            </ul>
            @if (session()->has('loginId') && (URL::current() == route('customer_dashboard') || URL::current() == route('customer_profile')))
            <!-- Customer panel -->
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                  <img src="{{asset('frontend/images/user-icon.png')}}" class="img-fluid user-icon" style="width: 1.4rem !important;">
                  {{ $data->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('customer_profile') }}">
                    Profile
                  </a>
                  <a class="dropdown-item" href="{{ route('customer_logout') }}">
                    {{ __('Logout') }}
                  </a>
                </div>
              </li>
            </ul>
            <!-- End Customer panel -->
            @endif
          </div>
        </nav>
      </div>
    </div>
  </div>
  </header>
  <body>
      @yield('content')

     <!-- footer -->
  
    <div class="row footer justify-content-center" id="Contact">
      <div class="col-lg-12 text-center py-lg-5">
        <a href="{{ URL::to('/') }}">    
            <img class="nav-img img-fluid"src="{{asset('frontend/images/logo.png')}}" />
          </a>
      </div>
      <div class="col-lg-10 d-flex pb-4">
        <div class="col-lg-4 text-left">
          <p>
            <b>Our products</b> <br><br>
            Natural spring water<br>
            evian+ Mineral Enhanced Sparkling Drink<br>
            Glass bottle range<br>
            Designer bottles<br>
            Where to buy
          </p>
        </div>
        <div class="col-lg-4 text-center">
          <p>
            <b>Our water</b><br><br>
            Our water<br>
            Water attributes<br>
            Water quality reports
          </p>
        </div>
        <div class="col-lg-4 text-right">
          <p>
            <b>Our company</b><br><br>
            Privacy policy<br>
            Terms & conditions<br>
            California Privacy policy<br>
            Press<br>
            FAQ<br>
            Contact us
          </p>
        </div>
      </div>
      <div class="col-lg-12 text-center footer-content">
          <div class="social-div">
            <p><b>Follow us on</b></p>
            <div class="row social">
              <a href="https://www.facebook.com/fatmonkhere"target="_blank">
                  <img class="img-fluid line" src="{{asset('frontend/images/social-icon/facebook.svg')}}">
                </a>
                 <!-- <a href="https://www.linkedin.com/company/fatmonk/"target="_blank">
                  <img class="img-fluid line" src="{{asset('frontend/images/social-icon/linkedin.svg')}}">
                </a> -->
                <a href="https://www.instagram.com/fatmonkstudio/"target="_blank">
                  <img class="img-fluid line" src="{{asset('frontend/images/social-icon/insta.svg')}}">
                </a>
                <a href="https://twitter.com/FatmonkStudio"target="_blank">
                  <img class="img-fluid line" src="{{asset('frontend/images/social-icon/twitter.svg')}}">
                </a>
            </div>
            
          </div>
          
      </div>
    <div class="col-md-12">
      <div class="row copyright justify-content-center">
        <div class="col-xl-8 col-lg-12">
          <div class="row mobile-order">
            <div class="col-lg-12">
              <p class="text-center">Copyright © 2022 FYNE team. All rights reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
  <script src="{{asset('frontend/js/jquery-3.5.1.min.js')}}"></script>
  <script  src="{{asset('frontend/dist/js/popper.min.js')}}"></script>
  <script  src="{{asset('frontend/dist/js/bootstrap.min.js')}}"></script>
  <script  src="{{asset('frontend/js/nav.js')}}"></script>

  <script>
      $(document).ready(function() {
        $(window).scroll(function() {
          if($(window).scrollTop()>300){
            $('nav').addClass('bg-dark');
          }else{
            $('nav').removeClass('bg-dark');
          }
        }).trigger('scroll');
      });
    </script>
      <!-- load scripts from external pages -->
  @stack('scripts')
  </body>
</html>