{{-- @foreach ($products as $product) --}}
<div class="shadow-[2px_2px_5px_2px_#0000001A] p-2 w-[221px] mx-auto">
    <div class="bg-white rounded-lg product_div">
        <a href="{{route('product.details',[$product->slug])}}">
            {{-- <img class="object-center pimg" src="{{$product->photo}}" alt=""> --}}
            @if ($product->photo)
                @php
                    $photo = explode(',', $product->photo);
                    // dd($photo);
                @endphp
                <img src="{{ $photo[0] }}" class="object-center pimg" alt="{{ $product->photo }}">
            @else
                <img src="{{ asset('backend/img/thumbnail-default.jpg') }}" class="object-center pimg" alt="avatar.png">
            @endif
        </a>

        <div>
            <p class="ptitle font-[jost] text-[16px] font-[500] leading-[23px] text-left text-[#380D37] ">
                {{ $product->title }}
            </p>
            {{ $slot }}
            <div class="py-[12px] flex justify-between text-left">
                <a href="#" class="font-[jost] text-[14px] font-[600] leading-[20px] text-left text-[#DC275C]">
                    <span class="pprice"
                        value='{{ $product->final_price }}'>{{ number_format($product->final_price) }}</span>
                    TK</a>
                {{-- @auth --}}
                <livewire:add-to-cart :id="$product->id"
                    button='<p  class="font-[jost] text-[14px] text-[#380D37] font-[600] leading-[20px] text-left cursor-pointer ">Add to Cart</p>' />
                {{-- @else
                    <a href="{{ route('user.login') }}">
                        <p
                            class="font-[jost] text-[14px] text-[#380D37] font-[600] leading-[20px] text-left cursor-pointer">
                            Add to Cart
                        </p>
                    </a>
                @endauth --}}
            </div>
        </div>
    </div>
</div>
{{-- @endforeach --}}
