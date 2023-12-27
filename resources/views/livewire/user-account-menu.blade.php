    <div>
        {{-- location bar  --}}
         <div class='flex justify-between'>
        <h1 class='font-[jost] xl:text-[20px] font-[400] leading-[25.3px] text-[#353535]'><a href="{{route('home')}}">Home</a> / <a href="{{route('account')}}">Account</a></h1>
                                                                                                                                                                                {{-- / {{Str::title(request()->route()->uri)}} --}}
        <div class='flex gap-[5px] items-center'><img src="/storage/product/vector-1.svg" alt="Product"
                class='w-[16px] h-[14px]'>   <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class='text-[16px] text-[#380D37] font-[jost] font-[400] leading-[23.12px]'>Log
                    Out</button>
            </form></div>
    </div>
        {{-- horizontal line  --}}
         <div class='h-[2px] bg-[#764A8733]'></div>

         {{-- user image and name  --}}
        <div class='flex gap-[10px] items-center my-[20px]'>
            <div class='flex gap-[10px] items-center my-[20px]'>
                <style>
                    @media (max-width:530px) {
                        .hello {
                            width: 55px;
                            height: 55px;
                        }

                        .hello-0 {
                            font-size: 10px;
                        }

                        .hello-1 {
                            font-size: 14px;
                        }

                        .now {
                            width: 60px;
                            height: 60px;
                            display: none;
                        }

                        .amd {
                            font-size: 10px;
                        }

                        .pay {
                            font-size: 10px;
                        }

                        .product-4 {
                            width: 370px;
                        }

                        .cros {
                            width: 18px;
                            height: 18px;
                        }

                        .laptop-s {
                            width: 35px;
                            height: 35px;
                        }

                        .amd {
                            line-height: 0px;
                        }

                        .head-td {
                            font-size: 10px
                        }

                    }

                    @media(min-width:530px) {
                        .now-1 {
                            display: none;
                        }
                    }
                </style>
                <div class='hello w-[74px] h-[74px]'>

                    @if (auth()->user()->photo)
                        <img src="{{ auth()->user()->photo }}" alt="Product">
                    @else
                        <img src="/storage/product/iconoir_profile-circle1.svg" alt="Product">
                    @endif
                </div>
                <div>
                    <p
                        class='hello-0 text-[16px] max-sm:text-[14px] text-[#000000] font-[Inter] font-[400] leadint-[14.52px]'>
                        Hello,
                    </p>
                    <h1
                        class='username text-[20px] max-sm:text-[16px] max-md:text-[] max-lg:text-[] text-[#000000] font-[Inter] font-[500] leadint-[24.2px]'>
                        {{ auth()->user()->name }}
                    </h1>
                </div>
            </div>
        </div>

        {{-- menu bar  --}}
        <div
            class='product-4 grid grid-cols-5 gap-[20px] max-sm:grid-cols-2 max-lg:grid-cols-3 max-md:w-full max-lg:w-[510px] w-[1000px] my-[30px]'>
            <a href="{{ route('oc') }}" wire:navigate>
                <div class='flex gap-[5px] items-center'>
                    @if (request()->routeIs('oc'))
                        <img src="/storage/product/icon-ad-black.svg"alt="Product" class='w-[23.36px] h-[26.21px]'>
                    @else
                        <img src="/storage/product/iconoir_profile-circle1.svg"alt="Product"
                            class='w-[23.36px] h-[26.21px]'>
                    @endif
                    {{-- <img src="/storage/product/{{request()->routeIs('oc') ? 'icon-ad-black.svg' : 'iconoir_profile-circle1.svg'}}"alt="Product" class='w-[23.36px] h-[26.21px]'> --}}
                    <span
                        class='{{ request()->routeIs('oc') ? 'text-[#380D37]' : 'text-[#AAAAAA]' }} text-[16px] font-[jost] font-[500] leading-[23.12px]'>Orders</span>
                </div>
            </a>

            <a href="{{ route('ep') }}" wire:navigate>
                <div class='flex gap-[5px] items-center'>
                    @if (request()->routeIs('ep'))
                        <img src="/storage/product/iconoir_profile-circle-black.svg"alt="Product"
                            class='w-[23.36px] h-[26.21px]'>
                    @else
                        <img src="/storage/product/iconoir_profile-circle.svg"alt="Product"
                            class='w-[23.36px] h-[26.21px]'>
                    @endif
                    {{-- <img src="/storage/product/{{ request()->routeIs('ep') ? 'iconoir_profile-circle-black.svg' : 'iconoir_profile-circle.svg' }}"
                    alt="Product" class='w-[24px] h-[24px]'> --}}
                    <span
                        class='{{ request()->routeIs('ep') ? 'text-[#380D37]' : 'text-[#AAAAAA]' }} text-[16px] font-[jost] font-[500] leading-[23.12px]'>Edit
                        Profile</span>
                </div>
            </a>

            <a href="{{ route('cp') }}" wire:navigate>
                <div class='flex gap-[5px] items-center'>
                    @if (request()->routeIs('cp'))
                        <img src="/storage/product/carbon_password-black.svg"alt="Product"
                            class='w-[23.36px] h-[26.21px]'>
                    @else
                        <img src="/storage/product/carbon_password.svg"alt="Product" class='w-[23.36px] h-[26.21px]'>
                    @endif
                    {{-- <img src="/storage/product/{{ request()->routeIs('cp') ? 'carbon_password-black.svg' : 'carbon_password.svg' }}"
                    alt="Product" class='w-[24px] h-[24px]'> --}}
                    <span
                        class='{{ request()->routeIs('cp') ? 'text-[#380D37]' : 'text-[#AAAAAA]' }} text-[16px] font-[jost] font-[500] leading-[23.12px]'>Change
                        Password</span>
                </div>
            </a>

            <a href="{{ route('address') }}" wire:navigate>
                <div class='flex gap-[5px] items-center'>
                    @if (request()->routeIs('address'))
                        <img src="/storage/product/mdi_address-marker-outline-black.svg"alt="Product"
                            class='w-[23.36px] h-[26.21px]'>
                    @else
                        <img src="/storage/product/mdi_address-marker-outline.svg"alt="Product"
                            class='w-[23.36px] h-[26.21px]'>
                    @endif
                    {{-- <img src="/storage/product/{{ request()->routeIs('address') ? 'mdi_address-marker-outline-black.svg' : 'mdi_address-marker-outline.svg' }}"
                    alt="Product" class='w-[24px] h-[24px]'> --}}
                    <span
                        class='{{ request()->routeIs('address') ? 'text-[#380D37]' : 'text-[#AAAAAA]' }} text-[16px] font-[jost] font-[500] leading-[23.12px]'>Address</span>
                </div>
            </a>

            <a href="{{ route('wishlist') }}" wire:navigate>
                <div class='flex gap-[5px] items-center'>
                    @if (request()->routeIs('wishlist'))
                        <img src="/storage/product/Vector-2.svg"alt="Product" class='w-[23.36px] h-[26.21px]'>
                    @else
                        <img src="/storage/product/Vector-light-opacity.svg"alt="Product"
                            class='w-[23.36px] h-[26.21px]'>
                    @endif
                    {{-- <img src="/storage/product/{{ request()->routeIs('wishlist') ? 'Vector-2.svg' : 'Vector-light-opacity.svg' }}"
                    alt="Product" class='w-[22.3px] h-[20.88px]'> --}}
                    <span
                        class='{{ request()->routeIs('wishlist') ? 'text-[#380D37]' : 'text-[#AAAAAA]' }} text-[16px] font-[jost] font-[500] leading-[23.12px]'>Wish
                        List</span>
                </div>
            </a>

        </div>

        {{-- horizontal line  --}}
        <div class='h-[2px] bg-[#764A8733]'></div>
    </div>
