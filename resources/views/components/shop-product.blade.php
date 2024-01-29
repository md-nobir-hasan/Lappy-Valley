 <div
     class="relative overflow-hidden border-[1px] border-[#380D37] rounded-[4px] box-border px-[5px] mt-2 flex flex-col bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] ">
     {{-- <a href="#"> --}}
     {{-- <img class="object-center"
         src="{{$product->photo}}"
         alt="{{$product->title}}"> --}}
     @if ($product->photo)
         @php
             $photo = explode(',', $product->photo)[0];
             // dd($photo);
         @endphp
     @else
         @php
             $photo = '/backend/img/thumbnail-default.jpg';
             // dd($photo);
         @endphp
     @endif
     <div class="flex items-center justify-center image-container">
         <a href="{{ route('product.details', [$product->slug]) }}">
             <img src="{{ $photo }}" class="object-container h-[180px]" alt="{{ $product->title }}">
         </a>
     </div>
     {{-- @else
             <img src="{{ asset('backend/img/thumbnail-default.jpg') }}" class="rounded-t-lg img-fluid "
                 data-te-ripple-init data-te-ripple-color="dark" alt="avatar.png">
         @endif --}}
     {{-- </a> --}}
     <div class="p-4 max-sm:p-[8px] border-t-[2px] border-[#380D3733]">
         <div class=' border-[#380D3733] mb-2'>
             <a href="{{ route('product.details', [$product->slug])}}"
                 class="font-[jost] text-[12px] font-[500] leading-[20px] text-left text-[#380D37] transition duration-150 ease-in-out hover:text-[#ef4a23] decoration-[#ef4a23] decoration-1 hover:underline hover:underline-offset-4">
                 {{ $product->title }}
             </a>
         </div>
         <div class='mb-4 mt-auto'>
             <ul class='text-[#353535] text-[10px] font-[jost] font-[400] list-decimal px-4 leading-[20px]'>
                 <li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li>
                 <li>RAM: 8GB DDR5 5500MHz, Storage: 256GB SSD</li>
                 <li>Display: 15.6" FHD (1920X1080)</li>
                 <li>Features: Type-C</li>
             </ul>
         </div>
     </div>

     <div class="px-6 py-6 mt-auto text-center border-t-[2px] border-[#380D3733]">
         <div class="flex flex-col justify-center">
             <span href="#" class="font-[jost] text-[12px] font-[700] leading-[24px] text-[#DC275C] flex justify-center items-center">
                 {{ number_format($product->final_price) }}
                 <span class="text-[12px] font-[jost] font-[700]">৳</span>
             </span>
             <span class="text-[#380D37] text-[12px] font-[jost] font-[700] line-through">
                {{$product->price}} ৳
            </span>
         </div>
         <div class="my-3 text-center">

             <a href="{{ route('single_checkout', [$product->slug]) }}" wire:navigate class="">
                 <button
                     class='bg-[#380D37] text-[#F2F2F2] text-[10px] font-[jost] font-[500] py-[8px] max-lg:px-0 max-lg:w-[100px] px-[50px] rounded-[5px]'>Buy
                     Now
                 </button></a>
         </div>
         <div>
             <livewire:add-to-cart :id="$product->id"
                 button='<p  class="font-[jost] text-[10px] text-[#380D37] font-[500] leading-[20px]">Add to Cart</p>' />

         </div>
         {{-- <livewire:add-to-cart :id="$product->id"
             button=' <p class="font-[jost] text-[10px] font-[600] leading-[30px]">Add to Cart</p>' /> --}}
     </div>
 </div>
