@extends('admin.layouts.default')
@section('content')

<div class="contents">

   <div class="demo2 mb-25 t-thead-bg">
      <div class="container-fluid">
         <div class="row ">
            <div class="col-lg-12">

               <div class="breadcrumb-main">
                  <h4 class="text-capitalize breadcrumb-title">Settings</h4>
               </div>

            </div>
            <div class="col-lg-12">
               <div class="card card-Vertical card-default card-md mb-4">
                  <div class="card-header">
                     <h6>Edit Settings </h6>
                  </div>
                  <div class="row">
                     <div class="col-md-8 mb-25 offset-md-2">
                        @include('admin.partials.success-messages')
                        @include('admin.partials.validation-error-messages')
                     </div>
                  </div>
                  <div class="card-body py-md-30">
                     <form method="post" action="{{ route('admin.settings.update',[$setting->id])}}" enctype="multipart/form-data">
                        @method('put')
                        @csrf
   
                        <div class="row">
                           <div class="col-md-6 mb-25">
                              <label for="a1" class="il-gray fs-14 fw-500 align-center mb-10">Phone</label>
                              <input type="text" name="phone" value="{{ old('phone', $setting->phone ) }}" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Title">
                           </div>
                           <div class="col-md-6 mb-25">
                              <label for="a1" class="il-gray fs-14 fw-500 align-center mb-10">Email</label>
                              <input type="email" name="email" value="{{ old('email', $setting->email) }}" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Email">
                           </div>

                           <div class="col-md-6 mb-25">
                              <label for="a1" class="il-gray fs-14 fw-500 align-center mb-10">Facebook</label>
                              <input type="url" name="facebook" value="{{ old('facebook', $setting->facebook) }}" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Facebook">
                           </div>

                           <div class="col-md-6 mb-25">
                              <div class="custom-file">
                                 <label for="logo" class="il-gray fs-14 fw-500 align-center mb-10">Logo</label>
                                 <input class="form-control custom-file-input" type="file" name="logo" id="customFile">
                              </div>
                              @if(isset($setting->logo))
						<div>
							<a href="{{ $setting->getImagePath($setting->logo) }}" class="text-dark fw-500">
								<img class="ap-img__main rounded-circle wh-100 bg-lighter d-flex" src="{{ $setting->getImagePath($setting->logo) }}" alt="profile">
							</a>
						</div>
                        		@endif
                           </div>

                           <div class="col-md-6 mb-25">
                              <div class="custom-file">
                                 <label for="favicon" class="il-gray fs-14 fw-500 align-center mb-10">Favicon</label>
                                 <input class="form-control custom-file-input" type="file" name="favicon" id="customFile">
                              </div>
                              @if(isset($setting->favicon))
						<div>
							<a href="{{ $setting->getImagePath($setting->favicon) }}" class="text-dark fw-500">
								<img class="ap-img__main rounded-circle wh-100 bg-lighter d-flex" src="{{ $setting->getImagePath($setting->favicon) }}" alt="profile">
							</a>
						</div>
                        		@endif
                           </div>

                          

                           <div class="col-md-12 mb-25">
                              <label for="a1" class="il-gray fs-14 fw-500 align-center mb-10">Terms & Conditions</label>
                              <textarea name="terms_and_conditions"  id="mail-reply-message2" class="form-control-md" placeholder="Type your text...">
                                 {{ old('terms_and_conditions', $setting->terms_and_conditions) }}
                              </textarea>
                           </div>

                           <div class="col-md-12 mb-25">
                              <label for="a1" class="il-gray fs-14 fw-500 align-center mb-10">Privacy Policy</label>
                              <textarea name="privacy_policy"  id="mail-reply-message2" class="form-control-md" placeholder="Type your text...">
                                 {{ old('privacy_policy', $setting->privacy_policy) }}
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