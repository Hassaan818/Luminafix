@extends('admin.layouts.default')
@section('content')

<div class="contents">

   <div class="demo2 mb-25 t-thead-bg">
      <div class="container-fluid">
         <div class="row ">
            <div class="col-lg-12">

               <div class="breadcrumb-main">
                  <h4 class="text-capitalize breadcrumb-title">Team</h4>
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
                     <form method="post" action="{{ route('admin.teams.update',[$team->slug])}}" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="row">
                           <div class="col-md-6 mb-25">
                              <label for="a1" class="il-gray fs-14 fw-500 align-center mb-10">Name</label>
                              <input type="text" name="name" value="{{ old('name', $team->name) }}" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Full Name">
                           </div>
                           <div class="col-md-6 mb-25">
                              <label for="a1" class="il-gray fs-14 fw-500 align-center mb-10">Job Title</label>
                              <input type="text" name="job_title" value="{{ old('job_title', $team->job_title) }}" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Title">
                           </div>
                           <div class="col-md-6 mb-25">
                              <label for="a1" class="il-gray fs-14 fw-500 align-center mb-10">Email</label>
                              <input type="text" name="email" value="{{ old('email', $team->email) }}" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Job Title">
                           </div>
                           <div class="col-md-6 mb-25">
                              <label for="a1" class="il-gray fs-14 fw-500 align-center mb-10">Phone</label>
                              <input type="text" name="phone" value="{{ old('phone', $team->phone) }}" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Job Title">
                           </div>
                           <div class="col-md-6 mb-25">
                              <label for="a1" class="il-gray fs-14 fw-500 align-center mb-10">Short Description
                              <span style="color: red;"> (Short Description not more than 50 words)</span></label>
                              <input type="text" name="short_description" value="{{ old('short_description', $team->short_description) }}" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Title">
                           </div>

                           <div class="col-md-6 mb-25">
                              <label for="a1" class="il-gray fs-14 fw-500 align-center mb-10">Facebook</label>
                              <input type="url" name="facebook" value="{{ old('facebook', $team->facebook) }}" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Facebook Link">
                           </div>
                           <div class="col-md-6 mb-25">
                              <label for="a1" class="il-gray fs-14 fw-500 align-center mb-10">Twitter</label>
                              <input type="url" name="twitter" value="{{ old('twitter', $team->twitter) }}" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Twitter Url">
                           </div>
                           <div class="col-md-6 mb-25">
                              <label for="a1" class="il-gray fs-14 fw-500 align-center mb-10">Instagram</label>
                              <input type="url" name="instagram" value="{{ old('instagram', $team->instagram) }}" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Instagram URL">
                           </div>
                           <div class="col-md-6 mb-25">
                              <label for="a1" class="il-gray fs-14 fw-500 align-center mb-10">Linkedin</label>
                              <input type="url" name="linkedin" value="{{ old('linkedin', $team->linkedin) }}" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Linkedin Url">
                           </div>
                           <!-- <div class="col-md-12 mb-25">
                              <label for="a1" class="il-gray fs-14 fw-500 align-center mb-10">Description</label>
                              <textarea name="description" id="mail-reply-message2" class="form-control-md" placeholder="Type your text...">{{ old('description', $team->description) }}</textarea>
                           </div> -->
                           <div class="col-md-6 mb-25">
                              <div class="custom-file">
                                 <label for="image" class="il-gray fs-14 fw-500 align-center mb-10">Image</label>
                                 <input class="form-control custom-file-input" type="file" name="image" id="customFile">
                              </div>
                              @if(isset($team->image))
                              <div>
                                 <a href="{{ $team->getImagePath($team->image) }}" class="text-dark fw-500">
                                    <img class="ap-img__main rounded-circle wh-100 bg-lighter d-flex" src="{{ $team->getImagePath($team->image) }}" alt="profile">
                                 </a>
                              </div>
                              @endif
                           </div>
                           <div class="form-group tagSelect-rtl">
                                       <label class="il-gray fs-14 fw-500 align-center mb-10">Skills</label>
                                       <div class="dm-select ">
                                          <select name="skills[]" id="select-tag" class="form-control " multiple="multiple">
                                             @foreach($skills as $skill)
                                             <option value="{{ $skill->id }}" @selected($team->skills->contains($skill->id))>{{ $skill->title}}</option>
                                             @endforeach
                                          </select>
                                       </div>
                           </div>
                           <div class="col-md-6 mb-25">
                              <label for="select-1" class="il-gray fs-14 fw-500 align-center mb-10">Status</label>
                              <select name="status" class="form-control px-15" id="status_select_box">
                                 @foreach(statuses() as $key=> $status)
                                 <option value="{{ $key }}" {{ ($status === $team->status) ? "selected" : "" }}>{{ $status}}</option>
                                 @endforeach
                              </select>
                           </div>
                           <div class="col-md-12 mb-25">
                              <label for="a1" class="il-gray fs-14 fw-500 align-center mb-10">Description</label>
                              <textarea name="description"  id="mail-reply-message2" class="form-control-md" placeholder="Type your text...">
                                 {{ old('description', $team->description) }}
                              </textarea>
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