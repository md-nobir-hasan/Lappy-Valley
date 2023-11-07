    <header class="h-[78px] bg-gradient-to-r from-[#764A87] to-[#DC275C] text-[#f2f2f2] px-[72px]">
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

                            <div class="relative">
                                <i class=" w-[20px] h-[20.83px] absolute text-gray-400 fa fa-search top-6 left-4"></i>
                                <input type="text"
                                    class="bg-white h-[44px] w-[655px] tex-center items-center text-[#353535] text-[20px] leading-[26px] font-[jost] font-[400] mt-[10px] pl-[35px] rounded-[5px] focus:outline-none hover:cursor-pointer" placeholder='Search'
                                    name="">
                            </div>

                        </div>

                    </div>
                </div>

            </div>

            <!-- Right-Side Logos/Icons -->
            <div class='flex items-center justify-center gap-[10px]'>
                <!-- <div class="flex item-center "> -->
                    <a href="{{route('offer')}}"><img class='w-[119px] h-[44]' src="/storage/product/Offers.svg" alt="Logo 1"></a>
                    <a href="{{route('vcart')}}"><img class='w-[118.76px] h-[43.72px]' src="/storage/product/Cart.svg" alt="Logo 2"></a>
                    <a href="{{route('account')}}"> <img class='w-[118.76px] h-[43.72px]' src="/storage/product/Account.svg" alt="Logo 3"></a>
                    <!-- </div> -->
                </div>
            </div>
        </header>


