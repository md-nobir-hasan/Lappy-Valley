<x-slot name='styles'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <link href="tablet-pcfdb0.html?page=4" rel="next">
</x-slot>

<x-slot name='script'>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>

    <script>
        // set the default active slide to the first one
        let slideIndex = 0;
        // showSlide(slideIndex);


        // change slide with the prev/next button
        function moveSlide(moveStep) {
            showSlide(slideIndex += moveStep);
        }

        // change slide with the dots
        function currentSlide(n) {
            showSlide(slideIndex = n);
        }

        function showSlide(n) {
            let i;
            const slides = document.getElementsByClassName("slide");

            if (n > slides.length - 1) {
                slideIndex = 0
            }
            if (n < 0) {
                slideIndex = slides.length - 1
            }

            // const dots = document.getElementsByClassName('dot');
            // hide all slides
            for (i = 0; i < slides.length; i++) {
                slides[i].classList.add('hidden');
            }

            // show the active slide
            slides[slideIndex].classList.remove('hidden');
        }
    </script>
</x-slot>
<div class="container mx-auto">
    {{-- @dd($product) --}}
    <div class=>
        <h1 class='font-[jost] text-[20px] font-[400] leading-[25.3px] text-[#353535]'>
            Home/{{ $product->cat_info->title }}/{{ $product->brand->title }}/{{ $product->title }}</h1>
        <div class='h-1 bg-[#764A8733]'></div>
    </div>
    <!-- -----------key-Feature -section----- -->
    <div class="grid grid-cols-2 items-center mt-[30px]">
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
            <div class="flex items-center justify-center transition duration-50 ease-in-out hover:scale-125 overflow-hidden h-[100vh]" id="imageContainer">
                <img id="hoverImage"
                    class="object-center  top-0 left-0 transition duration-50 ease-in-out hover:scale-125 overflow-hidden"
                    src="{{ $photo }}" alt="{{ $product->title }}">
            </div>


            <div class="flex items-center justify-center mt-auto">
                @foreach ($photos as $pto)
                    <div class="w-[52px] border-b-[2px] border-t-[2px] border-r-[2px] border-[rgba(53_53_53_0.30)] z-150">
                        <img class="object-center" src="{{ $pto }}" alt="{{ $product->title }}">
                    </div>
                @endforeach
                <script>
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
                        const xPercentage = (offsetX / width - 0.2) * 2; // Normalize to -1 to 1
                        const yPercentage = (offsetY / height - 0.2) * 2; // Normalize to -1 to 1

                        const moveX = -xPercentage * 30; // Adjust the multiplier as needed
                        const moveY = -yPercentage * 30; // Adjust the multiplier as needed

                        hoverImage.style.transform = `translate(${moveX}px, ${moveY}px)`;
                    });
                  
                </script>

            </div>
        </div>
        <div class="text-left ">
            <h1 class="font-[jost] text-[#380D37] text-[28px] font-[500]">
                {{ $product->title }}
            </h1>
            <ul class="mt-6 mb-3 leading-[32px]">
                <li class="text-[20px] text-[#353535] font-[jost] font-[500]">Status:<span class="text-[#DC275C] ml-2">
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
                <li class="text-[20px] text-[#353535] font-[jost] font-[500]">Key Features:</li>
                <li class="text-[16px] text-[#353535] font-[jost] font-[400]">
                    MPN: {{ $product->mpn }}
                </li>
                <li class=" text-[16px] text-[#353535] font-[jost] font-[400]">
                    Model: {{ $product->model }}
                </li>
                <li class=" text-[16px] text-[#353535] font-[jost] font-[400]">
                    Processor: {{ $product->ProcessorModel->name }} ({{ $product->c_speed }})
                </li>
                <li class=" text-[16px] text-[#353535] font-[jost] font-[400]">

                    RAM: {{ $product->ram->ram }} GB, Storage:
                    {{ $product->ssd ? $product->ssd->name . ' SSD' : '' }}
                    {{ $product->hdd ? ', ' . $product->hdd->name . ' HDD ' : '' }}
                </li>
                <li class=" text-[16px] text-[rgb(53,53,53)] font-[jost] font-[400]">
                    Display:
                    {{ $product->DisplaySize->size . '" ' . $product->DisplayType->name . ' (' . $product->d_resolution }})
                </li>
                <li class=" text-[16px] text-[#353535] font-[jost] font-[400]">
                    Features: {{ $product->special_feature }}
                </li>
                <li class=" text-[20px] text-[#353535] font-[jost] font-[500] mt-[20px]">
                    Price:</li>
                <li class=" text-[20px] text-[#DC275C] font-[jost] font-[700]">
                    <span>{{ $product->final_price }}</span> TK
                </li>
            </ul>
            <livewire:add-to-cart :id="$product->id"
                button='<button class="text-[white] bg-gradient-to-r from-[#380D37] to-[#DC275C] text-[20px] py-[16px] px-[50px] font-[700] mt-auto rounded-[5px]">BUY NOW</button>' />

        </div>
    </div>
    <!-- -------------ideapad---section---end--- -->
    <div class="h-[2px] bg-[#380D37] my-[50px]"></div>

    <!-- -----------------description------ -->
    <div class="my-[15px]">
        <div class="flex gap-[20px]">
            <a href="#specification" data-te-smooth-scroll-init data-te-offset="25"
                class="spf_btn bg-[#380D37] text-[20px] text-[#F2F2F2] text-center font-[700] font-[jost] py-[10px] px-6 rounded-[5px] w-[168px] h-[50px]">
                Specification</a>
            <a href="#description" data-te-smooth-scroll-init data-te-offset="25"
                class="dst_btn bg-[#F2F2F2] text-[20px] text-[#380D37] text-center font-[700] font-[jost] py-[10px] px-6 rounded-[5px] w-[168px] h-[50px]">
                Description</a>
            <a href='#review' data-te-smooth-scroll-init data-te-offset="25"
                class="rev_btn bg-[#F2F2F2] text-[20px] text-[#380D37] text-center font-[700] font-[jost] py-[10px] px-8 rounded-[5px] w-[168px] h-[50px]"
                data-area="ask-question">Review</a>
        </div>
    </div>
    <!-- -----table--section---start----- -->
    <div class="flex justify-between gap-[30px] ">
        <div>
            <section class="border-[2px] border-[#380D37] p-[20px] rounded-[5px] leading-[50px]" id="specification">
                <div class="text-[#353535] text-[20px] font-[jost] font-[500]">
                    <h2>Specification</h2>
                </div>
                <table class="w-full">
                    {{-- Processore Attributes  --}}
                    <thead>
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] text-[20] font-[500]  pl-[14px] rounded-[5px]"
                                colspan="3">
                                Processor:
                            </td>
                        </tr>
                    </thead>
                    <tbody class="ml-[20px] mb-[30px]">
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">
                                Processor Brand:
                            </td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">
                                {{ $product->p_brand }}
                            </td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">Processor Model:
                            </td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">
                                {{ $product->ProcessorModel->name }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">Processor Frequency:
                            </td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">{{ $product->c_speed }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">Processor Core:</td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">
                                {{ $product->p_core ?? 'N/A' }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">Processor Thread:
                            </td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">{{ $product->p_thread }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px] translate-y-[-30px]">
                                CPU Cache:</td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] leading-[30px]">
                                <li class="list-none">L1 Cache: {{ $product->l1_cache }}</li>
                                <li class="list-none">L2 Cache: {{ $product->l2_cache }}</li>
                                <li class="list-none">L3 Cache: {{ $product->l3_cache }}</li>
                            </td>
                        </tr>
                    </tbody>

                    <!-- ----------2nd --part (Display attributes)----- -->
                    <thead>
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] text-[20] font-[500] pl-[14px] rounded-[5px] mt-[10px]"
                                colspan="3">Display Features:</td>
                        </tr>
                    </thead>
                    <tbody class="ml-[20px]">
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">Display Size:</td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">
                                {{ $product->DisplaySize->size }}"</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">Display Type:</td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">
                                {{ $product->DisplayType->name }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">Display Resolution:
                            </td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">{{ $product->d_resolution }}
                            </td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">Touch Screen:</td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">
                                {{ $product->touch_screen == 1 ? $product->touch_screen : 'N/A' }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">Display Features:
                            </td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">
                                {{ $product->d_other_features }}</td>
                        </tr>
                    </tbody>


                    <!-- --------3rd---------part (Memory Attributes )---------- -->
                    <thead>
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] text-[20] font-[500] pl-[14px] rounded-[5px]"
                                colspan="3">Memory:</td>
                        </tr>
                    </thead>
                    <tbody class="ml-[20px]">
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">RAM:</td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">
                                {{ $product->ram->ram }}GB
                            </td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">RAM Type:</td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">
                                {{ $product->ram->type }}
                            </td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">Removable:</td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">
                                {{ $product->m_removal ? 'Yes' : 'NO' }}
                            </td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">BUS Speed:</td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">
                                {{ $product->ram->bus_speed }}
                            </td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">Total RAM Slot:
                            </td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">{{ $product->m_slot }}</td>
                        </tr>
                    </tbody>

                    <!-- --------------4th---part------------------ -->
                    <thead>
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] text-[20] font-[500] pl-[14px] rounded-[5px]"
                                colspan="3">
                                Storage:
                            </td>
                        </tr>
                    </thead>
                    <tbody class="ml-[20px]">
                        <tr class="border-[#764A8733] border-b-[2px]">

                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">Storage Type:</td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">
                                {{-- {{ $s_type_n }} --}}
                                {{ $product->ssd ? 'SSD' : '' }}{{ $product->hdd ? ', HDD ' : '' }}
                                {{-- {{$product->ssd ? $cpt = $product->ssd->name : ''}} {{$product->hdd ? $cpt = $product->hdd->name : ''}} --}}
                            </td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">Storage Capacity:
                            </td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">
                                {{-- {{ $storage->name }} --}}
                                {{ $product->ssd ? $product->ssd->name : '' }}{{ $product->hdd ? ', ' . $product->hdd->name : '' }}
                            </td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">Extra M.2 Slot:
                            </td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">
                                {{ $product->s_extra_m2_slot ? 'Yes' : 'N/A' }}
                            </td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">
                                Supported Storage Type:
                            </td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">
                                {{ $product->s_support_type }}
                            </td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]  pl-[20px]">
                                Storage Upgrade:
                            </td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">
                                {{ $product->s_upgrade }}
                            </td>
                        </tr>
                    </tbody>
                    <!-- ------------------5th------part------------------ -->
                    <thead>
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] text-[20] font-[500] pl-[14px] rounded-[5px]"
                                colspan="3">Graphics:</td>
                        </tr>
                    </thead>
                    <tbody class="ml-[20px]">
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">Graphics Model:
                            </td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">{{ $product->g_model }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">Graphics Memory:
                            </td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">
                                {{ $product->Graphic->name }}
                            </td>
                        </tr>
                    </tbody>
                    <!-- -------------------6th--part------------ -->
                    <thead>
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] text-[20] font-[500] pl-[14px] rounded-[5px]"
                                colspan="3">Keyboard & Touchpad:</td>
                        </tr>
                    </thead>
                    <tbody class="ml-[20px]">
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">Keyboard Type:</td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">{{ $product->k_type }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">TouchPad:</td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">
                                {{ $product->touchpad ? 'Yes' : 'NO' }}</td>
                        </tr>
                    </tbody>
                    <!-- ----------7th--part------------- -->
                    <thead>
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] text-[20] font-[500] pl-[14px] rounded-[5px]"
                                colspan="3">Camera & Audio:</td>
                        </tr>
                    </thead>
                    <tbody class="ml-[20px]">
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">WebCam:</td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">
                                {{ $product->webcam ? 'Yes' : 'NO' }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">Microphone:</td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">
                                {{ $product->microphone ? 'Yes' : 'NO' }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">Speaker:</td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">
                                {{ $product->speaker ? 'Yes' : 'NO' }}</td>
                        </tr>
                    </tbody>
                    <!-- -----------8th---part----- -->
                    <thead>
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] text-[20] font-[500] pl-[14px] rounded-[5px]"
                                colspan="3">Ports & Slots:</td>
                        </tr>
                    </thead>
                    <tbody class="ml-[20px]">
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">Optical Drive:</td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">
                                {{ $product->optical_drive ?? 'N/A' }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">Card Reader:</td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">
                                {{ $product->card_reader ?? 'NO' }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">HDMI Port:</td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">
                                {{ $product->hdmi_p ?? 'NO' }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">USB 2 Port:</td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">
                                {{ $product->usb2_p ?? 'NO' }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">USB 3 Port:</td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">
                                {{ $product->usb3_p ?? 'NO' }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px] leading-[20px]">USB
                                Type-C /<br />
                                Thunderbolt Port:</td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">
                                {{ $product->type_c_tb_p ?? 'NO' }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px] leading-[20px]">
                                Headphone &<br /> Microphone
                                Port::</td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">{{ $product->headphone_p }}/
                                {{ $product->microphone_p }}</td>
                        </tr>
                    </tbody>
                    <!-- ---------------9th--part------ -->
                    <thead>
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] text-[20] font-[500] pl-[14px] rounded-[5px]"
                                colspan="3">Network & Connectivity:</td>
                        </tr>
                    </thead>
                    <tbody class="ml-[20px]">
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">WiFi:</td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">{{ $product->wifi }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">Bluetooth:</td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">{{ $product->bluetooth }}
                            </td>
                        </tr>
                    </tbody>
                    <!-- ---------------10th---part---------- -->
                    <thead>
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] text-[20] font-[500] pl-[14px] rounded-[5px]"
                                colspan="3">Security:</td>
                        </tr>
                    </thead>
                    <tbody class="ml-[20px]">
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">Fingerprint Sensor:
                            </td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">
                                {{ $product->final_price ? 'Yes' : 'NO' }}</td>
                        </tr>
                    </tbody>
                    <!-- ---------------11th---part---------- -->
                    <thead>
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] text-[20] font-[500] pl-[14px] rounded-[5px]"
                                colspan="3">Software:</td>
                        </tr>
                    </thead>
                    <tbody class="ml-[20px]">
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">Operating System:
                            </td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">
                                {{ $product->operating_system }}</td>
                        </tr>
                    </tbody>
                    <!-- ---------------12th---part---------- -->
                    <thead>
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] text-[20] font-[500] pl-[14px] rounded-[5px]"
                                colspan="3">Power:</td>
                        </tr>
                    </thead>
                    <tbody class="ml-[20px]">
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">Battery Type:</td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">{{ $product->battery_type }}
                            </td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">Battery Capacity:
                            </td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">
                                {{ $product->battery_capacity }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">Adapter Type:</td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">{{ $product->adapter_type }}
                            </td>
                        </tr>
                    </tbody>
                    <!-- ---------------13th---part---------- -->
                    <thead>
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] text-[20] font-[500] pl-[14px] rounded-[5px]"
                                colspan="3">Physical Specification:</td>
                        </tr>
                    </thead>
                    <tbody class="ml-[20px]">
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">Color:</td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">{{ $product->color }}</td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">Dimensions:</td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">{{ $product->dimension }}
                            </td>
                        </tr>
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">Weight:</td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">{{ $product->weight }}</td>
                        </tr>
                    </tbody>
                    <!-- ---------------14th---part---------- -->
                    <thead>
                        <tr>
                            <td class="bg-[#380D37] text-[#F2F2F2] font-[jost] text-[20] font-[500] pl-[14px] rounded-[5px]"
                                colspan="3">Warranty :</td>
                        </tr>
                    </thead>
                    <tbody class="ml-[20px]">
                        <tr class="border-[#764A8733] border-b-[2px]">
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400] pl-[20px]">Warranty Details
                            </td>
                            <td class="text-[#353535] text-[16px] font-[jost] font-[400]">{{ $product->w_details }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section class="mt-[20px] border-[2px] border-[#380D37] py-[20px] pl-[20px] pr-[40px] rounded-[5px] "
                id="description">
                <div>
                    <h2 class="text-[#353535] text-[20px] text-[20] font-[jost] font-[700]">Description</h2>
                </div>
                <div class="mt-[20px] mb-[40px]">
                    <h2 class="text-justify text-[#353535] text-[18px] text-[20] font-[jost] font-[500] my-[20px]">
                        {{ $product->title }}</h2>
                    <p class="text-justify text-[#353535] text-[16px] font-[400] font-[jost]">
                        {!! $product->description !!}
                        {{-- The Lenovo IdeaPad 1
                        15AMN7 is a
                        stylish and powerful laptop that offers high-performance computing for a variety of jobs.
                        This laptop can perform complex programs with ease thanks to an AMD Ryzen 5 7520U (2.8 GHz
                        up to 4.3 GHz).
                        The processor has four cores and eight threads, allowing you to multitask effectively and
                        effortlessly.
                        This laptop has 8GB DDR5-5500 Memory, which offers smooth performance even while running
                        many apps at the same time.
                        The 512GB SSD PCIe offers plenty of storage capacity for your data, documents, and
                        multimedia files.
                        SSD technology enables rapid boot-up and load times, allowing you to complete your tasks
                        quickly.
                        The AMD Radeon 610M graphics provides exceptional graphics performance, making this laptop
                        suitable for gaming and video editing.
                        The 14-inch FHD (1920x1080) display provides clear and sharp graphics, letting you view
                        high-quality entertainment without pixelation or blurring.
                        This Lenovo IdeaPad 1 15AMN7 is a powerful and flexible laptop that can meet a variety of
                        computing demands.
                        Whether you're a student, professional, or gamer, this laptop is a dependable option that
                        can manage your workload with ease. --}}
                    </p>
                </div>
                <div itemprop="description">
                    <h2 class="text-justify text-[#353535] text-[18px] text-[20] font-[jost] font-[500]">
                        {{ $product->title }} from the best Computer Shop in BD</h2>
                    <p class="text-justify text-[#353535] text-[16px] font-[jost] font-[400]">
                        {!! $product->summary !!}
                        {{-- In Bangladesh, you can
                        get the
                        original Lenovo IdeaPad 1 14AMN7 AMD Ryzen 5 15.6" FHD Laptop from LappyVally.
                        We have a large collection of the latest Lenovo Laptops to purchase. Order Online Or Visit
                        your shop to get yours at the lowest price.
                        The Lenovo IdeaPad 1 15AMN7 AMD Ryzen 5 15.6" FHD Laptop comes with 2 years warranty (
                        Battery adapter 1 year). --}}
                    </p>
                </div>
            </section>


            <section class="mt-[20px] border-[2px] border-[#380D37] p-[20px] rounded-[5px]" id='review'>
                <div class="flex items-center justify-between">
                    <div class="title-n-action">
                        <h2 class="my-[10px] font-[jost] text-[20] font-[500]">
                            Reviews({{ $product_reviews->count() }})</h2>
                        <p class="my-[10px] font-[jost] font-[500]">Get Specific Details about this product from
                            customers who own it.</p>
                    </div>

                    <div class="space-y-2">
                        <button type="button"
                            class="inline-block rounded bg-gradient-to-r from-[#380D37] to-[#DC275C] px-6 pb-2 pt-2.5 text-[#f2f2f2] text-[16px] font-[500] font-[jost]"
                            data-te-toggle="modal" data-te-target="#exampleModalCenteredScrollable"
                            data-te-ripple-init data-te-ripple-color="light">
                            Write a review
                        </button>
                    </div>

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
                                    class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
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
                                        class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                                        data-te-modal-dismiss aria-label="Close">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
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
                                                        <img :src="preview" alt="preview" class="max-h-20">
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
                                                                <img src="/storage/product/star2.svg" alt="Product"
                                                                    class='h-[37.45px]'>
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
                                                <div class='mt-[20px]'>
                                                    <div class="">
                                                        <template x-if='v_msg'>
                                                            <span x-text='v_msg'></span>
                                                        </template>
                                                        <button type="button" @click='submit'
                                                            class='relative px-[25px] py-[12px] rounded-[4px] items-center text-[16px] text-[#F2F2F2] font-[jost] font-[500] leading-[28.9px] bg-gradient-to-r from-[#380D37] to-[#DC275C]'>
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

                <div class="flex my-[10px]">
                    @for ($i = 1; $i < 6; $i++)
                        @if ($i <= $product->average_rating)
                            <img class="h-7" src="/storage/product/star2.svg" alt="">
                        @else
                            <img class="h-7" src="/storage/product/star-white.svg" alt="">
                        @endif
                    @endfor

                    <span class="font-[jost] text-[20] font-[500] mt-[5px] ml-[5px]">{{ $product->average_rating }}
                        out of 5</span>
                </div>
                <div class="h-[2px] bg-[#764A8733]"></div>
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
        <div>
            @if ($related_products)
                <div class="p-[10px] border-[2px] border-[#380D37] rounded-[3px] w-[301px]">

                    <div class="p-[10px]">
                        <h1 class="text-[#380D37] text-[20px] font-[jost] font-[500] flex justify-center">Related
                            Products</h1>
                        <div class="h-[2px] bg-[#380D37]"></div>
                    </div>

                    @foreach ($related_products as $rp)
                        <div class="flex gap-[15px] leading-[20.23px]">
                            <div class="w-[72px]">
                                <img class="object-center " src="{{ $rp->img()[0] }}" alt="Product">
                            </div>
                            <div>
                                <p class="text-[#000000] text-[14px] font-[jost] font-[400]">Lenovo IdeaPad 1
                                    15AMN7<br />
                                    AMD Ryzen 5 512GB SSD <br /> 15.6" FHD Laptop<br /> with DDR5 RAM</p>
                                <p class="text-[#DC275C] text-[16px] font-[jost] font-[700] my-[10px]"><a>1,50,000
                                        TK</a>
                                </p>

                            </div>
                        </div>
                        @if (!$loop->last)
                            <div class="p-[10px]">

                                <div class="h-[2px] bg-[#764A8733]"></div>
                            </div>
                        @endif
                    @endforeach



                </div>
            @endif
            <!-- ------------------2nd--part (Recent View)------------- -->
            {{-- <div class="p-[10px] border-[2px] border-[#380D37] rounded-[3px] w-[301px] mt-[20px]">
                <div class="p-[10px]">
                    <h1 class="text-[#380D37] text-[20px] font-[jost] font-[500] flex justify-center">Recently
                        Viewed</h1>
                    <div class="h-[2px] bg-[#380D37]"></div>
                </div>
                <div class="flex gap-[15px] leading-[20.23px]">
                    <div class="w-[72px]">
                        <img class="object-center " src="/storage/product/large-size-laptop.jpg" alt="Product">
                    </div>
                    <div>
                        <p class="text-[#000000] text-[14px] font-[jost] font-[400]">Lenovo IdeaPad 1 15AMN7<br />
                            AMD Ryzen 5 512GB SSD <br /> 15.6" FHD Laptop<br /> with DDR5 RAM</p>
                        <p class="text-[#DC275C] text-[16px] font-[jost] font-[700] my-[10px]"><a>1,50,000 TK</a></p>

                    </div>
                </div>
                <!-- </section> -->

                <!-- <section> -->
                <div class="p-[10px]">

                    <div class="h-[2px] bg-[#764A8733]"></div>
                </div>
                <div class="flex gap-[15px] leading-[20.23px]">
                    <div class="w-[72px]">
                        <img class="object-center " src="/storage/product/large-size-laptop.jpg" alt="Product">
                    </div>
                    <div>
                        <p class="text-[#000000] text-[14px] font-[jost] font-[400]">Lenovo IdeaPad 1 15AMN7<br />
                            AMD Ryzen 5 512GB SSD <br /> 15.6" FHD Laptop<br /> with DDR5 RAM</p>
                        <p class="text-[#DC275C] text-[16px] font-[jost] font-[700] my-[10px]"><a>1,50,000 TK</a></p>

                    </div>
                </div>
                <!-- </section> -->

                <!-- <section> -->
                <div class="p-[10px]">

                    <div class="h-[2px] bg-[#764A8733]"></div>
                </div>
                <div class="flex gap-[15px] leading-[20.23px]">
                    <div class="w-[72px]">
                        <img class="object-center " src="/storage/product/large-size-laptop.jpg" alt="Product">
                    </div>
                    <div>
                        <p class="text-[#000000] text-[14px] font-[jost] font-[400]">Lenovo IdeaPad 1 15AMN7<br />
                            AMD Ryzen 5 512GB SSD <br /> 15.6" FHD Laptop<br /> with DDR5 RAM</p>
                        <p class="text-[#DC275C] text-[16px] font-[jost] font-[700] my-[10px]"><a>1,50,000 TK</a></p>

                    </div>
                </div>
            </div> --}}
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
    </script>
</div>
