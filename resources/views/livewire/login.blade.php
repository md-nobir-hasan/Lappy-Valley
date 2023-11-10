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
        <form wire:submit='login'>
            <div class="border-[2px] border-[#380D37] rounded-[4px] left-[70px] pt-[33px] pb-[20px] pl-[65px] pr-[50px]">
                <div class="mb-[15px]">
                    <input wire:model.blur='email'
                        class="italic rounded-[5px] bg-[#F2F2F2] py-[12px] pl-[20px] pr-[180px] font-[jost] font-[500]"
                        type="email" placeholder="Enter Your Email Address">
                         @error('email')
                            <span class="text-[red] text-[12px]">{{ $message }}</span>
                        @enderror
                </div>
                <div class="mb-[20px]">
                    <input wire:model.blur='password'
                        class="italic rounded-[5px] bg-[#F2F2F2] py-[12px] pl-[20px] pr-[180px] font-[jost] font-[500]"
                        type="password" placeholder="Password">
                        @error('password')
                            <span class="text-[red] text-[12px]">{{ $message }}</span>
                        @enderror
                </div>

                <div class="flex justify-between my-[15px]">
                    <div class="flex gap-[10px] text-[#000] text-[14px] font-[jost] font-[600]">
                        <input type="checkbox" id="remember">
                        <label for="remember">Remember Me</label>
                    </div>
                    <div class="text-[#DC275C] text-[14px] font-[jost] font-[600]"><a
                            href="{{ route('user.fp') }}">Forgot
                            Password?</a></div>
                </div>


                @if ($check_msg)
                <span class="text-[red] text-[16px]">{{$check_msg}}</span>
                @endif
                @if ($success_msg)
                <span class="text-[green] text-[16px]">{{$check_msg}}
                    <div
                    class="inline-block h-8 w-8 animate-[spinner-grow_0.75s_linear_infinite] rounded-full bg-current align-[-0.125em] text-secondary opacity-0 motion-reduce:animate-[spinner-grow_1.5s_linear_infinite]"
                    role="status">
                    <span
                        class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                        >Loading...</span
                    >
                    </div>
                </span>
                @endif
                <div class="my-[20px]">
                     <button
                        class="font-[jost] font-[500] text-[16px] text-[#f2f2f2] bg-gradient-to-r from-[#380D37] to-[#DC275C] py-[12px] w-full rounded-[5px] flex justify-center items-center">
                        <div wire:loading
                            class="inline-block h-6 w-6 mr-2 animate-spin rounded-full border-4 border-solid border-current border-r-transparent align-[-0.125em] text-success motion-reduce:animate-[spin_1.5s_linear_infinite]"
                            role="status">
                            <span
                                class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Loading...
                            </span>
                        </div>
                        Login
                    </button>
                </div>
            </div>
            </form>
        </div>
        <!--Sign in button-->
    </div>
