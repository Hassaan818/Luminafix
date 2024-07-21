<footer id="rs-footer" class="rs-footer">
    <div class="footer-top">
        <div class="col-md-8 mb-25 offset-md-2">
            @include('admin.partials.success-messages')
            @include('admin.partials.validation-error-messages')
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                    <div class="footer-logo mb-30">
                        <a href="#"><img src="assets/images/logo-dark.png" alt=""></a>
                    </div>
                    <div class="textwidget pb-30">
                        <p>Sedut perspiciatis unde omnis iste natus error sitlutem acc usantium doloremque denounce with illo inventore veritatis</p>
                    </div>
                    <ul class="footer-social md-mb-30">
                        <li>
                            <a href="{{ $setting->facebook ?? '' }}" target="_blank"><span><i class="fa fa-facebook"></i></span></a>
                        </li>
                        <li>
                            <a href="{{ $setting->linkedin ?? '' }}" target="_blank"><span><i class="fa fa-linkedin"></i></span></a>
                        </li>
                    </ul>
                </div>
                @php
            $limitServices = App\Models\Service::limit(5)->get();
            @endphp
                <div class="col-lg-3 col-md-12 col-sm-12 pl-45 md-pl-15 md-mb-30">
                    <h3 class="widget-title">IT Services</h3>
                    <ul class="site-map">
                        @forelse($limitServices as $service)
                        <li><a href="{{ route('service.details', [$service->slug]) }}">{{ $service->title ?? '' }}</a></li>
                        @empty
                        <li>No Service</li>
                        @endforelse
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 md-mb-30">
                    <h3 class="widget-title">Contact Info</h3>
                    <ul class="address-widget">

                        <li>
                            <i class="flaticon-call"></i>
                            <div class="desc">
                                <a href="tel:{{ $setting->phone ?? ''}}">{{ $setting->phone ?? ''}}</a>
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-email"></i>
                            <div class="desc">
                                <a href="mailto:{{$setting->email ?? '' }}">{{$setting->email ?? ''}} </a>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 text-right md-mb-10 order-last">
                    <ul class="copy-right-menu">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about.us') }}">About</a></li>
                        <!-- <li><a href="#">FAQs</a></li> -->
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="copyright">
                        <p>&copy; 2024 All Rights Reserved. Developed By <a href="{{ route('home') }}">Luminafix Group of Companies</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- start scrollUp  -->
<div id="scrollUp" class="orange-color">
    <i class="fa fa-angle-up"></i>
</div>
<!-- End scrollUp  -->

<!-- Search Modal Start -->
<div class="modal fade search-modal" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <button type="button" class="close" data-bs-dismiss="modal">
        <span class="flaticon-cross"></span>
    </button>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="search-block clearfix">
                <form>
                    <div class="form-group">
                        <input class="form-control" placeholder="Search Here..." type="text">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Search Modal End -->