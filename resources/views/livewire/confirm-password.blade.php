<div class='container mx-auto'>
    <div>
        <h1 class='font-[jost] text-[16px] max-sm:text-[14px] font-[400] leading-[25.3px] text-[#353535]'>Home / Account</h1>
        <div class='h-[2px] bg-[#764A8733]'></div>
    </div>
    <form wire:submit='save'>
        <div class='mt-[60px] w-[463px] max-sm:w-[300px] mx-auto'>
            <div class='w-[463px] max-sm:w-[300px] mx-auto flex'>
                <a href="#" class="w-full h-[44px] max-sm:h-[35px]"><button
                        class='flex justify-center items-center w-full h-full text-[16px] max-sm:text-[12px] text-[#380D37] focus:text-[#f2f2f2] focus:bg-[#380D37] bg-[#f2f2f2] font-[jost] font-[700] rounded-[4px]'>Log
                        In</button></a>
                <a href="#" class="w-full h-[44px] max-sm:h-[35px]"><button
                        class='flex justify-center items-center w-full h-full text-[16px] max-sm:text-[12px] text-[#380D37] focus:text-[#f2f2f2] focus:bg-[#380D37] bg-[#f2f2f2] font-[jost] font-[700] rounded-[4px]'>Register</button></a>
            </div>
            <div class='w-[463px] max-sm:w-[300px] mx-auto  border-[2px] max-sm:border-[1px] border-[#380D37] rounded-[4px] p-[35px] max-sm:p-[20px]'>
                <div>
                    <p
                        class='w-[full] h-[76px] max-sm:h-[50px] mx-auto text-[12px] max-sm:text-[10px] text-[#380D37] font-[jost] font-[500] leading-[17.34px]'>
                        A OTP has been sent to your email. Please enter the 6-digit OTP below.</p>
                    <input wire:model='otp'
                        class="italic mt-[10px] mb-[20px] rounded-[5px] bg-[#F2F2F2] py-[12px] max-sm:py-[8px] text-[14px] max-sm:text-[10px] text-[#353535] leading-[23.12px] w-full h-[44px] max-sm:h-[35px] pl-[15px] font-[jost] font-[500]"
                        type="number" placeholder="Enter The OTP">
                    @error($otp)
                        <p class="text-[red]">{{ $message }}</p>
                    @enderror
                    @if ($msg)
                        <p class="text-[red]">{{ $msg }}</p>
                    @endif
                    <p
                        class='w-[full] h-[76px] mx-auto text-[12px] max-sm:text-[10px] text-[#000000] font-[jost] font-[500] leading-[17.34px]'>
                        Did not get the OTP?
                        <span wire:click='resend' class="cursor-pointer">Resend?</span>
                        @if ($resent_msg)
                            <span class="block text-[green]">{{ $resent_msg }}</span>
                        @endif
                    </p>
                </div>
                <div>
                    <button
                        class='text-[16px] max-sm:text-[12px] text-[#FFFFFF] font-[jost] font-[700] leading-[23.12px] w-full h-[23px] max-sm:h-[23px] rounded-[4px] py-[28px] max-sm:py-[20px] my-[15px] max-sm:my-[8px] flex justify-center items-center bg-gradient-to-r from-[#380D37] to-[#DC275C]'
                        >Register
                         <div wire:loading
                            class="inline-block h-6 w-6 mr-2 animate-spin rounded-full border-4 border-solid border-current border-r-transparent align-[-0.125em] text-success motion-reduce:animate-[spin_1.5s_linear_infinite]"
                            role="status">
                            <span
                                class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Loading...
                            </span>
                        </div>
                    </button>
                </div>

            </div>
        </div>
    </form>

    <div class="h-[2px] bg-[#764A8733] my-[60px]"></div>
</div>
