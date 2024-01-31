<div class="px-[100px] max-2xl:px-[70px] max-xl:px-[60px] max-lg:px-[38px] max-md:px-[35px] max-sm:px-[15px] max-sm:mt-[70px] max-xl:mt-[100px]">
    <div class=>
        <h1 class='font-[jost] text-[16px] font-[400] leading-[25.3px] text-[#353535]'><a href="{{route('home')}}" wire:navigate>Home</a> / Reset Password</h1>
        <div class='h-[2px] bg-[#764A8733]'></div>
    </div>
    <!-- --------------log-in--section----------- -->
    <form wire:submit='save' method="POST">
        @csrf
        <div class=" max-2xl:w-[463px] max-sm:w-full h-[336px] mx-auto mt-[40px]">
            <div class="border-[2px] border-[#380D37] rounded-[4px] left-[70px] max-sm:px-[40px] max-sm:py-[18px] pt-[33px] pb-[20px] pl-[65px] pr-[50px]">
                <div class="mb-[40px] mt-[10px]">
                    <span
                        class="font-[jost] font-[600] text-[#380D37] w-[181.56px] h-[29.25px] text-[20px] my-[15px]">Reset
                        Password</span>
                </div>
                <div class="mb-[20px] w-full">
                    <input wire:model='password' name="password"
                        class="italic rounded-[5px] bg-[#F2F2F2] py-[14px] pl-[15px] w-full font-[jost] font-[500]"
                        type="password" placeholder="New Password">
                    @error('password')
                        <span class="invalid-feedback text-red-900" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-[20px] w-full">
                    <input wire:model='confirmed'
                        class="italic rounded-[5px] bg-[#F2F2F2] py-[14px] pl-[15px] w-full font-[jost] font-[500] @error('email') is-invalid @enderror"
                        type="password" placeholder="Confirm Password">
                    @error('confirmed')
                        <span class="invalid-feedback text-red-900" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="my-[20px] w-full">
                    <button
                        class="w-full font-[jost] font-[500] text-[16px] text-[#fff] bg-gradient-to-r from-[#380D37] to-[#DC275C] py-[18px] rounded-[5px]">Change
                        Password</button>
                </div>
            </div>
        </div>
    </form>
    <!--Sign in button-->
    <div class='h-[2px] bg-[#764A8733] mt-[100px] max-sm:mt-[55px] max-lg:mt-[70px]'></div>
</div>
