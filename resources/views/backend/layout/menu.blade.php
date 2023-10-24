<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
        <img src="{{ asset('') }}adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Web Instan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item">
                <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                    Dashboard
                    <!-- <i class="right fas fa-angle-left"></i> -->
                    </p>
                </a>
                </li>
                <li class="nav-item">
                    <a href="/control/aboutus" class="nav-link {{ Request::is('control/aboutus*') ? 'active' : '' }}">
                    <i class="nav-icon far fa-address-card"></i>
                    <p>
                        About Us
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/control/profile" class="nav-link {{ Request::is('control/profile*') ? 'active' : '' }}">
                    <i class="nav-icon far fa-user"></i>
                    <p>
                        Profile
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/control/news" class="nav-link {{ Request::is('control/news*') ? 'active' : '' }}">
                    <i class="nav-icon far fa-newspaper"></i>
                    <p>
                        News
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Facility
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Gallery
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon far fa-envelope"></i>
                    <p>
                        Contact
                    </p>
                    </a>
                </li>
                <li class="nav-header">Settings</li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>