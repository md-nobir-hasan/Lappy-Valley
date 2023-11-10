<div class="shadow-[2px_2px_5px_2px_#0000001A] p-2" class="product_div">
    <div class="bg-white rounded-lg">
        <a href="{{ route('product.details') }}">
            <img class="object-center"
                src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                alt="">
        </a>

        <div>
            <p class="font-[jost] text-[16px] font-[500] leading-[23px] text-left text-[#764A87]">
                {{ $product->title }}
            </p>
            <div class="py-[12px] flex justify-between px-2">
                <a href="#"
                    class="font-[jost] text-[14px] font-[600] leading-[20px] text-left text-[#DC275C]">{{ number_format($product->price) }}TK</a>
                @auth
                    <livewire:add-to-cart :id="1"
                        button='<p class="font-[jost] text-[14px] text-[#380D37] font-[600] leading-[20px] text-left cursor-pointer add-to-cart">Add to Cart</p>'
                        />
                @else
                    <a href="{{ route('user.login') }}">
                        <p
                            class="font-[jost] text-[14px] text-[#764A87] font-[600] leading-[20px] text-left cursor-pointer">
                            Add to Cart</p>
                    </a>
                @endauth
            </div>
        </div>
    </div>
</div>

