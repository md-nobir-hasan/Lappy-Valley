<div class="shadow-[2px_2px_5px_2px_#0000001A] p-2">
    <div class="bg-white rounded-lg product_div">
        <a href="{{ route('product.details') }}">
            <img class="object-center pimg" src="/storage/{{$product->photo}}" alt="">
        </a>

        <div>
            <p  class="ptitle font-[jost] text-[16px] font-[500] leading-[23px] text-left text-[#380D37] ">
                {{ $product->title }}
            </p>
            <div class="py-[12px] flex justify-between px-2">
                <a href="#" class="font-[jost] text-[14px] font-[600] leading-[20px] text-left text-[#DC275C]">
                    <span class="pprice" value='{{$product->price}}'
                       >{{ number_format($product->price - (($product->price * $product->discount) / 100) ) }}</span> TK</a>
                @auth
                    <livewire:add-to-cart :id="$product->id"
                        button='<p  class="font-[jost] text-[14px] text-[#380D37] font-[600] leading-[20px] text-left cursor-pointer ">Add to Cart</p>' />
                @else
                    <a href="{{ route('user.login') }}">
                        <p
                            class="font-[jost] text-[14px] text-[#380D37] font-[600] leading-[20px] text-left cursor-pointer">
                            Add to Cart</p>
                    </a>
                @endauth
            </div>
        </div>
    </div>
</div>
