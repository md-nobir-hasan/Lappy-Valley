<div class="">
    <style>
        .menu-toggle {
            cursor: pointer;
            padding: 15px;
            position: absolute;
            top: 5px;
            left: 20px;
            z-index: 2;
        }

        .bar {
            width: 30px;
            height: 3px;
            background-color: #fff;
            margin: 6px 0;
            transition: 0.4s;
        }

        @media (max-width:640px) {
            .bar {
                width: 20px;
                height: 2px;
                margin: 3px 0;
            }

            .menu-toggle {
                top: 0px;
            }

            .menu {
                top: 50px !important;
                width: 200px !important;
            }

            .menu-toggle.active .bar:nth-child(1) {
                transform: rotate(-45deg) translate(-5px, 5px) !important;
            }

            .menu-toggle.active .bar:nth-child(2) {
                opacity: 0;
            }

            .menu-toggle.active .bar:nth-child(3) {
                transform: rotate(45deg) translate(-2px, -2px) !important;
            }
        }

        .menu {
            position: fixed;
            top: 66px;
            left: -300px;
            width: 300px;
            height: 100vh;
            background-color: #f2f2f2;
            z-index: 1;
            overflow: scroll;
            transition: 0.5s;
        }


        .menu ul {
            list-style: none;
            text-align: center;
        }

        .menu a {
            text-decoration: none;
            color: #353535;
            font-size: 16px;
        }

        .menu-toggle.active .bar:nth-child(1) {
            transform: rotate(-45deg) translate(-7px, 5px);
        }

        .menu-toggle.active .bar:nth-child(2) {
            opacity: 0;
        }

        .menu-toggle.active .bar:nth-child(3) {
            transform: rotate(45deg) translate(-7px, -7px);
        }

        .active.menu {
            left: 0px !important;
            color: #fff;
        }

    </style>

    <header
        class="h-[78px] z-[10000] max-sm:h-[50px] max-xl:h-[68px] max-xl:fixed max-xl:top-0 max-xl:left-0 max-xl:right-0 max-xl:z-150 max-xl:flex max-xl:justify-around max-xl:items-center
     bg-gradient-to-r from-[#380D37] to-[#DC275C] text-[#f2f2f2] px-[72px] max-xl:px-[40px]">
        {{-- ------responsive---show----- --}}
        <div class="xl:hidden max-xl:block">
            <div class="menu-toggle">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <div class="menu">
                <nav class="bg-[#f2f2f2] ">
                    <ul class="flex flex-col gap-4 scroll-auto">
                        <li
                            class=" px-6 pt-2 font-[jost] font-[500] text-[#353535] text-[16px] max-sm:text-[12px] bg-[#f2f2f2]">
                            <a href="#" class="flex items-center justify-between">
                                <span class="max-sm:text-[12px]">All Categories</span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 max-sm:w-[15px]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <div class="h-[1px] bg-[#764D8733]"></div>
                        <li
                            class=" px-6 whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] max-sm:text-[12px] max-sm:text-[12px] bg-[#f2f2f2]">
                            <a href="#" class='flex items-center justify-between'>
                                <span class="max-sm:text-[12px]">USA Variant</span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 max-sm:w-[15px]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <div class="h-[1px] bg-[#764D8733]"></div>
                        <li
                            class=" px-6 whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] max-sm:text-[12px] max-sm:text-[12px] bg-[#f2f2f2]">
                            <a href="#" class='flex items-center justify-between'>
                                <span class="max-sm:text-[12px]">Brand New</span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 max-sm:w-[15px]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <div class="h-[1px] bg-[#764D8733]"></div>
                        <li
                            class=" px-6 whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] max-sm:text-[12px] max-sm:text-[12px] bg-[#f2f2f2]">
                            <a href="#" class='flex items-center justify-between'>
                                <span class="max-sm:text-[12px]">Mac Book</span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 max-sm:w-[15px]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <div class="h-[1px] bg-[#764D8733]"></div>
                        <li
                            class=" px-6 whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] max-sm:text-[12px] max-sm:text-[12px] bg-[#f2f2f2]">
                            <a href="#" class='flex items-center justify-between'>
                                <span class="max-sm:text-[12px]">Gamig Laptop</span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 max-sm:w-[15px]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <div class="h-[1px] bg-[#764D8733]"></div>
                        <li
                            class=" px-6 whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] max-sm:text-[12px] max-sm:text-[12px] bg-[#f2f2f2]">
                            <a href="#" class='flex items-center justify-between'>
                                <span class="max-sm:text-[12px]">Pre-Owned</span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 max-sm:w-[15px]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <div class="h-[1px] bg-[#764D8733]"></div>
                        <li
                            class=" px-6 whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] max-sm:text-[12px] max-sm:text-[12px] bg-[#f2f2f2]">
                            <a href="#" class='flex items-center justify-between'>
                                <span class="max-sm:text-[12px]">Studnt Laptop</span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 max-sm:w-[15px]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <div class="h-[1px] bg-[#764D8733]"></div>
                        <li
                            class=" px-6 whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] max-sm:text-[12px] max-sm:text-[12px] bg-[#f2f2f2]">
                            <a href="#" class='flex items-center justify-between'>
                                <span class="max-sm:text-[12px]">Asia Variant</span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 max-sm:w-[15px]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <div class="h-[1px] bg-[#764D8733]"></div>
                        <li
                            class=" px-6 whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] max-sm:text-[12px] max-sm:text-[12px] bg-[#f2f2f2]">
                            <a href="#" class='flex items-center justify-between'>
                                <span class="max-sm:text-[12px]">Asia Variant</span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 max-sm:w-[15px]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <div class="h-[1px] bg-[#764D8733]"></div>
                        <li
                            class=" px-6 whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] max-sm:text-[12px] max-sm:text-[12px] bg-[#f2f2f2]">
                            <a href="#" class='flex items-center justify-between'>
                                <span class="max-sm:text-[12px]">Asia Variant</span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 max-sm:w-[15px]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <div class="h-[1px] bg-[#764D8733]"></div>
                        <li
                            class=" px-6 whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] max-sm:text-[12px] max-sm:text-[12px] bg-[#f2f2f2]">
                            <a href="#" class='flex items-center justify-between'>
                                <span class="max-sm:text-[12px]">Asia Variant</span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 max-sm:w-[15px]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <div class="h-[1px] bg-[#764D8733]"></div>
                        <li
                            class=" px-6 whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] max-sm:text-[12px] max-sm:text-[12px] bg-[#f2f2f2]">
                            <a href="#" class='flex items-center justify-between'>
                                <span class="max-sm:text-[12px]">Asia Variant</span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 max-sm:w-[15px]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <div class="h-[1px] bg-[#764D8733]"></div>
                        <li
                            class=" px-6 whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] max-sm:text-[12px] max-sm:text-[12px] bg-[#f2f2f2]">
                            <a href="#" class='flex items-center justify-between'>
                                <span class="max-sm:text-[12px]">Asia Variant</span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 max-sm:w-[15px]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <div class="h-[1px] bg-[#764D8733]"></div>
                    </ul>
                </nav>
            </div>
        </div>
        {{-- responsive ---show -----end --}}
        <div class="flex items-center justify-between h-full  py-[10px] gap-[55px]">
            <!-- <!- Logo -->
            <div class='items-center'>
                <a href="{{ route('home') }}" wire:navigate>
                    <img class="h-[60px] max-xl:h-[40px] w-[232px] max-sm:w-[150px] max-xl:w-[180px] max-xl:flex max-xl:items-center"
                        src="/storage/product/Logo.svg" alt="Your Logo">
                </a>
            </div>
            <div id="search-icon" class="xl:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <circle cx="11" cy="11" r="6"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
            </div>
            <div id="search-bar" class="fixed top-[70px] left-[210px] z-[9999] hidden" x-data="{

                search: '',
                open: false,
                items: $wire.products,
                get filteredItems() {
                    const searchLower = this.search.toLowerCase();
                    return this.items.filter((i) => i.title.toLowerCase().startsWith(searchLower));
                }
            }">

                <form wire:submit='searchTo' class='h-[44px] w-[655px]'>
                    <div class="flex" @click.outside='open = false'>
                        <select name="cat_id" wire:model.live='cat' wire:change='prdouctFetch'
                            @change='open=true'
                            class="block w-[80px] p-2.5 text-[#380D37] text-[14px] font-[jost] font-[400] leading-[20.23px] border-r-[2px] border-[#380D37]">
                            <option value="" selected>All</option>
                            @foreach ($cats as $ct)
                                <option value="{{ $ct->id }}">{{ $ct->title }}</option>
                            @endforeach
                        </select>
                        <div class="relative flex w-full">
                            <div class="w-full">
                                <span class="">
                                    <input name="search_text" wire:model.live="search"
                                        wire:keyup="searchFuc" @click="open = true" type="search"
                                        id="search-dropdown"
                                        class=" z-20 block p-2.5 w-full text-[#380D37]"
                                        placeholder="I am shopping for..." required>
                                    <div wire:loading wire:target='prdouctFetch,searchFuc'
                                        class="absolute right-[6.5rem] top-2.5 inline-block h-6 w-6 mr-2 animate-spin rounded-full
                                        border-4 border-solid border-current border-r-transparent align-[-0.125em]
                                            text-success motion-reduce:animate-[spin_1.5s_linear_infinite]"
                                        role="status">
                                        <span
                                            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Loading...
                                        </span>
                                    </div>
                                </span>
                                @if (count($products) > 0)
                                    <ul x-show='open'
                                        class="absolute z-50 bg-[white] text-[black] px-6 max-h-[530px] overflow-scroll w-full">
                                        @foreach ($products as $prd)
                                            <li>
                                                <a href="{{ route('product.details', [$prd->slug]) }}"
                                                    wire:navigate class="flex">
                                                    <img src="{{ explode(',', $prd->photo)[0] }}"
                                                        alt="" width="40px" height="40px">
                                                    <div>
                                                        <span>{{ $prd->title }}</span>
                                                        <p>
                                                            <span>{{ round($prd->price - ($prd->price * $prd->discount) / 100) }}</span>
                                                            <span
                                                                class="line-through">{{ $prd->price }}</span>
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                            <button type="submit"
                                class=" top-0 end-0 py-2.5 px-[30px]   h-full bg-[#df146e] text-[#f2f2f2] rounded-r-[2px] overflow-hidden">
                                <span class="">Search</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div>
                <div>
                    <div class="md:flex">
                        <div class="w-full p-3">
                            <div class="relative" x-data="{
                                search: '',
                                open: false,
                                items: null,
                                get filteredItems() {
                                    const searchLower = this.search.toLowerCase();
                                    return this.items.filter((i) => i.title.toLowerCase().startsWith(searchLower));
                                }
                                 }">


                                <form wire:submit='searchTo' class='h-[44px] w-[655px] max-xl:hidden'>
                                    <div class="flex" @click.outside='open = false'>
                                        <select name="cat_id" wire:model.live='cat' wire:change='prdouctFetch'
                                            @change='open=true'
                                            class="block w-[80px] p-2.5 text-[#380D37] text-[14px] font-[jost] font-[400] leading-[20.23px] border-r-[2px] border-[#380D37]">
                                            <option value="" selected>All</option>
                                            @foreach ($cats as $ct)
                                                <option value="{{ $ct->id }}">{{ $ct->title }}</option>
                                            @endforeach
                                            {{-- <option value="CA">Canada</option>
                                            <option value="FR">France</option>
                                            <option value="DE">Germany</option> --}}
                                        </select>
                                        <div class="relative flex w-full">
                                            <div class="w-full">
                                                <span class="">
                                                    <input name="search_text" wire:model.live="search"
                                                        wire:keyup="searchFuc" @click="open = true" type="search"
                                                        id="search-dropdown"
                                                        class=" z-20 block p-2.5 w-full text-[#380D37]"
                                                        placeholder="I am shopping for..." required>
                                                    <div wire:loading wire:target='prdouctFetch,searchFuc'
                                                        class="absolute right-[6.5rem] top-2.5 inline-block h-6 w-6 mr-2 animate-spin rounded-full
                                                        border-4 border-solid border-current border-r-transparent align-[-0.125em]
                                                         text-success motion-reduce:animate-[spin_1.5s_linear_infinite]"
                                                        role="status">
                                                        <span
                                                            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Loading...
                                                        </span>
                                                    </div>
                                                </span>
                                                @if (count($products) > 0)
                                                    <ul x-show='open'
                                                        class="absolute z-50 bg-[white] text-[black] px-6 max-h-[530px] overflow-scroll w-full">
                                                        @foreach ($products as $prd)
                                                            <li>
                                                                <a href="{{ route('product.details', [$prd->slug]) }}"
                                                                    wire:navigate class="flex">
                                                                    <img src="{{ explode(',', $prd->photo)[0] }}"
                                                                        alt="" width="40px" height="40px">
                                                                    <div>
                                                                        <span>{{ $prd->title }}</span>
                                                                        <p>
                                                                            <span>{{ round($prd->price - ($prd->price * $prd->discount) / 100) }}</span>
                                                                            <span
                                                                                class="line-through">{{ $prd->price }}</span>
                                                                        </p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </div>
                                            <button type="submit"
                                                class=" top-0 end-0 py-2.5 px-[30px]   h-full bg-[#df146e] text-[#f2f2f2] rounded-r-[2px] overflow-hidden">
                                                <span class="">Search</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script></script>
            <!-- Right-Side Logos/Icons -->
            <div class='flex items-center justify-between gap-[30px] max-xl:hidden'>
                <!-- <div class="flex item-center "> -->
                <a href="{{ route('offer') }}" wire:navigate
                    class='flex justify-between items-center gap-[10px] text-[16px] max-sm:text-[12px] text-[#FFFFFF] font-[jost] font-[500]'><img
                        class='w-[30px] h-[30px]' src="/storage/product/gift.svg" alt="Logo 1">
                    <span class="">
                        Offers
                    </span></a>
                <a href="{{ route('vcart') }}" wire:navigate
                    class='relative flex justify-between items-center gap-[10px] text-[16px] max-sm:text-[12px] text-[#FFFFFF] font-[jost] font-[500]'><img
                        class='w-[25.6px] h-[24.84px]' src="/storage/product/cart(2).svg" alt="Logo 2">
                    <div
                        class='rounded-[100%] w-[12px] h-[12px] bg-[#f2f2f2] text-center items-center flex justify-center absolute top-0 left-0 ml-[18px]'>
                        <p class='text-[#353535] text-[10px] items items-center' id="cart_count">{{ $cart_count }}
                        </p>
                    </div>
                    <span class="">Cart</span>
                </a>

                @auth
                    <a href="{{ route('account') }}" wire:navigate
                        class='flex justify-between items-center gap-[10px] text-[16px] max-sm:text-[12px] text-[#FFFFFF] font-[jost] font-[500]'>
                        <img class='w-[30.72px] h-[29.81px]' src="/storage/product/account2.svg" alt="Logo 3">

                        <span class="">Account</span>
                    </a>
                @else
                    <a href="{{ route('user.login') }}" wire:navigate
                        class='flex justify-between items-center gap-[10px] text-[16px] max-sm:text-[12px] text-[#FFFFFF] font-[jost] font-[500]'>
                        <img class='w-[30.72px] h-[29.81px]' src="/storage/product/account2.svg" alt="Logo 3">
                        <span class="">Account</span>
                    </a>
                @endauth
            </div>
        </div>
    </header>

    <div
        class='h-[68px] max-sm:h-[50px] text-[#f2f2f2] px-[72px] max-xl:px-[60px] max-md:px-[40px] font-[jost] xl:hidden max-xl:block items-center z-[9999] fixed bottom-0 left-0 right-0  bg-gradient-to-r from-[#380D37] to-[#DC275C]'>
        <div class='flex items-center justify-between gap-[20px] my-[15px]'>
            <!-- <div class="flex item-center "> -->
            <a href="{{ route('offer') }}" wire:navigate
                class='flex justify-between items-center gap-[10px] text-[16px] max-sm:text-[12px] text-[#FFFFFF] font-[jost] font-[500]'><img
                    class='w-[30px] max-sm:w-[20px] max-sm:h-[20px] h-[30px]' src="/storage/product/gift.svg"
                    alt="Logo 1">
                <span class="">
                    Offers
                </span></a>
            <a href="{{ route('vcart') }}" wire:navigate
                class='relative flex justify-between items-center gap-[10px] text-[16px] max-sm:text-[12px] text-[#FFFFFF] font-[jost] font-[500]'><img
                    class='w-[25.6px] max-sm:w-[20px] max-sm:h-[20px] h-[24.84px]' src="/storage/product/cart(2).svg"
                    alt="Logo 2">
                <div
                    class='rounded-[100%] w-[12px] h-[12px] max-sm:w-[10px] max-sm:h-[10px] bg-[#f2f2f2] text-center items-center flex justify-center absolute top-0 left-0 ml-[18px] max-sm:ml-[15px]'>
                    <p class='text-[#353535] text-[10px] max-sm:text-[8px] items items-center' id="cart_count">
                        {{ $cart_count }}
                    </p>
                </div>
                <span class="">Cart</span>
            </a>

            @auth
                <a href="{{ route('account') }}" wire:navigate
                    class='flex justify-between items-center gap-[10px] text-[16px] max-sm:text-[12px] text-[#FFFFFF] font-[jost] font-[500]'>
                    <img class='w-[30.72px] h-[29.81px] max-sm:w-[20px] max-sm:h-[20px]'
                        src="/storage/product/account2.svg" alt="Logo 3">
                    <span>
                        Account
                    </span>
                </a>
            @else
                <a href="{{ route('user.login') }}" wire:navigate
                    class='flex justify-between items-center gap-[10px] text-[16px] max-sm:text-[12px] text-[#FFFFFF] font-[jost] font-[500]'>
                    <img class='w-[30.72px] h-[29.81px] max-sm:w-[20px] max-sm:h-[20px]'
                        src="/storage/product/account2.svg" alt="Logo 3">
                    <span class="">Account</span>
                </a>
            @endauth
        </div>
    </div>
</div>
@script
    <script>
   $('.menu-toggle').click(function (e) {
    $(this).addClass('left-0');
         $('.menu').removeClass('left-[-300px]');
     })

            var menuToggle = document.querySelector('.menu-toggle');
            var menu = document.querySelector('.menu');

            menuToggle.addEventListener('click', function(event) {
                event.stopPropagation(); // Prevents the click event from propagating to the document
                menuToggle.classList.toggle('active');
                menu.classList.toggle('active');
                toggleBodyOverflow(); // Toggle body overflow based on menu state
            });

            document.addEventListener('click', function(event) {
                var isClickInsideMenu = menu.contains(event.target);
                var isClickOnMenuToggle = menuToggle.contains(event.target);

                if (!isClickInsideMenu && !isClickOnMenuToggle) {
                    menu.classList.remove('active');
                    menuToggle.classList.remove('active');
                    toggleBodyOverflow(); // Reset body overflow
                }
            });

            function toggleBodyOverflow() {
                // Check if menu is active and adjust body overflow
                if (menu.classList.contains('active')) {
                    document.body.style.overflow = 'hidden';
                } else {
                    document.body.style.overflow = '';
                }
            }
            // Toggle search bar when clicking the search icon
            $("#search-icon").click(function() {
                $("#search-bar").slideToggle();
                $(this).html(function(_, oldHtml) {
                    return oldHtml.includes("circle") ?
                        '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="6"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>' :
                        '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="6"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>';
                });
            });
    </script>

@endscript
