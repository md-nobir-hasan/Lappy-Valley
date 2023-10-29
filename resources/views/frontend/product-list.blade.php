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

    <div class='ml-[40px]'>
        <h1 class='font-[jost] xl:text-[20px] font-[400] leading-[25.3px] text-[#353535]'>All Categories/ Brand New</h1>
        <div class='h-1 bg-[#764A8733]'></div>
    </div>

    <!-- Sidenav -->
    <div class="container mx-auto mt-4">
        <div class="flex justify-between gap-8">
            <div class="[min-width:230px] mt-2">
                <!-- ---------------nav-1st--part--------------- -->
                <div x-data="{ open: true, toggle() { this.open = !this.open } }" class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] p-4'>
                    <div class="flex justify-between">
                        <span class='text-[#380D37] font-[jost] font-[600] text-[17px] leading-[25.23px] '
                            for="text">Availability</span>
                        <i @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="fa fa-angle-up text-[#000000] text-[16px] cursor-pointer" aria-hidden="true"></i>
                    </div>
                    <div class="h-[1.5px] bg-[#380D3733] min-w-[114%] ml-[-15px] translate-y-[15px]">
                    </div>
                    <div x-show="open" class='px-[0px] pt-[20px] pb-[2px]'>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>In Stock</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' class='' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Pre Order</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Up Coming</span>
                        </label>
                    </div>
                </div>
                <!-- --------------------------nav----2nd---part--------------- -->
                <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                    class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3 p-4'>
                    <div class="flex justify-between">
                        <span class='text-[#380D37] font-[jost] font-[600] text-[17px] leading-[25.23px] '
                            for="text">Brands</span>
                        <i @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="fa fa-angle-up text-[#000000] text-[16px] cursor-pointer" aria-hidden="true"></i>
                    </div>
                    <div class="h-[1.5px] bg-[#380D3733] min-w-[114%] ml-[-15px] translate-y-[15px]">
                    </div>
                    <div x-show="open" class='px-[0px] pt-[20px] pb-[2px]'>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Asus</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' class='' type="checkbox"
                                name='status' valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>HP</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>DELL</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Lenovo</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Acer</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Apple</span>
                        </label>
                    </div>
                </div>
                <!-- ------------------nav-3rd--part-------------- -->
                <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                    class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3 p-4'>
                    <div class="flex justify-between">
                        <span class='text-[#380D37] font-[jost] font-[600] text-[17px] leading-[25.23px] '
                            for="text">Processor Models</span>
                        <i @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="fa fa-angle-up text-[#000000] text-[16px] cursor-pointer" aria-hidden="true"></i>
                    </div>
                    <div class="h-[1.5px] bg-[#380D3733] min-w-[114%] ml-[-15px] translate-y-[15px]">
                    </div>
                    <div x-show="open" class='px-[0px] pt-[20px] pb-[2px]'>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Intel core i3</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' class='' type="checkbox"
                                name='status' valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Intel core i5</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Intel core i7</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Intel core i9</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>AMD Athlon</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>AMD Ryzen 3</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>AMD Ryzen 5</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>AMD Ryzen 7</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>AMD Ryzen 9</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Apple M1</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Apple M1 Pro</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Apple M1 Pro Max</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Apple M2</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Apple M2 Pro</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Apple M2 Pro Max</span>
                        </label>
                    </div>
                </div>
                <!-- --------------nav-4th---part------------ -->
                <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                    class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3 p-4'>
                    <div class="flex justify-between">
                        <span class='text-[#380D37] font-[jost] font-[600] text-[17px] leading-[25.23px] '
                            for="text">Processor Generations</span>
                        <i @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="fa fa-angle-up text-[#000000] text-[16px] mt-[4px] cursor-pointer"
                            aria-hidden="true"></i>
                    </div>
                    <div class="h-[1.5px] bg-[#380D3733] min-w-[114%] ml-[-15px] translate-y-[15px]"></div>
                    <div x-show="open" class='px-[0px] pt-[20px] pb-[2px]'>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[116x] text-[#380D37]'>Intel 5th gen</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' class='' type="checkbox"
                                name='status' valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Intel 6th gen</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Intel 7th gen</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Intel 8th gen</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Intel 9th gen</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Intel 10th gen</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Intel 11th gen</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Intel 12th gen</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Intel 13th gen</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>AMD Ryzen 3000
                                series</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>AMD Ryzen 4000
                                series</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>AMD Ryzen 5000
                                series</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>AMD Ryzen 6000
                                series</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>AMD Ryzen 7000
                                series</span>
                        </label>
                    </div>
                </div>
                <!-- ------------------nav-5th-----part----------- -->
                <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                    class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3 p-4'>
                    <div class="flex justify-between">
                        <span class='text-[#380D37] font-[jost] font-[600] text-[17px] leading-[25.23px] '
                            for="text">Display Size</span>
                        <i @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="fa fa-angle-up text-[#000000] text-[16px] cursor-pointer" aria-hidden="true"></i>
                    </div>
                    <div class="h-[1.5px] bg-[#380D3733] min-w-[114%] ml-[-15px] translate-y-[15px]">
                    </div>
                    <div x-show="open" class='px-[0px] pt-[20px] pb-[2px]'>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Bellow 13 inch</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' class='' type="checkbox"
                                name='status' valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>13 inch to 13.9
                                inch</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>14 inch to 14.9
                                inch</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>15 inch to 15.9
                                inch</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>16 inch to 16.9
                                inch</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>17 inch to 17.9
                                inch</span>
                        </label>
                    </div>
                </div>
                <!-- --------------nav-6th---part------------- -->
                <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                    class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3 p-4'>
                    <div class="flex justify-between">
                        <span class='text-[#380D37] font-[jost] font-[600] text-[17px] leading-[25.23px] '
                            for="text">Display Type</span>
                        <i @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="fa fa-angle-up text-[#000000] text-[16px] cursor-pointer" aria-hidden="true"></i>
                    </div>
                    <div class="h-[1.5px] bg-[#380D3733] min-w-[114%] ml-[-15px] translate-y-[15px]">
                    </div>
                    <div x-show="open" class='px-[0px] pt-[20px] pb-[2px]'>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>LED</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' class='' type="checkbox"
                                name='status' valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>OLED</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>14 inch to 14.9
                                inch</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>15 inch to 15.9
                                inch</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>16 inch to 16.9
                                inch</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>17 inch to 17.9
                                inch</span>
                        </label>
                    </div>
                </div>
                <!-- ---------------nav--7th--part------------------ -->
                <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                    class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3 p-4'>
                    <div class="flex justify-between">
                        <span class='text-[#380D37] font-[jost] font-[600] text-[17px] leading-[25.23px] '
                            for="text">RAM</span>
                        <i @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="fa fa-angle-up text-[#000000] text-[16px] cursor-pointer" aria-hidden="true"></i>
                    </div>
                    <div class="h-[1.5px] bg-[#380D3733] min-w-[114%] ml-[-15px] translate-y-[15px]">
                    </div>
                    <div x-show="open" class='px-[0px] pt-[20px] pb-[2px]'>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>4 GB</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' class='' type="checkbox"
                                name='status' valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>8 GB</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>16 GB</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>32 GB</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>64 GB</span>
                        </label>
                    </div>
                </div>
                <!-- --------------nav---8th--part------------------- -->
                <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                    class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3 p-4'>
                    <div class="flex justify-between">
                        <span class='text-[#380D37] font-[jost] font-[600] text-[17px] leading-[25.23px] '
                            for="text">HDD</span>
                        <i @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="fa fa-angle-up text-[#000000] text-[16px] cursor-pointer" aria-hidden="true"></i>
                    </div>
                    <div class="h-[1.5px] bg-[#380D3733] min-w-[114%] ml-[-15px] translate-y-[15px]">
                    </div>
                    <div x-show="open" class='px-[0px] pt-[20px] pb-[2px]'>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>1 TB</span>
                        </label>
                    </div>
                </div>
                <!-- ---------------nav--9th---part---------------- -->
                <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                    class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3 p-4'>
                    <div class="flex justify-between">
                        <span class='text-[#380D37] font-[jost] font-[600] text-[17px] leading-[25.23px] '
                            for="text">SSD</span>
                        <i @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="fa fa-angle-up text-[#000000] text-[16px] cursor-pointer" aria-hidden="true"></i>
                    </div>
                    <div class="h-[1.5px] bg-[#380D3733] min-w-[114%] ml-[-15px] translate-y-[15px]">
                    </div>
                    <div x-show="open" class='px-[0px] pt-[20px] pb-[2px]'>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>128 GB</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' class='' type="checkbox"
                                name='status' valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>256 GB</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>512 GB</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>1 TB</span>
                        </label>
                    </div>
                </div>
                <!-- -------------nav-10th-------part------------------ -->
                <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                    class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3 p-4'>
                    <div class="flex justify-between">
                        <span class='text-[#380D37] font-[jost] font-[600] text-[17px] leading-[25.23px] '
                            for="text">Graphics</span>
                        <i @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="fa fa-angle-up text-[#000000] text-[16px] cursor-pointer" aria-hidden="true"></i>
                    </div>
                    <div class="h-[1.5px] bg-[#380D3733] min-w-[114%] ml-[-15px] translate-y-[15px]">
                    </div>
                    <div x-show="open" class='px-[0px] pt-[20px] pb-[2px]'>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span
                                class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Integrated/Shared</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' class='' type="checkbox"
                                name='status' valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Dedicated 2GB</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Dedicated 4GB</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Dedicated 6GB</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Dedicated 8GB</span>
                        </label>
                    </div>
                </div>
                <!-- -----------------nav----11th---part----------------- -->
                <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                    class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3 p-4'>
                    <div class="flex justify-between">
                        <span class='text-[#380D37] font-[jost] font-[600] text-[17px] leading-[25.23px] '
                            for="text">Special Features</span>
                        <i @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="fa fa-angle-up text-[#000000] text-[16px] cursor-pointer" aria-hidden="true"></i>
                    </div>
                    <div class="h-[1.5px] bg-[#380D3733] min-w-[114%] ml-[-15px] translate-y-[15px]">
                    </div>
                    <div x-show="open" class='px-[0px] pt-[20px] pb-[2px]'>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Backlit Keyboard</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' class='' type="checkbox"
                                name='status' valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Finger Print</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>360 Degree</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Touch Screen</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Touch Screen</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Type-C Port</span>
                        </label>
                    </div>
                </div>
            </div>

            <!-- ------------right---part--start--- -->

            <div class="mt-2">
                <nav
                    class=" px-3 flex justify-between items-center bg-[#F2F2F2] py-3 font-[jost] font-[600] text-[16px] leading-[30px] rounded-[6px]">
                    <div class="">
                        <h1>Brand New</h1>
                    </div>
                    <div class="flex justify-between font-[jost] font-[500] text-[17px]">
                        <div class="">
                            <label for="text">Show:</label>
                            <select name="input-sort" class="py-[7px] pr-[6px] border-[1.5px] ">
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="30">30</option>
                                <option value="30">30</option>
                            </select>
                        </div>
                        <div class="">
                            <label for="text">Short By:</label>
                            <select name="input-sort" class="py-[8px] pr-[40px] border-[1.5px]">>
                                <option value="20">Default</option>
                                <option value="30">30</option>
                                <option value="30">30</option>
                                <option value="30">30</option>
                            </select>
                        </div>
                    </div>
                </nav>
                <!-- ------cart--group----1st--part--- -->
                <div class='grid grid-cols-4 gap-8 mt-4'>
                    <div class="border-[2px] border-[#380D37] rounded-[6px] py-2 px-4">
                        <img class="object-center"
                            src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                            alt="">
                        <div class='border-t-[1px] border-b-[1px] border-[#380D3733] py-2'>
                            <div class="">
                                <p class="font-[jost] text-[18px] font-[600] leading-[30px] text-left text-[#380D37]">
                                    Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB</p>
                            </div>
                            <div class='mt-2'>
                                <ul class='text-[#353535] list-decimal px-4 text-[16px] leading-[30px]'>
                                    <li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li>
                                    <li>RAM: 8GB DDR5 5500MHz, Storage: 256GB SSD</li>
                                    <li>Display: 15.6" FHD (1920X1080)</li>
                                    <li>Features: Type-C</li>
                                </ul>
                            </div>
                        </div>
                        <div class="my-3 text-center ">
                            <a href="#"
                                class="font-[jost] text-[16px] font-[600] leading-[30px] text-[#DC275C] block">1,50,000
                                TAKA</a>
                            <button class='bg-[#380D37] text-white py-[8px] px-[70px] rounded-[5px] my-[10px]'><a
                                    href="product-details.html">Buy Now</a></button>
                            <a href="#">
                                <p class="font-[jost] text-[16px] font-[600] leading-[30px]">Add to Cart</p>
                            </a>
                        </div>
                    </div>
                    <!-- --------------cart--2----------------- -->
                    <div class="border-[2px] border-[#380D37] rounded-[6px] py-2 px-4">
                        <img class="object-center"
                            src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                            alt="">
                        <div class='border-t-[1px] border-b-[1px] border-[#380D3733] py-2'>
                            <div class="">
                                <p class="font-[jost] text-[18px] font-[600] leading-[30px] text-left text-[#380D37]">
                                    Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB</p>
                            </div>
                            <div class='mt-2'>
                                <ul class='text-[#353535] list-decimal px-4 text-[16px] leading-[30px]'>
                                    <li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li>
                                    <li>RAM: 8GB DDR5 5500MHz, Storage: 256GB SSD</li>
                                    <li>Display: 15.6" FHD (1920X1080)</li>
                                    <li>Features: Type-C</li>
                                </ul>
                            </div>
                        </div>
                        <div class="my-3 text-center ">
                            <a href="#"
                                class="font-[jost] text-[16px] font-[600] leading-[30px] text-[#DC275C] block">1,50,000
                                TAKA</a>
                            <button class='bg-[#380D37] text-white py-[8px] px-[70px] rounded-[5px] my-[10px]'><a
                                    href="product-details.html">Buy Now</a></button>
                            <a href="#">
                                <p class="font-[jost] text-[16px] font-[600] leading-[30px]">Add to Cart</p>
                            </a>
                        </div>
                    </div>
                    <!-- --------------cart--3---------------- -->
                    <div class="border-[2px] border-[#380D37] rounded-[6px] py-2 px-4">
                        <img class="object-center"
                            src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                            alt="">
                        <div class='border-t-[1px] border-b-[1px] border-[#380D3733] py-2'>
                            <div class="">
                                <p class="font-[jost] text-[18px] font-[600] leading-[30px] text-left text-[#380D37]">
                                    Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB</p>
                            </div>
                            <div class='mt-2'>
                                <ul class='text-[#353535] list-decimal px-4 text-[16px] leading-[30px]'>
                                    <li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li>
                                    <li>RAM: 8GB DDR5 5500MHz, Storage: 256GB SSD</li>
                                    <li>Display: 15.6" FHD (1920X1080)</li>
                                    <li>Features: Type-C</li>
                                </ul>
                            </div>
                        </div>
                        <div class="my-3 text-center ">
                            <a href="#"
                                class="font-[jost] text-[16px] font-[600] leading-[30px] text-[#DC275C] block">1,50,000
                                TAKA</a>
                            <button class='bg-[#380D37] text-white py-[8px] px-[70px] rounded-[5px] my-[10px]'><a
                                    href="product-details.html">Buy Now</a></button>
                            <a href="#">
                                <p class="font-[jost] text-[16px] font-[600] leading-[30px]">Add to Cart</p>
                            </a>
                        </div>
                    </div>
                    <!-- --------------cart--4----------------- -->
                    <div class="border-[2px] border-[#380D37] rounded-[6px] py-2 px-4">
                        <img class="object-center"
                            src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                            alt="">
                        <div class='border-t-[1px] border-b-[1px] border-[#380D3733] py-2'>
                            <div class="">
                                <p class="font-[jost] text-[18px] font-[600] leading-[30px] text-left text-[#380D37]">
                                    Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB</p>
                            </div>
                            <div class='mt-2'>
                                <ul class='text-[#353535] list-decimal px-4 text-[16px] leading-[30px]'>
                                    <li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li>
                                    <li>RAM: 8GB DDR5 5500MHz, Storage: 256GB SSD</li>
                                    <li>Display: 15.6" FHD (1920X1080)</li>
                                    <li>Features: Type-C</li>
                                </ul>
                            </div>
                        </div>
                        <div class="my-3 text-center ">
                            <a href="#"
                                class="font-[jost] text-[16px] font-[600] leading-[30px] text-[#DC275C] block">1,50,000
                                TAKA</a>
                            <button class='bg-[#380D37] text-white py-[8px] px-[70px] rounded-[5px] my-[10px]'><a
                                    href="product-details.html">Buy Now</a></button>
                            <a href="#">
                                <p class="font-[jost] text-[16px] font-[600] leading-[30px]">Add to Cart</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- -----------------cart-group---2nd--part------ -->
                <div class='grid grid-cols-4 gap-8 mt-4'>
                    <div class="border-[2px] border-[#380D37] rounded-[6px] py-2 px-4">
                        <img class="object-center"
                            src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                            alt="">
                        <div class='border-t-[1px] border-b-[1px] border-[#380D3733] py-2'>
                            <div class="">
                                <p class="font-[jost] text-[18px] font-[600] leading-[30px] text-left text-[#380D37]">
                                    Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB</p>
                            </div>
                            <div class='mt-2'>
                                <ul class='text-[#353535] list-decimal px-4 text-[16px] leading-[30px]'>
                                    <li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li>
                                    <li>RAM: 8GB DDR5 5500MHz, Storage: 256GB SSD</li>
                                    <li>Display: 15.6" FHD (1920X1080)</li>
                                    <li>Features: Type-C</li>
                                </ul>
                            </div>
                        </div>
                        <div class="my-3 text-center ">
                            <a href="#"
                                class="font-[jost] text-[16px] font-[600] leading-[30px] text-[#DC275C] block">1,50,000
                                TAKA</a>
                            <button class='bg-[#380D37] text-white py-[8px] px-[70px] rounded-[5px] my-[10px]'><a
                                    href="..src/product-details.html"><a href="product-details.html">Buy
                                        Now</a></a></button>
                            <a href="">
                                <p class="font-[jost] text-[16px] font-[600] leading-[30px]">Add to Cart</p>
                            </a>
                        </div>
                    </div>
                    <!-- --------------cart--2----------------- -->
                    <div class="border-[2px] border-[#380D37] rounded-[6px] py-2 px-4">
                        <img class="object-center"
                            src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                            alt="">
                        <div class='border-t-[1px] border-b-[1px] border-[#380D3733] py-2'>
                            <div class="">
                                <p class="font-[jost] text-[18px] font-[600] leading-[30px] text-left text-[#380D37]">
                                    Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB</p>
                            </div>
                            <div class='mt-2'>
                                <ul class='text-[#353535] list-decimal px-4 text-[16px] leading-[30px]'>
                                    <li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li>
                                    <li>RAM: 8GB DDR5 5500MHz, Storage: 256GB SSD</li>
                                    <li>Display: 15.6" FHD (1920X1080)</li>
                                    <li>Features: Type-C</li>
                                </ul>
                            </div>
                        </div>
                        <div class="my-3 text-center ">
                            <a href="#"
                                class="font-[jost] text-[16px] font-[600] leading-[30px] text-[#DC275C] block">1,50,000
                                TAKA</a>
                            <button class='bg-[#380D37] text-white py-[8px] px-[70px] rounded-[5px] my-[10px]'><a
                                    href="product-details.html">Buy Now</a></button>
                            <a href="#">
                                <p class="font-[jost] text-[16px] font-[600] leading-[30px]">Add to Cart</p>
                            </a>
                        </div>
                    </div>
                    <!-- --------------cart--3----------------- -->
                    <div class="border-[2px] border-[#380D37] rounded-[6px] py-2 px-4">
                        <img class="object-center"
                            src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                            alt="">
                        <div class='border-t-[1px] border-b-[1px] border-[#380D3733] py-2'>
                            <div class="">
                                <p class="font-[jost] text-[18px] font-[600] leading-[30px] text-left text-[#380D37]">
                                    Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB</p>
                            </div>
                            <div class='mt-2'>
                                <ul class='text-[#353535] list-decimal px-4 text-[16px] leading-[30px]'>
                                    <li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li>
                                    <li>RAM: 8GB DDR5 5500MHz, Storage: 256GB SSD</li>
                                    <li>Display: 15.6" FHD (1920X1080)</li>
                                    <li>Features: Type-C</li>
                                </ul>
                            </div>
                        </div>
                        <div class="my-3 text-center ">
                            <a href="#"
                                class="font-[jost] text-[16px] font-[600] leading-[30px] text-[#DC275C] block">1,50,000
                                TAKA</a>
                            <button class='bg-[#380D37] text-white py-[8px] px-[70px] rounded-[5px] my-[10px]'><a
                                    href="product-details.html">Buy Now</a></button>
                            <a href="#">
                                <p class="font-[jost] text-[16px] font-[600] leading-[30px]">Add to Cart</p>
                            </a>
                        </div>
                    </div>
                    <!-- --------------cart--4----------------- -->
                    <div class="border-[2px] border-[#380D37] rounded-[6px] py-2 px-4">
                        <img class="object-center"
                            src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                            alt="">
                        <div class='border-t-[1px] border-b-[1px] border-[#380D3733] py-2'>
                            <div class="">
                                <p class="font-[jost] text-[18px] font-[600] leading-[30px] text-left text-[#380D37]">
                                    Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB</p>
                            </div>
                            <div class='mt-2'>
                                <ul class='text-[#353535] list-decimal px-4 text-[16px] leading-[30px]'>
                                    <li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li>
                                    <li>RAM: 8GB DDR5 5500MHz, Storage: 256GB SSD</li>
                                    <li>Display: 15.6" FHD (1920X1080)</li>
                                    <li>Features: Type-C</li>
                                </ul>
                            </div>
                        </div>
                        <div class="my-3 text-center ">
                            <a href="#"
                                class="font-[jost] text-[16px] font-[600] leading-[30px] text-[#DC275C] block">1,50,000
                                TAKA</a>
                            <button class='bg-[#380D37] text-white py-[8px] px-[70px] rounded-[5px] my-[10px]'><a
                                    href="product-details.html">Buy Now</a></button>
                            <a href="#">
                                <p class="font-[jost] text-[16px] font-[600] leading-[30px]">Add to Cart</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- -----------------cart-group---3rd--part------ -->
                <div class='grid grid-cols-4 gap-8 mt-4'>
                    <div class="border-[2px] border-[#380D37] rounded-[6px] py-2 px-4">
                        <img class="object-center"
                            src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                            alt="">
                        <div class='border-t-[1px] border-b-[1px] border-[#380D3733] py-2'>
                            <div class="">
                                <p class="font-[jost] text-[18px] font-[600] leading-[30px] text-left text-[#380D37]">
                                    Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB</p>
                            </div>
                            <div class='mt-2'>
                                <ul class='text-[#353535] list-decimal px-4 text-[16px] leading-[30px]'>
                                    <li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li>
                                    <li>RAM: 8GB DDR5 5500MHz, Storage: 256GB SSD</li>
                                    <li>Display: 15.6" FHD (1920X1080)</li>
                                    <li>Features: Type-C</li>
                                </ul>
                            </div>
                        </div>
                        <div class="my-3 text-center ">
                            <a href="#"
                                class="font-[jost] text-[16px] font-[600] leading-[30px] text-[#DC275C] block">1,50,000
                                TAKA</a>
                            <button class='bg-[#380D37] text-white py-[8px] px-[70px] rounded-[5px] my-[10px]'><a
                                    href="product-details.html">Buy Now</a></button>
                            <a href="#">
                                <p class="font-[jost] text-[16px] font-[600] leading-[30px]">Add to Cart</p>
                            </a>
                        </div>
                    </div>
                    <!-- --------------cart--2----------------- -->
                    <div class="border-[2px] border-[#380D37] rounded-[6px] py-2 px-4">
                        <img class="object-center"
                            src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                            alt="">
                        <div class='border-t-[1px] border-b-[1px] border-[#380D3733] py-2'>
                            <div class="">
                                <p class="font-[jost] text-[18px] font-[600] leading-[30px] text-left text-[#380D37]">
                                    Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB</p>
                            </div>
                            <div class='mt-2'>
                                <ul class='text-[#353535] list-decimal px-4 text-[16px] leading-[30px]'>
                                    <li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li>
                                    <li>RAM: 8GB DDR5 5500MHz, Storage: 256GB SSD</li>
                                    <li>Display: 15.6" FHD (1920X1080)</li>
                                    <li>Features: Type-C</li>
                                </ul>
                            </div>
                        </div>
                        <div class="my-3 text-center ">
                            <a href="#"
                                class="font-[jost] text-[16px] font-[600] leading-[30px] text-[#DC275C] block">1,50,000
                                TAKA</a>
                            <button class='bg-[#380D37] text-white py-[8px] px-[70px] rounded-[5px] my-[10px]'><a
                                    href="product-details.html">Buy Now</a></button>
                            <a href="#">
                                <p class="font-[jost] text-[16px] font-[600] leading-[30px]">Add to Cart</p>
                            </a>
                        </div>
                    </div>
                    <!-- --------------cart--3----------------- -->
                    <div class="border-[2px] border-[#380D37] rounded-[6px] py-2 px-4">
                        <img class="object-center"
                            src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                            alt="">
                        <div class='border-t-[1px] border-b-[1px] border-[#380D3733] py-2'>
                            <div class="">
                                <p class="font-[jost] text-[18px] font-[600] leading-[30px] text-left text-[#380D37]">
                                    Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB</p>
                            </div>
                            <div class='mt-2'>
                                <ul class='text-[#353535] list-decimal px-4 text-[16px] leading-[30px]'>
                                    <li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li>
                                    <li>RAM: 8GB DDR5 5500MHz, Storage: 256GB SSD</li>
                                    <li>Display: 15.6" FHD (1920X1080)</li>
                                    <li>Features: Type-C</li>
                                </ul>
                            </div>
                        </div>
                        <div class="my-3 text-center ">
                            <a href="#"
                                class="font-[jost] text-[16px] font-[600] leading-[30px] text-[#DC275C] block">1,50,000
                                TAKA</a>
                            <button class='bg-[#380D37] text-white py-[8px] px-[70px] rounded-[5px] my-[10px]'><a
                                    href="product-details.html">Buy Now</a></button>
                            <a href="#">
                                <p class="font-[jost] text-[16px] font-[600] leading-[30px]">Add to Cart</p>
                            </a>
                        </div>
                    </div>
                    <!-- --------------cart--4----------------- -->
                    <div class="border-[2px] border-[#380D37] rounded-[6px] py-2 px-4">
                        <img class="object-center"
                            src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                            alt="">
                        <div class='border-t-[1px] border-b-[1px] border-[#380D3733] py-2'>
                            <div class="">
                                <p class="font-[jost] text-[18px] font-[600] leading-[30px] text-left text-[#380D37]">
                                    Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB</p>
                            </div>
                            <div class='mt-2'>
                                <ul class='text-[#353535] list-decimal px-4 text-[16px] leading-[30px]'>
                                    <li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li>
                                    <li>RAM: 8GB DDR5 5500MHz, Storage: 256GB SSD</li>
                                    <li>Display: 15.6" FHD (1920X1080)</li>
                                    <li>Features: Type-C</li>
                                </ul>
                            </div>
                        </div>
                        <div class="my-3 text-center ">
                            <a href="#"
                                class="font-[jost] text-[16px] font-[600] leading-[30px] text-[#DC275C] block">1,50,000
                                TAKA</a>
                            <button class='bg-[#380D37] text-white py-[8px] px-[70px] rounded-[5px] my-[10px]'><a
                                    href="product-details.html">Buy Now</a></button>
                            <a href="#">
                                <p class="font-[jost] text-[16px] font-[600] leading-[30px]">Add to Cart</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- -----------------cart-group---4th--part------ -->
                <div class='grid grid-cols-4 gap-8 mt-4'>
                    <div class="border-[2px] border-[#380D37] rounded-[6px] py-2 px-4">
                        <img class="object-center"
                            src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                            alt="">
                        <div class='border-t-[1px] border-b-[1px] border-[#380D3733] py-2'>
                            <div class="">
                                <p class="font-[jost] text-[18px] font-[600] leading-[30px] text-left text-[#380D37]">
                                    Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB</p>
                            </div>
                            <div class='mt-2'>
                                <ul class='text-[#353535] list-decimal px-4 text-[16px] leading-[30px]'>
                                    <li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li>
                                    <li>RAM: 8GB DDR5 5500MHz, Storage: 256GB SSD</li>
                                    <li>Display: 15.6" FHD (1920X1080)</li>
                                    <li>Features: Type-C</li>
                                </ul>
                            </div>
                        </div>
                        <div class="my-3 text-center ">
                            <a href="#"
                                class="font-[jost] text-[16px] font-[600] leading-[30px] text-[#DC275C] block">1,50,000
                                TAKA</a>
                            <button class='bg-[#380D37] text-white py-[8px] px-[70px] rounded-[5px] my-[10px]'><a
                                    href="product-details.html">Buy Now</a></button>
                            <a href="#">
                                <p class="font-[jost] text-[16px] font-[600] leading-[30px]">Add to Cart</p>
                            </a>
                        </div>
                    </div>
                    <!-- --------------cart--2----------------- -->
                    <div class="border-[2px] border-[#380D37] rounded-[6px] py-2 px-4">
                        <img class="object-center"
                            src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                            alt="">
                        <div class='border-t-[1px] border-b-[1px] border-[#380D3733] py-2'>
                            <div class="">
                                <p class="font-[jost] text-[18px] font-[600] leading-[30px] text-left text-[#380D37]">
                                    Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB</p>
                            </div>
                            <div class='mt-2'>
                                <ul class='text-[#353535] list-decimal px-4 text-[16px] leading-[30px]'>
                                    <li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li>
                                    <li>RAM: 8GB DDR5 5500MHz, Storage: 256GB SSD</li>
                                    <li>Display: 15.6" FHD (1920X1080)</li>
                                    <li>Features: Type-C</li>
                                </ul>
                            </div>
                        </div>
                        <div class="my-3 text-center ">
                            <a href="#"
                                class="font-[jost] text-[16px] font-[600] leading-[30px] text-[#DC275C] block">1,50,000
                                TAKA</a>
                            <button class='bg-[#380D37] text-white py-[8px] px-[70px] rounded-[5px] my-[10px]'><a
                                    href="product-details.html">Buy Now</a></button>
                            <a href="#">
                                <p class="font-[jost] text-[16px] font-[600] leading-[30px]">Add to Cart</p>
                            </a>
                        </div>
                    </div>
                    <!-- --------------cart--3----------------- -->
                    <div class="border-[2px] border-[#380D37] rounded-[6px] py-2 px-4">
                        <img class="object-center"
                            src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                            alt="">
                        <div class='border-t-[1px] border-b-[1px] border-[#380D3733] py-2'>
                            <div class="">
                                <p class="font-[jost] text-[18px] font-[600] leading-[30px] text-left text-[#380D37]">
                                    Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB</p>
                            </div>
                            <div class='mt-2'>
                                <ul class='text-[#353535] list-decimal px-4 text-[16px] leading-[30px]'>
                                    <li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li>
                                    <li>RAM: 8GB DDR5 5500MHz, Storage: 256GB SSD</li>
                                    <li>Display: 15.6" FHD (1920X1080)</li>
                                    <li>Features: Type-C</li>
                                </ul>
                            </div>
                        </div>
                        <div class="my-3 text-center ">
                            <a href="#"
                                class="font-[jost] text-[16px] font-[600] leading-[30px] text-[#DC275C] block">1,50,000
                                TAKA</a>
                            <button class='bg-[#380D37] text-white py-[8px] px-[70px] rounded-[5px] my-[10px]'><a
                                    href="product-details.html">Buy Now</a></button>
                            <a href="#">
                                <p class="font-[jost] text-[16px] font-[600] leading-[30px]">Add to Cart</p>
                            </a>
                        </div>
                    </div>
                    <!-- --------------cart--4----------------- -->
                    <div class="border-[2px] border-[#380D37] rounded-[6px] py-2 px-4">
                        <img class="object-center"
                            src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                            alt="">
                        <div class='border-t-[1px] border-b-[1px] border-[#380D3733] py-2'>
                            <div class="">
                                <p class="font-[jost] text-[18px] font-[600] leading-[30px] text-left text-[#380D37]">
                                    Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB</p>
                            </div>
                            <div class='mt-2'>
                                <ul class='text-[#353535] list-decimal px-4 text-[16px] leading-[30px]'>
                                    <li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li>
                                    <li>RAM: 8GB DDR5 5500MHz, Storage: 256GB SSD</li>
                                    <li>Display: 15.6" FHD (1920X1080)</li>
                                    <li>Features: Type-C</li>
                                </ul>
                            </div>
                        </div>
                        <div class="my-3 text-center ">
                            <a href="#"
                                class="font-[jost] text-[16px] font-[600] leading-[30px] text-[#DC275C] block">1,50,000
                                TAKA</a>
                            <button class='bg-[#380D37] text-white py-[8px] px-[70px] rounded-[5px] my-[10px]'><a
                                    href="product-details.html">Buy Now</a></button>
                            <a href="#">
                                <p class="font-[jost] text-[16px] font-[600] leading-[30px]">Add to Cart</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- ---------------cart------4th---group--- -->
                <div class='grid grid-cols-4 gap-8 mt-4'>
                    <div class="border-[2px] border-[#380D37] rounded-[6px] py-2 px-4">
                        <img class="object-center"
                            src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                            alt="">
                        <div class='border-t-[1px] border-b-[1px] border-[#380D3733] py-2'>
                            <div class="">
                                <p class="font-[jost] text-[18px] font-[600] leading-[30px] text-left text-[#380D37]">
                                    Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB</p>
                            </div>
                            <div class='mt-2'>
                                <ul class='text-[#353535] list-decimal px-4 text-[16px] leading-[30px]'>
                                    <li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li>
                                    <li>RAM: 8GB DDR5 5500MHz, Storage: 256GB SSD</li>
                                    <li>Display: 15.6" FHD (1920X1080)</li>
                                    <li>Features: Type-C</li>
                                </ul>
                            </div>
                        </div>
                        <div class="my-3 text-center ">
                            <a href="#"
                                class="font-[jost] text-[16px] font-[600] leading-[30px] text-[#DC275C] block">1,50,000
                                TAKA</a>
                            <button class='bg-[#380D37] text-white py-[8px] px-[70px] rounded-[5px] my-[10px]'><a
                                    href="product-details.html">Buy Now</a></button>
                            <a href="#">
                                <p class="font-[jost] text-[16px] font-[600] leading-[30px]">Add to Cart</p>
                            </a>
                        </div>
                    </div>
                    <!-- --------------cart--2----------------- -->
                    <div class="border-[2px] border-[#380D37] rounded-[6px] py-2 px-4">
                        <img class="object-center"
                            src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                            alt="">
                        <div class='border-t-[1px] border-b-[1px] border-[#380D3733] py-2'>
                            <div class="">
                                <p class="font-[jost] text-[18px] font-[600] leading-[30px] text-left text-[#380D37]">
                                    Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB</p>
                            </div>
                            <div class='mt-2'>
                                <ul class='text-[#353535] list-decimal px-4 text-[16px] leading-[30px]'>
                                    <li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li>
                                    <li>RAM: 8GB DDR5 5500MHz, Storage: 256GB SSD</li>
                                    <li>Display: 15.6" FHD (1920X1080)</li>
                                    <li>Features: Type-C</li>
                                </ul>
                            </div>
                        </div>
                        <div class="my-3 text-center ">
                            <a href="#"
                                class="font-[jost] text-[16px] font-[600] leading-[30px] text-[#DC275C] block">1,50,000
                                TAKA</a>
                            <button class='bg-[#380D37] text-white py-[8px] px-[70px] rounded-[5px] my-[10px]'><a
                                    href="product-details.html">Buy Now</a></button>
                            <a href="#">
                                <p class="font-[jost] text-[16px] font-[600] leading-[30px]">Add to Cart</p>
                            </a>
                        </div>
                    </div>
                    <!-- --------------cart--3----------------- -->
                    <div class="border-[2px] border-[#380D37] rounded-[6px] py-2 px-4">
                        <img class="object-center"
                            src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                            alt="">
                        <div class='border-t-[1px] border-b-[1px] border-[#380D3733] py-2'>
                            <div class="">
                                <p class="font-[jost] text-[18px] font-[600] leading-[30px] text-left text-[#380D37]">
                                    Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB</p>
                            </div>
                            <div class='mt-2'>
                                <ul class='text-[#353535] list-decimal px-4 text-[16px] leading-[30px]'>
                                    <li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li>
                                    <li>RAM: 8GB DDR5 5500MHz, Storage: 256GB SSD</li>
                                    <li>Display: 15.6" FHD (1920X1080)</li>
                                    <li>Features: Type-C</li>
                                </ul>
                            </div>
                        </div>
                        <div class="my-3 text-center ">
                            <a href="#"
                                class="font-[jost] text-[16px] font-[600] leading-[30px] text-[#DC275C] block">1,50,000
                                TAKA</a>
                            <button class='bg-[#380D37] text-white py-[8px] px-[70px] rounded-[5px] my-[10px]'><a
                                    href="product-details.html">Buy Now</a></button>
                            <a href="#">
                                <p class="font-[jost] text-[16px] font-[600] leading-[30px]">Add to Cart</p>
                            </a>
                        </div>
                    </div>
                    <!-- --------------cart--4----------------- -->
                    <div class="border-[2px] border-[#380D37] rounded-[6px] py-2 px-4">
                        <img class="object-center"
                            src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                            alt="">
                        <div class='border-t-[1px] border-b-[1px] border-[#380D3733] py-2'>
                            <div class="">
                                <p class="font-[jost] text-[18px] font-[600] leading-[30px] text-left text-[#380D37]">
                                    Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB</p>
                            </div>
                            <div class='mt-2'>
                                <ul class='text-[#353535] list-decimal px-4 text-[16px] leading-[30px]'>
                                    <li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li>
                                    <li>RAM: 8GB DDR5 5500MHz, Storage: 256GB SSD</li>
                                    <li>Display: 15.6" FHD (1920X1080)</li>
                                    <li>Features: Type-C</li>
                                </ul>
                            </div>
                        </div>
                        <div class="my-3 text-center ">
                            <a href="#"
                                class="font-[jost] text-[16px] font-[600] leading-[30px] text-[#DC275C] block">1,50,000
                                TAKA</a>
                            <button class='bg-[#380D37] text-white py-[8px] px-[70px] rounded-[5px] my-[10px]'><a
                                    href="product-details.html">Buy Now</a></button>
                            <a href="#">
                                <p class="font-[jost] text-[16px] font-[600] leading-[30px]">Add to Cart</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- ----cart---group---5th------- -->
                <div class='grid grid-cols-4 gap-8 mt-4'>
                    <div class="border-[2px] border-[#380D37] rounded-[6px] py-2 px-4">
                        <img class="object-center"
                            src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                            alt="">
                        <div class='border-t-[1px] border-b-[1px] border-[#380D3733] py-2'>
                            <div class="">
                                <p class="font-[jost] text-[18px] font-[600] leading-[30px] text-left text-[#380D37]">
                                    Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB</p>
                            </div>
                            <div class='mt-2'>
                                <ul class='text-[#353535] list-decimal px-4 text-[16px] leading-[30px]'>
                                    <li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li>
                                    <li>RAM: 8GB DDR5 5500MHz, Storage: 256GB SSD</li>
                                    <li>Display: 15.6" FHD (1920X1080)</li>
                                    <li>Features: Type-C</li>
                                </ul>
                            </div>
                        </div>
                        <div class="my-3 text-center ">
                            <a href="#"
                                class="font-[jost] text-[16px] font-[600] leading-[30px] text-[#DC275C] block">1,50,000
                                TAKA</a>
                            <button class='bg-[#380D37] text-white py-[8px] px-[70px] rounded-[5px] my-[10px]'><a
                                    href="product-details.html">Buy Now</a></button>
                            <a href="#">
                                <p class="font-[jost] text-[16px] font-[600] leading-[30px]">Add to Cart</p>
                            </a>
                        </div>
                    </div>
                    <!-- --------------cart--2----------------- -->
                    <div class="border-[2px] border-[#380D37] rounded-[6px] py-2 px-4">
                        <img class="object-center"
                            src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                            alt="">
                        <div class='border-t-[1px] border-b-[1px] border-[#380D3733] py-2'>
                            <div class="">
                                <p class="font-[jost] text-[18px] font-[600] leading-[30px] text-left text-[#380D37]">
                                    Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB</p>
                            </div>
                            <div class='mt-2'>
                                <ul class='text-[#353535] list-decimal px-4 text-[16px] leading-[30px]'>
                                    <li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li>
                                    <li>RAM: 8GB DDR5 5500MHz, Storage: 256GB SSD</li>
                                    <li>Display: 15.6" FHD (1920X1080)</li>
                                    <li>Features: Type-C</li>
                                </ul>
                            </div>
                        </div>
                        <div class="my-3 text-center ">
                            <a href="#"
                                class="font-[jost] text-[16px] font-[600] leading-[30px] text-[#DC275C] block">1,50,000
                                TAKA</a>
                            <button class='bg-[#380D37] text-white py-[8px] px-[70px] rounded-[5px] my-[10px]'><a
                                    href="product-details.html">Buy Now</a></button>
                            <a href="#">
                                <p class="font-[jost] text-[16px] font-[600] leading-[30px]">Add to Cart</p>
                            </a>
                        </div>
                    </div>
                    <!-- --------------cart--3----------------- -->
                    <div class="border-[2px] border-[#380D37] rounded-[6px] py-2 px-4">
                        <img class="object-center"
                            src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                            alt="">
                        <div class='border-t-[1px] border-b-[1px] border-[#380D3733] py-2'>
                            <div class="">
                                <p class="font-[jost] text-[18px] font-[600] leading-[30px] text-left text-[#380D37]">
                                    Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB</p>
                            </div>
                            <div class='mt-2'>
                                <ul class='text-[#353535] list-decimal px-4 text-[16px] leading-[30px]'>
                                    <li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li>
                                    <li>RAM: 8GB DDR5 5500MHz, Storage: 256GB SSD</li>
                                    <li>Display: 15.6" FHD (1920X1080)</li>
                                    <li>Features: Type-C</li>
                                </ul>
                            </div>
                        </div>
                        <div class="my-3 text-center ">
                            <a href="#"
                                class="font-[jost] text-[16px] font-[600] leading-[30px] text-[#DC275C] block">1,50,000
                                TAKA</a>
                            <button class='bg-[#380D37] text-white py-[8px] px-[70px] rounded-[5px] my-[10px]'><a
                                    href="product-details.html">Buy Now</a></button>
                            <a href="#">
                                <p class="font-[jost] text-[16px] font-[600] leading-[30px]">Add to Cart</p>
                            </a>
                        </div>
                    </div>
                    <!-- --------------cart--4----------------- -->
                    <div class="border-[2px] border-[#380D37] rounded-[6px] py-2 px-4">
                        <img class="object-center"
                            src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg"
                            alt="">
                        <div class='border-t-[1px] border-b-[1px] border-[#380D3733] py-2'>
                            <div class="">
                                <p class="font-[jost] text-[18px] font-[600] leading-[30px] text-left text-[#380D37]">
                                    Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB</p>
                            </div>
                            <div class='mt-2'>
                                <ul class='text-[#353535] list-decimal px-4 text-[16px] leading-[30px]'>
                                    <li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li>
                                    <li>RAM: 8GB DDR5 5500MHz, Storage: 256GB SSD</li>
                                    <li>Display: 15.6" FHD (1920X1080)</li>
                                    <li>Features: Type-C</li>
                                </ul>
                            </div>
                        </div>
                        <div class="my-3 text-center ">
                            <a href="#"
                                class="font-[jost] text-[16px] font-[600] leading-[30px] text-[#DC275C] block">1,50,000
                                TAKA</a>
                            <button class='bg-[#380D37] text-white py-[8px] px-[70px] rounded-[5px] my-[10px]'><a
                                    href="product-details.html">Buy Now</a></button>
                            <a href="#">
                                <p class="font-[jost] text-[16px] font-[600] leading-[30px]">Add to Cart</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- ----------------cart--part---end---- -->
        <footer class="bg-gradient-to-r from-[#380D37] to-[#DC275C] pt-4 text-white mt-20 h-[450px]">
            <div class="flex justify-evenly">
                <div class="">
                    <p class="text-[#F2F2F2] font-[jost] text-[40px] font-[500] text-left my-3">Address</p>
                    <ul class="text-[#F2F2F2] font-[jost] text-[15px] font-[500] leading-[30px] text-left">
                        <li><a href="#" class="hover:text-gray-300">Address: </a></li>
                        <li><a href="#" class="hover:text-gray-300">Shop # 4A-009A, Block # A, Level #04,</a>
                        </li>
                        <li class="mb-[15px]"><a href="#" class="hover:text-gray-300">Jamuna Future Park,
                                Dhaka -1229</a></li>
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
                        <li class="mb-[25px] list-disc hover:bg-blue-950"><a href="#">Terms& Conditions</a>
                        </li>
                        <li class="mb-[25px] list-disc hover:bg-blue-950"><a href="#">Privay Policy</a></li>
                        <li class="mb-[25px] list-disc hover:bg-blue-950"><a href="#">My account</a></li>
                        <li class="mb-[25px] list-disc hover:bg-blue-950"><a href="#">Refund & Service
                                Policy</a></li>
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
                        <li class="mb-[15px]"><a href="#"
                                class="hover:text-gray-300">info@lappyvalley.com</a></li>
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
