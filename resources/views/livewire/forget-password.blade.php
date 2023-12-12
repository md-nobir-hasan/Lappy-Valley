<div class="px-[100px] max-sm:px-[25px] max-lg:px-[45px] max-xl:px-[70px] max-sm:mt-[70px] max-xl:mt-[100px]">
    <div class=>
        <h1 class='font-[jost] text-[16px] font-[400] leading-[25.3px] text-[#353535]'>Home / Account</h1>
        <div class='h-[2px] bg-[#764A8733]'></div>
    </div>
    <!-- --------------log-in--section----------- -->
    <form wire:submit='save'>

        <div class=" max-2xl:w-[463px] max-sm:w-full mx-auto mt-[40px]">
            <div class="border-[2px] border-[#380D37] rounded-[4px] left-[70px] py-[30px] px-[40px]">
                <div>
                    <span class="font-[jost] font-[600] text-[#380D37] text-[20px] my-[15px]">Lost your Password?</span>
                    <p class="font-[jost] font-[600] text-[#000000] text-[12px] my-[20px]">Please enter your username or
                        email address. You will receive a link to create a new password via email.
                    </p>
                </div>
                <div class="mb-[20px] w-full">
                    <input wire:model='email'
                        class="italic rounded-[5px] bg-[#F2F2F2] text-[#353535]  py-[14px] pl-[15px] w-full font-[jost] font-[500] @error('email') is-invalid @enderror"
                        type="email" placeholder="User Name or Email Address">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="my-[20px] w-full">
                    <button
                        class=" w-full font-[jost] font-[500] text-[16px] text-[#fff] bg-gradient-to-r from-[#380D37] to-[#DC275C] py-[18px] rounded-[5px]">Reset
                        Password
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
  <div class="h-[2px] bg-[#764A8733] my-[60px] max-sm:my-[30px]"></div>
</div>
