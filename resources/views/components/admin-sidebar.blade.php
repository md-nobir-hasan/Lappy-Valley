@foreach ($side_menus as $smenu)
    <div>
        <!-- Heading -->
        <div class="sidebar-heading">
            {{ $smenu['title'] }}
        </div>
        @foreach ($smenu['child'] as $menu)
            @if ($menu['child'])
                <li class="nav-item {{request()->routeIs($menu['route']) ? 'active' : ''}}">
                    {{-- @dd($menu) --}}
                    <a class="nav-link {{request()->routeIs($menu['route']) ? '' : 'collapsed'}}" href="#" data-toggle="collapse" data-target="#n{{$loop->parent->index.$loop->index}}"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-image"></i>
                        <span>{{ $menu['title'] }}</span>
                    </a>
                    <div id="n{{$loop->parent->index.$loop->index}}" class="collapse {{request()->routeIs($menu['route']) ? 'show' : ''}}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="py-2 bg-white rounded collapse-inner">
                            <h6 class="collapse-header">{{Str::singular($menu['title'])}} Options:</h6>
                            @foreach ($menu['child'] as $fm)
                                <a class="collapse-item" href="{{ route($fm['route']) }}">{{ $fm['title'] }}</a>
                            @endforeach
                        </div>
                    </div>

                </li>
            @else
                <li class="nav-item {{request()->routeIs($menu['route']) ? 'active' : ''}}">
                    <a class="nav-link active" href="{{ route($menu['route']) }}">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>{{ $menu['title'] }}</span></a>
                </li>
            @endif
        @endforeach

        {{-- <!-- Nav Item - Pages Collapse Menu -->
        <!-- Nav Item - Charts -->



        <li class="nav-item ">
            <a class="nav-link collapsed " href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-image"></i>
                <span>Banners</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="py-2 bg-white rounded collapse-inner">
                    <h6 class="collapse-header">Banner Options:</h6>
                    <a class="collapse-item" href="{{ route('banner.index') }}">Banners</a>
                    <a class="collapse-item" href="{{ route('banner.create') }}">Add Banners</a>
                </div>
            </div>
        </li> --}}
        <!-- Divider -->
        <hr class="sidebar-divider">
    </div>
@endforeach
