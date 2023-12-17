<div class="px-[100px] max-md:px-[45px] max-lg:px-[70px] max-sm:px-[15px] mx-auto max-sm:mt-[70px] max-xl:mt-[100px]">

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
        <section>
            <div class="relative container " x-data="{ active: true }">
                @php
                    $bnrs = explode(',', $home_banner->photo);
                @endphp
                @foreach ($bnrs as $banner)
                    <div class="{{ $loop->first ? '' : ' hidden' }} slide w-full object-fill bg-cover bg-center">
                        <img class="w-full bg-cover bg-center" src="{{ $banner }}">
                    </div>
                @endforeach
                <!-- The previous button -->
             <div>
                <a id="move_back" value='0'
                class="slide_icon absolute left-0 top-1/2 p-4 -translate-y-1/2 -translate-x-[42px] text-[40px] text-blue-500 opacity-50 hover:opacity-100 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[18px] h-[36px] max-md:w-[25px] max-md:h-[20px]"
                    viewBox="0 0 23 40" fill="none">
                    <path d="M21 2L3 20L21 38" stroke="#999999" stroke-opacity="1" stroke-width="5" />
                </svg>
            </a>
            <!-- The next button -->
            <a id="move_front" value='0'
                class="slide_icon absolute right-0 top-1/2 p-4 -translate-y-1/2 translate-x-[42px] text-[40px] text-blue-500 opacity-50 hover:opacity-100 cursor-pointer"><svg
                    xmlns="http://www.w3.org/2000/svg" class="w-[18px] h-[36px] max-md:w-[25px] max-md:h-[20px]"
                    viewBox="0 0 23 40" fill="none">
                    <path :class="{ 'text-[black]': active }" d="M2 2L20 20L2 38" stroke="#999999"
                        stroke-opacity="0.5" stroke-width="5" />
                </svg>
            </a>
             </div>
            </div>
        
        </section>
    @endif
    <!-- --------hero--section --end ----  -->

    <!-- Feature Laptops -->
    <section class='mt-[50px]'>
        <div class="py-1 text-center">
            <h2
                class="font-[jost] text-[40px] font-[500] max-lg:text-[30px] max-md:text-[25px] max-sm:text-[24px] text-[#353535]">
                Featured Laptops </h2>
            <p
                class="font-[jost] text-[16px] font-[500] max-lg:text-[14px] max-md:text-[12px] max-sm:text-[12px] text-[#380D37]">
                The best we offer is here</p>
        </div>
        <div class="pt-[60px]">
            <button
                class="usa_btn w-[241px] max-xl:w-[200px] max-lg:w-[180px] max-md:w-[150px] max-sm:w-[100px] h-[48px] max-lg:h-[43px] max-md:h-[40px] max-sm:h-[35px] max-lg:text-[18px] max-md:text-[16px] max-sm:text-[14px]
                items-center text-center rounded-[4px] bg-[#380D37] text-[#F2F2F2] font-[500] text-[20px] font-[jost]">
                USA
            </button>
            <button
                class="asian_btn w-[241px] max-xl:w-[200px] max-lg:w-[180px] max-md:w-[150px] max-sm:w-[100px]  h-[48px] max-lg:h-[43px] max-md:h-[40px] max-sm:h-[35px] max-lg:text-[18px] max-md:text-[16px] max-sm:text-[14px]
                items-center text-center rounded-[4px] bg-[#F2F2F2] text-[#380D37] font-[500] text-[20px] font-[jost]">
                ASIAN
            </button>
            <div class="h-[2px] bg-[#380D37] rouned-[2px]"></div>
        </div>
        <!-- Product  -->
        <div class="usa_prds">
            <div
                class="grid grid-cols-5 max-sm:grid-cols-2 max-md:grid-cols-2 max-lg:grid-cols-3 max-xl:grid-cols-4 gap-2 mt-6 mb-[78px] max-sm:mb-[50px]">
                @foreach ($features->where('cat_id', 7) as $product)
                    <x-product :product="$product"></x-product>
                    {{-- <livewire:products :product="$product" /> --}}
                @endforeach
            </div>
        </div>

        <div class="hidden asian_prds">
            <div
                class="grid grid-cols-5 max-md:grid-cols-2  max-lg:grid-cols-3 max-xl:grid-cols-4 gap-2 mt-6 mb-[78px] max-sm:mb-[50px]">
                @foreach ($features->where('cat_id', 6) as $product)
                    <x-product :product="$product"></x-product>
                    {{-- <livewire:products :product="$product" /> --}}
                @endforeach
            </div>
        </div>
    </section>
    <!-- New arrival  -->
    <section>
        <!-- heading -->
        <div
            class=" fill-up-btn h-[130px] max-sm:h-[52px] max-md:h-[68px] max-lg:h-[85px] max-xl:h-[100px]  flex justify-center items-center text-white bg-gradient-to-r from-[#380D37] to-[#DC275C]">

            <h1
                class="text-[40px] max-sm:text-[18px] max-md:text-[22px] max-lg:text-[30px] max-xl:text-[35px] text-[#f2f2f2] font-[jost] font-[500] text-center">
                New Arrival</h1>
        </div>

        <!-- banner  -->
        <div class="grid grid-cols-3 max-sm:grid-cols-1 max-md:grid-cols-1 mt-6 mb-5 max-sm:mt-[.5rem]">
            <div class="">
                <div
                    class="pt-[20px] flex justify-center font-[jost] font-[500]
                     text-[52px] max-sm:text-[24px] max-md:text-[34px] max-lg:text-[32px] max-xl:text-[38px]  text-[#DC275C] ">
                    <p
                        class="max-sm:text-center max-md:text-center leading-[75.14px] max-sm:leading-[30px] max-md:leading-[54px] max-lg:leading-[42px] max-xl:leading-[50px]">
                        Our newest</br>products are</br>here,just for you!</p>
                </div>
                <div class='flex justify-center items-center'>
                    <a href="{{ route('new_product', 'new_product') }}" wire:navigate  class="fill-up-btn linear px-[20px] py-[10px] mt-[20px] font-[jost] font-[500] text-[16px] text-[#F2F2F2] rounded-[4px]">
                        Visit Now
                    </a>
                </div>
            </div>

            <div class="col-span-2 max-md:mt-[20px]">
                <img class="" src="/storage/product/Hero-Image.svg" alt="">
            </div>
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
    <!-- Feature Laptops Sliders -->
    <section>
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

        {{-- Swiper slide  --}}
        {{-- <div class="usa_prds">
            <div class="relative mx-auto overflow-hidden swiper-container mySwiper">
                <div class="swiper-wrapper gap-[5px] py-[20px]">
                    @foreach ($features->where('cat_id', 7) as $f_product)
                        <div class="swiper-slide">
                            <div
                                class="w-[221px] mx-auto flex flex-col bg-white p-2 gap-[16px] text-left shadow-[2px_2px_5px_2px_#0000001A]">
                                <div class="relative max-w-xs overflow-hidden bg-no-repeat bg-cover
                                    data-te-ripple-init data-te-ripple-color="light">
                                    <a href="{{ route('product.details', [$f_product->slug]) }}" wire:navigate>
                                        <img src="{{ $f_product->img()[0] }}" alt="Product"></a>
                                    <a href="{{ route('product.details', [$f_product->slug]) }}" wire:navigate>
                                        <div
                                            class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-50">
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="{{ route('product.details', [$f_product->slug]) }}" wire:navigate>
                                        <p
                                            class="text-[16px] text-[#380D37] font-[jost] font-[500] leading-[23.12px] transition duration-150 ease-in-out hover:text-[#ef4a23] decoration-[#ef4a23] decoration-2 hover:underline hover:underline-offset-4">
                                            {{ $f_product->title }}
                                        </p>
                                    </a>
                                </div>
                                <div
                                    class="flex justify-between gap-5 text-[14px] font-[jost] font-[700] py-[10px] mt-auto leading-[20.23px]">
                                    <span class="text-[#DC275C]">{{ number_format($f_product->final_price) }} TK</span>
                                    <livewire:add-to-cart :id="$f_product->id"
                                        button='<a class="text-[#380D37]">Add to Cart</a>' />

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
            <div class="relative">
                <div class="swiper-button-next translate-x-[55px] max-sm:translate-x-[20px] translate-y-[-192px] bs">
                </div>
                <div class="swiper-button-prev translate-x-[-40px] max-sm:translate-x-[-20px] translate-y-[-192px] bs">
                </div>
            </div>
        </div> --}}

        {{-- <div class="hidden asian_prds">
            <div class="relative mx-auto overflow-hidden swiper-container mySwiper">

                <div class="swiper-wrapper gap-[5px] py-[20px]">
                    @foreach ($features->where('cat_id', 6) as $a_product)
                        <div class="swiper-slide">
                            <div
                                class="w-[221px] mx-auto flex flex-col bg-white p-2 gap-[16px] text-left shadow-[2px_2px_5px_2px_#0000001A]">
                                <div class="relative max-w-xs overflow-hidden bg-no-repeat bg-cover
                                    data-te-ripple-init data-te-ripple-color="light">
                                    <a href="{{ route('product.details', [$a_product->slug]) }}" wire:navigate>
                                        <img src="{{ $a_product->img()[0] }}" alt="Product"></a>
                                    <a href="{{ route('product.details', [$a_product->slug]) }}" wire:navigate>
                                        <div
                                            class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-50">
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="{{ route('product.details', [$a_product->slug]) }}" wire:navigate>
                                        <p
                                            class="text-[16px] text-[#380D37] font-[jost] font-[500] leading-[23.12px] transition duration-150 ease-in-out hover:text-[#ef4a23] decoration-[#ef4a23] decoration-2 hover:underline hover:underline-offset-4 transition duration-150 ease-in-out hover:text-[#ef4a23] decoration-[#ef4a23] decoration-2 hover:underline hover:underline-offset-4">
                                            {{ $a_product->title }}
                                        </p>
                                    </a>
                                </div>
                                <div
                                    class="flex flex justify-between gap-5 text-[14px] font-[jost] font-[700] py-[10px] mt-auto leading-[20.23px]">
                                    <span class="text-[#DC275C]">{{ number_format($a_product->final_price) }} TK</span>
                                    <livewire:add-to-cart :id="$a_product->id"
                                        button='<a class="text-[#380D37]">Add to Cart</a>' />

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
            <div class="relative">
                <div class="swiper-button-next translate-x-[55px] max-sm:translate-x-[20px] translate-y-[-192px] bs">
                </div>
                <div class="swiper-button-prev translate-x-[-40px] max-sm:translate-x-[-20px] translate-y-[-192px] bs">
                </div>
            </div>
        </div> --}}

        {{-- Swiper for usa  --}}
        <div class="usa_prds">
            <!-- Swiper -->
            <div class="swiper mySwiper mt-[20px] mb-[20px]">
                <div class="swiper-wrapper">
                    @foreach ($features->where('cat_id', 7) as $f_product)
                    <div class="swiper-slide">
                        <div
                            class="w-[221px] max-xl:w-full mx-auto max-sm:mb-[10px] max-md:mb-[10px] max-md:gap-[8px] flex flex-col bg-white p-2 gap-[16px] text-left shadow-[2px_2px_5px_2px_#0000001A]">
                            <div class="image-container">
                                <div>
                                    <a href="{{ route('product.details', [$f_product->slug]) }}" wire:navigate>
                                        <img src="{{ $f_product->img()[0] }}" alt="">
                                    </a>
                                </div>
                                <div class="mb-auto">
                                    <a href="{{ route('product.details', [$f_product->slug]) }}" wire:navigate
                                        class="mb-auto text-[16px] text-[#380D37] font-[jost] font-[500] leading-[23.12px] transition duration-300 ease-in-out hover:text-[#ef4a23] decoration-[#ef4a23] decoration-2 hover:underline hover:underline-offset-4">
                                          {{ Str::of($f_product->title)->words(5) }}
                                    </a>
                                </div>
                            </div>

                            <div
                                class=" flex justify-between gap-5 text-[14px] mt-auto font-[jost] font-[700] py-[10px] leading-[20.23px]">
                                <span class=" text-[#DC275C]">
                                    {{ number_format($f_product->final_price) }} TK
                                </span>
                                <livewire:add-to-cart :id="$f_product->id"
                                        button='<span class="text-[#380D37]">Add to Cart</span>' />
                            </div>
                        </div>
                    </div>
                    @endforeach
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

            <!-- Swiper JS -->
            <!-- Initialize Swiper -->
        </div>

        {{-- swiper for asian laptop --}}
        <div class="hidden asian_prds">
            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($features->where('cat_id', 6) as $a_product)
                    <div class="swiper-slide">
                        <div
                            class="w-[221px]  mx-auto max-sm:mb-[10px] max-md:mb-[10px] max-md:gap-[8px] flex flex-col bg-white p-2 gap-[16px] text-left shadow-[2px_2px_5px_2px_#0000001A]">
                            <div>
                                <div>
                                    <a href="{{ route('product.details', [$a_product->slug]) }}" wire:navigate>
                                        <img src="{{ $a_product->img()[0] }}" alt="">
                                    </a>
                                </div>
                                <div class="mb-auto">
                                    <a href="{{ route('product.details', [$a_product->slug]) }}" wire:navigate
                                        class="mb-auto text-[16px] text-[#380D37] font-[jost] font-[500] leading-[23.12px] transition duration-300 ease-in-out hover:text-[#ef4a23] decoration-[#ef4a23] decoration-2 hover:underline hover:underline-offset-4">
                                       {{ $a_product->title }}
                                    </a>
                                </div>
                            </div>

                            <div
                                class="flex justify-between gap-5 text-[14px] mt-auto font-[jost] font-[700] py-[10px] leading-[20.23px]">
                                <span class=" text-[#DC275C]">
                                    {{ number_format($a_product->final_price) }} TK
                                </span>
                                <a class="text-[#380D37]">
                                    Add to Cart
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
                <div class="swiper-pagination"></div>
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
            <div class="container h-[2px] bg-[#380D37]"></div>
        </div>
        {{-- @dd($dpds) --}}
        {{-- <!-- Product  --> --}}
        <div class="usa_prds">
            <div
                class="grid grid-cols-5 max-md:grid-cols-2 max-lg:grid-cols-3 max-xl:grid-cols-4 gap-2 mt-6 mb-[78px] max-sm:mb-[50px]">
                @foreach ($dpds->where('cat_id', 6) as $d_product)
                    <x-product :product="$d_product"></x-product>
                @endforeach
            </div>
        </div>
        {{-- @dd($dpds->where('cat_id', 7)) --}}
        <div class="hidden asian_prds">
            <div
                class="grid grid-cols-5 max-md:grid-cols-2 max-lg:grid-cols-3 max-xl:grid-cols-4 gap-2 mt-6 mb-[78px] max-sm:mb-[50px]">
                @foreach ($dpds->where('cat_id', 7) as $da_product)
                    <x-product :product="$da_product"></x-product>
                @endforeach
            </div>
        </div>

        <!-- See more button  -->

    </section>
    <div>

        <a href="{{ route('shop') }}" wire:navigate>
            <a
                class="fill-up-btn items-center justify-center flex my-[60px] mx-auto text-[16px] text-[#F2F4F8] w-[116px] h-[44px] rounded-[4px] bg-gradient-to-r from-[#380D37] to-[#DC275C]">
                 See More
            </a>
        </a>
        <div class="h-[2px] bg-[#380D37]"></div>
    </div>
    <!-- Currention code from this line upto footer  -->
    <section class="#about-us">
        <div>
            <h2
                class="mt-8 font-[jost] font-[500] text-center text-[40px] max-lg:text-[30px] max-md:text-[25px] max-sm:text-[24px] text-[#353535]">
                Why Choose Us?</h2>
        </div>
        <div
            class="grid grid-cols-5 max-sm:grid-cols-1 max-sm:gap-[2px] max-md:grid-cols-2 max-md:gap-[4px] max-lg:grid-cols-3 max-xl:grid-cols-4 gap-2 my-[50px] ">
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
                        class="px-1 py-4 text-[#DC275C] font-[jost] text-[24px] font-[500] leading-[35px] text-center ">
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
                        class="px-1 py-4 text-[#DC275C] font-[jost] text-[24px]  font-[500] leading-[35px] text-center ">
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
                        class="px-1 py-4 text-[#DC275C] font-[jost] text-[24px] font-[500] leading-[35px] text-center ">
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
                        class="px-1 py-4 text-[#DC275C] font-[jost] text-[24px] font-[500] leading-[35px] text-center ">
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
                        class="px-1 py-4 text-[#DC275C] font-[jost] text-[24px] font-[500] leading-[35px] text-center ">
                        Fast Delivary</h2>
                </div>
                <div class="p-3 mt-auto">
                    <p class="font-[jost] text-[14px] font-[500] leading-[20px] text-left text-[#380D37]">
                        We deliver
                        our products carefully as fast as possible at your door step.</p>
                </div>
            </div>
    </section>
    <!-- What our client says  -->
    <section class="mt-16 max-xl:mt-4">
        <h2
            class="mb-12 max-lg:mb-4 font-[jost] font-[500] text-center text-[42px] max-lg:text-[30px] max-md:text-[25px] max-sm:text-[24px] text-[#353535]">
            What Our Clients Say About
            Us</h2>
        <div class="container mx-auto">

            <section id="slider" class="pt-5 mx-auto">
                <div class="container mx-auto">
                    {{-- <h1 class="text-center"><b>Responsive Owl Carousel</b></h1> --}}
                    <div class="slider">
                        <div class="owl-carousel">
                            <div
                                class="slider-card rounded-[16px] py-4 px-4 bg-[#fff] shadow-[2px_2px_5px_2px_#0000001A]">
                                <div class="">
                                    <div class="flex justify-center">
                                        <div class="flex items-center">
                                            <div>
                                                <img class="rounded-[100%] w-[72px] h-[72px] client-img"
                                                    src="/storage/product/client-photo.svg" alt="">
                                            </div>
                                            <div class="ml-2">
                                                <h1
                                                    class="font-[Lato] font-[700] leo-h text-[24px] text-center text-[#353535]">
                                                    Leo</h1>
                                                <p
                                                    class="font-[Lato] font-[500] leo-p text-[18px] text-center text-[#353535]">
                                                    Lead Designer</p>
                                            </div>
                                        </div>

                                        <div class="flex star-div mt-[40px]  ml-auto">

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                    height="22" class="star" viewBox="0 0 22 22"
                                                    fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                    height="22" class="star" viewBox="0 0 22 22"
                                                    fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                    height="22" class="star" viewBox="0 0 22 22"
                                                    fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                    height="22" class="star" viewBox="0 0 22 22"
                                                    fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                    height="22" class="star" viewBox="0 0 15 15"
                                                    fill="none">
                                                    <path
                                                        d="M7.5 1.25L9.43125 5.1625L13.75 5.79375L10.625 8.8375L11.3625 13.1375L7.5 11.1062L3.6375 13.1375L4.375 8.8375L1.25 5.79375L5.56875 5.1625L7.5 1.25Z"
                                                        stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                    <div>
                                        <h1
                                            class="my-[19px] leo-h1 leo-h1 font-[Lato] font-[700] text-[24px] text-center text-[#353535] leading-[28.8px]">
                                            It was a very good experience</h1>
                                    </div>
                                    <div>
                                        <p
                                            class="my-[17px] leo-p1 leo-p1 font-[jost] font-[500] text-[18px] leading-[23.13px] text-left text-[#353535]">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursusnibh mauris,
                                            nec turpis orci
                                            lectus maecenas.
                                            Suspendisse sed magnaeget nibh in turpis. Consequat duis diam lacus arcu.
                                            Faucibus venenatis
                                            felis id augue
                                            sit cursus pellentesqueenim arcu.Elementum felis magna pretium in tincidunt.
                                            Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacUSArcu.s
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="slider-card rounded-[16px] py-4 px-4 bg-[#fff] shadow-[2px_2px_5px_2px_#0000001A]">
                                <div class="">
                                    <div class="flex justify-center">
                                        <div class="flex items-center">
                                            <div>
                                                <img class="rounded-[100%] w-[72px] h-[72px] client-img"
                                                    src="/storage/product/client-photo.svg" alt="">
                                            </div>
                                            <div class="ml-2">
                                                <h1
                                                    class="font-[Lato] text-[24px] font-[700]  text-center text-[#353535] leo-h">
                                                    Leo</h1>
                                                <p
                                                    class="font-[Lato] text-[18px] font-[500] text-center text-[#353535] leo-p">
                                                    Lead Designer</p>
                                            </div>
                                        </div>

                                        <div class="flex mt-[40px] ml-auto star-div">

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                    class="star" height="22" viewBox="0 0 22 22"
                                                    fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                    class="star" height="22" viewBox="0 0 22 22"
                                                    fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                    class="star" height="22" viewBox="0 0 22 22"
                                                    fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                    class="star" height="22" viewBox="0 0 22 22"
                                                    fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                    class="star" height="22" viewBox="0 0 15 15"
                                                    fill="none">
                                                    <path
                                                        d="M7.5 1.25L9.43125 5.1625L13.75 5.79375L10.625 8.8375L11.3625 13.1375L7.5 11.1062L3.6375 13.1375L4.375 8.8375L1.25 5.79375L5.56875 5.1625L7.5 1.25Z"
                                                        stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                    <div>
                                        <h1
                                            class="my-[19px] leo-h1 font-[Lato] font-[700] text-[24px]  text-center text-[#353535] leading-[28.8px]">
                                            It was a very good experience</h1>
                                    </div>
                                    <div>
                                        <p
                                            class="my-[17px] leo-p1 font-[jost] font-[500] text-[18px] leading-[23.13px] text-left text-[#353535]">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursusnibh mauris,
                                            nec turpis orci
                                            lectus maecenas.
                                            Suspendisse sed magnaeget nibh in turpis. Consequat duis diam lacus arcu.
                                            Faucibus venenatis
                                            felis id augue
                                            sit cursus pellentesqueenim arcu.Elementum felis magna pretium in tincidunt.
                                            Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacUSArcu.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="slider-card rounded-[16px] py-4 px-4 bg-[#fff] shadow-[2px_2px_5px_2px_#0000001A]">
                                <div class="">
                                    <div class="flex justify-center">
                                        <div class="flex items-center">
                                            <div>
                                                <img class="rounded-[100%] w-[72px] h-[72px] client-img"
                                                    src="/storage/product/client-photo.svg" alt="">
                                            </div>
                                            <div class="ml-2">
                                                <h1
                                                    class="font-[Lato] text-[24px] font-[700]  text-center text-[#353535] leo-h">
                                                    Leo</h1>
                                                <p
                                                    class="font-[Lato] text-[18px] font-[500] text-center text-[#353535] leo-p">
                                                    Lead Designer</p>
                                            </div>
                                        </div>

                                        <div class="flex mt-[40px] ml-auto star-div">

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                    class="star" height="22" viewBox="0 0 22 22"
                                                    fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                    class="star" height="22" viewBox="0 0 22 22"
                                                    fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                    class="star" height="22" viewBox="0 0 22 22"
                                                    fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                    class="star" height="22" viewBox="0 0 22 22"
                                                    fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                    class="star" height="22" viewBox="0 0 15 15"
                                                    fill="none">
                                                    <path
                                                        d="M7.5 1.25L9.43125 5.1625L13.75 5.79375L10.625 8.8375L11.3625 13.1375L7.5 11.1062L3.6375 13.1375L4.375 8.8375L1.25 5.79375L5.56875 5.1625L7.5 1.25Z"
                                                        stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>
                                        </div>
                                        <!-- </div> -->
                                        <!-- </div> -->

                                    </div>
                                    <div>
                                        <h1
                                            class="my-[19px] leo-h1 font-[Lato] font-[700] text-[24px]  text-center text-[#353535] leading-[28.8px]">
                                            It was a very good experience</h1>
                                    </div>
                                    <div>
                                        <p
                                            class="my-[17px] leo-p1 font-[jost] font-[500] text-[18px] leading-[23.13px] text-left text-[#353535]">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursusnibh mauris,
                                            nec turpis orci
                                            lectus maecenas.
                                            Suspendisse sed magnaeget nibh in turpis. Consequat duis diam lacus arcu.
                                            Faucibus venenatis
                                            felis id augue
                                            sit cursus pellentesqueenim arcu.Elementum felis magna pretium in tincidunt.
                                            Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacUSArcu.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="slider-card rounded-[16px] py-4 px-4 bg-[#fff] shadow-[2px_2px_5px_2px_#0000001A]">
                                <div class="">
                                    <div class="flex justify-center">
                                        <div class="flex items-center">
                                            <div>
                                                <img class="rounded-[100%] w-[72px] h-[72px] client-img"
                                                    src="/storage/product/client-photo.svg" alt="">
                                            </div>
                                            <div class="ml-2">
                                                <h1
                                                    class="font-[Lato] text-[24px] font-[700]  text-center text-[#353535] leo-h">
                                                    Leo</h1>
                                                <p
                                                    class="font-[Lato] text-[18px] font-[500] text-center text-[#353535] leo-p">
                                                    Lead Designer</p>
                                            </div>
                                        </div>

                                        <div class="flex mt-[40px] ml-auto star-div">

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                    class="star" height="22" viewBox="0 0 22 22"
                                                    fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                    class="star" height="22" viewBox="0 0 22 22"
                                                    fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                    class="star" height="22" viewBox="0 0 22 22"
                                                    fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                    class="star" height="22" viewBox="0 0 22 22"
                                                    fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                    class="star" height="22" viewBox="0 0 15 15"
                                                    fill="none">
                                                    <path
                                                        d="M7.5 1.25L9.43125 5.1625L13.75 5.79375L10.625 8.8375L11.3625 13.1375L7.5 11.1062L3.6375 13.1375L4.375 8.8375L1.25 5.79375L5.56875 5.1625L7.5 1.25Z"
                                                        stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>
                                        </div>
                                        <!-- </div> -->
                                        <!-- </div> -->

                                    </div>
                                    <div>
                                        <h1
                                            class="my-[19px] leo-h1 font-[Lato] font-[700] text-[24px]  text-center text-[#353535] leading-[28.8px]">
                                            It was a very good experience</h1>
                                    </div>
                                    <div>
                                        <p
                                            class="my-[17px] leo-p1 font-[jost] font-[500] text-[18px] leading-[23.13px] text-left text-[#353535]">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursusnibh mauris,
                                            nec turpis orci
                                            lectus maecenas.
                                            Suspendisse sed magnaeget nibh in turpis. Consequat duis diam lacus arcu.
                                            Faucibus venenatis
                                            felis id augue
                                            sit cursus pellentesqueenim arcu.Elementum felis magna pretium in tincidunt.
                                            Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacUSArcu.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="slider-card rounded-[16px] py-4 px-4 bg-[#fff] shadow-[2px_2px_5px_2px_#0000001A]">
                                <div class="">
                                    <div class="flex justify-center">
                                        <div class="flex items-center">
                                            <div>
                                                <img class="rounded-[100%] w-[72px] h-[72px] client-img"
                                                    src="/storage/product/client-photo.svg" alt="">
                                            </div>
                                            <div class="ml-2">
                                                <h1
                                                    class="font-[Lato] text-[24px] font-[700]  text-center text-[#353535] leo-h">
                                                    Leo</h1>
                                                <p
                                                    class="font-[Lato] text-[18px] font-[500] text-center text-[#353535] leo-p">
                                                    Lead Designer</p>
                                            </div>
                                        </div>

                                        <div class="flex mt-[40px] ml-auto star-div">

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                    class="star" height="22" viewBox="0 0 22 22"
                                                    fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                    class="star" height="22" viewBox="0 0 22 22"
                                                    fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                    class="star" height="22" viewBox="0 0 22 22"
                                                    fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                    class="star" height="22" viewBox="0 0 22 22"
                                                    fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                    class="star" height="22" viewBox="0 0 15 15"
                                                    fill="none">
                                                    <path
                                                        d="M7.5 1.25L9.43125 5.1625L13.75 5.79375L10.625 8.8375L11.3625 13.1375L7.5 11.1062L3.6375 13.1375L4.375 8.8375L1.25 5.79375L5.56875 5.1625L7.5 1.25Z"
                                                        stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>
                                        </div>
                                        <!-- </div> -->
                                        <!-- </div> -->

                                    </div>
                                    <div>
                                        <h1
                                            class="my-[19px] leo-h1 font-[Lato] font-[700] text-[24px]  text-center text-[#353535] leading-[28.8px]">
                                            It was a very good experience</h1>
                                    </div>
                                    <div>
                                        <p
                                            class="my-[17px] leo-p1 font-[jost] font-[500] text-[18px] leading-[23.13px] text-left text-[#353535]">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursusnibh mauris,
                                            nec turpis orci
                                            lectus maecenas.
                                            Suspendisse sed magnaeget nibh in turpis. Consequat duis diam lacus arcu.
                                            Faucibus venenatis
                                            felis id augue
                                            sit cursus pellentesqueenim arcu.Elementum felis magna pretium in tincidunt.
                                            Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacUSArcu.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="slider-card rounded-[16px] py-4 px-4 bg-[#fff] shadow-[2px_2px_5px_2px_#0000001A]">
                                <div class="">
                                    <div class="flex justify-center">
                                        <div class="flex items-center">
                                            <div>
                                                <img class="rounded-[100%] w-[72px] h-[72px] client-img"
                                                    src="/storage/product/client-photo.svg" alt="">
                                            </div>
                                            <div class="ml-2">
                                                <h1
                                                    class="font-[Lato] text-[24px] font-[700]  text-center text-[#353535] leo-h">
                                                    Leo</h1>
                                                <p
                                                    class="font-[Lato] text-[18px] font-[500] text-center text-[#353535] leo-p">
                                                    Lead Designer</p>
                                            </div>
                                        </div>

                                        <div class="flex mt-[40px] ml-auto star-div">

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                    class="star" height="22" viewBox="0 0 22 22"
                                                    fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                    class="star" height="22" viewBox="0 0 22 22"
                                                    fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                    class="star" height="22" viewBox="0 0 22 22"
                                                    fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                    class="star" height="22" viewBox="0 0 22 22"
                                                    fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                    class="star" height="22" viewBox="0 0 15 15"
                                                    fill="none">
                                                    <path
                                                        d="M7.5 1.25L9.43125 5.1625L13.75 5.79375L10.625 8.8375L11.3625 13.1375L7.5 11.1062L3.6375 13.1375L4.375 8.8375L1.25 5.79375L5.56875 5.1625L7.5 1.25Z"
                                                        stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>
                                        </div>
                                        <!-- </div> -->
                                        <!-- </div> -->

                                    </div>
                                    <div>
                                        <h1
                                            class="my-[19px] leo-h1 font-[Lato] font-[700] text-[24px]  text-center text-[#353535] leading-[28.8px]">
                                            It was a very good experience</h1>
                                    </div>
                                    <div>
                                        <p
                                            class="my-[17px] leo-p1 font-[jost] font-[500] text-[18px] leading-[23.13px] text-left text-[#353535]">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursusnibh mauris,
                                            nec turpis orci
                                            lectus maecenas.
                                            Suspendisse sed magnaeget nibh in turpis. Consequat duis diam lacus arcu.
                                            Faucibus venenatis
                                            felis id augue
                                            sit cursus pellentesqueenim arcu.Elementum felis magna pretium in tincidunt.
                                            Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacUSArcu.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <div class="mt-16 h-[2px] bg-[#380D37] container"></div>
    <!-- Drop/submit a review  -->
    <section class="mt-16 mb-5 max-md:mt-6">
        <div
            class="text-center text-[#380D37] text-[42px] font-[jost] font-[500] max-md:my-[35px] leading-[61px] max-sm:leading-[5px]">
            <h1 class="max-sm:text-[25px] max-md:text-[] max-lg:text-[] max-xl:text-[]"> Please Drop a Review!</h1>
        </div>
        <div class="grid grid-cols-2 max-sm:grid-cols-1 max-md:grid-cols-1 max-lg:grid-cols-2 mt-20 max-sm:mt-[15px]">
            <div>
                <div>
                    <h1
                        class="text-[52px] text-[#DC275C] max-sm:text-[30px] max-md:text-[] max-lg:text-[35px] max-xl:text-[45px] max-md:text-center font-[500] font-[jost] leading-[75.14px] max-sm:leading-[30px] max-lg:leading-[50px] max-xl:leading-[52px]">
                        We Believe In The
                        </br> Power Of </br> Communication</h1>
                </div>
                <div>
                    <p
                        class="mt-8 text-[#353535] text-[24px] max-sm:text-[12px] max-md:text-[] max-lg:text-[20px] max-xl:text-[22px] max-md:text-center font-[jost] font-[500] leading-[30px] max-sm:leading-[20px]">
                        Share your
                        experience with us.</br> Drop a comment and we will look into it.</p>
                </div>
            </div>
            <form wire:submit="post"
                class="max-md:border-[1px] max-md:border-[#380D37] max-md:rounded-[4px] max-sm:p-[10px] max-md:p-[15px] max-sm:mt-[15px] max-md:my-[22px]">

                <div class="grid grid-cols-2 gap-2">
                    <input wire:model="name"
                        class=" h-[64px] max-sm:h-[40px] max-lg:h-[55px] rounded-[4px] bg-[#F2F2F2] font-[jost] text-[16px] max-sm:text-[12px] italic font-[500] leading-[23px] py-[8px] px-[16px] max-sm:pl-[12px]"
                        id="name" type="text" placeholder="Name*">
                    @error('name')
                        <span class="text-[red] text-[12px]">{{ $message }}</span>
                    @enderror
                    <input wire:model="email"
                        class=" h-[64px] max-sm:h-[40px] max-lg:h-[55px] rounded-[4px] bg-[#F2F2F2] font-[jost] text-[16px] max-sm:text-[12px] italic font-[500] leading-[23px]  py-[8px] px-[16px]"
                        id="email" type="email" placeholder="Email*">
                    @error('email')
                        <span class="text-[red] text-[12px]">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <input wire:model="subject"
                        class=" h-[64px] max-sm:h-[40px] max-lg:h-[55px] rounded-[4px] w-full py-2 px-3 bg-[#F2F2F2] font-[jost] text-[16px] max-sm:text-[12px] mt-[20px] mb-[20px] italic font-[500] "
                        id="subject" type="text" placeholder="Subject(optional)">
                    @error('subject')
                        <span class="text-[red] text-[12px]">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <textarea wire:model='msg'
                        class="h-[271px] max-sm:h-[150px] max-lg:h-[220px] max-xl:h-[230px] rounded-[4px] w-full py-2 pb-32 px-3 bg-[#F2F2F2] font-[jost] text-[16px] max-sm:text-[12px]  italic font-[500] "
                        id="message" rows="4" placeholder=" Message"></textarea>
                    @error('msg')
                        <span class="text-[red] text-[12px]">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex items-center max-md:justify-center">
                    @if ($post_success_msg)
                        <span class="block text-[green]">{{ $post_success_msg }}</span>
                    @endif
                    @if ($post_error_msg)
                        <span class="block text-[red]">{{ $post_error_msg }}</span>
                    @endif

                    <a
                        class="fill-up-btn text-[#f2f2f2] text-center text-[16px] h-[44px] px-[40px] py-[10px] rounded-[4px] font-[500] font-[jost] mt-[15px]  bg-gradient-to-r from-[#380D37] to-[#DC275C] "
                        type="submit">
                        Post
                        <div wire:loading
                            class="absolute right-0 inline-block h-6 w-6 mr-2 animate-spin rounded-full border-4 border-solid border-current border-r-transparent align-[-0.125em] text-success motion-reduce:animate-[spin_1.5s_linear_infinite]"
                            role="status">
                            <span
                                class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Loading...
                            </span>
                        </div>
                    </a>
                </div>
            </form>
        </div>
    </section>
</div>
@script
    <script>
        // ----hero--section---
                 // Hero section slide
                 $('#move_back').on('click', function() {
                        console.log($(this).attr('value'));
                        let current_slide = Number($(this).attr('value')) - 1;
                        let total_slide = $('.slide').length;
                        console.log(current_slide, total_slide, 'yes');
                        // if(current_slide>=total_slide){
                        //     current_slide == 1
                        // }
                        if (current_slide < 0) {

                            current_slide = 2;
                            console.log(current_slide, total_slide, 'after if');
                        }
                        $('.slide').hide();
                        $('.slide').eq(current_slide).show();
                        $('.slide_icon').attr('value', current_slide);
                        $(this).addClass('slide-active');
                        $('#move_front').removeClass('slide-active')
                    })
                    $('#move_front').on('click', function() {
                        console.log($(this).attr('value'));
                        let current_slide = Number($(this).attr('value')) + 1;
                        let total_slide = $('.slide').length;
                        console.log(current_slide, total_slide, 'yes');
                        // if(current_slide>=total_slide){
                        //     current_slide == 1
                        // }
                        if (current_slide > 2) {

                            current_slide = 0;
                            console.log(current_slide, total_slide, 'after if');
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
                        items: 1
                    },
                    640: {
                        items: 1
                    },
                    1024: {
                        items: 3
                    }
                }
            });
        });
        var swiper = new Swiper(".mySwiper", {
                    slidesPerView: 5,
                    spaceBetween: 10,
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
                    375: {
                    slidesPerView: 2,
                    spaceBetween: 10
                    },
                    // when window width is >= 480px
                    640: {
                    slidesPerView: 3,
                    spaceBetween: 20
                    },
                    768: {
                    slidesPerView: 4,
                    spaceBetween: 20
                    },
                    1024: {
                    slidesPerView: 5,
                    spaceBetween: 20
                    },
                    1280: {
                    slidesPerView: 5,
                    spaceBetween: 20
                    },
                    // ...
                }

                });
    </script>
@endscript
