@extends('frontend.layouts.default')
@section('content')



<!-- Slider Section Start -->
<!-- Banner Section Start -->
<div class="rs-banner main-home pt-100 pb-100  md-pt-80 md-pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 pr-140 md-mb-140 md-pr-15">
                <div class="content-wrap">
                    <h1 class="it-title">IT Consulting Services For Your Business</h1>
                    <div class="description">
                        <p class="desc">
                            We are leading technology solutions providing company all over the world doing over 40 years.
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-lg-5 col-md-12 pl-70 md-pl-15">
                <div class="rs-contact">
                    <div class="contact-wrap">
                        <div class="content-part mb-25">
                            <h2 class="title mb-15">Schedule Your Appointment</h2>
                            <p class="desc">We here to help you 24/7 with experts</p>
                        </div>
                        <div class="col-md-8 mb-25 offset-md-2">
                        @include('admin.partials.success-messages')
                        @include('admin.partials.validation-error-messages')
                        </div>
                        <form method="post" action="{{ route('subscription.store') }}">
                        @method('post')
                        @csrf
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-12 mb-15">
                                        <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                    </div>
                                    <div class="col-lg-12 mb-15">
                                        <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail" required="">
                                    </div>
                                    <div class="col-lg-12 mb-15">
                                        <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone Number" required="">
                                    </div>
                                    <div class="col-lg-12 mb-15">
                                        <input class="form-control" type="datetime-local" name="dateTime" id="datetime">
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <input class="submit-btn" type="submit" value="Submit Now">
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Section End -->

<!-- Slider Section End -->

<!-- About Section Start -->
<div id="rs-about" class="rs-about style1 pt-130 pb-190 md-pt-80 md-pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 md-mb-50">
                <div class="rs-animation-shape">
                    <div class="pattern">

                        @if(isset($about->image))
                        <img style="width: 465px; height: 300px;" src="{{ $about->getImagePath($about->image) }}" alt="">
                        @endif
                    </div>


                </div>
            </div>
            <div class="col-lg-7 col-md-12 pl-40 md-pl-15 md-pt-200 sm-pt-0">
                <div class="sec-title mb-30">
                    <div class="sub-text" style="margin-top: 10px;">About Us</div>
                    <!-- <p class="title pb-20">
                                    {!! $about->short_description ?? '' !!}
                                </p> -->
                </div>
                <div class="col-lg-12 md-12">
                    @if(isset($about->short_description))
                    <div class="desc pr-90 md-pr-0">
                        {!! $about->short_description ?? '' !!}
                    </div>
                    @endif
                </div>
                <!-- Skillbar Section Start -->
                <div class="row">
                    <div class="col-lg-10">
                        <div class="rs-skillbar style1">
                            <div class="cl-skill-bar">
                                <!-- Start Skill Bar -->
                                @foreach($skills as $skill)
                                <span class="skillbar-title">{{ $skill?->title }}</span>
                                <div class="skillbar" data-percent="92">
                                    <p class="skillbar-bar"></p>
                                    <span class="skill-bar-percent"></span>
                                </div>
                                @endforeach
                                <div class="btn-part mt-55">
                                    <a class="readon learn-more" href="{{ route('about.us') }}">Learn-More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Skillbar Section End -->
            </div>
        </div>
    </div>
</div>
<!-- About Section End -->

<!-- Project Section Start -->
<div class="rs-project bg5 style1 pt-110 md-pt-80">
    <div class="container">
        <div class="sec-title2 text-center mb-45 md-mb-30">
            <span class="sub-text black-color">Project</span>
            <h2 class="title black-color">
                Our Successfull Projects
            </h2>
        </div>
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="true" data-md-device-dots="false">

            @forelse($projects as $project)
            <div class="project-item">
                <div class="project-img">
                    <a href="#"><img style="width: 300px; height:300px" src="{{ $project->getImagePath($project->image) }}" alt="images"></a>
                </div>
                <div class="project-content">
                    <h3 class="title"><a href="#">{{ $project?->title }}</a></h3>
                </div>
            </div> @empty
            <div>No Projects</div>
            @endforelse
        </div>

    </div>
</div>
<!-- Project Section End -->

<!-- Services Section Start -->
@php
$limitServices = App\Models\Service::limit(6)->get();
@endphp
<div class="rs-services main-home gray-color pt-120 pb-120 md-pt-70 md-pb-70">
    <div class="container">
        <div class="sec-title2 text-center mb-45">
            <span class="sub-text">Services</span>
            <h2 class="title">
                We Are Offering All Kinds of IT Solutions Services
            </h2>
            <div class="heading-line"></div>
        </div>
        <div class="row">
            @foreach($limitServices as $service)
            <div class="col-lg-4 col-md-6 mb-25">
                <div class="services-item">
                    <div class="services-icon">
                        <div class="image-part">
                            @if(isset($service->logo))
                            <img style="width: 80; height: 80px;" src="{{ $service->getImagePath($service->logo) }}" alt="">
                            @endif
                        </div>
                    </div>
                    <div class="services-content">
                        <div class="services-text">
                            <h3 class="services-title"><a href="{{ route('service.details', [$service->slug]) }}">{{ $service->title ?? '' }}</a></h3>
                        </div>
                        <div class="services-desc">
                            @if(isset($service->short_description))
                            <p>
                                {!! Str::limit($service->short_description ?? '',200) !!}
                            </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>




<!-- Testimonial Section Start -->
<div class="rs-testimonial main-home gray-color pt-120 pb-120 md-pt-80 md-pb-80">
    <div class="container">
        <div class="sec-title2 text-center mb-45">
            <span class="sub-text">Testimonial</span>
            <h2 class="title testi-title">
                What Saying Our Customers
            </h2>
            <div class="heading-line">

            </div>
        </div>
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-md-device="1" data-md-device-nav="false" data-md-device-dots="true" data-center-mode="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="true" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false">

            @forelse($testimonials as $testimonial)
            <div class="testi-item">
                <div class="author-desc">
                    @if(isset($testimonial->description))
                    <div class="desc"><img class="quote" src="{{ asset('frontend/assets/images/testimonial/main-home/quote2.png') }}" alt="">{!! $testimonial->description ?? '' !!}</div>
                    @endif
                    <div class="author-img">
                        @if($testimonial->image)
                        <img src="{{$testimonial->getImagePath($testimonial->image) }}" alt="">
                        @endif
                    </div>
                </div>
                <div class="author-part">
                    <a class="name" href="#">{{ $testimonial->title ?? ''}}</a>
                </div>

            </div> @empty
            <div class="author-desc">
                <p>No Testimonials</p>
            </div>
            @endforelse




        </div>
    </div>
</div>
<!-- Testimonial Section End -->






@endsection