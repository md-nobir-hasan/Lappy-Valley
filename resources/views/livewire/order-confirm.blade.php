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
    <livewire:user-account-menu/>
    <div class='h-[2px] bg-[#764A8733]'></div>


        <div class='my-[25px]'>
            <h1 class='text-[20px] text-[#000000] font-[Inter] font-[500] leading-[24.2px]'>Order History</h1>
        </div>
            <div class="overflow-auto rounded-lg shadow">
                <table class="w-full max-sm:w-[750px]">
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
