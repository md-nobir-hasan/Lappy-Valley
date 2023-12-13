 <div class="px-[100px] max-md:px-[45px] max-sm:px-[20px] max-sm:mt-[70px] max-xl:mt-[100px]">
     <div class=>
         <h1 class='font-[jost] text-[16px] font-[400] leading-[25.3px] text-[#353535]'>Shopping Cart/ Checkout
         </h1>
         <div class='h-1 bg-[#764A8733]'></div>
     </div>

     <!-- -------------check-out--section----------- -->
     <div>
         <h1 class="text-[20px] text-[#353535] font-[jost] font-[500] mt-16 max-lg:mt-8 mb-4 mx-auto ">Checkout</h1>
     </div>
     <form>
         <section class="grid grid-cols-3 gap-6 max-lg:grid-cols-1">
             {{-- Customer information  --}}
             <div class="grid grid-cols-1 col-span-1 gap-6 max-lg:mx-auto">
                 <div class="border-[3px] border-[#380D37] rounded-[5px] p-[20px]">
                     <div class="flex gap-[15px] font-[jost] font-[500] text-center">
                         <div class="w-[22px] h-[22px] bg-[#380D37] text-[#F2F2F2] rounded-[100%] text-center mt-[5px]">
                             <h1>1</h1>
                         </div>
                         <div>
                             <h1 class="text-[#380D37] text-[20px] font-[jost] font-[500] tracking-[.5px] text-center">
                                 Customer Information</h1>
                         </div>
                     </div>

                     <div class="flex gap-[15px] my-[10px] w-full">
                         <div class="w-full">
                             <label class="block font-[jost] font-[500] text-[#353535] text-[12px]" for="name">
                                First Name*</label>
                             <input name="name" id="name"
                                 class=" w-full py-[10px] pl-[10px] border-[1px] border-[#380D37] italic rounded-[4px] font-[jost] font-[500] text-[12px] text-[#C4C4C4]"
                                 type="text" placeholder="First Name*"
                                 @if (auth()->user()) value='{{ auth()->user()->name ?? old('name') }}' @else value='{{ old('name') }}' @endif>
                         </div>
                         <div class="w-full">
                             <label class="block font-[jost] font-[500] text-[#353535] text-[12px]" for="f_name">
                                Last Name*</label>
                             <input name="f_name" id="f_name"
                                 class=" w-full py-[10px] pl-[10px] border-[1px] border-[#380D37] italic rounded-[4px] font-[jost] font-[500] text-[12px] text-[#C4C4C4]"
                                 type="text"
                                 @if (auth()->user()) value='{{ auth()->user()->f_name ?? old('f_name') }}' @else value='{{ old('f_name') }}' @endif
                                 placeholder="Last Name*">
                         </div>
                     </div>

                     <div class="my-[10px]">
                         <label class="block font-[jost] font-[500] text-[#353535] text-[12px]"
                             for="address">Address*</label>
                         <input name="address" id="address"
                             class="w-full py-[10px] pl-[10px] border-[1px] border-[#380D37] italic rounded-[4px] font-[jost] font-[500] text-[12px] text-[#C4C4C4]"
                             type="text" placeholder="Address*"
                             @if (auth()->user()) value='{{ auth()->user()->name ?? old('address') }}' @else value='{{ old('address') }}' @endif>
                     </div>

                     <div class="my-[10px]">
                         <label class="block font-[jost] font-[500] text-[#353535] text-[12px]"
                             for="phone">Mobile*</label>
                         <input name="phone" id="phone"
                             class=" w-full py-[10px] pl-[10px] border-[1px] border-[#380D37] italic rounded-[4px] font-[jost] font-[500] text-[12px] text-[#C4C4C4]"
                             type="number" placeholder="Mobile Number*"
                             @if (auth()->user()) value='{{ auth()->user()->phone ?? old('phone') }}' @else value='{{ old('phone') }}' @endif>
                     </div>

                     <div class="my-[10px]">
                         <label class="block font-[jost] font-[500] text-[#353535] text-[12px]"
                             for="email">Email:</label>
                         <input name="email" id="email"
                             class=" w-full py-[10px] pl-[10px] border-[1px] border-[#380D37] italic rounded-[4px] font-[jost] font-[500] text-[12px] text-[#C4C4C4]"
                             type="email" placeholder="Email:"
                             @if (auth()->user()) value='{{ auth()->user()->email ?? old('email') }}' @else value='{{ old('email') }}' @endif>
                     </div>

                     <div class="flex gap-[15px] my-[10px] w-full">
                         <div class="w-full">
                             <label class="block font-[jost] font-[500] text-[#353535] text-[12px]"
                                 for="city">City*</label>
                             <input name="city" id="city"
                                 class=" w-full py-[10px] pl-[10px] border-[1px] border-[#380D37] italic rounded-[4px] font-[jost] font-[500] text-[12px] text-[#C4C4C4]"
                                 type="text" placeholder="City*"
                                 @if (auth()->user()) value='{{ auth()->user()->city ?? old('city') }}' @else value='{{ old('city') }}' @endif>
                         </div>
                         <div class="w-full">
                             <label class="block font-[jost] font-[500] text-[#353535] text-[12px]"
                                 for="zone">Zone*</label>
                             <select name="zone" id="zone"
                                 class="w-full py-[10px] pl-[10px] border-[1px] rounded-[4px] italic border-[#380D37] font-[jost] font-[500] text-[12px] text-[#C4C4C4]">
                                 @foreach ($divissions as $division)
                                     <option value="{{ $division->id }}" @selected($division->id == old('city'))>
                                         {{ $division->name }}</option>
                                 @endforeach
                             </select>
                         </div>
                     </div>

                     <div>
                         <label class="block font-[jost] font-[500] text-[#353535] text-[12px]"
                             for="comment">Comment:</label>
                         <input id="comment"
                             class="w-full pt-[10px] pb-[80px] pl-[10px] border-[1px] border-[#380D37] italic rounded-[4px] font-[jost] font-[500] text-[12px] text-[#C4C4C4]"
                             type="text" placeholder="comment">
                     </div>
                 </div>
             </div>

             <div class="col-span-2">
                 {{-- Payment and delivery method  --}}
                 <div class="grid grid-cols-2 gap-4 max-sm:grid-cols-1">

                     {{-- Payment mehtod  --}}
                     <div class="border-[#380D37] border-[3px] rounded-[4px] p-[20px]">

                         <div class="flex gap-[15px] font-[jost] font-[500] text-center my-[10px]">
                             <div
                                 class="w-[22px] h-[22px] bg-[#380D37] text-[#f2f2f2] rounded-[100%] text-center mt-[5px]">
                                 <h1>2</h1>
                             </div>
                             <div>
                                 <h1
                                     class="text-[#380D37] text-[20px] font-[jost] font-[500] tracking-[.5px] text-center">
                                     Payment Method</h1>
                             </div>
                         </div>
                         <div class="my-[10px]">
                             <h1 class="text-[#353535] text-[14px] font-[jost] font-[500]">Select Payment Method</h1>
                         </div>
                         <div class="my-[10px] flex items-center gap-[5px]">
                             <input class="w-[14px] h-[14px] text-[#380D37]" type="radio" value="Cash on Delivery">
                             <label class="text-[#353535] text-[14px] font-[jost] font-[400]" for="#">
                                Cash on Delivery</label>
                         </div>
                         <div class="my-[10px] flex items-center gap-[5px]">
                             <input class="w-[14px] h-[14px] text-[#380D37]" type="radio" value="">
                             <label class="text-[#353535] text-[14px] font-[jost] font-[400]" for="">
                                Online Payment</label>
                         </div>

                         <div>
                             <div class="my-[9px]">
                                 <h1 class="text-[#353535] text-[14px] font-[jost] font-[400]">We Accept:</h1>
                             </div>
                             <div class="my-[8px]">
                                 <img src="/storage/product/payment.svg" alt="">
                             </div>
                         </div>
                     </div>

                     {{-- Delivery method  --}}
                     <div class="border-[#380D37] border-[3px] rounded-[4px] p-[20px] flex flex-col">

                         <div class="flex gap-[15px] font-[jost] font-[500] text-center my-[10px]">
                             <div
                                 class="w-[22px] h-[22px] bg-[#380D37] text-[#f2f2f2] rounded-[100%] text-center mt-[5px]">
                                 <h1>3</h1>
                             </div>
                             <div>
                                 <h1
                                     class="text-[#380D37] text-[20px] font-[jost] font-[500] tracking-[.5px] text-center">
                                     Delivery Method</h1>
                             </div>
                         </div>
                         <div class="my-[10px]">
                             <h1 class="text-[#353535] text-[16px] font-[jost] font-[400]">Select Delivery Method
                             </h1>
                         </div>

                         <div class="my-[10px] flex items-center gap-[5px]">
                             <input class="w-[14px] h-[14px] text-[#380D37]" type="radio">
                             <label class="text-[#353535] text-[14px] font-[jost] font-[400]" for="">Store
                                 Pickup- 0 Taka</label>
                         </div>
                         <div class="my-[10px] flex items-center gap-[5px]">
                             <input class="w-[14px] h-[14px] text-[#380D37]" type="radio" value="">
                             <label class="text-[#353535] text-[14px] font-[jost] font-[400]" for="">Request
                                 Express delivery-120 Through SA P.B</label>
                         </div>
                     </div>
                 </div>

                 <!-- ----------order-view--section-------- -->
                 <div
                     class="overflow-x-auto border-[#380D37] border-[3px] rounded-[5px] mt-[35px] pl-[20px] pt-[20px] pr-[20px]">
                     <div class="overflow-x-auto flex gap-[15px] font-[jost] font-[500] text-center my-[10px]">
                         <div
                             class="w-[22px] h-[22px] bg-[#380D37] text-[#f2f2f2] rounded-[100%] text-center mt-[5px]">
                             <h1>4</h1>
                         </div>
                         <div>
                             <h1 class="text-[#380D37] text-[20px] font-[jost] font-[500] tracking-[.5px] text-center">
                                 Order Overview</h1>
                         </div>
                     </div>
                     <div class="">
                         <table class="text-[#380D37] text-[12px] font-[jost] font-[700] min-w-full">
                             <thead>
                                 <tr class="border-b-[rgba(#00000033] border-b-[1px] py-[20px] text-left">
                                     <th>Product Name</th>
                                     <th class="text-right py-[10px] text-[12px] font-[jost] font-[700]">
                                         Price
                                     </th>
                                     <th class="text-right text-[12px] font-[jost] font-[700]">
                                         Total
                                     </th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr class="border-b-[rgba(#00000033] border-b-[1px] font-[jost]">
                                     <td class="max-sm:w-[130px] max-sm:text-[10px] text-[12px] font-[500] py-[10px]">
                                         Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U8-512 GB
                                     </td>
                                     <td class="text-right text-[12px] max-sm:text-[10px] font-[700] text-[#353535]">
                                         1,50,000 Taka x 1
                                     </td>
                                     <td class="text-right text-[#DC275C] text-[12px] max-sm:text-[10px] font-[700]">
                                         1,50,000 Taka
                                     </td>
                                 </tr>
                                 <tr class="border-b-[rgba(#00000033] border-b-[1px] font-[jost]">
                                     <td></td>
                                     <td
                                         class="text-right py-[10px] text-[12px] max-sm:text-[10px] font-[700] text-[#353535]">
                                         Sub Total:
                                     </td>
                                     <td class="text-right text-[#DC275C]  text-[12px] max-sm:text-[10px] font-[700]">
                                         1,50,000 Taka
                                     </td>
                                 </tr>
                                 <tr class="border-b-[rgba(#00000033] border-b-[1px] font-[jost]">
                                     <td></td>
                                     <td
                                         class="text-right py-[10px] text-[12px] max-sm:text-[10px] font-[700] text-[#353535]">
                                         Delivery
                                         Charge:
                                     </td>
                                     <td class="text-right text-[#DC275C] text-[12px] max-sm:text-[10px] font-[700]">
                                         60 Taka
                                     </td>
                                 </tr>
                                 <tr class="border-b-[rgba(#00000033] border-b-[1px] font-[jost]">
                                     <td></td>
                                     <td
                                         class="text-right py-[10px] text-[12px] max-sm:text-[10px] font-[700] text-[#353535]">
                                         Total:
                                     </td>
                                     <td class="text-right text-[#DC275C] text-[12px] max-sm:text-[10px] font-[700]">
                                         1,50,060 Taka
                                     </td>
                                 </tr>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </section>
     </form>
     <div class="bottom-0 right-0 flex items-center justify-end">
         <button
             class=" flexd justify-center items-center rounded-[4px] mt-6 px-[20px] py-[10px] text-[16px] text-center text-[#f2f2f2] font-[jost] font-[500] bg-gradient-to-r from-[#380D37] to-[#DC275C]">Confirm
             Order</button>
     </div>

 </div>
