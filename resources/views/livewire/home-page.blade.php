<div
    class=" p360 px-[100px] max-2xl:px-[70px] max-xl:px-[60px] max-lg:px-[38px] max-md:px-[35px] max-sm:px-[8px] max-sm:mt-[70px] max-xl:mt-[100px]">
    {{-- Alert message  --}}
    @if ($error = session('error'))
        <script>
            toastr.success("{{ $error }}")
        </script>
    @endif
    @if ($success = session('success'))
        <script>
            toastr.success("{{ $success }}")
        </script>
    @endif
    <!-- Hero Section  -->
    @if ($home_banner)
        <section class="w-full mx-auto">
            <div class="relative items-center w-full mx-auto px-auto" x-data="{ active: true }">
                @php
                    $bnrs = explode(',', $home_banner->photo);
                @endphp
                @foreach ($bnrs as $banner)
                    <div class="{{ $loop->first ? '' : ' hidden' }} slide w-full">
                        <img class="object-cover w-full mx-auto" src="{{ $banner }}">
                    </div>
                @endforeach

                <!-- The previous button -->
                <div class="absolute top-0 bottom-0 flex items-center justify-between w-full mx-auto">
                    <a id="move_back" value='0'
                        class="slide_icon sm:translate-x-[-40px] text-[40px] text-blue-500 opacity-50 hover:opacity-100 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-12 h-12">
                            <path stroke-linecap="round" class="max-sm:stroke-[#f2f2f2]" stroke-linejoin="round"
                                d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>

                    </a>
                    <!-- The next button -->
                    <a id="move_front" value='0'
                        class="slide_icon sm:translate-x-[40px]  text-[40px] text-blue-500 opacity-50 hover:opacity-100 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-12 h-12">
                            <path :class="{ 'text-blue-500': active }" class="max-sm:stroke-[#f2f2f2]"
                                stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>

                    </a>
                </div>
            </div>
            <div class="mq">
                <marquee class="blink"
                direction='right'
                >This is an example of blinking text using CSS within a marquee.</marquee>
            </div>
            
             <a href="" class="fixed flex items-center justify-center bg-green-500 rounded-[50%] bottom-20 max-sm:bottom-18 right-10 max-sm:right-8 z-40 hover:w-16 duration-300 hover:h-16 max-sm:w-12 w-14 max-sm:h-12 h-14">
              <div>
                <img src="/storage/product/whatsapp-symbol-logo-svgrepo-com.svg" alt="" class=" w-8 h-10" >
              </div>
             </a>
              
        </section>
    @endif
    <!-- --------hero--section --end ----  -->

    <!-- Student Budgeted Laptop -->
    <section class='mt-[50px]'>
        <div class="py-1 text-center">
            <h2
                class="font-[jost] text-[40px] font-[500] max-lg:text-[30px] max-md:text-[25px] max-sm:text-[24px] text-[#353535]">
                Student Budgeted Laptop
            </h2>
            <p
                class="font-[jost] text-[16px] font-[500] max-lg:text-[14px] max-md:text-[12px] max-sm:text-[12px] text-[#380D37]">
                The best we offer is here</p>
        </div>
        <!-- Product  -->
        <div>
            <div
                class="grid grid-cols-5 max-sm:grid-cols-2 max-md:grid-cols-2 max-lg:grid-cols-3 max-xl:grid-cols-4 gap-2 mt-6 mb-[78px] max-sm:mb-[50px]">
                @foreach ($student_laptops as $product)
                    <x-product :product="$product"></x-product>
                @endforeach
            </div>
        </div>
    </section>
    <!-- New arrival  -->
    <section>
        <!-- New text  -->
        <section>
            <!-- heading -->
            <div
                class=" fill-up-btn h-[130px] max-sm:h-[52px] max-md:h-[68px] max-lg:h-[85px] max-xl:h-[100px]  flex justify-center items-center text-white bg-gradient-to-r from-[#380D37] to-[#DC275C]">

                <h1
                    class="text-[40px] max-sm:text-[18px] max-md:text-[22px] max-lg:text-[30px] max-xl:text-[35px] text-[#f2f2f2] font-[jost] font-[500] text-center">
                    New Arrival
                </h1>
            </div>
        </section>

        <!-- Product  -->
        <section>
            <div
                class="grid grid-cols-5 max-md:grid-cols-2 max-lg:grid-cols-3 max-xl:grid-cols-4 gap-2 mt-6 mb-[78px] max-sm:mb-[50px]">
                {{-- @for ($i = 1; $i < 6; $i++)
                <livewire:products />
            @endfor --}}
                @foreach ($new_arrival->take(5) as $product)
                    <x-product :product="$product"></x-product>
                @endforeach
            </div>
        </section>
        <!-- Product  -->
    </section>
    <!-- Attractive Gaming Laptop -->
    <section class='mt-[50px]'>
        <div class="py-1 text-center">
            <h2
                class="font-[jost] text-[40px] font-[500] max-lg:text-[30px] max-md:text-[25px] max-sm:text-[24px] text-[#353535]">
                Attractive Gaming Laptop
            </h2>
            <p
                class="font-[jost] text-[16px] font-[500] max-lg:text-[14px] max-md:text-[12px] max-sm:text-[12px] text-[#380D37]">
                The best product we offer is here</p>
        </div>
        <!-- Product  -->
        <div>
            <div
                class="grid grid-cols-5 max-sm:grid-cols-2 max-md:grid-cols-2 max-lg:grid-cols-3 max-xl:grid-cols-4 gap-2 mt-6 mb-[78px] max-sm:mb-[50px]">
                @foreach ($features->where('cat_id', 4) as $product)
                    <x-product :product="$product"></x-product>
                    {{-- <livewire:products :product="$product" /> --}}
                @endforeach
            </div>
        </div>
    </section>
    <!-- Feature Laptops Sliders -->
    <section x-data='{redirect(url){
        window.open(url,"_blank");
        }}'>
        <div class="py-1 text-center">
            <h2
                class="font-[jost] text-[40px] font-[500] max-lg:text-[30px] max-md:text-[25px] max-sm:text-[24px] text-[#353535]">
                Featured Laptops</h2>
            <p
                class="font-[jost] text-[16px] font-[500] max-lg:text-[14px] max-md:text-[12px] max-sm:text-[12px] text-[#380D37]">
                The best we offer is here</p>
        </div>
        <div class="pt-[60px] max-sm:pt-[25px] max-md:pt-[30px] max-lg:pt-[40px] max-xl:pt-[50px]">
            <button
                class="usa_btn w-[241px] max-xl:w-[200px] max-lg:w-[180px] max-md:w-[150px] max-sm:w-[100px]  h-[48px] max-lg:h-[43px] max-md:h-[40px] max-sm:h-[35px] max-lg:text-[18px] max-md:text-[16px] max-sm:text-[14px]
                items-center text-center rounded-[4px] text-[#F2F2F2] bg-[#380D37] font-[500] text-[20px] font-[jost]">
                USA
            </button>
            <button
                class="asian_btn w-[241px] max-xl:w-[200px] max-lg:w-[180px] max-md:w-[150px] max-sm:w-[100px]  h-[48px] max-lg:h-[43px] max-md:h-[40px] max-sm:h-[35px] max-lg:text-[18px] max-md:text-[16px] max-sm:text-[14px]
                items-center text-center rounded-[4px] bg-[#F2F2F2] text-[#380D37] font-[500] text-[20px] font-[jost]">
                Asian
            </button>
            <div class="h-[2px] bg-[#380D37]"></div>
        </div>

        {{-- Swiper for usa  --}}
        <div class="usa_prds">
            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper mt-[20px] mb-[10px]">
                    @forelse ($features->where('cat_id', 7) as $f_product)
                        <div class="swiper-slide">
                            <div
                                class="w-[221px] h-[376px] max-xl:w-full mx-auto max-sm:mb-[10px] max-md:mb-[10px] max-md:gap-[8px] flex flex-col bg-white px-2 pt-2 pb-3 gap-[16px] text-left shadow-[2px_2px_5px_2px_#0000001A]">

                                <div class="image-container h-[180px] relative">
                                    <a @click.stop='redirect("{{ route('product.details', [$f_product?->slug]) }}")'
                                        href="{{ route('product.details', [$f_product?->slug]) }}" wire:navigate
                                        class="h-full">
                                        <img src="{{ $f_product?->img()[0] }}" alt=""
                                            class="object-contain h-full img-contain">
                                    </a>
                                    @if ($product?->stock < 1)
                                        <span
                                            class="text-[14px] bg-[#ef4a23] text-[#fff] absolute top-[-8px] left-[-8px] px-2 py-[2px] rounded-r-lg">Out
                                            Of Stock</span>
                                    @endif
                                    <span
                                        class="text-[14px] text-[#fff] bg-[#ef4a23] absolute top-[-8px] right-[-8px] px-2 py-[2px] rounded-l-lg">
                                        -10%
                                    </span>
                                </div>
                                <div>
                                    <a @click.stop='redirect("{{ route('product.details', [$f_product->slug]) }}")'
                                        href="{{ route('product.details', [$f_product->slug]) }}" wire:navigate
                                        class="text-[16px] text-[#380D37] font-[jost] font-[500] leading-[23.12px] transition duration-300 ease-in-out hover:text-[#ef4a23] decoration-[#ef4a23] decoration-1 hover:underline hover:underline-offset-4">
                                        {{ Str::of($f_product->title)->words(5) }}
                                    </a>
                                </div>
                                <div
                                    class="flex justify-between items-end text-[14px] mt-auto font-[jost] font-[700] leading-[20.23px]">
                                    <div class="flex flex-col">
                                        <span class="pprice text-[#DC275C]"
                                            value='{{ $product->final_price }}'>{{ $product->final_price }}
                                            ৳
                                        </span>
                                        <span class="text-[#380D37] text-[14px] font-[jost] font-[700] line-through">
                                            {{ $product->price }} ৳
                                        </span>
                                    </div>
                                    <livewire:add-to-cart :id="$f_product->id"
                                        button='<span class="text-[#380D37]">Add to Cart</span>' />
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <!-- Swiper JS -->
            <!-- Initialize Swiper -->
        </div>

        {{-- swiper for asian laptop --}}
        <div class="hidden asian_prds">
            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper mt-[20px] mb-[10px]">
                    @forelse ($features->where('cat_id', 6) as $a_product)
                        <div class="swiper-slide">
                            <div
                                class="w-[221px] h-[376px] mx-auto max-sm:mb-[10px] max-md:mb-[10px] max-md:gap-[8px] flex flex-col bg-white px-2 pt-2 pb-3 gap-[16px] text-left shadow-[2px_2px_5px_2px_#0000001A]">
                                <div class="image-container h-[180px] relative">
                                    <a @click.stop='redirect("{{ route('product.details', [$a_product->slug]) }}")'
                                        href="{{ route('product.details', [$a_product->slug]) }}" wire:navigate
                                        class="h-full">
                                        <img src="{{ $a_product->img()[0] }}" alt=""
                                            class="object-contain h-full img-contain">
                                    </a>
                                    @if ($product->stock < 1)
                                        <span
                                            class="text-[14px] bg-[#ef4a23] text-[#fff] absolute top-[-8px] left-[-8px] px-2 py-[2px] rounded-r-lg">
                                            Out Of Stock</span>
                                    @endif
                                    <span
                                        class="text-[14px] text-[#fff] bg-[#ef4a23] absolute top-[-8px] right-[-8px] px-2 py-[2px] rounded-l-lg">
                                        -10%
                                    </span>
                                </div>
                                <div class="">
                                    <a @click.stop='redirect("{{ route('product.details', [$a_product->slug]) }}")'
                                        href="{{ route('product.details', [$a_product->slug]) }}" wire:navigate
                                        class="text-[16px] text-[#380D37] font-[jost] font-[500] leading-[23.12px] transition duration-300 ease-in-out hover:text-[#ef4a23] decoration-[#ef4a23] decoration-1 hover:underline hover:underline-offset-4">
                                        {{ Str::of($a_product->title)->words(5) }}
                                    </a>
                                </div>


                                <div
                                    class="flex justify-between items-end text-[14px] mt-auto font-[jost] font-[700] leading-[20.23px]">
                                    <div class="flex flex-col">
                                        <span class="pprice text-[#DC275C]"
                                            value='{{ $product->final_price }}'>{{ $product->final_price }}
                                            ৳
                                        </span>
                                        <span class="text-[#380D37] text-[14px] font-[jost] font-[700] line-through">
                                            1200 ৳
                                            {{ $product->price }} ৳
                                        </span>
                                    </div>
                                    <a class="text-[#380D37]">
                                        Add to Cart
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                    {{-- <div class="swiper-slide">
                        <div
                            class="w-[221px] mx-auto max-sm:mb-[10px] max-md:mb-[10px] max-md:gap-[8px] flex flex-col bg-white p-2 gap-[16px] text-left shadow-[2px_2px_5px_2px_#0000001A]">
                            <div class="">
                                <div class="image-container1">
                                    <a href="#">
                                        <img src="/storage/product/large-size-laptop.jpg" alt="">
                                    </a>
                                </div>
                                <div class="mb-auto">
                                    <a href="#"
                                        class="mb-auto text-[16px] text-[#380D37] font-[jost] font-[500] leading-[23.12px] transition duration-300 ease-in-out hover:text-[#ef4a23] decoration-[#ef4a23] decoration-2 hover:underline hover:underline-offset-4">
                                        Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB, Brand New Cloud grey
                                    </a>
                                </div>
                            </div>

                            <div
                                class=" flex justify-between gap-5 text-[14px] mt-auto font-[jost] font-[700] py-[10px] leading-[20.23px]">
                                <span href="#" class=" text-[#DC275C]">
                                    1,50,000 TK
                                </span>
                                <a class="text-[#380D37]">
                                    Add to Cart
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="w-[221px] mx-auto max-sm:mb-[10px] max-md:mb-[10px] max-md:gap-[8px] flex flex-col bg-white p-2 gap-[16px] text-left shadow-[2px_2px_5px_2px_#0000001A]">
                            <div class="">
                                <div class="image-container1">
                                    <a href="#">
                                        <img src="/storage/product/large-size-laptop.jpg" alt="">
                                    </a>
                                </div>
                                <div class="mb-auto">
                                    <a href="#"
                                        class="mb-auto text-[16px] text-[#380D37] font-[jost] font-[500] leading-[23.12px] transition duration-300 ease-in-out hover:text-[#ef4a23] decoration-[#ef4a23] decoration-2 hover:underline hover:underline-offset-4">
                                        Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB, Brand New Cloud grey
                                    </a>
                                </div>
                            </div>

                            <div
                                class=" flex justify-between gap-5 text-[14px] mt-auto font-[jost] font-[700] py-[10px] leading-[20.23px]">
                                <span href="#" class=" text-[#DC275C]">
                                    1,50,000 TK
                                </span>
                                <a class="text-[#380D37]">
                                    Add to Cart
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="w-[221px] mx-auto max-sm:mb-[10px] max-md:mb-[10px] max-md:gap-[8px] flex flex-col bg-white p-2 gap-[16px] text-left shadow-[2px_2px_5px_2px_#0000001A]">
                            <div class="">
                                <div class="image-container1">
                                    <a href="#">
                                        <img src="/storage/product/large-size-laptop.jpg" alt="">
                                    </a>
                                </div>
                                <div class="mb-auto">
                                    <a href="#"
                                        class="mb-auto text-[16px] text-[#380D37] font-[jost] font-[500] leading-[23.12px] transition duration-300 ease-in-out hover:text-[#ef4a23] decoration-[#ef4a23] decoration-2 hover:underline hover:underline-offset-4">
                                        Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB, Brand New Cloud grey
                                    </a>
                                </div>
                            </div>

                            <div
                                class=" flex justify-between gap-5 text-[14px] mt-auto font-[jost] font-[700] py-[10px] leading-[20.23px]">
                                <span href="#" class=" text-[#DC275C]">
                                    1,50,000 TK
                                </span>
                                <a class="text-[#380D37]">
                                    Add to Cart
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="w-[221px] mx-auto max-sm:mb-[10px] max-md:mb-[10px] max-md:gap-[8px] flex flex-col bg-white p-2 gap-[16px] text-left shadow-[2px_2px_5px_2px_#0000001A]">
                            <div class="">
                                <div class="image-container1">
                                    <a href="#">
                                        <img src="/storage/product/large-size-laptop.jpg" alt="">
                                    </a>
                                </div>
                                <div class="mb-auto">
                                    <a href="#"
                                        class="mb-auto text-[16px] text-[#380D37] font-[jost] font-[500] leading-[23.12px] transition duration-300 ease-in-out hover:text-[#ef4a23] decoration-[#ef4a23] decoration-2 hover:underline hover:underline-offset-4">
                                        Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB, Brand New Cloud grey
                                    </a>
                                </div>
                            </div>

                            <div
                                class=" flex justify-between gap-5 text-[14px] mt-auto font-[jost] font-[700] py-[10px] leading-[20.23px]">
                                <span href="#" class=" text-[#DC275C]">
                                    1,50,000 TK
                                </span>
                                <a class="text-[#380D37]">
                                    Add to Cart
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="w-[221px] mx-auto max-sm:mb-[10px] max-md:mb-[10px] max-md:gap-[8px] flex flex-col bg-white p-2 gap-[16px] text-left shadow-[2px_2px_5px_2px_#0000001A]">
                            <div class="">
                                <div class="image-container1">
                                    <a href="#">
                                        <img src="/storage/product/large-size-laptop.jpg" alt="">
                                    </a>
                                </div>
                                <div class="mb-auto">
                                    <a href="#"
                                        class="mb-auto text-[16px] text-[#380D37] font-[jost] font-[500] leading-[23.12px] transition duration-300 ease-in-out hover:text-[#ef4a23] decoration-[#ef4a23] decoration-2 hover:underline hover:underline-offset-4">
                                        Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB, Brand New Cloud grey
                                    </a>
                                </div>
                            </div>

                            <div
                                class=" flex justify-between gap-5 text-[14px] mt-auto font-[jost] font-[700] py-[10px] leading-[20.23px]">
                                <span href="#" class=" text-[#DC275C]">
                                    1,50,000 TK
                                </span>
                                <a class="text-[#380D37]">
                                    Add to Cart
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="w-[221px] mx-auto max-sm:mb-[10px] max-md:mb-[10px] max-md:gap-[8px] flex flex-col bg-white p-2 gap-[16px] text-left shadow-[2px_2px_5px_2px_#0000001A]">
                            <div class="">
                                <div class="image-container1">
                                    <a href="#">
                                        <img src="/storage/product/large-size-laptop.jpg" alt="">
                                    </a>
                                </div>
                                <div class="mb-auto">
                                    <a href="#"
                                        class="mb-auto text-[16px] text-[#380D37] font-[jost] font-[500] leading-[23.12px] transition duration-300 ease-in-out hover:text-[#ef4a23] decoration-[#ef4a23] decoration-2 hover:underline hover:underline-offset-4">
                                        Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB, Brand New Cloud grey
                                    </a>
                                </div>
                            </div>

                            <div
                                class=" flex justify-between gap-5 text-[14px] mt-auto font-[jost] font-[700] py-[10px] leading-[20.23px]">
                                <span href="#" class=" text-[#DC275C]">
                                    1,50,000 TK
                                </span>
                                <a class="text-[#380D37]">
                                    Add to Cart
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="w-[221px] mx-auto max-sm:mb-[10px] max-md:mb-[10px] max-md:gap-[8px] flex flex-col bg-white p-2 gap-[16px] text-left shadow-[2px_2px_5px_2px_#0000001A]">
                            <div class="">
                                <div class="image-container1">
                                    <a href="#">
                                        <img src="/storage/product/large-size-laptop.jpg" alt="">
                                    </a>
                                </div>
                                <div class="mb-auto">
                                    <a href="#"
                                        class="mb-auto text-[16px] text-[#380D37] font-[jost] font-[500] leading-[23.12px] transition duration-300 ease-in-out hover:text-[#ef4a23] decoration-[#ef4a23] decoration-2 hover:underline hover:underline-offset-4">
                                        Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB, Brand New Cloud grey
                                    </a>
                                </div>
                            </div>

                            <div
                                class=" flex justify-between gap-5 text-[14px] mt-auto font-[jost] font-[700] py-[10px] leading-[20.23px]">
                                <span href="#" class=" text-[#DC275C]">
                                    1,50,000 TK
                                </span>
                                <a class="text-[#380D37]">
                                    Add to Cart
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="w-[221px] mx-auto max-sm:mb-[10px] max-md:mb-[10px] max-md:gap-[8px] flex flex-col bg-white p-2 gap-[16px] text-left shadow-[2px_2px_5px_2px_#0000001A]">
                            <div class="">
                                <div class="image-container1">
                                    <a href="#">
                                        <img src="/storage/product/large-size-laptop.jpg" alt="">
                                    </a>
                                </div>
                                <div class="mb-auto">
                                    <a href="#"
                                        class="mb-auto text-[16px] text-[#380D37] font-[jost] font-[500] leading-[23.12px] transition duration-300 ease-in-out hover:text-[#ef4a23] decoration-[#ef4a23] decoration-2 hover:underline hover:underline-offset-4">
                                        Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB, Brand New Cloud grey
                                    </a>
                                </div>
                            </div>

                            <div
                                class=" flex justify-between gap-5 text-[14px] mt-auto font-[jost] font-[700] py-[10px] leading-[20.23px]">
                                <span href="#" class=" text-[#DC275C]">
                                    1,50,000 TK
                                </span>
                                <a class="text-[#380D37]">
                                    Add to Cart
                                </a>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                {{-- <div class="swiper-pagination"></div> --}}
            </div>
            <!-- Initialize Swiper -->
        </div>
    </section>

    <div class='mt-[40px] mb-[30px]'>
        <div class="h-[2px] bg-[#380D37]"></div>
    </div>
    <!-- Differential Variants  -->
    <section class='mt-[70px] max-sm:mt-[22px]'>
        <div class="py-1 text-center">
            <h2
                class="font-[jost] text-[40px] font-[500] max-lg:text-[30px] max-md:text-[25px] max-sm:text-[24px] text-[#353535]">
                Differential Variants </h2>
            <p
                class="font-[jost] text-[16px] font-[500] max-lg:text-[14px] max-md:text-[12px] max-sm:text-[12px] text-[#380D37]">
                The best we offer is here</p>
        </div>
        <div class="pt-[60px]">
            <button
                class="usa_btn w-[241px] max-xl:w-[200px] max-lg:w-[180px] max-md:w-[150px] max-sm:w-[100px]  h-[48px] max-lg:h-[43px] max-md:h-[40px] max-sm:h-[35px] max-lg:text-[18px] max-md:text-[16px] max-sm:text-[14px]
                items-center text-center rounded-[4px] text-[#F2F2F2] bg-[#380D37] font-[500] text-[20px] font-[jost]">
                USA
            </button>
            <button
                class="asian_btn w-[241px] max-xl:w-[200px] max-lg:w-[180px] max-md:w-[150px] max-sm:w-[100px]  h-[48px] max-lg:h-[43px] max-md:h-[40px] max-sm:h-[35px] max-lg:text-[18px] max-md:text-[16px] max-sm:text-[14px]
                items-center text-center rounded-[4px] bg-[#F2F2F2] text-[#380D37] font-[500] text-[20px] font-[jost]">
                Asian
            </button>
            <div class="h-[2px] bg-[#380D37]"></div>
        </div>
        {{-- @dd($dpds) --}}
        {{-- <!-- Product  --> --}}
        <div class="usa_prds">
            <div
                class="grid grid-cols-5 max-md:grid-cols-2 max-lg:grid-cols-3 max-xl:grid-cols-4 gap-2 mt-6 mb-[78px] max-sm:mb-[50px]">
                @foreach ($dpds->where('cat_id', 7) as $d_product)
                    <x-product :product="$d_product"></x-product>
                @endforeach
            </div>
        </div>
        {{-- @dd($dpds->where('cat_id', 7)) --}}
        <div class="hidden asian_prds">
            <div
                class="grid grid-cols-5 max-md:grid-cols-2 max-lg:grid-cols-3 max-xl:grid-cols-4 gap-2 mt-6 mb-[78px] max-sm:mb-[50px]">
                @foreach ($dpds->where('cat_id', 6) as $da_product)
                    <x-product :product="$da_product"></x-product>
                @endforeach
            </div>
        </div>

        <!-- See more button  -->

    </section>
    <div>
        <a href="{{ route('shop') }}" wire:navigate
            class="fill-up-btn items-center justify-center flex my-[60px] mx-auto text-[16px] text-[#F2F4F8] w-[116px] h-[44px] rounded-[4px] bg-gradient-to-r from-[#380D37] to-[#DC275C]">See
            More</a>

        <div class="h-[2px] bg-[#380D37]"></div>
    </div>
    <!-- Currention code from this line upto footer  -->
    <section class="#about-us">
        <div>
            <h2
                class="mt-8 font-[jost] font-[500] text-center text-[40px] max-lg:text-[30px] max-md:text-[25px] max-sm:text-[24px] text-[#353535]">
                Why Choose Us?</h2>
        </div>
        <div class="grid grid-cols-5 max-md:grid-cols-2 max-lg:grid-cols-3 max-xl:grid-cols-4 gap-2 my-[50px] ">
            <div
                class="rounded-[4px] shadow-[2px_2px_5px_2px_#0000001A] max-sm:mb-[10px] max-md:mb-[10px] max-lg:mb-[10px]">
                <div>
                    <div class='p-3 mx-auto w-[116px] h-[116px]'>
                        <div class='flex items-center mx-auto'>
                            <img class='w-[55.36px] h-[55.36px]' src="/storage/product/laptop-1.jpg" alt="Product">
                            <img class='w-[55.36px]' src="/storage/product/laptop.jpg" alt="Product">
                        </div>
                        <div class='flex items-center mx-auto'>
                            <img class='w-[55.36px] h-[55.36px]' src="/storage/product/web-traffic.jpg"
                                alt="Product">
                            <img class='w-[55.36px] h-[55.36px]' src="/storage/product/laptop-2.jpg" alt="Product">
                        </div>
                    </div>
                    <h2
                        class="h-[100px] px-1 py-4 text-[#DC275C] font-[jost] text-[24px] font-[500] leading-[35px] text-center ">
                        Wide Varieties</h2>
                </div>
                <div class="p-3 mt-auto">
                    <p class="font-[jost] text-[14px] font-[500] leading-[20px] text-left text-[#380D37]">
                        We have a
                        wide collection of laptops from different brands. We have brand new and pre-ownedlaptops in our
                        collection.</p>
                </div>
            </div>
            <div
                class="rounded-[4px] shadow-[2px_2px_5px_2px_#0000001A] max-sm:mb-[10px] max-md:mb-[10px] max-lg:mb-[10px]">
                <div>
                    <img class="p-3 mx-auto w-[116px] h-[116px]" src="/storage/product/trust-1.svg" alt="Product">
                    <h2
                        class="h-[100px] px-1 py-4 text-[#DC275C] font-[jost] text-[24px]  font-[500] leading-[35px] text-center ">
                        Trusted and Reliable</h2>
                </div>
                <div class="p-3 mt-auto">
                    <p class="font-[jost] text-[14px] font-[500] leading-[20px] text-left text-[#380D37]">
                        We are
                        trusted and reliable shop. We provide you with the best services and good quality products.</p>
                </div>
            </div>

            <div
                class="rounded-[4px] shadow-[2px_2px_5px_2px_#0000001A] max-sm:mb-[10px] max-md:mb-[10px] max-lg:mb-[10px]">
                <div>
                    <img class="p-3 mx-auto w-[116px] h-[116px]" src="/storage/product/best-service.svg"
                        alt="Product">
                    <h2
                        class="h-[100px] px-1 py-4 text-[#DC275C] font-[jost] text-[24px] font-[500] leading-[35px] text-center ">
                        Best Service</h2>
                </div>
                <div class="p-3 mt-auto">
                    <p class="font-[jost] text-[14px] font-[500] leading-[20px] text-left text-[#380D37]">
                        We provide
                        you with the best after sell services. Any problem, you take it to us and we will solve it.</p>
                </div>
            </div>
            <div
                class=" rounded-[4px] shadow-[2px_2px_5px_2px_#0000001A] max-sm:mb-[10px] max-md:mb-[10px] max-lg:mb-[10px]">
                <div>
                    <img class="p-3 mx-auto w-[116px] h-[116px]" src="/storage/product/best-price-1.svg"
                        alt="Product">
                    <h2
                        class="h-[100px] px-1 py-4 text-[#DC275C] font-[jost] text-[24px] font-[500] leading-[35px] text-center ">
                        Best Price in Market</h2>
                </div>
                <div class="p-3 mt-auto">
                    <p class="font-[jost] text-[14px] font-[500] leading-[20px] text-left text-[#380D37]">
                        We will give
                        you the best and lowest possible price in market.</p>
                </div>
            </div>
            <div
                class="rounded-[4px] shadow-[2px_2px_5px_2px_#0000001A] max-sm:mb-[10px] max-md:mb-[10px] max-lg:mb-[10px]">
                <div class="">
                    <img class="p-3 mx-auto w-[116px] h-[116px]" src="/storage/product/fast-delivery-1.svg"
                        alt="Product">

                    <h2
                        class="h-[100px] px-1 py-4 text-[#DC275C] font-[jost] text-[24px] font-[500] leading-[35px] text-center ">
                        Fast Delivary</h2>
                </div>
                <div class="p-3 mt-auto">
                    <p class="font-[jost] text-[14px] font-[500] leading-[20px] text-left text-[#380D37]">
                        We deliver
                        our products carefully as fast as possible at your door step.
                    </p>
                </div>
            </div>
    </section>
    <!-- What our client says  -->
    <section class="mt-16 max-xl:mt-4">
        <h2
            class="mb-12 max-lg:mb-4 font-[jost] font-[500] text-center text-[42px] max-lg:text-[30px] max-md:text-[25px] max-sm:text-[24px] text-[#353535]">
            What Our Clients Say About
            Us</h2>
        <style>
            .owl-nav {
                gap: {{ (count($reviews) + 5) * 10 + 200 }}px !important;
            }

            @media only screen and (max-width: 640px) {
                .owl-nav {
                    gap: {{ (count($reviews) + 5) * 10 + 80 }}px !important;
                }
            }
        </style>
        <div class="container mx-auto">
            <section id="slider" class="pt-5 mx-auto">
                <div class="container mx-auto">
                    <h1 class="text-center"><b>Responsive Owl Carousel</b></h1>
                    <div class="slider">
                        <div class="owl-carousel">
                            @foreach ($reviews as $review)
                                <div
                                    class="slider-card rounded-[16px] py-4 px-4 bg-[#fff] shadow-[2px_2px_5px_2px_#0000001A]">
                                    <div class="">
                                        <div class="flex justify-center">
                                            <div class="flex items-center">
                                                <div>
                                                    <img class="rounded-[100%] w-[72px] h-[72px] client-img"
                                                        src="/storage/@if ($review->user?->photo) {{ $review->user->photo }}@else{{ 'default/face.png' }} @endif"
                                                        alt="">
                                                </div>
                                                <div class="ml-2">
                                                    <h1
                                                        class="font-[Lato] font-[700] leo-h text-[24px] text-center text-[#353535]">
                                                        {{ $review->name }}
                                                    </h1>
                                                </div>
                                            </div>

                                            <div class="flex star-div mt-[40px]  ml-auto">
                                                @foreach ([1, 2, 3, 4, 5] as $star)
                                                    <a href="javascript:void(0)">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                            height="22" class="star" viewBox="0 0 22 22"
                                                            fill="#FFA033">
                                                            <path
                                                                d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                                fill="#FFA033" stroke="#FFA033"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </a>
                                                @endforeach

                                                {{-- <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="22" height="22" class="star"
                                                        viewBox="0 0 22 22" fill="#FFA033">
                                                        <path
                                                            d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                            fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg></a>

                                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="22" height="22" class="star"
                                                        viewBox="0 0 22 22" fill="#FFA033">
                                                        <path
                                                            d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                            fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg></a>

                                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="22" height="22" class="star"
                                                        viewBox="0 0 22 22" fill="#FFA033">
                                                        <path
                                                            d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                            fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg></a>

                                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="22" height="22" class="star"
                                                        viewBox="0 0 15 15" fill="none">
                                                        <path
                                                            d="M7.5 1.25L9.43125 5.1625L13.75 5.79375L10.625 8.8375L11.3625 13.1375L7.5 11.1062L3.6375 13.1375L4.375 8.8375L1.25 5.79375L5.56875 5.1625L7.5 1.25Z"
                                                            stroke="#FFA033" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg></a> --}}
                                            </div>
                                            <!-- </div> -->
                                        </div>
                                        <div>
                                            <h1
                                                class="my-[19px] leo-h1 leo-h1 font-[Lato] font-[700] text-[24px] text-center text-[#353535] leading-[28.8px]">
                                                {{ $review->subject }}
                                            </h1>
                                        </div>
                                        <div>
                                            <p
                                                class="my-[17px] leo-p1 leo-p1 font-[jost] font-[500] text-[18px] leading-[23.13px] text-left text-[#353535]">
                                                {{ $review->msg }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <div class="mt-16 h-[2px] bg-[#380D37]"></div>

</div>
@script
    <script>
        // ----hero--section---
        // main banner slider funcito

        // Hero section slide
        $('#move_back').on('click', function() {
            let total_slide = $('.slide').length;
            let current_slide = Number($(this).attr('value')) - 1;
            if (current_slide < 1) {
                current_slide = total_slide - 1;
            }
            $('.slide').hide();
            $('.slide').eq(current_slide).show();
            $('.slide_icon').attr('value', current_slide);
            $(this).addClass('slide-active');
            $('#move_front').removeClass('slide-active')
        });

        $('#move_front').on('click', function() {
            let total_slide = $('.slide').length;
            let current_slide = Number($(this).attr('value')) + 1;
            if (current_slide > total_slide - 1) {
                current_slide = 0;
            }
            $('.slide').hide();
            $('.slide').eq(current_slide).show();
            $('.slide_icon').attr('value', current_slide);
            $(this).addClass('slide-active');
            $('#move_back').removeClass('slide-active')
        });

        // hero---section--end-----
        $(document).ready(function() {
            $('.usa_btn').each(function(index) {
                $(this).on('click', function() {
                    $(this).addClass('bg-[#380D37] text-[#F2F2F2]');
                    $(this).removeClass('bg-[#F2F2F2] text-[#380D37]');
                    $('.asian_btn').eq(index).removeClass('bg-[#380D37] text-[#F2F2F2]')
                    $('.asian_btn').eq(index).addClass('bg-[#F2F2F2] text-[#380D37]');
                    $('.asian_prds').eq(index).hide();
                    $('.usa_prds').eq(index).show();
                });
            });
            $('.asian_btn').each(function(index) {
                $(this).on('click', function() {
                    $(this).addClass('bg-[#380D37] text-[#F2F2F2]');
                    $(this).removeClass('bg-[#F2F2F2] text-[#380D37]');
                    $('.usa_btn').eq(index).removeClass('bg-[#380D37] text-[#F2F2F2]')
                    $('.usa_btn').eq(index).addClass('bg-[#F2F2F2] text-[#380D37]');
                    $('.usa_prds').eq(index).hide();
                    $('.asian_prds').eq(index).show();

                });
            });

            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: true,
                pagination: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                center: true,
                navText: [
                    '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-18 h-9 arrow"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" /></svg>',
                    '<svg xmlns="http:www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-18 h-9 arrow"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /> </svg>'
                ],
                responsive: {
                    0: {
                        items: 1,

                    },
                    640: {
                        items: 1,


                    },
                    1024: {
                        items: 3,


                    }
                }
            });
        });
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 5,
            spaceBetween: 5,
            // freeMode: true,
            // cssMode: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            // pagination: {
            //     el: ".swiper-pagination",
            // },
            mousewheel: true,
            keyboard: true,
            breakpoints: {
                // when window width is >= 320px
                300: {
                    slidesPerView: 2,
                    spaceBetween: 2
                },
                // when window width is >= 480px
                // 640: {
                // slidesPerView: 2,
                // spaceBetween: 20
                // },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 5
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 5
                },
                1280: {
                    slidesPerView: 5,
                    spaceBetween: 5
                },
                // ...
            }

        });
    </script>
@endscript
