 <div class="container mx-auto">
     <div class=>
         <h1 class='font-[jost] xl:text-[20px] font-[400] leading-[25.3px] text-[#353535]'>Shopping Cart/View Cart
         </h1>
         <div class='h-1 bg-[#764A8733]'></div>
     </div>
     {{-- <!-- -------------order-table--section----------- --> --}}
     <section class="mt-[20px]">
         <div class="my-[10px]">
             <h1 class="text-[#353535] text-[20px] font-[jost] font-[500]">Shopping Cart</h1>
         </div>

         {{-- <nav class="flex justify-between bg-[#380D37] py-[12px] px-[20px] text-[20px] font-[jost] font-[500]">
             <div class="flex justify-between text-[#FFF] gap-[45px]">
                 <h1>Image</h1>
                 <h1>Product Name</h1>
             </div>
             <div class="flex justify-between gap-[210px]">
                 <div class="flex justify-between text-[#FFF] gap-[100px]">
                     <h1>Model</h1>
                     <h1>Quantity</h1>
                 </div>
                 <div class="flex justify-between text-[#FFF] gap-[142px]">
                     <h1>Unit Price</h1>
                     <h1>Total</h1>
                 </div>
             </div>
         </nav> --}}
         {{-- @forelse ($carts as $cart)
             <div
                 class="flex justify-between items-center py-[14px] px-[12px] text-[20px] font-[jost] font-[500] border-b-[#380D37] border-b-[2px]">
                 <div class="flex justify-between items-center gap-[50px]">
                     <img class="w-[50px]" src="/storage/{{ $cart->product->photo }}" alt="">
                     <h1>{{ $cart->product->title }}</h1>
                 </div>
                 <div class="flex justify-between gap-[128px]">
                     <div class="flex justify-between gap-[80px]">
                         <h1>{{ $cart->model ?? '15AMN7' }}</h1>
                         <div class="flex justify-evenly gap-[12px]">
                             <h1 class="py-[10px] px-[40px] bg-[#F2F2F2]">{{ $cart->quantity }}</h1>

                         </div>
                     </div>
                     <div class="flex justify-between gap-[100px]">
                         <h1 class="text-[#000]">{{ number_format($cart->price) }}৳</h1>
                         <h1 class="text-[#000]">{{ number_format($cart->amount) }}৳</h1>
                     </div>
                 </div>
             </div>
         @empty
         @endforelse --}}


         <div class="relative overflow-x-auto">
             <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                 <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                     <tr>
                         <th scope="col" class="px-6 py-3">
                             Image
                         </th>
                         <th scope="col" class="px-6 py-3">
                             Product name
                         </th>
                         <th scope="col" class="px-6 py-3">
                             Model
                         </th>
                         <th scope="col" class="px-6 py-3">
                             Quantity
                         </th>
                         <th scope="col" class="px-6 py-3">
                             Unit Price
                         </th>
                         <th scope="col" class="px-6 py-3">
                             total
                         </th>
                     </tr>
                 </thead>
                 <tbody>
                     @forelse ($carts as $cart)
                         <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                             <td scope="row"
                                 class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                 <img src="/storage/{{ $cart->product->photo }}" alt="{{ $cart->product->title }}"
                                     width="60px">
                             </td>
                             <td class="px-6 py-4">
                                 {{ $cart->product->title }}
                             </td>
                             <td class="px-6 py-4">
                                 {{ $cart->product->model ?? '15AMN7' }}
                             </td>
                             <td class="px-6 py-4">
                                 {{ $cart->quantity }}
                             </td>
                             <td class="px-6 py-4">
                                 {{ $cart->price }}
                             </td>
                             <td class="px-6 py-4">
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
                 <td class="text-[20px] text-[#DC275C] font-[jost] font-[00]">
                     {{ number_format($cart->sum('amount')) }}৳
                 </td>
             </tr>
             <tr class="border-b-[2px] border-b-[#380D37] gap-[80px] flex py-[12px] pl-[50px] justify-end">
                 <td class="text-[20px] text-[#380D37] font-[jost] font-[600]">Total:</td>
                 <td class="text-[20px] text-[#DC275C] font-[jost] font-[500]">
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
