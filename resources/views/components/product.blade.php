{{-- @foreach ($products as $product) --}}
<div class="w-[221px] mx-auto max-sm:mb-[10px] max-md:mb-[10px] max-md:gap-[8px] flex flex-col bg-white p-2 gap-[16px] text-left shadow-[2px_2px_5px_2px_#0000001A]">
    <div class="relative max-w-xs overflow-hidden bg-no-repeat bg-cover product_div"
    data-te-ripple-init
    data-te-ripple-color="light">
        <a href="{{ route('product.details', [$product->slug]) }}" wire:navigate>
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
        <a href="{{ route('product.details', [$product->slug]) }}" wire:navigate>
            <div
              class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
          </a>
    </div>
    <div>
      <a href="{{ route('product.details', [$product->slug]) }}" wire:navigate>
        <p class="ptitle text-[16px] text-[#380D37] font-[jost] font-[500] leading-[23.12px] transition duration-300 ease-in-out hover:text-[#ef4a23] decoration-[#ef4a23] decoration-2 hover:underline hover:underline-offset-4">
            {{ $product->title }}
        </p>
      </a>
    </div>
    {{ $slot }}
    <div class="flex justify-between text-[14px] mt-auto font-[jost] font-[700] py-[10px] leading-[20.23px]">
            <span class="pprice text-[#DC275C]"
                value='{{ $product->final_price }}'>{{ number_format($product->final_price) }} TK
            </span>

        {{-- @auth --}}
        <livewire:add-to-cart :id="$product->id"
            button='<p  class="font-[jost] text-[14px] text-[#380D37] font-[600] leading-[20px] text-left cursor-pointer ">Add to Cart</p>'
            />
        {{-- @else
                    <a href="{{ route('user.login') }}">
                        <span
                            class="text-[#380D37]">
                            Add to Cart
                        </span>
                    </a>
                @endauth --}}
    </div>

</div>

{{-- @endforeach --}}
