{{-- @foreach ($products as $product) --}}
<div
    class="w-[221px] h-[376px] max-md:w-full mx-auto max-sm:mb-[10px] max-md:mb-[10px] max-md:gap-[8px] flex flex-col bg-white px-2 pt-2 pb-3 gap-[16px] text-left shadow-[2px_2px_5px_2px_#0000001A]">
   
    <div class="image-container relative">
        <a href="{{ route('product.details', [$product->slug]) }}" wire:navigate>
            @if ($product->photo)
                @php
                    $photo = explode(',', $product->photo);
                @endphp
                <img src="{{ $photo[0] }}" class="object-container pimg h-[180px]" alt="{{ $product->photo }}">
            @else
                <img src="{{ asset('backend/img/thumbnail-default.jpg') }}" class="object-container pimg h-[180px]"
                    alt="avatar.png">
            @endif
        </a>
        <span class="text-[14px] text-[#fff] bg-red-900 absolute top-0 left-[-5px] px-2 py-[2px] rounded-r-lg">Out Of Stock</span>
    </div>
    <div>
        <a href="{{ route('product.details', [$product->slug]) }}" wire:navigate>
            <p
                class="ptitle text-[16px] text-[#380D37] font-[jost] font-[500] leading-[23.12px] transition duration-300 ease-in-out hover:text-[#ef4a23] decoration-[#ef4a23] decoration-2 hover:underline hover:underline-offset-4">
                {{ $product->title }}
            </p>
        </a>
    </div>
    {{ $slot }}
    <div class="flex justify-between items-end text-[14px] mt-auto font-[jost] font-[700] leading-[20.23px]">
        <div class="flex flex-col">
            <span class="pprice text-[#DC275C]"
                value='{{ $product->final_price }}'>{{ number_format($product->final_price) }} ৳
            </span>
            <span class="text-[#380D37] text-[14px] font-[jost] font-[700] line-through">
                {{$product->price}} ৳
            </span>
        </div>
        <livewire:add-to-cart :id="$product->id"
            button='<p  class="font-[jost] text-[14px] text-[#380D37] font-[600] leading-[20px] text-left cursor-pointer ">Add to Cart</p>' />

    </div>

</div>
