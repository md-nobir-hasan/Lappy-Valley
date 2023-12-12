<div class="px-[200px] mt-[100px]">
    <style>
           body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Menu Icon and Close Icon Styles */
        #menu-icon, #close-icon {
            cursor: pointer;
        }

        /* Menu Styles */
        #menu {
            position: fixed;
            top: 0;
            right: -300px; /* Start off-screen */
            width: 300px;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
           
            z-index: 10000;
            transition: right 0.3s ease; /* Animation transition */
        }

        /* Your Menu Content Styles */
        #menu-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>
<div>
    <h1>
        i am sumon
    </h1>
</div>
    <!-- Menu Icon -->
    <div id="menu-icon">☰</div>

    <!-- Menu -->
    <div id="menu">
        <div id="menu-content">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <!-- Close Icon -->
            <div id="close-icon">✕</div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            var menu = $("#menu");

            // Show menu when clicking on the menu icon
            $("#menu-icon").click(function() {
                menu.css("right", "0");
                // $(this).addClass('blur-none')
                $("body").css("filter", "blur()");
            });

            // Hide menu when clicking on the close icon
            $("#close-icon").click(function() {
                menu.css("right", "-300px");
                $("body").css("filter", "none");
            });

            // Hide menu when clicking outside the menu
            $(document).mouseup(function(e) {
                if (!menu.is(e.target) && menu.has(e.target).length === 0) {
                    menu.css("right", "-300px");
                    $("body").css("filter", "none");
                }
            });
        });
    </script>

</div>
