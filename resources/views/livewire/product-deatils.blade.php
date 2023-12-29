<div
    class="px-[100px] max-2xl:px-[70px] max-xl:px-[60px] max-lg:px-[38px] max-md:px-[35px] max-sm:px-[15px] max-sm:mt-[70px] max-xl:mt-[100px]">
    {{-- @dd($product) --}}
    <div class=>
        <h1 class='font-[jost] max-lg:text-[18px] text-[20px] font-[400] leading-[25.3px] text-[#353535]'>
            Home/{{ $product->cat_info?->title }}/{{ $product->brand?->title }}/{{ $product->title }}</h1>
        <div class='h-1 bg-[#764A8733]'></div>
    </div>
    <!-- -----------key-Feature -section----- -->
    <div class="grid grid-cols-2 max-md:grid-cols-1 items-center mt-[30px]">
        <div>
            @if ($product->photo)
                @php
                    $photos = explode(',', $product->photo);
                    $photo = $photos[0];
                @endphp
            @else
                @php
                    $photo = '/backend/img/thumbnail-default.jpg';
                    // dd($photo);
                @endphp
            @endif
            <div class="overflow-hidden w-[400px] max-md:w-full max-lg:w-[340px] mx-auto items-center">
                <div class="flex items-center w-[432px] max-lg:w-[350px] max-md:w-[432px] justify-center transition duration-50 ease-in-out hover:scale-125 overflow-hidden"
                    id="imageContainer">
                    <img id="hoverImage"
                        class="object-center w-[600] max-lg:w-[400px] transition duration-50 ease-in-out hover:scale-125 overflow-hidden"
                        src="{{ $photo }}" alt="{{ $product->title }}">
                </div>
            </div>


            <div class="flex items-center justify-center mt-[40px]">
                @foreach ($photos as $pto)
                    <div class="w-[52px] border-[2px] max-sm:border-[1px] border-[rgba(53_53_53_0.30)]">
                        <img class="object-center img-mini" src="{{ $pto }}" alt="{{ $product->title }}">
                    </div>
                @endforeach
                <script>
                    $('.img-mini').each(function(index) {
                        $(this).on('click', function() {
                            $('.img-mini').removeClass('border-2 border-[#380D37]');
                            $(this).addClass('border-2 border-[#380D37]');
                            let src = $(this).attr('src');
                            // console.log(src);
                            // alert(src);
                            $('#hoverImage').attr('src', src);

                        });
                    });
                </script>

            </div>
        </div>
        <div class="text-left max-md:mt-[40px]">
            <h1 class="font-[jost] text-[#380D37] text-[28px] max-lg:text-[22px] font-[500]">
                {{ $product->title }}
            </h1>
            <ul class="mt-4 mb-3 leading-[29px] max-lg:leading-[26px]">
                <li class="max-lg:text-[18px] text-[20px] text-[#353535] font-[jost] font-[500]">Status:<span
                        class="text-[#DC275C] ml-2">
                        @if ($product->upcomming)
                            <span class="badge badge-success">UP COMMING (<span
                                    class="badge badge-warning">{{ date('d-m-y', strtotime($product->upcomming)) }}</span>)
                            </span>
                            {{-- <span class="ml-5 badge badge-warning">{{$product->upcomming}}</span> --}}
                        @else
                            @if ($product->stock > 0)
                                <span class="badge badge-success">IN STOCK</span>
                            @else
                                <span class="badge badge-warning">OUT OF STOCK</span>
                            @endif
                        @endif
                    </span></li>
                <li class="max-lg:text-[18px] text-[20px] text-[#353535] font-[jost] font-[500]">Key Features:</li>
                <li class="text-[16px] max-lg:text-[14px] text-[#353535] font-[jost] font-[400]">
                    MPN: {{ $product->mpn }}
                </li>
                <li class=" text-[16px] max-lg:text-[14px] text-[#353535] font-[jost] font-[400]">
                    Model: {{ $product->model }}
                </li>
                <li class=" text-[16px] max-lg:text-[14px] text-[#353535] font-[jost] font-[400]">
                    Processor: {{ $product->ProcessorModel?->name }} ({{ $product->c_speed }})
                </li>
                <li class=" text-[16px] max-lg:text-[14px] text-[#353535] font-[jost] font-[400]">

                    RAM: {{ $product->ram->ram }} GB, Storage:
                    {{ $product->ssd ? $product->ssd->name . ' SSD' : '' }}
                    {{ $product->hdd ? ', ' . $product->hdd->name . ' HDD ' : '' }}
                </li>
                <li class=" text-[16px] max-lg:text-[14px] text-[rgb(53,53,53)] font-[jost] font-[400]">
                    Display:
                    {{ $product->DisplaySize?->size . '" ' . $product->DisplayType?->name . ' (' . $product->d_resolution }})
                </li>
                <li class=" text-[16px] max-lg:text-[14px] text-[#353535] font-[jost] font-[400]">
                    Features: {{ $product->special_feature }}
                </li>
                <li class=" max-lg:text-[18px] text-[20px] text-[#353535] font-[jost] font-[500] mt-[16px]">
                    Regular Price:</li>
                <li class=" max-lg:text-[18px] text-[20px] text-[#DC275C] font-[jost] font-[700] line-through">
                    <span>{{ $product->price }}</span> TK
                </li>
                <li class="max-lg:text-[18px] text-[20px] text-[#353535] font-[jost] font-[500] mt-[16px]">
                    Discounted Price:
                </li>
                <li class="max-lg:text-[18px] text-[20px] text-[#DC275C] font-[jost] font-[700]">
                    {{ $product->final_price }} TK
                </li>
            </ul>
            <div>
                <div>
                    <h1 class="max-lg:text-[18px] text-[20px] text-[#353535] font-[jost] font-[500]">
                        Payment Options
                    </h1>
                </div>
                <div class="grid grid-cols-2 max-xl:grid-cols-1 gap-6 w-full my-[15px]">
                    {{-- buying option without installment --}}
                    <label class="flex border-[2px] hover:border-[#380D37] border-[#380D37] w-full gap-4"
                        id="cash-payment">
                        <div class="px-3 flex justify-center bg-[#f2f2f2]">
                            <input type="radio" name="payment_process" checked value="one_time"
                                wire:model="payment_process" class="w-[20px] accent-[#380D37]">
                        </div>
                        <div class="flex flex-col py-3">
                            <span
                                class="max-lg:text-[18px] text-[20px] text-[#353535] font-[jost] font-[700]">{{ $product->final_price }}৳</span>
                            <span class="text-[16px] max-lg:text-[14px] text-[#353535] font-[jost] font-[400]">Cash
                                Discount Price</span>
                            <span class="text-[16px] max-lg:text-[14px] text-[#353535] font-[jost] font-[400]">Online /
                                Cash Payment</span>
                        </div>
                    </label>

                    {{-- buying option  with installment --}}
                    <label class="flex border-[2px] hover:border-[#380D37] border-[#764A8733] w-full gap-4"
                        id='monthly-payment'>
                        <div class="px-3 flex justify-center bg-[#f2f2f2]">
                            <input type="radio" name="payment_process" value="installment"
                                wire:model="payment_process" class="w-[20px] accent-[#380D37]">
                        </div>
                        <div class="flex flex-col py-3">
                            <span
                                class="max-lg:text-[18px] text-[20px] text-[#353535] font-[jost] font-[700]">{{ round($product->price / 6) }}৳/month</span>
                            <span class="text-[16px] max-lg:text-[14px] text-[#353535] font-[jost] font-[400]">Regular
                                Price: {{ $product->price }}৳ </span>
                            <span class="text-[16px] max-lg:text-[14px] text-[#353535] font-[jost] font-[400]">0% EMI
                                for up to 6 Months***</span>
                        </div>
                    </label>
                </div>
                <div class="flex gap-[30px]">
                    <button wire:click='checkout'
                    class="fill-up-btn text-[#f2f2f2] bg-gradient-to-r from-[#380D37] to-[#DC275C] max-lg:text-[18px] max-sm:text-[16px] text-[20px] py-[12px] max-lg:py-[14px] px-[40px] max-lg:px-[40px] max-sm:px-[30px] font-[jost] font-[700] mt-auto rounded-[5px]">
                    BUY NOW</button>
                    <button id="{{$product->id}}"
                    class="add-to-cart fill-up-btn text-[#f2f2f2] bg-gradient-to-r from-[#380D37] to-[#DC275C] max-lg:text-[18px] max-sm:text-[16px] text-[20px] py-[12px] max-lg:py-[14px] px-[40px] max-lg:px-[40px] max-sm:px-[30px] font-[jost] font-[700] mt-auto rounded-[5px]">
                    Add To Cart</button>
                </div>
            </div>
        </div>
    </div>
    <!-- -------------ideapad---section---end--- -->
    <div class="h-[2px] max-sm:h-[1px] max-sm:my-[30px] bg-[#380D37] my-[50px]"></div>

    <!-- -----------------description------ -->
    <div class="my-[15px]">
        <div class="flex gap-[20px]">
            <a href="#specification" data-te-smooth-scroll-init data-te-offset="25"
                class="spf_btn bg-[#380D37] max-lg:text-[18px] text-[20px] max-sm:text-[12px] text-[#F2F2F2] text-center font-[700] font-[jost] py-[10px] px-6 max-sm:px-3 rounded-[5px] max-md:w-full md:w-[168px] h-[50px] max-md:h-full">
                Specification</a>
            <a href="#description" data-te-smooth-scroll-init data-te-offset="25"
                class="dst_btn bg-[#F2F2F2] max-lg:text-[18px] text-[20px] max-sm:text-[12px] text-[#380D37] text-center font-[700] font-[jost] py-[10px] px-6 max-sm:px-3 rounded-[5px] max-md:w-full w-[168px] h-[50px] max-md:h-full">
                Description</a>
            <a href='#review' data-te-smooth-scroll-init data-te-offset="25"
                class="rev_btn bg-[#F2F2F2] max-lg:text-[18px] text-[20px] max-sm:text-[12px] text-[#380D37] text-center font-[700] font-[jost] py-[10px] px-8 max-sm:px-4 rounded-[5px] max-md:w-full w-[168px] h-[50px] max-md:h-full"
                data-area="ask-question">Review</a>
        </div>
    </div>
    <!-- -----table--section---start----- -->
    <div class="grid grid-cols-4 gap-10 max-lg:grid-cols-1 max-lg:gap-0">
        <div class="col-span-3">
            <section
                class="border-[2px] max-sm:border-[1px] border-[#380D37] p-[20px] rounded-[5px]"
                id="specification">
                <div class="text-[#353535] max-lg:text-[18px] text-[20px] font-[jost] font-[500]">
                    <h2>Specification</h2>
                </div>
                <table class="w-full">
                    {{-- Processore Attributes  --}}
                    <tbody class="ml-[20px] mb-[30px]">
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] max-sm:text-[16px] font-[500] py-[10px]  pl-[14px] rounded-[5px]"
                                colspan="3">
                                Processor:
                            </td>
                        </tr>
                   
                   
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Processor Brand:
                            </td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->p_brand }}
                            </td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Processor Model:
                            </td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->ProcessorModel?->name }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td
                                class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] max-sm:w-[180px] pl-[20px]">
                                Processor Frequency:
                            </td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->c_speed }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Processor Core:</td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->p_core ?? 'N/A' }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Processor Thread:
                            </td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->p_thread }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td
                                class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px] translate-y-[-30px]">
                                CPU Cache:</td>
                            <td
                                class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500] leading-[30px]">
                                <li class="list-none">L1 Cache: {{ $product->l1_cache }}</li>
                                <li class="list-none">L2 Cache: {{ $product->l2_cache }}</li>
                                <li class="list-none">L3 Cache: {{ $product->l3_cache }}</li>
                            </td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Other Features:
                            </td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->p_other }}</td>
                        </tr>
                   

                    <!-- ----------2nd --part (Display attributes)----- -->
                   
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] max-sm:text-[16px] font-[500] py-[10px] pl-[14px] rounded-[5px] mt-[10px]"
                                colspan="3">Display Features:</td>
                        </tr>
                
               
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Display Size:</td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->DisplaySize?->size }}"</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Display Type:</td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->DisplayType?->name }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Display Resolution:
                            </td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->d_resolution }}
                            </td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Touch Screen:</td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->touch_screen == 1 ? $product->touch_screen : 'N/A' }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td
                                class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] max-sm:translate-y-[-16px] pl-[20px]">
                                Display Features:
                            </td>
                            <td
                                class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500] max-sm:leading-[30px]">
                                {{ $product->d_other }}</td>
                        </tr>

            


                    <!-- --------3rd---------part (Memory Attributes )---------- -->
                  
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] max-sm:text-[16px] font-[500] py-[10px] pl-[14px] rounded-[5px]"
                                colspan="3">Memory:</td>
                        </tr>
                   
                
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                RAM:</td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->ram->ram }}GB
                            </td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                RAM Type:</td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->ram?->type }}
                            </td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Removable:</td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->m_removal ? 'Yes' : 'NO' }}
                            </td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                BUS Speed:</td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->ram?->bus_speed }}
                            </td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Total RAM Slot:
                            </td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->m_slot }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Other Features:
                            </td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->m_other }}</td>
                        </tr>
                  

                    <!-- --------------4th---part------------------ -->
                   
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] max-sm:text-[16px] font-[500] py-[10px] pl-[14px] rounded-[5px]"
                                colspan="3">
                                Storage:
                            </td>
                        </tr>
                  
                 
                        <tr class="border-[#764A8733] border-b-[2px]">

                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Storage Type:</td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{-- {{ $s_type_n }} --}}
                                {{ $product->ssd ? 'SSD' : '' }}{{ $product->hdd ? ', HDD ' : '' }}
                                {{-- {{$product->ssd ? $cpt = $product->ssd->name : ''}} {{$product->hdd ? $cpt = $product->hdd->name : ''}} --}}
                            </td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Storage Capacity:
                            </td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{-- {{ $storage->name }} --}}
                                {{ $product->ssd ? $product->ssd->name : '' }}{{ $product->hdd ? ', ' . $product->hdd->name : '' }}
                            </td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Extra M.2 Slot:
                            </td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->s_extra_m2_slot ? 'Yes' : 'N/A' }}
                            </td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Supported Storage Type:
                            </td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->s_support_type }}
                            </td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td
                                class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] max-sm:translate-y-[-16px] pl-[20px]">
                                Storage Upgrade:
                            </td>
                            <td
                                class="text-[#353535] text-[16px] max-lg:text-[14px] max-sm:leading-[30px]  font-[jost] font-[500]">
                                {{ $product->s_upgrade }}
                            </td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Other Features:
                            </td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->stor_other }}</td>
                        </tr>
                  
                 
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] max-sm:text-[16px] font-[500] py-[10px] pl-[14px] rounded-[5px]"
                                colspan="3">Graphics:</td>
                        </tr>
                   
                 
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Graphics Model:
                            </td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->g_model }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Graphics Memory:
                            </td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->Graphic?->name }}
                            </td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Other Features:
                            </td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->g_other }}</td>
                        </tr>
                   
                    <!-- -------------------6th--part------------ -->
                 
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] max-sm:text-[16px] font-[500] py-[10px] pl-[14px] rounded-[5px]"
                                colspan="3">Keyboard & Touchpad:</td>
                        </tr>
               
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Keyboard Type:</td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->k_type }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                TouchPad:</td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->touchpad ? 'Yes' : 'NO' }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Other Features:
                            </td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->k_other }}</td>
                        </tr>
                   
                    <!-- ----------7th--part------------- -->
                 
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] max-sm:text-[16px] font-[500] py-[10px] pl-[14px] rounded-[5px]"
                                colspan="3">Camera & Audio:</td>
                        </tr>
               
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                WebCam:</td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->webcam ? 'Yes' : 'NO' }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Microphone:</td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->microphone ? 'Yes' : 'NO' }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Speaker:</td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->speaker ? 'Yes' : 'NO' }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Other Features:
                            </td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->ca_other }}</td>
                        </tr>
                 
                    <!-- -----------8th---part (Ports & Slots) ----- -->
                  
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] max-sm:text-[16px] font-[500] py-[10px] pl-[14px] rounded-[5px]"
                                colspan="3">Ports & Slots:</td>
                        </tr>
                  
                 
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Optical Drive:</td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->optical_drive ?? 'N/A' }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Card Reader:</td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->card_reader ?? 'NO' }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                HDMI Port:</td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->hdmi_p ?? 'NO' }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                USB 2 Port:</td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->usb2_p ?? 'NO' }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                USB 3 Port:</td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->usb3_p ?? 'NO' }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td
                                class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px] max-sm:translate-y-[-2px] leading-[20px]">
                                USB
                                Type-C /<br />
                                Thunderbolt Port:</td>
                            <td
                                class="text-[#353535] text-[16px] max-lg:text-[14px] max-sm:leading-[30px] font-[jost] font-[500]">
                                {{ $product->type_c_tb_p ?? 'NO' }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td
                                class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] max-sm:translate-y-[-2px] pl-[20px] leading-[20px]">
                                Headphone &<br /> Microphone
                                Port:</td>
                            <td
                                class="text-[#353535] text-[16px] max-lg:text-[14px] max-sm:leading-[30px] font-[jost] font-[500]">
                                {{ $product->headphone_p }}/
                                {{ $product->microphone_p }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Other Features:
                            </td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->ps_other }}</td>
                        </tr>
                  
                    <!-- ---------------9th--part (Network & Connectivity) ------ -->
                 
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] max-sm:text-[16px] font-[500] py-[10px] pl-[14px] rounded-[5px]"
                                colspan="3">Network & Connectivity:</td>
                        </tr>
                  
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                WiFi:</td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->wifi }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Bluetooth:</td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->bluetooth }}
                            </td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Other Features:
                            </td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->nc_other }}</td>
                        </tr>
                  
                    <!-- ---------------10th---part---------- -->
                  
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] max-sm:text-[16px] font-[500] py-[10px] pl-[14px] rounded-[5px]"
                                colspan="3">Security:</td>
                        </tr>
                
           
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Fingerprint Sensor:
                            </td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->finger_print }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Facelock:
                            </td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->facelock }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Other Features:
                            </td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->s_other }}</td>
                        </tr>
                
                
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] max-sm:text-[16px] font-[500] py-[10px] pl-[14px] rounded-[5px]"
                                colspan="3">Software:</td>
                        </tr>
                 
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Operating System:
                            </td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->operating_system }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Other Features:
                            </td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->soft_other }}</td>
                        </tr>
                
                 
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] max-sm:text-[16px] font-[500] py-[10px] pl-[14px] rounded-[5px]"
                                colspan="3">Power:</td>
                        </tr>
                 
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Battery Type:</td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->battery_type }}
                            </td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Battery Capacity:
                            </td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->battery_capacity }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Adapter Type:</td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->adapter_type }}
                            </td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Other Features:
                            </td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->power_other }}</td>
                        </tr>
                
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] max-sm:text-[16px] font-[500] py-[10px]  pl-[14px] rounded-[5px]"
                                colspan="3">Physical Specification:</td>
                        </tr>
              
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Color:</td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->color }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Dimensions:</td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->dimension }}
                            </td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Weight:</td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->weight }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] pl-[20px]">
                                Other Features:
                            </td>
                            <td class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                                {{ $product->physi_other }}</td>
                        </tr>
                 
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] max-sm:text-[16px] font-[500] py-[10px] pl-[14px] rounded-[5px]"
                                colspan="3">Warranty :</td>
                        </tr>
          
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td
                                class="text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[400] max-sm:translate-y-[-16px] pl-[20px]">
                                Warranty Details
                            </td>
                            <td
                                class="text-[#353535] text-[16px] max-lg:text-[14px] max-sm:leading-[30px] font-[jost] font-[500]">
                                {{ $product->w_details }}
                            </td>
                        </tr>

                    </tbody>
                </table>
            </section>
            <section
                class="mt-[20px] border-[2px] max-sm:border-[1px] border-[#380D37] py-[20px] pl-[20px] pr-[40px] rounded-[5px] "
                id="description">
                <div>
                    <h2
                        class="text-[#353535] max-lg:text-[18px] text-[20px] max-sm:text-[16px] font-[jost] font-[700]">
                        Description</h2>
                </div>
                <div class="mt-[20px] mb-[40px]">
                    <h2
                        class="text-justify text-[#353535] text-[18px] max-sm:text-[16px] font-[jost] font-[500] my-[20px]">
                        {{ $product->title }}</h2>
                    <p class="text-justify text-[#353535] text-[16px] max-lg:text-[14px] font-[500] font-[jost]">
                        {!! $product->description !!}
                    </p>
                </div>
                <div itemprop="description">
                    <h2
                        class="text-justify text-[#353535] max-lg:text-[18px] text-[20px] max-sm:text-[16px] font-[jost] font-[500]">
                        {{ $product->title }} from the best Computer Shop in BD</h2>
                    <p class="text-justify text-[#353535] text-[16px] max-lg:text-[14px] font-[jost] py-[10px] font-[500]">
                        {!! $product->summary !!}
                    </p>
                </div>
            </section>
            <section class="mt-[20px] border-[2px] max-sm:border-[1px] border-[#380D37] p-[20px] rounded-[5px]"
                id='review'>
                <div class="flex items-center justify-between gap-[5px]">
                    <div class="">
                        <div class="title-n-action">
                            <h2 class="my-[10px] font-[jost] max-sm:text-[16px] font-[500]">
                                Reviews({{ $product_reviews->count() }})</h2>
                        </div>
                        <div>
                            <p class="my-[10px] font-[jost] font-[500]">Get Specific Details about this product from
                                customers who own it.</p>
                        </div>
                    </div>
                    <div class="">
                        <button type="button"
                            class="fill-up-btn max-sm:w-[100px] w-[130px] inline-block rounded bg-gradient-to-r from-[#380D37] to-[#DC275C] px-2 max-sm:px-[10px] pb-2 pt-2.5 text-[#f2f2f2] text-[16px] max-sm:text-[11px] max-lg:text-[14px] font-[500] font-[jost]"
                            data-te-toggle="modal" data-te-target="#exampleModalCenteredScrollable"
                            data-te-ripple-init data-te-ripple-color="light">
                            Write a review
                        </button>


                        <!--Verically centered scrollable modal-->
                        <div data-te-modal-init
                            class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                            id="exampleModalCenteredScrollable" tabindex="-1"
                            aria-labelledby="exampleModalCenteredScrollableLabel" aria-modal="true" role="dialog">
                            <div data-te-modal-dialog-ref
                                class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
                                <div
                                    class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-[#FFFFFF] bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                                    <div
                                        class="flex items-center justify-between flex-shrink-0 p-4 border-b-2 border-opacity-100 rounded-t-md border-neutral-100 dark:border-opacity-50">
                                        <!--Modal title-->
                                        <h5 class="text-xl font-medium font-[jost] leading-norma"
                                            id="exampleModalCenteredScrollableLabel">
                                            Review
                                        </h5>
                                        @php
                                            $token = csrf_token();
                                        @endphp
                                        <!--Close button-->
                                        <button type="button" id="modal_close"
                                            class="box-content border-none rounded-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                                            data-te-modal-dismiss aria-label="Close">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>

                                    <!--Modal body-->
                                    <div class="relative p-4">
                                        <div x-data="{
                                            f_name: null,
                                            l_name: null,
                                            img: [],
                                            msg: null,
                                            previews: [],
                                            loading: false,
                                            review_stars: [],
                                            yellow_star: [1, 2, 3, 4, 5],
                                            white_star: [],
                                            v_msg: '',
                                            submit() {
                                                this.loading = true
                                                if (!this.f_name) {
                                                    this.v_msg = 'Please, give your first name';
                                                    this.loading = false
                                                    return false;
                                                }
                                                if (!this.msg) {
                                                    this.v_msg = 'Please, write something';
                                                    this.loading = false
                                                    return false;
                                                }
                                                if (this.review_stars.length < 1) {
                                                    this.review_stars.push(5);
                                                }
                                                console.log(this.review_stars)
                                                const formData = new FormData();
                                                formData.append('f_name', this.f_name);
                                                formData.append('l_name', this.l_name);
                                                formData.append('msg', this.msg);
                                                for (const im of this.img) {
                                                    formData.append('imgs[]', im);
                                                }
                                                formData.append('review_stars', this.review_stars);
                                                formData.append('product_id', '{{ $product->id }}');
                                                formData.append('_token', '{{ csrf_token() }}');
                                                fetch('{{ route('product_review') }}', {
                                                    method: 'POST',
                                                    body: formData
                                                }).then(response => {
                                                    if (response.ok) {
                                                        this.loading = false
                                                        $('#modal_close').click();
                                                        toastr.success('Review post request send successfully!')
                                                        this.l_name = null
                                                        this.f_name = null
                                                        this.msg = null
                                                        this.img = []
                                                        this.review_stars.push(5);
                                                    } else {
                                                        toastr.error('Error uploading file!')
                                                    }
                                                }).catch(error => {
                                                    console.error(error)
                                                })

                                            },
                                            fileHandle(event) {
                                                for (const file of event.target.files) {
                                                    const reader = new FileReader()
                                                    reader.onload = (e) => { this.previews.push(e.target.result) }
                                                    reader.readAsDataURL(file)
                                                    this.img.push(file)
                                                }

                                            },
                                            stared(star) {
                                                console.log(star);
                                                if (star == 1) {
                                                    this.yellow_star = [1];
                                                    this.white_star = [2, 3, 4, 5];
                                                }
                                                if (star == 2) {
                                                    this.yellow_star = [1, 2];
                                                    this.white_star = [3, 4, 5];
                                                }
                                                if (star == 3) {
                                                    this.yellow_star = [1, 2, 3];
                                                    this.white_star = [4, 5];
                                                }
                                                if (star == 4) {
                                                    this.yellow_star = [1, 2, 3, 4];
                                                    this.white_star = [5];
                                                }
                                                if (star == 5) {
                                                    this.yellow_star = [1, 2, 3, 4, 5];
                                                    this.white_star = [];
                                                }
                                            }
                                        }">
                                            <form enctype="multipart/form-data" id="file_upload">
                                                @csrf
                                                <div class="flex justify-between gap-[10px] my-[10px]">
                                                    <input x-model='f_name' type="text" placeholder="First Name"
                                                        class="relative p-[10px] m-0 -mr-0.5 block w-full flex-auto rounded-l bg-[#F2F2F2] font-[jost] font-[400] text-[12px] text-[#000000] italic" />
                                                    @error('f_name')
                                                        <span class="text-[red] text-[12px]">{{ $message }}</span>
                                                    @enderror
                                                    <input x-model='l_name' type="text" placeholder="Last Name"
                                                        class="relative p-[10px]  m-0 -mr-0.5 block w-full flex-auto rounded-l bg-[#F2F2F2] font-[jost] font-[400] text-[12px] text-[#000000] italic" />
                                                    @error('l_name')
                                                        <span class="text-[red] text-[12px]">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="mt-[20px]">
                                                    <textarea x-model='msg' placeholder="Write your review here..."
                                                        class="relative pl-[10px] pt-[10px] pb-[100px] m-0 -mr-0.5 block w-full flex-auto rounded-l bg-[#F2F2F2] font-[jost] font-[jost] font-[400] text-[12px] text-[#000000] italic"
                                                        id="message-text"></textarea>
                                                    @error('msg')
                                                        <span class="text-[red] text-[12px]">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <br /><br />
                                                <div class="mb-3">
                                                    <input x-ref="fileInput" type="file" multiple
                                                        class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] font-[jost] text-[#380D37] transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-[#380D37] file:px-3 file:py-[0.32rem] file:text-[#f2f2f2] file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 hover:file:text-[#380D37] focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                                        @change="fileHandle($event)">
                                                    <div class="flex">
                                                        <template x-for="preview in previews">
                                                            <img :src="preview" alt="preview"
                                                                class="max-h-20">
                                                        </template>
                                                    </div>
                                                    @error('img')
                                                        <span class="text-[red] text-[12px]">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class='flex justify-between my-[50px] items-center'>
                                                    <div class='items-center'>
                                                        <div>
                                                            <h1
                                                                class='text-[24px] text-[#380D37] font-[jost] font-[500] leading-[34.68px]'>
                                                                Reviews</h1>
                                                        </div>
                                                        <div class='flex my-[10px] items-center'>

                                                            <template x-for='yi in yellow_star' :key='yi'>
                                                                <label :for="'star' + yi" @click='stared(yi)'>
                                                                    <img src="/storage/product/star2.svg"
                                                                        alt="Product" class='h-[37.45px]'>
                                                                    <input type="checkbox" class="hidden"
                                                                        :value='yi' :id="'star' + yi"
                                                                        x-model='review_stars'>
                                                                </label>
                                                            </template>

                                                            <template x-for='i in white_star' :key='i'>
                                                                <label :for="'star' + i" @click='stared(i)'>
                                                                    <img src="/storage/product/star-white.svg"
                                                                        alt="Product" class='h-[37.45px]'>
                                                                    <input type="checkbox" class="hidden"
                                                                        :value='i' :id="'star' + i"
                                                                        x-model='review_stars'>
                                                                </label>
                                                            </template>

                                                            @error('review_stars')
                                                                <span
                                                                    class="text-[red] text-[12px]">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class='mt-[20px] text-right'>
                                                        <div class="">
                                                            <template x-if='v_msg'>
                                                                <span x-text='v_msg'></span>
                                                            </template>
                                                            <button type="button" @click='submit'
                                                                class='fill-up-btn relative px-[25px] py-[12px] rounded-[4px] items-center text-[16px] max-lg:text-[14px] text-[#F2F2F2] font-[jost] font-[500] leading-[28.9px] bg-gradient-to-r from-[#380D37] to-[#DC275C]'>
                                                                <span>Post your review</span>
                                                                <div x-show='loading'
                                                                    class="absolute inline-block h-6 w-6 top-4 mr-2 animate-spin rounded-full border-4 border-solid border-current border-r-transparent align-[-0.125em] text-success motion-reduce:animate-[spin_1.5s_linear_infinite]"
                                                                    role="status">
                                                                    <span
                                                                        class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Loading...
                                                                    </span>
                                                                </div>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="flex my-[10px] items-center">
                        @for ($i = 1; $i < 6; $i++)
                            @if ($i <= $product->average_rating)
                                <img class="h-7" src="/storage/product/star2.svg" alt="">
                            @else
                                <img class="h-7" src="/storage/product/star-white.svg" alt="">
                            @endif
                        @endfor

                        <div class="items-center">
                            <span
                            class="font-[jost] max-sm:text-[16px] font-[500] mt-[5px]">{{ $product->average_rating }}
                            out of 5
                        </span>
                        </div>
                    </div>
                    <div class="h-[2px] max-sm:h-[1px] max-sm:my-[30px] bg-[#764A8733]"></div>
                    {{-- Product Review --}}
                    @foreach ($product_reviews as $pr)
                        <div class="mt-[10px]">
                            <div class="flex my-[10px]">
                                @for ($i = 1; $i < 6; $i++)
                                    @if ($i <= $pr->rate)
                                        <img class="h-7" src="/storage/product/star2.svg" alt="">
                                    @else
                                        <img class="h-7" src="/storage/product/star-white.svg" alt="">
                                    @endif
                                @endfor
                            </div>
                            <div>
                                <span class="font-[jost] font[600] mb-[15px]">{{ $pr->review }}</span>
                            </div>
                            <div>
                                <span class="font-[jost] font[600]">By {{ $pr->f_name . ' ' . $pr->l_name }} on
                                    {{ $pr->created_at->format('d-m-Y') }}</span>
                            </div>
                        </div>
                    @endforeach
            </section>
        </div>
        <div class="max-lg:mt-[15px]">
            @if ($related_products)
                <div class=" p-[10px] border-[2px] max-sm:border-[1px] border-[#380D37] rounded-[3px]">
                    <div class="p-[10px]">
                        <h1
                            class="text-[#380D37] max-lg:text-[18px] text-[20px] font-[jost] font-[500] flex justify-center">
                            Related Products</h1>
                        <div class="h-[2px] max-sm:h-[1px] max-sm:my-[30px] bg-[#380D37]"></div>
                    </div>
                    @foreach ($related_products as $rp)
                        <div class="grid grid-cols-4 gap-[5px] leading-[20.23px]">
                            <div class="col-span-1">
                                <img class="object-center " src="{{ $rp->img()[0] }}" alt="Product">
                            </div>
                            <div class="col-span-3">
                                <p class="text-[#000000] text-[14px] font-[jost] font-[400]">{{ $rp->title }}</p>
                                <p
                                    class="text-[#DC275C] text-[16px] max-lg:text-[14px] font-[jost] font-[700] my-[10px]">
                                    <a>
                                     <span>{{ number_format($rp->price) }}</span>
                                    TK</a>
                                </p>
                            </div>
                        </div>
                        @if (!$loop->last)
                            <div class="p-[10px]">

                                <div class="h-[2px] max-sm:h-[1px] max-sm:my-[30px] bg-[#764A8733]"></div>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endif
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.spf_btn').on('click', function() {
                $(this).addClass('bg-[#380D37] text-[#F2F2F2]');
                $(this).removeClass('bg-[#F2F2F2] text-[#380D37]');
                $('.dst_btn').removeClass('bg-[#380D37] text-[#F2F2F2]')
                $('.dst_btn').addClass('bg-[#F2F2F2] text-[#380D37]');
                $('.rev_btn').removeClass('bg-[#380D37] text-[#F2F2F2]')
                $('.rev_btn').addClass('bg-[#F2F2F2] text-[#380D37]');
            });
            $('.dst_btn').on('click', function() {
                $(this).addClass('bg-[#380D37] text-[#F2F2F2]');
                $(this).removeClass('bg-[#F2F2F2] text-[#380D37]');
                $('.spf_btn').removeClass('bg-[#380D37] text-[#F2F2F2]')
                $('.spf_btn').addClass('bg-[#F2F2F2] text-[#380D37]');
                $('.rev_btn').removeClass('bg-[#380D37] text-[#F2F2F2]')
                $('.rev_btn').addClass('bg-[#F2F2F2] text-[#380D37]');
            });
            $('.rev_btn').on('click', function() {
                $(this).addClass('bg-[#380D37] text-[#F2F2F2]');
                $(this).removeClass('bg-[#F2F2F2] text-[#380D37]');
                $('.spf_btn').removeClass('bg-[#380D37] text-[#F2F2F2]');
                $('.spf_btn').addClass('bg-[#F2F2F2] text-[#380D37]');
                $('.dst_btn').removeClass('bg-[#380D37] text-[#F2F2F2]');
                $('.dst_btn').addClass('bg-[#F2F2F2] text-[#380D37]');
            });
        })
        // --------------------large--size--img--cursor --effect--------------
        const imageContainer = document.getElementById('imageContainer');
        const hoverImage = document.getElementById('hoverImage');

        imageContainer.addEventListener('mousemove', (e) => {
            const {
                offsetX,
                offsetY
            } = e;
            const {
                width,
                height
            } = imageContainer.getBoundingClientRect();
            const xPercentage = (offsetX / width - 0.5) * 5; // Normalize to -1 to 1
            const yPercentage = (offsetY / height - 0.5) * 5; // Normalize to -1 to 1

            const moveX = -xPercentage * 50; // Adjust the multiplier as needed
            const moveY = -yPercentage * 50; // Adjust the multiplier as needed

            hoverImage.style.transform = `translate(${moveX}px, ${moveY}px)`;
            imageContainer.addEventListener('mouseleave', () => {
                hoverImage.style.transform = 'translate(0, 0)';
            });

        });




        // --------------------instalment-------------------
        $("#cash-payment").click(function() {
            $(this).addClass("border-[#380D37]");
            $(this).removeClass("border-[#764A8733]");
            $("#monthly-paymetn").removeClass("border-[#380D37]");
        })
        $("#monthly-payment").click(function() {
            $(this).addClass("border-[#380D37]");
            $("#cash-payment").removeClass("border-[#380D37]");
            $("#cash-payment").addClass("border-[#764A8733]");
        })
    </script>
</div>
