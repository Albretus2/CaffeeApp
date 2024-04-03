@extends('dashboard.layouts.main')

@section('container')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                @if ($gallery->count())
                    {{-- overall col --}}
                    @foreach ($gallery as $item)
                        <div class="col-lg-3">
                            <div class="card card-gambar shadow-sm rounded-4"
                                style="background-image: url({{ asset('storage/' . $item->image) }})">
                                <div class="card-body d-flex" style="flex-direction: column">
                                    <div class="menuBar py-2 px-3 rounded-4 d-flex justify-content-between bg-light">
                                        <p class="m-0">{{ $item->title }}</p>
                                        <form action="/dashboard/gallery/{{ $item->id }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <div>
                                                <a style="margin-right: ;cursor: pointer;" data-bs-toggle="offcanvas"
                                                    data-bs-target="#{{ $item->id }}" aria-controls="offcanvasRight"><i
                                                        class="fa-solid fa-square-pen fs-4 text-dark"></i></a>
                                                <button type="submit" class="border-0 shadow-none bg-transparent p-0"><i
                                                        class="fa-solid fa-square-minus fs-4" style="color: #FC6736 "></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Offcanvas untuk edit Gallery --}}
                        <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="{{ $item->id }}"
                            aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-body px-4 d-flex flex-column">
                                <div class="judul pb-4 " style="border-bottom: 2px dashed white">
                                    <h1>Edit your <strong style="color: #FC6736">Image</strong> in
                                        Gallery</h1>
                                </div>
                                <form action="/dashboard/gallery/{{ $item->id }}" method="POST" class="mt-5"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="title" class="text-secondary">Title</label>
                                        <input type="text" name="title" id="titleEdit"
                                            class="form-control shadow-none border-1 border-light bg-dark rounded-4"
                                            value="{{ old('title', $item->title) }}">
                                    </div>
                                    <div class="mb-5">
                                        <input type="file" name="image"
                                            class="form-control shadow-none border-1 border-light bg-dark rounded-4">
                                    </div>
                                    <button type="submit" class="btn btn-light rounded-4 col">Update Image</button>
                                </form>
                                <p class="text-center mt-auto text-secondary" style="font-size: 0.8rem">CaffeApp.</p>
                            </div>
                        </div>
                        {{-- End Offcanvas edit Gallery --}}
                    @endforeach
                    {{-- end col --}}
                @else
                    <div class="row justify-content-center text-center">
                        <img src="{{ asset('assets/img/notFound.png') }}" alt="" style="height: 250px;width:250px"
                            class="mb-4 mt-5">
                        <p>OHH NOO, image not found</p>
                    </div>
                @endif
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->

        {{-- Offcanvas untuk Create Gallery --}}
        <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="createGallery"
            aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-body px-4 d-flex flex-column">
                <div class="judul pb-4 " style="border-bottom: 2px dashed white">
                    <h1 class="text-secondary">Create New <strong class="text-light">Image</strong> in Gallery</h1>
                </div>
                <form action="/dashboard/gallery" method="POST" class="mt-5" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="text-secondary">Title</label>
                        <input type="text" name="title" id="title"
                            class="form-control shadow-none border-1 border-light bg-dark rounded-4">
                    </div>
                    <div class="mb-5">
                        <input type="file" name="image"
                            class="form-control shadow-none border-1 border-light bg-dark rounded-4">
                    </div>
                    <button type="submit" class="btn btn-light rounded-4 col">Create new Image</button>
                </form>
                <p class="text-center mt-auto text-secondary" style="font-size: 0.8rem">CaffeApp.</p>
            </div>
        </div>
        {{-- End Offcanvas Create Gallery --}}
    </section>
    <!-- /.content -->

@endsection
