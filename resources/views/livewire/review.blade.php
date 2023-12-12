<div class="px-[100px] mt-[150px]">
    <style>
        .menu-toggle1 {
            cursor: pointer;
            padding: 15px;
            position: absolute;
            top: 5px;
            left: 20px;
            z-index: 2;
            background: #fff
        }

        .bar {
            width: 30px;
            height: 3px;
            background-color: #fff;
            margin: 6px 0;
            transition: 0.4s;
        }

        /* @media (max-width:640px) {
            .bar {
                width: 20px;
                height: 2px;
                margin: 3px 0;
            }

            .menu-toggle {
                top: 0px;
            }

            .menu {
                top: 50px !important;
                width: 200px !important;
            }

            .menu-toggle.active .bar:nth-child(1) {
                transform: rotate(-45deg) translate(-5px, 5px) !important;
            }

            .menu-toggle.active .bar:nth-child(2) {
                opacity: 0;
            }

            .menu-toggle.active .bar:nth-child(3) {
                transform: rotate(45deg) translate(-2px, -2px) !important;
            }
        } */

        .menu1 {
            position: fixed;
            top: 66px;
            left: 300px;
            width: 300px;
            height: 100vh;
            background-color: white;
            z-index: 1;
            overflow: scroll;
            transition: 0.5s;
        }


        /* .menu1 ul {
            list-style: none;
            text-align: center;
        } */

        /* .menu1 a {
            text-decoration: none;
            color: #353535;
            font-size: 16px;
        } */

        /* .menu-toggle.active .bar:nth-child(1) {
            transform: rotate(-45deg) translate(-7px, 5px);
        }

        .menu-toggle.active .bar:nth-child(2) {
            opacity: 0;
        }

        .menu-toggle.active .bar:nth-child(3) {
            transform: rotate(45deg) translate(-7px, -7px);
        } */

        .active.menu1 {
            left: 0px !important;
            color: #fff;
        }
    </style>
    <div class="menu-toggle1 flex flex-col items-center">
        <div class="w-[25px] h-[2px] bg-[#380D37] my-[2px]"></div>
        <div class="w-[18px] h-[2px] bg-[#380D37] my-[2px]" ></div>
        <div class="w-[10px] h-[2px] bg-[#380D37] my-[2px]"></div>
    </div>
     <div class="menu1  w-40 h-40 bg-slate-600">
          <div>
            <h1 class="text-white">I am sumon</h1>
          </div>
     </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var menuToggle = document.querySelector('.menu-toggle1');
            var menu = document.querySelector('.menu1');

            menuToggle.addEventListener('click', function(event) {
                event.stopPropagation(); //
                menuToggle.classList.toggle('active');
                menu.classList.toggle('active');
                toggleBodyOverflow(); // 
            });

            document.addEventListener('click', function(event) {
                var isClickInsideMenu = menu.contains(event.target);
                var isClickOnMenuToggle = menuToggle.contains(event.target);

                if (!isClickInsideMenu && !isClickOnMenuToggle) {
                    menu.classList.remove('active');
                    menuToggle.classList.remove('active');
                    toggleBodyOverflow(); // Reset body overflow
                }
            });

            function toggleBodyOverflow() {
                // Check if menu is active and adjust body overflow
                if (menu.classList.contains('active')) {
                    document.body.style.overflow = 'hidden';
                } else {
                    document.body.style.overflow = '';
                }
            }
        });
    </script>
</div>