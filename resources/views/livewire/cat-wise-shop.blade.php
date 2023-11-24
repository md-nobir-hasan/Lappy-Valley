<div class='ml-[40px]'>
    <h1 class='font-[jost] xl:text-[20px] font-[400] leading-[25.3px] text-[#353535]'>All Categories/
        {{ Str::of($slug)->headline() }}</h1>
    <div class='h-1 bg-[#764A8733]'></div>
</div>

<!-- Sidenav -->
<div class="container mx-auto mt-4">
    <div class="flex justify-between gap-8">
        <livewire:side-nav />

        <!-- ------------right---part--start--- -->
        <div class="mt-2">
            <livewire:menu-nav />
            <!-- ------cart--group----1st--part--- -->
            <div class='grid grid-cols-4 gap-8 mt-4'>
                @foreach ($slug_wise_product as $product)
                    <x-product :product="$product">
                        <div class='mt-2'>
                            <ul class='text-[#353535] list-decimal px-4 text-[16px] leading-[30px]'>
                                <li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li>
                                <li>RAM: 8GB DDR5 5500MHz, Storage: 256GB SSD</li>
                                <li>Display: 15.6" FHD (1920X1080)</li>
                                <li>Features: Type-C</li>
                            </ul>
                        </div>
                    </x-product>
                @endforeach

            </div>

        </div>
    </div>
</div>
