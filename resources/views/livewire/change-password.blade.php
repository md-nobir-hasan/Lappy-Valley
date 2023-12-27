<div class='px-[100px] max-2xl:px-[70px] max-xl:px-[60px] max-lg:px-[38px] max-md:px-[35px] max-sm:px-[15px] max-sm:mt-[70px] max-xl:mt-[100px]'>

    <livewire:user-account-menu />

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
