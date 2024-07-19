@extends('frontend.layouts.default')
@section('content')

            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs img4">
                <div class="breadcrumbs-inner text-center">
                    <h1 class="page-title">{{ $team?->name }}</h1>
                    <ul>
                        <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                            <a class="active" href="{{ route('home') }}">Home</a>
                        </li>
                        <li title="Go to the It Technology categories archives"><a class="active" href="#">IT Technology</a></li>
                       <li>{{ $team?->name }}</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- Team Start -->
            <div class="rs-team-Single pt-120 pb-100 md-pt-80 md-pb-60">
                <div class="container">
                    <div class="btm-info-team">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="images-part">
                                    <img src="{{ $team->getImagePath($team->image) }}" alt="images">
                                </div>
                            </div>
                            <div class="col-lg-7 sm-pt-30">
                                <div class="con-info">
                                    <span class="designation-info">{{$team?->job_title}} </span>
                                    <h2 class="title">{{ $team?->name}}</h2>
                                    <div class="short-desc">
                                       {{ $team?->short_description }}
                                    </div>
                                    <div class="ps-informations">
                                        <ul class="personal-info">
                                            <li>
                                                <span><i class="flaticon-email"> </i> </span>
                                                <a href="mailto:{{$team?->email}}">{{$team?->email}}</a>
                                            </li>

                                            <li>
                                                <span><i class="flaticon-call"></i></span> {{$team?->phone}}
                                            </li>
                                        </ul>
                                        <ul class="social-info">
                                            <li><a href="{{$team?->facebook}}"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="{{$team?->X}}"><i class="fa fa-twitter"></i></a></li>
                                            @if(isset($team->instagram))<li><a href="{{$team?->instagram}}"><i class="fa fa-instagram"></i></a></li>@endif
                                            <li><a href="{{$team?->linkedin}}"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-7 pr-55 md-pr-15">
                            <div class="project-con">
                                <h3>Biography</h3>
                                {!! $team?->description !!}    
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <h3>Professional Skills</h3>
                             <!-- Skillbar Section Start -->
                            <div class="rs-skillbar style1 modify2">
                                <div class="cl-skill-bar">
                                    @foreach($team?->skills as $skill)
                                   <!-- Start Skill Bar -->
                                   <span class="skillbar-title">{{ $skill?->title}}</span>
                                   <div class="skillbar" data-percent="{{ $skill?->percentage}}">
                                       <p class="skillbar-bar"></p>
                                       <span class="skill-bar-percent"></span> 
                                   </div>
                                   @endforeach
 
                                  
                               </div>
                            </div>
                            <!-- Skillbar Section End -->
                        </div> 
                    </div>
                </div>
            </div>
            <!-- Team End -->






@endsection