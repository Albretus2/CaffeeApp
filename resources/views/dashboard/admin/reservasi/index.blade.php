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
                @if ($reservasi->count())
                    <!-- Left col -->
                    @foreach ($reservasi as $r)
                        <div class="col-md-4">
                            <div class="card shadow-sm text-light border-0 p-3" style="background-color:rgba(0, 0, 0, .25)">
                                <div class="row">
                                    <div class="col-md-3 me-3 " style="border-right: 0.2rem white solid">
                                        <h1 style="font-size:4rem;">{{ $r->table }}</h1>
                                        <div class="d-flex justify-content-around pt-2"
                                            style="border-top: 0.2rem white solid">
                                            <a data-bs-toggle="modal" data-bs-target="#{{ $r->id }}"
                                                class="text-secondary fs-5"><i class="fa-solid fa-file-pen"></i></a>
                                            <form action="{{ route('reservasi.destroy', $r->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="text-danger fs-5 bg-transparent shadow-none border-0 p-0"
                                                    type="submit"><i class="fa-solid fa-trash-can"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <h6>Name : {{ $r->user->name }}</h6>
                                        <h6>Date : {{ $r->date }}</h6>
                                        <h6>Time : {{ $r->time }}</h6>
                                        <h6>Status : <span
                                                class="@if ($r->status == 'selesai') text-success @else text-warning @endif">{{ $r->status }}</span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="{{ $r->id }}" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content bg-dark">
                                    <div class="modal-body">
                                        <form action="{{ route('reservasi.update', $r->id) }}" method="POST">
                                            @method('put')
                                            @csrf
                                            <label for="status">Status</label>
                                            <select class="form-select" id="status" aria-label="Default select example"
                                                name="status">
                                                @foreach (['diproses', 'selesai'] as $s)
                                                    <option value="{{ $s }}">
                                                        {{ $s }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <button type="submit" class="btn btn-light col mt-2">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- Modal -->


                    <!-- right col -->
                @else
                    <div class="row justify-content-center text-center">
                        <img src="{{ asset('assets/img/morning.png') }}" alt="" style="height: 250px;width:250px"
                            class="mb-4 mt-5">
                        <p>OHH NOO, Reservasi tidak ditemukan</p>
                    </div>
                @endif

            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
