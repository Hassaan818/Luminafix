@extends('admin.layouts.default')
@section('content')

<div class="contents">

   <div class="demo2 mb-25 t-thead-bg">
      <div class="container-fluid">
         <div class="row ">
            <div class="col-lg-12">

               <div class="breadcrumb-main">
                  <h4 class="text-capitalize breadcrumb-title">Main testimonial</h4>
               </div>

            </div>
            <div class="col-lg-12">
               <div class="card card-Vertical card-default card-md mb-4">

                  <div class="card-body py-md-30">
                     <div class="row">
                        <div class="userDatatable adv-table-table global-shadow border-light-0 w-100 adv-table">
                           <div class="table-responsive">
                              <div class="adv-table-table__header">
                                 <h4>testimonial Detail</h4>
                                 <div class="">
                                    <a href="{{ route('admin.testimonials.index') }}" class="btn px-15 btn btn-light btn-default btn-squared">
                                       Show all testimonials</a>
                                 </div>
                              </div>
                              <table>
                                 <tbody>

                                    <tr>
                                       <td>
                                          <span class="userDatatable-title">Title</span>
                                       </td>
                                       <td>
                                          <div class="d-flex">
                                             <div>

                                                <h6>{{ $testimonial?->title }}</h6>

                                             </div>
                                          </div>
                                       </td>
                                    </tr>



                                    <tr>

                                       <td>
                                          <span class="userDatatable-title">Description</span>
                                       </td>
                                       <td>
                                          <div>
                                             {!! $testimonial?->description !!}
                                          </div>
                                       </td>
                                    </tr>

                                    <tr>
                                       <td>
                                          <span class="userDatatable-title">Image</span>
                                       </td>
                                       <td>
                                          <div>
                                             <a href="{{ $testimonial?->getImagePath($testimonial?->image) }}" class="text-dark fw-500">
                                                <img class="ap-img__main rounded-circle wh-50 bg-lighter d-flex" src="{{ $testimonial?->getImagePath($testimonial?->image) }}" alt="profile">
                                             </a>
                                          </div>
                                       </td>
                                    </tr>

                                    <tr>
                                       <td>
                                          <span class="userDatatable-title">Status</span>
                                       </td>
                                       <td>
                                          <div class="d-inline-block">
                                             <span class="bg-opacity-{{ ($testimonial?->status == 'Active') ? 'success' : 'danger' }}  color-{{ ($testimonial?->status == 'Active') ? 'success' : 'danger' }} rounded-pill userDatatable-content-status active">{{ $testimonial?->status }}</span>
                                          </div>
                                       </td>
                                    </tr>



                                 </tbody>
                              </table>
                           </div>
                        </div>


                     </div>

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