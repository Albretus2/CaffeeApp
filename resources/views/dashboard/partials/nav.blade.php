 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-dark border-0 mt-3 mb-3 bg-dark">
     <!-- Left navbar links -->
     <ul class="navbar-nav ">
         <li class="nav-item active">
             {{-- <i class="bi bi-arrow-bar-right nav-link fs-2 ms-2" data-widget="pushmenu" role="button"
                 style="margin-top: -1rem;"></i> --}}
             @if (request()->is('dashboard/menu/create') || request()->is('dashboard/*/edit'))
                 <a href="{{ url()->previous() }}"><i
                         class="fa-solid fa-arrow-left-long nav-link text-md text-bold ms-3 fs-4"></i></a>
             @else
                 <h5 class="nav-link text-md text-bold ms-3 fw-5" style="margin-top: 1rem;" data-widget="pushmenu"
                     role="button">
                     @if (request()->is('dashboard/menu*'))
                         Kelola Menu -
                     @elseif (request()->is('dashboard/reservasi*'))
                         Reservasi -
                     @elseif(request()->is('dashboard/gallery*'))
                         Kelola Gallery -
                     @else
                         DASHBOARD -
                     @endif

                 </h5>
             @endif



         </li>
     </ul>

     <!-- Right navbar links -->
     <ul class="navbar-nav ms-auto ">
         @if (request()->is('dashboard/menu'))
             <li class="nav-item active me-2">
                 <a href="/dashboard/menu/create" class="border-0 text-light shadow-none "
                     style="background-color: #292929;font-size: 1.7rem"><i class="bi bi-plus-square me-2"
                         class="mb-3"></i></a>
             </li>
         @endif

         @if (request()->is('dashboard'))
             <li class="nav-item me-4">
                 <p>Hello, {{ auth()->user()->name }}</p>
             </li>
         @else
             <!-- Navbar Search -->
             <li class="nav-item me-3">
                 <form action="/dashboard/menu" role="search">
                     <div class="input-group">
                         <input type="search" name="searcing"
                             class="search form-control shadow-none border-0 rounded-1 bg-black text-light"
                             placeholder="Search..." aria-label="Search" aria-describedby="basic-addon1"
                             style="background-color: white">
                     </div>
                 </form>
             </li>
         @endif

     </ul>
 </nav>
 <!-- /.navbar -->
