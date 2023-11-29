@foreach ($side_menus as $smenu)

    @canany($smenu['access'])
        <div>
            <!-- Heading -->
            <div class="sidebar-heading">
                {{ $smenu['title'] }}
            </div>
            @foreach ($smenu['child'] as $menu)
                @if ($menu['child'])
                    @can($menu['access'])
                        <li class="nav-item {{ request()->routeIs($menu['route']) ? 'active' : '' }}">
                            {{-- @dd($menu) --}}
                            <a class="nav-link {{ request()->routeIs($menu['route']) ? '' : 'collapsed' }}" href="#"
                                data-toggle="collapse" data-target="#n{{ $loop->parent->index . $loop->index }}"
                                aria-expanded="true" aria-controls="collapseTwo">
                                <i class="fas fa-image"></i>
                                <span>{{ $menu['title'] }}</span>
                            </a>
                            <div id="n{{ $loop->parent->index . $loop->index }}"
                                class="collapse {{ request()->routeIs($menu['route']) ? 'show' : '' }}"
                                aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                <div class="py-2 bg-white rounded collapse-inner">
                                    <h6 class="collapse-header">{{ Str::singular($menu['title']) }} Options:</h6>
                                    @foreach ($menu['child'] as $fm)
                                    @can($fm['access'])
                                        <a class="collapse-item" href="{{ route($fm['route']) }}">{{ $fm['title'] }}</a>
                                    @endcan
                                    @endforeach
                                </div>
                            </div>

                        </li>
                    @endcan
                @else
                    @can($menu['access'])
                        <li class="nav-item {{ request()->routeIs($menu['route']) ? 'active' : '' }}">
                            <a class="nav-link active" href="{{ route($menu['route']) }}">
                                <i class="fas fa-fw fa-chart-area"></i>
                                <span>{{ $menu['title'] }}</span></a>
                        </li>
                    @endcan
                @endif
            @endforeach

            <hr class="sidebar-divider">
        </div>
    @endcanany
@endforeach
