 <div class="container mx-auto">
     <div class=>
         <h1 class='font-[jost] xl:text-[20px] font-[400] leading-[25.3px] text-[#353535]'>
            Shopping Cart/View Cart
         </h1>
         <div class='h-1 bg-[#764A8733]'></div>
     </div>
     {{-- <!-- -------------order-table--section----------- --> --}}
     <section class="mt-[20px]">
         <div class="my-[10px]">
             <h1 class="text-[#353535] text-[20px] font-[jost] font-[500]">Shopping Cart</h1>
         </div>
         <div class="relative overflow-x-auto">
             <table class="w-full text-sm text-left text-[#FFFFFF] rtl:text-right bg-[#380D37]">
                 <thead class="text-xs text-[14px] text-[#FFFFFF]  bg-[#380D37] h-[37px]">
                     <tr>
                         <th scope="col" class='px-6 py-3 '>
                         Image
                         </th>
                         <th scope="col"  class='px-6 py-3 '>
                             Product name
                         </th>
                         <th scope="col"  class='px-16 py-3 '>
                             Model
                         </th>
                         <th scope="col"  class=' pl-6 pr-[12rem] py-3'>
                             Quantity
                         </th>
                         <th scope="col"  class='px-16 py-3 '>
                             Unit Price
                         </th>
                         <th scope="col"  class='px-2 py-3'>
                             total
                         </th>
                     </tr>
                 </thead>
                 <tbody>
                     @forelse ($carts as $cart)
                         <tr class="bg-white">
                             <td scope="row"
                                 class="whitespace-nowrap">
                                 <img src="{{ $cart->product->photo }}" alt="{{ $cart->product->title }}"
                                     width="60px">
                             </td>
                             <td class="text-[#380D37]">
                                 {{ $cart->product->title }}

                             </td>
                             <td class="text-[#380D37]">
                                 {{ $cart->product->model ?? '15AMN7' }}
                             </td>
                             <td class="text-[#380D37] text-center">
                                 <span class=" p-4 bg-[#F2F2F2]">{{ $cart->quantity }} x</span>
                             </td>

                             <td class="text-[black]">
                                {{ number_format($cart->price) }}৳
                             </td>
                             <td class="">
                                 {{ $cart->amount }}
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
             <tr class="border-b-[2px] border-b-[#380D37] gap-[80px] flex py-[12px] pl-[50px] justify-end">
                 <td class="text-[20px] text-[#380D37] font-[jost] font-[600]">Sub-Total:</td>
                 <td class="text-[20px] text-[#DC275C] font-[jost] font-[500] pr-[30px]">
                     {{ number_format($cart->sum('amount')) }}৳
                 </td>
             </tr>
             <tr class="border-b-[2px] border-b-[#380D37] gap-[80px] flex py-[12px] pl-[50px] justify-end">
                 <td class="text-[20px] text-[#380D37] font-[jost] font-[600]">Total:</td>
                 <td class="text-[20px] text-[#DC275C] font-[jost] font-[500] pr-[30px]">
                     {{ number_format($cart->sum('amount')) }}৳</td>
             </tr>
         </tbody>

     </table>

     <div class="flex justify-end my-[60px]">
         <a href="{{ route('checkout') }}" wire:navigate>
             <button
                 class="bg-gradient-to-r from-[#380D37] to-[#DC275C] py-[10px] px-[40px] text-[18px] text-[#fff] font-[jost] font-[500] rounded-[5px]">Confirm
                 Order</button>
         </a>
     </div>
 </div>
