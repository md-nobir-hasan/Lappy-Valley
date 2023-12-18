<div class='px-[100px] max-2xl:px-[70px] max-xl:px-[60px] max-lg:px-[38px] max-md:px-[35px] max-sm:px-[15px] max-sm:mt-[70px] max-xl:mt-[100px]'>
    <div class='flex justify-between'>
        <h1
            class='font-[jost] xl:text-[20px] max-sm:text-[16px] max-md:text-[] max-lg:text-[] font-[400] leading-[25.3px] text-[#353535]'>
            Search / Lenovo</h1>
        <div class='flex gap-[5px] items-center'><img src="/storage/product/vector-1.svg" alt="Product"
                class='w-[16px] h-[14px]'>   <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class='text-[16px] text-[#380D37] font-[jost] font-[400] leading-[23.12px]'>Log
                    Out</button>
            </form></div>
    </div>
     @dd(auth()->user())
    <div class='h-[2px] bg-[#764A8733]'></div>
    <!-- --------------------user-name-------------------------------- -->

    <livewire:user-pic/>
    <livewire:user-account-menu />
    <div class='h-[2px] bg-[#764A8733]'></div>


    <div class='my-[15px]'>
        <h1
            class='text-[20px] max-sm:text-[14px] max-md:text-[] max-lg:text-[] text-[#000000] font-[Inter] font-[500] leading-24.2px[]'>
            Wish List:
        </h1>
    </div>
    <div class="overflow-auto rounded-lg shadow">
        <table class="w-full">
            <thead>
                <tr class="bg-[#380D37]">
                    <th class='w-20 p-3 tracking-wide text-left text-[14px] text-[#FFFFFF] font-[jost] font-[500]'>
                        Image
                    </th>
                    <th class='w-20 p-3 tracking-wide text-left text-[14px] text-[#FFFFFF] font-[jost] font-[500]'>
                        Product Name
                    </th>
                    <th class='w-20 p-3 tracking-wide text-left text-[14px] text-[#FFFFFF] font-[jost] font-[500]'>
                        Price
                    </th>
                    <th class='w-20 p-3 tracking-wide text-left text-[14px] text-[#FFFFFF] font-[jost] font-[500]'>
                    </th>
                    <th class='w-20 p-3 tracking-wide text-left text-[14px] text-[#FFFFFF] font-[jost] font-[500]'>
                    </th>
                </tr>
            </thead>

            <tbody class='border-b-[1px] border-[#380D37]'>
                @forelse ($wishlists as $wishlist)
                    <tr>
                        <td class="p-3 tracking-wide text-left whitespace-nowrap">
                            <img src="/storage/product/large-size-laptop.jpg" alt="Product" class='w-[48px] h-[48px]'>
                        </td>
                        <td
                            class="p-3 tracking-wide text-left text-[20px] whitespace-nowrap text-[#000000] font-[jost] font-[500] leading-[28.9px]">
                            Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U
                        </td>
                        <td
                            class="p-3 tracking-wide text-left text-[20px] whitespace-nowrap text-[#DC275C] font-[jost] font-[700] leading-[28.9px]">
                            1,50,000 ৳
                        </td>
                        <td class="p-3 tracking-wide text-left text-[14px] whitespace-nowrap">
                            <button
                                class='text-[14px] text-[#F2F2F2] font-[jost] font-[500] rounded-[4px] leading-[20.23px] bg-gradient-to-r from-[#380D37] to-[#DC275C]
                                    w-[133px] h-[41px]'>
                                Buy Now
                            </button>
                        </td>
                        <td class="p-3 tracking-wide text-left text-[14px] whitespace-nowrap">
                            <img src="/storage/product/cross-icon.svg" class="w-[28px] h-[28px] text-[#000000]"
                                alt="product">
                        </td>
                    </tr>
                @empty
                <tr>
                    <td colspan="4" class="py-12 text-center"> There are no products in your wishlislts</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="h-[2px] bg-[#764A8733] mt-[200px] max-sm:mt-[50px] "></div>
</div>
