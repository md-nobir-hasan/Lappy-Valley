    <!-- ----------cart----- -->
    <div id="side_cart" class="w-[400px] h-[792px] gap-20 bg-[#F2F2F2] right-0 top-0 fixed z-[9999] overflow-y-scroll">
        {{-- cart header (cart icon and close button) --}}
        <div class="w-[400px] h-[61px] bg-[#380D37] flex justify-between text-[20px] text-[#fff] items-center px-[20px]">
            <img class='h-[50px]' src="/storage/product/Cart.svg" alt="">
            <h2 id="side_cart_close" class='font-[jost] cursor-pointer font-[500] text-[20px] text-[#F2F2F2]'>Close</h2>
        </div>

        {{-- Cart body (cart's products ) --}}
        <div class='w-[364px] mx-auto px-[5px]'>
            @if ($carts)
                @foreach ($carts as $cart)
                    <div
                        class='flex justify-around mt-[10px] border-t-[#3535354D] border-t-[2px] border-b-[#3535354D] border-b-[2px] py-[10px] px-[5px] gap-[10px]'>

                        <div class='flex items-center'>
                            <img class="w-[80px] h-[px]" src="{{ $cart->product->photo }}"
                                alt="{{ $cart->product->title }}">
                        </div>

                        <div>
                            <div>
                                <p class='text-[12px] text-[#380D37] font-[jost] font-[500]'>
                                    {{ $cart->product->title }}
                                </p>
                            </div>
                            <div
                                class='border-[#380D37] w-[85px] h-[19.231px] border-[2px] rounded-[4px] my-[10px] flex items-center justify-around'>
                                <span
                                    class='text-[#380D37] h-[19.231px] border-[#380D37] border-r-[2px] pr-[5px] flex items-center cursor-pointer  text-center'>-</span>
                                <span
                                    class='text-[#380D37] h-[19.231px] border-[#380D37] border-r-[2px] pr-[5px] flex items-center  text-center'>1</span>
                                <span
                                    class='text-[#380D37] h-[19.231px] pr-[5px] flex items-center cursor-pointer text-center'>+</span>
                            </div>
                            <div>
                                <p class='text-[#353535] text-[16px] font-[jost] font-[500] text-center'>1 x <span
                                        class='text-[#DC275C]'>{{ number_format($cart->product->price) }} TAKA</span>
                                </p>

                            </div>
                        </div>

                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

        {{-- cart footer  --}}
        <div class='items-center mx-auto w-[364px] translate-y-[360px]'>
            <div class=' mx-auto h-[1px] px-[20px] bg-[#353535]'></div>
            <div class='my-[30px]'>
                <ul class='flex justify-between mx-[5px]'>
                    <li class='text-[20] text-[#353535] font-[jost] font-[700]'>Subtotal :</li>
                    <li class='text-[20] text-[#DC275C] font-[jost] font-[700]'>
                        {{ number_format($carts?->sum('amount')) }} TK</li>
                </ul>
            </div>
            <div class='items-center flex justify-center w-[364px] my-[30px]'>
                <button
                    class='w-[364px]  border-[1px] border-[#380D37] rounded-[4px] px-[50px] py-[10px] text-[#380D37] text-[20px] font-[jost] font-[500]'>View
                    Cart</button>
            </div>
            <div class='items-center flex justify-center w-[ 364px] my-[30px]'>
                <button
                    class='w-[364px] rounded-[4px] items-center px-[50px] py-[10px] text-[#F2F2F2] bg-gradient-to-r from-[#380D37] to-[#DC275C] text-[20px] font-[jost] font-[500]'>Checkout</button>
            </div>
        </div>
    </div>
    <!-- -----------------cart----end---- -->
