<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ? $title . ' || ' : '' }} {{ ENV('APP_NAME') }}</title>
    {{-- <link rel="stylesheet" href="/frontend/css/fonts/jost-font/Jost-VariableFont_wght.ttf"> --}}
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,500;1,100&family=Noto+Sans+Bengali:wght@900&display=swap" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('dist/toastr/toastr.css') }}">
    <link rel="stylesheet" href="{{ asset('library/tailwind-eliment/te.min.css') }}">
    <script type="text/javascript" src="{{ asset('dist/toastr/tastr-helper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('dist/toastr/toastr.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('library/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/owl-carousel-libraries/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('dist/output.css') }}">
    <link rel="icon" href="{{ asset('storage/product/Logo.svg') }}" type="img/svg">
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
    <div>
        @livewire('nav')
        
    </div>
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
                const p_id = $(this).prop('id');
                $.ajax({
                    type: "get",
                    url: "{{ route('add_to_cart') }}",
                    data: {
                        pid: p_id
                    },
                    dataType: "json",
                    success: function(response) {
                        sc.show(500);
                        if (response.msg) {
                            toastr.error(response.msg);
                        } else {
                            console.log(response);

                            const product = `
                                <div x-data="{ qty: 1,price:'${response.price}', subtotal:'${response.amount}', cp_show:true,
                                    mplus() {
                                         if(this.qty>= 5){
                                            toastr.warning('You cant add more then 5 products');
                                            return false;
                                        }
                                        const pq = ++this.qty; const stotal = pq*this.price;
                                        total = total - this.subtotal + stotal; this.subtotal = stotal;

                                         $.ajax({
                                                url:'{{ route('plus') }}',
                                                method:'get',
                                                data:{id:${response.id}},
                                                success:function(res){
                                                    if(res.msg){
                                                        toastr.warning($res.msg)
                                                    }else{
                                                        console.log('Successfully decrease quantity')
                                                    }
                                                }
                                            });
                                    }, mminus() {
                                        if(this.qty <= 1){
                                            toastr.warning('You cant remove all quantity');
                                            return false;
                                        }
                                        const mq =  --this.qty; const stotal = mq*this.price;
                                        total = total - this.subtotal + stotal; this.subtotal = stotal;
                                         $.ajax({
                                                url:'{{ route('minus') }}',
                                                method:'get',
                                                data:{id:${response.id}},
                                                success:function(res){
                                                    if(res.msg){
                                                        toastr.warning($res.msg)
                                                    }else{
                                                        console.log('Successfully decrease quantity')
                                                    }
                                                }
                                            });

                                    },addtototal(){
                                        total = Number(total) + Number(this.price);
                                        console.log(total,Number(this.price),'I am addtototal()');
                                    },removeProd(){

                                        $.ajax({
                                                url:'{{ route('delete') }}',
                                                method:'get',
                                                data:{id:${response.id},mt:'Cart'},
                                                success:(res)=>{
                                                    if(res.msg){
                                                        toastr.warning(res.msg)
                                                    }else{
                                                        total = total - this.subtotal;
                                                        this.cp_show = false;
                                                    }
                                                }
                                            });
                                    } }" x-show='cp_show'
                                    class='cart-product flex justify-around mt-[10px] border-t-[#3535354D] border-t-[2px] border-b-[#3535354D] border-b-[2px] py-[10px] px-[5px] gap-[10px]'>

                                    <input type="hidden" name="cps[${cart_product_no}][product_id]"
                                        value="${response.product_id}">
                                    <input type="hidden" name="cps[${cart_product_no}][qty]"
                                        value="${response.id}">
                                    <span x-init="addtototal" class='hidden'></span>
                                    <div class='flex items-center'>
                                        <img class="w-[80px] h-[px]" src="${response.product.photo ? response.product.photo.split(',')[0] : '/backend/img/thumbnail-default.jpg' }"
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
                                            <span @click="mminus"
                                                class='cplus text-[#380D37] h-[19.231px] border-[#380D37] border-r-[2px] pr-[5px] flex items-center cursor-pointer  text-center'>-</span>
                                            <span x-text="qty"
                                            class='text-[#380D37] h-[19.231px] w-[40px] border-[#380D37] border-r-[2px]  flex items-center  justify-center'
                                                >

                                            </span>
                                            <span @click="mplus"
                                                class='cplus text-[#380D37] h-[19.231px] pr-[5px] flex items-center cursor-pointer text-center'>+</span>
                                        </div>
                                        <div>
                                            <p class='text-[#353535] text-[16px] font-[jost] font-[500] text-center'>
                                                <span x-text="qty"></span> x <span class='text-[#DC275C]' x-text="mFormat(Number(price))"></span>
                                                TAKA
                                            </p>

                                        </div>
                                    </div>

                                    <div>
                                        <span @click="removeProd" class="cursor-pointer cart_prd_delete">
                                            <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>`;

                            $('#side_cart_body').append(product);

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

        // admin panel redirection
        document.addEventListener('keydown', function(event) {
            // Check if Shift and 'L' keys are pressed simultaneously
            if (event.shiftKey && event.key === 'L') {
                // Redirect to the login page
                window.location.href =
                    '{{ route('login') }}'; // Replace '/login' with the actual URL of your login page
            }
        });
    </script>
    <script src="{{asset('frontend/owl-carousel-libraries/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('library/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('library/tailwind-eliment/te.min.js') }}"></script>
    <!-- Initialize Swiper -->
</body>

</html>
