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
     <img src="{{ $photo }}" class="object-center" alt="{{ $product->title }}">
     {{-- @else
             <img src="{{ asset('backend/img/thumbnail-default.jpg') }}" class="rounded-t-lg img-fluid "
                 data-te-ripple-init data-te-ripple-color="dark" alt="avatar.png">
         @endif --}}
     {{-- </a> --}}
     <div class="p-6 border-t-[2px] border-b-[2px]  border-[#380D3733]">
         <div class=' border-[#380D3733] mb-2'>
             <h1 class="font-[jost] text-[12px] font-[500] leading-[20px] text-left text-[#380D37]">
                 {{ $product->title }}
             </h1>
         </div>
         <div class='mb-4'>
             <ul class='text-[#353535] text-[10px] font-[jost] font-[400] list-decimal px-4 leading-[20px]'>
                 <li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li>
                 <li>RAM: 8GB DDR5 5500MHz, Storage: 256GB SSD</li>
                 <li>Display: 15.6" FHD (1920X1080)</li>
                 <li>Features: Type-C</li>
             </ul>
         </div>
     </div>

     <div class="px-6 py-6 mt-auto text-center">
         <div>
             <a href="#" class="font-[jost] text-[12px] font-[700] leading-[24px] text-[#DC275C] block">
                 {{ number_format($product->final_price) }}<span
                     class="ml-[5px] text-[12px] font-[jost] font-[700]">TAKA</span>
             </a>
         </div>
         <div class="my-3 text-center">

             <a href="{{ route('product.details', [$product->slug]) }}" class="">
                 <button
                     class='bg-[#380D37] text-[#F2F2F2] text-[10px] font-[jost] font-[500] py-[8px] px-[60px] rounded-[5px]'>Buy
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
