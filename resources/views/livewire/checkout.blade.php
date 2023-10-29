 <div class="container mx-auto">
        <div class=>
            <h1 class='font-[jost] xl:text-[20px] font-[400] leading-[25.3px] text-[#353535]'>Shopping Cart/ Checkout
            </h1>
            <div class='h-1 bg-[#764A8733]'></div>
        </div>
        <!-- -------------check-out--section----------- -->

        <section class="flex  gap-[50px] my-[30px]">
            <div class="w-[550px]">
                <form class="border-[3px] border-[#380D37] rounded-[5px] p-[20px]">
                    <div class="flex gap-[15px] font-[jost] font-[600] text-center">
                        <div class="w-[25px] h-[25px] bg-[#000] text-[#fff] rounded-[100%] text-center mt-[5px]">
                            <h1>1</h1>
                        </div>
                        <div>
                            <h1 class="text-[#380D37] text-[24px] font-[jost] font-[600] tracking-[.5px] text-center">
                                Customer Information</h1>
                        </div>
                    </div>
                    <div class="flex gap-[15px] my-[10px]">
                        <div>
                            <label class="block font-[jost] font-[500] text-[#353535] text-[16px]" for="text">First
                                Name*</label>
                            <input
                                class="py-[10px] pl-[10px] pr-[50px] border-[2px] border-[#380D37] italic rounded-[4px] text-[16px] text-[#C4C4C4]"
                                type="text" placeholder="First Name*">
                        </div>
                        <div>
                            <label class="block font-[jost] font-[500] text-[#353535] text-[16px]" for="text">Last
                                Name*</label>
                            <input
                                class="py-[10px] pl-[10px] pr-[50px] border-[2px] border-[#380D37] italic rounded-[4px] text-[16px] text-[#C4C4C4]"
                                type="text" placeholder="Last Name*">
                        </div>
                    </div>
                    <div class="my-[10px]">
                        <label class="block font-[jost] font-[500] text-[#353535] text-[16px]"
                            for="text">Address*</label>
                        <input
                            class="py-[10px] pl-[10px] pr-[312px] border-[2px] border-[#380D37] italic rounded-[4px] text-[16px] text-[#C4C4C4]"
                            type="text" placeholder="Address*">
                    </div>
                    <div class="my-[10px]">
                        <label class="block font-[jost] font-[500] text-[#353535] text-[16px]"
                            for="number">Mobile*</label>
                        <input
                            class="py-[10px] pl-[10px] pr-[312px] border-[2px] border-[#380D37] italic rounded-[4px] text-[16px] text-[#C4C4C4]"
                            type="number" placeholder="Mobile Number*">
                    </div>
                    <div class="my-[10px]">
                        <label class="block font-[jost] font-[500] text-[#353535] text-[16px]"
                            for="email">Email:</label>
                        <input
                            class="py-[10px] pl-[10px] pr-[312px] border-[2px] border-[#380D37] italic rounded-[4px] text-[16px] text-[#C4C4C4]"
                            type="email" placeholder="Email:">
                    </div>
                    <div class="flex gap-[15px] my-[10px]">
                        <div>
                            <label class="block font-[jost] font-[500] text-[#353535] text-[16px]"
                                for="city">City*</label>
                            <input
                                class="py-[10px] pl-[10px] pr-[50px] border-[2px] border-[#380D37] italic rounded-[4px] text-[16px] text-[#C4C4C4]"
                                type="text" placeholder="City*">
                        </div>
                        <div>
                            <label class="block font-[jost] font-[500] text-[#353535] text-[16px]"
                                for="place">Zone*</label>
                            <select
                                class=" py-[12.5px] pl-[10px] pr-[110px] border-[2px] rounded-[4px] italic border-[#380D37] text-[#C4C4C4]">
                                <option value="Dhaka City">Dhaka City</option>
                                <option value="Khulna City">Khulna City</option>
                                <option value="Rajshahi City">Rajshahi City</option>
                                <option value="sylhet city">sylhet city"</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label class="block font-[jost] font-[500] text-[#353535] text-[16px]"
                            for="">Comment:</label>
                        <input
                            class="pt-[10px] pb-[80px] pl-[10px] pr-[312px] border-[2px] border-[#380D37] italic rounded-[4px] text-[16px] text-[#C4C4C4]"
                            type="text" placeholder="comment">
                    </div>
                </form>
            </div>

            <!-- -----------------form--end--------------- -->
            <div>
                <div class="flex gap-[30px]">

                    <div class="border-[#380D37] border-[3px] rounded-[4px] p-[20px]">

                        <div class="flex gap-[15px] font-[jost] font-[600] text-center my-[10px]">
                            <div class="w-[25px] h-[25px] bg-[#000] text-[#fff] rounded-[100%] text-center mt-[5px]">
                                <h1>2</h1>
                            </div>
                            <div>
                                <h1
                                    class="text-[#380D37] text-[24px] font-[jost] font-[600] tracking-[.5px] text-center">
                                    Payment Method</h1>
                            </div>
                        </div>
                        <div class="my-[10px]">
                            <h1 class="text-[#353535] text-[20px] font-[jost] font-[500]">Select Payment Method</h1>
                        </div>
                        <div class="my-[10px]">
                            <input class="w-[20px] h-[20px]" type="radio" value="Cash on Delivery">
                            <label class="text-[#353535] text-[20px] font-[jost] font-[500]" for="#">Cash on
                                Delivery</label>
                        </div>
                        <div class="my-[10px]">
                            <input class="w-[20px] h-[20px]" type="radio">
                            <label class="text-[#353535] text-[20px] font-[jost] font-[500]" for="">POS on
                                Delivery</label>
                        </div>
                        <div class="my-[10px]">
                            <input class="text-[#000] w-[20px] h-[20px]" type="radio" value="">
                            <label class="text-[#353535] text-[20px] font-[jost] font-[500]" for="">Online
                                Payment</label>
                        </div>

                        <div>
                            <div class="my-[10px]">
                                <h1 class="text-[#353535] text-[20px] font-[jost] font-[500]">We Accept:</h1>
                            </div>
                            <div class="my-[10px]">
                                <img src="../dist/img/account-icons.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- -----------------payment--method end--------------------------- -->
                    <div>
                        <div class="border-[#380D37] border-[3px] rounded-[4px] p-[20px]">

                            <div class="flex gap-[15px] font-[jost] font-[600] text-center my-[10px]">
                                <div
                                    class="w-[25px] h-[25px] bg-[#000] text-[#fff] rounded-[100%] text-center mt-[5px]">
                                    <h1>3</h1>
                                </div>
                                <div>
                                    <h1
                                        class="text-[#380D37] text-[24px] font-[jost] font-[600] tracking-[.5px] text-center">
                                        Delivery Method</h1>
                                </div>
                            </div>
                            <div class="my-[10px]">
                                <h1 class="text-[#353535] text-[20px] font-[jost] font-[500]">Select Delivery Method
                                </h1>
                            </div>
                            <div class="my-[10px]">
                                <input class="w-[20px] h-[20px]" type="radio" value="Cash on Delivery">
                                <label class="text-[#353535] text-[20px] font-[jost] font-[500]" for="#">Home
                                    Delivery - 60 Taka/label>
                            </div>
                            <div class="my-[10px]">
                                <input class="w-[20px] h-[20px]" type="radio">
                                <label class="text-[#353535] text-[20px] font-[jost] font-[500]" for="">Store
                                    Pickup- 0 Taka</label>
                            </div>
                            <div class="my-[10px]">
                                <input class="text-[#000] w-[20px] h-[20px]" type="radio" value="">
                                <label class="text-[#353535] text-[20px] font-[jost] font-[500]"
                                    for="">Request Express delivery - 120 Taka</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ------------------delivery method end --------------------------- -->

                <!-- ----------order-view--section-------- -->
                <div class="border-[#380D37] border-[3px] rounded-[5px] mt-[20px] pl-[20px] pt-[20px] pr-[20px]">
                    <div class="flex gap-[15px] font-[jost] font-[600] text-center my-[10px]">
                        <div class="w-[25px] h-[25px] bg-[#000] text-[#fff] rounded-[100%] text-center mt-[5px]">
                            <h1>4</h1>
                        </div>
                        <div>
                            <h1 class="text-[#380D37] text-[24px] font-[jost] font-[600] tracking-[.5px] text-center">
                                Order Overview</h1>
                        </div>
                    </div>
                    <div>
                        <table class="text-[#380D37] text-[14px] font-[jost] font-[400] w-full text-left text-">
                            <tr class="border-b-[rgba(0_0_0_0.20)] border-b-[1px] py-[20px]">
                                <th>Product Name</th>
                                <th class="text-center py-[10px]">Price</th>
                                <th class="text-right">Total</th>
                            </tr>
                            <tbody>
                                <tr class="border-b-[rgba(0_0_0_0.20)] border-b-[1px] font-[jost] font-[400]">
                                    <td class="text-[14px] py-[10px]">Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB,
                                        Brand New Cloud grey</td>
                                    <td class="text-left">1,50,000 Taka x 1</td>
                                    <td class="text-right text-[#DC275C]">1,50,000 Taka</td>
                                </tr>
                                <tr class="border-b-[rgba(0_0_0_0.20)] border-b-[1px] font-[jost] font-[400]">
                                    <td></td>
                                    <td class="text-right py-[10px]">Sub Total:</td>
                                    <td class="text-right text-[#DC275C]">1,50,000 Taka</td>
                                </tr>
                                <tr class="border-b-[rgba(0_0_0_0.20)] border-b-[1px] font-[jost] font-[400]">
                                    <td></td>
                                    <td class="text-right py-[10px]">Delivery Charge:</td>
                                    <td class="text-right text-[#DC275C]">60 Taka</td>
                                </tr>
                                <tr class="border-b-[rgba(0_0_0_0.20)] border-b-[1px] font-[jost] font-[400]">
                                    <td></td>
                                    <td class="text-right py-[10px]">Total:</td>
                                    <td class="text-right text-[#DC275C]">1,50,060 Taka</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
