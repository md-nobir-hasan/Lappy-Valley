{{-- <form action="{{ route('checkout') }}" method="POST">
    @csrf --}}
<!-- ----------cart----- -->
<div id="side_cart" x-data="{ total: '{{ $carts?->sum('amount') }}' }"
    class="hidden w-[400px] bg-[#F2F2F2] right-0 top-0 fixed z-[9999] overflow-y-scroll">
    {{-- cart header (cart icon and close button) --}}
    <div class="w-[400px] h-[61px] bg-[#380D37] flex justify-between text-[20px] text-[#fff] items-center px-[20px]">
        <div class="flex items-center gap-[5px]">
            <img class='h-[24.84px] w-[25.6px]' src="/storage/product/cart(2).svg" alt="">
            <span class='font-[jost] cursor-pointer font-[500] text-[20px] text-[#F2F2F2]'>
                Cart
            </span>
        </div>
        <div>
            <h2 id="side_cart_close" class='font-[jost] cursor-pointer font-[500] text-[20px] text-[#F2F2F2]'>Close</h2>
        </div>
    </div>

    {{-- Cart body (cart's products ) --}}
   <div class="mt-auto px-[10px] flex flex-col gap-[50px]">
    <div class='w-full' id="side_cart_body">
        @if ($carts)
            @foreach ($carts as $cart)
                <div x-data="{
                    qty: {{ $cart->quantity }},
                    price: '{{ $cart->price }}',
                    subtotal: '{{ $cart->amount }}',
                    cp_show: true,
                    plus() {
                        if (this.qty >= 5) {
                            toastr.warning('You cant add more then 5 products');
                            return false;
                        }
                        const pq = ++this.qty;
                        const stotal = pq * this.price;
                        total = total - this.subtotal + stotal;
                        this.subtotal = stotal;
                        $.ajax({
                            url: '{{ route('plus') }}',
                            method: 'get',
                            data: { id: {{ $cart->id }} },
                            success: function(res) {
                                if (res.msg) {
                                    toastr.warning($res.msg)
                                } else {
                                    console.log('Successfully increase quantity')
                                }
                            }
                        });
                    },
                    minus() {
                        if (this.qty <= 1) {
                            toastr.warning('You cant remove all quantity');
                            return false;
                        }
                        const mq = --this.qty;
                        const stotal = mq * this.price;
                        total = total - this.subtotal + stotal;
                        this.subtotal = stotal;
                        $.ajax({
                            url: '{{ route('minus') }}',
                            method: 'get',
                            data: { id: {{ $cart->id }} },
                            success: function(res) {
                                if (res.msg) {
                                    toastr.warning($res.msg)
                                } else {
                                    console.log('Successfully decrease quantity')
                                }
                            }
                        });
                    },
                    removeProd() {
                
                        $.ajax({
                            url: '{{ route('delete') }}',
                            method: 'get',
                            data: { id: {{ $cart->id }}, mt: 'Cart' },
                            success: (res) => {
                                if (res.msg) {
                                    toastr.warning(res.msg)
                                } else {
                                    total = total - this.subtotal;
                                    this.cp_show = false;
                                }
                            }
                        });
                    }
                }" x-show='cp_show'
                    class='cart-product flex justify-around mt-[10px] border-t-[#3535354D] border-t-[2px] border-b-[#3535354D] border-b-[2px] py-[10px] px-[5px] gap-[10px]'>

                    <input type="hidden" name="cps[{{ $loop->index }}][product_id]" value="{{ $cart->product_id }}">
                    <input type="hidden" name="cps[{{ $loop->index }}][qty]" :value="qty">
                    <input type="hidden" name="cps[{{ $loop->index }}][subtotal]" :value="subtotal">

                    <div class='flex items-center'>
                        @if ($cart->product->photo)
                            @php
                                $photo = explode(',', $cart->product->photo)[0];
                                // dd($photo);
                            @endphp
                        @else
                            @php
                                $photo = '/backend/img/thumbnail-default.jpg';
                                // dd($photo);
                            @endphp
                        @endif
                        <img class="w-[80px] h-[px]" src="{{ $photo }}" alt="{{ $cart->product->title }}">
                    </div>

                    <div>
                        <div>
                            <p class='text-[12px] text-[#380D37] font-[jost] font-[500]'>
                                {{ $cart->product->title }}
                            </p>
                        </div>
                        <div
                            class='border-[#380D37] w-[85px] h-[19.231px] border-[2px] rounded-[4px] my-[10px] flex items-center justify-around'>
                            <span @click="minus"
                                class='text-[#380D37] h-[19.231px] border-[#380D37] border-r-[2px] pr-[5px] flex items-center cursor-pointer  text-center'>-</span>
                            <span x-text="qty"
                                class='text-[#380D37] h-[19.231px] w-[40px] border-[#380D37] border-r-[2px]  flex items-center  justify-center'>

                            </span>
                            <span @click="plus"
                                class='text-[#380D37] h-[19.231px] pr-[5px] flex items-center cursor-pointer text-center'>+</span>
                        </div>

                        <div class="flex text-left">
                            <p class='text-[#353535] text-[14px] font-[jost] font-[400] text-left'>
                                <span x-text="qty"></span> x <span class='text-[16px] font-[500] text-[#DC275C]'
                                    x-text="mFormat(Number(price))"></span>

                                TAKA
                            </p>

                        </div>
                    </div>

                    <div>
                        <span @click="removeProd" class="cursor-pointer cart_prd_delete">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </span>
                        {{-- {{$msg}} --}}
                    </div>
                </div>
            @endforeach
        @endif
    </div>

    {{-- cart footer  --}}
    <div class='items-center mx-auto w-full'>
        <div class=' mx-auto h-[1px] px-[20px] bg-[#353535]'></div>
        <div class='my-[30px]'>
            <ul class='flex justify-between mx-[5px]'>
                <li class='text-[20] text-[#353535] font-[jost] font-[700]'>Subtotal :</li>
                <li class='text-[20] text-[#DC275C] font-[jost] font-[700]'>
                    <span x-text="mFormat(Number(total))"></span> TK
                </li>
            </ul>
        </div>
        <div class='items-center flex justify-center w-full my-[30px]'>
            <a href="{{ route('vcart') }}" wire:navigate>
                <button type="button"
                    class='w-[364px]  border-[1px] border-[#380D37] rounded-[4px] py-[10px] text-[#380D37] text-[20px] font-[jost] font-[700]'>View
                    Cart
                </button>
            </a>
        </div>
        <div class='items-center flex justify-center w-full mt-[30px]'>
            <a href="{{ route('checkout') }}" wire:navigate class="w-full"> 
                <button
                    class='w-full rounded-[4px] items-center py-[10px] text-[#F2F2F2] bg-gradient-to-r from-[#380D37] to-[#DC275C] text-[20px] font-[jost] font-[700]'>
                    Checkout
                </button>
            </a>
        </div>
    </div>
   </div>
</div>
<!-- -----------------cart----end---- -->
{{-- </form> --}}
