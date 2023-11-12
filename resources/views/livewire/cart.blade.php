<form action="{{ route('checkout') }}" method="POST">
    @csrf
    <!-- ----------cart----- -->
    <div id="side_cart" class="w-[400px] h-[792px] gap-20 bg-[#F2F2F2] right-0 top-0 fixed z-[9999] overflow-y-scroll">
        {{-- cart header (cart icon and close button) --}}
        <div class="w-[400px] h-[61px] bg-[#380D37] flex justify-between text-[20px] text-[#fff] items-center px-[20px]">
            <img class='h-[50px]' src="/storage/product/Cart.svg" alt="">
            <h2 id="side_cart_close" class='font-[jost] cursor-pointer font-[500] text-[20px] text-[#F2F2F2]'>Close</h2>
        </div>

        {{-- Cart body (cart's products ) --}}
        <div class='w-[364px] mx-auto px-[5px]' id="side_cart_body">
            @if ($carts)
                @foreach ($carts as $cart)
                    <input type="hidden" name="cps[{{ $cart->product_id }}][product_id]"
                        value="{{ $cart->product_id }}">
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
                            <div class="relative mb-4 flex flex-wrap items-stretch w-[82px] mx-auto">
                                <button
                                    class="z-[2] inline-block rounded-l border-2 border-primary px-1  text-xs font-bold uppercase leading-normal text-primary transition duration-150 ease-in-out hover:border-primary-600 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-primary-600 focus:z-[3] focus:border-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:border-primary-700 active:text-primary-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                                    type="button" data-te-ripple-init>
                                    +
                                </button>
                                 <input type="text" value="1"
                                    class="relative m-0 -ml-0.5  text-center block w-[20px] min-w-0 flex-auto rounded-r border-2  border-solid  border-neutral-300 bg-transparent bg-clip-padding px-1 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary"
                                    placeholder="" aria-label="Example text with two button addons" />
                                <button
                                    class="z-[2] -ml-0.5 inline-block rounded-none border-2 border-primar px-1  text-xs font-extrabold uppercase leading-normal text-primary transition duration-150 ease-in-out hover:border-primary-600 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-primary-600 focus:z-[3] focus:border-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:border-primary-700 active:text-primary-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                                    type="button" data-te-ripple-init>
                                    -
                                </button>

                            </div>
                            {{-- <div
                                class='border-[#380D37] w-[85px] h-[19.231px] border-[2px] rounded-[4px] my-[10px] flex items-center justify-around'>
                                <span
                                    class='text-[#380D37] h-[19.231px] border-[#380D37] border-r-[2px] pr-[5px] flex items-center cursor-pointer  text-center'>-</span>
                                <span
                                    >
                                     <input class='text-[#380D37] h-[19.231px] w-[40px] border-[#380D37] border-r-[2px]  flex items-center  text-center'
                                    type="number" readonly name="cps[{{$cart->product_id}}][qty]" value="1">
                                </span>
                                <span
                                    class='text-[#380D37] h-[19.231px] pr-[5px] flex items-center cursor-pointer text-center'>+</span>
                            </div> --}}
                            <div>
                                <p class='text-[#353535] text-[16px] font-[jost] font-[500] text-center'>
                                    1 x <span class='text-[#DC275C]'>{{ number_format($cart->product->price) }}
                                        TAKA</span>
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
                    class='w-[364px] rounded-[4px] items-center px-[50px] py-[10px] text-[#F2F2F2] bg-gradient-to-r from-[#380D37] to-[#DC275C] text-[20px] font-[jost] font-[500] mb-[54px]'>Checkout</button>
            </div>
        </div>
    </div>
    <!-- -----------------cart----end---- -->
</form>
