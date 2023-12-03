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
    <script src="/library/pagination/pagination.min.js"></script>
    <div class='container mx-auto'>
        <h1 class='font-[jost] text-[16px] font-[400] leading-[23.12px] tracking-[3%] text-[#353535]'>All Categories/
            Pre-Owned</h1>
        <div class='h-[2px] bg-[#764A8733]'></div>
    </div>

    <!-- Sidenav -->
    <div class="container mx-auto mt-4">
        <div class="flex gap-8" x-data="{
            products: $wire.prds,
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
            productFetch() {

                $.ajax({
                    type: 'get',
                    url: '{{ route('shop.shorting') }}',
                    data: {
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
                        this.productShow = false;
                        this.ajaxProduct = true;
                    }
                })
            }
        }">
            <!-- ------------right---part--start--- -->
            <div class="w-[230px]">
                <!-- ----price-range------ -->
                <div class="wrapper flex flex-col shadow-[0_2px_4px_rgba(0,0,0,.1)] pb-[10px]">
                    <header class="px-2 py-4">
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

                <!-- ------------------nav-3rd--part (Processor Models)-------------- -->
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
                        @foreach ($p_models as $pmodel)
                            <span class='block'>
                                <input id="pmodel{{ $pmodel->id }}" value="{{ $pmodel->id }}"
                                    class='border-[2px] border-[#764A87]' type="checkbox" x-model='pmodels'
                                    @change='productFetch'>
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
                        <span class='text-[#380D37] font-[jost] font-[600] text-[14px] leading-[25.23px] '
                            for="text">Processor Generations</span>
                        <img src="/storage/product/down-arrow.svg" @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="text-[#000000] text-[14px] cursor-pointer w-[20px]" aria-hidden="true">
                    </div>
                    <div class="h-[1px] bg-[#380D3733] w-full"></div>
                    <div x-show="open" class='p-[12px]'>
                        @foreach ($p_generations as $pgeneration)
                            <span class='block'>
                                <input id="pgeneration{{ $pgeneration->id }}" value="{{ $pgeneration->id }}"
                                    class='border-[2px] border-[#764A87]' type="checkbox" x-model='pgenerations'
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
                        <span class='text-[#380D37] font-[jost] font-[600] text-[14px] leading-[25.23px] '
                            for="text">Display
                            Size</span>
                        <img src="/storage/product/down-arrow.svg" @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="text-[#000000] text-[14px] cursor-pointer w-[20px]" aria-hidden="true">
                    </div>
                    <div class="h-[1px] bg-[#380D3733] w-full">
                    </div>
                    <div x-show="open" class='p-[12px]'>
                        @foreach ($d_sizes as $d_size)
                            <span class='block'>
                                <input id="d_size{{ $d_size->id }}" value="{{ $d_size->id }}"
                                    class='border-[2px] border-[#764A87]' type="checkbox" x-model='d_sizes'
                                    @change='productFetch'>
                                <label for="d_size{{ $d_size->id }}"
                                    class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>{{ $d_size->from . ' to ' . $d_size->to }}
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
                        <span class='text-[#380D37] font-[jost] font-[600] text-[14px] leading-[25.23px] '
                            for="text">Display
                            Type</span>
                        <img src="/storage/product/down-arrow.svg" @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="text-[#000000] text-[14px] cursor-pointer w-[20px]" aria-hidden="true">
                    </div>
                    <div class="h-[1px] bg-[#380D3733] w-full">
                    </div>
                    <div x-show="open" class='p-[12px]'>
                        @foreach ($d_types as $d_type)
                            <span class='block'>
                                <input id="d_type{{ $d_type->id }}" value="{{ $d_type->id }}"
                                    class='border-[2px] border-[#764A87]' type="checkbox" x-model='d_types'
                                    @change='productFetch'>
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
                        <span class='text-[#380D37] font-[jost] font-[600] text-[14px] leading-[25.23px] '
                            for="text">RAM</span>
                        <img src="/storage/product/down-arrow.svg" @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="text-[#000000] text-[14px] cursor-pointer w-[20px]" aria-hidden="true">
                    </div>
                    <div class="h-[1px] bg-[#380D3733] w-full">
                    </div>
                    <div x-show="open" class='p-[12px]'>
                        @foreach ($rams as $ram)
                            <span class='block'>
                                <input id="ram{{ $ram->id }}" value="{{ $ram->id }}"
                                    class='border-[2px] border-[#764A87]' type="checkbox" x-model='rams'
                                    @change='productFetch'>
                                <label for="ram{{ $ram->id }}"
                                    class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>{{ $ram->name }}
                                </label>
                            </span>
                        @endforeach
                    </div>
                </div>

                <!-- --------------nav---8th--part (HDDs) ------------------- -->
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
                        @foreach ($hdds as $hdd)
                            <span class='block'>
                                <input id="hdd{{ $hdd->id }}" value="{{ $hdd->id }}"
                                    class='border-[2px] border-[#764A87]' type="checkbox" x-model='hdds'
                                    @change='productFetch'>
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
                        <span class='text-[#380D37] font-[jost] font-[600] text-[14px] leading-[25.23px] '
                            for="text">SSD</span>
                        <img src="/storage/product/down-arrow.svg" @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="text-[#000000] text-[14px] cursor-pointer w-[20px]" aria-hidden="true">
                    </div>
                    <div class="h-[1px] bg-[#380D3733] w-full">
                    </div>
                    <div x-show="open" class='p-[12px]'>
                        @foreach ($ssds as $ssd)
                            <span class='block'>
                                <input id="ssd{{ $ssd->id }}" value="{{ $ssd->id }}"
                                    class='border-[2px] border-[#764A87]' type="checkbox" x-model='ssds'
                                    @change='productFetch'>
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
                        <span class='text-[#380D37] font-[jost] font-[600] text-[14px] leading-[25.23px] '
                            for="text">Graphics</span>
                        <img src="/storage/product/down-arrow.svg" @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="text-[#000000] text-[14px] cursor-pointer w-[20px]" aria-hidden="true">
                    </div>
                    <div class="h-[1px] bg-[#380D3733] w-full">
                    </div>
                    <div x-show="open" class='p-[12px]'>
                        @foreach ($graphics as $graphic)
                            <span class='block'>
                                <input id="graphic{{ $graphic->id }}" value="{{ $graphic->id }}"
                                    class='border-[2px] border-[#764A87]' type="checkbox" x-model='graphics'
                                    @change='productFetch'>
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
                        <span class='text-[#380D37] font-[jost] font-[600] text-[14px] leading-[25.23px] '
                            for="text">Special
                            Features</span>
                        <img src="/storage/product/down-arrow.svg" @click="toggle()" :class="{ 'rotate-180': !open }"
                            class="text-[#000000] text-[14px] cursor-pointer w-[20px]" aria-hidden="true">
                    </div>
                    <div class="h-[1px] bg-[#380D3733] w-full">
                    </div>
                    <div x-show="open" class='p-[12px]'>
                        @foreach ($s_features as $s_feature)
                            <span class='block'>
                                <input id="s_feature{{ $s_feature->id }}" value="{{ $s_feature->id }}"
                                    class='border-[2px] border-[#764A87]' type="checkbox" x-model='s_features'
                                    @change='productFetch'>
                                <label for="s_feature{{ $s_feature->id }}"
                                    class='font-[jost] text-[12px] leading-[17.34px] text-[#380D37]'>{{ $s_feature->name }}
                                </label>
                            </span>
                        @endforeach
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
                <nav
                    class=" px-3 flex justify-between items-center bg-[#F2F2F2] py-3 font-[jost] font-[600] text-[16px] rounded-[6px]">
                    <div class="">
                        <h1>Brand New</h1>
                    </div>

                    <div
                        class="flex justify-between text-center items-center gap-[10px] font-[jost] font-[500] text-[17px]">

                        <label
                            class=" bg-[#f2f2f2] text-[#380D37] text-[14px] font-[jost] font-[400] leading-[20.23px]">Stor
                            by:</label>
                        <select x-model='sorting' @change='productFetch'
                            class="block w-[400px] px-[20px] py-[15px] mr-[80px] text-[#380D37] text-[14px] font-[jost] font-[400] leading-[20.23px]">
                            <option selected>Default sorting</option>
                            <option value="sbp">Sort by popularity</option>
                            <option value="sbar">Sort by average rating</option>
                            <option value="sbl">Sort by latest</option>
                            <option value="lth">Short by price: low to high</option>
                            <option value="htl">Short by price: high to low</option>
                        </select>

                        <div
                            class="shop-view text-[#380D37] text-[14px] font-[jost] font-[400] leading-[20.23px]  mx-[20px] flex items-center justify-center transparent">
                            <span class='text-center'>View</span>
                            <span id="grid" class="grid-view mf-shop-view current mx-[20px]" data-view="grid">
                                <svg xmlns="http://www.w3.org/2000/svg" height="2em" fill='black'
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64
                                        64H448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm88 64v64H64V96h88zm56 0h88v64H208V96zm240 0v64H360V96h88zM64
                                        224h88v64H64V224zm232 0v64H208V224h88zm64 0h88v64H360V224zM152 352v64H64V352h88zm56 0h88v64H208V352zm240 0v64H360V352h88z" />
                                </svg></span>
                            <span id="column" class="list-view mf-shop-view mx-[20px]" data-view="list">
                                <svg xmlns="http://www.w3.org/2000/svg" height="2em" fill='black'
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M64 144a48 48 0 1 0 0-96 48 48 0 1 0 0 96zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM64 464a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm48-208a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </nav>

                {{-- product show after reload  --}}
                <div x-show='productShow'>
                    <div class='product_pdiv grid grid-cols-4 gap-8 mt-4 mx-auto'>
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

                {{-- Ajax product show  --}}
                <template x-if="products">
                    <div>
                        <div x-show="ajaxProduct" class='product_pdiv grid grid-cols-4 gap-8 mx-auto mt-4' id="product_pdiv">
                            {{-- x-if="Object.keys(products).length > 0" --}}
                            <template x-for="product in products" id="product">
                                <div
                                    class="relative overflow-hidden border-[1px] border-[#380D37] rounded-[4px] box-border px-[5px] mt-2 flex flex-col bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] ">

                                    <img :src="product.photo.split(',')[0]" class="rounded-t-lg img-fluid "
                                        data-te-ripple-init data-te-ripple-color="dark" alt="avatar.png">

                                    <div class="p-6 border-t-[2px] border-b-[2px]  border-[#380D3733]">
                                        <div class=' border-[#380D3733] mb-2'>
                                            <h1 class="font-[jost] text-[12px] font-[600] leading-[20px] text-left text-[#380D37]"
                                                x-text='product.title'>

                                            </h1>
                                        </div>
                                        <div class='mb-4'>
                                            <ul class='text-[#353535] list-decimal px-4 text-[10px] leading-[20px]'>
                                                <li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li>
                                                <li>RAM: 8GB DDR5 5500MHz, Storage: 256GB SSD</li>
                                                <li>Display: 15.6" FHD (1920X1080)</li>
                                                <li>Features: Type-C</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="px-6 py-6 mt-auto text-center">
                                        <div>
                                            <a href="#"
                                                class="font-[jost] text-[12px] font-[700] leading-[24px] text-[#DC275C] block">
                                                <span x-text='product.price'></span>
                                                <span class="ml-[5px] text-[12px] font-[jost] font-[700]">TAKA</span>
                                            </a>
                                        </div>
                                        <div class="my-3 text-center">

                                            <a href="{{ route('product.details', 'kdfj') }}" class="">
                                                <button
                                                    class='bg-[#380D37] text-[#F2F2F2] text-[10px] font-[jost] font-[500] py-[8px] px-[60px] rounded-[5px]'>Buy
                                                    Now
                                                </button></a>
                                        </div>
                                        <div>
                                            <a href="">
                                                <p
                                                    class="font-[jost] text-[10px] text-[#380D37] font-[500] leading-[20px]">
                                                    Add
                                                    to Cart</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </template>
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
    <script>
        $('#column').on('click', function() {
            $('.product_pdiv').removeClass('grid-cols-4 gap-8');
            $('.product_pdiv').addClass('grid-cols-1  max-w-2xl');
        })
        $('#grid').on('click', function() {
            $('.product_pdiv').removeClass('grid-cols-1  max-w-2xl');
            $('.product_pdiv').addClass('grid-cols-4 gap-8');
        })
    </script>
</div>
