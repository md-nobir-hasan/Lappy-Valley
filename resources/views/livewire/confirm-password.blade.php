<div class='container mx-auto'>
    <div>
        <h1 class='font-[jost] text-[16px] font-[400] leading-[25.3px] text-[#353535]'>Home / Account</h1>
        <div class='h-[2px] bg-[#764A8733]'></div>
    </div>
    <form wire:submit='save'>
        <div class='mt-[230px] w-[463px] mx-auto'>
            <div class='w-[463px] mx-auto flex'>
                <a href="#"><button
                        class='flex justify-center items-center w-[232px] h-[44px] text-[16px] text-[#380D37] focus:text-[#f2f2f2] focus:bg-[#380D37] bg-[#f2f2f2] font-[jost] font-[700] rounded-[4px]'>Log
                        In</button></a>
                <a href="#"><button
                        class='flex justify-center items-center w-[232px] h-[44px] text-[16px] text-[#380D37] focus:text-[#f2f2f2] focus:bg-[#380D37] bg-[#f2f2f2] font-[jost] font-[700] rounded-[4px]'>Register</button></a>
            </div>
            <div class='w-[463px] mx-auto border-[2px] border-[#380D37] rounded-[4px] p-[35px]'>
                <div>
                    <p
                        class='w-[full] h-[76px] mx-auto text-[16px] text-[#000000] font-[jost] font-[500] leading-[17.34px]'>
                        A OTP has been sent to your email. Please enter the 6-digit OTP below.</p>
                    <input wire:model='otp'
                        class="italic mt-[10px] mb-[20px] rounded-[5px] bg-[#F2F2F2] py-[12px] text-[16px] text-[#353535] leading-[23.12px] opacity-[30%] w-full h-[44px] pl-[15px] font-[jost] font-[500]"
                        type="number" placeholder="Enter The OTP">
                    @error($otp)
                        <p class="text-[red]">{{ $message }}</p>
                    @enderror
                    @if ($msg)
                        <p class="text-[red]">{{ $msg }}</p>
                    @endif
                    <p
                        class='w-[full] h-[76px] mx-auto text-[16px] text-[#000000] font-[jost] font-[500] leading-[17.34px]'>
                        Did not get the OTP?
                        <span wire:click='resend' class="cursor-pointer">Resend?</span>
                        @if ($resent_msg)
                            <span class="block text-[green]">{{ $resent_msg }}</span>
                        @endif
                    </p>
                </div>
                <div>
                    <button
                        class='text-[16px] text-[#FFFFFF] font-[jost] font-[700] leading-[23.12px] w-full h-[23px] rounded-[4px] py-[28px] my-[15px] flex justify-center items-center bg-gradient-to-r from-[#380D37] to-[#DC275C]'
                        >Submit
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
</div>
