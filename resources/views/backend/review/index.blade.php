@extends('backend.layouts.master')
@push('title')
    reviews
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
            <h6 class="float-left m-0 font-weight-bold text-primary">Review Lists</h6>
            <h6 class="font-weight-bold text-primary">Total: {{ count($count) }} || Active:
                {{ count($count->where('status', 'active')) }} || Inactive: {{ count($count->where('status', 'inactive')) }}
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @if (count($reviews) > 0)
                    <table class="table table-bordered table-striped" id="order-dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Review By</th>
                                <th>E-mail</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Date</th>
                                <th>Status</th>
                                @canany(['Edit Review', 'Delete Review'])
                                    <th>Action</th>
                                @endcanany
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>S.N.</th>
                                <th>Review By</th>
                                <th>E-mail</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Date</th>
                                <th>Status</th>
                                @canany(['Edit Review', 'Delete Review'])
                                    <th>Action</th>
                                @endcanany
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($reviews as $review)
                                <tr>
                                    <td>{{ $review->id }}</td>
                                    <td>{{ $review->name }}</td>
                                    <td>{{ $review->email }}</td>
                                    <td>{{ $review->subject }}</td>
                                    <td>{{ $review->msg }}</td>

                                    <td>{{ $review->created_at->format('M d D, Y g: i a') }}</td>
                                    <td>
                                        @if ($review->status == 'active')
                                            <span class="badge badge-success status-update" style="cursor: pointer;"
                                                id="{{ $review->id }}">{{ $review->status }}</span>
                                        @else
                                            <span class="badge badge-warning status-update"
                                                style="cursor: pointer;">{{ $review->status }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a target="_blank" href="{{ route('review.show', $review->id) }}"
                                            class="float-left mr-1 btn btn-warning btn-sm"
                                            style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip"
                                            title="view" data-placement="bottom"><i class="fas fa-eye"></i></a>
                                        @can('Edit Review')
                                            <a href="{{ route('review.edit', $review->id) }}"
                                                class="float-left mr-1 btn btn-primary btn-sm"
                                                style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip"
                                                title="edit" data-placement="bottom"><i class="fas fa-edit"></i></a>
                                        @endcan
                                        @can('Delete Review')
                                            <form method="POST" action="{{ route('review.destroy', [$review->id]) }}">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm dltBtn" data-id={{ $review->id }}
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
                    <span>{{ $reviews->links('vendor.pagination.bootstrap-5') }}</span>
                @else
                    <h6 class="text-center">No reviews found!!!</h6>
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

            // $('.status-update').on('click', function(e) {
            //     let This = this;
            //     let rev_id = $(this).attr('id');
            //     console.log(rev_id);
            //     $.ajax({
            //         'method': 'post',
            //         url: "{{ route('review_status.change') }}",
            //         data: {
            //             id: rev_id,
            //             dm: 'CompanyReview',
            //             _token: "{{ csrf_token() }}",
            //         },
            //         success: (res) => {
            //             console.log(res);
            //             if (res == 'inactive') {
            //                 $(This).text('Inactive');
            //                 $(This).removeClass('badge-success');
            //                 $(This).addClass('badge-warning');
            //             } else if (res == 'active') {
            //                 $(This).text('Active');
            //                 $(This).addClass('badge-success');
            //                 $(This).removeClass('badge-warning');
            //             } else {
            //                 alert('Something went wrong');
            //             }
            //         }

            //     })
            // })
        })
    </script>
@endpush
