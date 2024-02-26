@extends('backend.layouts.master')
@push('title')
    Products
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
            <h6 class="float-left m-0 font-weight-bold text-primary">Product Lists</h6>
            <h6 class="font-weight-bold text-primary">Total: {{count($count)}} || Active: {{count($count->where('status','active'))}} || Inactive: {{count($count->where('status','inactive'))}}</h6>
            @can('Create Product')
                <a href="{{ route('product.create') }}" class="float-right btn btn-primary btn-sm" data-toggle="tooltip"
                    data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> Add Product</a>
            @endcan
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @if (count($products) > 0)
                    <table class="table table-bordered table-striped" id="product-dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Title</th>
                                <th>Category</th>
                                {{-- <th>Is Featured</th> --}}
                                <th>Price</th>
                                <th>Discount</th>
                                <th>Brand</th>
                                <th>Stock</th>
                                <th>Photo</th>
                                <th>Status</th>
                                @canany(['Edit Product', 'Delete Product'])
                                    <th>Action</th>
                                @endcanany
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>S.N.</th>
                                <th>Title</th>
                                <th>Category</th>
                                {{-- <th>Is Featured</th> --}}
                                <th>Price</th>
                                <th>Discount</th>
                                <th>Brand</th>
                                <th>Stock</th>
                                <th>Photo</th>
                                <th>Status</th>
                                @canany(['Edit Product', 'Delete Productd'])
                                    <th>Action</th>
                                @endcanany
                            </tr>
                        </tfoot>
                        <tbody>

                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>
                                        <a target="_black" href="{{route('product.show',$product->id)}}">{{ $product->title }}</a>
                                    </td>
                                    <td>{{ $product->cat_info?->title }}
                                        <sub>
                                            {{ $product->sub_cat_info?->title ?? '' }}
                                        </sub>
                                    </td>
                                    {{-- <td>{{ $product->is_featured == 1 ? 'Yes' : 'No' }}</td> --}}
                                    <td>BDT. {{ $product->price }} /-</td>
                                    <td> {{ $product->discount }}% OFF</td>
                                    <td> {{ ucfirst($product->brand?->title) }}</td>
                                    <td>
                                        @if ($product->stock > 0)
                                            <span class="badge badge-primary">{{ $product->stock }}</span>
                                        @else
                                            <span class="badge badge-danger">{{ $product->stock }}</span>
                                        @endif
                                    </td>
                                    <td>

                                        @if ($product->photo)
                                            @php
                                                $photo = explode(',', $product->photo);
                                                // dd($photo);
                                            @endphp
                                            <img src="{{ $photo[0] }}" class="img-fluid zoom" style="max-width:80px"
                                                alt="{{ $product->photo }}">
                                        @else
                                            <img src="{{ asset('backend/img/thumbnail-default.jpg') }}" class="img-fluid"
                                                style="max-width:80px" alt="avatar.png">
                                        @endif
                                    </td>
                                    <td>
                                        @if ($product->status == 'active')
                                            <span class="badge badge-success">{{ $product->status }}</span>
                                        @else
                                            <span class="badge badge-warning">{{ $product->status }}</span>
                                        @endif
                                    </td>

                                    <td class="d-flex">
                                         <a target="_blank" href="{{route('product.show',$product->id)}}" class="float-left mr-1 btn btn-warning btn-sm" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="view" data-placement="bottom"><i class="fas fa-eye"></i></a>
                                        @can('Edit Product')
                                            <a href="{{ route('product.edit', $product->id) }}"
                                                class="float-left mr-1 btn btn-primary btn-sm"
                                                style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip"
                                                title="edit" data-placement="bottom"><i class="fas fa-edit"></i>
                                            </a>
                                        @endcan
                                        @can('Delete Product')
                                            <form method="POST" action="{{ route('product.destroy', [$product->id]) }}">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm dltBtn" data-id={{ $product->id }}
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
                    {{-- <span>{{ $products->links('vendor.pagination.bootstrap-5') }}</span> --}}
                @else
                    <h6 class="text-center">No Products found!!! Please create Product</h6>
                @endif
            </div>

        </div>
    </div>
@endsection
@push('styles')
    <link href="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />

    <style>
        /*   */

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
    <script src="{{ asset('backend/js/mani.js') }}"></script>


    <!-- Page level custom scripts -->
    {{-- <script src="{{asset('backend/js/demo/datatables-demo.js')}}"></script> --}}
    <script>
        $('#product-dataTable').DataTable({
            "scrollX": false,
            "columnDefs": [{
                "orderable": false,
                "targets": [1,2,3,4,5,6,7,8]
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
