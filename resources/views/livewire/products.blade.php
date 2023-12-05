<div class="w-[221px] mx-auto flex flex-col bg-white p-2 gap-[16px] text-left shadow-[2px_2px_5px_2px_#0000001A]">
    <div class="product_div">
        <a href="{{ route('product.details') }}">
            @if ($product->photo)
                @php
                    $photo = explode(',', $product->photo);
                    // dd($photo);
                @endphp
                <img src="{{ $photo[0] }}" class="img-fluid zoom" style="max-width:80px" alt="{{ $product->photo }}">
            @else
                <img src="{{ asset('backend/img/thumbnail-default.jpg') }}" class="img-fluid" style="max-width:80px"
                    alt="avatar.png">
            @endif
            {{-- <img class="object-center pimg" src="{{$product->photo}}" alt=""> --}}
        </a>
        <div>
            <div class="w-[221px] mx-auto flex flex-col bg-white p-2 gap-[16px] text-left shadow-[2px_2px_5px_2px_#0000001A]">
                <div class="product_div">
                    <a href="{{ route('product.details') }}">
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
                        {{-- <img class="object-center pimg" src="{{$product->photo}}" alt=""> --}}
                    </a>

                    <div>
                        <p class="text-[16px] text-[#380D37] font-[jost] font-[500] leading-[23.12px]">
                            {{ $product->title }}
                        </p>
                    </div>
                    <div class="flex justify-between text-[14px] mt-auto font-[jost] font-[700] py-[10px] leading-[20.23px]">
                        <a href="#">
                            <span class="pprice text-[#DC275C]"
                                value='{{ $product->final_price }}'>{{ number_format($product->final_price) }}
                            </span>
                            TK</a>
                        @auth
                            <livewire:add-to-cart :id="$product->id"
                                button='<p  class="font-[jost] text-[14px] text-[#380D37] font-[600] leading-[20px] text-left cursor-pointer ">Add to Cart</p>' />
                        @else
                            <a href="{{ route('user.login') }}">
                                <span class="text-[#380D37]">
                                    Add to Cart
                                </span>
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
