 <div x-data="{
    total: '{{ $carts->sum('amount') }}',
    all_total: {{ $carts->sum('amount') }},
    carts: {{$carts}},
}"
     class="px-[100px] max-2xl:px-[70px] max-xl:px-[60px] max-lg:px-[38px] max-md:px-[35px] max-sm:px-[15px] max-sm:mt-[70px] max-xl:mt-[100px]">
     <div class="">
         <h1 class='font-[jost] xl:text-[20px] font-[400] leading-[25.3px] text-[#353535]'>
             Shopping Cart/View Cart
         </h1>
         <div class='h-[2px] bg-[#764A87]'></div>
     </div>
     {{-- <!-- -------------order-table--section----------- --> --}}
     <section class="mt-[20px]">
         <div class="my-[10px]">
             <h1 class="text-[#353535] text-[20px] font-[jost] font-[500]">Shopping Cart</h1>
         </div>
         <div class="overflow-auto rounded-lg shadow">
             <table class="w-full text-[#FFFFFF] text-[14px] font-[jost] font-[500] bg-[#380D37]">
                 <thead class="w-full text-[#FFFFFF]  bg-[#380D37]">
                     <tr>
                         <th class='w-20 p-3 tracking-wide text-left text-[14px] text-[F2F2F2] font-[jost] font-[500]'>
                             Image
                         </th>
                         <th class='p-3 tracking-wide text-left text-[14px] text-[F2F2F2] font-[jost] font-[500]'>
                             Product name
                         </th>
                         <th class='w-20 p-3 tracking-wide text-left text-[14px] text-[F2F2F2] font-[jost] font-[500]'>
                             Model
                         </th>
                         <th class='w-20 p-3 tracking-wide text-left text-[14px] text-[F2F2F2] font-[jost] font-[500]'>
                             Quantity
                         </th>
                         <th class='w-32 p-3 tracking-wide text-left text-[14px] text-[F2F2F2] font-[jost] font-[500]'>
                             Unit Price
                         </th>
                         <th class='w-32 tracking-wide text-left text-[14px] text-[F2F2F2] font-[jost] font-[500]'>
                             total
                         </th>
                     </tr>
                 </thead>
                 <tbody class="divide-y divide-[#380D37]">
                     {{-- @forelse ($carts as $cart)

                     @empty
                     @endforelse --}}
                     <template x-for='cart in carts' :key='cart.id'>
                          <tr class="items-center bg-white" x-data="{
                             qty: cart.quantity,
                             price: cart.price,
                             amount: cart.amount,
                             cp_show: true,
                             plus() {
                                 if (this.qty >= 5) {
                                     toastr.warning('You cant add more then 5 products');
                                     return false;
                                 }
                                 const pq = ++this.qty;
                                 const stotal = pq * this.price;
                                 total = total - this.amount + stotal;
                                 this.amount = stotal;
                                 $.ajax({
                                     url: '{{ route('plus') }}',
                                     method: 'get',
                                     data: { id: cart.id },
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
                                 total = total - this.amount + stotal;
                                 this.amount = stotal;
                                 $.ajax({
                                     url: '{{ route('minus') }}',
                                     method: 'get',
                                     data: { id: cart.id },
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
                                     data: { id: cart.id, mt: 'Cart' },
                                     success: (res) => {
                                        console.log(res)
                                        carts = res.carts;
                                         if (res.msg) {
                                             toastr.warning(res.msg)
                                         } else {
                                             total = total - this.amount;
                                             this.cp_show = false;
                                             
                                         }
                                     }
                                 });
                             },
                              sync() {
                                 $.ajax({
                                     url: '{{ route('sync') }}',
                                     method: 'get',
                                     data: { id: cart.id, mt: 'Cart' },
                                     success: (res) => {
                                        console.log(res)
                                        carts = res.carts;
                                        toastr.success('Cart syncing succeed')
                                     }
                                 });
                             },
                            }">
                             <td class=" p-3 tracking-wide text-left text-[14px] whitespace-nowrap">
                                 <img class="w-[48px] h-[48px]"
                                 :src='cart.product.photo.split(",")[0]'
                                 {{-- src="{{ $cart->product->img()[0] }}" --}}
                                     :alt="cart.product.title">
                             </td>
                             <td
                                 class="p-3 tracking-wide text-left text-[14px] whitespace-nowrap text-[#000000] font-[jost] font-[500]">
                             <span x-text='cart.product.title'></span>
                                 {{-- {{ $cart->product->title }} --}}

                             </td>
                             <td
                                 class="p-3 tracking-wide text-left text-[14px] whitespace-nowrap text-[#000000] font-[jost] font-[500]">
                                 {{-- {{ $cart->product->model ?? '15AMN7' }} --}}
                                 <span x-text='cart.product.model'></span>
                             </td>
                             <td class="p-3 tracking-wide text-left text-[14px] whitespace-nowrap text-[#380D37]">
                                 <div class="text-[#380D37] flex items-center gap-[5px] w-[140px]">
                                     <div
                                         class="flex items-center gap-[4px] px-[10px] py-[5px] rounded-sm bg-[#F2F2F2]">

                                         <span @click='minus'>
                                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke-width="1.5" stroke="currentColor" class="w-4 h-4 cursor-pointer">
                                                 <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                                             </svg>
                                         </span>
                                         <span class="text-[16px] font-[jost] font-[500]" x-text='qty'>
                                         </span>
                                         <span @click='plus'>
                                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke-width="1.5" stroke="currentColor" class="w-4 h-4 cursor-pointer">
                                                 <path stroke-linecap="round" stroke-linejoin="round"
                                                     d="M12 6v12m6-6H6" />
                                             </svg>
                                         </span>
                                     </div>
                                     <div class="grid grid-cols-2 gap-[4px] items-center">
                                         <div>
                                             <span @click='sync'>
                                                 <svg version="1.1" id="ios7_x5F_arrows_1_"
                                                     xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                     viewBox="0 0 128 128" class="w-[20px] h-[20px]"
                                                     style="enable-background:new 0 0 128 128" xml:space="preserve">
                                                     <g id="_x32_7_1_">
                                                         <path
                                                             d="m126 15.2-5-1.3-9.4 35.2-35.2-9.5-1.3 5.1 40.1 10.7h.1z"
                                                             id="_x33__28_" />
                                                         <path
                                                             d="M54.6 80.2 18.8 68.4l-5-1.6-13 40.1 5 1.7 11.3-35.1L53 85.2z"
                                                             id="_x32__27_" />
                                                         <path
                                                             d="M65.2 18.3c21.8 0 40.1 15.3 44.7 35.7h5.2c-4.7-23.3-25.3-40.8-49.9-40.8-23.7 0-43.7 16.3-49.3 38.3h5.3c5.5-19.2 23.1-33.2 44-33.2zm0 91.9c-22.7 0-41.6-16.6-45.2-38.3h-5.2c3.7 24.6 24.8 43.4 50.4 43.4 22.8 0 42.1-15 48.6-35.7h-5.4c-6.2 17.8-23.2 30.6-43.2 30.6z"
                                                             id="_x31__27_" />
                                                     </g>
                                                 </svg>
                                             </span>
                                         </div>
                                         <div>
                                             <span @click='removeProd'><svg xmlns="http://www.w3.org/2000/svg"
                                                     fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                     stroke="currentColor" class="w-6 h-6">
                                                     <path stroke-linecap="round" stroke-linejoin="round"
                                                         d="M6 18L18 6M6 6l12 12" />
                                                 </svg>
                                             </span>
                                         </div>
                                     </div>
                                 </div>
                             </td>

                             <td
                                 class="p-4 tracking-wide text-left text-[14px] whitespace-nowrap text-[#000000] font-[jost] font-[500]">
                                 {{-- {{ number_format($cart->amount) }} --}} <span x-text='price'></span>
                                 ৳
                             </td>
                             <td
                                 class=" tracking-wide text-left text-[14px] whitespace-nowrap text-[#000000] font-[jost] font-[500]">
                                 {{-- {{ $cart->amount }} --}}
                                 <span x-text='amount'></span>
                                 ৳
                             </td>
                         </tr>
                     </template>
                 </tbody>
             </table>
         </div>

     </section>
     <table class="flex justify-end ">
         <tbody>
             <tr class="p-3 flex justify-between gap-16 border-b-[2px] max-sm:border-b-[1px] border-[#380D37]">
                 <td class="text-[20px] max-sm:text-[16px] text-[#380D37] font-[jost] font-[500]">Sub-Total:</td>
                 <td class="text-[20px] max-sm:text-[16px] text-[#DC275C] font-[jost] font-[500]">
                     {{-- {{ number_format($carts->sum('amount')) }} --}}
                     <span x-text='mFormat(total)'></span>৳
                 </td>
             </tr>
             <tr class="p-3 flex justify-between border-b-[2px] max-sm:border-b-[1px] border-[#380D37]">
                 <td class="text-[20px] max-sm:text-[16px] text-[#380D37] font-[jost] font-[500]">Discount:</td>
                 <td class="text-[20px] max-sm:text-[16px] text-[#DC275C] font-[jost] font-[500]">
                     {{-- {{ number_format($carts->sum('amount')) }} --}}
                     {{-- <span x-text='mFormat(total)'></span> --}}
                     15%</td>
             </tr>

             <tr class="p-3 flex justify-between border-b-[2px] max-sm:border-b-[1px] border-[#380D37]">
                 <td
                     class="text-[20px] max-sm:text-[16px] text-[#380D37] font-[jost] font-[500] w-[80px] max-sm:w-[66px] flex justify-end">
                     Total:</td>
                 <td class="text-[20px] max-sm:text-[16px] text-[#DC275C] font-[jost] font-[500]">
                     {{-- {{ number_format($carts->sum('amount')) }} --}}
                     <span x-text='mFormat(total)'></span>
                     ৳
                 </td>
             </tr>
         </tbody>

     </table>

     <div class="flex justify-end my-[60px] max-sm:my-[35px]">
         <a href="{{ route('checkout',,['one_time']) }}" wire:navigate>
             <button
                 class="fill-up-btn bg-gradient-to-r from-[#380D37] to-[#DC275C] py-[10px] px-[40px] max-sm:px-[25px] text-[14px] max-sm:text-[12px] text-[#fff] font-[jost] font-[500] rounded-[5px]">Confirm
                 Order</button>
         </a>
     </div>
     <div class="h-[2px] bg-[#764A87] my-[100px] max-sm:my-[45px]"></div>
 </div>
