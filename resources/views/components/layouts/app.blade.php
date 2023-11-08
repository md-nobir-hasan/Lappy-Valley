<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ? $title." || ": ''}} {{ENV('APP_NAME')}}</title>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/dist/toastr/toastr.css">
        <script type="text/javascript" src="/dist/toastr/tastr-helper.js"></script>
        <script type="text/javascript" src="/dist/toastr/toastr.js"></script>
        {{$styles ?? ''}}
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
        <!-------header-section-end----->

        <!--------- Nav Section -->
            @livewire('nav')
        <!----------nav-end---------->

        {{ $slot }}

         @livewire('footer')

        {{-- <script type="text/javascript" src="/dist/tailwind-umd.min.js"></script> --}}
        {{$script ?? ''}}
    </body>
</html>
