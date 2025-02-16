<div class="offcanvas offcanvas-start" id="affanOffcanvas" data-bs-scroll="true" tabindex="-1"
     aria-labelledby="affanOffcanvsLabel">

    <button class="btn-close btn-close-white text-reset" type="button" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>

    <div class="offcanvas-body p-0">
        <div class="sidenav-wrapper">
            <div class="sidenav-profile bg-gradient">
                <div class="sideLogo">
                    <img src="{{ asset('images/fav/side-logo.png') }}" style="max-width: 70%!important;" alt="">
                </div>
                <div class="user-info">
                    <h6 class="user-name mb-0">{{$settings->slogan}}</h6>
                </div>
            </div>

            <ul class="sidenav-nav ps-0">
                <li>
                    <a href="{{route('web.home')}}">
                        <i class="fa-solid fa-house-chimney"></i>
                        {{__('web.menu_home')}}
                    </a>
                </li>
                <li>
                    <a href="{{route('web.about')}}">
                        <i class="fa-solid fa-comment-dots"></i>
                        {{__('web.menu_about')}}
                    </a>
                </li>

                <li class="active">
                    <a href="{{route('web.findPet')}}">
                        <i class="fa-solid fa-paw"></i>
                        {{__('web.menu_emergency')}}
                    </a>
                </li>
                <li>
                    <a href="{{route('web.lostPet')}}">
                        <i class="fa-solid fa-dog"></i>
                        {{__('web.menu_lost_pet')}}
                    </a>
                </li>
                <li>
                    <a href="{{route('web.contact')}}">
                        <i class="fa-solid fa-phone-volume"></i>
                        {{__('web.menu_contact')}}
                    </a>
                </li>

                <li>
                    <div class="night-mode-nav">
                        <i class="bi bi-moon"></i> Night Mode
                        <div class="form-check form-switch">
                            <input class="form-check-input form-check-success" id="darkSwitch" type="checkbox">
                        </div>
                    </div>
                </li>

            </ul>


            <div class="social-info-wrap">
                @if($settings->facebook ?? null)
                    <a href="{{$settings->facebook}}">
                        <i class="fa-brands fa-square-facebook"></i>
                    </a>
                @endif
                @if($settings->twitter ?? null)
                    <a href="{{$settings->twitter}}">
                        <i class="fa-brands fa-square-x-twitter"></i>
                    </a>
                @endif
                @if($settings->instagram ?? null)
                    <a href="{{$settings->instagram}}">
                        <i class="fa-brands fa-square-instagram"></i>
                    </a>
                @endif

                @if($settings->linkedin ?? null)
                    <a href="{{$settings->linkedin}}">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                @endif

            </div>

            <!-- Copyright Info -->
            <div class="copyright-info">
                <p>
                    &copy; All Rights Reserved <a href="#"> {{$settings->name}}</a>
                </p>
            </div>
        </div>
    </div>
</div>
