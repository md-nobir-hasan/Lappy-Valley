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
                                    hidden:true,

                                    items: {{$products}},

                                    get filteredItems() {
                                        const searchLower = this.search.toLowerCase();
                                        return this.items.filter((i) => i.title.toLowerCase().startsWith(searchLower));
                                    }
                                }">
                                <!-- <i class=" w-[20px] h-[20.83px] absolute text-gray-400 fa fa-search top-6 left-4"></i>
                                <input type="text" x-model="search" @click="hidden = false"
                                    class="bg-white h-[44px] w-[655px] tex-center items-center text-[#353535] text-[20px] leading-[26px] font-[jost] font-[400] mt-[10px] pl-[35px] rounded-[5px] focus:outline-none hover:cursor-pointer" placeholder='Search'
                                    name=""> -->
                                    
                                <form class='h-[44px] w-[655px]'>
                                    <div class="flex">
                                        <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>
                                        <button id="dropdown-button" data-dropdown-toggle="dropdown" 
                                        class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900
                                        bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700
                                        dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">All 
                                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg></button>
                                        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow  dark:bg-gray-700">
                                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                                            <li>
                                                <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mockups</button>
                                            </li>
                                            <li>
                                                <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Templates</button>
                                            </li>
                                            <li>
                                                <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Design</button>
                                            </li>
                                            <li>
                                                <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logos</button>
                                            </li>
                                            </ul>
                                        </div>
                                        <div class="relative w-full">
                                            <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border
                                            border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400
                                            dark:text-white dark:focus:border-blue-500" placeholder="Search Mockups, Logos, Design Templates..." required>
                                            <button type="submit" class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700
                                            hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                <span class="">Search</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>

                                <ul :class="{'hidden':hidden}" class="fixed z-50">
                                    <template x-for="item in filteredItems" :key="item.id">
                                          <li >
                                             <a :href="'/product-details/'+item.slug">
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
                    <a href="{{route('offer')}}"><img class='w-[119px] h-[44]' src="/storage/product/Offers.svg" alt="Logo 1"></a>
                    <a href="{{route('vcart')}}" class='relative'><img class='w-[118.76px] h-[43.72px]' src="/storage/product/Cart.svg" alt="Logo 2">
                    <div class='rounded-[100%] w-[12px] h-[12px] bg-[#f2f2f2] text-center items-center flex justify-center absolute top-0 right-0 translate-x-[-60px] translate-y-[10px]'>
                        <p class='text-[#353535] text-[10px] items items-center' id="cart_count">{{$cart_count}}</p>
                    </div>
                </a>
                    <a href="{{route('account')}}"> <img class='w-[118.76px] h-[43.72px]' src="/storage/product/Account.svg" alt="Logo 3"></a>
                    <!-- </div> -->
                </div>
            </div>
        </header>


