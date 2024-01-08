@extends('backend.layouts.master')
@push('title')
    {{ $page_name }}
@endpush
@section('main-content')
    <!-- Content Row -->
    <div class="pl-2 pr-2 row">
        <style>
            .h40 {
                height: 40px;
            }
        </style>
        <!-- Total Order -->
        <div class="mb-4 col-xl-3 col-md-6">
            <div class="py-2 shadow card border-left-primary h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="mr-2 col">
                            <div class="mb-1 text-xs font-weight-bold text-primary text-uppercase">Total Order</div>
                            <div class="mb-0 text-gray-800 h5 font-weight-bold">{{ (new \App\Models\Order())->total() }}
                            </div>
                        </div>
                        <div class="col-auto">
                            {{-- <i class="text-gray-300 fas fa-sitemap fa-2x"></i> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="text-primary h40">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Order -->
        <div class="mb-4 col-xl-3 col-md-6">
            <div class="py-2 shadow card border-left-success h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="mr-2 col">
                            <div class="mb-1 text-xs font-weight-bold text-success text-uppercase">Pending</div>
                            <div class="mb-0 text-gray-800 h5 font-weight-bold">{{ (new \App\Models\Order())->pending() }}
                            </div>
                        </div>
                        <div class="col-auto">
                            {{-- <i class="text-gray-300 fas fa-cubes fa-2x"></i> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="h40 text-primary">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m21 7.5-2.25-1.313M21 7.5v2.25m0-2.25-2.25 1.313M3 7.5l2.25-1.313M3 7.5l2.25 1.313M3 7.5v2.25m9 3 2.25-1.313M12 12.75l-2.25-1.313M12 12.75V15m0 6.75 2.25-1.313M12 21.75V19.5m0 2.25-2.25-1.313m0-16.875L12 2.25l2.25 1.313M21 14.25v2.25l-2.25 1.313m-13.5 0L3 16.5v-2.25" />
                            </svg>


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Delivered -->
        <div class="mb-4 col-xl-3 col-md-6">
            <div class="py-2 shadow card border-left-info h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="mr-2 col">
                            <div class="mb-1 text-xs font-weight-bold text-info text-uppercase">Delivered</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="mb-0 mr-3 text-gray-800 h5 font-weight-bold">
                                        {{ (new \App\Models\Order())->delivered() }}</div>
                                </div>

                            </div>
                        </div>
                        <div class="col-auto">
                            {{-- <i class="text-gray-300 fas fa-clipboard-list fa-2x"></i> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="h40 text-primary">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
                            </svg>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Cancelled-->
        <div class="mb-4 col-xl-3 col-md-6">
            <div class="py-2 shadow card border-left-warning h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="mr-2 col">
                            <div class="mb-1 text-xs font-weight-bold text-warning text-uppercase">Cancelled</div>
                            <div class="mb-0 text-gray-800 h5 font-weight-bold">{{ (new \App\Models\Order())->cancelled() }}
                            </div>
                        </div>
                        <div class="col-auto">
                            {{-- <i class="text-gray-300 fas fa-folder fa-2x"></i> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="h40 text-primary">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                            </svg>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="mb-4 shadow card">
        <div class="row">
            <div class="col-md-12">
                @include('backend.layouts.notification')
            </div>
        </div>
        <div class="py-3 card-header d-flex justify-content-between">
            <h6 class="float-left m-0 font-weight-bold text-primary">{{ $page_name }}</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @if (count($data) > 0)
                    <table class="table table-bordered table-striped" id="product-dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Brand</th>
                                <th>Total Order</th>
                                <th>Pending Order</th>
                                <th>Delivered Order</th>
                                <th>Cancelled Order</th>
                                {{-- <th>Stock</th> --}}
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>S.N.</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Brand</th>
                                <th>Total Order</th>
                                <th>Pending Order</th>
                                <th>Delivered Order</th>
                                <th>Cancelled Order</th>
                                 {{-- <th>Stock</th> --}}
                            </tr>
                        </tfoot>
                        <tbody>

                            @foreach ($data as $product)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>
                                        <a href="{{route('product.show',[$product->id])}}" target="_nobir">
                                            {{ $product->title }}
                                        </a>
                                    </td>
                                    <td>{{ $product->cat_info?->title }}
                                        <sub>
                                            {{ $product->sub_cat_info?->title ?? '' }}
                                        </sub>
                                    </td>
                                    <td> {{ ucfirst($product->brand?->title) }}</td>
                                    <td>{{ $product->totalOrder() }}
                                    <td>{{ $product->statusWiseOrderCount('Pending') }}
                                    <td>{{ $product->statusWiseOrderCount('Delivered') }}
                                    <td>{{ $product->statusWiseOrderCount('Cancelled') }}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
                "targets": [1, 2, 3, 4, 5, 6, 7]
            }]
        });
    </script>
@endpush
