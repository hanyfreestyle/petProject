<div class="header-area" id="headerArea">
    <div class="container">
        <div class="header-content header-style-two position-relative d-flex align-items-center justify-content-between">
            <div class="logo-wrapper">
                <a href="{{route('web.home')}}">
                    <img src="{{ asset('images/fav/logo.png') }}" alt="">
                </a>
            </div>


            <div class="navbar-content-wrapper d-flex align-items-center">
                <!-- Search -->
                <div class="search-wrapper me-2">
                    <a style="background: #e01111; color: #ffffff" class="search-trigger-btn" href="{{route('web.findPet')}}">
                        <i class="fa-solid fa-tower-broadcast"></i>
                    </a>
                </div>

                <!-- Navbar Toggler -->
                <div class="navbar--toggler" id="affanNavbarToggler3" data-bs-toggle="offcanvas"
                     data-bs-target="#affanOffcanvas" aria-controls="affanOffcanvas">
                    <div class="span-wrap">
                        <span class="d-block"></span>
                        <span class="d-block"></span>
                        <span class="d-block"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
