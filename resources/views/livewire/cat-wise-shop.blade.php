<div class="px-[100px] max-sm:px-[25px] max-md:px-[35px] max-lg:px-[45px] mx-auto max-sm:mt-[70px] max-xl:mt-[100px]">
    <div class='ml-[40px]'>
        <h1 class='font-[jost] xl:text-[20px] font-[400] leading-[25.3px] text-[#353535]'>All Categories/
            {{ Str::of($slug ?? 'Search')->headline() }}</h1>
        <div class='h-1 bg-[#764A8733]'></div>
    </div>

    <!-- Sidenav -->
    <div class="">
        <div class="">
            <livewire:side-nav />

            <!-- ------------right---part--start--- -->
            <div class="mt-2">
                <livewire:menu-nav />
                <!-- ------cart--group----1st--part--- -->
                <div class='grid grid-cols-4 gap-8 mt-4'>
                    @foreach ($slug_wise_product as $product)
                        <x-shop-product :product="$product">
                            <div class='mt-2'>
                                <ul class='text-[#353535] list-decimal px-4 text-[16px] leading-[30px]'>
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
                    {{ $slug_wise_product->links('vendor.pagination.tailwind') }}
                </div>
            </div>
        </div>
    </div>
</div>
