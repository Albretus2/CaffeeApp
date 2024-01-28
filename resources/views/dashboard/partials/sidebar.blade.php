<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4 bg-dark shadow-md" style="overflow: hidden;">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link text-decoration-none border-0 mb-4 mt-4 justify-content-center d-flex">
        <img src="{{ asset('assets/img/loog.png') }}" alt="Caffee Logo" class="brand-image">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/dashboard"
                        class="nav-link {{ Request::is('dashboard') ? 'bg-black' : '' }} mb-2 text-light"
                        style="padding: 0.8rem;">

                        <i class="nav-icon fas fa-torii-gate" style="margin-right: 1rem;"></i>
                        <p class="side-text">
                            Dashboard
                        </p>
                    </a>
                </li>
                @cannot('user')
                    <li class="nav-item">
                        <a href="/dashboard/menu"
                            class="nav-link  {{ Request::is('dashboard/menu*') ? 'bg-black' : '' }} mb-2 text-light"
                            style="padding: 0.8rem;">

                            <i class="nav-icon fa-solid fa-table-list" style="margin-right: 1rem;"></i>
                            <p class="side-text">
                                Kelola Menu
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/dashboard/reservasi"
                            class="nav-link  {{ Request::is('dashboard/reservasi*') ? 'bg-black' : '' }} mb-2 text-light"
                            style="padding: 0.8rem;">
                            <i class="nav-icon fa-solid fa-clipboard-list" style="margin-right: 1rem;"></i>

                            <p class="side-text">
                                Reservasi
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/dashboard/gallery"
                            class="nav-link  {{ Request::is('dashboard/gallery*') ? 'bg-black' : '' }} mb-2 text-light"
                            style="padding: 0.8rem;">
                            <i class="nav-icon fa-brands fa-trello" style="margin-right: 1rem;"></i>
                            <p class="side-text">
                                Kelola Gallery
                            </p>
                        </a>
                    </li>
                @endcannot
                <li class="nav-item">
                    <a href="/home" class="nav-link mb-2 text-light" style="padding: 0.8rem;">
                        <i class="nav-icon fas fa-door-closed" style="margin-right: 1rem;"></i>
                        <p class="side-text">Home Page</p>
                    </a>
                </li>
                <li class="nav-item">
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="nav-link text-start text-light border border-danger" style="padding:0.8rem;"
                            type="submit" name="submit">
                            <i class="nav-icon fas fa-right-from-bracket" style="margin-right: 1rem;"></i>
                            <p class="side-text">
                                Logout
                            </p>
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
