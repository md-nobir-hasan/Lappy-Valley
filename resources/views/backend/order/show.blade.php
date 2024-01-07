@extends('backend.layouts.master')

@push('title')
    Order Details
@endpush

@section('main-content')
    <div class="card">
        <h5 class="card-header">Order <a href="{{ route('order.pdf', $order->id) }}"
                class="float-right shadow-sm btn btn-sm btn-primary"><i class="fas fa-download fa-sm text-white-50"></i>
                Generate PDF</a>
        </h5>
        <div class="card-body">
            @if ($order)
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>S.N.</th>
                            <th>Order No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Quantity</th>
                            <th>Charge</th>
                            <th>Total Amount</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->order_number }}</td>
                            <td>{{ $order->name }} {{ $order->l_name }}</td>
                            <td>{{ $order->email }}</td>
                            <td>{{ $order->quantity }}</td>
                            <td>৳{{ $order->shipping->price }}</td>
                            <td>৳{{ number_format($order->total_amount, 2) }}</td>
                            <td>
                                @if ($order->status == 'New')
                                    <span class="badge badge-primary">{{ $order->status }}</span>
                                @elseif($order->status == 'Processing')
                                    <span class="badge badge-warning">{{ $order->status }}</span>
                                @elseif($order->status == 'Delivered')
                                    <span class="badge badge-success">{{ $order->status }}</span>
                                @else
                                    <span class="badge badge-danger">{{ $order->status }}</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('order.edit', $order->id) }}"
                                    class="float-left mr-1 btn btn-primary btn-sm"
                                    style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="edit"
                                    data-placement="bottom"><i class="fas fa-edit"></i></a>
                                <form method="POST" action="{{ route('order.destroy', [$order->id]) }}">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm dltBtn" data-id={{ $order->id }}
                                        style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip"
                                        data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>

                        </tr>
                    </tbody>
                </table>

                <section class="confirmation_part section_padding">
                    <div class="order_boxes">
                        <div class="row">
                            <div class="col-lg-6 col-lx-4">
                                <div class="order-info">
                                    <h4 class="pb-4 text-center">ORDER INFORMATION</h4>
                                    <table class="table">
                                        <tr class="">
                                            <td>Order Number</td>
                                            <td> : {{ $order->order_number }}</td>
                                        </tr>
                                        <tr>
                                            <td>Order Date</td>
                                            <td> : {{ $order->created_at->format('D d M, Y') }} at
                                                {{ $order->created_at->format('g : i a') }} </td>
                                        </tr>
                                        <tr>
                                            <td>Quantity</td>
                                            <td> : {{ $order->quantity }}</td>
                                        </tr>
                                        <tr>
                                            <td>Order Status</td>
                                            <td> : {{ $order->status }}</td>
                                        </tr>
                                        <tr>
                                            <td>Shipping Charge</td>
                                            <td> : ৳ {{ $order->shipping->price }}</td>
                                        </tr>
                                        <tr>
                                            <td>Coupon</td>
                                            <td> : ৳ {{ number_format($order->coupon, 2) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Total Amount</td>
                                            <td> : ৳ {{ number_format($order->total_amount, 2) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Payment Method</td>
                                            <td> : @if ($order->payment_method == 'cod')
                                                    Cash on Delivery
                                                @else
                                                    Paypal
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Payment Status</td>
                                            <td> : {{ $order->payment_status }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="col-lg-6 col-lx-4">
                                <div class="shipping-info">
                                    <h4 class="pb-4 text-center">SHIPPING INFORMATION</h4>
                                    <table class="table">
                                        <tr class="">
                                            <td>Full Name</td>
                                            <td> : {{ $order->name }} {{ $order->l_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td> : {{ $order->email }}</td>
                                        </tr>
                                        <tr>
                                            <td>Phone No.</td>
                                            <td> : {{ $order->phone }}</td>
                                        </tr>
                                        <tr>
                                            <td>Address</td>
                                            <td> : {{ $order->address }} ,{{ $order->divission?->name }}</td>
                                        </tr>
                                        {{-- <tr>
                                            <td>Country</td>
                                            <td> : {{ $order->divission->name }}</td>
                                        </tr> --}}
                                        <tr>
                                            <td>Post Code</td>
                                            <td> : {{ $order->post_code }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="mt-2 row">
                        <div class="col-lg-12 col-lx-12">
                            <div class="shipping-info">
                                <h4 class="pb-4 text-center">Product Information</h4>
                                <table class="table table-bordered table-striped" id="product-dataTable" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>S.N.</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>Discount</th>
                                            <th>Brand</th>
                                            <th>Stock</th>
                                            <th>Photo</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>S.N.</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>Discount</th>
                                            <th>Brand</th>
                                            <th>Stock</th>
                                            <th>Photo</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        @foreach ($order->cart as $cat)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td><a target="_blank" href="{{route('product.show',$cat->product->id)}}">{{ $cat->product->title }}</a></td>
                                                <td>{{ $cat->product->cat_info?->title }}
                                                    <sub>
                                                        {{ $cat->product->sub_cat_info?->title ?? '' }}
                                                    </sub>
                                                </td>
                                                {{-- <td>{{ $cat->product->is_featured == 1 ? 'Yes' : 'No' }}</td> --}}
                                                <td>BDT. {{ $cat->product->price }} /-</td>
                                                <td> {{ $cat->product->discount }}% OFF</td>
                                                <td> {{ ucfirst($cat->product->brand?->title) }}</td>
                                                <td>
                                                    @if ($cat->product->stock > 0)
                                                        <span class="badge badge-primary">{{ $cat->product->stock }}</span>
                                                    @else
                                                        <span class="badge badge-danger">{{ $cat->product->stock }}</span>
                                                    @endif
                                                </td>
                                                <td>

                                                    @if ($cat->product->photo)
                                                        @php
                                                            $photo = explode(',', $cat->product->photo);
                                                            // dd($photo);
                                                        @endphp
                                                        <img src="{{ $photo[0] }}" class="img-fluid zoom"
                                                            style="max-width:80px" alt="{{ $cat->product->photo }}">
                                                    @else
                                                        <img src="{{ asset('backend/img/thumbnail-default.jpg') }}"
                                                            class="img-fluid" style="max-width:80px" alt="avatar.png">
                                                    @endif
                                                </td>
                                                {{-- <td>
                                                    @if ($cat->product->status == 'active')
                                                        <span class="badge badge-success">{{ $cat->product->status }}</span>
                                                    @else
                                                        <span class="badge badge-warning">{{ $cat->product->status }}</span>
                                                    @endif
                                                </td> --}}

                                                {{-- <td class="d-flex">
                                                    <a target="_blank" href="{{ route('product.show', $cat->product->id) }}"
                                                        class="float-left mr-1 btn btn-warning btn-sm"
                                                        style="height:30px; width:30px;border-radius:50%"
                                                        data-toggle="tooltip" title="view" data-placement="bottom"><i
                                                            class="fas fa-eye"></i></a>
                                                    @can('Edit Product')
                                                        <a href="{{ route('product.edit', $cat->product->id) }}"
                                                            class="float-left mr-1 btn btn-primary btn-sm"
                                                            style="height:30px; width:30px;border-radius:50%"
                                                            data-toggle="tooltip" title="edit" data-placement="bottom"><i
                                                                class="fas fa-edit"></i>
                                                        </a>
                                                    @endcan
                                                    @can('Delete Product')
                                                        <form method="POST"
                                                            action="{{ route('product.destroy', [$cat->product->id]) }}">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-danger btn-sm dltBtn"
                                                                data-id={{ $cat->product->id }}
                                                                style="height:30px; width:30px;border-radius:50%"
                                                                data-toggle="tooltip" data-placement="bottom" title="Delete"><i
                                                                    class="fas fa-trash-alt"></i></button>
                                                        </form>
                                                    @endcan

                                                </td> --}}
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            @endif

        </div>
    </div>
@endsection

@push('styles')
    <style>
        .order-info,
        .shipping-info {
            background: #ECECEC;
            padding: 20px;
        }

        .order-info h4,
        .shipping-info h4 {
            text-decoration: underline;
        }
    </style>
@endpush
