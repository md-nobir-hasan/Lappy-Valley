@extends('backend.layouts.master')
@push('title')
    Comment
@endpush
@section('title', 'E-SHOP || Comment Page')
@section('main-content')
    <!-- DataTales Example -->
    <div class="mb-4 shadow card">
        <div class="row">
            <div class="col-md-12">
                @include('backend.layouts.notification')
            </div>
        </div>
        <div class="py-3 card-header d-flex justify-content-between">
            <h6 class="float-left m-0 font-weight-bold text-primary">Comment Lists</h6>
            <h6 class="font-weight-bold text-primary">Total: {{count($count)}} || Active: {{count($count->where('status','active'))}} || Inactive: {{count($count->where('status','inactive'))}}</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @if (count($comments) > 0)
                    <table class="table table-bordered table-striped" id="order-dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Author</th>
                                <th>Post Title</th>
                                <th>Message</th>
                                <th>Date</th>
                                <th>Status</th>
                                @canany(['Edit Comment', 'Delete Comment'])
                                    <th>Action</th>
                                @endcanany
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>S.N.</th>
                                <th>Author</th>
                                <th>Post Title</th>
                                <th>Message</th>
                                <th>Date</th>
                                <th>Status</th>
                                @canany(['Edit Comment', 'Delete Comment'])
                                    <th>Action</th>
                                @endcanany
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($comments as $comment)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $comment->user_info['name'] }}</td>
                                    <td>{{ $comment->post->title }}</td>
                                    <td>{{ $comment->comment }}</td>
                                    <td>{{ $comment->created_at->format('M d D, Y g: i a') }}</td>
                                    <td>
                                        @if ($comment->status == 'active')
                                            <span class="badge badge-success">{{ $comment->status }}</span>
                                        @else
                                            <span class="badge badge-warning">{{ $comment->status }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        @can('Edit Comment')
                                            @can('Delete Comment')
                                                <a href="{{ route('comment.edit', $comment->id) }}"
                                                    class="float-left mr-1 btn btn-primary btn-sm"
                                                    style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip"
                                                    title="edit" data-placement="bottom"><i class="fas fa-edit"></i></a>
                                            @endcan

                                            @can('Delete Comment')
                                                <form method="POST" action="{{ route('comment.destroy', [$comment->id]) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm dltBtn" data-id={{ $comment->id }}
                                                        style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip"
                                                        data-placement="bottom" title="Delete"><i
                                                            class="fas fa-trash-alt"></i></button>
                                                </form>
                                            @endcan
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <span>{{ $comments->links('vendor.pagination.bootstrap-5') }}</span>
                    @else
                        <h6 class="text-center">No post comments found!!!</h6>
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
        <script src="{{ asset('backend/js/demo/datatables-demo.js') }}"></script>
        <script>
            $('#order-dataTable').DataTable({
                "columnDefs": [{
                    "orderable": false,
                    "targets": [5, 6]
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
