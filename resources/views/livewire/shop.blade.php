<div
    class="px-[100px] max-2xl:px-[70px] max-xl:px-[60px] max-lg:px-[38px] max-md:px-[35px] max-sm:px-[15px] max-sm:mt-[70px] max-xl:mt-[100px]">
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
            margin-bottom: 0px !important;
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

        /* Menu Icon and Close Icon Styles */
        #menu-icon,
        #close-icon {
            cursor: pointer;
        }

        /* Menu Styles */
        #menu {
            position: fixed;
            top: 66px;
            right: -206px;
            /* Start off-screen */
            width: 206px;
            height: 100%;
            z-index: 2;
            transition: right 0.3s ease;
            /* overflow-y: auto; */
            /* background:#f2f2f2; */
            /* Animation transition */
        }

        @media(max-width:640px) {
            #menu {
                top: 50px;
            }
        }

        /* Overlay for body background blur */
        #body-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            backdrop-filter: blur(8px);
            /* Apply blur effect to the body background */
            z-index: 1;
            display: none;
            overflow-block:
        }

        .noscroll {
            overflow: hidden;
        }
    </style>
    <div class=''>
        <h1 class='font-[jost] text-[16px] font-[400] leading-[23.12px] tracking-[3%] text-[#353535]'>
            <a href="{{route('home')}}" wire:navigate>Home</a> / Shop /
            @isset($cat, $subcat)
                {{ Str::of($cat)->headline() }}
                @isset($subcat)
                    /
                    {{ Str::of(Str::of($subcat)->afterLast('-'))->upper() }}
                @endisset
            @else
                All Categories
            @endisset
        </h1>
        <div class='h-[1px] bg-[#764A8733]'></div>
    </div>


    <div class="mt-4">
        <div class="grid grid-cols-5 gap-8  max-xl:grid-cols-4 max-lg:grid-cols-3 max-md:grid-cols-2 max-sm:grid-cols-1"
            x-data="{
                cat: '{{ isset($cat) ? $cat : '' }}',
                subcat: '{{ isset($subcat) ? $subcat : '' }}',
                products: '',
                minPrice: 0,
                maxPrice: 500000,
                pre_order: '',
                in_stock: '',
                upcomming: '',
                brands: [],
                pmodels: [],
                pgenerations: [],
                d_sizes: [],
                d_types: [],
                rams: [],
                ssds: [],
                hdds: [],
                graphics: [],
                s_features: [],
                sorting: '',
                ajaxProduct: false,
                productShow: true,
                page_num: 0,
                total_product: 0,
                pagi_products: 1,
                show_from: 1,
                show_to: 20,
                current_page: 1,
                productFetch() {
                    console.log(this.cat, this.subcat)
                    $.ajax({
                        type: 'get',
                        url: '{{ route('shop.shorting') }}',
                        data: {
                            cat: this.cat,
                            subcat: this.subcat,
                            minPrice: this.minPrice,
                            maxPrice: this.maxPrice,
                            pre_order: this.pre_order == true ? 1 : 0,
                            in_stock: this.in_stock == true ? 1 : 0,
                            upcomming: this.upcomming == true ? 1 : 0,
                            brands: this.brands,
                            pmodels: this.pmodels,
                            pgenerations: this.pgenerations,
                            d_sizes: this.d_sizes,
                            d_types: this.d_types,
                            rams: this.rams,
                            ssds: this.ssds,
                            hdds: this.hdds,
                            graphics: this.graphics,
                            s_features: this.s_features,
                            sorting: this.sorting,
                        },

                        success: (res) => {
                            this.products = res.product;
                            total_product = Object.keys(res.product).length;
                            if (total_product < 21) {
                                this.pagi_products = res.product;
                                this.show_to = total_product;
                            } else {
                                this.pagi_products = Object.fromEntries(Object.entries(res.product).slice(0, 20));
                            }
                            this.total_product = total_product
                            this.page_num = Math.ceil(total_product / 20);
                            this.productShow = false;
                            this.ajaxProduct = true;
                            this.pageChange(1);

                        }
                    })
                },
                pageChange(pNum) {

                    if (pNum == this.current_page || pNum > this.page_num || pNum < 1) {
                        return false;
                    } else {
                        let to = pNum * 20;
                        let from = to - 20;
                        if (to > this.total_product) {
                            to = Number(this.total_product)
                        }
                        this.show_from = from + 1;
                        this.show_to = to;
                        this.pagi_products = Object.fromEntries(Object.entries(this.products).slice(from, to));
                        this.current_page = pNum
                    }
                }
            }">
            <!-- ------------right---part--start--- -->
            <div class="col-span-1 max-xl:hidden">
                <!-- ----price-range------ -->
                <div class=" w-full bg-[#F2F2F2] flex flex-col gap-2 shadow-[0_2px_4px_rgba(0,0,0,.1)] pb-[10px]">
                    <header class="flex px-2 pt-4 pb-2">
                        <h2 class="font-[jost] font-[500] text-[12px] text-[#380D37]">Price Range</h2>
                        {{-- <p>Use slider or enter min and max price</p> --}}
                    </header>
                    <div class="h-[1px] bg-[#380D3733] w-full"></div>
                    <div class="mb-[10px] mt-[15px] p-[5px]">
                        <div class="slider">
                            <div class="progress"></div>
                        </div>
                        <div class="range-input">
                            <input x-model='minPrice' @change='productFetch' :value="minPrice" type="range"
                                class="range-min w-[85px] font-[jost] font-[500] text-[12px]" min="0"
                                max="490000" step="100">
                            <input x-model='maxPrice' :value="maxPrice" @change='productFetch' type="range"
                                class="range-max w-[85px] font-[jost] font-[500] text-[12px]" min="10000"
                                max="500000" step="100">
                        </div>
                    </div>

                    <div class="price-input">
                        <div class="field">
                            {{-- <span>Min</span> --}}
                            <input x-model='minPrice' type="number" @change='productFetch'
                                class="input-min font-[jost] font-[500] text-[12px]" step="1"
                                :value="minPrice">
                        </div>
                        {{-- <div class="separator">-</div> --}}
                        <div class="field">
                            {{-- <span>Max</span> --}}
                            <input x-model='maxPrice' type="number" @change='productFetch'
                                class="input-max font-[jost] font-[500] text-[12px]" step="1"
                                :value="maxPrice">
                        </div>
                    </div>
                </div>

                <!-- ---------------nav-1st--part (Availability)--------------- -->
                <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                    class='bg-[#F2F2F2]  shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
                    <div class="flex justify-between p-[12px]">
                        <span class='text-[#380D37] font-[jost] font-[500] text-[12px] leading-[25.23px] '
                            for="text">Availability</span>
                        <img src="/storage/product/down-arrow.svg" @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="text-[#000000] text-[14px] cursor-pointer w-[20px]" aria-hidden="true">
                    </div>
                    <div class="h-[1.5px] bg-[#380D3733] w-full">
                    </div>
                    <div x-show="open" class='p-[12px] flex flex-col gap-2'>
                        <label class='flex items-center gap-[4px]' for="#">
                            <input id="in_stock" x-model='in_stock' @change='productFetch'
                                class='border-[1px] border-[#764A87] bg-[#f2f2f2] w-[11px] h-[12px]' type="checkbox"
                                name='status'>
                            <label for="in_stock" class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>In
                                Stock</label>
                        </label>
                        <label class='flex items-center gap-[4px]' for="#">
                            <input id="pre_order" x-model='pre_order' @change='productFetch'
                                class='border-[1px] border-[#764A87] bg-[#f2f2f2] w-[11px] h-[12px]' type="checkbox"
                                name='status'>
                            <label for='pre_order'
                                class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37] text-center'>Pre
                                Order</label>
                        </label>
                        <label class='flex items-center gap-[4px]' for="#">
                            <input id="upcomming" x-model='upcomming' @change='productFetch'
                                class='border-[1px] border-[#764A87] bg-[#f2f2f2] w-[11px] h-[12px]' type="checkbox"
                                name='status'>
                            <label for="upcomming" class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>Up
                                Coming</label>
                        </label>
                    </div>
                </div>

                <!-- --------------------------nav----2nd---part (Brands)--------------- -->
                @if (!$subcat && !$cat)
                    <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                        class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
                        <div class="flex justify-between p-[12px]">
                            <span class='text-[#380D37] font-[jost] font-[500] text-[12px] leading-[25.23px] '
                                for="text">Brands</span>
                            <img src="/storage/product/down-arrow.svg" @click="toggle()"
                                :class="{ 'rotate-180': !open }"
                                class="text-[#000000] text-[14px] cursor-pointer w-[20px]" aria-hidden="true">
                        </div>
                        <div class="h-[1px] bg-[#380D3733] w-full">
                        </div>
                        <div x-show="open" class='p-[12px] flex flex-col gap-2'>
                            @foreach ($brands as $brand)
                                <span class='flex items-center gap-[4px]'>
                                    <input id="brand{{ $brand->id }}" value="{{ $brand->id }}"
                                        class='border-[1px] border-[#380D37] bg-[#f2f2f2] w-[11px] h-[12px]'
                                        type="checkbox" x-model='brands' @change='productFetch'>
                                    <label for="brand{{ $brand->id }}"
                                        class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>{{ $brand->title }}

                                    </label>
                                </span>
                            @endforeach
                        </div>
                    </div>
                @endif
                <!-- ------------------nav-3rd--part (Processor Models)-------------- -->
                <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                    class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
                    <div class="flex justify-between p-[12px]">
                        <span class='text-[#380D37] font-[jost] font-[500] text-[12px] leading-[25.23px] '
                            for="text">Processor
                            Models</span>
                        <img src="/storage/product/down-arrow.svg" @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="text-[#000000] text-[14px] cursor-pointer w-[20px]" aria-hidden="true">
                    </div>
                    <div class="h-[1px] bg-[#380D3733] w-full">
                    </div>
                    <div x-show="open" class='p-[12px] flex flex-col gap-2'>
                        @foreach ($p_models as $pmodel)
                            <span class='flex items-center gap-[4px]'>
                                <input id="pmodel{{ $pmodel->id }}" value="{{ $pmodel->id }}"
                                    class='border-[1px] border-[#380D37] bg-[#f2f2f2] w-[11px] h-[12px]'
                                    type="checkbox" x-model='pmodels' @change='productFetch'>
                                <label for="pmodel{{ $pmodel->id }}"
                                    class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>{{ $pmodel->name }}
                                </label>
                            </span>
                        @endforeach
                    </div>
                </div>

                <!-- --------------nav-4th---part (Processor Generation)------------ -->
                <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                    class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
                    <div class="flex justify-between p-[12px]">
                        <span class='text-[#380D37] font-[jost] font-[500] text-[12px] leading-[25.23px] '
                            for="text">Processor Generations</span>
                        <img src="/storage/product/down-arrow.svg" @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="text-[#000000] text-[14px] cursor-pointer w-[20px]" aria-hidden="true">
                    </div>
                    <div class="h-[1px] bg-[#380D3733] w-full"></div>
                    <div x-show="open" class='p-[12px] flex flex-col gap-2'>
                        @foreach ($p_generations as $pgeneration)
                            <span class='flex items-center gap-[4px]'>
                                <input id="pgeneration{{ $pgeneration->id }}" value="{{ $pgeneration->id }}"
                                    class='border-[1px] border-[#380D37] bg-[#f2f2f2] w-[11px] h-[12px]'
                                    type="checkbox" x-model='pgenerations' @change='productFetch'>
                                <label for="pgeneration{{ $pgeneration->id }}"
                                    class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>{{ $pgeneration->name }}
                                </label>
                            </span>
                        @endforeach
                    </div>
                </div>

                <!-- ------------------nav-5th-----part (Display Sizes) ----------- -->
                <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                    class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
                    <div class="flex justify-between p-[12px]">
                        <span class='text-[#380D37] font-[jost] font-[500] text-[12px] leading-[25.23px] '
                            for="text">Display
                            Size</span>
                        <img src="/storage/product/down-arrow.svg" @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="text-[#000000] text-[14px] cursor-pointer w-[20px]" aria-hidden="true">
                    </div>
                    <div class="h-[1px] bg-[#380D3733] w-full">
                    </div>
                    <div x-show="open" class='p-[12px] flex flex-col gap-2'>
                        @foreach ($d_sizes as $d_size)
                            <span class='flex items-center gap-[4px]'>
                                <input id="d_size{{ $d_size->id }}" value="{{ $d_size->id }}"
                                    class='border-[1px] border-[#380D37] bg-[#f2f2f2] w-[11px] h-[12px]'
                                    type="checkbox" x-model='d_sizes' @change='productFetch'>
                                <label for="d_size{{ $d_size->id }}"
                                    class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>{{ $d_size->size - 0.4 . ' to ' . $d_size->size + 0.4 }}
                                    inch
                                </label>
                            </span>
                        @endforeach
                    </div>
                </div>

                <!-- --------------nav-6th---part (Display Types)------------- -->
                <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                    class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
                    <div class="flex justify-between p-[12px]">
                        <span class='text-[#380D37] font-[jost] font-[500] text-[12px] leading-[25.23px] '
                            for="text">Display
                            Type</span>
                        <img src="/storage/product/down-arrow.svg" @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="text-[#000000] text-[14px] cursor-pointer w-[20px]" aria-hidden="true">
                    </div>
                    <div class="h-[1px] bg-[#380D3733] w-full">
                    </div>
                    <div x-show="open" class='p-[12px] flex flex-col gap-2'>
                        @foreach ($d_types as $d_type)
                            <span class='flex items-center gap-[4px]'>
                                <input id="d_type{{ $d_type->id }}" value="{{ $d_type->id }}"
                                    class='border-[1px] border-[#380D37] bg-[#f2f2f2] w-[11px] h-[12px]'
                                    type="checkbox" x-model='d_types' @change='productFetch'>
                                <label for="d_type{{ $d_type->id }}"
                                    class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>{{ $d_type->name }}
                                </label>
                            </span>
                        @endforeach
                    </div>
                </div>

                <!-- ---------------nav--7th--part (RAMs) ------------------ -->
                <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                    class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
                    <div class="flex justify-between p-[12px]">
                        <span class='text-[#380D37] font-[jost] font-[500] text-[12px] leading-[25.23px] '
                            for="text">RAM</span>
                        <img src="/storage/product/down-arrow.svg" @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="text-[#000000] text-[14px] cursor-pointer w-[20px]" aria-hidden="true">
                    </div>
                    <div class="h-[1px] bg-[#380D3733] w-full">
                    </div>
                    <div x-show="open" class='p-[12px] flex flex-col gap-2'>
                        @foreach ($rams as $ram)
                            <span class='flex items-center gap-[4px]'>
                                <input id="ram{{ $ram->id }}" value="{{ $ram->id }}"
                                    class='border-[1px] border-[#380D37] bg-[#f2f2f2] w-[11px] h-[12px]'
                                    type="checkbox" x-model='rams' @change='productFetch'>
                                <label for="ram{{ $ram->id }}"
                                    class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>{{ $ram->ram }}
                                    GB
                                </label>
                            </span>
                        @endforeach
                    </div>
                </div>

                <!-- --------------nav---8th--part (HDDs) ------------------- -->
                <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                    class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
                    <div class="flex justify-between p-[12px]">
                        <span class='text-[#380D37] font-[jost] font-[500] text-[12px] leading-[25.23px] '
                            for="text">HDD</span>
                        <img src="/storage/product/down-arrow.svg" @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="text-[#000000] text-[14px] w-[20px] cursor-pointer">
                    </div>
                    <div class="h-[1px] bg-[#380D3733] w-full">
                    </div>
                    <div x-show="open" class='p-[12px] flex flex-col gap-2'>
                        @foreach ($hdds as $hdd)
                            <span class='flex items-center gap-[4px]'>
                                <input id="hdd{{ $hdd->id }}" value="{{ $hdd->id }}"
                                    class='border-[1px] border-[#380D37] bg-[#f2f2f2] w-[11px] h-[12px]'
                                    type="checkbox" x-model='hdds' @change='productFetch'>
                                <label for="hdd{{ $hdd->id }}"
                                    class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>{{ $hdd->name }}
                                </label>
                            </span>
                        @endforeach
                    </div>
                </div>

                <!-- ---------------nav--9th---part (SSDs)---------------- -->
                <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                    class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
                    <div class="flex justify-between p-[12px]">
                        <span class='text-[#380D37] font-[jost] font-[500] text-[12px] leading-[25.23px] '
                            for="text">SSD</span>
                        <img src="/storage/product/down-arrow.svg" @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="text-[#000000] text-[14px] cursor-pointer w-[20px]" aria-hidden="true">
                    </div>
                    <div class="h-[1px] bg-[#380D3733] w-full">
                    </div>
                    <div x-show="open" class='p-[12px] flex flex-col gap-2'>
                        @foreach ($ssds as $ssd)
                            <span class='flex items-center gap-[4px]'>
                                <input id="ssd{{ $ssd->id }}" value="{{ $ssd->id }}"
                                    class='border-[1px] border-[#380D37] bg-[#f2f2f2] w-[11px] h-[12px]'
                                    type="checkbox" x-model='ssds' @change='productFetch'>
                                <label for="ssd{{ $ssd->id }}"
                                    class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>{{ $ssd->name }}
                                </label>
                            </span>
                        @endforeach
                    </div>
                </div>

                <!-- -------------nav-10th-------part (Graphics)------------------ -->
                <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                    class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
                    <div class="flex justify-between p-[12px]">
                        <span class='text-[#380D37] font-[jost] font-[500] text-[12px] leading-[25.23px] '
                            for="text">Graphics</span>
                        <img src="/storage/product/down-arrow.svg" @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="text-[#000000] text-[14px] cursor-pointer w-[20px]" aria-hidden="true">
                    </div>
                    <div class="h-[1px] bg-[#380D3733] w-full">
                    </div>
                    <div x-show="open" class='p-[12px] flex flex-col gap-2'>
                        @foreach ($graphics as $graphic)
                            <span class='flex items-center gap-[4px]'>
                                <input id="graphic{{ $graphic->id }}" value="{{ $graphic->id }}"
                                    class='border-[1px] border-[#380D37] bg-[#f2f2f2] w-[11px] h-[12px]'
                                    type="checkbox" x-model='graphics' @change='productFetch'>
                                <label for="graphic{{ $graphic->id }}"
                                    class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>{{ $graphic->name }}
                                </label>
                            </span>
                        @endforeach
                    </div>
                </div>

                <!-- -----------------nav----11th---part (Speacial Offers)----------------- -->
                <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                    class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
                    <div class="flex justify-between p-[12px]">
                        <span class='text-[#380D37] font-[jost] font-[500] text-[12px] leading-[25.23px] '
                            for="text">Special
                            Features</span>
                        <img src="/storage/product/down-arrow.svg" @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="text-[#000000] text-[14px] cursor-pointer w-[20px]" aria-hidden="true">
                    </div>
                    <div class="h-[1px] bg-[#380D3733] w-full">
                    </div>
                    <div x-show="open" class='p-[12px] flex flex-col gap-2'>
                        @foreach ($s_features as $s_feature)
                            <span class='flex items-center gap-[4px]'>
                                <input id="s_feature{{ $s_feature->id }}" value="{{ $s_feature->id }}"
                                    class='border-[1px] border-[#380D37] bg-[#f2f2f2] w-[11px] h-[12px]'
                                    type="checkbox" x-model='s_features' @change='productFetch'>
                                <label for="s_feature{{ $s_feature->id }}"
                                    class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>{{ $s_feature->name }}
                                </label>
                            </span>
                        @endforeach
                    </div>
                </div>

            </div>
            {{-- <livewire:side-nav/> --}}
            <div class="col-span-4 max-xl:col-span-full">
                <!-- Sidenav -->
                <nav
                    class=" px-3 grid grid-cols-4 items-center bg-[#F2F2F2] py-3 font-[jost] font-[600] text-[16px] rounded-[6px]">
                    <div class="flex">
                        <h1 class="max-xl:hidden">
                            Filter
                            {{-- @isset($cat, $subcat)
                                {{ Str::of($cat)->headline() }}
                                @isset($subcat)
                                    /
                                    {{ Str::of(Str::of($subcat)->afterLast('-'))->upper() }}
                                @endisset
                            @else
                                All
                            @endisset --}}

                        </h1>
                        <div class="hidden max-xl:block">
                            <div id="body-overlay"></div>
                            <!-- Menu Icon -->
                            <div id="menu-icon">

                                <div class="flex gap-[10px] items-center">
                                    <div class="flex flex-col items-center">
                                        <div class="w-[25px] h-[2px] bg-[#380d37] my-[2px]"></div>
                                        <div class="w-[15px] h-[2px] bg-[#380d37] my-[2px]"></div>
                                        <div class="w-[10px] h-[2px] bg-[#380d37] my-[2px]"></div>
                                    </div>
                                    <div>
                                        <span class="text-[18px] text-[#380D37] font-[jost] font-[500]">filter</span>
                                    </div>
                                </div>

                            </div>

                            <!-- Menu Wrapper -->
                            <div id="menu" class="flex">
                                <!-- Menu -->
                                <div id="close-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </div>
                                <div class="w-[206px] overflow-scroll mb-[142px] bg-[#fff]">
                                    <!-- ----price-range------ -->
                                    <div
                                        class=" w-full bg-[#F2F2F2] flex flex-col gap-2 shadow-[0_2px_4px_rgba(0,0,0,.1)] pb-[10px]">
                                        <header class="flex px-2 pt-4 pb-2">
                                            <h2 class="font-[jost] font-[500] text-[12px] text-[#380D37]">Price Range
                                            </h2>
                                            {{-- <p>Use slider or enter min and max price</p> --}}
                                        </header>
                                        <div class="h-[1px] bg-[#380D3733] w-full"></div>
                                        <div class="mb-[10px] mt-[15px] p-[5px]">
                                            <div class="slider">
                                                <div class="progress"></div>
                                            </div>
                                            <div class="range-input">
                                                <input x-model='minPrice' @change='productFetch'
                                                    :value="minPrice" type="range"
                                                    class="range-min w-[85px] font-[jost] font-[500] text-[12px]"
                                                    min="0" max="490000" step="100">
                                                <input x-model='maxPrice' :value="maxPrice"
                                                    @change='productFetch' type="range"
                                                    class="range-max w-[85px] font-[jost] font-[500] text-[12px]"
                                                    min="10000" max="500000" step="100">
                                            </div>
                                        </div>

                                        <div class="price-input">
                                            <div class="field">
                                                {{-- <span>Min</span> --}}
                                                <input x-model='minPrice' type="number" @change='productFetch'
                                                    class="input-min font-[jost] font-[500] text-[12px]"
                                                    step="1" :value="minPrice">
                                            </div>
                                            {{-- <div class="separator">-</div> --}}
                                            <div class="field">
                                                {{-- <span>Max</span> --}}
                                                <input x-model='maxPrice' type="number" @change='productFetch'
                                                    class="input-max font-[jost] font-[500] text-[12px]"
                                                    step="1" :value="maxPrice">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ---------------nav-1st--part (Availability)--------------- -->
                                    <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                                        class='bg-[#F2F2F2]  shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
                                        <div class="flex justify-between p-[12px]">
                                            <span
                                                class='text-[#380D37] font-[jost] font-[500] text-[12px] leading-[25.23px] '
                                                for="text">Availability</span>
                                            <img src="/storage/product/down-arrow.svg" @click="toggle()"
                                                :class="{ 'rotate-180': !open }"
                                                class="text-[#000000] text-[14px] cursor-pointer w-[20px]"
                                                aria-hidden="true">
                                        </div>
                                        <div class="h-[1.5px] bg-[#380D3733] w-full">
                                        </div>
                                        <div x-show="open" class='p-[12px] flex flex-col gap-2'>
                                            <label class='flex items-center gap-[4px]' for="#">
                                                <input id="in_stock" x-model='in_stock' @change='productFetch'
                                                    class='border-[1px] border-[#764A87] bg-[#f2f2f2] w-[11px] h-[12px]'
                                                    type="checkbox" name='status'>
                                                <label for="in_stock"
                                                    class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>In
                                                    Stock</label>
                                            </label>
                                            <label class='flex items-center gap-[4px]' for="#">
                                                <input id="pre_order" x-model='pre_order' @change='productFetch'
                                                    class='border-[1px] border-[#764A87] bg-[#f2f2f2] w-[11px] h-[12px]'
                                                    type="checkbox" name='status'>
                                                <label for='pre_order'
                                                    class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37] text-center'>Pre
                                                    Order</label>
                                            </label>
                                            <label class='flex items-center gap-[4px]' for="#">
                                                <input id="upcomming" x-model='upcomming' @change='productFetch'
                                                    class='border-[1px] border-[#764A87] bg-[#f2f2f2] w-[11px] h-[12px]'
                                                    type="checkbox" name='status'>
                                                <label for="upcomming"
                                                    class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>Up
                                                    Coming</label>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- --------------------------nav----2nd---part (Brands)--------------- -->
                                    @if (!$subcat)
                                        <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                                            class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
                                            <div class="flex justify-between p-[12px]">
                                                <span
                                                    class='text-[#380D37] font-[jost] font-[500] text-[12px] leading-[25.23px] '
                                                    for="text">Brands</span>
                                                <img src="/storage/product/down-arrow.svg" @click="toggle()"
                                                    :class="{ 'rotate-180': !open }"
                                                    class="text-[#000000] text-[14px] cursor-pointer w-[20px]"
                                                    aria-hidden="true">
                                            </div>
                                            <div class="h-[1px] bg-[#380D3733] w-full">
                                            </div>
                                            <div x-show="open" class='p-[12px] flex flex-col gap-2'>
                                                @foreach ($brands as $brand)
                                                    <span class='flex items-center gap-[4px]'>
                                                        <input id="brand{{ $brand->id }}"
                                                            value="{{ $brand->id }}"
                                                            class='border-[1px] border-[#380D37] bg-[#f2f2f2] w-[11px] h-[12px]'
                                                            type="checkbox" x-model='brands' @change='productFetch'>
                                                        <label for="brand{{ $brand->id }}"
                                                            class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>{{ $brand->title }}

                                                        </label>
                                                    </span>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif
                                    <!-- ------------------nav-3rd--part (Processor Models)-------------- -->
                                    <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                                        class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
                                        <div class="flex justify-between p-[12px]">
                                            <span
                                                class='text-[#380D37] font-[jost] font-[500] text-[12px] leading-[25.23px] '
                                                for="text">Processor
                                                Models</span>
                                            <img src="/storage/product/down-arrow.svg" @click="toggle()"
                                                :class="{ 'rotate-180': !open }"
                                                class="text-[#000000] text-[14px] cursor-pointer w-[20px]"
                                                aria-hidden="true">
                                        </div>
                                        <div class="h-[1px] bg-[#380D3733] w-full">
                                        </div>
                                        <div x-show="open" class='p-[12px] flex flex-col gap-2'>
                                            @foreach ($p_models as $pmodel)
                                                <span class='flex items-center gap-[4px]'>
                                                    <input id="pmodel{{ $pmodel->id }}"
                                                        value="{{ $pmodel->id }}"
                                                        class='border-[1px] border-[#380D37] bg-[#f2f2f2] w-[11px] h-[12px]'
                                                        type="checkbox" x-model='pmodels' @change='productFetch'>
                                                    <label for="pmodel{{ $pmodel->id }}"
                                                        class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>{{ $pmodel->name }}
                                                    </label>
                                                </span>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- --------------nav-4th---part (Processor Generation)------------ -->
                                    <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                                        class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
                                        <div class="flex justify-between p-[12px]">
                                            <span
                                                class='text-[#380D37] font-[jost] font-[500] text-[12px] leading-[25.23px] '
                                                for="text">Processor Generations</span>
                                            <img src="/storage/product/down-arrow.svg" @click="toggle()"
                                                :class="{ 'rotate-180': !open }"
                                                class="text-[#000000] text-[14px] cursor-pointer w-[20px]"
                                                aria-hidden="true">
                                        </div>
                                        <div class="h-[1px] bg-[#380D3733] w-full"></div>
                                        <div x-show="open" class='p-[12px] flex flex-col gap-2'>
                                            @foreach ($p_generations as $pgeneration)
                                                <span class='flex items-center gap-[4px]'>
                                                    <input id="pgeneration{{ $pgeneration->id }}"
                                                        value="{{ $pgeneration->id }}"
                                                        class='border-[1px] border-[#380D37] bg-[#f2f2f2] w-[11px] h-[12px]'
                                                        type="checkbox" x-model='pgenerations'
                                                        @change='productFetch'>
                                                    <label for="pgeneration{{ $pgeneration->id }}"
                                                        class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>{{ $pgeneration->name }}
                                                    </label>
                                                </span>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- ------------------nav-5th-----part (Display Sizes) ----------- -->
                                    <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                                        class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
                                        <div class="flex justify-between p-[12px]">
                                            <span
                                                class='text-[#380D37] font-[jost] font-[500] text-[12px] leading-[25.23px] '
                                                for="text">Display
                                                Size</span>
                                            <img src="/storage/product/down-arrow.svg" @click="toggle()"
                                                :class="{ 'rotate-180': !open }"
                                                class="text-[#000000] text-[14px] cursor-pointer w-[20px]"
                                                aria-hidden="true">
                                        </div>
                                        <div class="h-[1px] bg-[#380D3733] w-full">
                                        </div>
                                        <div x-show="open" class='p-[12px] flex flex-col gap-2'>
                                            @foreach ($d_sizes as $d_size)
                                                <span class='flex items-center gap-[4px]'>
                                                    <input id="d_size{{ $d_size->id }}"
                                                        value="{{ $d_size->id }}"
                                                        class='border-[1px] border-[#380D37] bg-[#f2f2f2] w-[11px] h-[12px]'
                                                        type="checkbox" x-model='d_sizes' @change='productFetch'>
                                                    <label for="d_size{{ $d_size->id }}"
                                                        class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>{{ $d_size->size - 0.4 . ' to ' . $d_size->size + 0.4 }}
                                                        inch
                                                    </label>
                                                </span>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- --------------nav-6th---part (Display Types)------------- -->
                                    <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                                        class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
                                        <div class="flex justify-between p-[12px]">
                                            <span
                                                class='text-[#380D37] font-[jost] font-[500] text-[12px] leading-[25.23px] '
                                                for="text">Display
                                                Type</span>
                                            <img src="/storage/product/down-arrow.svg" @click="toggle()"
                                                :class="{ 'rotate-180': !open }"
                                                class="text-[#000000] text-[14px] cursor-pointer w-[20px]"
                                                aria-hidden="true">
                                        </div>
                                        <div class="h-[1px] bg-[#380D3733] w-full">
                                        </div>
                                        <div x-show="open" class='p-[12px] flex flex-col gap-2'>
                                            @foreach ($d_types as $d_type)
                                                <span class='flex items-center gap-[4px]'>
                                                    <input id="d_type{{ $d_type->id }}"
                                                        value="{{ $d_type->id }}"
                                                        class='border-[1px] border-[#380D37] bg-[#f2f2f2] w-[11px] h-[12px]'
                                                        type="checkbox" x-model='d_types' @change='productFetch'>
                                                    <label for="d_type{{ $d_type->id }}"
                                                        class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>{{ $d_type->name }}
                                                    </label>
                                                </span>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- ---------------nav--7th--part (RAMs) ------------------ -->
                                    <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                                        class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
                                        <div class="flex justify-between p-[12px]">
                                            <span
                                                class='text-[#380D37] font-[jost] font-[500] text-[12px] leading-[25.23px] '
                                                for="text">RAM</span>
                                            <img src="/storage/product/down-arrow.svg" @click="toggle()"
                                                :class="{ 'rotate-180': !open }"
                                                class="text-[#000000] text-[14px] cursor-pointer w-[20px]"
                                                aria-hidden="true">
                                        </div>
                                        <div class="h-[1px] bg-[#380D3733] w-full">
                                        </div>
                                        <div x-show="open" class='p-[12px] flex flex-col gap-2'>
                                            @foreach ($rams as $ram)
                                                <span class='flex items-center gap-[4px]'>
                                                    <input id="ram{{ $ram->id }}" value="{{ $ram->id }}"
                                                        class='border-[1px] border-[#380D37] bg-[#f2f2f2] w-[11px] h-[12px]'
                                                        type="checkbox" x-model='rams' @change='productFetch'>
                                                    <label for="ram{{ $ram->id }}"
                                                        class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>{{ $ram->ram }}
                                                        GB
                                                    </label>
                                                </span>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- --------------nav---8th--part (HDDs) ------------------- -->
                                    <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                                        class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
                                        <div class="flex justify-between p-[12px]">
                                            <span
                                                class='text-[#380D37] font-[jost] font-[500] text-[12px] leading-[25.23px] '
                                                for="text">HDD</span>
                                            <img src="/storage/product/down-arrow.svg" @click="toggle()"
                                                :class="{ 'rotate-180': !open }"
                                                class="text-[#000000] text-[14px] w-[20px] cursor-pointer">
                                        </div>
                                        <div class="h-[1px] bg-[#380D3733] w-full">
                                        </div>
                                        <div x-show="open" class='p-[12px] flex flex-col gap-2'>
                                            @foreach ($hdds as $hdd)
                                                <span class='flex items-center gap-[4px]'>
                                                    <input id="hdd{{ $hdd->id }}" value="{{ $hdd->id }}"
                                                        class='border-[1px] border-[#380D37] bg-[#f2f2f2] w-[11px] h-[12px]'
                                                        type="checkbox" x-model='hdds' @change='productFetch'>
                                                    <label for="hdd{{ $hdd->id }}"
                                                        class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>{{ $hdd->name }}
                                                    </label>
                                                </span>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- ---------------nav--9th---part (SSDs)---------------- -->
                                    <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                                        class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
                                        <div class="flex justify-between p-[12px]">
                                            <span
                                                class='text-[#380D37] font-[jost] font-[500] text-[12px] leading-[25.23px] '
                                                for="text">SSD</span>
                                            <img src="/storage/product/down-arrow.svg" @click="toggle()"
                                                :class="{ 'rotate-180': !open }"
                                                class="text-[#000000] text-[14px] cursor-pointer w-[20px]"
                                                aria-hidden="true">
                                        </div>
                                        <div class="h-[1px] bg-[#380D3733] w-full">
                                        </div>
                                        <div x-show="open" class='p-[12px] flex flex-col gap-2'>
                                            @foreach ($ssds as $ssd)
                                                <span class='flex items-center gap-[4px]'>
                                                    <input id="ssd{{ $ssd->id }}" value="{{ $ssd->id }}"
                                                        class='border-[1px] border-[#380D37] bg-[#f2f2f2] w-[11px] h-[12px]'
                                                        type="checkbox" x-model='ssds' @change='productFetch'>
                                                    <label for="ssd{{ $ssd->id }}"
                                                        class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>{{ $ssd->name }}
                                                    </label>
                                                </span>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- -------------nav-10th-------part (Graphics)------------------ -->
                                    <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                                        class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
                                        <div class="flex justify-between p-[12px]">
                                            <span
                                                class='text-[#380D37] font-[jost] font-[500] text-[12px] leading-[25.23px] '
                                                for="text">Graphics</span>
                                            <img src="/storage/product/down-arrow.svg" @click="toggle()"
                                                :class="{ 'rotate-180': !open }"
                                                class="text-[#000000] text-[14px] cursor-pointer w-[20px]"
                                                aria-hidden="true">
                                        </div>
                                        <div class="h-[1px] bg-[#380D3733] w-full">
                                        </div>
                                        <div x-show="open" class='p-[12px] flex flex-col gap-2'>
                                            @foreach ($graphics as $graphic)
                                                <span class='flex items-center gap-[4px]'>
                                                    <input id="graphic{{ $graphic->id }}"
                                                        value="{{ $graphic->id }}"
                                                        class='border-[1px] border-[#380D37] bg-[#f2f2f2] w-[11px] h-[12px]'
                                                        type="checkbox" x-model='graphics' @change='productFetch'>
                                                    <label for="graphic{{ $graphic->id }}"
                                                        class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>{{ $graphic->name }}
                                                    </label>
                                                </span>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- -----------------nav----11th---part (Speacial Offers)----------------- -->
                                    <div x-data="{ open: true, toggle() { this.open = !this.open } }"
                                        class='bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
                                        <div class="flex justify-between p-[12px]">
                                            <span
                                                class='text-[#380D37] font-[jost] font-[500] text-[12px] leading-[25.23px] '
                                                for="text">Special
                                                Features</span>
                                            <img src="/storage/product/down-arrow.svg" @click="toggle()"
                                                :class="{ 'rotate-180': !open }"
                                                class="text-[#000000] text-[14px] cursor-pointer w-[20px]"
                                                aria-hidden="true">
                                        </div>
                                        <div class="h-[1px] bg-[#380D3733] w-full">
                                        </div>
                                        <div x-show="open" class='p-[12px] flex flex-col gap-2'>
                                            @foreach ($s_features as $s_feature)
                                                <span class='flex items-center gap-[4px]'>
                                                    <input id="s_feature{{ $s_feature->id }}"
                                                        value="{{ $s_feature->id }}"
                                                        class='border-[1px] border-[#380D37] bg-[#f2f2f2] w-[11px] h-[12px]'
                                                        type="checkbox" x-model='s_features' @change='productFetch'>
                                                    <label for="s_feature{{ $s_feature->id }}"
                                                        class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>{{ $s_feature->name }}
                                                    </label>
                                                </span>
                                            @endforeach
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-span-2 flex justify-between text-center items-center font-[jost] font-[500] text-[17px]">

                        <div class="grid grid-cols-3 gap-[5px] items-center">
                            <label
                                class="col-span-1 text-right bg-[#f2f2f2] text-[#380D37] text-[14px] max-sm:text-[12px] font-[jost] font-[400] leading-[20.23px]">Sort
                                by:</label>
                            <select x-model='sorting' @change='productFetch'
                                class="flex items-center justify-center text-center gap-[4px] col-span-2 max-md:w-full py-[14px] max-sm:py-[8px] text-[#380D37] text-[14px] max-sm:text-[12px] font-[jost] font-[400] leading-[20.23px]">
                                <option selected>Default sorting</option>
                                <option value="sbp">Sort by popularity</option>
                                <option value="sbar">Sort by average rating</option>
                                <option value="sbl">Sort by latest</option>
                                <option value="lth">Short by price: low to high</option>
                                <option value="htl">Short by price: high to low</option>
                            </select>
                        </div>
                    </div>
                    <div
                        class="shop-view text-[#380D37] text-[14px] max-sm:text-[12px] font-[jost] font-[400] leading-[20.23px] flex items-center gap-[4px] max-md:gap-[2px] justify-center transparent">
                        <span class='text-center'>View</span>
                        <span id="grid"
                            class="grid-view mf-shop-view current mx-[20px] max-md:mx-[10px] max-sm:mx-[2px]"
                            data-view="grid">
                            <svg xmlns="http://www.w3.org/2000/svg" height="2em" class="max-sm:h-[15px] cursor-pointer"
                                fill='black' viewBox="0 0 512 512">
                                <path
                                    d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64
                                        64H448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm88 64v64H64V96h88zm56 0h88v64H208V96zm240 0v64H360V96h88zM64
                                        224h88v64H64V224zm232 0v64H208V224h88zm64 0h88v64H360V224zM152 352v64H64V352h88zm56 0h88v64H208V352zm240 0v64H360V352h88z" />
                            </svg></span>
                        <span id="column" class="list-view mf-shop-view mx-[20px] max-md:mx-[10px] max-sm:mx-[2px]"
                            data-view="list">
                            <svg xmlns="http://www.w3.org/2000/svg" height="2em" class="max-sm:h-[15px] cursor-pointer"
                                fill='black' viewBox="0 0 512 512">
                                <path
                                    d="M64 144a48 48 0 1 0 0-96 48 48 0 1 0 0 96zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM64 464a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm48-208a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z" />
                            </svg>
                        </span>
                    </div>
                </nav>

                {{-- product show after reload  --}}
                <div x-show='productShow'>
                    <div
                        class='grid grid-cols-4 gap-8 max-sm:gap-[5px] mx-auto mt-4 max-lg:grid-cols-3 max-sm:grid-cols-2 product_pdiv'>
                        @foreach ($products as $product)
                            <x-shop-product :product="$product">
                                <div class='mt-2'>
                                    <ul
                                        class='text-[#353535] text-[10px] font-[jost] font-[400] list-decimal px-4 leading-[20px]'>
                                        <li>Processor: {{ $product->ProcessorModel?->name }}
                                            {{ $product->ProcessorModel?->c_speed }}</li>
                                        {{-- <li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li> --}}
                                        @if ($product->ram || $product->ssd)
                                            <li>RAM: {{ $product->ram?->ram }} {{ $product->ram?->type }}
                                                {{ $product->ram?->bus_speed }}, Storage: {{ $product->storage() }}
                                            </li>
                                            {{-- <li>RAM: 8GB DDR5 5500MHz, Storage: 256GB SSD</li> --}}
                                        @endif
                                        @if ($ds = $product->DisplaySize?->size)
                                            <li>Display:
                                                {{ $ds . '"' . $product->DisplayType?->name . ' (' . $product->d_resolution }})
                                            </li>
                                            {{-- <li>Display: 15.6" FHD (1920X1080)</li> --}}
                                        @endif
                                        @if ($sp = $product->special_feature)
                                            <li>Features: {{ $sp }}</li>
                                            {{-- <li>Features: Type-C</li> --}}
                                        @endif
                                    </ul>
                                </div>
                            </x-shop-product>
                        @endforeach
                    </div>
                    <div class="mt-8">
                        {{ $products->links('vendor.pagination.tailwind') }}
                    </div>
                </div>

                {{-- Ajax product show after search ( Ajax search) --}}
                <template x-if="products">
                    <div>
                        <div x-show="ajaxProduct" id="product_pdiv">
                            <div
                                class='grid grid-cols-4 gap-8 max-sm:gap-[5px] mx-auto mt-4 max-lg:grid-cols-3 max-sm:grid-cols-2 product_pdiv'>
                                {{-- x-if="Object.keys(products).length > 0" --}}
                                <template x-for="product in pagi_products" id="product">
                                    <div
                                        class="product_div relative overflow-hidden border-[1px] border-[#380D37] bg-[#f2f2f2] rounded-[4px] box-border px-[5px] mt-2 flex flex-col gap-2 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] ">

                                        <div class="flex items-center justify-center image-container relative">
                                           <a :href="'/product-details/'+product.slug" wire:navigate>
                                            <img :src="product.photo.split(',')[0]"
                                            class="rounded-t-lg img-fluid h-[150px] object-container"
                                            data-te-ripple-init data-te-ripple-color="dark" alt="avatar.png">
                                           </a>
                                           <span class="text-[14px] bg-red-900 text-[#fff] absolute top-0 left-[-5px] px-2 py-[2px] rounded-r-lg">Out Of Stock</span>
                                        </div>

                                        <div
                                            class="p-4 max-sm:p-[8px] border-t-[1px] border-[#380D3733]">
                                            <div class=' border-[#380D3733] mb-2'>
                                                <a :href="'/product-details/'+product.slug" wire:navigate
                                                    class="font-[jost] text-[12px] font-[500] leading-[20px] text-left text-[#380D37] transition duration-150 ease-in-out hover:text-[#ef4a23] decoration-[#ef4a23] decoration-1 hover:underline hover:underline-offset-4"
                                                    x-text='product.title'>
                                                </a>
                                            </div>
                                            <div class='mb-4 mt-auto'>
                                                <ul
                                                    class='text-[#353535] list-decimal px-4 text-[10px] leading-[20px]'>
                                                    <li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li>
                                                    <li>RAM: 8GB DDR5 5500MHz, Storage: 256GB SSD</li>
                                                    <li>Display: 15.6" FHD (1920X1080)</li>
                                                    <li>Features: Type-C</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="px-6 py-6 mt-auto text-center border-t-[2px] border-[#380D3733]">
                                            <div class="flex flex-col justify-center">
                                                <span
                                                    class="font-[jost] text-[12px] font-[700] leading-[24px] text-[#DC275C] flex items-center justify-center gap-[4px]">
                                                    <span x-text='product.price'></span>
                                                    <span
                                                        class="text-[12px] font-[jost] font-[700]">৳</span>
                                                </span>
                                                <span class="text-[#380D37] text-[12px] font-[jost] font-[700] line-through">
                                                    <span x-text='product.price'></span>৳
                                                </span>
                                            </div>
                                            <div class="my-3 text-center">

                                                <a :href="'/single-checkout/' + product.slug" wire:navigate
                                                    class="">
                                                    <button
                                                        class='bg-[#380D37] text-[#F2F2F2] text-[10px] font-[jost] font-[500] py-[8px] px-[50px] max-lg:px-0 max-lg:w-[100px] rounded-[5px]'>
                                                        Buy Now
                                                    </button></a>
                                            </div>
                                            <div>
                                                {{-- <a href=""> --}}
                                                {{-- <livewire:add-to-cart :id="product.id"
                                        button='<p class="font-[jost] text-[10px] text-[#380D37] font-[500] leading-[20px]"> Add to Cart</p>' /> --}}
                                                <p :id="product.id"
                                                    class="cursor-pointer add-to-cart font-[jost] text-[10px] text-[#380D37] font-[500] leading-[20px]">
                                                    Add to Cart</p>
                                                {{-- </a> --}}
                                            </div>
                                        </div>
                                    </div>
                                </template>
                            </div>

                            {{-- pagination  --}}
                            <div class="mt-8">
                                <nav role="navigation" aria-label="Pagination Navigation"
                                    class="flex items-center justify-between">
                                    <div class="flex justify-between flex-1 sm:hidden">
                                        <span
                                            class="relative inline-flex items-center px-4 py-2 text-[12px] text-[#353535] font-[jost] font-[500] leading-[17.34px] bg-[#f2f2f2] border border-gray-300 rounded-md cursor-default">
                                            « Previous
                                        </span>
                                        <a href=""
                                            class="relative inline-flex items-center px-4 py-2 ml-3 text-[12px] text-[#353535] font-[jost] font-[500] leading-[17.34px] bg-[#f2f2f2] transition duration-150 ease-in-out border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700">
                                            Next »
                                        </a>
                                    </div>

                                    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                                        <div>
                                            <span class="relative z-0 inline-flex rounded-md shadow-sm">
                                                <span aria-disabled="true" aria-label="&amp;laquo; Previous">
                                                    <a href="javascript::void(0)" @click='pageChange(current_page-1)'
                                                        rel="prev"
                                                        class="relative inline-flex items-center px-2 py-2 text-sm font-medium leading-5 text-gray-500 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-l-md hover:text-gray-400 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-500"
                                                        aria-label="&amp;laquo; Previous">
                                                        PREV
                                                    </a>
                                                </span>

                                                {{-- 1,2,3,4 serial  --}}
                                                <template x-for="npage in page_num" :key="npage">
                                                    <div>
                                                        <template x-if='current_page == npage'>
                                                            <span aria-current="page" @click='pageChange(npage)'>
                                                                <span x-text='npage'
                                                                    class="relative text-[white] inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5  bg-[#380E37] border border-gray-300 cursor-default">2</span>
                                                            </span>
                                                        </template>
                                                        <template x-if='current_page != npage'>
                                                            <a href="javascript:void(0)" x-text='npage'
                                                                @click='pageChange(npage)'
                                                                class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700"
                                                                aria-label="Go to page 3">
                                                                3
                                                            </a>
                                                        </template>
                                                    </div>
                                                </template>
                                                <a @click='pageChange(current_page+1)' href="javascript:void(0)"
                                                    rel="next"
                                                    class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium leading-5 text-gray-500 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-r-md hover:text-gray-400 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-500"
                                                    aria-label="Next &amp;raquo;">
                                                    NEXT
                                                </a>
                                            </span>
                                        </div>

                                        <div>
                                            <p
                                                class="text-[12px] text-[#353535] font-[jost] font-[500] leading-[17.34px] bg-[#f2f2f2]">
                                                Showing
                                                <span x-text='show_from'
                                                    class="font-[jost] font-[500] text-[12px] text-[#353535] bg-[#f2f2f2]"
                                                    id="showing_from">1</span>
                                                to
                                                <span x-text='show_to'
                                                    class="font-[jost] font-[500] text-[12px] text-[#353535] bg-[#f2f2f2]"
                                                    id="showing_to">20</span>
                                                of
                                                <span x-text='total_product'
                                                    class="text-[12px] text-[#353535] font-[jost] font-[500]"></span>
                                                results (<span x-text='page_num'></span> pages)
                                            </p>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>

                        <template x-if="Object.keys(products).length === 0">
                            <div class="text-center ">
                                <p class="font-[jost] text-[16px] text-[#380D37] font-[500] leading-[24px]">
                                    No products available.
                                </p>
                            </div>
                        </template>
                    </div>

                </template>

            </div>
        </div>
    </div>
    <div class='h-[2px] bg-[#764A8733] mt-[60px]'></div>
</div>
@script
    <script>
        $(document).ready(function() {
            //Grid and colulm button
            $('#column').on('click', function() {
                $('.product_pdiv').removeClass('grid-cols-4 gap-8');
                $('.product_pdiv').addClass('grid-cols-1  max-w-2xl');
            })
            $('#grid').on('click', function() {
                $('.product_pdiv').removeClass('grid-cols-1  max-w-2xl');
                $('.product_pdiv').addClass('grid-cols-4 gap-8');
            })

            //ajax searching products paginations
            $('search-p-button').each(function(index) {
                $(this).on('click', (e) => {
                    e.preventDefault();

                });
            });

            // Input range script
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
        });

        $(document).ready(function() {
            var menuWrapper = $("#menu");
            var bodyOverlay = $("#body-overlay");
            $("#menu-icon").click(function() {
                $("body").addClass("noscroll");
                menuWrapper.css("right", "0");
                bodyOverlay.css("display", "block");
            });
            $("#close-icon").click(function() {
                $("body").removeClass("noscroll");
                menuWrapper.css("right", "-300px");
                bodyOverlay.css("display", "none");
            });
            bodyOverlay.click(function() {
                $("body").removeClass("noscroll");
                menuWrapper.css("right", "-300px");
                $(this).css("display", "none");
            });
        });
    </script>
@endscript
