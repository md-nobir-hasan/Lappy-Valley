@extends('backend.layouts.master')

@push('title')
    Product Details
@endpush

@section('main-content')
    <div class="card">
        <div class="card-header" style="display: flex !important ; justify-content: space-between; align-items: center">
            <h2>Product</h2>
            <h2>
                @if ($product->upcomming)
                <span class="badge badge-success">UP COMMING <span class="ml-4 badge badge-warning">{{date('d-m-y',strtotime($product->upcomming))}}</span> </span>
                {{-- <span class="ml-5 badge badge-warning">{{$product->upcomming}}</span> --}}
                @else
                    @if ($product->stock > 0)
                        <span class="badge badge-success">IN STOCK</span>
                    @else
                        <span class="badge badge-warning">OUT OF STOCK</span>
                    @endif
                @endif

            </h2>

            <a href="{{ route('order.pdf', $product->id) }}" class="shadow-sm d btn btn-sm btn-primary"
                style="display: inline-block"><i class="fas fa-download fa-sm text-white-50"></i>
                Generate PDF</a>
        </div>
        <div class="card-body">
            @if ($product)
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Discount</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>৳{{ number_format($product->price, 2) }}</td>
                            <td>{{ $product->discount }}%</td>
                            <td>
                                @if ($product->status == 'active')
                                    <span class="badge badge-success">{{ $product->status }}</span>
                                @else
                                    <span class="badge badge-warning">{{ $product->status }}</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('product.edit', $product->id) }}"
                                    class="float-left mr-1 btn btn-primary btn-sm"
                                    style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="edit"
                                    data-placement="bottom"><i class="fas fa-edit"></i></a>
                                <form method="POST" action="{{ route('product.destroy', [$product->id]) }}">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm dltBtn" data-id={{ $product->id }}
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
                                    <h4 class="pb-4 text-center">Product Attributes</h4>
                                    <table class="table">
                                        <tr class="">
                                            <td>Model</td>
                                            <td> : {{ $product->model }}</td>
                                        </tr>
                                        <tr class="">
                                            <td>Category</td>
                                            <td> : {{ $product->cat_info?->title }}</td>
                                        </tr>
                                        <tr>
                                            <td>Sub-category</td>
                                            <td> : {{ $product->sub_cat_info?->title }} </td>
                                        </tr>
                                        <tr>
                                            <td>Brand</td>
                                            <td> : {{ $product->brand?->title }}</td>
                                        </tr>
                                        <tr>
                                            <td>Is Featured</td>
                                            <td> : {{ $product->is_featured == 1 ? 'Yes' : 'No' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Processor Model</td>
                                            <td> : {{ $product->ProcessorModel?->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Processor Generation</td>
                                            <td> : {{ $product->ProcessorGeneration?->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Display Type</td>
                                            <td> : {{ $product->DisplayType?->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Display Size</td>
                                            <td> : {{ $product->DisplaySize?->from . ' to ' . $product->DisplaySize?->to }}
                                                inch</td>
                                        </tr>

                                        <tr>
                                            <td>RAM</td>
                                            <td> : {{ $product->Ram?->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>SSD</td>
                                            <td> : {{ $product->ssd?->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>HDD</td>
                                            <td> : {{ $product->hdd?->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Graphic</td>
                                            <td> : {{ $product->Graphic?->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Special Features</td>
                                            <td> : {{ $product->special_feature }}</td>
                                        </tr>

                                    </table>
                                </div>
                            </div>

                            <div class="col-lg-6 col-lx-4">
                                <div>
                                    <div class="shipping-info">
                                        <h4 class="pb-4 text-center">SHOR DESCRIPTION</h4>
                                        <P>
                                            {!! $product->summary !!}
                                        </P>
                                        {{-- <table class="table">

                                        <tr>
                                            <td>HDD</td>
                                            <td> : {{ $product->hdd->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Graphic</td>
                                            <td> : {{ $product->Graphic->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Special Features</td>
                                            <td> : {{ $product->SpecialFeature->name }}</td>
                                        </tr>
                                    </table> --}}
                                    </div>
                                    <div class="">
                                        <div class="shipping-info">
                                            <h4 class="pb-4 text-center">DESCRIPTION</h4>
                                            <P>
                                                {!! $product->description !!}
                                            </P>
                                            {{-- <table class="table">

                                        <tr>
                                            <td>HDD</td>
                                            <td> : {{ $product->hdd->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Graphic</td>
                                            <td> : {{ $product->Graphic->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Special Features</td>
                                            <td> : {{ $product->SpecialFeature->name }}</td>
                                        </tr>
                                    </table> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>

                <section class="mt-5">
                    <h1 class="text-center" style="text-decoration: underline">Products Photos</h1>
                    <div class="text-center">
                        @php
                            $photo = explode(',', $product->photo);
                        @endphp
                        @foreach ($photo as $pto)
                            <img src="{{ $pto }}" class="mx-auto rounded img-fluid img-thumbnail" alt="...">
                        @endforeach
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
