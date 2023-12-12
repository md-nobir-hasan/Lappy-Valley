 <div class="px-[100px] max-md:px-[45px] max-lg:px-[70px] max-sm:px-[15px] mx-auto  max-sm:mt-[70px] max-xl:mt-[100px]">
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
                         <th  class='p-3 tracking-wide text-left text-[14px] text-[F2F2F2] font-[jost] font-[500]'>
                             Product name
                         </th>
                         <th  class='w-20 p-3 tracking-wide text-left text-[14px] text-[F2F2F2] font-[jost] font-[500]'>
                             Model
                         </th>
                         <th  class='w-20 p-3 tracking-wide text-left text-[14px] text-[F2F2F2] font-[jost] font-[500]'>
                             Quantity
                         </th>
                         <th  class='w-32 p-3 tracking-wide text-left text-[14px] text-[F2F2F2] font-[jost] font-[500]'>
                             Unit Price
                         </th>
                         <th  class='w-32 tracking-wide text-left text-[14px] text-[F2F2F2] font-[jost] font-[500]'>
                             total
                         </th>
                     </tr>
                 </thead>
                 <tbody class="divide-y divide-[#380D37]">
                     @forelse ($carts as $cart)
                         <tr class="items-center bg-white">
                             <td
                                 class=" p-3 tracking-wide text-left text-[14px] whitespace-nowrap">
                                 <img class="w-[48px] h-[48px]" src="{{ $cart->product->photo }}" alt="{{ $cart->product->title }}">
                             </td>
                             <td class="p-3 tracking-wide text-left text-[14px] whitespace-nowrap text-[#000000] font-[jost] font-[500]">
                                 {{ $cart->product->title }}

                             </td>
                             <td class="p-3 tracking-wide text-left text-[14px] whitespace-nowrap text-[#000000] font-[jost] font-[500]">
                                 {{ $cart->product->model ?? '15AMN7' }}
                             </td>
                             <td class="p-3 tracking-wide text-left text-[14px] whitespace-nowrap text-[#380D37]">
                                <div class="text-[#380D37] flex items-center gap-[5px] w-[140px]">
                                    <span class=" bg-[#F2F2F2] font-[jost] font-[500] px-[38px] py-[5px] rounded-sm">{{ $cart->quantity }} </span>
                                    <span><img class="w-[20px] h-[20px] text-[#000000]" src="/storage/product/swap.svg" alt="Product"></span>
                                    <span><img class="w-[20px] h-[20px] text-[#000000]" src="/storage/product/cross-icon.svg" alt="Product"></span>
                                </div>
                             </td>

                             <td class="p-4 tracking-wide text-left text-[14px] whitespace-nowrap text-[#000000] font-[jost] font-[500]">
                                {{ number_format($cart->price) }}৳
                             </td>
                             <td class=" tracking-wide text-left text-[14px] whitespace-nowrap text-[#000000] font-[jost] font-[500]">

                                {{ $cart->amount }}৳
                             </td>
                         </tr>
                     @empty

                     @endforelse
                 </tbody>
                 {{-- <tfoot>

                 </tfoot> --}}
             </table>
         </div>

     </section>
     <table class="flex justify-end">
         <tbody>
             <tr class="border-b-[2px] max-sm:border-b-[1px] border-b-[#380D37] gap-[80px] max-sm:gap-[50px] flex py-[12px] max-sm:pt-[12px] max-sm:pb-[7px] max-sm:pl-[25px] pl-[50px] justify-end">
                 <td class="text-[20px] max-sm:text-[16px] text-[#380D37] font-[jost] font-[500]">Sub-Total:</td>
                 <td class="text-[20px] max-sm:text-[16px] text-[#DC275C] font-[jost] font-[500] pr-4 ">
                     {{ number_format($carts->sum('amount')) }}৳
                 </td>
             </tr>
             <tr class="border-b-[2px] max-sm:border-b-[1px] border-b-[#380D37] gap-[80px] max-sm:gap-[50px] flex py-[12px] max-sm:pt-[12px] max-sm:pb-[7px] max-sm:pl-[25px] pl-[50px] justify-end">
                 <td class="text-[20px] max-sm:text-[16px] text-[#380D37] font-[jost] font-[500]">Total:</td>
                 <td class="text-[20px] max-sm:text-[16px] text-[#DC275C] font-[jost] font-[500] pr-4 ">
                     {{ number_format($carts->sum('amount')) }}৳</td>
             </tr>
         </tbody>

     </table>

     <div class="flex justify-end my-[60px] max-sm:my-[35px]">
         <a href="{{ route('checkout') }}" wire:navigate>
             <button
                 class="bg-gradient-to-r from-[#380D37] to-[#DC275C] py-[10px] px-[40px] max-sm:px-[25px] text-[14px] max-sm:text-[12px] text-[#fff] font-[jost] font-[500] rounded-[5px]">Confirm
                 Order</button>
         </a>
     </div>
     <div class="h-[2px] bg-[#764A87] my-[100px] max-sm:my-[45px]"></div>
 </div>
