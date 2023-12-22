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
                    <span class="badge badge-success">UP COMMING <span
                            class="ml-4 badge badge-warning">{{ date('d-m-y', strtotime($product->upcomming)) }}</span>
                    </span>
                    {{-- <span class="ml-5 badge badge-warning">{{$product->upcomming}}</span> --}}
                @else
                    @if ($product->stock > 0)
                        <span class="badge badge-success">IN STOCK</span>
                    @else
                        <span class="badge badge-warning">OUT OF STOCK</span>
                    @endif
                @endif

            </h2>

            {{-- <a href="{{ route('order.pdf', $product->id) }}" class="shadow-sm d btn btn-sm btn-primary"
                style="display: inline-block"><i class="fas fa-download fa-sm text-white-50"></i>
                Generate PDF</a> --}}
            <a href="{{ url()->previous() }}" class="shadow-sm d btn btn-sm btn-primary" style="display: inline-block">
                {{-- <i class="fas fa-right-arrow fa-sm text-white-50"></i> --}}
                Back</a>
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
                            <th>Final Price</th>
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
                            <td>৳{{ $product->final_price }}</td>
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
                                {{-- Product's main attributes  --}}
                                <div class="order-info">
                                    <h4 class="pb-4 text-center">Product Attributes</h4>
                                    {{-- <h5 class="pb-4 text-center">Main Attributes</h5> --}}

                                    <table class="table">
                                        <tr class="">
                                            <td>Model</td>
                                            <td> : {{ $product->model }}</td>
                                        </tr>
                                        <tr class="">
                                            <td>MPN</td>
                                            <td> : {{ $product->mpn }}</td>
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
                                            <td>Stock</td>
                                            <td> : {{ $product->stock }}</td>
                                        </tr>
                                        <tr>
                                            <td>Average Rating</td>
                                            <td> : {{ $product->average_rating }}</td>
                                        </tr>
                                        <tr>
                                            <td>Views</td>
                                            <td> : {{ $product->views }}</td>
                                        </tr>
                                        <tr>
                                            <td>Product Offer</td>
                                            <td> :
                                                {{ $product->ProductOffer?->title . ' (' . $product->ProductOffer?->title . 'to' . $product->ProductOffer?->to }})
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Is Featured</td>
                                            <td> : {{ $product->is_featured == 1 ? 'Yes' : 'No' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Special features</td>
                                            <td> : {{ $product->special_feature }}</td>
                                        </tr>
                                    </table>
                                </div>

                                {{-- Product's main attributes  --}}
                                <div class="order-info">
                                    <h4 class="pb-4 text-center">Memory Attributes</h4>
                                    <table class="table">
                                        <tr>
                                            <td>RAM</td>
                                            <td> : {{ $product->Ram?->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Memory Type</td>
                                            <td> : {{ $product->m_type }}</td>
                                        </tr>
                                        <tr>
                                            <td>Bus Speed</td>
                                            <td> : {{ $product->bus_speed }}</td>
                                        </tr>
                                        <tr>
                                            <td>Memory Slot</td>
                                            <td> : {{ $product->m_slot }}</td>
                                        </tr>
                                        <tr>
                                            <td>Memory Removal</td>
                                            <td> : {{ $product->m_removal ? 'Yes' : 'No' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Other Features</td>
                                            <td> : {{ $product->m_other }}</td>
                                        </tr>

                                    </table>
                                </div>

                                {{-- Product's main attributes  --}}
                                <div class="order-info">
                                    <h4 class="pb-4 text-center">Memory Attributes</h4>
                                    <table class="table">
                                        <tr>
                                            <td>Storage</td>
                                            <td> : {{ $product->ssd?->name .' '. $product->hdd ? .', '.$product->hdd->name : '' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Memory Type</td>
                                            <td> : {{ $product->ssd ? .'SSD' : ''   }}{{ $product->hdd ? .', HDD' : ''  }}</td>
                                        </tr>
                                        <tr>
                                            <td>Bus Speed</td>
                                            <td> : {{ $product->bus_speed }}</td>
                                        </tr>
                                        <tr>
                                            <td>Memory Slot</td>
                                            <td> : {{ $product->m_slot }}</td>
                                        </tr>
                                        <tr>
                                            <td>Extra Slot</td>
                                            <td> : {{ $product->s_extra_m2_slot ? 'Yes':'No' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Storage Support Type</td>
                                            <td> : {{ $product->s_support_type }}</td>
                                        </tr>
                                        <tr>
                                            <td>Sotrage Upgrate Note</td>
                                            <td> : {{ $product->s_upgrade }}</td>
                                        </tr>
                                        <tr>
                                            <td>Other Features</td>
                                            <td> : {{ $product->stor_other }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="col-lg-6 col-lx-4">
                                <div>
                                    {{-- Processore Attributes  --}}
                                    <div class="shipping-info">
                                        <h4 class="pb-4 text-center">Processor Attributes</h4>
                                        {{-- <P>
                                            {!! $product->summary !!}
                                        </P> --}}
                                        <table class="table">
                                            <tr>
                                                <td>Processor Model</td>
                                                <td> : {{ $product->ProcessorModel?->name }}</td>
                                            </tr>
                                            <tr>
                                                <td>Processor Generation</td>
                                                <td> : {{ $product->ProcessorGeneration?->name }}</td>
                                            </tr>
                                            <tr>
                                                <td>Processor Brand</td>
                                                <td> : {{ $product->p_brand }}</td>
                                            </tr>
                                            <tr>
                                                <td>Processor Speed</td>
                                                <td> : {{ $product->c_speed }}</td>
                                            </tr>
                                            <tr>
                                                <td>L1 Cache</td>
                                                <td> : {{ $product->l1_cache }}</td>
                                            </tr>
                                            <tr>
                                                <td>L2 Cache</td>
                                                <td> : {{ $product->l2_cache }}</td>
                                            </tr>
                                            <tr>
                                                <td>L3 Cache</td>
                                                <td> : {{ $product->l3_cache }}</td>
                                            </tr>
                                            <tr>
                                                <td>Processor Core</td>
                                                <td> : {{ $product->p_core }}</td>
                                            </tr>
                                            <tr>
                                                <td>Processor Core</td>
                                                <td> : {{ $product->p_thread }}</td>
                                            </tr>
                                            <tr>
                                                <td>Others Info</td>
                                                <td> : {{ $product->p_other }}</td>
                                            </tr>
                                            {{-- <tr>
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
                                        </tr> --}}
                                        </table>
                                    </div>

                                    {{-- Display Attributes  --}}
                                    <div class="">
                                        <div class="shipping-info">
                                            <h4 class="pb-4 text-center">Display Attributes</h4>
                                            <table class="table">
                                                <tr>
                                                    <td>Display Type</td>
                                                    <td> : {{ $product->DisplayType?->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Display Size</td>
                                                    <td> : {{ $product->DisplaySize?->size }}
                                                        inch</td>
                                                </tr>
                                                <tr>
                                                    <td>Display Resolutioin</td>
                                                    <td> : {{ $product->d_resolution }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Display</td>
                                                    <td> : {{ $product->d_resolution }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Display Touch</td>
                                                    <td> : {{ $product->touch_screen ? 'Yes' : 'No' }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Other Features</td>
                                                    <td> : {{ $product->d_other }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    {{-- Keyboar & Touchpad Attributes  --}}
                                    <div class="">
                                        <div class="shipping-info">
                                            <h4 class="pb-4 text-center">Display Attributes</h4>
                                            <table class="table">
                                                <tr>
                                                    <td>Display Type</td>
                                                    <td> : {{ $product->DisplayType?->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Display Size</td>
                                                    <td> : {{ $product->DisplaySize?->size }}
                                                        inch</td>
                                                </tr>
                                                <tr>
                                                    <td>Display Resolutioin</td>
                                                    <td> : {{ $product->d_resolution }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Display</td>
                                                    <td> : {{ $product->d_resolution }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Display Touch</td>
                                                    <td> : {{ $product->touch_screen ? 'Yes' : 'No' }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Other Features</td>
                                                    <td> : {{ $product->d_other }}</td>
                                                </tr>
                                            </table>
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
