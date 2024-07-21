@extends('frontend.layouts.default')
@section('content')
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img1">
    <div class="breadcrumbs-inner text-center">
        <h1 class="page-title">About</h1>
        <ul>
            <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                <a class="active" href="{{ route('home') }}">Home</a>
            </li>
            <li>About</li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- About Section Start -->
<div class="rs-about gray-color pt-120 pb-120 md-pt-80 md-pb-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 md-mb-30">
                <div class="rs-animation-shape">
                    <div class="images">
                        @if(isset($about->image))
                        <img src="{{ $about->getImagePath($about->image)}}" alt="">
                        @endif
                    </div>
                    <div class="middle-image2">
                        <img class="dance3" src="assets/images/about/effect-1.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt-5 md-pl-15">
                <div class="contact-wrap">
                    <div class="sec-title mb-30">
                        <div class="sub-text style-bg">About Us</div>
                        @if(isset($about->short_description))
                        <h2 class="title pb-38" style="background-color: #fde054;
    padding: 10px 10px 10px 10px;
    border-radius: 10px;">
                            {!! $about->short_description ?? ''!!}
                        </h2>
                        @endif
                        @if(isset($about->description))
                        <p class="margin-0 pb-15">
                            {!! $about->description ?? ''!!}
                        </p>
                        @endif
                    </div>

                </div>
            </div>
        </div>
        <div class="shape-image">
            <img class="top dance" src="{{ asset('frontend/assets/images/about/dotted-3.png') }}" alt="">
        </div>
    </div>
</div>
<!-- About Section End -->

<!-- Team Section Start -->
<div class="rs-team pt-120 pb-120 md-pt-80 md-pb-80 xs-pb-54">
    <div class="sec-title2 text-center mb-30">
        <span class="sub-text style-bg">Team</span>
        <h2 class="title white-color">
            Expert IT Consultants
        </h2>
    </div>
    <div class="container">
        <div class="container">
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
                @forelse($teams as $team)
                <div class="team-item-wrap">
                    <div class="team-wrap">
                        <div class="image-inner">
                            @if(isset($team->image))
                            <a href="{{ route('team.details',[$team->slug]) }}"><img style="width: 329px; height: 219px" src="{{ $team->getImagePath($team->image) }}" alt=""></a>
                            @endif
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4 class="person-name"><a href="{{ route('team.details',[$team->slug]) }}">{{ $team->name ?? ''}}</a></h4>
                        <span class="designation">{{ $team->job_title ?? ''}}</span>
                        <ul class="team-social">
                            <li><a href="{{ $team->facebook }}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{ $team->instagram }}"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="{{ $team->twitter }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                        <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z" />
                                    </svg></a></li>
                            <li><a href="{{ $team->linkedin }}"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>


                </div>
                @empty
                <div class="team-content text-center">
                    Empty
                </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
<!-- Team Section End -->
@endsection