<div>
    <style>
    .search-bar {
    display: none;
    width: 200px;
    padding: 5px;
    margin-top: 10px;
    border: 1px solid #ccc;
    }
    </style>
    {{-- </head>
<body> --}}

    <!-- Search Icon -->
    <div id="search-icon">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="11" cy="11" r="6"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
        </svg>
    </div>

    <!-- Search Bar -->
    <div id="search-bar" class="search-bar">
        <input type="text" placeholder="Search...">
    </div>

    {{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> --}}
    <script>
        $(document).ready(function() {
            // Toggle search bar when clicking the search icon
            $("#search-icon").click(function() {
                $("#search-bar").slideToggle();
                // Toggle the icon (replace with your own SVG code)
                $(this).html(function(_, oldHtml) {
                    return oldHtml.includes("circle") ?
                        '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="6"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>' :
                        '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="6"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>';
                });
            });
        }); 
    </script>
        </div>
