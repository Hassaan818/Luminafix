<!DOCTYPE html>
<html lang="zxx">
@include('frontend.partials.head')

<body class="defult-home">
    <div class="main-content">

        <div class="full-width-header">
            <!--Header Start-->
            @include('frontend.partials.header')
            <!--Header End-->
        </div>

        <!-- Main content Start -->
        @yield('content')
        <!-- Main content End -->

        <!-- Footer Start -->
        @include('frontend.partials.footer')
        <!-- Footer End -->
    </div>


    @include('frontend.partials.script')
</body>

</html>