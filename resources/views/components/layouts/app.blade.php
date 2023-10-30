<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ? $title." || ": ''}} {{ENV('APP_NAME')}}</title>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/dist/output.css">
        <link rel="icon" href="/storage/product/Logo.svg" type="img/svg">
    </head>
    <body>
        <!------- Header Section -->
            @livewire('header')
        <!-------header-section-end----->

        <!--------- Nav Section -->
            @livewire('nav')
        <!----------nav-end---------->

        {{ $slot }}

         @livewire('footer')
         <script type="text/javascript" src="/dist/tailwind-umd.min.js"></script>
         {{-- <script type="text/javascript" src="/node_modules/tw-elements/dist/js/tw-elements.umd.min.js"></script> --}}
    </body>
</html>
