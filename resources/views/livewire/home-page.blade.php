<x-slot name='styles'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
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

<div class="container mx-auto lg:px-16 blurH">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
        .swiper-slide {
            text-align: center;
            font-size: 18px;
            /* background: #fff; */

            Center slide text vertically display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
            margin-right: 10px: !important
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .bs {
            color: #99999980;
        }

        .bs:hover {
            color: #be13f880;
        }
    </style>
    <form method="POST" action="{{ route('logout') }}" class="hidden">
        @csrf
        <button class="p4 bg-[red] rounded">Logout</button>
    </form>
    {{-- Alert message  --}}
    @if ($success = session('success'))
        <script>
            toastr.success("{{ $success }}")
        </script>
    @endif
    <!-- Hero Section  -->
    <section>
        <div class="relative max-xl:top-[68px]" x-data="{ active: true }">
            <div class="relative slide">
                <img class="container" src="/storage/product/Hero-Image.svg">
            </div>
            <div class="relative hidden slide">
                <img class="container" src="/storage/product/Hero-Image.svg">
            </div>
            <div class="relative hidden slide">
                <img class="container" src="/storage/product/Hero-Image.svg">
            </div>
            <!-- The previous button -->
            <a class="absolute left-0 top-1/2 p-4 -translate-y-1/2 -translate-x-[42px] text-[40px] text-blue-500 opacity-50 hover:opacity-100 cursor-pointer"
                onclick="moveSlide(-1)">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[18px] h-[36px] max-md:w-[25px] max-md:h-[20px]"
                    viewBox="0 0 23 40" fill="none">
                    <path d="M21 2L3 20L21 38" stroke="#999999" stroke-opacity="1" stroke-width="5" />
                </svg>
            </a>
            <!-- The next button -->
            <a class="absolute right-0 top-1/2 p-4 -translate-y-1/2 translate-x-[42px] text-[40px] text-blue-500 opacity-50 hover:opacity-100 cursor-pointer"
                onclick="moveSlide(1)"><svg xmlns="http://www.w3.org/2000/svg"
                    class="w-[18px] h-[36px] max-md:w-[25px] max-md:h-[20px]" viewBox="0 0 23 40" fill="none">
                    <path :class="{ 'text-[black]': active }" d="M2 2L20 20L2 38" stroke="#999999" stroke-opacity="0.5"
                        stroke-width="5" />
                </svg></i></a>
        </div>
    </section>
    <!-- --------hero--section --end ----  -->

    <!-- Feature Laptops -->
    <section class='mt-[50px] max-xl:mt-[100px]'>
        <div class="py-1 text-center">
            <h2
                class="font-[jost] text-[40px] font-[500] max-lg:text-[30px] max-md:text-[25px] max-sm:text-[22px] text-[#353535]">
                Featurds Laptops </h2>
            <p
                class="font-[jost] text-[16px] font-[500] max-lg:text-[14px] max-md:text-[12px] max-sm:text-[10px] text-[#380D37]">
                The best we offer is here</p>
        </div>
        <div class="pt-[60px]">
            <button
                class="usa_btn w-[241px] max-xl:w-[200px] max-lg:w-[180px] max-md:w-[150px] max-sm:w-[100px] h-[48px] max-lg:h-[43px] max-md:h-[40px] max-sm:h-[35px] max-lg:text-[18px] max-md:text-[16px] max-sm:text-[14px]
                items-center text-center rounded-[4px] bg-[#380D37] text-[#F2F2F2] font-[500] text-[20px] font-[jost]">USA</button>
            <button
                class="asian_btn w-[241px] max-xl:w-[200px] max-lg:w-[180px] max-md:w-[150px] max-sm:w-[100px]  h-[48px] max-lg:h-[43px] max-md:h-[40px] max-sm:h-[35px] max-lg:text-[18px] max-md:text-[16px] max-sm:text-[14px]
                items-center text-center rounded-[4px] bg-[#F2F2F2] text-[#380D37] font-[500] text-[20px] font-[jost]">ASIAN</button>
            <div class="h-[2px] bg-[#380D37] rouned-[2px]"></div>
        </div>
        <!-- Product  -->
        <div
            class="grid grid-cols-5 max-sm:grid-cols-1 max-sm:gap-[2px]  max-md:grid-cols-2 max-md:gap-[4px] max-lg:grid-cols-3 max-xl:grid-cols-4 gap-2 mt-6 mb-[78px] max-sm:mb-[50px]">
            @foreach ($features->take(5) as $product)
                <x-product :product="$product"></x-product>
                {{-- <livewire:products :product="$product" /> --}}
            @endforeach
        </div>
    </section>
    <!-- New arrival  -->
    <section>
        <!-- heading -->
        <div
            class=" h-[130px] max-sm:h-[52px] max-md:h-[68px] max-lg:h-[85px] max-xl:h-[100px]  flex justify-center items-center text-white bg-gradient-to-r from-[#380D37] to-[#DC275C]">
            <h1
                class="text-[40px] max-sm:text-[18px] max-md:text-[22px] max-lg:text-[30px] max-xl:text-[35px] text-[#f2f2f2] font-[jost] font-[500] text-center">
                New Arrival</h1>
        </div>

        <!-- banner  -->
        <div class="grid grid-cols-3 mt-6 mb-5 max-sm:mt-[.5rem]">
            <div class="">
                <div
                    class=" pt-[22px] max-sm:pt-[5px] max-md:pt-[10px] max-lg:pt-[12px] max-xl:pt-[15px] font-[jost] font-[500] 
                text-[52px] max-sm:text-[14px] max-md:text-[24px] max-lg:text-[32px] max-xl:text-[38px]  text-[#DC275C] ">
                    <p
                        class="leading-[75.14px] max-sm:leading-[20px] max-md:leading-[35px] max-lg:leading-[42px] max-xl:leading-[50px]">
                        Our newest</br>products are</br>here,just for you!</p>
                </div>
                <div class='text-center'>
                    <button
                        class="mt-[60px] max-sm:mt-[8px] max-md:mt-[14px] max-lg:mt-[10px] max-xl:mt-[10px] py-2 max-sm:py-[3px] px-6 max-sm:px-[10px] max-md:px-[16px] max-lg:px-[20px] max-xl:px-[24px] font-[jost] font-[500] 
                        text-[16px] max-sm:text-[8px] max-md:text-[14px] max-lg:text-[16px] max-xl:text-[16px] text-[#F2F2F2] rounded-[4px] bg-gradient-to-r from-[#380D37] to-[#DC275C]">
                        Visit Now!
                    </button>
                </div>
            </div>

            <div class="col-span-2">
                <img class="" src="/storage/product/Hero-Image.svg" alt="">
            </div>
        </div>

        <!-- Products  -->
        <!-- Product  -->
        <div
            class="grid grid-cols-5 max-sm:grid-cols-1 max-sm:gap-[2px] max-md:grid-cols-2 max-md:gap-[4px] max-lg:grid-cols-3 max-xl:grid-cols-4 gap-2 mt-6 mb-[78px] max-sm:mb-[50px]">
            {{-- @for ($i = 1; $i < 6; $i++)
                <livewire:products />
            @endfor --}}
            @foreach ($new_arrival->take(5) as $product)
                <x-product :product="$product"></x-product>
            @endforeach
        </div>
    </section>
    <!-- Feature Laptops Sliders -->
    <section>
        <div class="py-1 text-center">
            <h2
                class="font-[jost] text-[40px] font-[500] max-lg:text-[30px] max-md:text-[25px] max-sm:text-[22px] text-[#353535]">
                Featurds Laptops</h2>
            <p
                class="font-[jost] text-[16px] font-[500] max-lg:text-[14px] max-md:text-[12px] max-sm:text-[10px] text-[#380D37]">
                The best we offer is here</p>
        </div>
        <div class="pt-[60px] max-sm:pt-[25px] max-md:pt-[30px] max-lg:pt-[40px] max-xl:pt-[50px]">
            <button
                class="usa_btn w-[241px] max-xl:w-[200px] max-lg:w-[180px] max-md:w-[150px] max-sm:w-[100px]  h-[48px] max-lg:h-[43px] max-md:h-[40px] max-sm:h-[35px] max-lg:text-[18px] max-md:text-[16px] max-sm:text-[14px]
                items-center text-center rounded-[4px] bg-[#F2F2F2] text-[#380D37] font-[500] text-[20px] font-[jost]">
                USA
            </button>
            <button
                class="asian_btn w-[241px] max-xl:w-[200px] max-lg:w-[180px] max-md:w-[150px] max-sm:w-[100px]  h-[48px] max-lg:h-[43px] max-md:h-[40px] max-sm:h-[35px] max-lg:text-[18px] max-md:text-[16px] max-sm:text-[14px]
                items-center text-center rounded-[4px] bg-[#F2F2F2] text-[#380D37] font-[500] text-[20px] font-[jost]">
                Asian
            </button>
            <div class="container h-[2px] bg-[#380D37]"></div>
        </div>
        <div>
            <div class="swiper-container overflow-hidden  mx-auto mySwiper relative">
                <div class="swiper-wrapper gap-[5px] py-[20px]">
                    <div class="swiper-slide">
                        <div
                            class=" w-[221px] mx-auto flex flex-col bg-white p-2 gap-[16px] text-left shadow-[2px_2px_5px_2px_#0000001A]">
                            <div>
                                <a href=""><img src="/storage/product/large-size-laptop.jpg" alt="Product"></a>
                            </div>
                            <div>
                                <p class="text-[16px] text-[#380D37] font-[jost] font-[500] leading-[23.12px]">
                                    Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB
                                </p>
                            </div>
                            <div
                                class="flex justify-between text-[14px] font-[jost] font-[700] py-[10px] mt-auto leading-[20.23px]">
                                <span class="text-[#DC275C]">1,50,000 TK</span>
                                <span class="text-[#380D37]">Add to Cart</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class=" w-[221px] mx-auto flex flex-col bg-white p-2 gap-[16px] text-left shadow-[2px_2px_5px_2px_#0000001A]">
                            <div>
                                <a href=""><img src="/storage/product/large-size-laptop.jpg" alt="Product"></a>
                            </div>
                            <div>
                                <p class="text-[16px] text-[#380D37] font-[jost] font-[500] leading-[23.12px]">
                                    Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB
                                </p>
                            </div>
                            <div
                                class="flex justify-between text-[14px] font-[jost] font-[700] py-[10px] mt-auto leading-[20.23px]">
                                <a href="#"><span class="text-[#DC275C]">1,50,000 TK</span></a>
                                <a href="#"><span class="text-[#380D37]">Add to Cart</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="w-[221px] mx-auto flex flex-col bg-white p-2 gap-[16px] text-left shadow-[2px_2px_5px_2px_#0000001A]">
                            <div>
                                <a href=""><img src="/storage/product/large-size-laptop.jpg" alt="Product"></a>
                            </div>
                            <div>
                                <p class="text-[16px] text-[#380D37] font-[jost] font-[500] leading-[23.12px]">
                                    Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB
                                </p>
                            </div>
                            <div
                                class="flex justify-between text-[14px] font-[jost] font-[700] py-[10px] mt-auto leading-[20.23px]">
                                <span class="text-[#DC275C]">1,50,000 TK</span>
                                <span class="text-[#380D37]">Add to Cart</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="w-[221px] mx-auto flex flex-col bg-white p-2 gap-[16px] text-left shadow-[2px_2px_5px_2px_#0000001A]">
                            <div>
                                <a href=""><img src="/storage/product/large-size-laptop.jpg"
                                        alt="Product"></a>
                            </div>
                            <div>
                                <p class="text-[16px] text-[#380D37] font-[jost] font-[500] leading-[23.12px]">
                                    Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB
                                </p>
                            </div>
                            <div
                                class="flex justify-between text-[14px] font-[jost] font-[700] py-[10px] mt-auto leading-[20.23px]">
                                <span class="text-[#DC275C]">1,50,000 TK</span>
                                <span class="text-[#380D37]">Add to Cart</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="w-[221px] mx-auto flex flex-col bg-white p-2 gap-[16px] text-left shadow-[2px_2px_5px_2px_#0000001A]">
                            <div>
                                <a href=""><img src="/storage/product/large-size-laptop.jpg"
                                        alt="Product"></a>
                            </div>
                            <div>
                                <p class="text-[16px] text-[#380D37] font-[jost] font-[500] leading-[23.12px]">
                                    Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB
                                </p>
                            </div>
                            <div
                                class="flex justify-between text-[14px] font-[jost] font-[700] py-[10px] mt-auto leading-[20.23px]">
                                <span class="text-[#DC275C]">1,50,000 TK</span>
                                <span class="text-[#380D37]">Add to Cart</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="w-[221px] mx-auto flex flex-col bg-white p-2 gap-[16px] text-left shadow-[2px_2px_5px_2px_#0000001A]">
                            <div>
                                <a href=""><img src="/storage/product/large-size-laptop.jpg"
                                        alt="Product"></a>
                            </div>
                            <div>
                                <p class="text-[16px] text-[#380D37] font-[jost] font-[500] leading-[23.12px]">
                                    Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB
                                </p>
                            </div>
                            <div
                                class="flex justify-between text-[14px] font-[jost] font-[700] py-[10px] mt-auto leading-[20.23px]">
                                <span class="text-[#DC275C]">1,50,000 TK</span>
                                <span class="text-[#380D37]">Add to Cart</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="w-[221px] mx-auto flex flex-col bg-white p-2 gap-[16px] text-left shadow-[2px_2px_5px_2px_#0000001A]">
                            <div>
                                <a href=""><img src="/storage/product/large-size-laptop.jpg"
                                        alt="Product"></a>
                            </div>
                            <div>
                                <p class="text-[16px] text-[#380D37] font-[jost] font-[500] leading-[23.12px]">
                                    Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB
                                </p>
                            </div>
                            <div
                                class="flex justify-between text-[14px] font-[jost] font-[700] py-[10px] mt-auto leading-[20.23px]">
                                <span class="text-[#DC275C]">1,50,000 TK</span>
                                <span class="text-[#380D37]">Add to Cart</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="w-[221px] mx-auto flex flex-col bg-white p-2 gap-[16px] text-left shadow-[2px_2px_5px_2px_#0000001A]">
                            <div>
                                <a href=""><img src="/storage/product/large-size-laptop.jpg"
                                        alt="Product"></a>
                            </div>
                            <div>
                                <p class="text-[16px] text-[#380D37] font-[jost] font-[500] leading-[23.12px]">
                                    Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB
                                </p>
                            </div>
                            <div
                                class="flex justify-between text-[14px] font-[jost] font-[700] py-[10px] mt-auto leading-[20.23px]">
                                <span class="text-[#DC275C]">1,50,000 TK</span>
                                <span class="text-[#380D37]">Add to Cart</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="w-[221px] mx-auto flex flex-col bg-white p-2 gap-[16px] text-left shadow-[2px_2px_5px_2px_#0000001A]">
                            <div>
                                <a href=""><img src="/storage/product/large-size-laptop.jpg"
                                        alt="Product"></a>
                            </div>
                            <div>
                                <p class="text-[16px] text-[#380D37] font-[jost] font-[500] leading-[23.12px]">
                                    Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB
                                </p>
                            </div>
                            <div
                                class="flex justify-between text-[14px] font-[jost] font-[700] py-[10px] mt-auto leading-[20.23px]">
                                <span class="text-[#DC275C]">1,50,000 TK</span>
                                <span class="text-[#380D37]">Add to Cart</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="swiper-button-next translate-x-[55px] translate-y-[-192px] bs"></div>
                <div class="swiper-button-prev translate-x-[-40px] translate-y-[-192px] bs"></div>
            </div>

            <!-- Swiper JS -->
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

            <!-- Initialize Swiper -->
            <script>
                var swiper = new Swiper(".mySwiper", {
                    slidesPerView: 5,
                    // spaceBetween: 5,
                    slidesPerGroup: 1,
                    loop: true,
                    loopFillGroupWithBlank: true,
                    // pagination: {
                    //     el: ".swiper-pagination",
                    //     clickable: true,
                    // },
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                });
                // Adjust slidesPerView dynamically
                function adjustSlidesPerView() {
                    var windowWidth = window.innerWidth;

                    if (windowWidth < 640) {
                        swiper.params.slidesPerView = 1;
                    }
                    else if (windowWidth< 768) {
                        swiper.params.slidesPerView = 2;
                    }
                    else if (windowWidth< 1024) {
                        swiper.params.slidesPerView = 3;
                    }
                    else if (windowWidth< 1280) {
                        swiper.params.slidesPerView = 4;
                    }
                     else {
                        swiper.params.slidesPerView = 5;
                    }

                    swiper.update(); // Update Swiper instance
                }

                // Call the function initially
                adjustSlidesPerView();

                // Listen to window resize events
                window.addEventListener('resize', adjustSlidesPerView);
            </script>

    </section>
    <div class='mt-[40px] mb-[30px]'>
        <div class="container h-[2px] bg-[#380D37]"></div>
    </div>
    <!-- Differential Variants  -->
    <section class='mt-[70px]'>
        <div class="py-1 text-center">
            <h2 class="font-[jost] text-[40px] font-[500] max-lg:text-[30px] max-md:text-[25px] max-sm:text-[22px] text-[#353535]">Differential Variants </h2>
            <p class="font-[jost] text-[16px] font-[500] max-lg:text-[14px] max-md:text-[12px] max-sm:text-[10px] text-[#380D37]">The best we offer is here</p>
        </div>
        <div class="pt-[60px]">
            <button
                class="usa_btn w-[241px] max-xl:w-[200px] max-lg:w-[180px] max-md:w-[150px] max-sm:w-[100px]  h-[48px] max-lg:h-[43px] max-md:h-[40px] max-sm:h-[35px] max-lg:text-[18px] max-md:text-[16px] max-sm:text-[14px]
                items-center text-center rounded-[4px] bg-[#F2F2F2] text-[#380D37] font-[500] text-[20px] font-[jost]">USA</button>
            <button
                class="asian_btn w-[241px] max-xl:w-[200px] max-lg:w-[180px] max-md:w-[150px] max-sm:w-[100px]  h-[48px] max-lg:h-[43px] max-md:h-[40px] max-sm:h-[35px] max-lg:text-[18px] max-md:text-[16px] max-sm:text-[14px]
                items-center text-center rounded-[4px] bg-[#F2F2F2] text-[#380D37] font-[500] text-[20px] font-[jost]">Asian</button>
            <div class="container h-[2px] bg-[#380D37]"></div>
        </div>

        <!-- Product  -->
        <div class="grid grid-cols-5 max-sm:grid-cols-1 max-sm:gap-[2px] max-md:grid-cols-2 max-md:gap-[4px] max-lg:grid-cols-3 max-xl:grid-cols-4 gap-2 mt-6 mb-[78px] max-sm:mb-[50px]">
            {{-- @for ($i = 1; $i < 11; $i++)
            <livewire:products />
        @endfor --}}
            @foreach ($dpds->take(5) as $product)
                <x-product :product="$product"></x-product>
            @endforeach
        </div>

        <!-- See more button  -->

    </section>
    <div>
        <a href="{{ route('shop') }}">
            <button
                class=" items-center justify-center flex my-[60px] mx-auto text-[16px] text-[#F2F4F8] w-[116px] h-[44px] rounded-[4px] bg-gradient-to-r from-[#380D37] to-[#DC275C]">
                See More
            </button>
        </a>
        <div class="container h-[2px] bg-[#380D37]"></div>
    </div>
    <!-- Currention code from this line upto footer  -->
    <section class="#about-us">
        <div>
            <h2 class="mt-8 font-[jost] font-[500] text-center text-[40px] max-lg:text-[30px] max-md:text-[25px] max-sm:text-[22px] text-[#353535]">
                Why Choose Us?</h2>
        </div>
        <div class="grid grid-cols-5 max-sm:grid-cols-1 max-sm:gap-[2px] max-md:grid-cols-2 max-md:gap-[4px] max-lg:grid-cols-3 max-xl:grid-cols-4 gap-2 my-[50px] ">
            <div class="rounded-[4px] shadow-[2px_2px_5px_2px_#0000001A] max-sm:mb-[10px] max-md:mb-[10px] max-lg:mb-[10px]">
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
            <div class="rounded-[4px] shadow-[2px_2px_5px_2px_#0000001A] max-sm:mb-[10px] max-md:mb-[10px] max-lg:mb-[10px]">
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

            <div class="rounded-[4px] shadow-[2px_2px_5px_2px_#0000001A] max-sm:mb-[10px] max-md:mb-[10px] max-lg:mb-[10px]">
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
            <div class=" rounded-[4px] shadow-[2px_2px_5px_2px_#0000001A] max-sm:mb-[10px] max-md:mb-[10px] max-lg:mb-[10px]">
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
            <div class="rounded-[4px] shadow-[2px_2px_5px_2px_#0000001A] max-sm:mb-[10px] max-md:mb-[10px] max-lg:mb-[10px]">
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
    <section class="mt-16">
        <h2 class="mb-12 font-[jost] font-[500] text-center text-[42px] max-lg:text-[30px] max-md:text-[25px] max-sm:text-[22px] text-[#353535]">What Our Clients Say About
            Us</h2>
        <div class="container mx-auto">
            <link rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" type="text/css" href="/frontend/owl-carousel-libraries/owl.carousel.min.css">
            <style>
                /* html {
                    scroll-behavior: smooth;
                } */

                .slider {
                    margin-bottom: 30px;
                    position: relative;
                }

                .slider .owl-item.active.center .slider-card {
                    transform: scale(1.15);
                    opacity: 1;
                    color: #fff;
                }

                .slider-card {
                    background: #fff;
                    /* padding: 0px 0px; */
                    margin: 50px 15px 90px 15px;
                    border-radius: 5px;
                    box-shadow: 0 15px 45px -20px rgb(0 0 0 / 73%);
                    transform: scale(0.9);
                    opacity: 0.5;
                    transition: all 0.3s;
                    width: 398px
                }

                @media (max-width: 640px){
                    .slider-card {
                     width:280px; 
                     /* margin: 50px auto;                   */
                    }
                    .leo-h{
                        font-size: 18px;
                    }
                    .leo-h1{
                        font-size: 18px;
                        margin-top: 25px;
                        margin-bottom: 25px;
                    }
                    .leo-p{
                        font-size:10px;
                    }
                    .leo-p1{
                        font-size: 13px;
                        line-height: 20.13px;
                    }
                    .client-img{
                        width: 64px;
                        height: 64px;
                    }
                    .star-div{
                        margin-top: 34px;
                    }
                }

                @media (max-width: 768px){
                    .slider-card {
                     width:380px;
                  
                     margin: 50px auto;
                    }
                    .leo-h{
                        font-size: 18px;
                    }
                    .leo-h1{
                        font-size: 24px;
                        margin-top: 28px;
                        margin-bottom: 28px;
                    }
                    .leo-p{
                        font-size:13px;
                    }
                    .leo-p1{
                        font-size: 18px;
                        line-height: 26.13px;
                    }
                    .client-img{
                        width: 64px;
                        height: 64px;
                    }
                    .star-div{
                        margin-top: 27px;
                    }
                    .star{
                        width: 30px;
                        height: 30px;
                    }
                }

                @media (max-width: 1024px){
                    .slider-card {
                     width:450px;
                     margin: 50px auto;
                    }
                    .leo-h{
                        font-size: 18px;
                    }
                    .leo-h1{
                        font-size: 24px;
                        margin-top: 28px;
                        margin-bottom: 28px;
                    }
                    .leo-p{
                        font-size:13px;
                    }
                    .leo-p1{
                        font-size: 18px;
                        line-height: 26.13px;
                    }
                    .client-img{
                        width: 64px;
                        height: 64px;
                    }
                    .star-div{
                        margin-top: 27px;
                    }
                    .star{
                        width: 30px;
                        height: 30px;
                    }
                }

                @media (max-width: 1280px){
                   
                }

                .slider-card img {
                    border-radius: 4px 4px 0px 0px;
                }

                .owl-nav .owl-prev {
                    /* position: absolute; */
                    top: calc(50% - 25px);
                    left: 0;
                    opacity: 1;
                    font-size: 30px !important;
                    z-index: 1;
                }

                .owl-nav .owl-next {
                    /* position: absolute; */
                    top: calc(50% - 25px);
                    right: 0;
                    opacity: 1;
                    font-size: 30px !important;
                    z-index: 1;
                }

                .owl-nav {
                    display: flex;
                    /* justify-content: space-between; */
                    align-items: center;
                    justify-content: center;
                    gap: 190px;
                    transform: translateY(36px);
                }

                .owl-dots {
                    text-align: center;
                }

                .owl-dots .owl-dot {
                    height: 17px;
                    width: 17px;
                    border-radius: 10px;
                    background: #C5C5C5 !important;
                    margin-left: 8px;
                    margin-right: 8px;
                    outline: none;
                }

                .owl-dots .owl-dot.active {
                    background: #353535 !important;
                }
            </style>
            <section id="slider" class="pt-5 mx-auto">
                <div class="container mx-auto">
                    {{-- <h1 class="text-center"><b>Responsive Owl Carousel</b></h1> --}}
                    <div class="slider">
                        <div class="owl-carousel">
                            <div class="slider-card max-sm:w-[280px] rounded-[16px] py-4 px-4 bg-[#fff] shadow-[2px_2px_5px_2px_#0000001A]">
                                <div
                                    class="">
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

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" class="star"
                                                     viewBox="0 0 22 22" fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" class="star"
                                                     viewBox="0 0 22 22" fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" class="star"
                                                     viewBox="0 0 22 22" fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" class="star"
                                                     viewBox="0 0 22 22" fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" class="star"
                                                    viewBox="0 0 15 15" fill="none">
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
                            <div class="slider-card rounded-[16px] py-4 px-4 bg-[#fff] shadow-[2px_2px_5px_2px_#0000001A]">
                                <div
                                    class="">
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

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" class="star"
                                                    height="22" viewBox="0 0 22 22" fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" class="star"
                                                    height="22" viewBox="0 0 22 22" fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" class="star"
                                                    height="22" viewBox="0 0 22 22" fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" class="star"
                                                    height="22" viewBox="0 0 22 22" fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" class="star"
                                                    height="22" viewBox="0 0 15 15" fill="none">
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
                            <div class="slider-card rounded-[16px] py-4 px-4 bg-[#fff] shadow-[2px_2px_5px_2px_#0000001A]">
                                <div
                                    class="">
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

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" class="star"
                                                    height="22" viewBox="0 0 22 22" fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" class="star"
                                                    height="22" viewBox="0 0 22 22" fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" class="star"
                                                    height="22" viewBox="0 0 22 22" fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" class="star"
                                                    height="22" viewBox="0 0 22 22" fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" class="star"
                                                    height="22" viewBox="0 0 15 15" fill="none">
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
                            <div class="slider-card rounded-[16px] py-4 px-4 bg-[#fff] shadow-[2px_2px_5px_2px_#0000001A]">
                                <div
                                    class="">
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

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" class="star"
                                                    height="22" viewBox="0 0 22 22" fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" class="star"
                                                    height="22" viewBox="0 0 22 22" fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" class="star"
                                                    height="22" viewBox="0 0 22 22" fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" class="star"
                                                    height="22" viewBox="0 0 22 22" fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" class="star"
                                                    height="22" viewBox="0 0 15 15" fill="none">
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
                            <div class="slider-card rounded-[16px] py-4 px-4 bg-[#fff] shadow-[2px_2px_5px_2px_#0000001A]">
                                <div
                                    class="">
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

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" class="star"
                                                    height="22" viewBox="0 0 22 22" fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" class="star"
                                                    height="22" viewBox="0 0 22 22" fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" class="star"
                                                    height="22" viewBox="0 0 22 22" fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" class="star"
                                                    height="22" viewBox="0 0 22 22" fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" class="star"
                                                    height="22" viewBox="0 0 15 15" fill="none">
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
                            <div class="slider-card rounded-[16px] py-4 px-4 bg-[#fff] shadow-[2px_2px_5px_2px_#0000001A]">
                                <div
                                    class="">
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

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" class="star"
                                                    height="22" viewBox="0 0 22 22" fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" class="star"
                                                    height="22" viewBox="0 0 22 22" fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" class="star"
                                                    height="22" viewBox="0 0 22 22" fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" class="star"
                                                    height="22" viewBox="0 0 22 22" fill="#FFA033">
                                                    <path
                                                        d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                                        fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></a>

                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" class="star"
                                                    height="22" viewBox="0 0 15 15" fill="none">
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
            <script src="/frontend/owl-carousel-libraries/owl.carousel.min.js"></script>
            <script>
                $(document).ready(function() {
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
                            '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-18 h-9"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" /></svg>',
                            '<svg xmlns="http:www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-18 h-9"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /> </svg>'
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
            </script>
        </div>
    </section>
    <div class="mt-16 h-[2px] bg-[#380D37] container"></div>
    <!-- Drop/submit a review  -->
    <section class="mt-16 mb-5">
        <div class="text-center font-[jost] text-[42px] font-[500] leading-[61px] text-[#380D37]">
            <h1> Please Drop a review!</h1>
        </div>
        <div class="grid grid-cols-2 mt-20">
            <div>
                <div>
                    <h1 class="font-[jost] text-[52px] font-[500] leading-[55px] text-[#DC275C]">We Believe in the
                        </br> power of </br> Communication</h1>
                </div>
                <div>
                    <p class="mt-8 font-[jost] text-[24px] font-[500] leading-[30px] text-[#353535]">Share your
                        experience with us.</br> Drop a comment and we will look into it.</p>
                </div>
            </div>
            <form wire:submit="post">

                <div class="grid grid-cols-2 gap-2">
                    <input wire:model="name"
                        class=" h-[64px] rounded-[4px] bg-[#F2F2F2] font-[jost] text-[16px] italic font-[500] leading-[23px] text-left shadow-[2px_2px_5px_2px_#0000001A] py-[8px] px-[16px]"
                        id="name" type="text" placeholder="Name*">
                    @error('name')
                        <span class="text-[red] text-[12px]">{{ $message }}</span>
                    @enderror
                    <input wire:model="email"
                        class=" h-[64px] rounded-[4px] bg-[#F2F2F2] font-[jost] text-[16px] italic font-[500] leading-[23px]  py-[8px] px-[16px]"
                        id="email" type="email" placeholder="Email*">
                    @error('email')
                        <span class="text-[red] text-[12px]">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <input wire:model="subject"
                        class=" h-[64px] rounded-[4px] w-full py-2 px-3 bg-[#F2F2F2] font-[jost] text-[16px] mt-[20px] mb-[20px] italic font-[500] "
                        id="subject" type="text" placeholder="Subject(optional)">
                    @error('subject')
                        <span class="text-[red] text-[12px]">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <textarea wire:model='msg'
                        class="h-[271px] rounded-[4px] w-full py-2 pb-32 px-3 bg-[#F2F2F2] font-[jost] text-[16px]  italic font-[500] "
                        id="message" rows="4" placeholder=" Message"></textarea>
                    @error('msg')
                        <span class="text-[red] text-[12px]">{{ $message }}</span>
                    @enderror
                </div>
                <div class="items-center">
                    @if ($post_success_msg)
                        <span class="block text-[green]">{{ $post_success_msg }}</span>
                    @endif
                    @if ($post_error_msg)
                        <span class="block text-[red]">{{ $post_error_msg }}</span>
                    @endif
                    <button
                        class="text-[#F2F2F2] relative text-[16px] h-[44px] w-[116px] rounded-[4px] font-[500] font-[jost] mt-[15px] pt-[5px] pr-[30px] pl-[30px] pb-[5px] bg-gradient-to-r from-[#380D37] to-[#DC275C] "
                        type="submit">Post
                        <div wire:loading
                            class="absolute right-0 inline-block h-6 w-6 mr-2 animate-spin rounded-full border-4 border-solid border-current border-r-transparent align-[-0.125em] text-success motion-reduce:animate-[spin_1.5s_linear_infinite]"
                            role="status">
                            <span
                                class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Loading...
                            </span>
                        </div>
                    </button>
                </div>
            </form>
        </div>
    </section>
    <script>
        $(document).ready(function() {
            $('.usa_btn').on('click', function() {
                $(this).addClass('bg-[#380D37] text-[#F2F2F2]');
                $(this).removeClass('bg-[#F2F2F2] text-[#380D37]');
                $('.asian_btn').removeClass('bg-[#380D37] text-[#F2F2F2]')
                $('.asian_btn').addClass('bg-[#F2F2F2] text-[#380D37]');
            });
            $('.asian_btn').on('click', function() {
                $(this).addClass('bg-[#380D37] text-[#F2F2F2]');
                $(this).removeClass('bg-[#F2F2F2] text-[#380D37]');
                $('.usa_btn').removeClass('bg-[#380D37] text-[#F2F2F2]');
                $('.usa_btn').addClass('bg-[#F2F2F2] text-[#380D37]');
            });
        })
    </script>
</div>
