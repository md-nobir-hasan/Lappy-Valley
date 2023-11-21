<div class="container mx-auto">
    <div class=>
        <h1 class='font-[jost] xl:text-[20px] font-[400] leading-[25.3px] text-[#353535]'>Home / Account</h1>
        <div class='h-1 bg-[#764A8733]'></div>
    </div>
    <!-- --------------log-in--section----------- -->
    <form action="{{route('password.email')}}" method="POST">
        @csrf
        <div class=" w-[490px] mx-auto mt-[40px] p-[px]">
            <div class="border-[2px] border-[#380D37] rounded-[4px] left-[70px] pt-[33px] pb-[20px] pl-[65px] pr-[50px]">
                <div class="mb-[40px] mt-[10px]">
                    <span class="font-[jost] font-[600] text-[#380D37] text-[18px] my-[15px]">Reset Password</span>
                </div>
                <div class="mb-[20px] w-full">
                    <input name="email" class="italic rounded-[5px] bg-[#F2F2F2] py-[14px] pl-[15px] w-full font-[jost] font-[500]"
                        type="email" placeholder="New Password">
                </div>
                <div class="mb-[20px] w-full">
                    <input class="italic rounded-[5px] bg-[#F2F2F2] py-[14px] pl-[15px] w-full font-[jost] font-[500] @error('email') is-invalid @enderror"
                        type="email" placeholder="Confirm Password">
                          @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="my-[20px] w-full">
                    <button
                        class="w-full font-[jost] font-[500] text-[18px] text-[#fff] bg-gradient-to-r from-[#380D37] to-[#DC275C] py-[18px] rounded-[5px]"
                        >Change Password</button>
                </div>
            </div>
        </div>
    </form>
    <!--Sign in button-->
</div>
