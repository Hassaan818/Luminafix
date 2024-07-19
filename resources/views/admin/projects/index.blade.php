@extends('admin.layouts.default')
@section('content')
<style>
   .product-table > td {
      vertical-align:top;
   }
</style>
<div class="contents">

   <div class="demo2 mb-25 t-thead-bg">
      <div class="container-fluid">
         <div class="row ">
            <div class="col-lg-12">

               <div class="breadcrumb-main">
                  <h4 class="text-capitalize breadcrumb-title">Projects</h4>
               </div>

            </div>
            <div class="col-lg-12">
               <div class="card card-Vertical card-default card-md mb-4">

                  <div class="card-body py-md-30">
                     <div class="row">
                        <div class="userDatatable adv-table-table global-shadow border-light-0 w-100 adv-table">
                           <div class="table-responsive">
                              <div class="adv-table-table__header">
                                 <h4>All Projects</h4>
                                 <div class="">
                                    <a href="{{ route('admin.projects.create') }}" class="btn px-15 btn btn-light btn-default btn-squared">
                                       Add Projects</a>
                                 </div>
                              </div>
                              <div id="filter-form-container"></div>
                              
                              <div class="col-md-8 mb-25 offset-md-2">
                                 @include('admin.partials.success-messages')
                                 @include('admin.partials.validation-error-messages')
                              </div>
                                 
                              <table class="table mb-0 table-borderless adv-table project$project-table" data-paging="true" data-paging-position="left" data-paging-size="10" data-paging-container="#paging-ui-container" data-paging-current="1" data-filtering="true" data-filter-container="#filter-form-container">
                                 <thead>
                                    <tr class="userDatatable-header">
                                       <th>
                                          <span class="userDatatable-title">S.NO</span>
                                       </th>
                                       <th>
                                          <span class="userDatatable-title">Project Title</span>
                                       </th>
                                       <th>
                                          <span class="userDatatable-title">Description</span>
                                       </th>
                                       <th>
                                          <span class="userDatatable-title">Status</span>
                                       </th>
                                       <th>
                                          <span class="userDatatable-title">Image</span>
                                       </th>  
                                       <th>
                                          <span class="userDatatable-title float-end">action</span>
                                       </th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @forelse($projects as $project)
                                    <tr>
                                       <td>
                                          <div class="userDatatable-content">{{ $loop->iteration }}</div>
                                       </td>
                                       <td  style="white-space:pre-line;word-break: break-all;">
                                          <div class="d-flex">
                                             <div class="userDatatable-inline-title">
                                                <h6>{{ $project?->title }}</h6>
                                             </div>
                                          </div>
                                       </td>
                                       <td style="white-space:pre-line;word-break: break-all;">
                                          <div class="userDatatable-content">
                                             {!! Str::limit($project?->description,100) !!}
                                          </div>
                                       </td>
                                       <td>
                                          <div class="userDatatable-content d-inline-block">
                                             <span class="bg-opacity-{{ ($project?->status == 'Active') ? 'success' : 'danger'}}  color-{{ ($project?->status == 'Active') ? 'success' : 'danger'}} rounded-pill userDatatable-content-status active">{{ $project?->status }}</span>
                                          </div>
                                       </td>
                                       <td>
                                          <div>
                                             <a href="{{ $project?->getImagePath($project?->image) }}" class="text-dark fw-500">
                                                <img class="ap-img__main rounded-circle wh-50 bg-lighter d-flex" src="{{ $project?->getImagePath($project?->image) }}" alt="profile">
                                             </a>
                                          </div>
                                       </td>
                                       
                                       <td>
                                          <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                             
                                             <li>
                                             <a href="{{ route('admin.projects.edit', [$project?->id] )}}" class="edit">
                                                   <i class="uil uil-edit"></i>
                                                </a>
                                             </li>
                                             <li>
                                                <form method="post"  action="{{ route('admin.projects.destroy', [$project?->id] )}}">
                                                   @csrf   
                                                   @method('delete')
                                                   <a href="#" class="confirm-button remove">
                                                      <i class="uil uil-trash-alt"></i>
                                                   </a>
                                                </form>
                                             </li>
                                          </ul>
                                       </td>

                                    </tr>
                                    @empty
                                    <tr>
                                       <td>No data exists</td>
                                    </tr>

                                    @endforelse
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
   <script type="text/javascript">

      $(document).ready(function()
      {     
         $("body").on('click', '.confirm-button', function (event) 
         {
            var form =  $(this).closest("form");
            event.preventDefault();
            swal({
                  title: `Are you sure you want to delete this record?`,
                  text: "It will gone forever",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
            })
            .then((willDelete) => {
               if (willDelete) {
                  form.submit();
               }
            });
         });
      });
   </script>
</div>

@endsection
