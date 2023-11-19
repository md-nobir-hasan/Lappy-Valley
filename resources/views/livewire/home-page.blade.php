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

<div class="container mx-auto lg:px-16">
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
    <section class=''>
        <div class="relative" x-data="{ active: true }">
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
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="36" viewBox="0 0 23 40"
                    fill="none">
                    <path d="M21 2L3 20L21 38" stroke="#999999" stroke-opacity="1" stroke-width="5" />
                </svg>
            </a>


            <!-- The next button -->
            <a class="absolute right-0 top-1/2 p-4 -translate-y-1/2 translate-x-[42px] text-[40px] text-blue-500 opacity-50 hover:opacity-100 cursor-pointer"
                onclick="moveSlide(1)"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="36"
                    viewBox="0 0 23 40" fill="none">
                    <path :class="{ 'text-[black]': active}" d="M2 2L20 20L2 38" stroke="#999999"
                        stroke-opacity="0.5" stroke-width="3" />
                </svg></i></a>

        </div>
    </section>
    <!-- --------hero--section --end ----  -->

    <!-- Feature Laptops -->
    <section class='mt-[50px]'>
        <div class="py-1 text-center">
            <h2 class="font-[jost] text-[40px] font-[500]  text-[#353535]">Featurds Laptops </h2>
            <p class="font-[jost] text-[16px] font-[500] text-[#353535]">The best we offer is here</p>
        </div>
        <div class="pt-[60px]">
            <button
                class=" w-[241px] h-[48px] items-center text-center rounded-[4px] bg-[#F2F2F2] focus:bg-[#380D37] text-[#380D37] focus:text-[#F2F2F2] font-[500] text-[20px] font-[jost]">USA</button>
            <button
                class="w-[241px] h-[48px] items-center text-center rounded-[4px] focus:bg-[#380D37] focus:text-[#F2F2F2] bg-[#F2F2F2] text-[#380D37] font-[500] text-[20px] font-[jost]">ASIAN</button>
            <div class="h-[2px] bg-[#380D37] rouned-[2px]"></div>
        </div>

        <!-- Product  -->

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 lg:grid-col-5 gap-2 mt-6 mb-[78px]">
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
            class=" h-[130px] flex justify-center items-center text-white bg-gradient-to-r from-[#380D37] to-[#DC275C]">
            <h1 class="text-[40px] text-[#f2f2f2] font-[jost] font-[500] text-center">New Arrival</h1>
        </div>

        <!-- banner  -->
        <div class="flex mt-6 mb-5">
            <div class=" pt-[22px]  font-[jost] text-[52px] font-[500] text-[#DC275C]">
                <p class="leading-[75.14px]"> Our newest</br>products are</br>here,just for you!</p>
                <div class='text-center'>
                    <button
                        class="mt-[60px] py-2 px-6 font-[jost] font-[500] text-[16px] text-[#F2F2F2] rounded-[4px] bg-gradient-to-r from-[#380D37] to-[#DC275C]">
                        Visit Now!
                    </button>
                </div>
            </div>
            <div>
                <img src="/storage/product/Hero-Image.svg" alt="">
            </div>
        </div>

        <!-- Products  -->
        <!-- Product  -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 lg:grid-col-5 gap-2 mt-6 mb-[78px]">
            {{-- @for ($i = 1; $i < 6; $i++)
                <livewire:products />
            @endfor --}}
            @foreach ($new_arrival->take(5) as $product)
                <x-product :product="$product"></x-product>
            @endforeach
        </div>
    </section>

    <!-- Feature Laptops  -->
    <section>
        <div class='flex justify-start translate-x-[-50px] translate-y-[480px]'>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="36" viewBox="0 0 23 40" fill="none">
                <path d="M21 2L3 20L21 38" stroke="#999999" stroke-opacity="50%" stroke-width="3" />
            </svg>
        </div>
        <div class="py-1 text-center">
            <h2 class="font-[jost] text-[40px] font-[500]  text-[#353535]">Featurds Laptops</h2>
            <p class="font-[jost] text-[16px] font-[500] text-[#380D37]">The best we offer is here</p>
        </div>
        <div class="pt-[60px]">
            <button
                class="w-[241px] h-[48px] items-center text-center rounded-[4px] bg-[#F2F2F2] text-[#380D37] focus:bg-[#380D37] focus:text-white font-[500] text-[20px] font-[jost]">USA</button>
            <button
                class="w-[241px] h-[48px] items-center text-center rounded-[4px] bg-[#F2F2F2] text-[#380D37] focus:bg-[#380D37] focus:text-white font-[500] text-[20px] font-[jost]">Asian</button>
            <div class="container h-[2px] bg-[#380D37]"></div>
        </div>
        <!-- Product  -->

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 lg:grid-col-5 gap-2 mt-6 mb-[78px]">
            {{-- @for ($i = 1; $i < 6; $i++)
                <livewire:products />
            @endfor --}}
            @foreach ($features->take(5) as $product)
                <x-product :product="$product"></x-product>
            @endforeach
        </div>

        <div class='flex justify-end translate-x-[50px] translate-y-[-245px]'>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="36" viewBox="0 0 23 40" fill="none">
                <path d="M2 2L20 20L2 38" stroke="#999999" stroke-opacity="50%" stroke-width="3" />
            </svg>
        </div>
    </section>

    <div class='mt-[15px] mb-[30px]'>
        <div class="container h-[2px] bg-[#380D37]"></div>
    </div>

    <!-- Differential Variants  -->
    <section class='mt-[70px]'>
        <div class="py-1 text-center">
            <h2 class="font-[jost] text-[40px] font-[500] text-[#353535]">Differential Variants </h2>
            <p class="font-[jost] text-[16px] font-[500] text-[#380D37]">The best we offer is here</p>
        </div>
        <div class="pt-[60px]">
            <button
                class="w-[241px] h-[48px] items-center text-center rounded-[4px] bg-[#F2F2F2] text-[#380D37] focus:bg-[#380D37] focus:text-white font-[500] text-[20px] font-[jost]">USA</button>
            <button
                class="w-[241px] h-[48px] items-center text-center rounded-[4px] bg-[#F2F2F2] text-[#380D37] focus:bg-[#380D37] focus:text-white font-[500] text-[20px] font-[jost]">Asian</button>
            <div class="container h-[2px] bg-[#380D37]"></div>
        </div>

        <!-- Product  -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 lg:grid-col-5 gap-2 mt-6 mb-[78px]">
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
        <button
            class=" items-center justify-center flex my-[60px] mx-auto text-[16px] text-[#F2F4F8] w-[116px] h-[44px] rounded-[4px] bg-gradient-to-r from-[#380D37] to-[#DC275C]">
            <a href="">See More</a>
        </button>
        <div class="container h-[2px] bg-[#380D37]"></div>
    </div>

    <!-- Currention code from this line upto footer  -->
    <section>
        <div>
            <h2 class="mt-8 text-center font-[jost] text-[40px] font-[500] leading-[58px]  text-[#353535]">
                Why Choose Us?</h2>
        </div>
        <div class="grid grid-cols-5 gap-2 my-[50px] ">
            <div class=" rounded-[4px] shadow-[2px_2px_5px_2px_#0000001A] p-3">
                <div class='mx-auto w-[116px] h-[116px]'>
                    <div class='flex items-center mx-auto'>
                        <img class='w-[55.36px] h-[55.36px]' src="/storage/product/laptop-1.jpg" alt="Product">
                        <img class='w-[55.36px]' src="/storage/product/laptop.jpg" alt="Product">
                    </div>
                    <div class='flex items-center mx-auto'>
                        <img class='w-[55.36px] h-[55.36px]' src="/storage/product/web-traffic.jpg" alt="Product">
                        <img class='w-[55.36px] h-[55.36px]' src="/storage/product/laptop-2.jpg" alt="Product">
                    </div>
                </div>

                <h2
                    class=" mt-[25px] mb-[10px] text-[#DC275C] font-[jost] text-[24px] font-[500] leading-[35px] text-center ">
                    Wide Varieties</h2>
                <p class="font-[jost] text-[14px] font-[500] leading-[20px] text-left text-[#380D37]">We have a
                    wide collection of laptops from different brands. We have brand new and pre-ownedlaptops in our
                    collection.</p>
            </div>
            <div class=" rounded-[4px] shadow-[2px_2px_5px_2px_#0000001A] p-3">
                <img class="mx-auto w-[116px] h-[116px]" src="/storage/product/trust-1.svg" alt="Product">
                <h2
                    class=" mt-[25px] mb-[10px] text-[#DC275C] font-[jost] text-[24px]  font-[500] leading-[35px] text-center ">
                    Trusted and Reliable</h2>
                <p class="font-[jost] text-[14px] font-[500] leading-[20px] text-left text-[#380D37]">We are
                    trusted and reliable shop. We provide you with the best services and good quality products.</p>
            </div>

            <div class=" rounded-[4px] shadow-[2px_2px_5px_2px_#0000001A] p-3">
                <img class=" mx-auto w-[116px] h-[116px]" src="/storage/product/best-service.svg" alt="Product">
                <h2
                    class=" mt-[25px] mb-[10px] text-[#DC275C] font-[jost] text-[24px] font-[500] leading-[35px] text-center ">
                    Best Service</h2>
                <p class="  font-[jost] text-[14px] font-[500] leading-[20px] text-left text-[#380D37]">We provide
                    you with the best after sell services. Any problem, you take it to us and we will solve it.</p>
            </div>
            <div class=" rounded-[4px] shadow-[2px_2px_5px_2px_#0000001A] p-3">
                <img class="mx-auto w-[116px] h-[116px]" src="/storage/product/best-price-1.svg" alt="Product">
                <h2
                    class=" mt-[25px] mb-[10px] text-[#DC275C] font-[jost] text-[24px] font-[500] leading-[35px] text-center ">
                    Best Price in Market</h2>
                <p class="font-[jost] text-[14px] font-[500] leading-[20px] text-left text-[#380D37]">We will give
                    you the best and lowest possible price in market.</p>
            </div>
            <div class=" rounded-[4px] shadow-[2px_2px_5px_2px_#0000001A] p-3 h-[309px]">
                <img class="mx-auto w-[116px] h-[116px]" src="/storage/product/fast-delivery-1.svg" alt="Product">
                <h2
                    class=" mt-[25px] mb-[10px] text-[#DC275C] font-[jost] text-[24px] font-[500] leading-[35px] text-center ">
                    Fast Delivary</h2>
                <p class="font-[jost] text-[14px] font-[500] leading-[20px] text-left text-[#380D37]">We deliver
                    our products carefully as fast as possible at your door step.</p>
            </div>
    </section>

    <!-- ----------------choose-secton--end-------- -->
    <!-- About us  -->
    <section>
        <div class="mb-3">
            <h2 class="text-center text-[40px] font-[jost] text-[#353535] font-[500]">About Us</h2>
        </div>
        <div>
            <p class="font-[jost] text-[16px] text-[#353535] font-[500]">Brand New and used Laptop import from
                USA, USA & Japan. MacBook, HP,ASUS, Dell, Lenovo, MSI, Acer, Microsoft
                Surface, Toshiba, Razer Blade & Samsung laptop are available in different models with a very
                competitive market price.</p>
        </div>
    </section>

    <!-- What our client says  -->
    <section class="mt-16">
        <h2 class="mb-12 text-center font-[500] font-[jost] text-[42px] text-[#353535]">What Our Clients Say About
            Us</h2>
        <div class="flex items-center justify-around">
            <div class="rounded-[12px] py-4 px-6 bg-[#fff] w-[280px] h-[306px] shadow-[2px_2px_5px_2px_#0000001A]">
                <div class="flex justify-center">
                    <div class="flex items-center">
                        <img class="rounded-[100%] w-[60px] h-[60px]" src="/storage/product/client-photo.svg"
                            alt="">
                        <div class="ml-2">
                            <h1 class="font-[Lato] text-[18px] font-[700]  text-center text-[#353535]">
                                Leo</h1>
                            <p class="font-[Lato] text-[12px] font-[400] text-center text-[#353535]">
                                Lead Designer</p>
                        </div>
                    </div>
                    <!-- <div class="flex items-baseline"> -->

                    <!-- <div class="flex items-center"> -->
                    <div class="flex mt-[40px] ml-auto">

                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                viewBox="0 0 22 22" fill="#FFA033">
                                <path
                                    d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                    fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg></a>

                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                viewBox="0 0 22 22" fill="#FFA033">
                                <path
                                    d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                    fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg></a>

                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                viewBox="0 0 22 22" fill="#FFA033">
                                <path
                                    d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                    fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg></a>

                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                viewBox="0 0 22 22" fill="#FFA033">
                                <path
                                    d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                    fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg></a>

                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                viewBox="0 0 15 15" fill="none">
                                <path
                                    d="M7.5 1.25L9.43125 5.1625L13.75 5.79375L10.625 8.8375L11.3625 13.1375L7.5 11.1062L3.6375 13.1375L4.375 8.8375L1.25 5.79375L5.56875 5.1625L7.5 1.25Z"
                                    stroke="#FFA033" stroke-linecap="round" stroke-linejoin="round" />
                            </svg></a>
                    </div>
                    <!-- </div> -->
                    <!-- </div> -->

                </div>
                <h1 class="my-[19px] font-[Lato] font-[700] text-[18px]  text-center text-[#353535]">
                    It was a very good experience</h1>
                <p class="my-[17px] font-[jost] font-[400] text-[12px] leading-[13.5px] text-left text-[#353535]">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursusnibh mauris, nec turpis orci
                    lectus maecenas.
                    Suspendisse sed magnaeget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis
                    felis id augue
                    sit cursus pellentesqueenim arcu.Elementum felis magna pretium in tincidunt.
                    Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacUSArcu.</p>
            </div>
            <div
                class="rounded-[12px] bg-[#fff] py-4 px-6 w-[398px] h-[398px] items-center  shadow-[2px_2px_5px_2px_#0000001A]">
                <div class="flex justify-center">
                    <div class="flex items-center">
                        <img class="rounded-[100%] w-[72px] h-[72px]" src="/storage/product/client-photo.svg"
                            alt="">
                        <div class="ml-2">
                            <h1 class="font-[Lato] text-[24px] font-[700] text-center text-[#353535]">
                                Leo</h1>
                            <p class="font-[Lato] text-[18px] font-[400] text-center text-[#353535]">
                                Lead Designer</p>
                        </div>
                    </div>
                    <!-- <div class="flex items-baseline"> -->

                    <!-- <div class="flex items-center"> -->
                    <div class="flex mt-[40px] ml-auto">
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                viewBox="0 0 22 22" fill="#FFA033">
                                <path
                                    d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                    fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                viewBox="0 0 22 22" fill="#FFA033">
                                <path
                                    d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                    fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                viewBox="0 0 22 22" fill="#FFA033">
                                <path
                                    d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                    fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                viewBox="0 0 22 22" fill="#FFA033">
                                <path
                                    d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                    fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                viewBox="0 0 15 15" fill="none">
                                <path
                                    d="M7.5 1.25L9.43125 5.1625L13.75 5.79375L10.625 8.8375L11.3625 13.1375L7.5 11.1062L3.6375 13.1375L4.375 8.8375L1.25 5.79375L5.56875 5.1625L7.5 1.25Z"
                                    stroke="#FFA033" stroke-linecap="round" stroke-linejoin="round" />
                            </svg></a>
                    </div>
                    <!-- </div> -->
                    <!-- </div> -->

                </div>
                <h1 class="my-[19px] font-[Lato] font-[700] text-[24px] text-center text-[#353535]">
                    It was a very good experience</h1>
                <p class="my-[17px] font-[jost] font-[400] text-[18px] leading-[23.13px] text-left text-[#353535]">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursusnibh mauris, nec turpis orci
                    lectus maecenas.
                    Suspendisse sed magnaeget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis
                    felis id augue
                    sit cursus pellentesqueenim arcu.Elementum felis magna pretium in tincidunt.
                    Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacUSArcu.</p>
            </div>

            <div class="rounded-[12px] py-4 px-6 bg-[#fff] w-[280px] h-[306px] shadow-[2px_2px_5px_2px_#0000001A]">
                <div class="flex justify-center">
                    <div class="flex items-center">
                        <img class="rounded-[100%] w-[60px] h-[60px]" src="/storage/product/client-photo.svg"
                            alt="">
                        <div class="ml-2">
                            <h1 class="font-[Lato] text-[18px] font-[700] text-center text-[#353535]">
                                Leo</h1>
                            <p class="font-[Lato] text-[12px] font-[400] text-center text-[#353535]">
                                Lead Designer</p>
                        </div>
                    </div>
                    <!-- <div class="flex items-baseline"> -->

                    <!-- <div class="flex items-center"> -->
                    <div class="flex mt-[40px] ml-auto">
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                viewBox="0 0 22 22" fill="#FFA033">
                                <path
                                    d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                    fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                viewBox="0 0 22 22" fill="#FFA033">
                                <path
                                    d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                    fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                viewBox="0 0 22 22" fill="#FFA033">
                                <path
                                    d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                    fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                viewBox="0 0 22 22" fill="#FFA033">
                                <path
                                    d="M11 1.8335L13.8325 7.57183L20.1667 8.49766L15.5833 12.9618L16.665 19.2685L11 16.2893L5.335 19.2685L6.41667 12.9618L1.83334 8.49766L8.1675 7.57183L11 1.8335Z"
                                    fill="#FFA033" stroke="#FFA033" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                viewBox="0 0 15 15" fill="none">
                                <path
                                    d="M7.5 1.25L9.43125 5.1625L13.75 5.79375L10.625 8.8375L11.3625 13.1375L7.5 11.1062L3.6375 13.1375L4.375 8.8375L1.25 5.79375L5.56875 5.1625L7.5 1.25Z"
                                    stroke="#FFA033" stroke-linecap="round" stroke-linejoin="round" />
                            </svg></a>
                    </div>
                    <!-- </div> -->
                    <!-- </div> -->

                </div>
                <h1 class="my-[19px] font-[Lato] font-[700] text-[18px] text-center text-[#353535]">
                    It was a very good experience</h1>
                <p class="my-[17px] font-[jost] font-[400] text-[12px] leading-[13.5px] text-left text-[#353535]">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursusnibh mauris, nec turpis orci
                    lectus maecenas.
                    Suspendisse sed magnaeget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis
                    felis id augue
                    sit cursus pellentesqueenim arcu.Elementum felis magna pretium in tincidunt.
                    Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacUSArcu.</p>
            </div>
        </div>
        <div class=" mx-auto w-[177px] h-[17px] flex justify-around pt-[40px] items-center gap-8 my-[30px] ">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36"
                    fill="none">
                    <path d="M22.5 9L13.5 18L22.5 27" stroke="#353535" stroke-width="5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </div>
            <div class='mx-auto w-[177px] h-[17px]'>
                <svg xmlns="http://www.w3.org/2000/svg" width="177" height="17" viewBox="0 0 177 17"
                    fill="none">
                    <circle cx="8.5" cy="8.5" r="8.5" fill="#353535" />
                    <circle cx="104.5" cy="8.5" r="8.5" fill="#C5C5C5" />
                    <circle cx="40.5" cy="8.5" r="8.5" fill="#C5C5C5" />
                    <circle cx="136.5" cy="8.5" r="8.5" fill="#C5C5C5" />
                    <circle cx="72.5" cy="8.5" r="8.5" fill="#C5C5C5" />
                    <circle cx="168.5" cy="8.5" r="8.5" fill="#C5C5C5" />
                </svg>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36"
                    fill="none">
                    <path d="M13.5 27L22.5 18L13.5 9" stroke="#353535" stroke-width="5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </div>
        </div>
        <div class="mt-16 h-[2px] bg-[#380D37]"></div>
    </section>

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
            <form>
                <div class="grid grid-cols-2 gap-2">
                    <input
                        class=" h-[64px] rounded-[4px] bg-[#F2F2F2] font-[jost] text-[16px] italic font-[500] leading-[23px] text-left py-[8px] px-[12px]"
                        id="name" type="text" placeholder="Name*">
                    <input
                        class=" h-[64px] rounded-[4px] bg-[#F2F2F2] font-[jost] text-[16px] italic font-[500] leading-[23px]  py-[8px] px-[12px]"
                        id="email" type="email" placeholder="Email*">
                </div>
                <div>
                    <input
                        class=" h-[64px] rounded-[4px] w-full py-2 px-3 bg-[#F2F2F2] font-[jost] text-[16px] mt-[20px] mb-[20px] italic font-[500] "
                        id="subject" type="text" placeholder="Subject(optional)">
                </div>
                <div>
                    <textarea
                        class="h-[271px] rounded-[4px] w-full py-2 pb-32 px-3 bg-[#F2F2F2] font-[jost] text-[16px]  italic font-[500] "
                        id="message" rows="4" placeholder=" Message"></textarea>
                </div>
                <div class="items-center">
                    <button
                        class="text-[#F2F2F2] text-[16px] h-[44px] w-[116px] rounded-[4px] font-[500] font-[jost] mt-[15px] pt-[5px] pr-[30px] pl-[30px] pb-[5px] bg-gradient-to-r from-[#380D37] to-[#DC275C] "
                        type="submit">Post
                    </button>
                </div>
            </form>
        </div>
    </section>
</div>
