<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ? $title . ' || ' : '' }} {{ ENV('APP_NAME') }}</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/dist/toastr/toastr.css">
    <script type="text/javascript" src="/dist/toastr/tastr-helper.js"></script>
    <script type="text/javascript" src="/dist/toastr/toastr.js"></script>
    {{ $styles ?? '' }}
    <link rel="stylesheet" href="/dist/output.css">
    <link rel="icon" href="/storage/product/Logo.svg" type="img/svg">

</head>

<body>
    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        // Display an info toast with no title
        // toastr.info('Are you the 6 fingered man?')
        // toastr.success( 'Miracle Max Says')
    </script>
    <!------- Header Section -->
    @livewire('header')
    @livewire('cart')
    <!-------header-section-end----->

    <!--------- Nav Section -->
    @livewire('nav')
    <!----------nav-end---------->

    {{ $slot }}

    @livewire('footer')

    {{-- Jquery --}}
    <script>
        $(document).ready(function() {
            const sc = $('#side_cart');
            // sc.hide();

            //close side cart
            $('#side_cart_close').on('click', function() {
                sc.hide(500);
            });
            let cart_product_no = $('.cart-product').length - 1;

            //open cart by clicking on add to cart
            $('.add-to-cart').on('click', function() {
                cart_product_no += 1;
                // let index = $(this).index('.add-to-cart');
                // $('#cart_count').text(Number($('#cart_count').text()) + 1)
                // const pd = $(`.product_div:eq(${index})`);
                // const ptitle = pd.find('.ptitle').text();
                // const img_path = pd.find('.pimg').prop('src');
                // const pprice = pd.find('.pprice').text();
                // const price = Number(pd.find('.pprice').attr('value'));
                // const p_id = $(this).prop('id');
                $.ajax({
                    type: "get",
                    url: "{{route('add_to_cart')}}",
                    data: {pid:p_id},
                    dataType: "json",
                    success: function (response) {
                        if(response==2){
                            toastr.error("Can't add to cart");
                        }else if(response == 3){
                            toastr.error('This product is out of stock')
                        }else{
                            const product = `
                                <div x-data="{ qty: 1,price:'${response.product.price}', subtotal:'${response.product.price}', cp_show:true,
                                    mplus() {
                                        const pq = ++this.qty; const stotal = pq*this.price;
                                        total = total - this.subtotal + stotal; this.subtotal = stotal;
                                    }, minus() {
                                    const mq =  --this.qty; const stotal = mq*this.price;
                                    total = total - this.subtotal + stotal; this.subtotal = stotal;
                                    },addtototal(){

                                            total = Number(total) + Number(this.price);
                                            console.log(total,Number(this.price),'I am addtototal()');
                                    } }" x-show='cp_show'
                                    class='cart-product flex justify-around mt-[10px] border-t-[#3535354D] border-t-[2px] border-b-[#3535354D] border-b-[2px] py-[10px] px-[5px] gap-[10px]'>

                                    <input type="hidden" name="cps[${cart_product_no}][product_id]"
                                        value="${response.product_id}">
                                    <input type="hidden" name="cps[${cart_product_no}][qty]"
                                        value="${$response.id}">
                                    <span x-init="addtototal" class='hidden'></span>
                                    <div class='flex items-center'>
                                        <img class="w-[80px] h-[px]" src="${response.product.photo}"
                                            alt="${response.product.title}">
                                    </div>

                                    <div>
                                        <div>
                                            <p class='text-[12px] text-[#380D37] font-[jost] font-[500]'>
                                                ${response.product.title}
                                            </p>
                                        </div>
                                        <div
                                            class='border-[#380D37] w-[85px] h-[19.231px] border-[2px] rounded-[4px] my-[10px] flex items-center justify-around'>
                                            <span @click="minus" wire:click="removeQty(${response.id})"
                                                class='text-[#380D37] h-[19.231px] border-[#380D37] border-r-[2px] pr-[5px] flex items-center cursor-pointer  text-center'>-</span>
                                            <span x-text="qty"
                                            class='text-[#380D37] h-[19.231px] w-[40px] border-[#380D37] border-r-[2px]  flex items-center  justify-center'
                                                >

                                            </span>
                                            <span @click="mplus" wire:click="addQty(${response.id})"
                                                class='text-[#380D37] h-[19.231px] pr-[5px] flex items-center cursor-pointer text-center'>+</span>
                                        </div>
                                        <div>
                                            <p class='text-[#353535] text-[16px] font-[jost] font-[500] text-center'>
                                                <span x-text="qty"></span> x <span class='text-[#DC275C]' x-text="mFormat(Number(price))"></span>

                                                    TAKA
                                            </p>

                                        </div>
                                    </div>

                                    <div>
                                        <span  @clik='()=>{
                                            $wire.delete(${response.id});
                                            cp_show = false;
                                        }'  class="cursor-pointer cart_prd_delete">
                                            <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>`;

                            $('#side_cart_body').append(product);
                            sc.show(500);
                        }
                    }
                });


            })
        })

    </script>

    {{-- Global function  --}}
    <script>
        function mFormat(money) {
            return Number(money).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,");
            //  {{-- (Number(price)).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') --}}
            //                         {{-- (new Intl.NumberFormat('BD',{style:'currency',currency:'BDT'})).format(245390) --}}
        }
    </script>
    {{-- <script type="text/javascript" src="/dist/tailwind-umd.min.js"></script> --}}
    {{ $script ?? '' }}

</body>

</html>
