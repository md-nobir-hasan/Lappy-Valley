<div class="[min-width:230px] mt-2">
    <!-- ----price-range------ -->
<div class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] p-4'>
        <div class="flex justify-between">
            <span class='text-[#380D37] font-[jost] font-[600] text-[17px] leading-[25.23px] '
                for="text">Price Range</span>
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
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Up Coming</span>
            </label>
        </div>
    </div>
    <!-- ---------------nav-1st--part--------------- -->
    <div x-data="{ open: true, toggle() { this.open = !this.open } }" class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3 p-4'>
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
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Up Coming</span>
            </label>
        </div>
    </div>
    <!-- --------------------------nav----2nd---part--------------- -->
    <div x-data="{ open: true, toggle() { this.open = !this.open } }" class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3 p-4'>
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
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Asus</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' class='' type="checkbox" name='status'
                    valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>HP</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>DELL</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Lenovo</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Acer</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Apple</span>
            </label>
        </div>
    </div>
    <!-- ------------------nav-3rd--part-------------- -->
    <div x-data="{ open: true, toggle() { this.open = !this.open } }" class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3 p-4'>
        <div class="flex justify-between">
            <span class='text-[#380D37] font-[jost] font-[600] text-[17px] leading-[25.23px] ' for="text">Processor
                Models</span>
            <i @click="toggle()" :class="{ 'rotate-180': !open }"
                class="fa fa-angle-up text-[#000000] text-[16px] cursor-pointer" aria-hidden="true"></i>
        </div>
        <div class="h-[1.5px] bg-[#380D3733] min-w-[114%] ml-[-15px] translate-y-[15px]">
        </div>
        <div x-show="open" class='px-[0px] pt-[20px] pb-[2px]'>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Intel core i3</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' class='' type="checkbox" name='status'
                    valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Intel core i5</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Intel core i7</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Intel core i9</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>AMD Athlon</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>AMD Ryzen 3</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>AMD Ryzen 5</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>AMD Ryzen 7</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>AMD Ryzen 9</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Apple M1</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Apple M1 Pro</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Apple M1 Pro Max</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Apple M2</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Apple M2 Pro</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Apple M2 Pro Max</span>
            </label>
        </div>
    </div>
    <!-- --------------nav-4th---part------------ -->
    <div x-data="{ open: true, toggle() { this.open = !this.open } }" class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3 p-4'>
        <div class="flex justify-between">
            <span class='text-[#380D37] font-[jost] font-[600] text-[17px] leading-[25.23px] '
                for="text">Processor Generations</span>
            <i @click="toggle()" :class="{ 'rotate-180': !open }"
                class="fa fa-angle-up text-[#000000] text-[16px] mt-[4px] cursor-pointer" aria-hidden="true"></i>
        </div>
        <div class="h-[1.5px] bg-[#380D3733] min-w-[114%] ml-[-15px] translate-y-[15px]"></div>
        <div x-show="open" class='px-[0px] pt-[20px] pb-[2px]'>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[116x] text-[#380D37]'>Intel 5th gen</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' class='' type="checkbox" name='status'
                    valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Intel 6th gen</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Intel 7th gen</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Intel 8th gen</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Intel 9th gen</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Intel 10th gen</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Intel 11th gen</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Intel 12th gen</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Intel 13th gen</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>AMD Ryzen 3000
                    series</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>AMD Ryzen 4000
                    series</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>AMD Ryzen 5000
                    series</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>AMD Ryzen 6000
                    series</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>AMD Ryzen 7000
                    series</span>
            </label>
        </div>
    </div>
    <!-- ------------------nav-5th-----part----------- -->
    <div x-data="{ open: true, toggle() { this.open = !this.open } }" class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3 p-4'>
        <div class="flex justify-between">
            <span class='text-[#380D37] font-[jost] font-[600] text-[17px] leading-[25.23px] ' for="text">Display
                Size</span>
            <i @click="toggle()" :class="{ 'rotate-180': !open }"
                class="fa fa-angle-up text-[#000000] text-[16px] cursor-pointer" aria-hidden="true"></i>
        </div>
        <div class="h-[1.5px] bg-[#380D3733] min-w-[114%] ml-[-15px] translate-y-[15px]">
        </div>
        <div x-show="open" class='px-[0px] pt-[20px] pb-[2px]'>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Bellow 13 inch</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' class='' type="checkbox" name='status'
                    valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>13 inch to 13.9
                    inch</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>14 inch to 14.9
                    inch</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>15 inch to 15.9
                    inch</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>16 inch to 16.9
                    inch</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>17 inch to 17.9
                    inch</span>
            </label>
        </div>
    </div>
    <!-- --------------nav-6th---part------------- -->
    <div x-data="{ open: true, toggle() { this.open = !this.open } }" class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3 p-4'>
        <div class="flex justify-between">
            <span class='text-[#380D37] font-[jost] font-[600] text-[17px] leading-[25.23px] ' for="text">Display
                Type</span>
            <i @click="toggle()" :class="{ 'rotate-180': !open }"
                class="fa fa-angle-up text-[#000000] text-[16px] cursor-pointer" aria-hidden="true"></i>
        </div>
        <div class="h-[1.5px] bg-[#380D3733] min-w-[114%] ml-[-15px] translate-y-[15px]">
        </div>
        <div x-show="open" class='px-[0px] pt-[20px] pb-[2px]'>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>LED</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' class='' type="checkbox" name='status'
                    valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>OLED</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>14 inch to 14.9
                    inch</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>15 inch to 15.9
                    inch</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>16 inch to 16.9
                    inch</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>17 inch to 17.9
                    inch</span>
            </label>
        </div>
    </div>
    <!-- ---------------nav--7th--part------------------ -->
    <div x-data="{ open: true, toggle() { this.open = !this.open } }" class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3 p-4'>
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
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>4 GB</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' class='' type="checkbox" name='status'
                    valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>8 GB</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>16 GB</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>32 GB</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>64 GB</span>
            </label>
        </div>
    </div>
    <!-- --------------nav---8th--part------------------- -->
    <div x-data="{ open: true, toggle() { this.open = !this.open } }" class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3 p-4'>
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
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>1 TB</span>
            </label>
        </div>
    </div>
    <!-- ---------------nav--9th---part---------------- -->
    <div x-data="{ open: true, toggle() { this.open = !this.open } }" class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3 p-4'>
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
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>128 GB</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' class='' type="checkbox" name='status'
                    valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>256 GB</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>512 GB</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>1 TB</span>
            </label>
        </div>
    </div>
    <!-- -------------nav-10th-------part------------------ -->
    <div x-data="{ open: true, toggle() { this.open = !this.open } }" class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3 p-4'>
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
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Integrated/Shared</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' class='' type="checkbox" name='status'
                    valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Dedicated 2GB</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Dedicated 4GB</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Dedicated 6GB</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Dedicated 8GB</span>
            </label>
        </div>
    </div>
    <!-- -----------------nav----11th---part----------------- -->
    <div x-data="{ open: true, toggle() { this.open = !this.open } }" class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3 p-4'>
        <div class="flex justify-between">
            <span class='text-[#380D37] font-[jost] font-[600] text-[17px] leading-[25.23px] ' for="text">Special
                Features</span>
            <i @click="toggle()" :class="{ 'rotate-180': !open }"
                class="fa fa-angle-up text-[#000000] text-[16px] cursor-pointer" aria-hidden="true"></i>
        </div>
        <div class="h-[1.5px] bg-[#380D3733] min-w-[114%] ml-[-15px] translate-y-[15px]">
        </div>
        <div x-show="open" class='px-[0px] pt-[20px] pb-[2px]'>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Backlit Keyboard</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' class='' type="checkbox" name='status'
                    valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Finger Print</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>360 Degree</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Touch Screen</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Touch Screen</span>
            </label>
            <label class='block' for="#">
                <input class='border-[2px] border-[#764A87]' type="checkbox" name='status' valu='7'>
                <span class='font-[jost] text-[16px] leading-[30px] text-[#380D37]'>Type-C Port</span>
            </label>
        </div>
    </div>
</div>
