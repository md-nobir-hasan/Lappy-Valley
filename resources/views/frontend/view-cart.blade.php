<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lappy Valley</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer src="/dist/alpine.js"></script>
    <link rel="stylesheet" href="/dist/output.css">
    <link rel="icon" href="../dist/img/figma.png" type="img/svg">
</head>

<body>
    <!-- Header Section -->
    <header class="xl:h-[100px] bg-gradient-to-r from-[#380D37] to-[#DC275C] text-white">
        <div class="flex items-center justify-between h-full px-10 ">
            <!-- <!- Logo -->
            <div class='pr-2'>
                <a href="#"><img class="xl:h-[80px]" src="/dist/img/Logo.svg" alt="Your Logo"></a>
            </div>
            <!-- Search Bar -->

            <div class="relative">
                <i class="fa fa-search absolute text-[aqua] mt-4 left-4" aria-hidden="true"></i>
                <input type="text"
                    class="xl:w-[700px] border text-left border-gray-300 rounded-[6px] py-[12px] px-10 placeholder-white-0 focus:outline-none focus:ring focus:border-blue-300"
                    placeholder="Search" />
            </div>

            <!-- Right-Side Logos/Icons -->
            <div class='flex items-center justify-center '>
                <!-- <div class="flex item-center "> -->
                <a href="#"><img class='xl:h-[65px]' src="/dist/img/Offers.svg" alt="Logo 1"></a>
                <a href="#"><img class='xl:h-[65px]' src="/dist/img/Cart.svg" alt="Logo 2"></a>
                <a href="#"> <img class='xl:h-[65px]' src="/dist/img/Account.svg" alt="Logo 3"></a>
                <!-- </div> -->
            </div>
        </div>
    </header>
    <!-----------------------header-section-end----->

    <nav class="bg-[#F2F2F2]  py-4 px-10">
        <ul class="font-[Jost] flex justify-between">
            <li class=" jost">
                <a href="product-list.php" class="font-[jost] xl:text-[20px] text-[#353535] flex items-center">All
                    Categories
                    <span
                        class="border-[#353535] inline-block w-2 h-2 border-b-2 border-r-2 transform rotate-45 ml-1"></span>
                </a>
            </li>
            <li>
                <a href="#" class="font-[jost] xl:text-[20px] text-[#353535] flex items-center">Brand New <span
                        class=" border-[#353535] inline-block w-2 h-2 border-b-2 border-r-2 transform rotate-45 ml-1"></span></a>
            </li>
            <li>
                <a href="#" class="font-[jost] xl:text-[20px] text-[#353535] flex items-center">Pre-owned <span
                        class="border-[#353535] inline-block w-2 h-2 border-b-2 border-r-2 transform rotate-45 ml-1"></span></a>
            </li>
            <li>
                <a href="#" class="font-[jost] xl:text-[20px] text-[#353535] flex items-center">Gaming Laptop
                    <span
                        class="border-[#353535] inline-block w-2 h-2 border-b-2 border-r-2 transform rotate-45 ml-1"></span></a>
            </li>
            <li>
                <a href="#" class="font-[jost] xl:text-[20px] text-[#353535] flex items-center">Student Laptop
                    <span
                        class="border-[#353535] inline-block w-2 h-2 border-b-2 border-r-2 transform rotate-45 ml-1"></span></a>
            </li>
            <li>
                <a href="#" class="font-[jost] xl:text-[20px] text-[#353535] flex items-center">Bussines Laptop
                    <span
                        class=" border-[#353535] inline-block w-2 h-2 border-b-2 border-r-2 transform rotate-45 ml-1"></span></a>
            </li>
            <li>
                <a href="#" class="font-[jost] xl:text-[20px] text-[#353535] flex items-center">Work Station <span
                        class=" border-[#353535] inline-block w-2 h-2 border-b-2 border-r-2 transform rotate-45 ml-1"></span></a>
            </li>
            <li>
                <a href="#" class="font-[jost] xl:text-[20px] text-[#353535] flex items-center">Dubai Variant
                    <span
                        class=" border-[#353535] inline-block w-2 h-2 border-b-2 border-r-2 transform rotate-45 ml-1"></span></a>
            </li>
            <li>
                <a href="#" class="font-[jost] xl:text-[20px] text-[#353535] flex items-center">UK Variant <span
                        class="border-[#353535] inline-block w-2 h-2 border-b-2 border-r-2 transform rotate-45 ml-1"></span></a>
            </li>
        </ul>
    </nav>
    <!-- ------------------container--section-------start--- -->
    <div class="container mx-auto">
        <div class=>
            <h1 class='font-[jost] xl:text-[20px] font-[400] leading-[25.3px] text-[#353535]'>Shopping Cart/View Cart
            </h1>
            <div class='h-1 bg-[#764A8733]'></div>
        </div>
        <!-- -------------order-table--section----------- -->
        <section class="mt-[20px]">
            <div class="my-[10px]">
                <h1 class="text-[#353535] text-[20px] font-[jost] font-[500]">Shopping Cart</h1>
            </div>
            <nav class="flex justify-between bg-[#380D37] py-[12px] px-[20px] text-[20px] font-[jost] font-[500]">
                <div class="flex justify-between text-[#FFF] gap-[45px]">
                    <h1>Image</h1>
                    <h1>Product Name</h1>
                </div>
                <div class="flex justify-between gap-[210px]">
                    <div class="flex justify-between text-[#FFF] gap-[100px]">
                        <h1>Model</h1>
                        <h1>Quantity</h1>
                    </div>
                    <div class="flex justify-between text-[#FFF] gap-[142px]">
                        <h1>Unit Price</h1>
                        <h1>Total</h1>
                    </div>
                </div>
            </nav>
            <div
                class="flex justify-between items-center py-[14px] px-[12px] text-[20px] font-[jost] font-[500] border-b-[#380D37] border-b-[2px]">
                <div class="flex justify-between items-center gap-[50px]">
                    <img class="w-[50px]"
                        src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                        alt="">
                    <h1>Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U</h1>
                </div>
                <div class="flex justify-between gap-[128px]">
                    <div class="flex justify-between gap-[80px]">
                        <h1>15AMN7</h1>
                        <div class="flex justify-evenly gap-[12px]">
                            <h1 class="py-[10px] px-[40px] bg-[#F2F2F2]">1</h1>
                            <img src="../dist/img/system-uicons_swap.svg" alt="">
                            <img src="../dist/img/gridicons_cross (1).svg" alt="">
                        </div>
                    </div>
                    <div class="flex justify-between gap-[100px]">
                        <h1 class="text-[#000]">1,50,000৳</h1>
                        <h1 class="text-[#000]">1,50,000৳</h1>
                    </div>
                </div>
            </div>
        </section>
        <table class="flex justify-end">
            <tbody>
                <tr class="border-b-[2px] border-b-[#380D37] gap-[80px] flex py-[12px] pl-[50px] justify-end">
                    <td class="text-[20px] text-[#380D37] font-[jost] font-[600]">Sub-Total:</td>
                    <td class="text-[20px] text-[#DC275C] font-[jost] font-[00]">1,50,000৳</td>
                </tr>
                <tr class="border-b-[2px] border-b-[#380D37] gap-[80px] flex py-[12px] pl-[50px] justify-end">
                    <td class="text-[20px] text-[#380D37] font-[jost] font-[600]">Total:</td>
                    <td class="text-[20px] text-[#DC275C] font-[jost] font-[500]">1,50,000৳</td>
                </tr>
            </tbody>
        </table>
        <div class="flex justify-end my-[60px]">
            <button
                class="bg-gradient-to-r from-[#380D37] to-[#DC275C] py-[10px] px-[40px] text-[18px] text-[#fff] font-[jost] font-[500] rounded-[5px]">Confirm
                Order</button>
        </div>
    </div>
    <!-- ----------------cart--part---end---- -->
    <footer class="bg-gradient-to-r from-[#380D37] to-[#DC275C] pt-4 text-white h-[450px] mt-[170px]">
        <div class="flex justify-evenly">
            <div class="">
                <p class="text-[#F2F2F2] font-[jost] text-[40px] font-[500] text-left my-3">Address</p>
                <ul class="text-[#F2F2F2] font-[jost] text-[15px] font-[500] leading-[30px] text-left">
                    <li><a href="#" class="hover:text-gray-300">Address: </a></li>
                    <li><a href="#" class="hover:text-gray-300">Shop # 4A-009A, Block # A, Level #04,</a></li>
                    <li class="mb-[15px]"><a href="#" class="hover:text-gray-300">Jamuna Future Park, Dhaka
                            -1229</a></li>
                    <li><a href="#" class="hover:text-gray-300"> Shop # 607(5th Floor),</a></li>
                    <li><a href="#" class="hover:text-gray-300">Rajuk Commercial-Complex, </a></li>
                    <li class="mb-[15px]"><a href="#" class="hover:text-gray-300">Azampur, Uttara,
                            Dhaka-1230</a></li>
                    <li><a href="#" class="hover:text-gray-300">Trade license : 202984t</a> </li>
                    <li> <a href="#" class="hover:text-gray-300">Bin Number : 0049818790102</a> </li>
                </ul>
            </div>
            <div>
                <p class="text-[#F2F2F2] font-[jost] text-[40px] font-[500] text-left my-3">Company</p>
                <ul class="text-[#F2F2F2] font-[jost] text-[16px] font-[500] leading-[30px] text-left">
                    <li class="mb-[25px] list-disc hover:bg-blue-950"><a href="#">Terms& Conditions</a></li>
                    <li class="mb-[25px] list-disc hover:bg-blue-950"><a href="#">Privay Policy</a></li>
                    <li class="mb-[25px] list-disc hover:bg-blue-950"><a href="#">My account</a></li>
                    <li class="mb-[25px] list-disc hover:bg-blue-950"><a href="#">Refund & Service Policy</a>
                    </li>
                </ul>
            </div>
            <div class="">
                <p class="text-[#F2F2F2] font-[jost] text-[40px] font-[500] text-left my-3">Contact</p>
                <ul class="text-[#F2F2F2] font-[jost] text-[15px] font-[500] leading-[30px] text-left">
                    <li class="mt-[15px]"><a href="#" class="hover:text-gray-300"> Phone:</a></li>
                    <li><a href="#" class="hover:text-gray-300">+8801757773557, +8801712644209,</a></li>
                    <li class="mb-[15px]"><a href="#" class="hover:text-gray-300">+8801736361123,
                            +8801722288944</a>
                    </li>
                    <li><a href="#" class="hover:text-gray-300">Email:</a></li>
                    <li class="mb-[15px]"><a href="#" class="hover:text-gray-300">info@lappyvalley.com</a></li>
                    <li><a href="#" class="hover:text-gray-300">Trade license : 202984</a></li>
                    <li><a href="#" class="hover:text-gray-300">Bin Number : 0049818790102</a></li>
                </ul>
                <!-- -------social----------icon-------------  -->
                <div class="mt-[20px] grid grid-cols-5 gap-2 text-[24px]">
                    <a href=""> <i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
                </div>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>
