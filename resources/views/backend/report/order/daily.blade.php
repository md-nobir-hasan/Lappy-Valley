 @extends('backend.layouts.master')
 @push('title')
     data
 @endpush
 @section('main-content')
     <div class="mb-4 shadow card">
         <div class="row">
             <div class="col-md-12">
                 @include('backend.layouts.notification')
             </div>
         </div>
         <div class="py-3 card-header d-flex justify-content-between">
             <h6 class="float-left m-0 font-weight-bold text-primary">Post Lists</h6>
             <h6 class="font-weight-bold text-primary">Total: {{ count($data) }} || Active:
                 {{ count($data->where('status', 'active')) }} || Inactive: {{ count($data->where('status', 'inactive')) }}
             </h6>
             @can('Create Post')
                 <a href="{{ route('post.create') }}" class="float-right btn btn-primary btn-sm" data-toggle="tooltip"
                     data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> Add Post</a>
             @endcan
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
                                         <th>Title</th>
                                         <th>Category</th>
                                         <th>Tag</th>
                                         <th>Author</th>
                                         <th>Photo</th>
                                         <th>Status</th>
                                         @canany(['Edit Post', 'Delete Post'])
                                             <th>Action</th>
                                         @endcanany
                                     </tr>
                                 </thead>
                                 <tfoot>
                                     <tr>
                                         <th>S.N.</th>
                                         <th>Title</th>
                                         <th>Category</th>
                                         <th>Tag</th>
                                         <th>Author</th>
                                         <th>Photo</th>
                                         <th>Status</th>
                                         @canany(['Edit Post', 'Delete Post'])
                                             <th>Action</th>
                                         @endcanany
                                     </tr>
                                 </tfoot>
                                 <tbody>

                                     @foreach ($data->where('status', 'Pending') as $post)
                                         @php
                                             $author_info = DB::table('users')
                                                 ->select('name')
                                                 ->where('id', $post->added_by)
                                                 ->get();
                                             // dd($sub_cat_info);
                                             // dd($author_info);
                                         @endphp
                                         <tr>
                                             <td>{{ $post->id }}</td>
                                             <td>{{ $post->title }}</td>
                                             <td>{{ $post->cat_info->title }}</td>
                                             <td>{{ $post->tags }}</td>

                                             <td>
                                                 @foreach ($author_info as $data)
                                                     {{ $data->name }}
                                                 @endforeach
                                             </td>
                                             <td>
                                                 @if ($post->photo)
                                                     <img src="{{ $post->photo }}" class="img-fluid zoom"
                                                         style="max-width:80px" alt="{{ $post->photo }}">
                                                 @else
                                                     <img src="{{ asset('backend/img/thumbnail-default.jpg') }}"
                                                         class="img-fluid" style="max-width:80px" alt="avatar.png">
                                                 @endif
                                             </td>
                                             <td>
                                                 @if ($post->status == 'active')
                                                     <span class="badge badge-success">{{ $post->status }}</span>
                                                 @else
                                                     <span class="badge badge-warning">{{ $post->status }}</span>
                                                 @endif
                                             </td>
                                             <td>
                                                 @can('Edit Post')
                                                     <a href="{{ route('post.edit', $post->id) }}"
                                                         class="float-left mr-1 btn btn-primary btn-sm"
                                                         style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip"
                                                         title="edit" data-placement="bottom"><i class="fas fa-edit"></i></a>
                                                 @endcan
                                                 @can('Delete Post')
                                                     <form method="POST" action="{{ route('post.destroy', [$post->id]) }}">
                                                         @csrf
                                                         @method('delete')
                                                         <button class="btn btn-danger btn-sm dltBtn"
                                                             data-id={{ $post->id }}
                                                             style="height:30px; width:30px;border-radius:50%"
                                                             data-toggle="tooltip" data-placement="bottom" title="Delete"><i
                                                                 class="fas fa-trash-alt"></i></button>
                                                     </form>
                                                 @endcan
                                             </td>
                                         </tr>
                                     @endforeach
                                 </tbody>
                             </table>
                             <span>{{ $data->links('vendor.pagination.bootstrap-5') }}</span>
                         @else
                             <h6 class="text-center">No data found!!! Please create Post</h6>
                         @endif
                     </div>
                 </div>
                 <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                     <div class="table-responsive">
                         @if (count($data) > 0)
                             <table class="table table-bordered table-striped" id="product-dataTable" width="100%"
                                 cellspacing="0">
                                 <thead>
                                     <tr>
                                         <th>S.N.</th>
                                         <th>Title</th>
                                         <th>Category</th>
                                         <th>Tag</th>
                                         <th>Author</th>
                                         <th>Photo</th>
                                         <th>Status</th>
                                         @canany(['Edit Post', 'Delete Post'])
                                             <th>Action</th>
                                         @endcanany
                                     </tr>
                                 </thead>
                                 <tfoot>
                                     <tr>
                                         <th>S.N.</th>
                                         <th>Title</th>
                                         <th>Category</th>
                                         <th>Tag</th>
                                         <th>Author</th>
                                         <th>Photo</th>
                                         <th>Status</th>
                                         @canany(['Edit Post', 'Delete Post'])
                                             <th>Action</th>
                                         @endcanany
                                     </tr>
                                 </tfoot>
                                 <tbody>

                                     @foreach ($data->where('status', 'Delivered') as $post)
                                         @php
                                             $author_info = DB::table('users')
                                                 ->select('name')
                                                 ->where('id', $post->added_by)
                                                 ->get();
                                         @endphp
                                         <tr>
                                             <td>{{ $post->id }}</td>
                                             <td>{{ $post->title }}</td>
                                             <td>{{ $post->cat_info->title }}</td>
                                             <td>{{ $post->tags }}</td>

                                             <td>
                                                 @foreach ($author_info as $data)
                                                     {{ $data->name }}
                                                 @endforeach
                                             </td>
                                             <td>
                                                 @if ($post->photo)
                                                     <img src="{{ $post->photo }}" class="img-fluid zoom"
                                                         style="max-width:80px" alt="{{ $post->photo }}">
                                                 @else
                                                     <img src="{{ asset('backend/img/thumbnail-default.jpg') }}"
                                                         class="img-fluid" style="max-width:80px" alt="avatar.png">
                                                 @endif
                                             </td>
                                             <td>
                                                 @if ($post->status == 'active')
                                                     <span class="badge badge-success">{{ $post->status }}</span>
                                                 @else
                                                     <span class="badge badge-warning">{{ $post->status }}</span>
                                                 @endif
                                             </td>
                                             <td>
                                                 @can('Edit Post')
                                                     <a href="{{ route('post.edit', $post->id) }}"
                                                         class="float-left mr-1 btn btn-primary btn-sm"
                                                         style="height:30px; width:30px;border-radius:50%"
                                                         data-toggle="tooltip" title="edit" data-placement="bottom"><i
                                                             class="fas fa-edit"></i></a>
                                                 @endcan
                                                 @can('Delete Post')
                                                     <form method="POST" action="{{ route('post.destroy', [$post->id]) }}">
                                                         @csrf
                                                         @method('delete')
                                                         <button class="btn btn-danger btn-sm dltBtn"
                                                             data-id={{ $post->id }}
                                                             style="height:30px; width:30px;border-radius:50%"
                                                             data-toggle="tooltip" data-placement="bottom" title="Delete"><i
                                                                 class="fas fa-trash-alt"></i></button>
                                                     </form>
                                                 @endcan
                                             </td>
                                         </tr>
                                     @endforeach
                                 </tbody>
                             </table>
                             <span>{{ $data->links('vendor.pagination.bootstrap-5') }}</span>
                         @else
                             <h6 class="text-center">No data found!!! Please create Post</h6>
                         @endif
                     </div>
                 </div>
                 <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                     <div class="table-responsive">
                         @if (count($data) > 0)
                             <table class="table table-bordered table-striped" id="product-dataTable" width="100%"
                                 cellspacing="0">
                                 <thead>
                                     <tr>
                                         <th>S.N.</th>
                                         <th>Title</th>
                                         <th>Category</th>
                                         <th>Tag</th>
                                         <th>Author</th>
                                         <th>Photo</th>
                                         <th>Status</th>
                                         @canany(['Edit Post', 'Delete Post'])
                                             <th>Action</th>
                                         @endcanany
                                     </tr>
                                 </thead>
                                 <tfoot>
                                     <tr>
                                         <th>S.N.</th>
                                         <th>Title</th>
                                         <th>Category</th>
                                         <th>Tag</th>
                                         <th>Author</th>
                                         <th>Photo</th>
                                         <th>Status</th>
                                         @canany(['Edit Post', 'Delete Post'])
                                             <th>Action</th>
                                         @endcanany
                                     </tr>
                                 </tfoot>
                                 <tbody>

                                     @foreach ($data->where('status', 'Canceled') as $post)
                                         @php
                                             $author_info = DB::table('users')
                                                 ->select('name')
                                                 ->where('id', $post->added_by)
                                                 ->get();
                                             // dd($sub_cat_info);
                                             // dd($author_info);
                                         @endphp
                                         <tr>
                                             <td>{{ $post->id }}</td>
                                             <td>{{ $post->title }}</td>
                                             <td>{{ $post->cat_info->title }}</td>
                                             <td>{{ $post->tags }}</td>

                                             <td>
                                                 @foreach ($author_info as $data)
                                                     {{ $data->name }}
                                                 @endforeach
                                             </td>
                                             <td>
                                                 @if ($post->photo)
                                                     <img src="{{ $post->photo }}" class="img-fluid zoom"
                                                         style="max-width:80px" alt="{{ $post->photo }}">
                                                 @else
                                                     <img src="{{ asset('backend/img/thumbnail-default.jpg') }}"
                                                         class="img-fluid" style="max-width:80px" alt="avatar.png">
                                                 @endif
                                             </td>
                                             <td>
                                                 @if ($post->status == 'active')
                                                     <span class="badge badge-success">{{ $post->status }}</span>
                                                 @else
                                                     <span class="badge badge-warning">{{ $post->status }}</span>
                                                 @endif
                                             </td>
                                             <td>
                                                 @can('Edit Post')
                                                     <a href="{{ route('post.edit', $post->id) }}"
                                                         class="float-left mr-1 btn btn-primary btn-sm"
                                                         style="height:30px; width:30px;border-radius:50%"
                                                         data-toggle="tooltip" title="edit" data-placement="bottom"><i
                                                             class="fas fa-edit"></i></a>
                                                 @endcan
                                                 @can('Delete Post')
                                                     <form method="POST" action="{{ route('post.destroy', [$post->id]) }}">
                                                         @csrf
                                                         @method('delete')
                                                         <button class="btn btn-danger btn-sm dltBtn"
                                                             data-id={{ $post->id }}
                                                             style="height:30px; width:30px;border-radius:50%"
                                                             data-toggle="tooltip" data-placement="bottom" title="Delete"><i
                                                                 class="fas fa-trash-alt"></i></button>
                                                     </form>
                                                 @endcan
                                             </td>
                                         </tr>
                                     @endforeach
                                 </tbody>
                             </table>
                             <span>{{ $data->links('vendor.pagination.bootstrap-5') }}</span>
                         @else
                             <h6 class="text-center">No data found!!! Please create Post</h6>
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
