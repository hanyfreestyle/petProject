<div class="header-area" id="headerArea">
    <div class="container">
        <!-- # Header Six Layout -->
        <!-- # Copy the code from here ... -->
        <!-- Header Content -->
        <div
            class="header-content header-style-six position-relative d-flex align-items-center justify-content-between">
            <!-- Search -->
            <div class="search-wrapper">
                <a class="search-trigger-btn" href="{{$backUrl??''}}">
                    <i style="font-size: 32px" class="bi bi-arrow-left-short"></i>
                </a>
            </div>

            <!-- Logo Wrapper -->
            <div class="logo-wrapper">
                <a href="{{route('web.home')}}">
                    <img src="{{ asset('images/fav/logo.png') }}" alt="">
                </a>
            </div>


            <div class="navbar-content-wrapper d-flex align-items-center">
                <!-- Search -->
                <div class="search-wrapper me-2">
                    <a style="font-size: 18px; border-radius: 20px; padding: 8px; background: #e01111; color: #ffffff" class="search-trigger-btn" href="{{route('web.findPet')}}">
                        <i class="fa-solid fa-tower-broadcast"></i>
                    </a>
                </div>

                <!-- Navbar Toggler -->
                <div class="navbar--toggler" id="affanNavbarToggler7" data-bs-toggle="offcanvas"
                     data-bs-target="#affanOffcanvas" aria-controls="affanOffcanvas">
                    <div class="span-wrap">
                        <span class="d-block"></span>
                        <span class="d-block"></span>
                        <span class="d-block"></span>
                    </div>
                </div>
            </div>

            <!-- Navbar Toggler -->

        </div>
        <!-- # Header Six Layout End -->
    </div>
</div>
