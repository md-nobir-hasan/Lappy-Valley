 @extends('backend.layouts.master')
 @push('title')
     {{$page_name}}
 @endpush
 @section('main-content')
     <div class="mb-4 shadow card">
         <div class="row">
             <div class="col-md-12">
                 @include('backend.layouts.notification')
             </div>
         </div>
         <div class="py-3 card-header d-flex justify-content-between">
             <h6 class="float-left m-0 font-weight-bold text-primary">{{$page_name}}</h6>
         </div>



         <div class="card-body">
             <nav class="mb-2">
                 <div class="nav nav-tabs" id="nav-tab" role="tablist">
                     <button class="nav-link active" id="nav-home-tab" data-toggle="tab" data-target="#nav-home"
                         type="button" role="tab" aria-controls="nav-home" aria-selected="true">Pending</button>
                     <button class="nav-link" id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile"
                         type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Delivered</button>
                     <button class="nav-link" id="nav-contact-tab" data-toggle="tab" data-target="#nav-contact"
                         type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Cancelled</button>
                 </div>
             </nav>
             <div class="tab-content" id="nav-tabContent">
                 <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                     <div class="table-responsive">
                         @if (count($data) > 0)
                             <table class="table table-bordered table-striped" id="product-dataTable" width="100%"
                                 cellspacing="0">
                                 <thead>
                                     <tr>
                                         <th>S.N.</th>
                                         <th>Order Number</th>
                                         <th>Name</th>
                                         <th>Email</th>
                                         <th>Phone</th>
                                         <th>Address</th>
                                         @canany(['Edit Post', 'Delete Post'])
                                             <th>Action</th>
                                         @endcanany
                                     </tr>
                                 </thead>
                                 <tfoot>
                                     <tr>
                                         <th>S.N.</th>
                                         <th>Order Number</th>
                                         <th>Name</th>
                                         <th>Email</th>
                                         <th>Phone</th>
                                         <th>Address</th>
                                         @canany(['Edit Post', 'Delete Post'])
                                             <th>Action</th>
                                         @endcanany
                                     </tr>
                                 </tfoot>
                                 <tbody>

                                     @foreach ($data->where('status', 'Pending') as $pending)
                                         <tr>
                                             <td>{{ $pending->id }}</td>
                                             <td>{{ $pending->order_number }}</td>
                                             <td>{{ $pending->name }}</td>
                                             <td>{{ $pending->email }}</td>
                                             <td>{{ $pending->phone }}</td>
                                             <td>{{ $pending->address }}</td>
                                             <td>
                                                 <a target="_blank" href="{{ route('order.show', $pending->id) }}"
                                                     class="float-left mr-1 btn btn-warning btn-sm"
                                                     style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip"
                                                     title="view" data-placement="bottom"><i class="fas fa-eye"></i></a>
                                             </td>
                                         </tr>
                                     @endforeach
                                 </tbody>
                             </table>
                         @else
                             <h6 class="text-center">No data found!!!</h6>
                         @endif
                     </div>
                 </div>
                 <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                     <div class="table-responsive">
                         @if (count($data->where('status', 'Delivered')) > 0)
                             <table class="table table-bordered table-striped" id="product-dataTable" width="100%"
                                 cellspacing="0">
                                 <thead>
                                     <tr>
                                         <th>S.N.</th>
                                         <th>Order Number</th>
                                         <th>Name</th>
                                         <th>Email</th>
                                         <th>Phone</th>
                                         <th>Address</th>
                                         @canany(['Edit Post', 'Delete Post'])
                                             <th>Action</th>
                                         @endcanany
                                     </tr>
                                 </thead>
                                 <tfoot>
                                     <tr>
                                         <th>S.N.</th>
                                         <th>Order Number</th>
                                         <th>Name</th>
                                         <th>Email</th>
                                         <th>Phone</th>
                                         <th>Address</th>
                                         @canany(['Edit Post', 'Delete Post'])
                                             <th>Action</th>
                                         @endcanany
                                     </tr>
                                 </tfoot>
                                 <tbody>

                                     @foreach ($data->where('status', 'Delivered') as $pending)
                                         <tr>
                                             <td>{{ $pending->id }}</td>
                                             <td>{{ $pending->order_number }}</td>
                                             <td>{{ $pending->name }}</td>
                                             <td>{{ $pending->email }}</td>
                                             <td>{{ $pending->phone }}</td>
                                             <td>{{ $pending->address }}</td>
                                             <td>
                                                 <a target="_blank" href="{{ route('order.show', $pending->id) }}"
                                                     class="float-left mr-1 btn btn-warning btn-sm"
                                                     style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip"
                                                     title="view" data-placement="bottom"><i class="fas fa-eye"></i></a>
                                             </td>
                                         </tr>
                                     @endforeach
                                 </tbody>
                             </table>
                         @else
                             <h6 class="text-center">No data found!!!</h6>
                         @endif
                     </div>
                 </div>
                 <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                     <div class="table-responsive">
                         @if (count($data->where('status', 'Cancelled')) > 0)
                             <table class="table table-bordered table-striped" id="product-dataTable" width="100%"
                                 cellspacing="0">
                                 <thead>
                                     <tr>
                                         <th>S.N.</th>
                                         <th>Order Number</th>
                                         <th>Name</th>
                                         <th>Email</th>
                                         <th>Phone</th>
                                         <th>Address</th>
                                         @canany(['Edit Post', 'Delete Post'])
                                             <th>Action</th>
                                         @endcanany
                                     </tr>
                                 </thead>
                                 <tfoot>
                                     <tr>
                                         <th>S.N.</th>
                                         <th>Order Number</th>
                                         <th>Name</th>
                                         <th>Email</th>
                                         <th>Phone</th>
                                         <th>Address</th>
                                         @canany(['Edit Post', 'Delete Post'])
                                             <th>Action</th>
                                         @endcanany
                                     </tr>
                                 </tfoot>
                                 <tbody>

                                     @foreach ($data->where('status', 'Cancelled') as $pending)
                                         <tr>
                                             <td>{{ $pending->id }}</td>
                                             <td>{{ $pending->order_number }}</td>
                                             <td>{{ $pending->name }}</td>
                                             <td>{{ $pending->email }}</td>
                                             <td>{{ $pending->phone }}</td>
                                             <td>{{ $pending->address }}</td>
                                             <td>
                                                 <a target="_blank" href="{{ route('order.show', $pending->id) }}"
                                                     class="float-left mr-1 btn btn-warning btn-sm"
                                                     style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip"
                                                     title="view" data-placement="bottom"><i class="fas fa-eye"></i></a>
                                             </td>
                                         </tr>
                                     @endforeach
                                 </tbody>
                             </table>
                         @else
                             <h6 class="text-center">No data found!!!</h6>
                         @endif
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @endsection

 @push('styles')
     <link href="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
     <style>
         div.dataTables_wrapper div.dataTables_paginate {
             display: none;
         }

         .zoom {
             transition: transform .2s;
             /* Animation */
         }

         .zoom:hover {
             transform: scale(5);
         }
     </style>
 @endpush

 @push('scripts')
     <!-- Page level plugins -->
     <script src="{{ asset('backend/vendor/datatables/jquery.dataTables.min.js') }}"></script>
     <script src="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

     <!-- Page level custom scripts -->
     <script src="{{ asset('backend/js/demo/datatables-demo.js') }}"></script>
     <script>
         $('#product-dataTable').DataTable({
             "columnDefs": [{
                 "orderable": false,
                 "targets": [8, 9, 10]
             }]
         });

         // Sweet alert

         function deleteData(id) {

         }
     </script>
     <script>
         $(document).ready(function() {
             $.ajaxSetup({
                 headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 }
             });
             $('.dltBtn').click(function(e) {
                 var form = $(this).closest('form');
                 var dataID = $(this).data('id');
                 // alert(dataID);
                 e.preventDefault();
                 swal({
                         title: "Are you sure?",
                         text: "Once deleted, you will not be able to recover this data!",
                         icon: "warning",
                         buttons: true,
                         dangerMode: true,
                     })
                     .then((willDelete) => {
                         if (willDelete) {
                             form.submit();
                         } else {
                             swal("Your data is safe!");
                         }
                     });
             })
         })
     </script>
 @endpush
