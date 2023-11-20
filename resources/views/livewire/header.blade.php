    <header class="h-[78px] bg-gradient-to-r from-[#380D37] to-[#DC275C] text-[#f2f2f2] px-[72px]">
        <div class="flex items-center justify-evenly h-full  py-[10px] gap-[5px]">
            <!-- <!- Logo -->
            <div class=''>
                <a href="{{ route('home') }}" wire:navigate><img class="h-[60px] w-[232px]" src="/storage/product/Logo.svg"
                        alt="Your Logo"></a>
            </div>
            <div>
                <div>
                    <div class="md:flex">
                        <div class="w-full p-3">
                            <div class="relative" x-data="{
                                search: '',
                                hidden: true,

                                items: {{ $products }},

                                get filteredItems() {
                                    const searchLower = this.search.toLowerCase();
                                    return this.items.filter((i) => i.title.toLowerCase().startsWith(searchLower));
                                }
                            }">
                                <i class=" w-[20px] h-[20.83px] absolute text-gray-400 fa fa-search top-6 left-4"></i>
                                <input type="text" x-model="search" @click="hidden = false"
                                    class="bg-white h-[44px] w-[655px] tex-center items-center text-[#353535] text-[20px] leading-[26px] font-[jost] font-[400] mt-[10px] pl-[35px] rounded-[5px] focus:outline-none hover:cursor-pointer"
                                    placeholder='Search' name="">
                                <ul :class="{ 'hidden': hidden }" class="fixed z-50">
                                    <template x-for="item in filteredItems" :key="item.id">
                                        <li>
                                            <a :href="'/product-details/' + item.slug">
                                                <img :src="item.photo" alt="" height="40px">
                                                <span x-text="item.title"></span>
                                                <span>kfjsdkj</span>
                                            </a>
                                        </li>
                                    </template>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Right-Side Logos/Icons -->
            <div class='flex items-center justify-center gap-[10px]'>
                <!-- <div class="flex item-center "> -->
                <a href="{{ route('offer') }}"><img class='w-[119px] h-[44]' src="/storage/product/Offers.svg"
                        alt="Logo 1"></a>
                <a href="{{ route('vcart') }}" class='relative'><img class='w-[118.76px] h-[43.72px]'
                        src="/storage/product/Cart.svg" alt="Logo 2">
                    <div
                        class='rounded-[100%] w-[12px] h-[12px] bg-[#f2f2f2] text-center items-center flex justify-center absolute top-0 right-0 translate-x-[-60px] translate-y-[10px]'>
                        <p class='text-[#353535] text-[10px] items items-center' id="cart_count">{{ $cart_count }}</p>
                    </div>
                </a>

                @auth
                    <a href="{{ route('account') }}">
                        <img class='w-[118.76px] h-[43.72px]'
                        src="/storage/product/Account.svg" alt="Logo 3">
                    </a>
                @else
                    <a href="{{ route('user.login') }}">
                        <img class='w-[118.76px] h-[43.72px]'
                            src="/storage/product/Account.svg" alt="Logo 3">
                    </a>
                @endauth
            </div>
        </div>
    </header>
