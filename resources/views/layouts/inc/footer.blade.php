<div class="footer-nav-area" id="footerNav">
    <div class="container px-0">
        <div class="footer-nav position-relative shadow-sm footer-style-two">
            <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
                <li>
                    <a href="{{route('web.home')}}">
                        <i class="fa-solid fa-house-chimney"></i>
                        <span>{{__('web.menu_home')}}</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('web.about')}}">
                        <i class="fa-solid fa-comment-dots"></i>
                        <span>{{__('web.menu_about')}}</span>
                    </a>
                </li>

                <li class="active">
                    <a href="{{route('web.findPet')}}">
                        <i class="fa-solid fa-paw"></i>
                    </a>
                </li>
                <li>
                    <a href="{{route('web.lostPet')}}">
                        <i class="fa-solid fa-dog"></i>
                        <span>{{__('web.menu_lost_pet')}}</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('web.contact')}}">
                        <i class="fa-solid fa-phone-volume"></i>
                        <span>{{__('web.menu_contact')}}</span>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</div>


