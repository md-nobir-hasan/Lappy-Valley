    <header class="xl:h-[78px] bg-gradient-to-r from-[#380D37] to-[#DC275C] text-white">
        <div class="flex items-center justify-between h-full px-10 ">
            <!-- <!- Logo -->
            <div class='pr-2'>
                <a href="{{ route('home') }}" wire:navigate><img class="xl:h-[60px]" src="/storage/product/Logo.svg"
                        alt="Your Logo"></a>
            </div>
            <div>
                <div>
                    <div class="md:flex">
                        <div class="w-full p-3">

                            <div class="relative">
                                <i class=" w-[20px] h-[20.] absolute text-gray-400 fa fa-search top-4 left-4"></i>
                                <input type="text"
                                    class="bg-white h-[44px] w-[655px] text-[#353535] text-[16px] px-12 rounded-[5px] focus:outline-none hover:cursor-pointer"
                                    name="">
                            </div>

                        </div>

                    </div>
                </div>

            </div>

            <!-- Right-Side Logos/Icons -->
            <div class='flex items-center justify-center mr-[100px]'>
                <!-- <div class="flex item-center "> -->
                <a href="#"><img class='w-[119px] h-[44px]' src="/storage/product/Offers.svg" alt="Logo 1"></a>
                <a href="#"><img class='w-[118.76px] h-[43.72]' src="/storage/product/Cart.svg" alt="Logo 2"></a>
                <a href="#"> <img class='[118.76px] h-[43.72]' src="/storage/product/Account.svg" alt="Logo 3"></a>
                <!-- </div> -->
            </div>
        </div>
    </header>
