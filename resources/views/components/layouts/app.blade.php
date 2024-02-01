<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ? $title . ' || ' : '' }} {{ ENV('APP_NAME') }}</title>
    <link rel="icon" href="{{ asset('storage/product/Logo.svg') }}" type="img/svg">
    <link rel="stylesheet" href="{{ asset('dist/toastr/toastr.css') }}">
    <link rel="stylesheet" href="{{ asset('library/tailwind-eliment/te.min.css') }}">
    <script type="text/javascript" src="{{ asset('dist/toastr/tastr-helper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('dist/toastr/toastr.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('library/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/owl-carousel-libraries/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/output.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/cstyle.css') }}">

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
   <div>
    @livewire('header')
   </div>

    {{-- cart section  --}}
    @livewire('cart')

    <!-------header-section-end----->

    <!--------- Nav Section -->
    <div>
        @livewire('nav')
    </div>
    <!----------nav-end---------->

    {{ $slot }}

    @livewire('footer')


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
    <script src="{{ asset('frontend/owl-carousel-libraries/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('library/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('library/tailwind-eliment/te.min.js') }}"></script>
    <!-- Initialize Swiper -->
</body>

</html>
