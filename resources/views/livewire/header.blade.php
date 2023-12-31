<div>
    <header
        class="h-[78px] z-[10000] max-sm:h-[50px] max-xl:h-[68px] max-xl:fixed max-xl:top-0 max-xl:left-0 max-xl:right-0 max-xl:z-150 max-xl:flex max-xl:justify-between max-xl:items-center max-xl:border-b-[2px] max-xl:border-[#f2f2f2]
     bg-gradient-to-r from-[#380D37] to-[#DC275C] text-[#f2f2f2] px-[72px] max-xl:px-[40px]">
        <div id="body-overlay1"></div>

        {{-- Mobile menue  --}}
        {{-- ------responsive---show----- --}}
        <div class="xl:hidden max-xl:block">
            <div class="menu-toggle">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <div class="menu">
                {{-- Mobile menue  --}}
                <nav class="bg-[#f2f2f2] ">
                    <ul class="flex flex-col scroll-auto">
                        <li
                            class="menu-container2pt-2 font-[jost] font-[500] text-[#353535] text-[16px] max-sm:text-[14px] bg-[#f2f2f2]">
                            <div class="flex items-center justify-between px-6 py-3 max-sm:px-4 max-sm:py-2 toggleBtn2">
                                <div class="max-sm:text-[14px] cursor-pointer">All Categories</div>
                                <div class="toggle-btn2">
                                    <svg class="plus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        width="24" height="24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    <svg class="minus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        width="24" height="24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        style="display: none;">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                </div>
                            </div>
                            <ul
                                class="menu2 hidden list-none bg-[#fff] mt-[10px] text-[#380D37] hover:text-[#f2f2f2] text-[16px] max-sm:text-[14px] font-[jost] font-[400] w-full transition-opacity duration-[3s] ease-in-out origin-top">
                                <li class="border-y-[1px] border-[#764A87]"><a href="{{ route('shop') }}"
                                        wire:navigate>All</a></li>
                                @foreach ($menus as $menu1)
                                    <li class="border-b-[1px] border-[#764A87] "><a
                                            href="{{ route('cate_wise.shop', [$menu1->slug]) }}"
                                            wire:navigate>{{ $menu1->title }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        @foreach ($menus as $menu)
                            <div class="h-[1px] bg-[#764D8733]"></div>
                            <li
                                class="whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] max-sm:text-[14px] bg-[#f2f2f2]">
                                @if (count($menu->child_cat) > 0)
                                    <div
                                        class="flex items-center justify-between px-6 py-3 max-sm:px-4 max-sm:py-2 toggleBtn2">
                                        <div class="max-sm:text-[14px] cursor-pointer">{{ $menu->title }}</div>
                                        <div class="toggle-btn2">
                                            <svg class="plus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                width="24" height="24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <line x1="12" y1="5" x2="12" y2="19">
                                                </line>
                                                <line x1="5" y1="12" x2="19" y2="12">
                                                </line>
                                            </svg>
                                            <svg class="minus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                width="24" height="24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                style="display: none;">
                                                <line x1="5" y1="12" x2="19" y2="12">
                                                </line>
                                            </svg>
                                        </div>
                                    </div>
                                    <ul
                                        class="menu2 hidden list-none bg-[#fff] mt-[10px] text-[#380D37] hover:text-[#f2f2f2] text-[16px] max-sm:text-[14px] font-[jost] font-[400] w-full transition-opacity duration-[3s] ease-in-out origin-top">
                                        @foreach ($menu->child_cat as $menu2)
                                            @if ($loop->first)
                                                <li class="border-y-[1px] border-[#764A87]"><a
                                                        href="{{ route('cate_wise.shop', [$menu->slug,$menu2->slug]) }}"
                                                        wire:navigate>{{ $menu2->title }}</a></li>
                                            @else
                                                <li class="border-b-[1px] border-[#764A87]"><a
                                                        href="{{ route('cate_wise.shop', [$menu->slug,$menu2->slug]) }}"
                                                        wire:navigate>{{ $menu2->title }}</a></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                @else
                                    <div
                                        class="flex items-center justify-between px-6 py-3 max-sm:px-4 max-sm:py-2">
                                        <a  href="{{ route('cate_wise.shop', [$menu->slug]) }}" wire:navigate
                                            class="max-sm:text-[14px]">{{ $menu->title }}</a>

                                    </div>
                                @endif
                            </li>
                        @endforeach
                        <div class="h-[1px] bg-[#764D8733]"></div>
                        {{-- <li
                            class="whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] max-sm:text-[14px] bg-[#f2f2f2]">
                            <div href="#" class="flex items-center justify-between px-6 py-3 max-sm:px-4 max-sm:py-2 toggleBtn2">
                                <div class="max-sm:text-[14px]">All Categories</div>
                                <div class="toggle-btn2">
                                    <svg class="plus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        width="24" height="24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    <svg class="minus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        width="24" height="24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        style="display: none;">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                </div>
                            </div>
                            <ul
                                class="menu2 hidden list-none bg-[#fff] mt-[10px] text-[#380D37] hover:text-[#f2f2f2] text-[16px] max-sm:text-[14px] font-[jost] font-[400] w-full transition-opacity duration-[3s] ease-in-out origin-top">
                                <li class="border-y-[1px] border-[#764A87]"><a href="#">Asus</a></li>
                                <li class="border-b-[1px] border-[#764A87]"><a href="#">DELL</a></li>
                                <li class="border-b-[1px] border-[#764A87]"><a href="#">HP</a></li>
                                <li class="border-b-[1px] border-[#764A87]"><a href="#">Lenovo</a></li>
                                <li class="border-b-[1px] border-[#764A87]"><a href="#">Acer</a></li>
                                <li class="border-b-[1px] border-[#764A87]"><a href="#">Apple</a></li>
                                <li class="border-b-[1px] border-[#764A87]"><a href="#">MSI</a></li>
                            </ul>
                        </li>
                        <div class="h-[1px] bg-[#764D8733]"></div>
                        <li
                            class="whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] max-sm:text-[14px] bg-[#f2f2f2]">
                            <div href="#" class="flex items-center justify-between px-6 py-3 max-sm:px-4 max-sm:py-2 toggleBtn2">
                                <div class="max-sm:text-[14px]">All Categories</div>
                                <div class="toggle-btn2">
                                    <svg class="plus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        width="24" height="24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    <svg class="minus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        width="24" height="24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        style="display: none;">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                </div>
                            </div>
                            <ul
                                class="menu2 hidden list-none bg-[#fff] mt-[10px] text-[#380D37] hover:text-[#f2f2f2] text-[16px] max-sm:text-[14px] font-[jost] font-[400]  w-full transition-opacity duration-[3s] ease-in-out origin-top">
                                <li class="border-y-[1px] border-[#764A87]"><a href="#">Asus</a></li>
                                <li class="border-b-[1px] border-[#764A87]"><a href="#">DELL</a></li>
                                <li class="border-b-[1px] border-[#764A87]"><a href="#">HP</a></li>
                                <li class="border-b-[1px] border-[#764A87]"><a href="#">Lenovo</a></li>
                                <li class="border-b-[1px] border-[#764A87]"><a href="#">Acer</a></li>
                                <li class="border-b-[1px] border-[#764A87]"><a href="#">Apple</a></li>
                                <li class="border-b-[1px] border-[#764A87]"><a href="#">MSI</a></li>
                            </ul>
                        </li>
                        <div class="h-[1px] bg-[#764D8733]"></div>
                        <li
                            class="whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] max-sm:text-[14px] bg-[#f2f2f2]">
                            <div href="#" class="flex items-center justify-between px-6 py-3 max-sm:px-4 max-sm:py-2 toggleBtn2">
                                <div class="max-sm:text-[14px]">All Categories</div>
                                <div class="toggle-btn2">
                                    <svg class="plus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        width="24" height="24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    <svg class="minus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        width="24" height="24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        style="display: none;">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                </div>
                            </div>
                            <ul
                                class="menu2 hidden list-none bg-[#fff] mt-[10px] text-[#380D37] hover:text-[#f2f2f2] text-[16px] max-sm:text-[14px] font-[jost] font-[400] w-full transition-opacity duration-[3s] ease-in-out origin-top">
                                <li class="border-y-[1px] border-[#764A87]"><a href="#">Asus</a></li>
                                <li class="border-b-[1px] border-[#764A87]"><a href="#">DELL</a></li>
                                <li class="border-b-[1px] border-[#764A87]"><a href="#">HP</a></li>
                                <li class="border-b-[1px] border-[#764A87]"><a href="#">Lenovo</a></li>
                                <li class="border-b-[1px] border-[#764A87]"><a href="#">Acer</a></li>
                                <li class="border-b-[1px] border-[#764A87]"><a href="#">Apple</a></li>
                                <li class="border-b-[1px] border-[#764A87]"><a href="#">MSI</a></li>
                            </ul>
                        </li>
                        <div class="h-[1px] bg-[#764D8733]"></div>
                        <li
                            class="whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] max-sm:text-[14px] bg-[#f2f2f2]">
                            <div href="#" class="flex items-center justify-between px-6 py-3 max-sm:px-4 max-sm:py-2 toggleBtn2">
                                <div class="max-sm:text-[14px]">All Categories</div>
                                <div class="toggle-btn2">
                                    <svg class="plus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        width="24" height="24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    <svg class="minus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        width="24" height="24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        style="display: none;">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                </div>
                            </div>
                            <ul
                                class="menu2 hidden list-none bg-[#fff] mt-[10px] text-[#380D37] hover:text-[#f2f2f2] text-[16px] max-sm:text-[14px] font-[jost] font-[400] w-full transition-opacity duration-[3s] ease-in-out origin-top">
                                <li class="border-y-[1px] border-[#764A87]"><a href="#">Asus</a></li>
                                <li class="border-b-[1px] border-[#764A87]"><a href="#">DELL</a></li>
                                <li class="border-b-[1px] border-[#764A87]"><a href="#">HP</a></li>
                                <li class="border-b-[1px] border-[#764A87]"><a href="#">Lenovo</a></li>
                                <li class="border-b-[1px] border-[#764A87]"><a href="#">Acer</a></li>
                                <li class="border-b-[1px] border-[#764A87]"><a href="#">Apple</a></li>
                                <li class="border-b-[1px] border-[#764A87]"><a href="#">MSI</a></li>
                            </ul>
                        </li>
                        <div class="h-[1px] bg-[#764D8733]"></div>
                        <li
                            class="whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] max-sm:text-[14px] bg-[#f2f2f2]">
                            <div href="#" class="flex items-center justify-between px-6 py-3 max-sm:px-4 max-sm:py-2 toggleBtn2">
                                <div class="max-sm:text-[14px]">All Categories</div>
                                <div class="toggle-btn2">
                                    <svg class="plus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        width="24" height="24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    <svg class="minus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        width="24" height="24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        style="display: none;">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                </div>
                            </div>
                            <ul
                                class="menu2 hidden list-none bg-[#fff] mt-[10px] text-[#380D37] hover:text-[#f2f2f2] text-[16px] max-sm:text-[14px] font-[jost] font-[400] w-full transition-opacity duration-[3s] ease-in-out origin-top">
                                <li class="border-y-[1px] border-[#764A87]"><a href="#">Asus</a></li>
                                <li class="border-b-[1px] border-[#764A87]"><a href="#">DELL</a></li>
                                <li class="border-b-[1px] border-[#764A87]"><a href="#">HP</a></li>
                                <li class="border-b-[1px] border-[#764A87]"><a href="#">Lenovo</a></li>
                                <li class="border-b-[1px] border-[#764A87]"><a href="#">Acer</a></li>
                                <li class="border-b-[1px] border-[#764A87]"><a href="#">Apple</a></li>
                                <li class="border-b-[1px] border-[#764A87]"><a href="#">MSI</a></li>
                            </ul>
                        </li>
                        <div class="h-[1px] bg-[#764D8733]"></div> --}}
                    </ul>
                </nav>
            </div>
        </div>
        {{-- responsive ---show -----end --}}

        <div class="flex items-center justify-between h-full  py-[10px] gap-[30px]">
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
            <div id="search-bar"
                class="search-bar max-xl:fixed max-sm:top-[49px] max-md:top-[67px] max-xl:top-[67px] max-xl:left-0 max-xl:w-full z-[9999] max-xl:hidden">

                <div>
                    <div class="">
                        <div class="relative" x-data="{
                            search: '',
                            open: false,
                            items: null,
                            get filteredItems() {
                                const searchLower = this.search.toLowerCase();
                                return this.items.filter((i) => i.title.toLowerCase().startsWith(searchLower));
                            }
                        }">


                            <form wire:submit='searchTo' class='h-[44px] max-xl:h-full w-[655px] max-xl:w-full'>
                                <div class="flex" @click.outside='open = false'>
                                    <select name="cat_id" wire:model.live='cat' wire:change='prdouctFetch'
                                        @change='open=true'
                                        class="block w-[80px] p-2.5 text-[#380D37] text-[14px] bg-[#f2f2f2] font-[jost] font-[400] leading-[20.23px] border-r-[2px] border-[#380D37]">
                                        <option value="" selected>All</option>
                                        @foreach ($cats as $ct)
                                            <option value="{{ $ct->slug }}">{{ $ct->title }}</option>
                                        @endforeach
                                    </select>
                                    <div class="relative flex w-full">
                                        <div class="w-full">
                                            <span class="">
                                                <input name="search_text" wire:model.live="search"
                                                    wire:keyup="searchFuc" @click="open = true" type="search"
                                                    id="search-dropdown"
                                                    class=" z-20 block p-2.5 w-full bg-[#f2f2f2] text-[#380D37]"
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
                                                    class="absolute z-50 bg-[white] text-[black] overflow-scroll w-full">
                                                    @foreach ($products as $prd)
                                                        <li class="hover:bg-[#380D37] hover:rounded-sm px-[10px] items-center">
                                                            <a href="{{ route('product.details', [$prd->slug]) }}"
                                                                wire:navigate class="flex items-center font-[400] font-[jost] hover:text-[#f2f2f2] text-[#380D37] text-[14px] max-sm:text-[12px]">
                                                                <img src="{{ explode(',', $prd->photo)[0] }}"
                                                                    alt="" class="w-[40px] items-center max-sm:h-auto h-full">
                                                                <div>
                                                                    <span>{{ $prd->title }}</span>
                                                                    <p>
                                                                        <span>{{ $prd->final_price }}</span>
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
            <script></script>
            <!-- Right-Side Logos/Icons -->
            <div class='flex items-center justify-between gap-[30px] max-xl:hidden'>
                <!-- <div class="flex item-center "> -->
                <a href="{{ route('offer') }}" wire:navigate
                    class='flex justify-between items-center gap-[10px] text-[16px] max-sm:text-[14px] text-[#FFFFFF] font-[jost] font-[500]'><img
                        class='w-[30px] h-[30px]' src="/storage/product/gift.svg" alt="Logo 1">
                    <span class="">
                        Offers
                    </span></a>
                <a href="{{ route('vcart') }}" wire:navigate
                    class='relative flex justify-between items-center gap-[10px] text-[16px] max-sm:text-[14px] text-[#FFFFFF] font-[jost] font-[500]'><img
                        class='w-[25.6px] h-[24.84px]' src="/storage/product/cart(2).svg" alt="Logo 2">
                    <div
                        class='rounded-[100%] w-[12px] h-[12px] bg-[#f2f2f2] text-center items-center flex justify-center absolute top-0 left-0 ml-[18px]'>
                        <p class='cart_count text-[#353535] text-[10px] items items-center'>{{ $cart_count }}
                        </p>
                    </div>
                    <span class="">Cart</span>
                </a>

                @auth
                    <a href="{{ route('account') }}" wire:navigate
                        class='flex justify-between items-center gap-[10px] text-[16px] max-sm:text-[14px] text-[#FFFFFF] font-[jost] font-[500]'>
                        <img class='w-[30.72px] h-[29.81px]' src="/storage/product/account2.svg" alt="Logo 3">

                        <span class="">Account</span>
                    </a>
                @else
                    <a href="{{ route('user.login') }}" wire:navigate
                        class='flex justify-between items-center gap-[10px] text-[16px] max-sm:text-[14px] text-[#FFFFFF] font-[jost] font-[500]'>
                        <img class='w-[30.72px] h-[29.81px]' src="/storage/product/account2.svg" alt="Logo 3">
                        <span class="">Account</span>
                    </a>
                @endauth
            </div>
        </div>
    </header>
    <div
        class='h-[68px] max-sm:h-[50px] text-[#f2f2f2] px-[72px] max-xl:px-[60px] max-md:px-[40px] font-[jost] xl:hidden max-xl:block items-center z-[9999] fixed bottom-0 left-0 right-0 shadow bg-gradient-to-r from-[#380D37] to-[#DC275C] border-t-[2px] border-[#f2f2f2]'>
        <div class='flex items-center justify-between gap-[20px] my-[15px]'>
            <!-- <div class="flex item-center "> -->
            <a href="{{ route('offer') }}" wire:navigate
                class='flex justify-between items-center gap-[10px] text-[16px] max-sm:text-[14px] text-[#FFFFFF] font-[jost] font-[500]'>
                <img class='w-[30px] max-sm:w-[20px] max-sm:h-[20px] h-[30px]' src="/storage/product/gift.svg"
                    alt="Logo 1">
                <span class="">
                    Offers
                </span>
            </a>
            <a href="{{ route('vcart') }}" wire:navigate
                class='relative flex justify-between items-center gap-[10px] text-[16px] max-sm:text-[14px] text-[#FFFFFF] font-[jost] font-[500]'><img
                    class='w-[25.6px] max-sm:w-[20px] max-sm:h-[20px] h-[24.84px]' src="/storage/product/cart(2).svg"
                    alt="Logo 2">
                <div
                    class='rounded-[100%] w-[12px] h-[12px] max-sm:w-[10px] max-sm:h-[10px] bg-[#f2f2f2] text-center items-center flex justify-center absolute top-0 left-0 ml-[18px] max-sm:ml-[15px]'>
                    <p class='cart_count text-[#353535] text-[10px] max-sm:text-[8px] items items-center'>
                        {{ $cart_count }}
                    </p>
                </div>
                <span class="">Cart</span>
            </a>
            @auth
                <a href="{{ route('account') }}" wire:navigate
                    class='flex justify-between items-center gap-[10px] text-[16px] max-sm:text-[14px] text-[#FFFFFF] font-[jost] font-[500]'>
                    <img class='w-[30.72px] h-[29.81px] max-sm:w-[20px] max-sm:h-[20px]'
                        src="/storage/product/account2.svg" alt="Logo 3">
                    <span>
                        Account
                    </span>
                </a>
            @else
                <a href="{{ route('user.login') }}" wire:navigate
                    class='flex justify-between items-center gap-[10px] text-[16px] max-sm:text-[14px] text-[#FFFFFF] font-[jost] font-[500]'>
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
        $('.menu-toggle').click(function(e) {
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
        $("#search-icon").on('click', function() {
            console.log('yes');
            $(".search-bar").slideToggle();
            $(".search-bar").removeClass("hidden");
            $(".search-bar").addClass("block");
            $(this).html(function(_, oldHtml) {
                return oldHtml.includes("circle") ?
                    '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="6"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>' :
                    '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="6"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>';
            });
        });

        $(document).ready(function() {
            $('.toggleBtn2').click(function() {
                var menu = $(this).next('.menu2');
                menu.toggle();
                $(this).find('.plus, .minus').toggle();
            });
            $('.menu li').click(function() {
                $(this).toggleClass('active');
            });
        });
    </script>
@endscript
