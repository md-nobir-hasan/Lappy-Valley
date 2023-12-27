<div class='px-[100px] max-lg:px-[45px] max-md:px-[35px] max-sm:px-[20px] mx-auto max-sm:mt-[70px] max-xl:mt-[100px]'>

    <livewire:user-account-menu />
    
    <form wire:submit='addressSave'>
        <div class='flex max-lg:border-[2px] max-lg:border-[#353535] max-md:w-full max-lg:w-[545px] max-lg:mx-auto max-lg:py-[20px] max-md:px-[35px] max-lg:px-[40px] max-sm:pl-[30px] max-lg:rounded-[4px] mt-[20px] gap-[20px]'>
            <div>
                <div class=''>
                    <h1 class='text-[20px] text-[#000000] font-[Inter] font-[500] leading-[24.2px]'>Address:</h1>
                </div>

                {{-- address  --}}
                <div class="flex gap-[40px] items-center">
                    <div class=''>
                        <label for="address"
                            class='text-[16px] text-[#353535] font-[jost] font-[500] leading-[23.12px] tracking-[3%] block my-[5px]'>Address:</label>
                        <input type="text" wire:model='address' id="address" placeholder='Enter the address'
                            class='w-[344px] max-lg:w-full h-[44px] bg-[#F2F2F2] font-[jost] font-[500] text-[16px] text-[#353535] block italic px-[10px] rounded-[4px]'>
                    </div>
                </div>

                {{-- city  --}}
                <div class=''>
                    <label for="city"
                        class='text-[16px] text-[#353535] font-[jost] font-[500] leading-[23.12px] tracking-[3%] block my-[5px]'>City:</label>
                    <input type="text" wire:model='city' id="city" placeholder='Enter the city Name'
                        class='w-[344px] max-lg:w-full h-[44px] bg-[#F2F2F2] font-[jost] font-[500] text-[16px] text-[#353535]  blcok italic px-[10px] rounded-[4px]'>
                </div>

                {{-- post code  --}}
                <div class=''>
                    <label for="post_code"
                        class='text-[16px] text-[#353535] font-[jost] font-[500] leading-[23.12px] tracking-[3%] block my-[5px]'>Post
                        code:</label>
                    <input type="number" wire:model='post_code' id="post_code" placeholder='Enter the post code here'
                        class='w-[344px] max-lg:w-full h-[44px] bg-[#F2F2F2] font-[jost] font-[500] text-[16px] text-[#353535]  block italic px-[10px] rounded-[4px]'>
                </div>
            </div>

            <div class='max-lg:hidden translate-y-[20px]'>
                <div>
                    <h1
                        class='text-[16px] text-[#353535] font-[jost] font-[500] leading-[23.12px] tracking-[3%] my-[5px]'>
                        Is this the default address?</h1>
                </div>
                <div class="flex items-center gap-2">
                    <input type="radio" wire:model='is_default' name="is_default" value="1" id="yes"
                        class='w-[18px] h-[18px] accent-[#380D37]'>
                    <label for="yes"
                        class='text-[16px] text-[#353535] font-[jost] font-[500] leading-[23.12px] tracking-[3%] my-[5px]'>Yes.</label>
                </div>
                <div class="flex items-center gap-2">
                    <input type="radio" name="is_default" wire:model='is_default' id="no" value="0"
                        class='w-[18px] h-[18px] accent-[#380D37]'>
                    <label for="no"
                        class='text-[16px] text-[#353535] font-[jost] font-[500] leading-[23.12px] tracking-[3%] my-[5px]'>No.</label>
                </div>
            </div>
        </div>
        {{-- button  --}}
        <div class='mt-4'>
            @if ($msg)
                <span class="text-[green] block">{{ $msg }}</span>
            @endif
            @if ($err_msg)
                <span class="text-[red] block">{{ $err_msg }}</span>
            @endif
            <button
                class='flex items-center justify-center py-3 px-4 rounded-[4px] text-[#F2F2F2] text-[14px] font-[jost] font-[500] leading-[20.23px] bg-gradient-to-r from-[#380D37] to-[#DC275C]'>
                Save Changes
                <div wire:loading wire:target='addressSave'
                    class="ml-2 inline-block h-6 w-6 mr-2 animate-spin rounded-full border-4 border-solid border-current border-r-transparent align-[-0.125em] text-success motion-reduce:animate-[spin_1.5s_linear_infinite]"
                    role="status">
                    <span
                        class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Loading...
                    </span>
                </div>
            </button>
        </div>
    </form>


    <div class='h-[1px] bg-[#764A8733] my-[20px]'></div>

</div>
