    <div class="px-[100px] max-2xl:px-[70px] max-xl:px-[60px] max-lg:px-[38px] max-md:px-[35px] max-sm:px-[15px]">
        <div class=>
            <h1 class='font-[jost] text-[16px] font-[400] leading-[25.3px] text-[#353535]'>Home / Account</h1>
            <div class='h-[2px] bg-[#764A8733]'></div>
        </div>

        <!-- --------------log-in--section----------- -->


        <div class="flex gap-[10px] w-[463px] max-sm:w-[300px] mx-auto mt-16 ">
            <button type="button" id="login_btn"
                class="default text-[16px] max-sm:text-[14px] focus:outline-none bg-[#380D37] text-[#fff] py-[12px] max-sm:py-[6px] font-[jost] font-[600] w-full text-center rounded-[5px]">
                LogIn</button>
           <a href="{{route('user.register')}}" wire:navigate type="button" id='reg_btn'
                class="text-center change bg-[#F2F2F2] text-[#380D37] text-[16px] max-sm:text-[14px] max-sm:w-[300px] focus:text-[#fff]  font-[jost] font-[600] w-full py-[12px] max-sm:py-[6px] text- rounded-[5px]"
                >Register
         {{-- <button type="button" id='reg_btn'
                class="change bg-[#F2F2F2] text-[#380D37] text-[16px] max-sm:text-[14px] max-sm:w-[300px] focus:text-[#fff]  font-[jost] font-[600] w-full py-[12px] max-sm:py-[6px] text- rounded-[5px]">
                Register
            </button> --}}
        </a>
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
                            <div wire:loading wire:target='login'
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

        </div>
        {{-- <div class="h-[2px] bg-[#764A8733] my-[60px]"> </div> --}}
    </div>
{{-- // Hero section slide
            $('#move_back').on('click', function() {
                let current_slide = Number($(this).val()) - 1;
                let total_slide = $('.slide').lenght;
                console.log(current_slide, total_slide, 'yes');
                // if(current_slide>=total_slide){
                //     current_slide == 1
                // }
                if (current_slide < 1) {
                    current_slide == 1
                }
                $('.slide').hide();
                $('.slide').eq(current_slide).show();
                $('.slide_icon').val(current_slide);
                $(this).addClass('slide-active');
                $('#move_front').removeClass('slide-active')
            })
            $('#move_front').on('click', function() {
                let current_slide = Number($(this).val()) + 1;
                let total_slide = $('.slide').lenght;

                if (current_slide > total_slide) {
                    current_slide == 1
                }
                // if(current_slide<1){
                //     current_slide == 1
                // }
                $('.slide').hide();
                $('.slide').eq(current_slide).show();
                $('.slide_icon').val(current_slide);
                $(this).addClass('slide-active');
                $('#move_back').removeClass('slide-active')
            }); --}}
