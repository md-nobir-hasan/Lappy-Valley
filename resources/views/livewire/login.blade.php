    <div class="container mx-auto">
        <div class=>
            <h1 class='font-[jost] text-[16px] font-[400] leading-[25.3px] text-[#353535]'>Home / Account</h1>
            <div class='h-[2px] bg-[#764A8733]'></div>
        </div>

        <!-- --------------log-in--section----------- -->


        <div class="flex gap-[10px] w-[463px] max-sm:w-[300px] mx-auto mt-16 ">
            <button type="button" id="login_btn"
                class="default text-[16px] max-sm:text-[14px] focus:outline-none bg-[#380D37] text-[#fff] py-[12px] max-sm:py-[6px] font-[jost] font-[600] w-full text-center rounded-[5px]">
                LogIn</button>

            <button type="button" id='reg_btn'
                class="change bg-[#F2F2F2] text-[#380D37] text-[16px] max-sm:text-[14px] max-sm:w-[300px] focus:text-[#fff]  font-[jost] font-[600] w-full py-[12px] max-sm:py-[6px] text- rounded-[5px]">
                Register
            </button>

        </div>

        <div
            class=" w-[463px] max-sm:w-[300px] mx-auto border-[2px] border-[#380D37] rounded-[4px] left-[70px] pt-[33px] max-sm:pt-[20px] pb-[20px] pl-[65px] max-sm:pb-[0px] pr-[50px] max-sm:px-[12px]">
            {{-- Login form  --}}
            <div id='logInForm'>
                <form wire:submit='login' class="w-full mx-auto">
                    {{-- <div> --}}
                    <div class="mb-[15px]">
                        <input wire:model.blur='email'
                            class="italic rounded-[5px] bg-[#F2F2F2] text-[#353535] text-[16px] max-sm:text-[14px] py-[12px] max-sm:py-[6px]  pl-[20px] max-sm:pl-[10px] w-full font-[jost] font-[500]"
                            type="email" placeholder="User Name or Email Address">
                        @error('email')
                            <span class="text-[red] text-[12px] max-sm:text-[10px]">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-[20px]">
                        <input wire:model.blur='password'
                            class="italic rounded-[5px] bg-[#F2F2F2] text-[#353535] text-[16px] max-sm:text-[14p] py-[12px] max-sm:py-[6px]  pl-[20px] max-sm:pl-[10px] w-full font-[jost] font-[500]"
                            type="password" placeholder="Password">
                        @error('password')
                            <span class="text-[red] text-[12px] max-sm:text-[10px]">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex justify-between my-[15px]">
                        <div class="flex gap-[10px]  text-[12px] max-sm:text-[10px] font-[jost] font-[600]">
                            <input type="checkbox" id="remember" class="w-[16px] h-[16px] text-[#380D37]">
                            <label for="remember" class="text-[#353535]">Remember Me</label>
                        </div>
                        <div class="text-[#DC275C] text-[12px] max-sm:text-[10px] font-[jost] font-[600]"><a
                                href="{{ route('user.fp') }}">Forgot
                                Password?</a></div>
                    </div>

                    @if ($check_msg)
                        <span class="text-[red] text-[16px]">{{ $check_msg }}</span>
                    @endif
                    @if ($success_msg)
                        <span class="text-[green] text-[16px]">{{ $check_msg }}
                            <div class="inline-block h-8 w-8 animate-[spinner-grow_0.75s_linear_infinite] rounded-full bg-current align-[-0.125em] text-secondary opacity-0 motion-reduce:animate-[spinner-grow_1.5s_linear_infinite]"
                                role="status">
                                <span
                                    class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Loading...</span>
                            </div>
                        </span>
                    @endif
                    <div class="my-[20px]">
                        <button
                            class="font-[jost] font-[500] text-[16px] max-sm:text-[14px] text-[#ffffff] bg-gradient-to-r from-[#380D37] to-[#DC275C] py-[12px] max-sm:py-[6px] w-full rounded-[5px] flex justify-center items-center">
                            <div
                                class="inline-block h-6 w-6 mr-2 animate-spin rounded-full border-4 border-solid border-current border-r-transparent align-[-0.125em] text-success motion-reduce:animate-[spin_1.5s_linear_infinite]"
                                role="status">
                                <span
                                    class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Loading...
                                </span>
                            </div>
                            Login
                        </button>
                    </div>
                    {{-- </div> --}}
                </form>
            </div>

            {{-- Registration form  --}}
            <div id="regForm" class="hidden">
                <form wire:submit='save' class="w-full mt-[40px] max-sm:mt-[10px]">
                    <div class="mb-[10px]">
                        <input wire:model.blur='email'
                            class="italic rounded-[5px] bg-[#F2F2F2] py-[12px] max-sm:py-[6px] max-sm:text-[14px] w-full pl-[15px] text-[16px] text-[#353535] leading-[23.12px] font-[jost] font-[500]"
                            type="email" placeholder="Enter Your Email Address">
                        @error('email')
                            <span class="text-[red] text-[12px]">{{ $message }}</span>
                        @enderror

                        <input name="password" wire:model.blur='password'
                            class="italic my-[10px] rounded-[5px] bg-[#F2F2F2] py-[12px] max-sm:py-[6px] max-sm:text-[14px]  text-[16px] text-[#353535] leading-[23.12px] w-full pl-[15px] font-[jost] font-[500]"
                            type="password" placeholder="Set Password">
                        @error('password')
                            <span class="text-[red] text-[12px]">{{ $message }}</span>
                        @enderror

                        <input name="confirmed" wire:model.blur='confirmed'
                            class="italic my-[10px] rounded-[5px] bg-[#F2F2F2] py-[12px] max-sm:py-[6px] max-sm:text-[14px]  text-[16px] text-[#353535] leading-[23.12px] w-full pl-[15px] font-[jost] font-[500]"
                            type="password" placeholder="Confirm The Password">

                        @error('confirmed')
                            <span class="text-[red] text-[12px]">{{ $message }}</span>
                        @enderror

                        <div class="my-[10px]">
                            <button
                                class="font-[jost] font-[500] text-[16px] max-sm:py-[6px] max-sm:text-[14px]  text-[#ffffff] bg-gradient-to-r from-[#380D37] to-[#DC275C] py-[12px] w-full rounded-[5px] flex justify-center items-center">
                                {{--   --}}
                                Register
                            </button>
                        </div>
                        <div class='flex justify-evenly items-center gap-2 my-[25px]'>
                            <div class='h-[1px] w-[155px] bg-[#000000]'></div>
                            <div class='text-[14px] text-[#380D37] font-[jost] font-[400] leading-[20.23px]'>OR
                            </div>
                            <div class='h-[1px] w-[155px] bg-[#000000]'></div>
                        </div>
                        <div class='items-center my-[25px]'>
                            <div
                                class='my-[25px] border-[1px] border-[#380D37] rounded-[4px] flex items-center justify-center'>
                                <a href="#"><button
                                        class=' h-[44px] max-sm:h-[35px] flex gap-2 items-center justify-center text-[16px] max-sm:text-[14px] text-[#380D37] font-[jost] font-[500] leading-[23.12px]'>Log
                                        in with <img class="max-sm:w-[60px]" src="/storage/product/google.svg" alt="Product"></button></a>
                            </div>
                            <div
                                class='my-[25px] border-[1px] border-[#380D37] rounded-[4px] flex items-center justify-center'>
                                <a href="#"><button
                                        class=' h-[44px] max-sm:h-[35px] flex gap-2 items-center justify-center text-[16px] max-sm:text-[14px] text-[#380D37] font-[jost] font-[500] leading-[23.12px]'>Log
                                        in with <img class="max-sm:w-[60px]" src="/storage/product/facebook.svg" alt="Product"></button></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <div class="h-[2px] bg-[#764A8733] my-[60px]"> </div>
        <script>
            $(document).ready(function() {

                $('#login_btn').on('click', function() {
                    $('#regForm').hide();
                    $('#logInForm').show();
                    $(this).addClass('bg-[#380D37] text-[#fff]');
                    $(this).removeClass('bg-[#F2F2F2] text-[#380D37]');
                    $('#reg_btn').removeClass('bg-[#380D37] text-[#fff]')
                    $('#reg_btn').addClass('bg-[#F2F2F2] text-[#380D37]');
                });

                $('#reg_btn').on('click', function() {
                    $('#logInForm').hide();
                    $('#regForm').show();
                    $(this).addClass('bg-[#380D37] text-[#fff]');
                    $(this).removeClass('bg-[#F2F2F2] text-[#380D37]');
                    $('#login_btn').removeClass('bg-[#380D37] text-[#fff]');
                    $('#login_btn').addClass('bg-[#F2F2F2] text-[#380D37]');
                });
            })
        </script>
    </div>
