<header id="rs-header" class="rs-header">
    <!-- Topbar Area Start -->
    <div class="topbar-area">
        <div class="container">
            <div class="row rs-vertical-middle">
                <div class="col-lg-2">
                    <div class="logo-part">
                        <a href="#"><img style="height: 100px;" src="{{ $setting->getImagePath($setting->logo) }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10 text-right">
                    <ul class="rs-contact-info">

                        <li class="contact-part">
                            <i class="flaticon-email"></i>
                            <span class="contact-info">
                                <span>E-mail</span>
                                <a href="mailto:{{$setting->email ?? '' }}"> {{ $setting->email ?? ''}}</a>
                            </span>
                        </li>
                        <li class="contact-part no-border">
                            <i class="flaticon-call"></i>
                            <span class="contact-info">
                                <span>Phone</span>
                                <span style="margin-top: 5px; font-size: 14px;">{{ $setting->phone ?? ''}}</span>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar Area End -->

    <!-- Menu Start -->
    <div class="menu-area menu-sticky">
        <div class="container">
            <div class="logo-area">
                <a href="{{ route('home') }}">
                    @if(isset($setting->logo))
                    <img class="sticky-logo" src="{{ $setting->getImagePath($setting->logo) }}" alt="logo">
                    @endif
                </a>
            </div>
            <div class="rs-menu-area">
                <div class="main-menu">
                    <div class="mobile-menu">
                        <a href="#" class="mobile-logo">
                            @if(isset($setting->logo))
                            <img src="{{ $setting->getImagePath($setting->logo) }}" alt="logo">
                            @endif
                        </a>
                        <a href="#" class="rs-menu-toggle rs-menu-toggle-close">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <nav class="rs-menu">
                        <ul class="nav-menu">
                            <li class="{{ (request()->is('/')) ? 'active' : '' }}current-menu-item"> <a href="{{ route('home') }}">Home</a></li>
                            <li class="{{ (request()->is('about')) ? 'active' : '' }}current-menu-item">
                                <a href="{{ route('about.us') }}">About</a>
                            </li>
                            @php
                            $limitServices = App\Models\Service::limit(6)->get();
                            @endphp
                            <li class="{{ (request()->is('services')) ? 'active' : '' }}current-menu-item">
                                <a href="{{ route('services') }}">Services</a>
                                <ul class="sub-menu">
                                    @foreach($limitServices as $service)
                                    <li><a href="{{ route('service.details', [$service->slug] )}}">{{$service?->title}}</a> </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="{{ (request()->is('team')) ? 'active' : '' }}current-menu-item">
                                <a href="{{ route('team') }}">Our Team</a>
                            </li>
                            <li class="{{ (request()->is('contact')) ? 'active' : '' }}current-menu-item">
                                <a href="{{ route('contact.us') }}">Contact Us</a>
                            </li>


                        </ul> <!-- //.nav-menu -->
                    </nav>
                </div> <!-- //.main-menu -->
            </div>
            <div class="expand-btn-inner search-icon hidden-sticky hidden-md">

                <div class="toolbar-sl-share">
                    <ul class="social">
                        <li><a href="{{ $setting->facebook ?? '' }}"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="{{ $setting->twitter ?? '' }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z" />
                                </svg></a></li>
                        <li><a href="{{ $setting->google_plus ?? '' }}"><i class="fa fa-google"></i></a></li>
                        <li><a href="{{ $setting->instagram ?? '' }}"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="{{ $setting->linkedin ?? '' }}"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->
</header>