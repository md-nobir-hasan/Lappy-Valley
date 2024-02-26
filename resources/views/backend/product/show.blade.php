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
                            <th>Inventory Cost</th>
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
                            <td>৳{{ $product->inventory_cost }}</td>
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

                                {{-- Memory attributes  --}}
                                <div class="order-info">
                                    <h4 class="pb-4 text-center">Memory Attributes</h4>
                                    <table class="table">
                                        <tr>
                                            <td>RAM</td>
                                            <td> : {{ $product->ram?->ram }} GB</td>
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

                                {{-- Storage attributes  --}}
                                <div class="order-info">
                                    <h4 class="pb-4 text-center">Storage Attributes</h4>
                                    <table class="table">
                                        <tr>
                                            <td>Storage</td>
                                            <td> :
                                                {{ $product->ssd?->name . ' ' . ($product->hdd ? ', ' . $product->hdd->name : '') }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Memory Type</td>
                                            <td> : {{ $product->ssd ? 'SSD' : '' }}{{ $product->hdd ? ', HDD' : '' }}</td>
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
                                            <td> : {{ $product->s_extra_m2_slot ? 'Yes' : 'No' }}</td>
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

                                {{-- Graphics attributes  --}}
                                <div class="order-info">
                                    <h4 class="pb-4 text-center">Graphic Attributes</h4>
                                    <table class="table">
                                        <tr>
                                            <td>Graphic Model</td>
                                            <td> : {{ $product->g_model }}</td>
                                        </tr>

                                        <tr>
                                            <td>Graphic Card</td>
                                            <td> : {{ $product->Graphic?->name }}</td>
                                        </tr>

                                        <tr>
                                            <td>Other Features</td>
                                            <td> : {{ $product->g_other }}</td>
                                        </tr>
                                    </table>
                                </div>

                                {{-- Software attributes  --}}
                                <div class="order-info">
                                    <h4 class="pb-4 text-center">Software Attributes</h4>
                                    <table class="table">
                                        <tr>
                                            <td>Operating System</td>
                                            <td> : {{ $product->operating_system }}</td>
                                        </tr>
                                        <tr>
                                            <td>Other Features</td>
                                            <td> : {{ $product->g_other }}</td>
                                        </tr>
                                    </table>
                                </div>

                                {{-- Power attributes  --}}
                                <div class="order-info">
                                    <h4 class="pb-4 text-center">Power Attributes</h4>
                                    <table class="table">
                                        <tr>
                                            <td>Battery Type</td>
                                            <td> : {{ $product->battery_type }}</td>
                                        </tr>
                                        <tr>
                                            <td>Battery Capacity</td>
                                            <td> : {{ $product->battery_capacity }}</td>
                                        </tr>
                                        <tr>
                                            <td>Adapter Type</td>
                                            <td> : {{ $product->adapter_type }}</td>
                                        </tr>
                                        <tr>
                                            <td>Other Features</td>
                                            <td> : {{ $product->power_other }}</td>
                                        </tr>
                                    </table>
                                </div>


                                {{-- Physical Specification  --}}
                                <div class="order-info">
                                    <h4 class="pb-4 text-center">Physical Specification</h4>
                                    <table class="table">
                                        <tr>
                                            <td>Color</td>
                                            <td> : {{ $product->color }}</td>
                                        </tr>
                                        <tr>
                                            <td>Color</td>
                                            <td> : {{ $product->dimension }}</td>
                                        </tr>
                                        <tr>
                                            <td>Color</td>
                                            <td> : {{ $product->weight }}</td>
                                        </tr>
                                        <tr>
                                            <td>Other Features</td>
                                            <td> : {{ $product->physi_other }}</td>
                                        </tr>
                                    </table>
                                </div>


                                {{-- Warranty attributes  --}}
                                <div class="order-info">
                                    <h4 class="pb-4 text-center">Warranty Attributes</h4>
                                    <table class="table">
                                        <tr>
                                            <td>Warranty Details</td>
                                            <td> : {{ $product->w_details }}</td>
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
                                            <h4 class="pb-4 text-center">Keyboar & Touchpad Attributes</h4>
                                            <table class="table">
                                                <tr>
                                                    <td>Keyboard Type</td>
                                                    <td> : {{ $product->k_type }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Touchpad</td>
                                                    <td> : {{ $product->touchpad ? 'Yes' : 'No' }}</td>
                                                </tr>

                                                <tr>
                                                    <td>Other Features</td>
                                                    <td> : {{ $product->k_other }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    {{-- Camera & Audio Attributes  --}}
                                    <div class="">
                                        <div class="shipping-info">
                                            <h4 class="pb-4 text-center">Camera & Audio Attributes</h4>
                                            <table class="table">
                                                <tr>
                                                    <td>Webcam</td>
                                                    <td> : {{ $product->webcam }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Microphone</td>
                                                    <td> : {{ $product->microphone }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Speaker</td>
                                                    <td> : {{ $product->speaker }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Other Features</td>
                                                    <td> : {{ $product->ca_other }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    {{-- Ports & Slots Attributes  --}}
                                    <div class="">
                                        <div class="shipping-info">
                                            <h4 class="pb-4 text-center">Ports & Slots Attributes</h4>
                                            <table class="table">
                                                <tr>
                                                    <td>Optical Driver</td>
                                                    <td> : {{ $product->optical_drive }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Card Reader</td>
                                                    <td> : {{ $product->card_reader }}</td>
                                                </tr>
                                                <tr>
                                                    <td>HDMI Port</td>
                                                    <td> : {{ $product->hdmi_p }}</td>
                                                </tr>
                                                <tr>
                                                    <td>USB2 Port</td>
                                                    <td> : {{ $product->usb2_p }}</td>
                                                </tr>
                                                <tr>
                                                    <td>USB3 Port</td>
                                                    <td> : {{ $product->usb3_p }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Type C Therderbold Port</td>
                                                    <td> : {{ $product->type_c_tb_p }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Headphone Port</td>
                                                    <td> : {{ $product->headphone_p }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Microphone Port</td>
                                                    <td> : {{ $product->microphone_p }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Other Features</td>
                                                    <td> : {{ $product->ps_other }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    {{-- Network & Connectivity Attributes  --}}
                                    <div class="">
                                        <div class="shipping-info">
                                            <h4 class="pb-4 text-center">Network and Connectivity Attributes</h4>
                                            <table class="table">
                                                <tr>
                                                    <td>WIFI</td>
                                                    <td> : {{ $product->wifi }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Bluetooth</td>
                                                    <td> : {{ $product->bluetooth }}</td>
                                                </tr>

                                                <tr>
                                                    <td>Other Features</td>
                                                    <td> : {{ $product->k_other }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>


                                    {{-- Security Attributes  --}}
                                    <div class="">
                                        <div class="shipping-info">
                                            <h4 class="pb-4 text-center">Security Attributes</h4>
                                            <table class="table">
                                                <tr>
                                                    <td>Finger Print</td>
                                                    <td> : {{ $product->finger_print }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Face Lock</td>
                                                    <td> : {{ $product->facelock }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Other Features</td>
                                                    <td> : {{ $product->s_other }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Product Summery  --}}
                        <div class="mt-4 row">
                            <div class="col-12">
                                {{-- Product's main attributes  --}}
                                <div class="shipping-info">
                                    <h4 class="pb-4 text-center">Product Summery</h4>
                                    <P>
                                        {!! $product->summary !!}
                                    </P>

                                </div>

                            </div>

                        </div>
                        <div class="mt-4 row">
                            <div class="col-12">
                                {{-- Product's main attributes  --}}
                                <div class="order-info">
                                    <h4 class="pb-4 text-center">Product Description</h4>
                                    {{-- <h5 class="pb-4 text-center">Main Attributes</h5> --}}

                                    <P>
                                        {!! $product->description !!}
                                    </P>
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
                            <img src="{{ $pto }}" class="mx-auto rounded img-fluid img-thumbnail"
                                alt="...">
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
