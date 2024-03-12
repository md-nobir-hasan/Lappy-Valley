@extends('backend.layouts.master')
@push('title')
    Duration
@endpush
@section('main-content')
    <!-- DataTales Example -->
    <div class="mb-4 shadow card">
        <div class="row">
            <div class="col-md-12">
                @include('backend.layouts.notification')
            </div>
        </div>
        <div class="py-3 card-header d-flex justify-content-between">
            <h6 class="float-left m-0 font-weight-bold text-primary">Duration List</h6>
            <h6 class="font-weight-bold text-primary">Total: {{count($count)}} || Active: {{count($count->where('status','active'))}} || Inactive: {{count($count->where('status','inactive'))}}</h6>
            @can('Create Duration')
                <a href="{{ route('duration.create') }}" class="float-right btn btn-primary btn-sm" data-toggle="tooltip"
                    data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> Add Duration</a>
            @endcan
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @if (count($data) > 0)
                    <table class="table table-bordered table-striped" id="banner-dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Years</th>
                                <th>Months</th>
                                <th>Status</th>
                                @canany(['Edit Duration', 'Delete Duration'])
                                    <th>Action</th>
                                @endcanany
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>S.N.</th>
                                <th>Years</th>
                                <th>Months</th>
                                <th>Status</th>
                                @canany(['Edit Duration', 'Delete Duration'])
                                    <th>Action</th>
                                @endcanany
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($data as $datum)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $datum->year ?? 0 }}</td>
                                    <td>{{ $datum->month ?? 0 }}</td>
                                    <td>
                                        @if ($datum->status)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-warning">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        @can('Edit Duration')
                                            <a href="{{ route('duration.edit', $datum->id) }}"
                                                class="float-left mr-1 btn btn-primary btn-sm"
                                                style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip"
                                                title="edit" data-placement="bottom"><i class="fas fa-edit"></i></a>
                                        @endcan
                                        @can('Delete Duration')
                                            <form method="POST" action="{{ route('duration.destroy', [$datum->id]) }}">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm dltBtn" data-id={{ $datum->id }}
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
                    <span>{{ $data->links('vendor.pagination.bootstrap-5') }}</span>
                @else
                    <h6 class="text-center">No Durations found!!! Please create Duration</h6>
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

        .zoom {
            transition: transform .2s;
            /* Animation */
        }

        .zoom:hover {
            transform: scale(3.2);
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
        $('#banner-dataTable').DataTable({
            "columnDefs": [{
                "orderable": false,
                "targets": [3, 4]
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
