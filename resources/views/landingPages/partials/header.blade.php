<header id="header" id="home">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-sm-4 col-8 header-top-right no-padding">

                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="/"><img src="{{ asset('style_landingPages/img/logo.png') }}" alt=""
                        title="" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#home">Home</a></li>
                    <li><a href="/news">News</a></li>
                    <li><a href="/gallery">Gallery</a></li>
                    <li><a href="#blog">Blog</a></li>
                    @auth
                        <li><a href="/dashboard">Dashboard</a></li>
                    @else
                        <li><a href="/login">Login</a></li>
                    @endauth
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->
