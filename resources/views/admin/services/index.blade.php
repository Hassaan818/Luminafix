@extends('admin.layouts.default')
@section('content')

<div class="contents">

   <div class="demo2 mb-25 t-thead-bg">
      <div class="container-fluid">
         <div class="row ">
            <div class="col-lg-12">

               <div class="breadcrumb-main">
                  <h4 class="text-capitalize breadcrumb-title">service</h4>
               </div>

            </div>
            <div class="col-lg-12">
               <div class="card card-Vertical card-default card-md mb-4">

                  <div class="card-body py-md-30">
                     <div class="row">
                        <div class="userDatatable adv-table-table global-shadow border-light-0 w-100 adv-table">
                           <div class="table-responsive">
                              <div class="adv-table-table__header">
                                 <h4>All services</h4>
                                 <div class="">
                                    <a href="{{ route('admin.services.create') }}" class="btn px-15 btn btn-light btn-default btn-squared">
                                       Add service</a>
                                 </div>
                              </div>
                              <div id="filter-form-container"></div>
                              
                              <div class="col-md-8 mb-25 offset-md-2">
                                 @include('admin.partials.success-messages')
                                 @include('admin.partials.validation-error-messages')
                              </div>
                                 
                              <table class="table mb-0 table-borderless adv-table service-table" data-paging="true" data-paging-position="left" data-paging-size="10" data-paging-container="#paging-ui-container" data-paging-current="1" data-filtering="true" data-filter-container="#filter-form-container">
                                 <thead>
                                    <tr class="userDatatable-header">
                                       <th>
                                          <span class="userDatatable-title">S.NO</span>
                                       </th>
                                       <th>
                                          <span class="userDatatable-title">Title</span>
                                       </th>
                                       <th>
                                          <span class="userDatatable-title">Description</span>
                                       </th>
                                       <th>
                                          <span class="userDatatable-title">Status</span>
                                       </th>
                                       <th>
                                          <span class="userDatatable-title">Icon</span>
                                       </th>
                                       <th>
                                          <span class="userDatatable-title float-end">action</span>
                                       </th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @forelse($services as $service)
                                    <tr>
                                       <td>
                                          <div class="userDatatable-content">{{ $loop->iteration }}</div>
                                       </td>
                                       <td>
                                          <div class="d-flex">
                                             <div class="userDatatable-inline-title">

                                                <h6>{{ $service?->title }}</h6>

                                             </div>
                                          </div>
                                       </td>
                                       <td style="white-space:pre-line;word-break: break-all;">
                                          <div class="userDatatable-content">
                                             {!! Str::limit($service?->description, 50) !!}
                                          </div>
                                       </td>
                                       <td>
                                          <div class="userDatatable-content d-inline-block">
                                             <span class="bg-opacity-{{ ($service?->status == 'Active') ? 'success' : 'danger'}}  color-{{ ($service?->status == 'Active') ? 'success' : 'danger'}} rounded-pill userDatatable-content-status active">{{ $service?->status }}</span>
                                          </div>
                                       </td>
                                       <td>
                                          <div>
                                             <a href="{{ $service?->getImagePath($service?->logo) }}" class="text-dark fw-500">
                                                <img class="ap-img__main rounded-circle wh-50 bg-lighter d-flex" src="{{ $service?->getImagePath($service?->logo) }}" alt="profile">
                                             </a>
                                          </div>
                                       </td>
                                      
                                       <td>
                                          <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                             
                                             <li>
                                             <a href="{{ route('admin.services.edit', ['slug' => $service?->slug] )}}" class="edit">
                                                   <i class="uil uil-edit"></i>
                                                </a>
                                             </li>
                                             <li>
                                                <form method="post"  action="{{ route('admin.services.destroy', ['slug' => $service?->slug] )}}">
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
