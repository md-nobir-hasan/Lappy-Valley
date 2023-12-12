 <div class="px-[100px] max-md:px-[45px] max-lg:px-[70px] max-sm:px-[15px] mx-auto max-sm:mt-[70px] max-xl:mt-[100px]">
     <div class="max-xl:mt-[100px]">
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
         <div class="w-full">
             <table class="text-left w-full text-[#FFFFFF] rtl:text-right text-[14px] max-xl:text-[12px] max-md:text-[10px] max-sm:text-[10px] font-[jost] font-[500] bg-[#380D37]">
                 <thead class="w-full text-xs text-[14px] max-xl:text-[12px] max-md:text-[10px] max-sm:text-[10px] text-[#FFFFFF]  bg-[#380D37] max-sm:h-[34px] h-[37px]">
                     <tr>
                         <th scope="col" class='px-4 py-3 max-sm:px-[0px] max-md:px-[] max-lg:pl-[10px] max-lg:pr-[0px] max-xl:px-[] max-sm:py-[0px] max-md:py-[0px] max-lg:py-[] max-xl:py-[] text-[14px] max-xl:text-[12px] max-md:text-[10px] max-sm:text-[10px] font-[jost] font-[500]'>
                         Image
                         </th>
                         <th scope="col"  class='px-4 py-3 max-sm:px-[0px] max-md:px-[] max-lg:px-[0px] max-xl:px-[] max-sm:py-[0] max-md:py-[0px] max-lg:py-[] max-xl:py-[] text-[14px] max-xl:text-[12px] max-md:text-[10px] max-sm:text-[10px] font-[jost] font-[500]'>
                             Product name
                         </th>
                         <th scope="col"  class='px-6 py-3 max-sm:pr-[0px]  max-md:px-[] max-lg:px-[0px] max-xl:px-[] max-sm:py-[0] max-md:py-[0px] max-lg:py-[] max-xl:py-[] text-[14px] max-xl:text-[12px] max-md:text-[10px] max-sm:text-[10px] font-[jost] font-[500]'>
                             Model
                         </th>
                         <th scope="col"  class=' pl-6 pr-[12rem] max-sm:pr-[0px] max-sm:pl-[0px] max-sm:py-[0px] py-3 text-[14px] max-xl:text-[12px] max-md:text-[10px] max-sm:text-[10px] font-[jost] font-[500]'>
                             Quantity
                         </th>
                         <th scope="col"  class='px-6 py-3 max-sm:pr-[0px]  max-md:px-[] max-lg:pl-[0px] max-lg:pr-[10px] max-xl:px-[0] max-sm:py-[] max-md:py-[0px] max-lg:py-[] max-xl:py-[] text-[14px] max-xl:text-[12px] max-md:text-[10px] max-sm:text-[10px] font-[jost] font-[500]'>
                             Unit Price
                         </th>
                         <th scope="col"  class='px-2 py-3 max-sm:px-[0px] max-md:px-[] max-lg:px-[0] max-xl:px-[] max-sm:py-[0] max-md:py-[0px] max-lg:py-[] max-xl:py-[] text-[14px] max-xl:text-[12px] max-md:text-[10px] max-sm:text-[10px] font-[jost] font-[500]'>
                             total
                         </th>
                     </tr>
                 </thead>
                 <tbody class="w-full">
                     @forelse ($carts as $cart)
                         <tr class="items-center bg-white">
                             <td scope="row"
                                 class="whitespace-nowrap px-4 py-3 max-md:px-[0px] max-md:py-[0px]">
                                 <img class="w-[48px] h-[48px] max-sm:w-[25px] max-sm:h-[25px] max-md:w-[35px] max-md:h-[35px]" src="{{ $cart->product->photo }}" alt="{{ $cart->product->title }}">
                             </td>
                             <td class="text-[#000000] px-4 py-3 max-sm:w-[110px] max-sm:px-[0px] max-md:px-[] max-lg:px-[0px] max-xl:px-[0] max-sm:py-[] max-md:py-[0px] max-lg:py-[0] max-xl:py-[] text-[14px] max-xl:text-[12px] max-md:text-[10px] max-lg:text-[10px]  font-[jost] font-[500]">
                                 {{ $cart->product->title }}

                             </td>
                             <td class="text-[#000000] max-xl:text-center max-sm:w-[50px] px-6 py-3 max-sm:px-[0px] max-md:px-[] max-lg:px-[0px] max-xl:pl-[4px] max-xl:pr-0 max-sm:py-[] max-md:py-[0px] max-lg:py-[] max-xl:py-[0] text-[14px] max-xl:text-[12px] max-md:text-[10px] max-lg:text-[10px]  font-[jost] font-[500]">
                                 {{ $cart->product->model ?? '15AMN7' }}
                             </td>
                             <td class="text-[#380D37]">
                                <div class="text-[#380D37] text-center flex gap-[10px] max-sm:gap-[5px] justify-center items-center">
                                    <span class=" bg-[#F2F2F2] font-[jost] font-[500]">{{ $cart->quantity }} </span>
                                    <span><img class="w-[20px] h-[20px] text-[#000000]" src="/storage/product/swap.svg" alt="Product"></span>
                                    <span><img class="w-[20px] h-[20px] text-[#000000]" src="/storage/product/cross-icon.svg" alt="Product"></span>
                                </div>
                             </td>

                             <td class="px-6 py-3 max-sm:w-[50px] max-sm:px-[0px] max-md:px-[] max-lg:pl-[0px] max-lg:pr-[10px] max-xl:px-[0px] max-sm:py-[] max-md:py-[0px] max-lg:py-[] max-xl:py-[0px] text-[#000000] text-[14px] max-xl:text-[12px] max-md:text-[10px] max-lg:text-[10px]  max-xl:text-center font-[jost] font-[500]">
                                {{ number_format($cart->price) }}৳
                             </td>
                             <td class="px-2 py-3 max-sm:px-[0px] max-md:px-[] max-lg:px-[0px] max-xl:px-[0px] max-sm:py-[] max-md:py-[0px] max-lg:py-[] max-xl:py-[0px] text-[#000000] text-[14px] max-xl:text-[12px] max-md:text-[10px] max-lg:text-[10px] font-[jost] font-[500]">

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
     {{-- <table class="flex justify-end">
         <tbody>
             <tr class="border-b-[2px] border-b-[#380D37] gap-[80px] flex py-[12px] pl-[50px] justify-end">
                 <td class="text-[20px] text-[#380D37] font-[jost] font-[500]">Sub-Total:</td>
                 <td class="text-[20px] text-[#DC275C] font-[jost] font-[500] pr-4 ">
                     {{ number_format($carts->sum('amount')) }}৳
                 </td>
             </tr>
             <tr class="border-b-[2px] border-b-[#380D37] gap-[80px] flex py-[12px] pl-[50px] justify-end">
                 <td class="text-[20px] text-[#380D37] font-[jost] font-[500]">Total:</td>
                 <td class="text-[20px] text-[#DC275C] font-[jost] font-[500] pr-4 ">
                     {{ number_format($carts->sum('amount')) }}৳</td>
             </tr>
         </tbody>

     </table> --}}

     {{-- <div class="flex justify-end my-[60px]">
         <a href="{{ route('checkout') }}" wire:navigate>
             <button
                 class="bg-gradient-to-r from-[#380D37] to-[#DC275C] py-[10px] px-[40px] text-[14px] max-xl:text-[12px] max-md:text-[10px] max-sm:text-[10px] text-[#fff] font-[jost] font-[500] rounded-[5px]">Confirm
                 Order</button>
         </a>
     </div>
     <div class="h-[2px] bg-[#764A87] my-[100px]"></div> --}}
 </div>
