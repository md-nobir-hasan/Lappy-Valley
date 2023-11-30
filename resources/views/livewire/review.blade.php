
<div class="container mx-auto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/frontend/owl-carousel-libraries/owl.carousel.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+HK&display=swap');

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Noto Sans HK', sans-serif;
            background: #fff;
        }

        .slider {
            margin-bottom: 30px;
            position: relative;
        }

        .slider .owl-item.active.center .slider-card {
            transform: scale(1.15);
            opacity: 1;
            /* background: #ff9966; */
            /* fallback for old browsers */
            /* background: -webkit-linear-gradient(to bottom, #ff5e62, #ff9966); */
            /* Chrome 10-25, Safari 5.1-6 */
            /* background: linear-gradient(to bottom, #ff5e62, #ff9966); */
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            color: #fff;
        }

        .slider-card {
            background: #fff;
            padding: 0px 0px;
            margin: 50px 15px 90px 15px;
            border-radius: 5px;
            box-shadow: 0 15px 45px -20px rgb(0 0 0 / 73%);
            transform: scale(0.9);
            opacity: 0.5;
            transition: all 0.3s;
        }

        .slider-card img {
            border-radius: 4px 4px 0px 0px;
        }

        .owl-nav .owl-prev {
            position: absolute;
            top: calc(50% - 25px);
            left: 0;
            opacity: 1;
            font-size: 30px !important;
            z-index: 1;
        }

        .owl-nav .owl-next {
            position: absolute;
            top: calc(50% - 25px);
            right: 0;
            opacity: 1;
            font-size: 30px !important;
            z-index: 1;
        }

        .owl-dots {
            text-align: center;
        }

        .owl-dots .owl-dot {
            height: 10px;
            width: 10px;
            border-radius: 10px;
            background: #ccc !important;
            margin-left: 3px;
            margin-right: 3px;
            outline: none;
        }

        .owl-dots .owl-dot.active {
            background: #f44336 !important;
        }
    </style>
    <section id="slider" class="pt-5 mx-auto">
        <div class="container mx-auto">
            <h1 class="text-center"><b>Responsive Owl Carousel</b></h1>
            <div class="slider">
                <div class="owl-carousel">
                    <div class="slider-card">
                        <div class="rounded-[16px] py-4 px-4 bg-[#fff] h-[423px] shadow-[2px_2px_5px_2px_#0000001A]">
                            <div class="flex justify-center">
                                <div class="flex items-center">
                                    <div>
                                        <img class="rounded-[100%] w-[72px] h-[72px]" src="/storage/product/client-photo.svg"
                                        alt="">
                                    </div>
                                    <div class="ml-2">
                                        <h1 class="font-[Lato] text-[24px] font-[700]  text-center text-[#353535]">
                                            Leo</h1>
                                        <p class="font-[Lato] text-[18px] font-[400] text-center text-[#353535]">
                                            Lead Designer</p>
                                    </div>
                                </div>
            
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
                          <div>
                            <h1 class="my-[19px] font-[Lato] font-[700] text-[24px]  text-center text-[#353535] leading-[28.8px]">
                                It was a very good experience</h1>
                          </div>
                            <div>
                            <p class="my-[17px] font-[jost] font-[400] text-[18px] leading-[23.13px] text-left text-[#353535]">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursusnibh mauris, nec turpis orci
                                lectus maecenas.
                                Suspendisse sed magnaeget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis
                                felis id augue
                                sit cursus pellentesqueenim arcu.Elementum felis magna pretium in tincidunt.
                                Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacUSArcu.</p>
                        </div>
                    </div>
                    </div>
                    <div class="slider-card">
                        <div class="rounded-[16px] py-4 px-4 bg-[#fff] h-[423px] shadow-[2px_2px_5px_2px_#0000001A]">
                            <div class="flex justify-center">
                                <div class="flex items-center">
                                    <div>
                                        <img class="rounded-[100%] w-[72px] h-[72px]" src="/storage/product/client-photo.svg"
                                        alt="">
                                    </div>
                                    <div class="ml-2">
                                        <h1 class="font-[Lato] text-[24px] font-[700]  text-center text-[#353535]">
                                            Leo</h1>
                                        <p class="font-[Lato] text-[18px] font-[400] text-center text-[#353535]">
                                            Lead Designer</p>
                                    </div>
                                </div>
            
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
                          <div>
                            <h1 class="my-[19px] font-[Lato] font-[700] text-[24px]  text-center text-[#353535] leading-[28.8px]">
                                It was a very good experience</h1>
                          </div>
                            <div>
                            <p class="my-[17px] font-[jost] font-[400] text-[18px] leading-[23.13px] text-left text-[#353535]">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursusnibh mauris, nec turpis orci
                                lectus maecenas.
                                Suspendisse sed magnaeget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis
                                felis id augue
                                sit cursus pellentesqueenim arcu.Elementum felis magna pretium in tincidunt.
                                Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacUSArcu.</p>
                        </div>
                    </div>
                    </div>
                    <div class="slider-card">
                        <div class="rounded-[16px] py-4 px-4 bg-[#fff] h-[423px] shadow-[2px_2px_5px_2px_#0000001A]">
                            <div class="flex justify-center">
                                <div class="flex items-center">
                                    <div>
                                        <img class="rounded-[100%] w-[72px] h-[72px]" src="/storage/product/client-photo.svg"
                                        alt="">
                                    </div>
                                    <div class="ml-2">
                                        <h1 class="font-[Lato] text-[24px] font-[700]  text-center text-[#353535]">
                                            Leo</h1>
                                        <p class="font-[Lato] text-[18px] font-[400] text-center text-[#353535]">
                                            Lead Designer</p>
                                    </div>
                                </div>
            
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
                          <div>
                            <h1 class="my-[19px] font-[Lato] font-[700] text-[24px]  text-center text-[#353535] leading-[28.8px]">
                                It was a very good experience</h1>
                          </div>
                            <div>
                            <p class="my-[17px] font-[jost] font-[400] text-[18px] leading-[23.13px] text-left text-[#353535]">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursusnibh mauris, nec turpis orci
                                lectus maecenas.
                                Suspendisse sed magnaeget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis
                                felis id augue
                                sit cursus pellentesqueenim arcu.Elementum felis magna pretium in tincidunt.
                                Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacUSArcu.</p>
                        </div>
                    </div>
                    </div>
                    <div class="slider-card">
                        <div class="rounded-[16px] py-4 px-4 bg-[#fff] h-[423px] shadow-[2px_2px_5px_2px_#0000001A]">
                            <div class="flex justify-center">
                                <div class="flex items-center">
                                    <div>
                                        <img class="rounded-[100%] w-[72px] h-[72px]" src="/storage/product/client-photo.svg"
                                        alt="">
                                    </div>
                                    <div class="ml-2">
                                        <h1 class="font-[Lato] text-[24px] font-[700]  text-center text-[#353535]">
                                            Leo</h1>
                                        <p class="font-[Lato] text-[18px] font-[400] text-center text-[#353535]">
                                            Lead Designer</p>
                                    </div>
                                </div>
            
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
                          <div>
                            <h1 class="my-[19px] font-[Lato] font-[700] text-[24px]  text-center text-[#353535] leading-[28.8px]">
                                It was a very good experience</h1>
                          </div>
                            <div>
                            <p class="my-[17px] font-[jost] font-[400] text-[18px] leading-[23.13px] text-left text-[#353535]">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursusnibh mauris, nec turpis orci
                                lectus maecenas.
                                Suspendisse sed magnaeget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis
                                felis id augue
                                sit cursus pellentesqueenim arcu.Elementum felis magna pretium in tincidunt.
                                Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacUSArcu.</p>
                        </div>
                    </div>
                    </div>
                    <div class="slider-card"> 
                        <div class="rounded-[16px] py-4 px-4 bg-[#fff] h-[423px] shadow-[2px_2px_5px_2px_#0000001A]">
                            <div class="flex justify-center">
                                <div class="flex items-center">
                                    <div>
                                        <img class="rounded-[100%] w-[72px] h-[72px]" src="/storage/product/client-photo.svg"
                                        alt="">
                                    </div>
                                    <div class="ml-2">
                                        <h1 class="font-[Lato] text-[24px] font-[700]  text-center text-[#353535]">
                                            Leo</h1>
                                        <p class="font-[Lato] text-[18px] font-[400] text-center text-[#353535]">
                                            Lead Designer</p>
                                    </div>
                                </div>
            
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
                          <div>
                            <h1 class="my-[19px] font-[Lato] font-[700] text-[24px]  text-center text-[#353535] leading-[28.8px]">
                                It was a very good experience</h1>
                          </div>
                            <div>
                            <p class="my-[17px] font-[jost] font-[400] text-[18px] leading-[23.13px] text-left text-[#353535]">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursusnibh mauris, nec turpis orci
                                lectus maecenas.
                                Suspendisse sed magnaeget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis
                                felis id augue
                                sit cursus pellentesqueenim arcu.Elementum felis magna pretium in tincidunt.
                                Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacUSArcu.</p>
                        </div>
                    </div>
                    </div>
                      <div class="slider-card">
                        <div class="rounded-[16px] py-4 px-4 bg-[#fff] h-[423px] shadow-[2px_2px_5px_2px_#0000001A]">
                            <div class="flex justify-center">
                                <div class="flex items-center">
                                    <div>
                                        <img class="rounded-[100%] w-[72px] h-[72px]" src="/storage/product/client-photo.svg"
                                        alt="">
                                    </div>
                                    <div class="ml-2">
                                        <h1 class="font-[Lato] text-[24px] font-[700]  text-center text-[#353535]">
                                            Leo</h1>
                                        <p class="font-[Lato] text-[18px] font-[400] text-center text-[#353535]">
                                            Lead Designer</p>
                                    </div>
                                </div>
            
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
                          <div>
                            <h1 class="my-[19px] font-[Lato] font-[700] text-[24px]  text-center text-[#353535] leading-[28.8px]">
                                It was a very good experience</h1>
                          </div>
                            <div>
                            <p class="my-[17px] font-[jost] font-[400] text-[18px] leading-[23.13px] text-left text-[#353535]">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursusnibh mauris, nec turpis orci
                                lectus maecenas.
                                Suspendisse sed magnaeget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis
                                felis id augue
                                sit cursus pellentesqueenim arcu.Elementum felis magna pretium in tincidunt.
                                Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacUSArcu.</p>
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
                    '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" /></svg>',
                    '<svg xmlns="http:www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /> </svg>'
                ],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        });
    </script>
</div>
