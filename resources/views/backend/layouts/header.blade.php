<nav class="mb-4 bg-white shadow navbar navbar-expand navbar-light topbar static-top">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="mr-3 btn btn-link rounded-circle">
      <i class="fa fa-bars"></i>
    </button>
    <a href="{{route('storage.link')}}"  class="mr-3 btn btn-outline-warning btn-sm">
        Storage Link
    </a>
    <a href="{{route('cache.clear')}}"  class="mr-3 btn btn-outline-danger btn-sm">
      Cache Clear
    </a>

    <!-- Topbar Navbar -->
    <ul class="ml-auto navbar-nav">

      <!-- Nav Item - Search Dropdown (Visible Only XS) -->
      <li class="nav-item dropdown no-arrow d-sm-none">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-search fa-fw"></i>
        </a>
        <!-- Dropdown - Messages -->
        <div class="p-3 shadow dropdown-menu dropdown-menu-right animated--grow-in" aria-labelledby="searchDropdown">
          <form class="mr-auto form-inline w-100 navbar-search">
            <div class="input-group">
              <input type="text" class="border-0 form-control bg-light small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
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
      <li class="mx-1 nav-item dropdown no-arrow">
        {{-- <a class="nav-link dropdown-toggle" href="{{route('home')}}" target="_blank" data-toggle="tooltip" data-placement="bottom" title="home"  role="button"> --}}
          <i class="fas fa-home fa-fw"></i>
        </a>
      </li>

      <!-- Nav Item - Alerts -->
      <li class="mx-1 nav-item dropdown no-arrow">
       @include('backend.notification.show')
      </li>

      <!-- Nav Item - Messages -->
      <li class="mx-1 nav-item dropdown no-arrow" id="messageT" data-url="{{route('messages.five')}}">
        @include('backend.message.message')
      </li>

      <div class="topbar-divider d-none d-sm-block"></div>

      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 text-gray-600 d-none d-lg-inline small">{{Auth()->user()->name}}</span>
          @if(Auth()->user()->photo)
            <img class="img-profile rounded-circle" src="{{Auth()->user()->photo}}">
          @else
            <img class="img-profile rounded-circle" src="{{asset('backend/img/avatar.png')}}">
          @endif
        </a>
        <!-- Dropdown - User Information -->
        <div class="shadow dropdown-menu dropdown-menu-right animated--grow-in" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="{{route('admin-profile')}}">
            <i class="mr-2 text-gray-400 fas fa-user fa-sm fa-fw"></i>
            Profile
          </a>
          <a class="dropdown-item" href="{{route('change.password.form')}}">
            <i class="mr-2 text-gray-400 fas fa-key fa-sm fa-fw"></i>
            Change Password
          </a>
          <a class="dropdown-item" href="{{route('settings')}}">
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

  </nav>
