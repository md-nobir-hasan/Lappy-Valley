<div class="px-[100px] max-sm:px-[15px] max-lg:px-[45px] max-xl:px-[70px] max-sm:mt-[70px] max-xl:mt-[100px]">
    <div class='flex justify-between'>
        <div>
            <h1 class='font-[jost] text-[16px] font-[400] leading-[25.3px] text-[#353535]'>Search / Account</h1>
        </div>
        <div class='flex gap-[5px] items-center'><img src="/storage/product/vector-1.svg" alt="Product"
                class='w-[16px] h-[14px]'>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class='text-[16px] text-[#380D37] font-[jost] font-[400] leading-[23.12px]'>Log
                    Out</button>
            </form>
        </div>
    </div>
    <div class='h-[2px] bg-[#764A8733]'></div>
    <div class="w-[800px] max-lg:w-[750px] max-md:w-[550px] max-sm:w-[340px] mx-auto">
        <div class="flex">
            <div class='mt-[50px] mb-[30px] flex justify-center items-center gap-[5px]'>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="74" height="74" viewBox="0 0 74 74"
                        fill="none">
                        <path
                            d="M37 6.16602C19.9707 6.16602 6.16663 19.9701 6.16663 36.9993C6.16663 54.0286 19.9707 67.8327 37 67.8327C54.0292 67.8327 67.8333 54.0286 67.8333 36.9993C67.8333 19.9701 54.0292 6.16602 37 6.16602Z"
                            stroke="black" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M13.1688 56.5668C13.1688 56.5668 20.0416 47.7917 36.9999 47.7917C53.9582 47.7917 60.8341 56.5668 60.8341 56.5668M36.9999 37C39.4532 37 41.8059 36.0254 43.5406 34.2907C45.2754 32.556 46.2499 30.2033 46.2499 27.75C46.2499 25.2967 45.2754 22.944 43.5406 21.2093C41.8059 19.4746 39.4532 18.5 36.9999 18.5C34.5467 18.5 32.1939 19.4746 30.4592 21.2093C28.7245 22.944 27.7499 25.2967 27.7499 27.75C27.7499 30.2033 28.7245 32.556 30.4592 34.2907C32.1939 36.0254 34.5467 37 36.9999 37Z"
                            stroke="black" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="leading-[18px]">
                    <p class='text-[#000] text-[12px] font-[Inter] font-[400]'>Hello,</p>
                    <h1 class='text-[#000] text-[20px] max-sm:text-[18px] font-[Inter] font-[500]'>Username Here</h1>
                </div>

            </div>
        </div>
        <div class="grid grid-row-2 grid-cols-4 max-md:grid-cols-3 max-sm:grid-cols-2 gap-[10px]">

            {{-- -----------------cart-1 (Order)------------------------ --> --}}
            <a href="{{route('oc')}}" wire:navigate>
            <div
                class='bg-[#f2f2f2] w-[182px] h-[118px] max-sm:w-[150px] max-sm:h-[114px] rounded-[4px] text-center py-[26px]'>
                <div class='items-center'>
                    <div class='flex items-center justify-center'>
                        <svg xmlns="http://www.w3.org/2000/svg" class='items-center' width="34" height="34"
                            viewBox="0 0 34 34" fill="none">
                            <circle cx="17" cy="17" r="17" fill="#380D37" />
                        </svg>
                    </div>
                    <div class='flex justify-center'>
                        <svg xmlns="http://www.w3.org/2000/svg" class='mt-[-30px]' width="24" height="24"
                            viewBox="0 0 24 24" fill="none">
                            <path d="M0 0H23.3598V23.3598H0V0Z" fill="white" fill-opacity="0.01" />
                            <path
                                d="M1.94659 6.81261L1.51131 5.94202C1.18156 6.1069 0.973267 6.44396 0.973267 6.81261H1.94659ZM11.6798 1.94598L12.1151 1.07541C11.8411 0.938404 11.5186 0.938404 11.2446 1.07541L11.6798 1.94598ZM21.4131 6.81261H22.3864C22.3864 6.44396 22.1781 6.1069 21.8484 5.94202L21.4131 6.81261ZM21.4131 16.5459L21.8484 17.4164C22.1781 17.2516 22.3864 16.9145 22.3864 16.5459H21.4131ZM11.6798 21.4125L11.2446 22.2831C11.5186 22.4201 11.8411 22.4201 12.1151 22.2831L11.6798 21.4125ZM1.94659 16.5459H0.973267C0.973267 16.9145 1.18156 17.2516 1.51131 17.4164L1.94659 16.5459ZM2.38188 7.6832L12.1151 2.81655L11.2446 1.07541L1.51131 5.94202L2.38188 7.6832ZM20.4398 6.81261V16.5459H22.3864V6.81261H20.4398ZM20.9778 15.6753L11.2446 20.5419L12.1151 22.2831L21.8484 17.4164L20.9778 15.6753ZM12.1151 20.5419L2.38188 15.6753L1.51131 17.4164L11.2446 22.2831L12.1151 20.5419ZM2.91992 16.5459V6.81261H0.973267V16.5459H2.91992ZM21.8484 5.94202L12.1151 1.07541L11.2446 2.81655L20.9778 7.6832L21.8484 5.94202Z"
                                fill="#F2F2F2" />
                            <path d="M1.94666 6.8125L11.6799 11.6791" stroke="#F2F2F2" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M11.6799 21.4129V11.6797" stroke="#F2F2F2" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M21.4132 6.8125L11.6799 11.6791" stroke="#F2F2F2" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M16.9818 5.25038C17.4626 5.00997 17.6575 4.4253 17.4171 3.9445C17.1767 3.4637 16.592 3.26882 16.1112 3.50922L16.9818 5.25038ZM6.37799 8.37582C5.89717 8.61623 5.70231 9.20091 5.94267 9.68168C6.18308 10.1625 6.76776 10.3574 7.24853 10.117L6.37799 8.37582ZM16.1112 3.50922L6.37799 8.37582L7.24853 10.117L16.9818 5.25038L16.1112 3.50922Z"
                                fill="#F2F2F2" />
                        </svg>
                    </div>
                </div>
                <div class='mt-[10px]'>
                    <p class='text-[#380D37] text-[16px] font-[jost] font-[500] items-center'>Orders</p>
                </div>
            </div>
</a>
            <!-- -----------------cart-2 (edit Profile) ------------------------ -->
            <a href="{{route('ep')}}" wire:navigate>
            <div
                class='bg-[#f2f2f2] w-[182px] h-[118px] max-sm:w-[150px] max-sm:h-[114px] rounded-[4px] text-center py-[26px]'>
                <div class='items-center'>
                    <div class='flex items-center justify-center'>
                        <svg xmlns="http://www.w3.org/2000/svg" class='items-center' width="34" height="34"
                            viewBox="0 0 34 34" fill="none">
                            <circle cx="17" cy="17" r="17" fill="#380D37" />
                        </svg>
                    </div>
                    <div class='flex justify-center mt-[-30px]'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path
                                d="M12 2C6.477 2 2 6.477 2 12C2 17.523 6.477 22 12 22C17.523 22 22 17.523 22 12C22 6.477 17.523 2 12 2Z"
                                stroke="#F2F2F2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M4.271 18.346C4.271 18.346 6.5 15.5 12 15.5C17.5 15.5 19.73 18.346 19.73 18.346M12 12C12.7956 12 13.5587 11.6839 14.1213 11.1213C14.6839 10.5587 15 9.79565 15 9C15 8.20435 14.6839 7.44129 14.1213 6.87868C13.5587 6.31607 12.7956 6 12 6C11.2043 6 10.4413 6.31607 9.87868 6.87868C9.31607 7.44129 9 8.20435 9 9C9 9.79565 9.31607 10.5587 9.87868 11.1213C10.4413 11.6839 11.2043 12 12 12Z"
                                stroke="#F2F2F2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
                <div class='mt-[10px]'>
                    <p class='text-[#380D37] text-[16px] font-[jost] font-[500] items-center'>Edit Profile</p>
                </div>
            </div>
            </a>
            <!-- -----------------cart-3 (chnage password)------------------------ -->
            <a href="{{route('cp')}}" wire:navigate>
            <div
                class='bg-[#f2f2f2] w-[182px] h-[118px] max-sm:w-[150px] max-sm:h-[114px] rounded-[4px] text-center py-[26px]'>
                <div class='items-center'>
                    <div class='flex items-center justify-center'>
                        <svg xmlns="http://www.w3.org/2000/svg" class='items-center' width="34" height="34"
                            viewBox="0 0 34 34" fill="none">
                            <circle cx="17" cy="17" r="17" fill="#380D37" />
                        </svg>
                    </div>
                    <div class='flex justify-center mt-[-30px]'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path
                                d="M15.75 1.5C14.6959 1.49976 13.6565 1.74642 12.7149 2.22023C11.7734 2.69404 10.9559 3.38181 10.328 4.22844C9.7001 5.07506 9.27925 6.057 9.09917 7.09555C8.91909 8.13411 8.98479 9.20041 9.291 10.209L1.5 18V22.5H6L13.791 14.709C14.7194 14.9908 15.6977 15.0692 16.6591 14.9387C17.6206 14.8083 18.5426 14.4721 19.3624 13.953C20.1821 13.434 20.8804 12.7444 21.4095 11.9311C21.9386 11.1178 22.2862 10.2 22.4285 9.24025C22.5709 8.28049 22.5046 7.30132 22.2343 6.36948C21.964 5.43764 21.496 4.57502 20.8622 3.84042C20.2283 3.10582 19.4436 2.51649 18.5614 2.11261C17.6792 1.70872 16.7203 1.49978 15.75 1.5ZM15.75 13.5C15.2336 13.4997 14.7201 13.4234 14.226 13.2735L13.3657 13.0125L12.7305 13.6478L10.3448 16.0335L9.3105 15L8.25 16.0605L9.28425 17.0947L8.09475 18.2843L7.0605 17.25L6 18.3105L7.03425 19.3447L5.379 21H3V18.621L10.3515 11.2695L10.9875 10.6342L10.7265 9.774C10.4059 8.71724 10.4268 7.58631 10.786 6.54207C11.1453 5.49784 11.8247 4.59347 12.7275 3.95762C13.6304 3.32177 14.7108 2.98681 15.815 3.0004C16.9192 3.01398 17.9911 3.37542 18.878 4.03329C19.765 4.69116 20.4219 5.61197 20.7554 6.66473C21.0888 7.71749 21.0818 8.84859 20.7354 9.89714C20.3889 10.9457 19.7206 11.8583 18.8256 12.5051C17.9305 13.152 16.8543 13.5001 15.75 13.5Z"
                                fill="#F2F2F2" />
                            <path
                                d="M16.5 9C17.3284 9 18 8.32843 18 7.5C18 6.67157 17.3284 6 16.5 6C15.6716 6 15 6.67157 15 7.5C15 8.32843 15.6716 9 16.5 9Z"
                                fill="#F2F2F2" />
                        </svg>
                    </div>
                </div>
                <div class='mt-[10px]'>
                    <p class='text-[#380D37] text-[16px] font-[jost] font-[500] items-center'>Change Password</p>
                </div>
            </div>
            </a>
            <!-- -----------------cart-4 (address)------------------------ -->
            <a href="{{route('address')}}" wire:navigate>
            <div
                class='bg-[#f2f2f2] w-[182px] h-[118px] max-sm:w-[150px] max-sm:h-[114px] rounded-[4px] text-center py-[26px]'>
                <div class='items-center'>
                    <div class='flex items-center justify-center'>
                        <svg xmlns="http://www.w3.org/2000/svg" class='items-center' width="34" height="34"
                            viewBox="0 0 34 34" fill="none">
                            <circle cx="17" cy="17" r="17" fill="#380D37" />
                        </svg>
                    </div>
                    <div class='flex justify-center mt-[-30px]'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path
                                d="M12 6.5C12.663 6.5 13.2989 6.76339 13.7678 7.23223C14.2366 7.70107 14.5 8.33696 14.5 9C14.5 9.3283 14.4353 9.65339 14.3097 9.95671C14.1841 10.26 13.9999 10.5356 13.7678 10.7678C13.5356 10.9999 13.26 11.1841 12.9567 11.3097C12.6534 11.4353 12.3283 11.5 12 11.5C11.337 11.5 10.7011 11.2366 10.2322 10.7678C9.76339 10.2989 9.5 9.66304 9.5 9C9.5 8.33696 9.76339 7.70107 10.2322 7.23223C10.7011 6.76339 11.337 6.5 12 6.5ZM12 2C13.8565 2 15.637 2.7375 16.9497 4.05025C18.2625 5.36301 19 7.14348 19 9C19 14.25 12 22 12 22C12 22 5 14.25 5 9C5 7.14348 5.7375 5.36301 7.05025 4.05025C8.36301 2.7375 10.1435 2 12 2ZM12 4C10.6739 4 9.40215 4.52678 8.46447 5.46447C7.52678 6.40215 7 7.67392 7 9C7 10 7 12 12 18.71C17 12 17 10 17 9C17 7.67392 16.4732 6.40215 15.5355 5.46447C14.5979 4.52678 13.3261 4 12 4Z"
                                fill="#F2F2F2" />
                        </svg>
                    </div>
                </div>
                <div class='mt-[10px]'>
                    <p class='text-[#380D37] text-[16px] font-[jost] font-[500] items-center'>Address</p>
                </div>
            </div>
            </a>
            <!-- -----------------cart-5 (wishlist)------------------------ -->
            <a href="{{route('wishlist')}}" wire:navigate>
            <div
                class='bg-[#f2f2f2] w-[182px] h-[118px] max-sm:w-[150px] max-sm:h-[114px] rounded-[4px] text-center py-[26px]'>
                <div class='items-center'>
                    <div class='flex items-center justify-center'>
                        <svg xmlns="http://www.w3.org/2000/svg" class='items-center' width="34" height="34"
                            viewBox="0 0 34 34" fill="none">
                            <circle cx="17" cy="17" r="17" fill="#380D37" />
                        </svg>
                    </div>
                    <div class='flex justify-center mt-[-29px]'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <g clip-path="url(#clip0_1033_2009)">
                                <path
                                    d="M12 21.3432L2.53719 12.7718C-2.60567 7.62895 4.95433 -2.24533 12 5.74324C19.0458 -2.24533 26.5715 7.66324 21.4629 12.7718L12 21.3432Z"
                                    stroke="#F2F2F2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1033_2009">
                                    <rect width="24" height="24" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </div>
                <div class='mt-[10px]'>
                    <p class='text-[#380D37] text-[16px] font-[jost] font-[500] items-center'>Wishlist</p>
                </div>
            </div>
            </a>
        </div>
    </div>
    <div class='h-[2px] bg-[#764A8733] my-[100px] max-sm:mt-[45px] max-sm:mb-[50px]'></div>

</div>
