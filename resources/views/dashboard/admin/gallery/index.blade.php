@extends('dashboard.layouts.main')

@section('container')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            @if (session()->has('create'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('create') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('delete'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('delete') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('update'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('update') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <!-- Main row -->
            <div class="row">

                @if ($gallerys->count())
                @else
                    <div class="row justify-content-center text-center">
                        <img src="{{ asset('assets/img/morning.png') }}" alt="" style="height: 250px;width:250px"
                            class="mb-4 mt-5">
                        <p>OHH NOO, data tidak ditemukan</p>
                    </div>
                @endif
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
