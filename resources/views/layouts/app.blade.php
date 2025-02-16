<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#0134d4">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="icon" href="{{ asset('images/fav/fav.png') }}">
    <title>{{$settings->name}} - {{$settings->slogan}} </title>
    <meta name="description" content="">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

<div id="preloader">
    <div class="spinner-grow text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>

<div class="internet-connection-status" id="internetStatus"></div>


<div class="header-area" id="headerArea">
    <div class="container">
        <div class="header-content header-style-five position-relative d-flex align-items-center justify-content-between">
            <div class="logo-wrapper">
                <a href="{{route('web.home')}}">
                    <img src="{{ asset('images/fav/logo.png') }}" alt="">
                </a>
            </div>
            <div class="navbar--toggler" id="affanNavbarToggler" data-bs-toggle="offcanvas" data-bs-target="#affanOffcanvas"
                 aria-controls="affanOffcanvas">
                <span class="d-block"></span>
                <span class="d-block"></span>
                <span class="d-block"></span>
            </div>
        </div>
    </div>
</div>


@include('layouts.inc.side-nav')

<div class="page-content-wrapper">
@yield('content')
</div>

@include('layouts.inc.footer')


<!-- All JavaScript Files -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/slideToggle.min.js') }}"></script>
<script src="{{ asset('assets/js/internet-status.js') }}"></script>
<script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
<script src="{{ asset('assets/js/venobox.min.js') }}"></script>
<script src="{{ asset('assets/js/countdown.js') }}"></script>
<script src="{{ asset('assets/js/rangeslider.min.js') }}"></script>
<script src="{{ asset('assets/js/vanilla-dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/index.js') }}"></script>
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/dark-rtl.js') }}"></script>
<script src="{{ asset('assets/js/active.js') }}"></script>
<script src="{{ asset('assets/js/pwa.js') }}"></script>



@stack('scripts')

</body>


</html>
