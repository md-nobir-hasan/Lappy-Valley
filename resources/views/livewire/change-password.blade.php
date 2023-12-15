<div class='px-[100px] max-sm:px-[25px] max-md:px-[35px] max-lg:px-[45px] mx-auto max-sm:mt-[70px] max-xl:mt-[100px]'>
    <div class='flex justify-between'>
        <h1 class='font-[jost] xl:text-[20px] font-[400] leading-[25.3px] text-[#353535]'>Home / Account</h1>
        <div class='flex gap-[5px] items-center'><img src="/storage/product/vector-1.svg" alt="Product"
                class='w-[16px] h-[14px]'>   <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class='text-[16px] text-[#380D37] font-[jost] font-[400] leading-[23.12px]'>Log
                    Out</button>
            </form></div>
    </div>
    <div class='h-[2px] bg-[#764A8733]'></div>
    <!-- --------------------user-name-------------------------------- -->
    <div class='flex gap-[10px] items-center mt-[30px]'>
        <div class='w-[74px] h-[74px] max-sm:w-[65px] max-sm:h-[65px]'><img
                src="/storage/product/iconoir_profile-circle1.svg" alt="Product"></div>
        <div>
            <p class='text-[16px] max-sm:text-[12px] text-[#000000] font-[Inter] font-[400] leadint-[14.52px]'>Hello,
            </p>
            <h1 class='text-[20px] max-sm:text-[18px] text-[#000000] font-[Inter] font-[500] leadint-[24.2px]'>Username
                Here</h1>
        </div>
    </div>
    <livewire:user-account-menu />
    {{-- <div class='grid grid-cols-5 gap-[20px] max-sm:grid-cols-2 max-lg:grid-cols-3 max-lg:w-full w-[1000px] my-[30px]'>
        <div class='flex gap-[5px] items-center'>
            <img src="/storage/product/icon-ad-product.svg"alt="Product" class='w-[23.36px] h-[26.21px]'>
            <span class='text-[#AAAAAA] text-[16px] font-[jost] font-[500] leading-[23.12px]'>Orders</span>
        </div>
        <div class='flex gap-[5px] items-center'>
            <img src="/storage/product/iconoir_profile-circle.svg" alt="Product" class='w-[24px] h-[24px]'>
            <span class='text-[#AAAAAA] text-[16px] font-[jost] font-[500] leading-[23.12px]'>Edit Profile</span>
        </div>
        <div class='flex gap-[5px] items-center'>
            <img src="/storage/product/carbon_password-black.svg" alt="Product" class='w-[24px] h-[24px]'>
            <span class='text-[#380D37] text-[16px] font-[jost] font-[500] leading-[23.12px]'>Change Password</span>
        </div>
        <div class='flex gap-[5px] items-center'>
            <img src="/storage/product/mdi_address-marker-outline.svg" alt="Product" class='w-[24px] h-[24px]'>
            <span class='text-[#AAAAAA] text-[16px] font-[jost] font-[500] leading-[23.12px]'>Address</span>
        </div>
        <div class='flex gap-[5px] items-center'>
            <img src="/storage/product/Vector-light-opacity.svg" alt="Product" class='w-[22.3px] h-[20.88px]'>
            <span class='text-[#AAAAAA] text-[16px] font-[jost] font-[500] leading-[23.12px]'>Wish List</span>
        </div>
    </div> --}}
    <div class='h-[2px] bg-[#764A8733]'></div>
    <form wire:submit='save'>
        <div
            class='flex flex-col max-lg:border-[2px] max-lg:border-[#353535] max-md:w-full max-lg:w-[545px] max-lg:mx-auto max-lg:py-[20px] max-md:px-[40px] max-lg:pl-[40px] max-sm:pl-[30px] max-lg:rounded-[4px] mt-[20px] gap-[20px]'>

            <div class=''>
                <label class='text-[20px] text-[#000000] font-[Inter] font-[500] leading-[24.2px] block'>Change
                    Password:
                </label>
            </div>
            <div class=''>
                <label for="address" id="old_password"
                    class='text-[16px] text-[#353535] font-[jost] font-[500] leading-[23.12px] tracking-[3%] block my-[5px]'>Old
                    Password:</label>
                <input type="text" wire:model='old_password' id="old_password" placeholder='Old Password'
                    class='w-[344px] max-lg:w-full h-[44px] bg-[#F2F2F2] font-[jost] font-[500] text-[16px] text-[#353535] block italic px-[10px] rounded-[4px]'>
                    @error('old_password')
                    <span class="text-[red] text-[12px] block">{{ $message }}</span>
                @enderror
            </div>
            <div class=''>
                <label for="password"
                    class='text-[16px] text-[#353535] font-[jost] font-[500] leading-[23.12px] tracking-[3%] block my-[5px]'>New
                    Password:</label>
                <input type="text" wire:model='password' id="password" placeholder='New Password'
                    class='w-[344px] max-lg:w-full h-[44px] bg-[#F2F2F2] font-[jost] font-[500] text-[16px] text-[#353535] blcok italic px-[10px] rounded-[4px]'>
                    @error('password')
                    <span class="text-[red] text-[12px] block">{{ $message }}</span>
                @enderror
            </div>
            <div class=''>
                <label for="confirmed"
                    class='text-[16px] text-[#353535] font-[jost] font-[500] leading-[23.12px] tracking-[3%] block my-[5px]'>Confirm
                    Password:</label>
                <input type="text" wire:model='confirmed' id="confirmed" placeholder='Confirm Password'
                    class='w-[344px] max-lg:w-full h-[44px] bg-[#F2F2F2] font-[jost] font-[500] text-[16px] text-[#353535] block italic px-[10px] rounded-[4px]'>
    @error('confirmed')
                    <span class="text-[red] text-[12px] block">{{ $message }}</span>
                @enderror
            </div>
            <div class=''>
                @if ($msg)
                        <span class="text-[green] block">{{ $msg }}</span>
                    @endif
                    @if ($err_msg)
                        <span class="text-[red] block">{{ $err_msg }}</span>
                    @endif
                <button
                    class='flex items-center justify-center px-5 py-3 rounded-[4px] text-[#F2F2F2] text-[14px] font-[jost] font-[500] leading-[20.23px] bg-gradient-to-r from-[#380D37] to-[#DC275C]'>

                    <span>Save Changes</span>
                    <div wire:loading wire:target='save'
                        class="ml-2 inline-block h-6 w-6 mr-2 animate-spin rounded-full border-4 border-solid border-current border-r-transparent align-[-0.125em] text-success motion-reduce:animate-[spin_1.5s_linear_infinite]"
                        role="status">
                        <span
                            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Loading...
                        </span>
                    </div>
                </button>
            </div>
        </div>
    </form>


    <div class='h-[1px] bg-[#764A8733] my-[20px]'></div>

</div>
