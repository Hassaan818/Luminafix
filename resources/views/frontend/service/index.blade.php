@extends('frontend.layouts.default')
@section('content')

         
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs img3">
                <div class="breadcrumbs-inner text-center">
                    <h1 class="page-title">Our Services</h1>
                    <ul>
                        <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                            <a class="active" href="{{ route('home') }}">Home</a>
                        </li>
                       <li>Services we offer</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- Services Section Start -->
            <div class="rs-services style4 modify1 services3 gray-color pt-120 pb-120 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row">
                        @forelse($services as $service)
                        <div class="col-lg-4 col-md-6 mb-20">
                            <div class="services-item">
                                @if(isset($service->logo))
                                <div class="services-icon">
                                    <img src="{{ $service->getImagePath($service->logo) }}" alt="">
                                </div>
                                @endif
                                <div class="services-content">
                                    <h2 class="title"><a href="{{ route('service.details', [$service->slug]) }}">{{ $service?->title }}</a></h2>
                                    <p class="desc">
                                       {{ $service?->short_description}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div>No Services Available</div>
                       @endforelse
                    </div>
                </div>
            </div>
            <!-- Services Section End -->
          

            <!-- Process Section Start -->
            <div class="rs-process style5 bg7 pt-120 pb-120 md-pt-80 md-pb-65">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 md-pb-50">
                            <div class="process-wrap bg3">
                                <div class="sec-title mb-30">
                                    <div class="sub-text new">Working Process</div>
                                    <h2 class="title white-color">
                                        Our Working Process -  How We Work For Our Customers
                                    </h2>
                                </div>
                                <div class="btn-part mt-40">
                                    <a class="readon learn-more" href="{{ route('contact.us') }}">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 pl-30 md-pl-15">
                            <div class="row">
                                <div class="col-md-6 mb-40">
                                    <div class="rs-addon-number">
                                        <div class="number-text">
                                            <div class="number-area">
                                                1.
                                            </div>
                                            <div class="number-title">
                                                <h3 class="title"> Planning</h3>
                                            </div>
                                            <p class="number-txt">Identify the purpose, goals, and target audience of the website.
                                           </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-40">
                                    <div class="rs-addon-number">
                                        <div class="number-text">
                                            <div class="number-area">
                                                2.
                                            </div>
                                            <div class="number-title">
                                                <h3 class="title">Analysis</h3>
                                            </div>
                                            <p class="number-txt">Collect detailed functional and non-functional requirements from stakeholders.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="rs-addon-number">
                                        <div class="number-text">
                                            <div class="number-area">
                                                3.
                                            </div>
                                            <div class="number-title">
                                                <h3 class="title">Design</h3>
                                            </div>
                                            <p class="number-txt">Develop the graphical interface, including color scheme, typography, and branding elements.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="rs-addon-number">
                                        <div class="number-text">
                                            <div class="number-area">
                                                4.
                                            </div>
                                            <div class="number-title">
                                                <h3 class="title">Development</h3>
                                            </div>
                                            <p class="number-txt">Implement the UI designs using HTML, CSS, and JavaScript to create the client-side of the website.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="rs-addon-number">
                                        <div class="number-text">
                                            <div class="number-area">
                                                5.
                                            </div>
                                            <div class="number-title">
                                                <h3 class="title">Deployment</h3>
                                            </div>
                                            <p class="number-txt">Prepare the website for deployment, including final testing, content migration, and optimization.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="rs-addon-number">
                                        <div class="number-text">
                                            <div class="number-area">
                                                6.
                                            </div>
                                            <div class="number-title">
                                                <h3 class="title">Maintenance</h3>
                                            </div>
                                            <p class="number-txt">Implement updates to content, features, and security patches to keep the website current and secure.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="rs-addon-number">
                                        <div class="number-text">
                                            <div class="number-area">
                                                7.
                                            </div>
                                            <div class="number-title">
                                                <h3 class="title">Evaluation</h3>
                                            </div>
                                            <p class="number-txt">Monitor user behavior, traffic sources, and other metrics using tools like Google Analytics to evaluate website performance.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Process Section End -->


@endsection