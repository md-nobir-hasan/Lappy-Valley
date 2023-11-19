 <div class="border-[2px] border-[#380D37] rounded-[6px] py-2 px-4">
     {{-- <img class="object-center"
         src="{{$product->photo}}"
         alt="{{$product->title}}"> --}}
          @if ($product->photo)
                @php
                    $photo = explode(',', $product->photo);
                    // dd($photo);
                @endphp
                <img src="{{ $photo[0] }}" class="object-center" alt="{{ $product->photo }}">
            @else
                <img src="{{ asset('backend/img/thumbnail-default.jpg') }}" class="img-fluid"
                    alt="avatar.png">
            @endif
     <div class='border-t-[1px] border-b-[1px] border-[#380D3733] py-2'>
         <div class="">
             <p class="font-[jost] text-[18px] font-[600] leading-[30px] text-left text-[#380D37]">
                {{$product->title}}
            </p>
         </div>
         <div class='mt-2'>
             <ul class='text-[#353535] list-decimal px-4 text-[16px] leading-[30px]'>
                 <li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li>
                 <li>RAM: 8GB DDR5 5500MHz, Storage: 256GB SSD</li>
                 <li>Display: 15.6" FHD (1920X1080)</li>
                 <li>Features: Type-C</li>
             </ul>
         </div>
     </div>
     <div class="my-3 text-center ">
         <a href="#" class="font-[jost] text-[16px] font-[600] leading-[30px] text-[#DC275C] block">
          {{number_format($product->price)}}
        </a>
         <button class='bg-[#380D37] text-white py-[8px] px-[70px] rounded-[5px] my-[10px]'><a
                 href="..src/product-details.html"><a href="product-details.html">Buy
                     Now</a></a></button>
         {{-- <a href="">
             <p class="font-[jost] text-[16px] font-[600] leading-[30px]">Add to Cart</p>
         </a> --}}
                <livewire:add-to-cart :id="$product->id"
                        button=' <p class="font-[jost] text-[16px] font-[600] leading-[30px]">Add to Cart</p>' />
     </div>
 </div>
