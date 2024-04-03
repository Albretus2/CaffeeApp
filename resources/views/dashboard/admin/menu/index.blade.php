@extends('dashboard.layouts.main')

@section('container')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                @if ($menus->count())
                    <!-- Left col -->
                    @foreach ($menus as $menu)
                        <a class="col-lg-2 text-decoration-none" href="#" data-bs-toggle="offcanvas"
                            data-bs-target="#{{ $menu->id }}" aria-controls="offcanvasWithBothOptions">
                            <div class="card shadow-sm text-light " style="background-color:rgba(0, 0, 0, .25);border: none;">
                                <div class="body px-3 pt-3">
                                    <div class="row">
                                        <div class="col-md">
                                            <h6 class="">{{ $menu->name }}</h6>
                                            <p>$ {{ $menu->price }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>


                        <div class="offcanvas offcanvas-end bg-dark text-light" data-bs-scroll="true" tabindex="-1"
                            id="{{ $menu->id }}" aria-labelledby="offcanvasWithBothOptionsLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">{{ $menu->name }}</h5>
                                <p type="button" class="" data-bs-dismiss="offcanvas" aria-label="Close"><i
                                        class="fa-solid fa-xmark  fs-4 mt-3" style="color: #FC6736 "></i></p>
                            </div>
                            <div class="offcanvas-body d-flex flex-column gap-4">
                                @if ($menu->image)
                                    <div class="menuImg rounded-4"
                                        style="background-image: url({{ asset('storage/' . $menu->image) }});height:10rem">
                                    </div>
                                @endif
                                <p style="" class="mb-4">{{ $menu->deskripsi }}</p>
                                <form action="/dashboard/menu/{{ $menu->slug }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <div class="option d-flex gap-3">
                                        <a href="/dashboard/menu/{{ $menu->slug }}/edit" class="text-light"><i
                                                class="fa-solid fa-square-pen fs-3"></i></a>
                                        <button class="p-0 bg-transparent border-0 ">
                                            <i class="fa-solid fa-square-minus me-3 fs-3"
                                                style="color: #FC6736 "></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endforeach
                    <!-- right col -->
                @else
                    <div class="row justify-content-center align-items-center flex-column">
                        <img src="{{ asset('assets/img/notFound.png') }}" alt="" style="height: 250px;width:250px"
                            class="mb-4 mt-5">

                        <div class="text-center ">
                            <p>OHH NOO, menu not found</p>
                        </div>
                    </div>
                @endif
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
