@extends('backend.layouts.master')
@push('title')
    Category
@endpush
@section('main-content')
    <!-- DataTales Example -->
    <div class="mb-4 shadow card">
        <div class="row">
            <div class="col-md-12">
                @include('backend.layouts.notification')
            </div>
        </div>
        <div class="py-3 card-header">
            <h6 class="float-left m-0 font-weight-bold text-primary">Category Lists</h6>
            @can('Create Category')
                <a href="{{ route('category.create') }}" class="float-right btn btn-primary btn-sm" data-toggle="tooltip"
                    data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> Add Category</a>
            @endcan
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @if (count($categories) > 0)
                    <table class="table table-bordered" id="banner-dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Is Parent</th>
                                <th>Parent Category</th>
                                <th>Photo</th>
                                <th>Status</th>
                                @canany(['Edit Category', 'Delete Category'])
                                    <th>Action</th>
                                @endcanany
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>S.N.</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Is Parent</th>
                                <th>Parent Category</th>
                                <th>Photo</th>
                                <th>Status</th>
                                @canany(['Edit Category', 'Delete Category'])
                                    <th>Action</th>
                                @endcanany
                            </tr>
                        </tfoot>
                        <tbody>

                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->serial }}</td>
                                    <td>{{ $category->title }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td>{{ $category->is_parent == 1 ? 'Yes' : 'No' }}</td>
                                    <td>
                                        {{ $category->parent_info->title ?? '' }}
                                    </td>
                                    <td>
                                        @if ($category->photo)
                                            <img src="{{ $category->photo }}" class="img-fluid" style="max-width:80px"
                                                alt="{{ $category->photo }}">
                                        @else
                                            <img src="{{ asset('backend/img/thumbnail-default.jpg') }}" class="img-fluid"
                                                style="max-width:80px" alt="avatar.png">
                                        @endif
                                    </td>
                                    <td>
                                        @if ($category->status == 'active')
                                            <span class="badge badge-success">{{ $category->status }}</span>
                                        @else
                                            <span class="badge badge-warning">{{ $category->status }}</span>
                                        @endif
                                    </td>
                                    <td>

                                        @can('Edit Category')
                                            <a href="{{ route('category.edit', $category->id) }}"
                                                class="float-left mr-1 btn btn-primary btn-sm"
                                                style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip"
                                                title="edit" data-placement="bottom"><i class="fas fa-edit"></i></a>
                                        @endcan
                                        @can('Delete Category')
                                            <form method="POST" action="{{ route('category.destroy', [$category->id]) }}">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm dltBtn" data-id={{ $category->id }}
                                                    style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip"
                                                    data-placement="bottom" title="Delete"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </form>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <span style="float:right">{{ $categories->links('vendor.pagination.bootstrap-4') }}</span>
                @else
                    <h6 class="text-center">No Categories found!!! Please create Category</h6>
                @endif
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
    </style>
@endpush

@push('scripts')
    <!-- Page level plugins -->
    <script src="{{ asset('backend/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!-- Page level custom scripts -->
    {{-- <script src="{{asset('backend/js/demo/datatables-demo.js')}}"></script> --}}
    <script>
        $('#banner-dataTable').DataTable({
            "columnDefs": [{
                "orderable": false,
                "targets": [3, 4, 5]
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
