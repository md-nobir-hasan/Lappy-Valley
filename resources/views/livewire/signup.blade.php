    <div
        class="px-[100px] max-md:px-[45px] max-lg:px-[70px] max-sm:px-[15px] mx-auto max-sm:mt-[70px] max-xl:mt-[100px]">
        <div class=>
            <h1 class='font-[jost] text-[16px] font-[400] leading-[25.3px] text-[#353535]'><a href="{{route('home')}}" wire:navigate>Home</a> / Account</h1>
            <div class='h-[2px] bg-[#764A8733]'></div>
        </div>
        <!-- --------------log-in--section----------- -->
        <div class="flex gap-[10px] w-[463px] max-sm:w-[300px] mx-auto mt-16 ">
            <a href="{{ route('user.login') }}" wire:navigate type="button" id='reg_btn'
                class="text-center change bg-[#F2F2F2] text-[#380D37] text-[16px] max-sm:text-[14px] max-sm:w-[300px] focus:text-[#fff]  font-[jost] font-[600] w-full py-[12px] max-sm:py-[6px] text- rounded-[5px]">
                LogIn
            </a>
            <a href="javascript:void(0)" type="button" id="login_btn"
                class="default  text-[16px] max-sm:text-[14px] focus:outline-none bg-[#380D37] text-[#fff] py-[12px] max-sm:py-[6px] font-[jost] font-[600] w-full text-center rounded-[5px]">
                Register
            </a>
        </div>
        <div
            class=" w-[463px] max-sm:w-[300px] mx-auto border-[2px] border-[#380D37] rounded-[4px] left-[70px] pt-[33px] max-sm:pt-[20px] pb-[20px] pl-[65px] max-sm:pb-[0px] pr-[50px] max-sm:px-[12px]">
            {{-- Registration form  --}}
            <div id="regForm">
                <div class="mb-[10px]">
                    <form wire:submit='save' class="w-full mt-[40px] max-sm:mt-[10px]">
                        <input wire:model='email'
                            class="italic rounded-[5px] bg-[#F2F2F2] py-[12px] max-sm:py-[6px] max-sm:text-[14px] w-full pl-[15px] text-[16px] text-[#353535] leading-[23.12px] font-[jost] font-[500]"
                            type="email" placeholder="Enter Your Email Address">
                        @error('email')
                            <span class="text-[red] text-[12px]">{{ $message }}</span>
                        @enderror

                        {{-- <input name="password" wire:model='password'
                            class="italic my-[10px] rounded-[5px] bg-[#F2F2F2] py-[12px] max-sm:py-[6px] max-sm:text-[14px]  text-[16px] text-[#353535] leading-[23.12px] w-full pl-[15px] font-[jost] font-[500]"
                            type="password" placeholder="Set Password">
                        @error('password')
                            <span class="text-[red] text-[12px]">{{ $message }}</span>
                        @enderror --}}
                        <div
                        class="password-input flex gap-[10px] items-center my-[10px] rounded-[5px] bg-[#F2F2F2] py-[12px] max-sm:py-[6px] pl-[15px] pr-[15px] max-sm:pr-[10px] max-sm:pl-[10px] w-full">
                        <input name="password" wire:model='password' data-eyeicon="eyeicon1"
                            class="password w-[90%] italic bg-[#F2F2F2] text-[#353535] text-[16px] max-sm:text-[14p] font-[jost] font-[500] outline-none"
                            type="password" placeholder="Set Password">
                        <img class="eyeicon toggle-eye w-[20px] h-[20px] max-sm:w-[15px] max-sm:h-[15px]"
                            data-eyeicon="eyeicon1" src="/storage/product/eyeclose.svg">
                        @error('password')
                            <span class="text-[red] text-[12px]">{{ $message }}</span>
                        @enderror
                    </div>

                        {{-- <input name="confirmed" wire:model='confirmed'
                            class="italic my-[10px] rounded-[5px] bg-[#F2F2F2] py-[12px] max-sm:py-[6px] max-sm:text-[14px]  text-[16px] text-[#353535] leading-[23.12px] w-full pl-[15px] font-[jost] font-[500]"
                            type="password" placeholder="Confirm The Password">

                        @error('confirmed')
                            <span class="text-[red] text-[12px]">{{ $message }}</span>
                        @enderror --}}

                        <div
                        class="password-input flex gap-[10px] items-center my-[10px] rounded-[5px] bg-[#F2F2F2] py-[12px] max-sm:py-[6px] pl-[15px] pr-[15px] max-sm:pr-[10px] max-sm:pl-[10px] w-full">
                        <input name="confirmed" wire:model='confirmed' data-eyeicon="eyeicon2"
                            class="password w-[90%] italic bg-[#F2F2F2] text-[#353535] text-[16px] max-sm:text-[14p] font-[jost] font-[500] outline-none"
                            type="password" placeholder="Confirm The Password">
                        <img class="eyeicon toggle-eye w-[20px] h-[20px] max-sm:w-[15px] max-sm:h-[15px]"
                            data-eyeicon="eyeicon2" src="/storage/product/eyeclose.svg">
                        @error('password')
                            <span class="text-[red] text-[12px]">{{ $message }}</span>
                        @enderror
                    </div>

                        <div class="my-[10px]">
                            <button
                                class="font-[jost] font-[500] text-[16px] max-sm:py-[6px] max-sm:text-[14px]  text-[#ffffff] bg-gradient-to-r from-[#380D37] to-[#DC275C] py-[12px] w-full rounded-[5px] flex justify-center items-center">
                                <div wire:loading wire:target='save'
                                    class="inline-block h-6 w-6 mr-2 animate-spin rounded-full border-4 border-solid border-current border-r-transparent align-[-0.125em] text-success motion-reduce:animate-[spin_1.5s_linear_infinite]"
                                    role="status">
                                    <span
                                        class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Loading...
                                    </span>
                                </div>
                                Register
                            </button>
                        </div>
                    </form>
                    <div class='flex justify-evenly items-center gap-2 my-[25px]'>
                        <div class='h-[1px] w-[155px] bg-[#000000]'></div>
                        <div class='text-[14px] text-[#380D37] font-[jost] font-[400] leading-[20.23px]'>OR
                        </div>
                        <div class='h-[1px] w-[155px] bg-[#000000]'></div>
                    </div>
                    <div class='items-center my-[25px]'>
                        <div
                            class='my-[25px] border-[1px] border-[#380D37] rounded-[4px] flex items-center justify-center'>
                            <a href="{{route('login.redirect',['google'])}}">
                                <button
                                    class=' h-[44px] max-sm:h-[35px] flex gap-2 items-center justify-center text-[16px] max-sm:text-[14px] text-[#380D37] font-[jost] font-[500] leading-[23.12px]'>
                                    Register with
                                    <img class="max-sm:w-[60px]" src="/storage/product/google.svg" alt="Product">
                                </button>
                            </a>
                        </div>
                        <div
                            class='my-[25px] border-[1px] border-[#380D37] rounded-[4px] flex items-center justify-center'>
                            <a href="{{route('login.redirect',['facebook'])}}">
                                <button
                                    class=' h-[44px] max-sm:h-[35px] flex gap-2 items-center justify-center text-[16px] max-sm:text-[14px] text-[#380D37] font-[jost] font-[500] leading-[23.12px]'>
                                    Register with
                                    <img class="max-sm:w-[60px]" src="/storage/product/facebook.svg"alt="Product">
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $('.toggle-eye').click(function() {
                    var passwordId = $(this).data('eyeicon');
                    var passwordInput = $('[data-eyeicon="' + passwordId + '"]');
    
                    if (passwordInput.length && passwordInput.prop('type')) {
                        var passwordType = passwordInput.prop('type');
                        var newType = (passwordType === 'password') ? 'text' : 'password';
    
                        passwordInput.prop('type', newType);
                        $(this).attr('src', '/storage/product/' + (newType === 'password' ? 'eyeclose' : 'eyeopen') + '.svg');
                    }
                });
            });
        </script>
    </div>
