 @extends('backend.layouts.master')
 @push('title')
     {{ $page_name }}
 @endpush
 @section('main-content')
     <div class="pl-2 pr-2 m-auto row max-w-800px">
         <!-- Total Order -->
         <div class="mb-4 col-md-6">
             <div class="py-2 shadow card border-left-primary h-100">
                 <div class="card-body">
                     <div class="row no-gutters align-items-center">
                         <div class="mr-2 col">
                             <div class="mb-1 text-xs font-weight-bold text-primary text-uppercase">Total Sell</div>
                             {{-- @dd($data) --}}
                             <div class="mb-0 text-gray-800 h5 font-weight-bold">
                                BDT {{ $total_sell }}
                             </div>
                         </div>
                         <div class="col-auto">
                             <svg class="h40 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                 <path stroke-linecap="round" stroke-linejoin="round"
                                     d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                             </svg>

                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <!-- Pending Order -->
         <div class="mb-4 col-md-6">
             <div class="py-2 shadow card border-left-success h-100">
                 <div class="card-body">
                     <div class="row no-gutters align-items-center">
                         <div class="mr-2 col">
                             <div class="mb-1 text-xs font-weight-bold text-success text-uppercase">Due</div>
                             <div class="mb-0 text-gray-800 h5 font-weight-bold">BDT {{ $due }}
                             </div>
                         </div>
                         <div class="col-auto">


                             <svg class="h40 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                 <path stroke-linecap="round" stroke-linejoin="round"
                                     d="m8.25 7.5.415-.207a.75.75 0 0 1 1.085.67V10.5m0 0h6m-6 0h-1.5m1.5 0v5.438c0 .354.161.697.473.865a3.751 3.751 0 0 0 5.452-2.553c.083-.409-.263-.75-.68-.75h-.745M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                             </svg>

                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <!-- Delivered -->
         <div class="mb-4 col-md-6">
             <div class="py-2 shadow card border-left-info h-100">
                 <div class="card-body">
                     <div class="row no-gutters align-items-center">
                         <div class="mr-2 col">
                             <div class="mb-1 text-xs font-weight-bold text-info text-uppercase">Profit</div>
                             <div class="row no-gutters align-items-center">
                                 <div class="col-auto">
                                     <div class="mb-0 mr-3 text-gray-800 h5 font-weight-bold">
                                        BDT {{ $profit }}</div>
                                 </div>

                             </div>
                         </div>
                         <div class="col-auto">
                             <svg class="h40 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                 <path stroke-linecap="round" stroke-linejoin="round"
                                     d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                             </svg>

                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <!--Cancelled-->
         <div class="mb-4 col-md-6">
             <div class="py-2 shadow card border-left-warning h-100">
                 <div class="card-body">
                     <div class="row no-gutters align-items-center">
                         <div class="mr-2 col">
                             <div class="mb-1 text-xs font-weight-bold text-warning text-uppercase">Loss</div>
                             <div class="mb-0 text-gray-800 h5 font-weight-bold">
                                BDT {{ $loss }}
                             </div>
                         </div>
                         <div class="col-auto">
                             <svg class="h40 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                 <path stroke-linecap="round" stroke-linejoin="round"
                                     d="M2.25 6 9 12.75l4.286-4.286a11.948 11.948 0 0 1 4.306 6.43l.776 2.898m0 0 3.182-5.511m-3.182 5.51-5.511-3.181" />
                             </svg>

                         </div>
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
         .max-w-800px {
             max-width: 800px;
         }

         .h40 {
             height: 40px;
         }

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
