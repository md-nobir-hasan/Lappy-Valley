<nav class="mb-4 bg-white shadow navbar navbar-expand navbar-light topbar static-top d-flex justify-content-between">

    <div>
        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="mr-3 btn btn-link rounded-circle">
            <i class="fa fa-bars"></i>
        </button>
        <a href="{{ route('storage.link') }}" class="mr-3 btn btn-outline-warning btn-sm">
            Storage Link
        </a>
        <a href="{{ route('cache.clear') }}" class="mr-3 btn btn-outline-danger btn-sm">
            Cache Clear
        </a>
    </div>

    <div class="ml-auto mt-3" style="padding-top: 10px; padding-bottom: 10px">
        <h4>{{ Carbon\Carbon::now()->format('d M Y') }}</h4>
        <h4 id="clock" class="font-weight-bolder text-center"></h4>
    </div>

    <!-- Topbar Navbar -->
    <ul class="ml-auto navbar-nav">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div class="p-3 shadow dropdown-menu dropdown-menu-right animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="mr-auto form-inline w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="border-0 form-control bg-light small" placeholder="Search for..."
                            aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        {{-- Home page --}}
        <li class="m-auto mx-1 nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="{{ route('admin') }}" target="_blank" data-toggle="tooltip"
                data-placement="bottom" title="home" role="button">
                <i class="fas fa-home fa-fw"></i>
            </a>
        </li>

        <!-- Nav Item - Alerts -->
        <li class="mx-1 nav-item dropdown no-arrow">
            @include('backend.notification.show')
        </li>

        <!-- Nav Item - Messages -->
        <li class="mx-1 nav-item dropdown no-arrow" id="messageT" data-url="{{ route('messages.five') }}">
            @include('backend.message.message')
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 text-gray-600 d-none d-lg-inline small">{{ Auth()->user()->name }}</span>
                @if (Auth()->user()->photo)
                    <img class="img-profile rounded-circle" src="{{ Auth()->user()->photo }}">
                @else
                    <img class="img-profile rounded-circle" src="{{ asset('backend/img/avatar.png') }}">
                @endif
            </a>
            <!-- Dropdown - User Information -->
            <div class="shadow dropdown-menu dropdown-menu-right animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ route('admin-profile') }}">
                    <i class="mr-2 text-gray-400 fas fa-user fa-sm fa-fw"></i>
                    Profile
                </a>
                <a class="dropdown-item" href="{{ route('change.password.form') }}">
                    <i class="mr-2 text-gray-400 fas fa-key fa-sm fa-fw"></i>
                    Change Password
                </a>
                <a class="dropdown-item" href="{{ route('setting.ss') }}">
                    <i class="mr-2 text-gray-400 fas fa-cogs fa-sm fa-fw"></i>
                    Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    <i class="mr-2 text-gray-400 fas fa-sign-out-alt fa-sm fa-fw"></i> {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>

    </ul>
    <script>
        // function startTimer() {
        //     let currentTime = new Date();
        //     let hours = currentTime.getHours();
        //     let minutes = currentTime.getMinutes();
        //     let seconds = currentTime.getSeconds();
        //     let amPm = hours >= 12 ? "PM" : "AM";

        //     hours = hours % 12 || 12; // Handle 0 hours for 12 AM
        //     minutes = minutes < 10 ? "0" + minutes : minutes; // Add leading zero for minutes
        //     seconds = seconds < 10 ? "0" + seconds : seconds; // Add leading zero for seconds

        //     let formattedTime = hours + ":" + minutes + ":" + seconds + " " + amPm;

        //     document.getElementById("clock").textContent = formattedTime;

        //     setInterval(startTimer, 1000); // Update timer every second
        // }

        // startTimer(); // Start the timer initially
    </script>
</nav>
