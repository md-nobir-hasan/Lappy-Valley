<div class="container mx-auto">
    <div>
        <h1 class='font-[jost] xl:text-[16px] font-[400] leading-[25.3px] text-[#353535]'>Home / Account</h1>
        <div class='h-[2px] bg-[#764A8733]'></div>
    </div>
    <form wire:submit='save'>
        <div class=" w-[463px] mx-auto mt-[40px] p-[px]">
            <div class="flex justify-between w-full">
                <a href="{{route('user.login')}}"> <button type="button"
                        class="bg-[#F2F2F2] focus:outline-none focus:bg-[#380D37] focus:text-[#f2f2f2] text-[16px] text-[#380D37] font-[jost] font-[700] w-[232px]  py-[12px] text-center rounded-[5px]">Log
                        In</button></a>
                <a href="{{route('user.register')}}"> <button type="button"
                        class="bg-[#F2F2F2] text-[16px] focus:bg-[#380D37] focus:text-[#f2f2f2] text-[#380D37] font-[jost] font-[700] py-[12px] w-[232px] text-center rounded-[5px]">
                        Registration</button></a>
            </div>

            <div
                class="border-[2px] border-[#380D37] rounded-[4px] left-[70px] pt-[33px] pb-[20px] pl-[65px] pr-[50px]">
                <div class="mb-[10px]">
                    <input wire:model.blur='email'
                        class="italic rounded-[5px] bg-[#F2F2F2] py-[12px] w-full pl-[15px] text-[16px] text-[#353535] leading-[23.12px] opacity-[30%] font-[jost] font-[500]"
                        type="email" placeholder="Enter Your Email Address">
                    @error('email')
                        <span class="text-[red] text-[12px]">{{ $message }}</span>
                    @enderror
                    <input 
                        class="italic my-[10px] rounded-[5px] bg-[#F2F2F2] py-[12px] text-[16px] text-[#353535] leading-[23.12px] opacity-[30%] w-full pl-[15px] font-[jost] font-[500]"
                        type="email" placeholder="Set Password">

                        <input
                        class="italic my-[10px] rounded-[5px] bg-[#F2F2F2] py-[12px] text-[16px] text-[#353535] leading-[23.12px] opacity-[30%] w-full pl-[15px] font-[jost] font-[500]"
                        type="email" placeholder="Enter Your Email Address">
                </div>
                <div class="my-[10px]">
                    <button
                        class="font-[jost] font-[500] text-[16px] text-[#f2f2f2] bg-gradient-to-r from-[#380D37] to-[#DC275C] py-[12px] w-full rounded-[5px] flex justify-center items-center">
                        <div wire:loading
                            class="inline-block h-6 w-6 mr-2 animate-spin rounded-full border-4 border-solid border-current border-r-transparent align-[-0.125em] text-success motion-reduce:animate-[spin_1.5s_linear_infinite]"
                            role="status">
                            <span
                                class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Loading...
                            </span>
                        </div>
                        Register
                    </button>
                </div>
                <div class='flex justify-evenly items-center gap-2 my-[25px]'>
                <div class='h-[1px] w-[155px] bg-[#000000]'></div>
                <div class='text-[16px] text-[#380D37] font-[jost] font-[400] leading-[20.23px]'>OR</div>
                <div class='h-[1px] w-[155px] bg-[#000000]'></div>
            </div>
          <div class='items-center my-[25px]'>
          <div class='my-[25px] border-[1px] border-[#380D37] rounded-[4px] flex items-center justify-center'>
               <a href="#"><button class=' h-[44px] flex gap-2 items-center justify-center text-[16px] text-[#380D37] font-[jost] font-[500] leading-[23.12px]'>Log in with <img src="/storage/product/google.svg" alt="Product"></button></a>
            </div>
            <div class='my-[25px] border-[1px] border-[#380D37] rounded-[4px] flex items-center justify-center'>
            <a href="#"><button class=' h-[44px] flex gap-2 items-center justify-center text-[16px] text-[#380D37] font-[jost] font-[500] leading-[23.12px]'>Log in with <img src="/storage/product/facebook.svg" alt="Product"></button></a>
            </div>
          </div>
            </div>
         
        </div>
    </form>
</div>
