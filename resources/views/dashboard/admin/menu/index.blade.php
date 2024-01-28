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
                        <div class="offcanvas offcanvas-start bg-dark text-light" data-bs-scroll="true" tabindex="-1"
                            id="{{ $menu->id }}" aria-labelledby="offcanvasWithBothOptionsLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">{{ $menu->name }}</h5>
                                <p type="button" class="" data-bs-dismiss="offcanvas" aria-label="Close"><i
                                        class="fa-solid fa-xmark text-danger  fs-4 mt-3"></i></p>
                            </div>
                            <div class="offcanvas-body">
                                <p style="font-size: 0.8rem" class="mb-4">{{ $menu->deskripsi }}</p>
                                <div class="row p-0 ">
                                    <div class="col-1 me-2"> <a href="/dashboard/menu/{{ $menu->slug }}/edit"
                                            class="text-light rounded-1"><i class="fa-solid fa-pen-to-square fs-5"></i></a>
                                    </div>
                                    <div class="col-1">
                                        <form action="/dashboard/menu/{{ $menu->slug }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class="p-0 bg-transparent border-0 text-danger"><i
                                                    class="fa-solid fa-trash-can me-3 fs-5"></i></button>
                                        </form>
                                    </div>
                                </div>


                            </div>
                        </div>
                    @endforeach
                    <!-- right col -->
                @else
                    <div class="row justify-content-center text-center">
                        <img src="{{ asset('assets/img/morning.png') }}" alt="" style="height: 250px;width:250px"
                            class="mb-4 mt-5">
                        <p>OHH NOO, menu tidak ditemukan</p>
                    </div>
                @endif
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
