<div>
      <div class='ml-[40px]'>
        <h1 class='font-[jost] xl:text-[20px] font-[400] leading-[25.3px] text-[#353535]'>All Categories/ Brand New</h1>
        <div class='h-1 bg-[#764A8733]'></div>
    </div>

    <!-- Sidenav -->
    <div class="container mx-auto mt-4">
        <div class="flex justify-between gap-8">
            <livewire:side-nav/>

            <!-- ------------right---part--start--- -->

            <div class="mt-2">
              <livewire:menu-nav/>
                <!-- ------cart--group----1st--part--- -->

                <div class='grid grid-cols-4 gap-8 mt-4'>
                    @for ($i=1;$i<25;$i++)
                        <livewire:shop-product/>
                    @endfor
                </div>

            </div>
        </div>
    </div>
</div>
