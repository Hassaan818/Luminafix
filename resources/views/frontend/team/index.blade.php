@extends('frontend.layouts.default')
@section('content')
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img4">
    <div class="breadcrumbs-inner text-center">
        <h1 class="page-title">Our Team</h1>
        <ul>
            <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                <a class="active" href="{{ route('home') }} ">Home</a>
            </li>
            <li>Our Team</li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Team Section Start -->
<div class="rs-team modify1 pt-120 pb-95 md-pt-80 md-pb-75">
    <div class="container">
        <div class="row">
            @forelse($teams as $team)
            <div class="col-lg-4 col-md-6 mb-50">
                <div class="team-item-wrap">
                    <div class="team-wrap">
                        <div class="image-inner">
                            @if(isset($team->image))
                            <a href="#"><img style="height:330px; width:330px;" src="{{ $team->getImagePath($team->image) }}" alt=""></a>
                            @endif
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4 class="person-name"><a href="{{ route('team.details',[$team->slug]) }}">{{ $team->name ?? ''}}</a></h4>
                        <span class="designation">{{ $team->job_title ?? ''}}</span>
                        <ul class="team-social">
                            @if(isset($team->facebook))
                            <li><a href="{{ $team?->facebook }}"><i class="fa fa-facebook"></i></a></li>
                            @endif
                            @if(isset($team->instagram))
                            <li><a href="{{ $team?->instagram }}"><i class="fa fa-instagram"></i></a></li>
                            @endif
                            @if(isset($team->X))
                            <li><a href="{{ $team?->X }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                        <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z" />
                                    </svg></a></li>
                            @endif
                            @if(isset($team->linkedin))
                            <li><a href="{{ $team?->linkedin }}"><i class="fa fa-linkedin"></i></a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-lg-4 col-md-6 mb-50">
                No Teams
            </div>
            @endforelse

        </div>
    </div>
</div>
<!-- Team Section End -->



@endsection