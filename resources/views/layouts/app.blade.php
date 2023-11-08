<!DOCTYPE html>
<html lang="en">
<head>
    {{-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frontend || {{ENV('APP_NAME')}}</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <script defer src="/dist/alpine.js"></script>
    <link rel="stylesheet" href="/dist/output.css">
    <link rel="icon" href="/product/figma.png" type="img/svg"> --}}


    @livewireStyles
</head>
<body>
    {{ $slot }}

    @livewireScripts

    {{-- <script type="text/javascript" src="../node_modules/tw-elements/dist/js/tw-elements.umd.min.js"></script> --}}
</body>
</html>
