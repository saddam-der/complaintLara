<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        @if(Auth::guard('petugas')->check())
                        <a class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}" href="{{ route('beranda.petugas') }}">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                        @endif
                        @if(Auth::guard('user')->check())
                        <a class="nav-link" href="{{url('/dashboard')}}">
                            <i class="ni ni-air-baloon text-primary"></i>
                            <span class="nav-link-text">Lapor !</span>
                        </a>
                        @endif
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="icons.html">
                            <i class="ni ni-planet text-orange"></i>
                            <span class="nav-link-text">Icons</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="map.html">
                            <i class="ni ni-pin-3 text-primary"></i>
                            <span class="nav-link-text">Google</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('admin/profile') ? 'active' : '' }}" href="{{ route('profile.petugas') }}">
                            <i class="ni ni-single-02 text-yellow"></i>
                            <span class="nav-link-text">Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        @if(Auth::guard('petugas')->check())
                        <a class="nav-link {{ request()->is('siswa') ? 'active' : '' }}" href="{{ url('siswa')}}">
                            <i class="ni ni-bullet-list-67 text-default"></i>
                            <span class="nav-link-text">Tables</span>
                        </a>
                        @endif
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="login.html">
                            <i class="ni ni-key-25 text-info"></i>
                            <span class="nav-link-text">Login</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.html">
                            <i class="ni ni-circle-08 text-pink"></i>
                            <span class="nav-link-text">Register</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="upgrade.html">
                            <i class="ni ni-send text-dark"></i>
                            <span class="nav-link-text">Upgrade</span>
                        </a>
                    </li> --}}
                </ul>
                <!-- Divider -->
                <hr class="my-3">
                <!-- Heading -->
                <h6 class="navbar-heading p-0 text-muted">
                    <span class="docs-normal">Documentation</span>
                </h6>
                <!-- Navigation -->
                
            </div>
        </div>
    </div>
</nav>
