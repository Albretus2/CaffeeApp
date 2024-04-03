 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-dark border-0 mt-3 mb-3 bg-dark">
     <!-- Left navbar links -->
     <ul class="navbar-nav ">
         <li class="nav-item active">
             {{-- untuk memunculkan tombol back ketika masuk ke halaman create atau edit --}}
             @if (request()->is('dashboard/*/*'))
                 <a href="{{ url()->previous() }}"><i
                         class="fa-solid fa-arrow-left-long nav-link text-md text-bold ms-3 fs-4"></i></a>
             @else
                 <h5 class="nav-link text-md text-bold ms-3 fw-5" style="margin-top: 1rem;" data-widget="pushmenu"
                     role="button">
                     @if (request()->is('dashboard/menu*'))
                         Manage Menu -
                     @elseif (request()->is('dashboard/reservasi*'))
                         Manage Reservasi -
                     @elseif(request()->is('dashboard/gallery*'))
                         Manage Gallery -
                     @elseif(request()->is('dashboard/user*'))
                         Manage User -
                     @elseif(request()->is('dashboard/news*'))
                         Manage News -
                     @else
                         DASHBOARD -
                     @endif
                 </h5>
             @endif
         </li>
     </ul>

     <!-- Right navbar links -->
     {{-- create section --}}
     <ul class="navbar-nav ms-auto ">
         {{-- untuk create menu --}}
         @if (request()->is('dashboard/menu'))
             <li class="nav-item active me-2">
                 <a href="/dashboard/menu/create" class="border-0 text-light shadow-none " style="font-size: 1.7rem"><i
                         class="bi bi-plus-square me-2"></i></a>
             </li>
             {{-- untuk create gallery --}}
         @elseif (request()->is('dashboard/gallery'))
             <li class="nav-item active me-2">
                 <a class="border-0 text-light shadow-none " data-bs-toggle="offcanvas" data-bs-target="#createGallery"
                     aria-controls="offcanvasRight" style="font-size: 1.7rem;cursor:pointer"><i
                         class="bi bi-plus-square me-2"></i></a>
             </li>
             {{-- untuk create user --}}
         @elseif (request()->is('dashboard/user'))
             <li class="nav-item active me-2">
                 <a href="/dashboard/user/create" class="border-0 text-light shadow-none " style="font-size: 1.7rem"><i
                         class="bi bi-plus-square me-2"></i></a>
             </li>
         @elseif (request()->is('dashboard/news'))
             <li class="nav-item active me-2">
                 <a href="/dashboard/news/create" class="border-0 text-light shadow-none " style="font-size: 1.7rem"><i
                         class="bi bi-plus-square me-2"></i></a>
             </li>
         @endif

         {{-- search section --}}
         @if (request()->is('dashboard'))
             <li class="nav-item me-4">
                 <p>Hello, {{ auth()->user()->name }}</p>
             </li>
         @endif

         @if (request()->is('dashboard/*/*'))
         @elseif(request()->is('dashboard/menu*'))
             <!-- Navbar Search  menu -->
             <li class="nav-item me-3">
                 <form action="/dashboard/menu" role="search">
                     <div class="input-group">
                         <input type="search" name="searcing" value="{{ request('searcing') }}"
                             class="search form-control shadow-none border-0 rounded-1 bg-black text-light"
                             placeholder="Search menu ..." aria-label="Search" aria-describedby="basic-addon1"
                             style="background-color: white">
                     </div>
                 </form>
             </li>
         @elseif(request()->is('dashboard/user*'))
             <!-- Navbar Search user -->
             <li class="nav-item me-3">
                 <form action="/dashboard/user" role="search">
                     <div class="input-group">
                         <input type="search" name="searcing" value="{{ request('searcing') }}"
                             class="search form-control shadow-none border-0 rounded-1 bg-black text-light"
                             placeholder="Search user ..." aria-label="Search" aria-describedby="basic-addon1"
                             style="background-color: white">
                     </div>
                 </form>
             </li>
         @elseif(request()->is('dashboard/gallery*'))
             <!-- Navbar Search gallery -->
             <li class="nav-item me-3">
                 <form action="/dashboard/gallery" role="search">
                     <div class="input-group">
                         <input type="search" name="searcing" value="{{ request('searcing') }}"
                             class="search form-control shadow-none border-0 rounded-1 bg-black text-light"
                             placeholder="Search image ..." aria-label="Search" aria-describedby="basic-addon1"
                             style="background-color: white">
                     </div>
                 </form>
             </li>
         @elseif(request()->is('dashboard/news*'))
             <!-- Navbar Search News -->
             <li class="nav-item me-3">
                 <form action="/dashboard/news" role="search">
                     <div class="input-group">
                         <input type="search" name="searcing" value="{{ request('searcing') }}"
                             class="search form-control shadow-none border-0 rounded-1 bg-black text-light"
                             placeholder="Search News ..." aria-label="Search" aria-describedby="basic-addon1"
                             style="background-color: white">
                     </div>
                 </form>
             </li>
         @endif

     </ul>
 </nav>
 <!-- /.navbar -->
