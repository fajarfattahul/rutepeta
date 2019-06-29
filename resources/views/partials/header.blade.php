<header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>TSM</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Top Saba Mandiri</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                {{-- <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                </li> --}}
                <!-- Control Sidebar Toggle Button -->
                <li class="nav-item">
                    <a href="{{ route('logout') }}" data-toggle="control-sidebar" 
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out"></i>
                    </a>
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                
                </li>
            </ul>
        </div>

    </nav>
</header>