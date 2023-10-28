<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@stack('title') || {{ENV('APP_NAME')}}</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <script defer src="/dist/alpine.js"></script>
    <link rel="stylesheet" href="/dist/output.css">
    <link rel="icon" href="/product/figma.png" type="img/svg">

</head>
<body>
    


    <!-- ---------------footer--section----end---------- -->


    <!-- Javascript code -->

    <script type="text/javascript" src="../node_modules/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script>
        // set the default active slide to the first one
        let slideIndex = 1;
        showSlide(slideIndex);

        // change slide with the prev/next button
        function moveSlide(moveStep) {
            showSlide(slideIndex += moveStep);
        }

        // change slide with the dots
        function currentSlide(n) {
            showSlide(slideIndex = n);
        }

        function showSlide(n) {
            let i;
            const slides = document.getElementsByClassName("slide");
            const dots = document.getElementsByClassName('dot');

            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }

            // hide all slides
            for (i = 0; i < slides.length; i++) {
                slides[i].classList.add('hidden');
            }

            // remove active status from all dots
            for (i = 0; i < dots.length; i++) {
                dots[i].classList.remove('bg-yellow-500');
                dots[i].classList.add('bg-green-600');
            }

            // show the active slide
            slides[slideIndex - 1].classList.remove('hidden');

            // highlight the active dot
            dots[slideIndex - 1].classList.remove('bg-green-600');
            dots[slideIndex - 1].classList.add('bg-yellow-500');
        }
    </script>
</body>

</html>
