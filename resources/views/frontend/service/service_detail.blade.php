@extends('frontend.layouts.default')
@section('content')
                 <!-- Breadcrumbs Start -->
                 <div class="rs-breadcrumbs img2">
                <div class="breadcrumbs-inner text-center">
                    <h1 class="page-title">{{ $service?->title }}</h1>
                    <ul>
                        <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                            <a class="active" href="{{ route('home') }}">Home</a>
                        </li>
                        <li title="Go To Services">
                            <a class="active" href="{{ route('services') }}">Services</a>
                        </li>
                        <li>{{ $service?->title }}</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- Services Single Start -->
            <div class="rs-services-single pt-120 pb-120 md-pt-80 md-pb-80">
               <div class="container">
                    <div class="row">
                        <div class="col-lg-8 md-mb-50">
                            <div class="services-img">
                                <img src="{{ $service->getImagePath($service->image) }}" alt="">
                            </div>
                            <h2 class="mt-34">{{ $service?->sub_heading}}</h2>
                            <p>{{ $service?->description }}</p>
                            <h3 class="mt-34">Why Work With Us</h3>
                             <!-- Skillbar Section Start -->
                            <div class="rs-skillbar style1 modify1">
                                <div class="cl-skill-bar">
                                    <div class="row">
                                        @foreach($skills as $skill)
                                        <div class="col-lg-6">
                                            <!-- Start Skill Bar -->
                                            <span class="skillbar-title">{{ $skill?->title }}</span>
                                            <div class="skillbar" data-percent="{{$skill->percentage}}">
                                                <p class="skillbar-bar"></p>
                                                <span class="skill-bar-percent"></span> 
                                            </div>
                                            <!-- Start Skill Bar -->
                                        </div>
                                        @endforeach
                                    </div>                                   
                               </div>
                            </div>
                            <!-- Skillbar Section End -->
                           
                           
                        <p>{{ $service->short_description }}</p>
                        </div>
                        <div class="col-lg-4 pl-32 md-pl-15">
                            <ul class="services-list">
                                @foreach($services as $service)
                                <li><a href="{{ route('service.details',[$service->slug]) }}">{{ $service?->title }}</a></li>
                                @endforeach
                            </ul>
                            <div class="services-add mb-50 mt-50">
                                <div class="address-item mb-35">
                                    <div class="address-icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                </div>
                                <h2 class="title">Have any Questions? <br> Call us Today!</h2>
                                <div class="contact">
                                    <a href="tel:{{ $setting?->phone}}">{{ $setting?->phone}}</a>
                                </div>
                            </div>
                        </div>
                    </div> 
               </div> 
            </div>
            <!-- Services Single End -->

            <!-- Cta section start -->
            <div class="rs-cta style1 bg7 pt-80 pb-80">
                <div class="container">
                    <div class="cta-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-9 col-md-12 md-mb-30">
                                <span>Plan to Start a Project</span>
                                <div class="title-wrap">
                                    <h2 class="epx-title">Our Experts Ready to Help You</h2>
                                </div>
                            </div>
                            <div class="col-lg-3 text-right col-md-12">
                                <div class="button-wrap">
                                    <a class="readon learn-more" href="{{ route('contact.us') }}">Get In Touch</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cta section end -->
@endsection