<div class='px-[100px] max-2xl:px-[70px] max-xl:px-[60px] max-lg:px-[38px] max-md:px-[35px] max-sm:px-[15px] max-sm:mt-[70px] max-xl:mt-[100px]'>
        <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <div>
        <h1 class='font-[jost] text-[16px] max-sm:text-[14px] font-[400] leading-[25.3px] text-[#353535]'>
            Checkout / Payment
        </h1>
        <div class='h-[2px] bg-[#764A8733]'></div>
    </div>
    <div class="w-[650px] mx-auto max-xl:w-full bg-[#f2f2f2] p-6 mt-6 rounded-lg shadow">
        <div>
            <h1 class="text-center text-[22px] text-[#353535] font-[jost] font-[500]">
                Your order has been placed!
            </h1>
            <p class="items-center text-center text-[14px] text-[#380D37] font-[jost] font-[400] py-[5px] px-[46px]">
                Your order <span class="font-[jost] font-[700]">#{{ $order->order_number }}</span> has been placed
                successfully. Should you
                have any questions about your order, feel free to call us on +8801757773557 (10 AM - 5 PM).
            </p>
        </div>
        <div class="bg-[#fff] rounded-lg shadow p-4 grid grid-cols-2 max-sm:grid-cols-1">
            <div class="flex flex-col">
                <p class="text-[14px] text-[#380D37] font-[jost] font-[700] leading-[22px] mb-[10px]">
                    Delivery Address
                </p>
                <span class="text-[14px] text-[#380D37] font-[jost] font-[400] leading-[22px]">
                    {{ $order->name . ' ' . $order->l_name }}
                </span>
                <span class="text-[14px] text-[#380D37] font-[jost] font-[400] leading-[20px]">
                    {{ $order->address }}, {{ $order->city }}
                </span>
                <span class="text-[14px] text-[#380D37] font-[jost] font-[400] leading-[22px]">
                    {{ $order->divission->name }}
                </span>
                <span class="text-[14px] text-[#380D37] font-[jost] font-[400] leading-[22px]">

                </span>
                <span class="text-[14px] text-[#380D37] font-[jost] font-[400] leading-[22px]">
                    Bangladesh
                </span>
                <span class="text-[14px] text-[#380D37] font-[jost] font-[400] leading-[20px] my-[25px]">
                    Mobile: {{ $order->phone }}
                </span>
            </div>
            <div class="flex justify-end max-sm:justify-start">
                <table>
                    <thead>
                        <tr class="text-[14px] text-[#380D37] font-[jost] font-[700] leading-[20px]">
                            <th
                                class="py-[5px] px-6 max-sm:pl-0 max-sm:pr-6 text-[14px] text-[#380D37] font-[jost] font-[700] leading-[20px]">
                                Order Summary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td
                                class="py-[5px] px-6 max-sm:pl-0 max-sm:pr-6 text-[14px] text-[#380D37] font-[jost] font-[400] leading-[20px] whitespace-nowrap">
                                Sub-Total
                            </td>
                            <td
                                class="py-[5px] px-6 max-sm:pl-0 max-sm:pr-6 text-[14px] text-[#380D37] font-[jost] font-[400] leading-[20px] whitespace-nowrap text-left">
                                {{ $order->sub_total }}৳
                            </td>
                        </tr>
                        <tr>
                            <td
                                class="py-[5px] px-6 max-sm:pl-0 max-sm:pr-6 text-[14px] text-[#380D37] font-[jost] font-[400] leading-[20px] whitespace-nowrap">
                                {{ $order->shipping->type }}
                            </td>
                            <td
                                class="py-[5px] px-6 max-sm:pl-0 max-sm:pr-6 text-[14px] text-[#380D37] font-[jost] font-[400] leading-[20px] whitespace-nowrap flex justify-end">
                                {{ $order->shipping->price }}৳
                            </td>
                        </tr>
                        <tr>
                            <td
                                class="py-[5px] px-6 max-sm:pl-0 max-sm:pr-6 text-[14px] text-[#380D37] font-[jost] font-[400] leading-[20px] whitespace-nowrap">
                                Total
                            </td>
                            <td
                                class="py-[5px] text-right px-6 max-sm:pl-0 max-sm:pr-6 text-[14px] text-[#380D37] font-[jost] font-[400] leading-[20px] whitespace-nowrap">
                                {{ $toal = $order->amount ?? '00' }}৳
                            </td>
                        </tr>
                        <tr>

                        </tr>
                        <tr class="border-b-[1px] border-[#764A8733]">
                            <td
                                class="py-[5px] px-6 max-sm:pl-0 max-sm:pr-6 text-[14px] text-[#380D37] font-[jost] font-[400] leading-[20px] whitespace-nowrap">
                                Amount Paid
                            </td>
                            <td
                                class="py-[5px] text-right px-6 max-sm:pl-0 max-sm:pr-6 text-[14px] text-[#380D37] font-[jost] font-[400] leading-[20px] whitespace-nowrap">
                                00৳
                            </td>
                        </tr>
                        <tr>
                            <td
                                class="py-[5px] text-right px-6 max-sm:pl-0 max-sm:pr-6 text-[14px] text-[#380D37] font-[jost] font-[400] leading-[20px] whitespace-nowrap">
                                Due
                            </td>
                            <td
                                class="py-[5px] px-6 text-right max-sm:pl-0 max-sm:pr-6 text-[14px] text-[#380D37] font-[jost] font-[400] leading-[20px] whitespace-nowrap">
                                {{ $toal }}৳
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="my-4 border-b-[2px] border-[#764A8733]">
            <p class="text-[14px] text-[#380d37] font-[jost] font-[700] mb-3">
                Want to Pay Now? Please read carefully
            </p>
            <span class="text-[14px] text-[#380d37] font-[jost] font-[400]">
                After payment before agent confirmation, some products may not be delivered due to stock problems. To
                get refund, refund charge will be applicable and it will take 5 to 15 working days to process the
                refund. So we are encouraging you to pay after our agent's confirmation to avoid any inconveniences.
            </span>
        </div>
        {{-- @dd($order) --}}
        {{-- <div class='h-[2px] bg-[#764A8733]'></div> --}}
        @if ($order->payment_method == 'online')
            <div class="flex justify-end gap-4">
                <button id="sslczPayBtn"
                        token="if you have any token validation"
                        postdata="your javascript arrays or objects which requires in backend"
                        order="If you already have the transaction generated for current order"
                        endpoint="{{ url('/pay-via-ajax') }}"
                    class="px-[30px] py-[10px] border-[2px] border-[#380D37] text-[#380D37] text-[14px] font-[jost] font-[500] rounded-[4px]">Pay
                    Now</button>
                <a href="#" id="play-Later"
                    class="px-[30px] py-[10px] border-[2px] border-[#380D37] bg-gradient-to-r from-[#380D37] to-[#DC275C] text-[#f2f2f2] text-[14px] font-[jost] font-[500] rounded-[4px]">Pay
                    Later</a>
            </div>
        @endif

    </div>

    <div class="w-[650px] max-xl:w-full mx-auto p-3 my-[15px] bg-[#f2f2f2] rounded-lg shadow">
        <div
            class="flex justify-between max-sm:justify-start max-sm:items-start max-sm:flex-col items-center mb-4 max-sm:gap-[20px]">
            <div>
                <h1 class="text-[14px] text-[#380d37] font-[jost] font-[700] mb-3">
                    Have a minute?
                </h1>
                <p class="text-[14px] text-[#380d37] font-[jost] font-[400]">
                    Like us on <span>Facebook</span> to keep you up to date with all our offers and announcements.
                </p>
            </div>
            <a class="flex justify-center itmes-center">
                <div>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="facebook"
                            class="w-[40px] h-[40px]">
                            <path fill="#1976D2"
                                d="M14 0H2C.897 0 0 .897 0 2v12c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2V2c0-1.103-.897-2-2-2z">
                            </path>
                            <path fill="#FAFAFA" fill-rule="evenodd"
                                d="M13.5 8H11V6c0-.552.448-.5 1-.5h1V3h-2a3 3 0 0 0-3 3v2H6v2.5h2V16h3v-5.5h1.5l1-2.5z"
                                clip-rule="evenodd">
                            </path>
                        </svg>
                    </span>
                </div>
               <a href="{{}}">
                 <div class="bg-[#fff] leading-5 max-sm:flex max-sm:flex-col">
                    <span class="text-blue-900 text-[14px] font-[jost] font-[700]">Find us on</span>
                    <span class="text-blue-900 text-[18px] font-[jost] font-[700]">Facebook</span>
                </div>
               </a>
            </a>
        </div>
        <div class='h-[2px] bg-[#764A8733]'></div>
        <div class="my-4">
            <span class="text-[14px] text-[#380d37] font-[jost] font-[400]">
                You may return product if you find any manufacturing flaw in it. You have 24 hours after delivery to
                return us the product. If it does not reach our office within 24 hours it will be considered as a
                warranty issue. The product should be returned with box and other included accessories. It has to be
                claimed by physically coming to the relative branch of Star Tech.
            </span>
        </div>

    </div>
        {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>


    <!-- If you want to use the popup integration, -->
    <script>
        var obj = {};
        obj.order_id = '{{$order->id}}';


        $('#sslczPayBtn').prop('postdata', obj);


        (function(window, document) {
            var loader = function() {
                var script = document.createElement("script"),
                    tag = document.getElementsByTagName("script")[0];
                // script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR LIVE
                script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(
                    7); // USE THIS FOR SANDBOX
                tag.parentNode.insertBefore(script, tag);
            };

            window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload",
                loader);
        })(window, document);
    </script>
</div>
@script
    <script>
        $(document).ready(function() {
            $("#sslczPayBtn").on('click', function() {
                $(this).addClass("bg-gradient-to-r from-[#380D37] to-[#DC275C] text-[#f2f2f2]");
                $("#play-Later").removeClass("bg-gradient-to-r from-[#380D37] to-[#DC275C] text-[#f2f2f2]");
                $("#play-Later").addClass("text-[#380D37]");
            });

            $("#play-Later").on('click', function() {
                $(this).addClass("bg-gradient-to-r from-[#380D37] to-[#DC275C] text-[#f2f2f2]");
                $("#sslczPayBtn").removeClass("bg-gradient-to-r from-[#380D37] to-[#DC275C] text-[#f2f2f2]");
                $("#sslczPayBtn").addClass("text-[#380D37]");
            })

        })
    </script>


@endscript
