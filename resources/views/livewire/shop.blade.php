<div>
    <style>
        ::selection {
            color: #fff;
            background: #17A2B8;
        }

        .wrapper {
            width: 230px;
            background: #f2f2f2;
            border-radius: 10px;
        }

        .price-input {
            display: flex;
            margin-top: 10px;
            gap: 10px;
            justify-content: center;
        }

        .price-input .field {
            display: flex;
            height: 40px;
        }

        .field input {
            width: 62px;
            height: 30px;
            outline: none;
            font-size: 14px;
            color: #380D37;
            /* margin-left: 12px; */
            border-radius: 5px;
            text-align: center;
            border: 1px solid #380D37;
            background-color: #FFFFFF;
            -moz-appearance: textfield;
        }

        input[type="number"]::-webkit-outer-spin-button,
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
        }


        .slider {
            height: 5px;
            position: relative;
            background: #FFFFFF;
            border-radius: 5px;
        }

        .slider .progress {
            height: 100%;
            left: 0%;
            right: 0%;
            position: absolute;
            border-radius: 5px;
            background: #380D37;
        }

        .range-input {
            position: relative;
        }

        .range-input input {
            position: absolute;
            width: 100%;
            height: 5px;
            top: -5px;
            background: none;
            pointer-events: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }

        input[type="range"]::-webkit-slider-thumb {
            height: 14px;
            width: 14px;
            border-radius: 50%;
            border: 2px solid #380D37;
            background: #380D37;
            pointer-events: auto;
            -webkit-appearance: none;
            box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);
        }

        input[type="range"]::-moz-range-thumb {
            height: 14px;
            width: 14px;
            border: 2px solid #380D37;
            border-radius: 50%;
            border: ;
            background: #380D37;
            pointer-events: auto;
            -moz-appearance: none;
            box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);
        }
    </style>
    <div class='container mx-auto'>
        <h1 class='font-[jost] text-[16px] font-[400] leading-[23.12px] tracking-[3%] text-[#353535]'>All Categories/
            Pre-Owned</h1>
        <div class='h-[2px] bg-[#764A8733]'></div>
    </div>
    <!-- Sidenav -->
    <div class="container mx-auto mt-4">
        <div class="flex gap-8" x-data="{
            minPrice: 0,
            maxPrice: 500000,
            pre_order: true,
            in_stock: true,
            upcomming: true,
            brands: '',
            productFetch(){
                console.log(4);
                console.log(this.brands);
                {{-- console.log(this.pre_order);
                console.log(this.upcomming); --}}
            }
        }">
            <!-- ------------right---part--start--- -->
            <div class="w-[230px]">

                <!-- ----price-range------ -->
                <div class="wrapper flex flex-col shadow-[0_2px_4px_rgba(0,0,0,.1)] pb-[10px]">
                    <header class="py-4 px-2">
                        <h2 class="font-[jost] font-[600] text-[14px] text-[#380D37]">Price Range</h2>
                        {{-- <p>Use slider or enter min and max price</p> --}}
                    </header>
                    <div class="h-[1px] bg-[#380D3733] w-full"></div>
                    <div class="mb-[20px] mt-[30px] p-[10px]">
                        <div class="slider">
                            <div class="progress"></div>
                        </div>
                        <div class="range-input">
                            <input x-model='minPrice' @change='productFetch' :value="minPrice" type="range"
                                class="range-min w-[85px]" min="0" max="490000" step="100">
                            <input x-model='maxPrice' :value="maxPrice" @change='productFetch' type="range"
                                class="range-max w-[85px]" min="10000" max="500000" step="100">
                        </div>
                    </div>

                    <div class="price-input">
                        <div class="field">
                            {{-- <span>Min</span> --}}
                            <input x-model='minPrice' type="number" @change='productFetch' class="input-min"
                                step="1" :value="minPrice">
                        </div>
                        {{-- <div class="separator">-</div> --}}
                        <div class="field">
                            {{-- <span>Max</span> --}}
                            <input x-model='maxPrice' type="number" @change='productFetch' class="input-max"
                                step="1" :value="maxPrice">
                        </div>
                    </div>
                </div>

                <!-- ---------------nav-1st--part (Availability)--------------- -->
                <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                    class='bg-[#F2F2F2]  shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
                    <div class="flex justify-between p-[12px]">
                        <span class='text-[#380D37] font-[jost] font-[600] text-[14px] leading-[25.23px] '
                            for="text">Availability</span>
                        <img src="/storage/product/down-arrow.svg" @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="text-[#000000] text-[14px] cursor-pointer w-[20px]" aria-hidden="true">
                    </div>
                    <div class="h-[1.5px] bg-[#380D3733] w-full">
                    </div>
                    <div x-show="open" class='p-[12px]'>
                        <label class='block' for="#">
                            <input id="in_stock" x-model='in_stock' @change='productFetch'
                                class='border-[2px] border-[#764A87]' type="checkbox" name='status'>
                            <label for="in_stock" class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>In
                                Stock</label>
                        </label>
                        <label class='block' for="#">
                            <input id="pre_order" x-model='pre_order' @change='productFetch'
                                class='border-[2px] border-[#764A87]' type="checkbox" name='status'>
                            <label for='pre_order' class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>Pre
                                Order</label>
                        </label>
                        <label class='block' for="#">
                            <input id="upcomming" x-model='upcomming' @change='productFetch'
                                class='border-[2px] border-[#764A87]' type="checkbox" name='status'>
                            <label for="upcomming" class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>Up
                                Coming</label>
                        </label>
                    </div>
                </div>

                <!-- --------------------------nav----2nd---part (Brands)--------------- -->
                <div x-data="{ open: true, toggle() { this.open = !this.open } }" class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
                    <div class="flex justify-between p-[12px]">
                        <span class='text-[#380D37] font-[jost] font-[600] text-[14px] leading-[25.23px] '
                            for="text">Brands</span>
                        <img src="/storage/product/down-arrow.svg" @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="text-[#000000] text-[14px] cursor-pointer w-[20px]" aria-hidden="true">
                    </div>
                    <div class="h-[1px] bg-[#380D3733] w-full">
                    </div>
                    <div x-show="open" class='p-[12px]'>
                        @foreach ($brands as $brand)
                            <span class='block'>
                                <input id="brand{{ $brand->id }}" value="{{ $brand->id }}"
                                    class='border-[2px] border-[#764A87]' type="checkbox" x-model='brands'
                                    @change='productFetch'>
                                <label for="brand{{ $brand->id }}"
                                    class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>{{ $brand->title }}

                                </label>
                            </span>
                        @endforeach
                    </div>
                </div>
                <!-- ------------------nav-3rd--part-------------- -->
                <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                    class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
                    <div class="flex justify-between p-[12px]">
                        <span class='text-[#380D37] font-[jost] font-[600] text-[14px] leading-[25.23px] '
                            for="text">Processor
                            Models</span>
                        <img src="/storage/product/down-arrow.svg" @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="text-[#000000] text-[14px] cursor-pointer w-[20px]" aria-hidden="true">
                    </div>
                    <div class="h-[1px] bg-[#380D3733] w-full">
                    </div>
                    <div x-show="open" class='p-[12px]'>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>Intel core i3</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' class='' type="checkbox"
                                name='status' valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>Intel core i5</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>Intel core i7</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>Intel core i9</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>AMD Athlon</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>AMD Ryzen 3</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>AMD Ryzen 5</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>AMD Ryzen 7</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>AMD Ryzen 9</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>Apple M1</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>Apple M1 Pro</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>Apple M1 Pro
                                Max</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>Apple M2</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>Apple M2 Pro</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>Apple M2 Pro
                                Max</span>
                        </label>
                    </div>
                </div>
                <!-- --------------nav-4th---part------------ -->
                <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                    class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
                    <div class="flex justify-between p-[12px]">
                        <span class='text-[#380D37] font-[jost] font-[600] text-[14px] leading-[25.23px] '
                            for="text">Processor Generations</span>
                        <img src="/storage/product/down-arrow.svg" @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="text-[#000000] text-[14px] cursor-pointer w-[20px]" aria-hidden="true">
                    </div>
                    <div class="h-[1px] bg-[#380D3733] w-full"></div>
                    <div x-show="open" class='p-[12px]'>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] text-[#380D37]'>Intel 5th gen</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' class='' type="checkbox"
                                name='status' valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>Intel 6th gen</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>Intel 7th gen</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>Intel 8th gen</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>Intel 9th gen</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>Intel 10th
                                gen</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>Intel 11th
                                gen</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>Intel 12th
                                gen</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>Intel 13th
                                gen</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>AMD Ryzen 3000
                                series</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>AMD Ryzen 4000
                                series</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>AMD Ryzen 5000
                                series</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>AMD Ryzen 6000
                                series</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>AMD Ryzen 7000
                                series</span>
                        </label>
                    </div>
                </div>
                <!-- ------------------nav-5th-----part----------- -->
                <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                    class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
                    <div class="flex justify-between p-[12px]">
                        <span class='text-[#380D37] font-[jost] font-[600] text-[14px] leading-[25.23px] '
                            for="text">Display
                            Size</span>
                        <img src="/storage/product/down-arrow.svg" @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="text-[#000000] text-[14px] cursor-pointer w-[20px]" aria-hidden="true">
                    </div>
                    <div class="h-[1px] bg-[#380D3733] w-full">
                    </div>
                    <div x-show="open" class='p-[12px]'>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>Bellow 13
                                inch</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' class='' type="checkbox"
                                name='status' valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>13 inch to 13.9
                                inch</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>14 inch to 14.9
                                inch</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>15 inch to 15.9
                                inch</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>16 inch to 16.9
                                inch</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>17 inch to 17.9
                                inch</span>
                        </label>
                    </div>
                </div>
                <!-- --------------nav-6th---part------------- -->
                <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                    class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
                    <div class="flex justify-between p-[12px]">
                        <span class='text-[#380D37] font-[jost] font-[600] text-[14px] leading-[25.23px] '
                            for="text">Display
                            Type</span>
                        <img src="/storage/product/down-arrow.svg" @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="text-[#000000] text-[14px] cursor-pointer w-[20px]" aria-hidden="true">
                    </div>
                    <div class="h-[1px] bg-[#380D3733] w-full">
                    </div>
                    <div x-show="open" class='p-[12px]'>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>LED</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' class='' type="checkbox"
                                name='status' valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>OLED</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>14 inch to 14.9
                                inch</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>15 inch to 15.9
                                inch</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>16 inch to 16.9
                                inch</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>17 inch to 17.9
                                inch</span>
                        </label>
                    </div>
                </div>
                <!-- ---------------nav--7th--part------------------ -->
                <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                    class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
                    <div class="flex justify-between p-[12px]">
                        <span class='text-[#380D37] font-[jost] font-[600] text-[14px] leading-[25.23px] '
                            for="text">RAM</span>
                        <img src="/storage/product/down-arrow.svg" @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="text-[#000000] text-[14px] cursor-pointer w-[20px]" aria-hidden="true">
                    </div>
                    <div class="h-[1px] bg-[#380D3733] w-full">
                    </div>
                    <div x-show="open" class='p-[12px]'>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>4 GB</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' class='' type="checkbox"
                                name='status' valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>8 GB</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>16 GB</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>32 GB</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>64 GB</span>
                        </label>
                    </div>
                </div>
                <!-- --------------nav---8th--part------------------- -->
                <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                    class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
                    <div class="flex justify-between p-[12px]">
                        <span class='text-[#380D37] font-[jost] font-[600] text-[14px] leading-[25.23px] '
                            for="text">HDD</span>
                        <img src="/storage/product/down-arrow.svg" @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="text-[#000000] text-[14px] w-[20px] cursor-pointer">
                    </div>
                    <div class="h-[1px] bg-[#380D3733] w-full">
                    </div>
                    <div x-show="open" class='p-[12px]'>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>1 TB</span>
                        </label>
                    </div>
                </div>
                <!-- ---------------nav--9th---part---------------- -->
                <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                    class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
                    <div class="flex justify-between p-[12px]">
                        <span class='text-[#380D37] font-[jost] font-[600] text-[14px] leading-[25.23px] '
                            for="text">SSD</span>
                        <img src="/storage/product/down-arrow.svg" @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="text-[#000000] text-[14px] cursor-pointer w-[20px]" aria-hidden="true">
                    </div>
                    <div class="h-[1px] bg-[#380D3733] w-full">
                    </div>
                    <div x-show="open" class='p-[12px]'>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>128 GB</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' class='' type="checkbox"
                                name='status' valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>256 GB</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>512 GB</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>1 TB</span>
                        </label>
                    </div>
                </div>
                <!-- -------------nav-10th-------part------------------ -->
                <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                    class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
                    <div class="flex justify-between p-[12px]">
                        <span class='text-[#380D37] font-[jost] font-[600] text-[14px] leading-[25.23px] '
                            for="text">Graphics</span>
                        <img src="/storage/product/down-arrow.svg" @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="text-[#000000] text-[14px] cursor-pointer w-[20px]" aria-hidden="true">
                    </div>
                    <div class="h-[1px] bg-[#380D3733] w-full">
                    </div>
                    <div x-show="open" class='p-[12px]'>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span
                                class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>Integrated/Shared</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' class='' type="checkbox"
                                name='status' valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>Dedicated 2GB</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>Dedicated 4GB</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>Dedicated 6GB</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>Dedicated 8GB</span>
                        </label>
                    </div>
                </div>
                <!-- -----------------nav----11th---part----------------- -->
                <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                    class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
                    <div class="flex justify-between p-[12px]">
                        <span class='text-[#380D37] font-[jost] font-[600] text-[14px] leading-[25.23px] '
                            for="text">Special
                            Features</span>
                        <img src="/storage/product/down-arrow.svg" @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="text-[#000000] text-[14px] cursor-pointer w-[20px]" aria-hidden="true">
                    </div>
                    <div class="h-[1px] bg-[#380D3733] w-full">
                    </div>
                    <div x-show="open" class='p-[12px]'>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>Backlit
                                Keyboard</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' class='' type="checkbox"
                                name='status' valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>Finger Print</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>360 Degree</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>Touch Screen</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>Touch Screen</span>
                        </label>
                        <label class='block' for="#">
                            <input class='border-[2px] border-[#764A87]' type="checkbox" name='status'
                                valu='7'>
                            <span class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>Type-C Port</span>
                        </label>
                    </div>
                </div>
                <script>
                    const rangeInput = document.querySelectorAll(".range-input input"),
                        priceInput = document.querySelectorAll(".price-input input"),
                        range = document.querySelector(".slider .progress");
                    let priceGap = 1000;

                    priceInput.forEach(input => {
                        input.addEventListener("input", e => {
                            let minPrice = parseInt(priceInput[0].value),
                                maxPrice = parseInt(priceInput[1].value);

                            if ((maxPrice - minPrice >= priceGap) && maxPrice <= rangeInput[1].max) {
                                if (e.target.className === "input-min") {
                                    rangeInput[0].value = minPrice;
                                    range.style.left = ((minPrice / rangeInput[0].max) * 100) + "%";
                                } else {
                                    rangeInput[1].value = maxPrice;
                                    range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
                                }
                            }
                        });
                    });

                    rangeInput.forEach(input => {
                        input.addEventListener("input", e => {
                            let minVal = parseInt(rangeInput[0].value),
                                maxVal = parseInt(rangeInput[1].value);

                            if ((maxVal - minVal) < priceGap) {
                                if (e.target.className === "range-min") {
                                    rangeInput[0].value = maxVal - priceGap
                                } else {
                                    rangeInput[1].value = minVal + priceGap;
                                }
                            } else {
                                priceInput[0].value = minVal;
                                priceInput[1].value = maxVal;
                                range.style.left = ((minVal / rangeInput[0].max) * 100) + "%";
                                range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
                            }
                        });
                    });
                </script>
            </div>

            {{-- <livewire:side-nav/> --}}
            <div class="w-full mx-auto">
                <livewire:menu-nav />
                <!-- ------cart--group----1st--part--- -->
                <div class='mt-4 grid grid-cols-4 gap-8 mx-auto' id="product_pdiv">
                    @foreach ($products as $product)
                        <x-shop-product :product="$product">
                            <div class='mt-2'>
                                <ul class='text-[#353535] list-decimal px-4 text-[10px] leading-[20px]'>
                                    <li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li>
                                    <li>RAM: 8GB DDR5 5500MHz, Storage: 256GB SSD</li>
                                    <li>Display: 15.6" FHD (1920X1080)</li>
                                    <li>Features: Type-C</li>
                                </ul>
                            </div>
                        </x-shop-product>
                    @endforeach
                </div>
                <div class="mt-8">
                    {{ $products->links('vendor.pagination.tailwind') }}
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#column').on('click', function() {
            $('#product_pdiv').removeClass('grid-cols-4 gap-8');
            $('#product_pdiv').addClass('grid-cols-1  max-w-2xl');
        })
        $('#grid').on('click', function() {
            $('#product_pdiv').removeClass('grid-cols-1  max-w-2xl');
            $('#product_pdiv').addClass('grid-cols-4 gap-8');
        })
    </script>
</div>
