    <div class="container mx-auto">
        <div class=>
            <h1 class='font-[jost] text-[16px] font-[400] leading-[25.3px] text-[#353535]'>Home / Account</h1>
            <div class='h-[2px] bg-[#764A8733]'></div>
        </div>

        <!-- --------------log-in--section----------- -->


        <div class="flex gap-[10px] w-[463px] mx-auto mt-16 ">
            <button type="button" id="login_btn"
                class="default text-[16px]  focus:outline-none bg-[#380D37] text-[#fff] font-[jost] font-[600] w-full text-center rounded-[5px]">
                LogIn</button>

            <button type="button" id='reg_btn'
                class="change bg-[#F2F2F2] text-[#380D37] text-[16px] focus:text-[#fff]  font-[jost] font-[600] w-full py-[12px] text- rounded-[5px]">
                Register
            </button>

        </div>

        <div
            class=" w-[463px] mx-auto border-[2px] border-[#380D37] rounded-[4px] left-[70px] pt-[33px] pb-[20px] pl-[65px] pr-[50px]">
            {{-- Login form  --}}
            <div id='logInForm'>
                <form wire:submit='login' class="w-full mx-auto">
                    {{-- <div> --}}
                    <div class="mb-[15px]">
                        <input wire:model.blur='email'
                            class="italic rounded-[5px] bg-[#F2F2F2] text-[#353535] py-[12px] pl-[20px] w-full font-[jost] font-[500]"
                            type="email" placeholder="User Name or Email Address">
                        @error('email')
                            <span class="text-[red] text-[12px]">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-[20px]">
                        <input wire:model.blur='password'
                            class="italic rounded-[5px] bg-[#F2F2F2] text-[#353535] py-[12px] w-full pl-[20px] font-[jost] font-[500]"
                            type="password" placeholder="Password">
                        @error('password')
                            <span class="text-[red] text-[12px]">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex justify-between my-[15px]">
                        <div class="flex gap-[10px]  text-[12px] font-[jost] font-[600]">
                            <input type="checkbox" id="remember" class="w-[16px] h-[16px] text-[#380D37]">
                            <label for="remember" class="text-[#353535]">Remember Me</label>
                        </div>
                        <div class="text-[#DC275C] text-[12px] font-[jost] font-[600]"><a
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
                            class="font-[jost] font-[500] text-[16px] text-[#ffffff] bg-gradient-to-r from-[#380D37] to-[#DC275C] py-[12px] w-full rounded-[5px] flex justify-center items-center">
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
                    {{-- </div> --}}
                </form>
            </div>
            {{-- Registration form  --}}
            <div id="regForm" class="hidden">
                <form wire:submit='save' class="w-full mt-[40px]">
                    <div class="mb-[10px]">
                        <input wire:model.blur='email'
                            class="italic rounded-[5px] bg-[#F2F2F2] py-[12px] w-full pl-[15px] text-[16px] text-[#353535] leading-[23.12px] font-[jost] font-[500]"
                            type="email" placeholder="Enter Your Email Address">
                        @error('email')
                            <span class="text-[red] text-[12px]">{{ $message }}</span>
                        @enderror

                        <input name="password" wire:model.blur='password'
                            class="italic my-[10px] rounded-[5px] bg-[#F2F2F2] py-[12px] text-[16px] text-[#353535] leading-[23.12px] w-full pl-[15px] font-[jost] font-[500]"
                            type="password" placeholder="Set Password">
                        @error('password')
                            <span class="text-[red] text-[12px]">{{ $message }}</span>
                        @enderror

                        <input name="confirmed" wire:model.blur='confirmed'
                            class="italic my-[10px] rounded-[5px] bg-[#F2F2F2] py-[12px] text-[16px] text-[#353535] leading-[23.12px] w-full pl-[15px] font-[jost] font-[500]"
                            type="password" placeholder="Confirm The Password">

                        @error('confirmed')
                            <span class="text-[red] text-[12px]">{{ $message }}</span>
                        @enderror

                        <div class="my-[10px]">
                            <button
                                class="font-[jost] font-[500] text-[16px] text-[#ffffff] bg-gradient-to-r from-[#380D37] to-[#DC275C] py-[12px] w-full rounded-[5px] flex justify-center items-center">
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
                            <div class='text-[14px] text-[#380D37] font-[jost] font-[400] leading-[20.23px]'>OR
                            </div>
                            <div class='h-[1px] w-[155px] bg-[#000000]'></div>
                        </div>
                        <div class='items-center my-[25px]'>
                            <div
                                class='my-[25px] border-[1px] border-[#380D37] rounded-[4px] flex items-center justify-center'>
                                <a href="#"><button
                                        class=' h-[44px] flex gap-2 items-center justify-center text-[16px] text-[#380D37] font-[jost] font-[500] leading-[23.12px]'>Log
                                        in with <img src="/storage/product/google.svg" alt="Product"></button></a>
                            </div>
                            <div
                                class='my-[25px] border-[1px] border-[#380D37] rounded-[4px] flex items-center justify-center'>
                                <a href="#"><button
                                        class=' h-[44px] flex gap-2 items-center justify-center text-[16px] text-[#380D37] font-[jost] font-[500] leading-[23.12px]'>Log
                                        in with <img src="/storage/product/facebook.svg" alt="Product"></button></a>
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

<div>
    <style>

  
  .menu-toggle {
    cursor: pointer;
    padding: 15px;
    position: absolute;;
    top: 20px;
    left: 20px;
    z-index: 2;
  }
  
  .bar {
    width: 30px;
    height: 3px;
    background-color: #fff;
    margin: 6px 0;
    transition: 0.4s;
  }
  
  .menu {
    position: fixed;
    top: 0;
    left:-280px;
    width: 300px;
    background-color: black;
    z-index: 1;
    overflow: hidden;
    transition: 0.5s;
  }
  .active.menu {
    left: 0px;
    top: 0px;
    color:#fff;
  }
  
  .menu ul {
    list-style: none;
    padding: 0;
    margin: 100px 0 0 0;
    text-align: center;
  }
  
  .menu li {
    padding: 20px;
  }
  
  .menu a {
    text-decoration: none;
    color: #fff;
    font-size: 18px;
  }
  
  .menu-toggle.active .bar:nth-child(1) {
    transform: rotate(-45deg) translate(-7px, 5px);
  }
  
  .menu-toggle.active .bar:nth-child(2) {
    opacity: 0;
  }
  
  .menu-toggle.active .bar:nth-child(3) {
    transform: rotate(45deg) translate(-7px, -5px);
  }
  
    </style>
    <div class="menu-toggle" onclick="toggleMenu()">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </div>
    <div class="menu">
      <!-- Your menu content goes here -->
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
    <script>
   
    let menuToggle = document.querySelector('.menu-toggle');
    let menu = document.querySelector('.menu');

    menuToggle.onclick = function toggleMenu() {
        menu.classList.toggle('active');
        menuToggle.classList.toggle('active');
    
  }

  $(document).ready(function() {           
            $('.menu-toggle').on('click', function() {
                $('.menu').addClass('left-0');
                $('.menu').removeClass('left-[-280px]');
            });
            // $('.asian_btn').on('click', function() {
            //     $(this).addClass('bg-[#380D37] text-[#F2F2F2]');
            //     $(this).removeClass('bg-[#F2F2F2] text-[#380D37]');
            //     $('.usa_btn').removeClass('bg-[#380D37] text-[#F2F2F2]');
            //     $('.usa_btn').addClass('bg-[#F2F2F2] text-[#380D37]');
            // });
        })
    </script>
  </div>
    </div>
