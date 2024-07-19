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

                  <div class="card-body py-md-30">
                     <div class="row">
                        <div class="userDatatable adv-table-table global-shadow border-light-0 w-100 adv-table">
                           <div class="table-responsive">
                              <div class="adv-table-table__header">
                                 <h4>Team Member Details</h4>
                                 <div class="">
                                    <a href="{{ route('admin.teams.index') }}" class="btn px-15 btn btn-light btn-default btn-squared">
                                       Show all Teams</a>
                                 </div>
                              </div>
                              <table>
                                 <tbody>

                                    <tr>
                                       <td>
                                          <span class="userDatatable-title">Name</span>
                                       </td>
                                       <td>
                                          <div class="d-flex">
                                             <div>

                                                <h6>{{ $team?->name }}</h6>

                                             </div>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <span class="userDatatable-title">Job Title</span>
                                       </td>
                                       <td>
                                          <div class="d-flex">
                                             <div>

                                                <h6>{{ $team?->job_title }}</h6>

                                             </div>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <span class="userDatatable-title">Short Description</span>
                                       </td>
                                       <td style="white-space:pre-line;word-break: break-all;">
                                          <div class="d-flex">
                                             <div>

                                                <h6>{{ $team?->short_description }}</h6>

                                             </div>
                                          </div>
                                       </td>
                                    </tr>

                                    <tr>

                                       <td>
                                          <span class="userDatatable-title">Description</span>
                                       </td>
                                       <td style="white-space:pre-line;word-break: break-all;">
                                          <div class="userDatatable-content">
                                             {{ $team?->short_description }}
                                          </div>
                                       </td>
                                    </tr>
                                    
                                   
                                    <tr>

                                       <td>
                                          <span class="userDatatable-title">Image</span>
                                       </td>
                                       <td>
                                          <div>
                                             <a href="{{ $team?->getImagePath($team?->image) }}" class="text-dark fw-500">
                                                <img class="ap-img__main rounded-circle wh-50 bg-lighter d-flex" src="{{ $team?->getImagePath($team?->image) }}" alt="profile">
                                             </a>
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