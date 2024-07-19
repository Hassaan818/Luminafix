@extends('admin.layouts.default')
@section('content')

<div class="contents">

   <div class="demo2 mb-25 t-thead-bg">
      <div class="container-fluid">
         <div class="row ">
            <div class="col-lg-12">

               <div class="breadcrumb-main">
                  <h4 class="text-capitalize breadcrumb-title">Teams</h4>
               </div>

            </div>
            <div class="col-lg-12">
               <div class="card card-Vertical card-default card-md mb-4">
                  <div class="card-header">
                     <h6>Add New Team </h6>
                     <a href="{{ route('admin.teams.index') }}" class="btn px-15 btn btn-light btn-default btn-squared">
                        Show all Teams</a>
                  </div>
                  <div class="row">
                     <div class="col-md-8 mb-25 offset-md-2">
                        @include('admin.partials.success-messages')
                        @include('admin.partials.validation-error-messages')
                     </div>
                  </div>
                  <div class="card-body py-md-30">
                     <form method="post" action="{{ route('admin.skills.store')}}" enctype="multipart/form-data">
                        @method('post')
                        @csrf
                        <div class="row">
                           <div class="col-md-6 mb-25">
                              <label for="a1" class="il-gray fs-14 fw-500 align-center mb-10">Title</label>
                              <input type="text" name="title" value="{{ old('title') }}" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Title">
                           </div>
                           <div class="col-md-6 mb-25">
                              <label for="a1" class="il-gray fs-14 fw-500 align-center mb-10">Percentage</label>
                              <input type="text" name="percentage" value="{{ old('percentage') }}" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Percentage">
                           </div>
                           
                           <div class="col-md-12">

                              <div class="button-group d-flex pt-sm-25 justify-content-md-end justify-content-start ">

                                 <button type="submit" class="btn btn-primary btn-default btn-squared text-capitalize radius-md shadow2 btn-sm">
                                    Save
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