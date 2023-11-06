    <div class="container mx-auto">
        <div class=>
            <h1 class='font-[jost] text-[16px] font-[400] leading-[25.3px] text-[#353535]'>Home / Account</h1>
            <div class='h-[2px] bg-[#764A8733]'></div>
        </div>
        <!-- --------------log-in--section----------- -->

        <div class=" w-[490px] mx-auto mt-[40px] p-[px]">
            <div class=" flex gap-[10px]">
                <button type="button"
                    class="bg-[#F2F2F2] text-[16px] focus:outline-none focus:bg-[#380D37] focus:text-[#fff] text-[#380D37] font-[jost] font-[600] px-[96px] py-[12px] text-left rounded-[5px]"><a
                        href="{{route('user.login')}}">Log In</a></button>
                <a href="{{route('user.register')}}">
                    <button type="button"
                        class="bg-[#F2F2F2] text-[16px] focus:bg-[#380D37] focus:text-[#fff] text-[#380D37] font-[jost] font-[600] px-[78.5px] py-[12px] text-right rounded-[5px]">
                        Registration
                    </button>
                </a>
            </div>

            <div class="border-[2px] border-[#380D37] rounded-[4px] left-[70px] pt-[33px] pb-[20px] pl-[65px] pr-[50px]">
                <div class="mb-[15px]">
                    <input
                        class="italic rounded-[5px] bg-[#F2F2F2] py-[12px] pl-[20px] pr-[180px] font-[jost] font-[500]"
                        type="email" placeholder="Enter Your Email Address">
                </div>
                <div class="mb-[20px]">
                    <input
                        class="italic rounded-[5px] bg-[#F2F2F2] py-[12px] pl-[20px] pr-[180px] font-[jost] font-[500]"
                        type="password" placeholder="Password">
                </div>

                <div class="flex justify-between my-[15px]">
                    <div class="flex gap-[10px] text-[#000] text-[14px] font-[jost] font-[600]">
                        <input type="checkbox">
                        <label for="#">Remember Me</label>
                    </div>
                    <div class="text-[#DC275C] text-[14px] font-[jost] font-[600]"><a
                            href="{{ route('user.fp') }}">Forgot
                            Password?</a></div>
                </div>




                <div class="my-[20px]">
                    <button
                        class="font-[jost] font-[500] text-[18px] text-[#fff] bg-gradient-to-r from-[#380D37] to-[#DC275C] py-[12px] px-[161px] rounded-[5px]">Log
                        in</button>
                </div>
            </div>
        </div>
        <!--Sign in button-->
    </div>
