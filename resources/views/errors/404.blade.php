<!DOCTYPE html>
<html lang="en">

<head>

    @include('backend.layouts.head')

</head>

<body class="xl:px-[50px]">

        <div class="text-center">
            <a href="{{ route('home') }}">
                <img class="object-cover w-full" src="/storage/photos/404.jpg" alt="">
            </a>
        </div>


    @include('backend.layouts.footer')

</body>

</html>
