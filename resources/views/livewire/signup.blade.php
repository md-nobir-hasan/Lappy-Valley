<div class="container mx-auto">
    <div>
        <h1 class='font-[jost] xl:text-[20px] font-[400] leading-[25.3px] text-[#353535]'>Home / Account</h1>
        <div class='h-1 bg-[#764A8733]'></div>
    </div>
    <form wire:submit='save'>
        <div class=" w-[490px] mx-auto mt-[40px] p-[px]">
            <div class="flex justify-between w-full gap-6 ">
                <button
                    class="bg-[#F2F2F2] text-[16px] focus:outline-none focus:bg-[#380D37] focus:text-[#fff] text-[#380D37] font-[jost] font-[600] px-[70px] w-full py-[12px] text-center rounded-[5px]"><a
                        href="#">Log In</a></button>
                <button
                    class="bg-[#F2F2F2] text-[16px] focus:bg-[#380D37] focus:text-[#fff] text-[#380D37] font-[jost] font-[600] px-[78.5px] py-[12px] w-full text-center rounded-[5px]"><a
                        href="#">Registration</a></button>
            </div>

            <div
                class="border-[2px] border-[#380D37] rounded-[4px] left-[70px] pt-[33px] pb-[20px] pl-[65px] pr-[50px]">
                <div class="mb-[15px]">
                    <input wire:model.blur='email' class="italic rounded-[5px] bg-[#F2F2F2] py-[12px] w-full pl-[15px] font-[jost] font-[500]"
                        type="email" placeholder="Enter Your Email Address">
                        @error('email')
                            <span class="text-[red] text-[12px]">{{$message}}</span>
                        @enderror
                </div>

                <div>
                    <span class="font-[jost] font-[600] text-[#380D37] text-[14px] my-[15px]">A password will be sent to
                        your email address.</span>
                    <p class="font-[jost] font-[600] text-[#380D37] text-[14px] my-[15px]">Your personal data will be
                        used to support your experience throughout this website,
                        to manage access to your account, and for other purposes described in our privacy policy.</p>
                </div>
                <div class="my-[10px]">
                    <button
                        class="font-[jost] font-[500] text-[18px] text-[#fff] bg-gradient-to-r from-[#380D37] to-[#DC275C] py-[12px] w-full rounded-[5px] flex justify-center items-center">

                        <div wire:loading
                            class="inline-block h-6 w-6 mr-2 animate-spin rounded-full border-4 border-solid border-current border-r-transparent align-[-0.125em] text-success motion-reduce:animate-[spin_1.5s_linear_infinite]"
                            role="status">
                            <span
                                class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                                >Loading...
                                </span>
                        </div>
                        Register
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>

