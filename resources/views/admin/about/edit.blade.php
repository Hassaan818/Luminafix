@extends('admin.layouts.default')
@section('content')
<div class="contents">

    <div class="demo2 mb-25 t-thead-bg">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-12">

                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">About Us</h4>
                    </div>

                </div>
                <div class="col-lg-12">
                    <div class="card card-Vertical card-default card-md mb-4">
                      
                        <div class="row">
                            <div class="col-md-8 mb-25 offset-md-2">
                                @include('admin.partials.success-messages')
                                @include('admin.partials.validation-error-messages')
                            </div>
                        </div>
                        <div class="card-body py-md-30">
                            <form method="post" action="{{ route('admin.abouts.update',[$abouts->id])}}" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-25">
                                        <label for="a1" class="il-gray fs-14 fw-500 align-center mb-10">Short Description
                                        <span style="color: red;"> (Short Description not more than 50 words)</span></label>
                                        <input type="text" name="short_description" value="{{ old('short_description', $abouts->short_description) }}" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Short Description">
                                    </div>
                                    <div class="col-md-12 mb-25">
                                        <label for="a1" class="il-gray fs-14 fw-500 align-center mb-10">Description</label>
                                        <textarea name="description" id="mail-reply-message2" class="form-control-md" placeholder="Type your text...">{{ old('description', $abouts->description) }}</textarea>
                                    </div>

                                    <div class="col-md-6 mb-25">
                                        <div class="custom-file">
                                            <label for="image" class="il-gray fs-14 fw-500 align-center mb-10">Image</label>
                                            <input class="form-control custom-file-input" type="file" name="image" id="customFile">
                                        </div>
                                        @if(isset($abouts->image))
                                        <div>
                                            <a href="{{ $abouts->getImagePath($abouts->image) }}" class="text-dark fw-500">
                                                <img class="ap-img__main rounded-circle wh-100 bg-lighter d-flex" src="{{ $abouts->getImagePath($abouts->image) }}" alt="profile">
                                            </a>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="col-md-12">

                                        <div class="button-group d-flex pt-sm-25 justify-content-md-end justify-content-start ">

                                            <button type="submit" class="btn btn-primary btn-default btn-squared text-capitalize radius-md shadow2 btn-sm">
                                                Update
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- ends: .card -->

                </div>


            </div>
            <!-- ends: .row -->
        </div>
    </div>

</div>

@endsection