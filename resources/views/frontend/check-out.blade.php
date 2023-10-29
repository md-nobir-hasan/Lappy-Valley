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
            <h1 class='font-[jost] xl:text-[20px] font-[400] leading-[25.3px] text-[#353535]'>Shopping Cart/ Checkout
            </h1>
            <div class='h-1 bg-[#764A8733]'></div>
        </div>
        <!-- -------------check-out--section----------- -->

        <section class="flex  gap-[50px] my-[30px]">
            <div class="w-[550px]">
                <form class="border-[3px] border-[#380D37] rounded-[5px] p-[20px]">
                    <div class="flex gap-[15px] font-[jost] font-[600] text-center">
                        <div class="w-[25px] h-[25px] bg-[#000] text-[#fff] rounded-[100%] text-center mt-[5px]">
                            <h1>1</h1>
                        </div>
                        <div>
                            <h1 class="text-[#380D37] text-[24px] font-[jost] font-[600] tracking-[.5px] text-center">
                                Customer Information</h1>
                        </div>
                    </div>
                    <div class="flex gap-[15px] my-[10px]">
                        <div>
                            <label class="block font-[jost] font-[500] text-[#353535] text-[16px]" for="text">First
                                Name*</label>
                            <input
                                class="py-[10px] pl-[10px] pr-[50px] border-[2px] border-[#380D37] italic rounded-[4px] text-[16px] text-[#C4C4C4]"
                                type="text" placeholder="First Name*">
                        </div>
                        <div>
                            <label class="block font-[jost] font-[500] text-[#353535] text-[16px]" for="text">Last
                                Name*</label>
                            <input
                                class="py-[10px] pl-[10px] pr-[50px] border-[2px] border-[#380D37] italic rounded-[4px] text-[16px] text-[#C4C4C4]"
                                type="text" placeholder="Last Name*">
                        </div>
                    </div>
                    <div class="my-[10px]">
                        <label class="block font-[jost] font-[500] text-[#353535] text-[16px]"
                            for="text">Address*</label>
                        <input
                            class="py-[10px] pl-[10px] pr-[312px] border-[2px] border-[#380D37] italic rounded-[4px] text-[16px] text-[#C4C4C4]"
                            type="text" placeholder="Address*">
                    </div>
                    <div class="my-[10px]">
                        <label class="block font-[jost] font-[500] text-[#353535] text-[16px]"
                            for="number">Mobile*</label>
                        <input
                            class="py-[10px] pl-[10px] pr-[312px] border-[2px] border-[#380D37] italic rounded-[4px] text-[16px] text-[#C4C4C4]"
                            type="number" placeholder="Mobile Number*">
                    </div>
                    <div class="my-[10px]">
                        <label class="block font-[jost] font-[500] text-[#353535] text-[16px]"
                            for="email">Email:</label>
                        <input
                            class="py-[10px] pl-[10px] pr-[312px] border-[2px] border-[#380D37] italic rounded-[4px] text-[16px] text-[#C4C4C4]"
                            type="email" placeholder="Email:">
                    </div>
                    <div class="flex gap-[15px] my-[10px]">
                        <div>
                            <label class="block font-[jost] font-[500] text-[#353535] text-[16px]"
                                for="city">City*</label>
                            <input
                                class="py-[10px] pl-[10px] pr-[50px] border-[2px] border-[#380D37] italic rounded-[4px] text-[16px] text-[#C4C4C4]"
                                type="text" placeholder="City*">
                        </div>
                        <div>
                            <label class="block font-[jost] font-[500] text-[#353535] text-[16px]"
                                for="place">Zone*</label>
                            <select
                                class=" py-[12.5px] pl-[10px] pr-[110px] border-[2px] rounded-[4px] italic border-[#380D37] text-[#C4C4C4]">
                                <option value="Dhaka City">Dhaka City</option>
                                <option value="Khulna City">Khulna City</option>
                                <option value="Rajshahi City">Rajshahi City</option>
                                <option value="sylhet city">sylhet city"</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label class="block font-[jost] font-[500] text-[#353535] text-[16px]"
                            for="">Comment:</label>
                        <input
                            class="pt-[10px] pb-[80px] pl-[10px] pr-[312px] border-[2px] border-[#380D37] italic rounded-[4px] text-[16px] text-[#C4C4C4]"
                            type="text" placeholder="comment">
                    </div>
                </form>
            </div>

            <!-- -----------------form--end--------------- -->
            <div>
                <div class="flex gap-[30px]">

                    <div class="border-[#380D37] border-[3px] rounded-[4px] p-[20px]">

                        <div class="flex gap-[15px] font-[jost] font-[600] text-center my-[10px]">
                            <div class="w-[25px] h-[25px] bg-[#000] text-[#fff] rounded-[100%] text-center mt-[5px]">
                                <h1>2</h1>
                            </div>
                            <div>
                                <h1
                                    class="text-[#380D37] text-[24px] font-[jost] font-[600] tracking-[.5px] text-center">
                                    Payment Method</h1>
                            </div>
                        </div>
                        <div class="my-[10px]">
                            <h1 class="text-[#353535] text-[20px] font-[jost] font-[500]">Select Payment Method</h1>
                        </div>
                        <div class="my-[10px]">
                            <input class="w-[20px] h-[20px]" type="radio" value="Cash on Delivery">
                            <label class="text-[#353535] text-[20px] font-[jost] font-[500]" for="#">Cash on
                                Delivery</label>
                        </div>
                        <div class="my-[10px]">
                            <input class="w-[20px] h-[20px]" type="radio">
                            <label class="text-[#353535] text-[20px] font-[jost] font-[500]" for="">POS on
                                Delivery</label>
                        </div>
                        <div class="my-[10px]">
                            <input class="text-[#000] w-[20px] h-[20px]" type="radio" value="">
                            <label class="text-[#353535] text-[20px] font-[jost] font-[500]" for="">Online
                                Payment</label>
                        </div>

                        <div>
                            <div class="my-[10px]">
                                <h1 class="text-[#353535] text-[20px] font-[jost] font-[500]">We Accept:</h1>
                            </div>
                            <div class="my-[10px]">
                                <img src="../dist/img/account-icons.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- -----------------payment--method end--------------------------- -->
                    <div>
                        <div class="border-[#380D37] border-[3px] rounded-[4px] p-[20px]">

                            <div class="flex gap-[15px] font-[jost] font-[600] text-center my-[10px]">
                                <div
                                    class="w-[25px] h-[25px] bg-[#000] text-[#fff] rounded-[100%] text-center mt-[5px]">
                                    <h1>3</h1>
                                </div>
                                <div>
                                    <h1
                                        class="text-[#380D37] text-[24px] font-[jost] font-[600] tracking-[.5px] text-center">
                                        Delivery Method</h1>
                                </div>
                            </div>
                            <div class="my-[10px]">
                                <h1 class="text-[#353535] text-[20px] font-[jost] font-[500]">Select Delivery Method
                                </h1>
                            </div>
                            <div class="my-[10px]">
                                <input class="w-[20px] h-[20px]" type="radio" value="Cash on Delivery">
                                <label class="text-[#353535] text-[20px] font-[jost] font-[500]" for="#">Home
                                    Delivery - 60 Taka/label>
                            </div>
                            <div class="my-[10px]">
                                <input class="w-[20px] h-[20px]" type="radio">
                                <label class="text-[#353535] text-[20px] font-[jost] font-[500]" for="">Store
                                    Pickup- 0 Taka</label>
                            </div>
                            <div class="my-[10px]">
                                <input class="text-[#000] w-[20px] h-[20px]" type="radio" value="">
                                <label class="text-[#353535] text-[20px] font-[jost] font-[500]"
                                    for="">Request Express delivery - 120 Taka</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ------------------delivery method end --------------------------- -->

                <!-- ----------order-view--section-------- -->
                <div class="border-[#380D37] border-[3px] rounded-[5px] mt-[20px] pl-[20px] pt-[20px] pr-[20px]">
                    <div class="flex gap-[15px] font-[jost] font-[600] text-center my-[10px]">
                        <div class="w-[25px] h-[25px] bg-[#000] text-[#fff] rounded-[100%] text-center mt-[5px]">
                            <h1>4</h1>
                        </div>
                        <div>
                            <h1 class="text-[#380D37] text-[24px] font-[jost] font-[600] tracking-[.5px] text-center">
                                Order Overview</h1>
                        </div>
                    </div>
                    <div>
                        <table class="text-[#380D37] text-[14px] font-[jost] font-[400] w-full text-left text-">
                            <tr class="border-b-[rgba(0_0_0_0.20)] border-b-[1px] py-[20px]">
                                <th>Product Name</th>
                                <th class="text-center py-[10px]">Price</th>
                                <th class="text-right">Total</th>
                            </tr>
                            <tbody>
                                <tr class="border-b-[rgba(0_0_0_0.20)] border-b-[1px] font-[jost] font-[400]">
                                    <td class="text-[14px] py-[10px]">Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB,
                                        Brand New Cloud grey</td>
                                    <td class="text-left">1,50,000 Taka x 1</td>
                                    <td class="text-right text-[#DC275C]">1,50,000 Taka</td>
                                </tr>
                                <tr class="border-b-[rgba(0_0_0_0.20)] border-b-[1px] font-[jost] font-[400]">
                                    <td></td>
                                    <td class="text-right py-[10px]">Sub Total:</td>
                                    <td class="text-right text-[#DC275C]">1,50,000 Taka</td>
                                </tr>
                                <tr class="border-b-[rgba(0_0_0_0.20)] border-b-[1px] font-[jost] font-[400]">
                                    <td></td>
                                    <td class="text-right py-[10px]">Delivery Charge:</td>
                                    <td class="text-right text-[#DC275C]">60 Taka</td>
                                </tr>
                                <tr class="border-b-[rgba(0_0_0_0.20)] border-b-[1px] font-[jost] font-[400]">
                                    <td></td>
                                    <td class="text-right py-[10px]">Total:</td>
                                    <td class="text-right text-[#DC275C]">1,50,060 Taka</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
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
