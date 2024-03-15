<div>
    <div>
        <!-- Facebook Messenger Plugin Code -->
        {{-- <div id="fb-root"></div> --}}

        {{-- @script --}}
        {{-- messenger implementation code  --}}
        {{-- <script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml: true,
            version: 'v12.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script> --}}
        {{-- @endscript --}}
        <!-- Your Messenger Plugin Code -->
        {{-- <div class="fb-customerchat" attribution="setup_tool" page_id="201046873102870" theme_color="#0084FF">
        </div> --}}

    </div>
    <header
        class="h-[78px] z-[10000] max-sm:h-[50px] max-xl:h-[68px] max-xl:fixed max-xl:top-0 max-xl:left-0 max-xl:right-0 max-xl:z-150 max-xl:flex max-xl:justify-between max-xl:items-center max-xl:border-b-[2px] max-xl:border-[#f2f2f2] relative
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
                                <div class="">
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
                                class="toggleDiv2 hidden list-none bg-[#fff] mt-[10px] text-[#380D37] hover:text-[#f2f2f2] text-[16px] max-sm:text-[14px] font-[jost] font-[400] w-full transition-opacity duration-[3s] ease-in-out origin-top">
                                <li class="border-y-[1px] border-[#764A87]"><a href="{{ route('shop') }}"
                                        wire:navigate>All</a></li>
                                @foreach ($menus as $menu1)
                                    @if (count($menu1->products) > 0)
                                        <li class="border-b-[1px] border-[#764A87] "><a
                                                href="{{ route('cate_wise.shop', [$menu1->slug]) }}"
                                                wire:navigate>{{ $menu1->title }}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                        @foreach ($menus as $menu)
                            <div class="h-[1px] bg-[#764D8733]"></div>
                            <li
                                class="whitespace-nowrap rounded font-[jost] font-[500] text-[#353535] text-[16px] max-sm:text-[14px] bg-[#f2f2f2]">
                                @if (count($menu->products) > 0)
                                    <div class="flex items-center justify-between px-6 py-3 max-sm:px-4 max-sm:py-2 ">
                                        <div class="max-sm:text-[14px] cursor-pointer">
                                            <a href="{{ route('cate_wise.shop', [$menu->slug]) }}"
                                                wire:navigate>{{ $menu->title }}</a>
                                        </div>
                                        @php
                                            $has_child = 0;
                                        @endphp
                                        @foreach ($menu->child_cat as $menu2)
                                            @if (count($menu2->sub_products) > 0)
                                                @php
                                                    ++$has_child;
                                                @endphp
                                            @endif
                                        @endforeach
                                        @if (count($menu->child_cat) > 0 && $has_child > 0)
                                            <div class="toggleBtn2">
                                                <svg class="plus text-[black]" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" width="24" height="24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <line x1="12" y1="5" x2="12" y2="19">
                                                    </line>
                                                    <line x1="5" y1="12" x2="19" y2="12">
                                                    </line>
                                                </svg>
                                                <svg class="minus text-[red]" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" width="24" height="24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" style="display: none;">
                                                    <line x1="5" y1="12" x2="19" y2="12">
                                                    </line>
                                                </svg>
                                            </div>
                                        @endif
                                    </div>
                                    @if (count($menu->child_cat) > 0 && $has_child > 0)
                                        <ul
                                            class="toggleDiv2 hidden list-none bg-[#fff] mt-[10px] text-[#380D37] hover:text-[#f2f2f2] text-[16px] max-sm:text-[14px] font-[jost] font-[400] w-full transition-opacity duration-[3s] ease-in-out origin-top">
                                            @foreach ($menu->child_cat as $menu2)
                                                @if (count($menu2->sub_products) > 0)
                                                    @if ($loop->first)
                                                        <li class="border-y-[1px] border-[#764A87]"><a
                                                                href="{{ route('cate_wise.shop', [$menu->slug, $menu2->slug]) }}"
                                                                wire:navigate>{{ $menu2->title }}</a></li>
                                                    @else
                                                        <li class="border-b-[1px] border-[#764A87]"><a
                                                                href="{{ route('cate_wise.shop', [$menu->slug, $menu2->slug]) }}"
                                                                wire:navigate>{{ $menu2->title }}</a></li>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </ul>
                                    @endif
                                @endif
                            </li>
                        @endforeach
                        <div class="h-[1px] bg-[#764D8733]"></div>
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
            <div id="search-bar"
                class="search-bar max-xl:fixed max-sm:top-[49px] max-md:top-[67px] max-xl:top-[67px] max-xl:left-0 max-xl:w-full">
                <div>
                    <div>
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
                                    <select name="cat_id" wire:model.live='cat' wire:change='searchFuc'
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
                                                    id="search-dropdown" autocomplete="off"
                                                    class=" z-20 block p-2.5 w-full bg-[#f2f2f2] text-[#380D37]"
                                                    placeholder="I am shopping for...">
                                                <div wire:loading wire:target='searchFuc'
                                                    class="absolute right-0 top-2.5 inline-block h-6 w-6 mr-[7px] animate-spin rounded-full
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
                                                    class="absolute z-50 bg-[white] text-[black] overflow-scroll w-[100%]">
                                                    @foreach ($products as $prd)
                                                        <li
                                                            class="hover:bg-[#380D37] hover:rounded-sm px-[10px] items-center">
                                                            <a href="{{ route('product.details', [$prd->slug]) }}"
                                                                target="_blank"
                                                                class="flex items-center font-[400] font-[jost] hover:text-[#f2f2f2] text-[#380D37] text-[14px] max-sm:text-[12px]">
                                                                <img src="{{ explode(',', $prd->photo)[0] }}"
                                                                    alt=""
                                                                    class="w-[40px] items-center max-sm:h-auto h-full">
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

                                    </div>
                                    <button type="submit"
                                        class=" top-0 end-0 py-2.5 px-[30px] h-full bg-[#df146e] text-[#f2f2f2] rounded-r-[2px] overflow-hidden">
                                        <span class="">Search</span>
                                    </button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right-Side Logos/Icons -->
            <div class='flex items-center justify-between gap-[30px] max-xl:hidden'>
                <!-- <div class="flex item-center "> -->
                <a href="{{ route('offer') }}" wire:navigate
                    class='nav-colors flex justify-between items-center gap-[10px] text-[16px] max-sm:text-[14px] text-[#FFFFFF] font-[jost] font-[500]'><img
                        class='w-[30px] h-[30px]' src="/storage/product/gift.svg" alt="Logo 1">
                    <span class="nav-colors">
                        Offers
                    </span></a>
                <a href="{{ route('vcart') }}" wire:navigate
                    class='nav-colors relative flex justify-between items-center gap-[10px] text-[16px] max-sm:text-[14px] text-[#FFFFFF] font-[jost] font-[500]'><img
                        class='w-[25.6px] h-[24.84px]' src="/storage/product/cart(2).svg" alt="Logo 2">
                    <div
                        class='rounded-[100%] w-[12px] h-[12px] bg-[#f2f2f2] text-center items-center flex justify-center absolute top-0 left-0 ml-[18px]'>
                        <span
                            class='carts-count cart_count text-[#353535] text-[10px] items items-center'>{{ $cart_count }}
                        </span>
                    </div>
                    <span class="nav-colors">Cart</span>
                </a>

                @auth
                    <a href="{{ route('account') }}" wire:navigate
                        class='nav-colors flex justify-between items-center gap-[10px] text-[16px] max-sm:text-[14px] text-[#FFFFFF] font-[jost] font-[500]'>
                        <img class='w-[30.72px] h-[29.81px]' src="/storage/product/account2.svg" alt="Logo 3">

                        <span class="nav-colors">Account</span>
                    </a>
                @else
                    <a href="{{ route('user.login') }}" wire:navigate
                        class='flex justify-between items-center gap-[10px] text-[16px] max-sm:text-[14px] text-[#FFFFFF] font-[jost] font-[500]'>
                        <img class='w-[30.72px] h-[29.81px]' src="/storage/product/account2.svg" alt="Logo 3">
                        <span class="nav-colors">Account</span>
                    </a>
                @endauth
            </div>
        </div>
        {{-- -----search-icon----- --}}
        <div id="search-icon" class="xl:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <circle cx="11" cy="11" r="6"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
        </div>
        {{-- ------search--icon--end----- --}}
        {{-- ---whatsapp-icon--- --}}
        <a href="https://wa.me/0171264420" target="_blank"
            class="fixed flex items-center justify-center bg-green-500 rounded-[50%] bottom-20 max-sm:bottom-18 right-10 max-sm:right-8 z-40 hover:w-16 duration-300 hover:h-16 max-sm:w-12 w-14 max-sm:h-12 h-14">
            <div>
                <img src="/storage/product/whatsapp-symbol-logo-svgrepo-com.svg" alt="" class=" w-8 h-10">
            </div>
        </a>
        {{-- ---whatsapp-icon--- --}}
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
                    class='carts-count rounded-[100%] w-[12px] h-[12px] max-sm:w-[10px] max-sm:h-[10px] bg-[#f2f2f2] text-center items-center flex justify-center absolute top-0 left-0 ml-[18px] max-sm:ml-[15px]'>
                    <span
                        class='carts-count cart_count text-[#353535] text-[10px] max-sm:text-[8px] items items-center'>
                        {{ $cart_count }}
                    </span>
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
        // Session message
        @if (session('error'))
            toastr.error("{{ session('error') }}");
        @endif

        @if (session('success'))
            toastr.error("{{ session('success') }}");
        @endif

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
        if (window.screen.width < 1280) {
            $("#search-bar").hide();
        }

        $("#search-icon").on('click', function() {
            $("#search-bar").slideToggle();
            $(this).html(function(_, oldHtml) {
                return oldHtml.includes("circle") ?
                    '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="6"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>' :
                    '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="6"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>';
            });
        });

        $(document).ready(function() {
            $('.toggleBtn2').each(function(index) {
                $(this).on('click', function() {
                    //Twice handle
                    var menu = $('.toggleDiv2').eq(index);
                    if (menu.is(':visible')) {
                        menu.hide(200);
                        $(this).find('.plus').show(200);
                        $(this).find('.minus').hide(200);
                        return false;
                    } else {
                        //everythis is off
                        $('.toggleDiv2').hide(200);
                        $('.plus').show(200);
                        $('.minus').hide(200);

                        // Specific on
                        menu.show(200);
                        $(this).find('.plus').hide(200);
                        $(this).find('.minus').show(200);
                    }
                });
            });
        });
    </script>
@endscript

@assets
    @isset($pixels)
        {!! $pixels->header !!}
    @endisset
    @isset($gtags)
        {!! $gtags->header !!}
    @endisset
@endassets
