@extends('frontend.layouts.default')
@section('content')
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img3">
    <div class="breadcrumbs-inner text-center">
        <h1 class="page-title">Contact</h1>
        <ul>
            <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                <a class="active" href="{{ route('home') }}">Home</a>
            </li>
            <li>Contact</li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Contact Section Start -->
<div class="rs-contact pt-120 md-pt-80">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mb-25 offset-md-2">
                @include('admin.partials.success-messages')
                @include('admin.partials.validation-error-messages')
            </div>
            <div class="col-lg-12 pl-70 md-pl-15">
                <div class="contact-widget">
                    <div class="sec-title2 mb-40">
                        <span class="sub-text contact mb-15">Get In Touch</span>
                        <h2 class="title testi-title">Fill The Form Below</h2>

                    </div>
                    <div id="form-messages"></div>
                    <form method="post" action="{{ route('contact.store') }}">
                        @method('post')
                        @csrf
                        <fieldset>
                            <div class="row">
                                <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                    <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                </div>
                                <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                    <input class="from-control" type="email" id="email" name="email" placeholder="E-Mail" required="">
                                </div>
                                <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                    <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone Number" required="">
                                </div>


                                <div class="col-lg-12 mb-30">
                                    <textarea class="from-control" id="message" name="message" placeholder="Your message Here"></textarea>
                                </div>
                            </div>
                            <div class="btn-part">
                                <div class="form-group mb-0">
                                    <input class="readon learn-more submit" type="submit" value="Submit Now">
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Section Start -->


@endsection