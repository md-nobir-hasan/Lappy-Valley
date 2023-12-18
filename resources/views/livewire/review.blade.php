<div class="px-30 mt-20">
    <style>
        .menu-container {
            position: relative;
            display: inline-block;
            cursor: pointer;
        }

        .menu {
            display: none;
            position: absolute;
            list-style: none;
            padding: 0;
            margin: 0;
            background-color: #380d;
            border: 1px solid #ccc;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .menu li {
            padding: 8px;
            cursor: pointer;
        }

        .toggle-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            border: 1px solid #ccc;
            border-radius: 50%;
            transition: background-color 0.3s ease;
        }

        .toggle-btn .minus {
            display: none;
        }

        .toggle-btn.active {
            background-color: black;
        }
    </style>
    <div class="menu-container">
        <div class="toggle-btn" id="toggleBtn">
            <svg class="plus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="12" y1="5" x2="12" y2="19"></line>
                <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>
            <svg class="minus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                style="display: none;">
                <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>
        </div>
        <ul class="menu">
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
        </ul>
    </div>
    <script>
        $(document).ready(function() {
            $('#toggleBtn').click(function() {
                $('.menu').toggle();
                $('.toggle-btn .plus, .toggle-btn .minus').toggle();
            });
        });
    </script>

</div>
