<div class='px-[100px] max-2xl:px-[70px] max-xl:px-[60px] max-lg:px-[38px] max-md:px-[35px] max-sm:px-[15px] max-sm:mt-[70px] max-xl:mt-[100px]'>
     @if ($error = session('error'))
        <script>
            toastr.success("{{ $error }}")
        </script>
    @endif
    @if ($success = session('success'))
        <script>
            toastr.success("{{ $success }}")
        </script>
    @endif
    <div class='flex justify-between'>
        <h1 class='font-[jost] xl:text-[20px] font-[400] leading-[25.3px] text-[#353535]'>Search / Lenovo</h1>
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
               .hello-0{
                font-size:10px;
               }
               .hello-1{
                font-size:14px;
               }
               .now{
                width:60px;
                height:60px;
                display: none;
               }
               .amd{
                font-size: 10px;
               }
               .pay{
                font-size: 10px;
               }
               .product-4{
                width: 370px;
               }
               .cros{
                width: 18px;
                height: 18px;
               }
               .laptop-s{
                width:35px;
                height:35px;
               }
               .amd{
                line-height: 0px;
               }
               .head-td{
                font-size: 10px
               }

            }
            @media(min-width:530px){
                .now-1{
                    display: none;
                }
            }
        </style>
        <div class='hello w-[74px] h-[74px]'><img src="/storage/product/iconoir_profile-circle1.svg" alt="Product"></div>
        <div>
            <p class='hello-0 text-[16px] text-[#000000] font-[Inter] font-[400] leadint-[14.52px]'>Hello,</p>
            <h1 class='username text-[20px] text-[#000000] font-[Inter] font-[500] leadint-[24.2px]'>Username Here</h1>
        </div>
    </div>

    <livewire:user-account-menu/>
    <div class='h-[2px] bg-[#764A8733]'></div>


        <div class='my-[25px]'>
            <h1 class='text-[20px] text-[#000000] font-[Inter] font-[500] leading-[24.2px]'>Order History</h1>
        </div>
            <div class="overflow-auto rounded-lg shadow">
                <table class="w-full">
                    <thead class="bg-[#380D37]">
                        <tr>
                            <th class="w-20 p-3 tracking-wide text-left text-[14px] text-[#FFFFFF] font-[jost] font-[500]">Date</th>
                            <th class="w-20 p-3 tracking-wide text-left text-[14px] text-[#FFFFFF] font-[jost] font-[500]">Product Name</th>
                            <th class="w-20 p-3 tracking-wide text-left text-[14px] text-[#FFFFFF] font-[jost] font-[500]">Quantity</th>
                            <th class="w-20 p-3 tracking-wide text-left text-[14px] text-[#FFFFFF] font-[jost] font-[500]">Unit Price</th>
                            <th class="w-20 p-3 tracking-wide text-left text-[14px] text-[#FFFFFF] font-[jost] font-[500]">Total</th>
                            <th class="w-20 p-3 tracking-wide text-left text-[14px] text-[#FFFFFF] font-[jost] font-[500]">Status</th>
                        </tr>
                    </thead>
                    <tbody class="border-b-[1px] border-[#380D37]">
                        @foreach ($orders as $order)
                            @foreach ($order->cart_info as $cart)
                                <tr>
                                    <td class="p-3 tracking-wide text-left text-[14px] whitespace-nowrap text-[#000000] font-[jost] font-[500]">{{$order->created_at->format('d M Y')}}</td>
                                    <td class="p-3 tracking-wide text-left text-[14px] whitespace-nowrap text-[#000000] font-[jost] font-[500]">{{$cart->product->title}}</td>
                                    <td class="p-3 tracking-wide text-left text-[14px] whitespace-nowrap text-[#000000] font-[jost] font-[500]"><span
                                            class="bg-[#F2F2F2] px-8 py-2">{{$cart->quantity}}</span></td>
                                    <td class="p-3 tracking-wide text-left text-[14px] whitespace-nowrap text-[#000000] font-[jost] font-[500]">{{number_format($cart->price)}}৳</td>
                                    <td class="p-3 tracking-wide text-left text-[14px] whitespace-nowrap text-[#000000] font-[jost] font-[500]">{{number_format($cart->amount)}}৳</td>
                                    <td class="p-3 tracking-wide text-left text-[14px] whitespace-nowrap text-[#000000] font-[jost] font-[500]">{{$order->status}}</td>
                                </tr>
                         @endforeach
                          @endforeach
                    </tbody>
                </table>
            </div>
        {{-- <div class='h-[1px] bg-[#380D37]'></div> --}}
        <div class='h-[2px] bg-[#764A8733] mt-[200px]'></div>
    </div>
