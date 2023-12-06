<div class="relative">
    <style>

    </style>
    <header
        class="h-[78px] z-[10000] max-xl:h-[68px] max-xl:fixed max-xl:top-0 max-xl:left-0 max-xl:right-0 max-xl:z-150 max-xl:flex max-xl:justify-between max-xl:items-center
     bg-gradient-to-r from-[#380D37] to-[#DC275C] text-[#f2f2f2] px-[72px] max-xl:px-[40px]">
        {{-- ------responsive---show----- --}}
        <div class=" xl:hidden max-xl:block">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class=" menu w-6 h-6 xl-hidden max-xl:block">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </div>

        {{-- responsive ---show -----end --}}
        <div class="flex items-center justify-evenly h-full  py-[10px] gap-[5px]">
            <!-- <!- Logo -->
            <div class=''>
                <a href="{{ route('home') }}" wire:navigate>
                    <img class="h-[60px] max-xl:h-[40px] w-[232px] max-xl:w-[180px] max-xl:flex max-xl:items-center"
                        src="/storage/product/Logo.svg" alt="Your Logo">
                </a>
            </div>
            <div>
                <div>
                    <div class="md:flex">
                        <div class="w-full p-3">
                            <div class="relative" x-data="{
                                search: '',
                                open: false,
                                items: $wire.products,
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
                                                    <div wire:loading
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
                                                                    <img src="{{ $prd->photo }}" alt=""
                                                                        width="40px" height="40px">
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
                                                {{-- <ul :class="{ 'hidden': hidden }"
                                                    class="fixed z-50 bg-[white] text-[black] px-6 h-[530px] overflow-scroll">
                                                    <template x-for="item in filteredItems" :key="item.id">
                                                        <li>
                                                            <a :href="'/product-details/' + item.slug" class="flex">
                                                                <img :src="item.photo" alt=""
                                                                    width="40px" height="40px">
                                                                <div>
                                                                    <span x-text="item.title"></span>
                                                                    <p>
                                                                        <span x-text='Math.round(Number(item.price) - (Number(item.price)*Number(item.discount)/100))'></span>
                                                                        <span x-text='Math.round(item.price)'  class="line-through"></span>
                                                                    </p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </template>
                                                </ul> --}}
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
            <!-- Right-Side Logos/Icons -->
            <div class='flex items-center justify-center gap-[10px] max-xl:hidden'>
                <!-- <div class="flex item-center "> -->
                <a href="{{ route('offer') }}"><img class='w-[119px] h-[44]' src="/storage/product/Offers.svg"
                        alt="Logo 1"></a>
                <a href="{{ route('vcart') }}" class='relative'><img class='w-[118.76px] h-[43.72px]'
                        src="/storage/product/Cart.svg" alt="Logo 2">
                    <div
                        class='rounded-[100%] w-[12px] h-[12px] bg-[#f2f2f2] text-center items-center flex justify-center absolute top-0 right-0 translate-x-[-60px] translate-y-[10px]'>
                        <p class='text-[#353535] text-[10px] items items-center' id="cart_count">{{ $cart_count }}
                        </p>
                    </div>
                </a>

                @auth
                    <a href="{{ route('account') }}">
                        <img class='w-[118.76px] h-[43.72px]' src="/storage/product/Account.svg" alt="Logo 3">
                    </a>
                @else
                    <a href="{{ route('user.login') }}">
                        <img class='w-[118.76px] h-[43.72px]' src="/storage/product/Account.svg" alt="Logo 3">
                    </a>
                @endauth
            </div>
        </div>
    </header>

    <div class='h-[68px] text-[#f2f2f2] px-[72px] max-xl:px-[60px] max-md:px-[40px] font-[jost] xl:hidden max-xl:block items-center z-[9999] fixed bottom-0 left-0 right-0  bg-gradient-to-r from-[#380D37] to-[#DC275C]'>
        <div class="flex items-center justify-between my-[15px]">
            <!-- <div class="flex item-center "> -->
            <a href="{{ route('offer') }}"><img class='w-[119px] h-[44] max-xl:w-[100px] max-xl:h-[35px]' src="/storage/product/Offers.svg"
                    alt="Logo 1"></a>
            <a href="{{ route('vcart') }}" class='relative'><img class='w-[118.76px] h-[43.72px] max-xl:w-[100px] max-xl:h-[35px]'
                    src="/storage/product/Cart.svg" alt="Logo 2">
                <div
                    class='rounded-[100%] w-[12px] h-[12px] bg-[#f2f2f2] text-center items-center flex justify-center absolute top-0 right-0 translate-x-[-60px] translate-y-[10px]'>
                    <p class='text-[#353535] text-[10px] items items-center' id="cart_count">{{ $cart_count }}
                    </p>
                </div>
            </a>
    
            @auth
                <a href="{{ route('account') }}">
                    <img class='w-[118.76px] h-[43.72px] max-xl:w-[100px] max-xl:h-[35px]' src="/storage/product/Account.svg" alt="Logo 3">
                </a>
            @else
                <a href="{{ route('user.login') }}">
                    <img class='w-[118.76px] h-[43.72px] max-xl:w-[100px] max-xl:h-[35px]' src="/storage/product/Account.svg" alt="Logo 3">
                </a>
            @endauth
        </div>
    </div>
    {{-- responsive side nav --}}
    <div class="showMenu w-[250px] fixed left-[-280px] top-[68px] z-[10000]">
        <style>
            ::-webkit-scrollbar (width: 5px;
            ) ::-webkit-scrollbar -thumb (background : #fff;
            )
        </style>
        <nav class="bg-[#f2f2f2] sticky top-0 left-0">
            <ul class="flex flex-col gap-4 scroll-auto">
                <li class=" px-6 pt-2 font-[jost] font-[500] text-[#353535] text-[16px] bg-[#f2f2f2]">
                    <a href="#" class="flex justify-between items-center">
                        <span>All Categories</span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>
                        </span>
                    </a>
                </li>
                <div class="h-[1px] bg-[#764D8733]"></div>
                <li
                    class=" px-6 whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] bg-[#f2f2f2]">
                    <a href="#" class='flex justify-between items-center'>
                        <span>USA ariant</span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>
                        </span>
                    </a>
                </li>
                <div class="h-[1px] bg-[#764D8733]"></div>
                <li
                    class=" px-6 whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] bg-[#f2f2f2]">
                    <a href="#" class='flex justify-between items-center'>
                        <span>Bran New</span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>
                        </span>
                    </a>
                </li>
                <div class="h-[1px] bg-[#764D8733]"></div>
                <li
                    class=" px-6 whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] bg-[#f2f2f2]">
                    <a href="#" class='flex justify-between items-center'>
                        <span>Mac Book</span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>
                        </span>
                    </a>
                </li>
                <div class="h-[1px] bg-[#764D8733]"></div>
                <li
                    class=" px-6 whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] bg-[#f2f2f2]">
                    <a href="#" class='flex justify-between items-center'>
                        <span>Gamig Laptop</span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>
                        </span>
                    </a>
                </li>
                <div class="h-[1px] bg-[#764D8733]"></div>
                <li
                    class=" px-6 whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] bg-[#f2f2f2]">
                    <a href="#" class='flex justify-between items-center'>
                        <span>Pre-wned</span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>
                        </span>
                    </a>
                </li>
                <div class="h-[1px] bg-[#764D8733]"></div>
                <li
                    class=" px-6 whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] bg-[#f2f2f2]">
                    <a href="#" class='flex justify-between items-center'>
                        <span>Studnt Laptop</span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>
                        </span>
                    </a>
                </li>
                <div class="h-[1px] bg-[#764D8733]"></div>
                <li
                    class=" px-6 whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] bg-[#f2f2f2]">
                    <a href="#" class='flex justify-between items-center'>
                        <span>Asia Variant</span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>
                        </span>
                    </a>
                </li>
                <div class="h-[1px] bg-[#764D8733]"></div>

                <li
                    class=" px-6 whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] bg-[#f2f2f2]">
                    <a href="#" class='flex justify-between items-center'>
                        <span>Asia Variant</span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>
                        </span>
                    </a>
                </li>
                <div class="h-[1px] bg-[#764D8733]"></div>
                <li
                    class=" px-6 whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] bg-[#f2f2f2]">
                    <a href="#" class='flex justify-between items-center'>
                        <span>Asia Variant</span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>
                        </span>
                    </a>
                </li>
                <div class="h-[1px] bg-[#764D8733]"></div>
                <li
                    class=" px-6 whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] bg-[#f2f2f2]">
                    <a href="#" class='flex justify-between items-center'>
                        <span>Asia Variant</span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>
                        </span>
                    </a>
                </li>
                <div class="h-[1px] bg-[#764D8733]"></div>
                <li
                    class=" px-6 whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] bg-[#f2f2f2]">
                    <a href="#" class='flex justify-between items-center'>
                        <span>Asia Variant</span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>
                        </span>
                    </a>
                </li>
                <div class="h-[1px] bg-[#764D8733]"></div>
                <li
                    class=" px-6 whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] bg-[#f2f2f2]">
                    <a href="#" class='flex justify-between items-center'>
                        <span>Asia Variant</span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>
                        </span>
                    </a>
                </li>
                <div class="h-[1px] bg-[#764D8733]"></div>
                <li
                    class=" px-6 whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] bg-[#f2f2f2]">
                    <a href="#" class='flex justify-between items-center'>
                        <span>Asia Variant</span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>
                        </span>
                    </a>
                </li>
                <div class="h-[1px] bg-[#764D8733]"></div>
                <li
                    class=" px-6 whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] bg-[#f2f2f2]">
                    <a href="#" class='flex justify-between items-center'>
                        <span>Asia Variant</span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>
                        </span>
                    </a>
                </li>
                <div class="h-[1px] bg-[#764D8733]"></div>
                <li
                    class=" px-6 whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] bg-[#f2f2f2]">
                    <a href="#" class='flex justify-between items-center'>
                        <span>Asia Variant</span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>
                        </span>
                    </a>
                </li>
                <div class="h-[1px] bg-[#764D8733]"></div>
            </ul>
        </nav>
    </div>
    <script>
        $(document).ready(function() {
            let mobile_nav_open = false;

            $(".menu").click(function() {
                // $(".showMenu").slideToggle();
                if (mobile_nav_open) {
                    // $(this).addClass('left-[-280px]');
                    $(".showMenu").addClass('left-[-280px] transition ease-in-out delay-150');
                    $(".blurH").removeClass('blur-sm')
                    mobile_nav_open = false;    
                } else {
                    $(".blurH").addClass('blur-sm')
                    $(".showMenu").removeClass('left-[-280px] transition ease-in-out delay-150');
                    mobile_nav_open = true;
                }

            });
        });
    </script>
</div>
