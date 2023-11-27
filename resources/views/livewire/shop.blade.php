<div>
      <div class='container mx-auto'>
        <h1 class='font-[jost] xl:text-[20px] font-[400] leading-[25.3px] text-[#353535]'>All Categories</h1>
        <div class='h-1 bg-[#764A8733]'></div>
    </div>

    <!-- Sidenav -->
    <div class="container mx-auto mt-4">
        <div class="flex justify-between gap-8">
            <livewire:side-nav/>
            <!-- ------------right---part--start--- -->
            <div class="">
              <livewire:menu-nav/>
                <!-- ------cart--group----1st--part--- -->

                <div class='grid grid-cols-4 gap-8 mt-4'>
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

            </div>
        </div>
    </div>
</div>
