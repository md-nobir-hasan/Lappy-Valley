<div class='px-[100px] max-md:px-[45px] max-lg:px-[70px] max-sm:px-[15px] mx-auto max-sm:mt-[70px] max-xl:mt-[100px]'>
    <div class='flex justify-between'>
        <h1
            class='font-[jost] xl:text-[20px] max-sm:text-[16px] max-md:text-[] max-lg:text-[] font-[400] leading-[25.3px] text-[#353535]'>
            Search / Lenovo</h1>
        <div class='flex gap-[5px] items-center'><img src="/storage/product/vector-1.svg" alt="Product"
                class='w-[16px] h-[14px]'><span
                class='text-[16px] text-[#380D37] font-[jost] font-[400] leading-[23.12px]'>Log Out</span></div>
    </div>
    <div class='h-[2px] bg-[#764A8733]'></div>
    <!-- --------------------user-name-------------------------------- -->
    <div class='flex gap-[10px] items-center my-[20px]'>
        <style>
            @media (max-width:530px) {
                .hello {
                    width: 55px;
                    height: 55px;
                }

                .hello-0 {
                    font-size: 10px;
                }

                .hello-1 {
                    font-size: 14px;
                }

                .now {
                    width: 60px;
                    height: 60px;
                    display: none;
                }

                .amd {
                    font-size: 10px;
                }

                .pay {
                    font-size: 10px;
                }

                .product-4 {
                    width: 370px;
                }

                .cros {
                    width: 18px;
                    height: 18px;
                }

                .laptop-s {
                    width: 35px;
                    height: 35px;
                }

                .amd {
                    line-height: 0px;
                }

                .head-td {
                    font-size: 10px
                }

            }

            @media(min-width:530px) {
                .now-1 {
                    display: none;
                }
            }
        </style>
        <div class='hello w-[74px] h-[74px]'>
            <img src="/storage/product/iconoir_profile-circle1.svg" alt="Product">
        </div>
        <div>
            <p class='hello-0 text-[16px] max-sm:text-[14px] text-[#000000] font-[Inter] font-[400] leadint-[14.52px]'>
                Hello,
            </p>
            <h1
                class='username text-[20px] max-sm:text-[16px] max-md:text-[] max-lg:text-[] text-[#000000] font-[Inter] font-[500] leadint-[24.2px]'>
                Username Here
            </h1>
        </div>
    </div>
    <livewire:user-account-menu/>
    {{-- <div
        class='product-4 grid grid-cols-5 gap-[20px] max-sm:grid-cols-2 max-lg:grid-cols-3 max-lg:w-[510px] w-[1000px] my-[30px]'>
        <div class='flex gap-[5px] items-center'>
            <img src="/storage/product/icon-ad-product.svg"alt="Product" class='w-[23.36px] h-[26.21px]'>
            <span class='text-[#AAAAAA] text-[16px] font-[jost] font-[500] leading-[23.12px]'>
                Orders
            </span>
        </div>
        <div class='flex gap-[5px] items-center'>
            <img src="/storage/product/iconoir_profile-circle.svg" alt="Product" class='w-[24px] h-[24px]'>
            <span class='text-[#AAAAAA] text-[16px] font-[jost] font-[500] leading-[23.12px]'>
                Edit Profile
            </span>
        </div>
        <div class='flex gap-[5px] items-center'>
            <img src="/storage/product/carbon_password.svg" alt="Product" class='w-[24px] h-[24px]'>
            <span class='text-[#AAAAAA] text-[16px] font-[jost] font-[500] leading-[23.12px]'>
                Change Password
            </span>
        </div>
        <div class='flex gap-[5px] items-center'>
            <img src="/storage/product/mdi_address-marker-outline.svg" alt="Product" class='w-[24px] h-[24px]'>
            <span class='text-[#AAAAAA] text-[16px] font-[jost] font-[500] leading-[23.12px]'>
                Address
            </span>
        </div>
        <div class='flex gap-[5px] items-center'>
            <img src="/storage/product/Vector-2.svg" alt="Product" class='w-[22.3px] h-[20.88px]'>
            <span class='text-[#380D37] text-[16px] font-[jost] font-[500] leading-[23.12px]'>
                Wish List
            </span>
        </div>
    </div> --}}
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
                    <img src="/storage/product/cross-icon.svg" class="w-[28px] h-[28px] text-[#000000]" alt="product">
                </td>
            </tbody>
        </table>
    </div>
    <div class="h-[2px] bg-[#764A8733] mt-[200px] max-sm:mt-[50px] "></div>
</div>
