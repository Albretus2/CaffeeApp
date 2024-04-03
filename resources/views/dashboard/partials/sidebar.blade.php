<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4 bg-dark shadow-md" style="overflow: hidden;">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link text-decoration-none border-0 mb-4 mt-4 justify-content-center d-flex">
        <img src="{{ asset('assets/img/loog.png') }}" alt="Caffee Logo" class="brand-image">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2 d-flex">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item mb-1">
                    <a href="/dashboard"
                        class="nav-link {{ Request::is('dashboard') ? 'bg-black' : '' }} mb-2 text-light d-flex gap-4"
                        style="padding: 0.8rem;">

                        <i class="fas fa-torii-gate fs-4" style="color: #FC6736"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>


                @cannot('user')
                    <li class="nav-item">
                        <a class="nav-link mb-2 text-light d-flex gap-4" style="padding: 0.8rem;cursor: pointer;">
                            <i class="fa-solid fa-hashtag fs-4 text-warning"></i>
                            <p>Manage CRUD</p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('super_admin')
                                <li class="nav-item mb-1">
                                    <a href="/dashboard/user"
                                        class="nav-link  {{ Request::is('dashboard/user*') ? 'bg-black' : '' }} mb-2 text-light d-flex gap-3 ps-4 align-items-center"
                                        style="padding: 0.8rem;">
                                        <i class="fa-regular fa-address-card fs-5"></i>
                                        <span>
                                            User
                                        </span>
                                    </a>
                                </li>
                            @endcan
                            <li class="nav-item mb-1">
                                <a href="/dashboard/menu"
                                    class="nav-link  {{ Request::is('dashboard/menu*') ? 'bg-black' : '' }} mb-2 text-light d-flex align-items-center gap-3 ps-4"
                                    style="padding: 0.8rem;">
                                    <i class="fa-regular fa-rectangle-list fs-5"></i>
                                    <p>
                                        Menu
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item mb-1">
                                <a href="/dashboard/gallery"
                                    class="nav-link  {{ Request::is('dashboard/gallery*') ? 'bg-black' : '' }} mb-2 text-light d-flex align-items-center gap-3 ps-4"
                                    style="padding: 0.8rem;">
                                    <i class="fa-regular fa-image fs-5"></i>
                                    <p>
                                        Gallery
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item mb-1">
                                <a href="/dashboard/news"
                                    class="nav-link  {{ Request::is('dashboard/news*') ? 'bg-black' : '' }} mb-2 text-light d-flex align-items-center gap-3 ps-4"
                                    style="padding: 0.8rem;">
                                    <i class="fa-regular fa-newspaper fs-5"></i>
                                    <p>
                                        News
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item mb-1">
                        <a href="/dashboard/reservasi"
                            class="nav-link  {{ Request::is('dashboard/reservasi*') ? 'bg-black' : '' }} mb-2 text-light d-flex gap-4"
                            style="padding: 0.8rem;">
                            <i class=" fa-solid fa-clipboard-list fs-4"></i>

                            <p>
                                Reservations
                            </p>
                        </a>
                    </li>
                @endcannot
                <li class="nav-item mb-1">
                    <a href="/home" class="nav-link mb-2 text-light d-flex gap-4" style="padding: 0.8rem;">
                        <i class="fa-solid fa-square-arrow-up-right fs-4"></i>
                        <p>Home Page</p>
                    </a>
                </li>

                <li class="nav-item">
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="nav-link text-start text-light" style="padding:0.8rem;border:solid 2px #FC6736"
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
