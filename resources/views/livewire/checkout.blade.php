 <div class="px-[100px] max-2xl:px-[70px] max-xl:px-[60px] max-lg:px-[38px] max-md:px-[35px] max-sm:px-[15px] max-sm:mt-[70px] max-xl:mt-[100px]">
    @if ($success = session('success'))
        <script>
            toastr.success("{{ $success }}")
        </script>
    @endif
    @if ($error = session('error'))
        <script>
            toastr.error("{{ $error }}")
        </script>
    @endif
     <form wire:submit='orderSubmit' x-data="{
         total: {{ $carts->sum('amount') }},
         shipping_price: 0,
         sub_total: {{ $carts->sum('amount') }},
         shipChange(price) {
             this.total -= this.shipping_price;
             this.total += price;
             this.shipping_price = price;
         }
     }">
         <div>
             <h1 class='font-[jost] text-[16px] font-[400] leading-[25.3px] text-[#353535]'>Shopping Cart/ Checkout
             </h1>
             <div class='h-1 bg-[#764A8733]'></div>
         </div>

         <!-- -------------check-out--section----------- -->
         <div>
             <h1 class="text-[20px] text-[#353535] font-[jost] font-[500] mt-16 max-lg:mt-8 mb-4 mx-auto ">Checkout</h1>
         </div>

         <section class="grid grid-cols-3 gap-6 max-lg:gap-[0px] max-lg:grid-cols-1">
             {{-- Customer information  --}}
             <div class="grid grid-cols-1 col-span-1 max-lg:mb-[25px]">
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

                     <div class="flex max-xl:flex-col gap-[15px] my-[10px] w-full">
                         <div class="w-full">
                             <label class="block font-[jost] font-[500] text-[#353535] text-[12px]" for="name">
                                 First Name*</label>
                             <input name="name" id="name"
                                 class=" w-full py-[10px] pl-[10px] border-[1px] border-[#380D37] italic rounded-[4px] font-[jost] font-[500] text-[12px] text-[#380D37] placeholder-[#C4C4C4]"
                                 type="text" placeholder="First Name*"
                                 @if (auth()->user()) value='{{ auth()->user()->name ?? old('name') }}' @else value='{{ old('name') }}' @endif
                                 wire:model='name'>
                             @error('name')
                                 <span class="text-[red] text-[12px]">{{ $message }}</span>
                             @enderror
                         </div>
                         <div class="w-full">
                             <label class="block font-[jost] font-[500] text-[#353535] text-[12px]" for="f_name">
                                 Last Name*</label>
                             <input name="l_name" id="l_name"
                                 class=" w-full py-[10px] pl-[10px] border-[1px] border-[#380D37] italic rounded-[4px] font-[jost] font-[500] text-[12px] text-[#380D37] placeholder-[#C4C4C4]"
                                 type="text"
                                 @if (auth()->user()) value='{{ auth()->user()->l_name ?? old('l_name') }}' @else value='{{ old('l_name') }}' @endif
                                 placeholder="Last Name*"
                                 wire:model='l_name'>
                             @error('l_name')
                                 <span class="text-[red] text-[12px]">{{ $message }}</span>
                             @enderror
                         </div>
                     </div>

                     <div class="my-[10px]">
                         <label class="block font-[jost] font-[500] text-[#353535] text-[12px]"
                             for="address">Address*</label>
                         <input name="address" id="address"
                             class="w-full py-[10px] pl-[10px] border-[1px] border-[#380D37] italic rounded-[4px] font-[jost] font-[500] text-[12px] text-[#380D37] placeholder-[#C4C4C4]"
                             type="text" placeholder="Address*"
                             @if (auth()->user()) value='{{ auth()->user()->name ?? old('address') }}' @else value='{{ old('address') }}' @endif
                             wire:model='address'>
                         @error('address')
                             <span class="text-[red] text-[12px]">{{ $message }}</span>
                         @enderror
                     </div>

                     <div class="my-[10px]">
                         <label class="block font-[jost] font-[500] text-[#353535] text-[12px]"
                             for="phone">Mobile*</label>
                         <input name="phone" id="phone"
                             class=" w-full py-[10px] pl-[10px] border-[1px] border-[#380D37] italic rounded-[4px] font-[jost] font-[500] text-[12px] text-[#380D37] placeholder-[#C4C4C4]"
                             type="number" placeholder="Mobile Number*"
                             @if (auth()->user()) value='{{ auth()->user()->phone ?? old('phone') }}' @else value='{{ old('phone') }}' @endif
                             wire:model='phone'>
                         @error('phone')
                             <span class="text-[red] text-[12px]">{{ $message }}</span>
                         @enderror
                     </div>

                     <div class="my-[10px]">
                         <label class="block font-[jost] font-[500] text-[#353535] text-[12px]"
                             for="email">Email:</label>
                         <input name="email" id="email"
                             class=" w-full py-[10px] pl-[10px] border-[1px] border-[#380D37] italic rounded-[4px] font-[jost] font-[500] text-[12px] text-[#380D37] placeholder-[#C4C4C4]"
                             type="email" placeholder="Email:"
                             @if (auth()->user()) value='{{ auth()->user()->email ?? old('email') }}' @else value='{{ old('email') }}' @endif
                             wire:model='email'>
                         @error('email')
                             <span class="text-[red] text-[12px]">{{ $message }}</span>
                         @enderror
                     </div>

                     <div class="flex max-xl:flex-col gap-[15px] my-[10px] w-full">
                         <div class="w-full">
                             <label class="block font-[jost] font-[500] text-[#353535] text-[12px]"
                                 for="city">City*</label>
                             <input name="city" id="city"
                                 class=" w-full py-[10px] pl-[10px] border-[1px] border-[#380D37] italic rounded-[4px] font-[jost] font-[500] text-[12px] text-[#380D37] placeholder-[#C4C4C4]"
                                 type="text" placeholder="City*"
                                 @if (auth()->user()) value='{{ auth()->user()->city ?? old('city') }}' @else value='{{ old('city') }}' @endif
                                 wire:model='city'>
                             @error('city')
                                 <span class="text-[red] text-[12px]">{{ $message }}</span>
                             @enderror
                         </div>
                         <div class="w-full">
                             <label class="block font-[jost] font-[500] text-[#353535] text-[12px]"
                                 for="divission_id">Zone*</label>
                             <select name="divission_id" id="divission_id"
                                 class="w-full py-[10px] pl-[10px] border-[1px] rounded-[4px] italic border-[#380D37] font-[jost] font-[500] text-[12px] text-[#380D37] placeholder-[#C4C4C4]"
                                 wire:model='divission_id'>
                                 @foreach ($divissions as $division)
                                     <option value="{{ $division->id }}" @selected($division->id == old('divission_id'))>
                                         {{ $division->name }}</option>
                                 @endforeach
                             </select>
                             @error('divission_id')
                                 <span class="text-[red] text-[12px]">{{ $message }}</span>
                             @enderror
                         </div>
                     </div>

                     <div>
                         <label class="block font-[jost] font-[500] text-[#353535] text-[12px]"
                             for="comment">Comment:</label>
                         <input id="comment"
                             class="w-full pt-[10px] pb-[80px] pl-[10px] border-[1px] border-[#380D37] italic rounded-[4px] font-[jost] font-[500] text-[12px] text-[#380D37] placeholder-[#C4C4C4]"
                             type="text" placeholder="comment"
                             wire:model='comment'>
                         @error('comment')
                             <span class="text-[red] text-[12px]">{{ $message }}</span>
                         @enderror
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
                             <input name="payment_method" id="cod" class="w-[14px] h-[14px] accent-[#380D37]"
                                  type="radio" value="cod"
                                 wire:model='payment_method'>
                             <label class="text-[#353535] text-[14px] font-[jost] font-[400]" for="cod">
                                 Cash on Delivery</label>
                         </div>
                         <div class="my-[10px] flex items-center gap-[5px]">
                             <input id="online" name="payment_method" class="w-[14px] h-[14px] accent-[#380D37]"
                                 type="radio" value="online"
                                 wire:model='payment_method'>
                             <label class="text-[#353535] text-[14px] font-[jost] font-[400]" for="online">
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
                                     Delivery Method
                                </h1>
                             </div>
                         </div>
                         <div class="my-[10px]">
                             <h1 class="text-[#353535] text-[16px] font-[jost] font-[400]">Select Delivery Method
                             </h1>
                         </div>
                         @foreach ($shippings as $shipping)
                             <div class="my-[10px] flex items-center gap-[5px]">
                                 <input @checked($loop->first) name="shipping_id"
                                     id="shipping{{ $shipping->id }}"
                                     value="{{ $shipping->id }}" class="w-[14px] h-[14px] accent-[#380D37]"
                                     type="radio" wire:model='shipping_id' @change="shipChange({{ $shipping->price }})">
                                 <label class="text-[#353535] text-[14px] font-[jost] font-[400]"
                                     for="shipping{{ $shipping->id }}">
                                     {{ $shipping->type . '- ' . $shipping->price . ' Taka ' . $shipping->through ?? '' }}</label>
                             </div>
                         @endforeach
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
                                 @foreach ($carts as $cart)
                                     <tr class="border-b-[rgba(#00000033] border-b-[1px] font-[jost]">
                                         <td
                                             class="max-sm:w-[130px] max-sm:text-[10px] text-[12px] font-[500] py-[10px]">
                                             {{ $cart->product->title }}
                                         </td>
                                         <td
                                             class="text-right text-[12px] max-sm:text-[10px] font-[700] text-[#353535]">
                                             {{ $cart->price }} Taka x {{ $cart->quantity }}
                                         </td>
                                         <td
                                             class="text-right text-[#DC275C] text-[12px] max-sm:text-[10px] font-[700]">
                                             {{ number_format($cart->amount) }}.00 Taka
                                         </td>
                                     </tr>
                                 @endforeach
                                 <tr class="border-b-[rgba(#00000033] border-b-[1px] font-[jost]">
                                     <td></td>
                                     <td
                                         class="text-right py-[10px] text-[12px] max-sm:text-[10px] font-[700] text-[#353535]">
                                         Sub Total:
                                     </td>
                                     <td class="text-right text-[#DC275C]  text-[12px] max-sm:text-[10px] font-[700]">
                                         <span x-text="mFormat(sub_total)"></span> Taka
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
                                         <span x-text='shipping_price'></span> Taka
                                     </td>
                                 </tr>
                                 <tr class="border-b-[rgba(#00000033] border-b-[1px] font-[jost]">
                                     <td></td>
                                     <td
                                         class="text-right py-[10px] text-[12px] max-sm:text-[10px] font-[700] text-[#353535]">
                                         Total:
                                     </td>
                                     <td class="text-right text-[#DC275C] text-[12px] max-sm:text-[10px] font-[700]">
                                         <span x-text="mFormat(total)"></span> Taka
                                     </td>
                                 </tr>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </section>

         <div class="mt-6">
             @if($err_msg)
             <span class="text-[red] block text-right mb-1">{{$err_msg}}</span>
             @endif
             <button
                 class="fill-up-btn ml-auto flex justify-center items-center rounded-[4px] px-[20px] py-[10px] text-[16px] text-center text-[#f2f2f2] font-[jost] font-[500] bg-gradient-to-r from-[#380D37] to-[#DC275C]">
                 Confirm Order
                 <div wire:loading wire:target='orderSubmit'
                     class="inline-block ml-2 h-6 w-6 animate-spin rounded-full border-4 border-solid border-current border-r-transparent align-[-0.125em] text-success motion-reduce:animate-[spin_1.5s_linear_infinite]"
                     role="status">
                     <span
                         class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Loading...
                     </span>
                 </div>
             </button>

         </div>
     </form>
 </div>
