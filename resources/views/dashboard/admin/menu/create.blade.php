@extends('dashboard.layouts.main')

@section('container')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid ">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="font-size:3rem;">Create New Menu</h1>
                    <h5 style="font-size: 1rem;margin:0.6rem 0 0.8rem 0;color:#bababa">make the menu you like</h5>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <form action="/dashboard/menu" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row justify-content-between">
                    <div class="col-lg-4 ">
                        <div class="mb-3 ">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" autocomplete="off"
                                class="form-control shadow-none text-light border-white  bg-dark border-2 @error('name')
                                is-invalid
                            @enderror"
                                id="name" name="name" data-provide="typeahead" value="{{ old('name') }}" autofocus
                                required>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 ">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" autocomplete="off"
                                class="form-control shadow-none text-light border-white  bg-dark border-2 @error('price')
                                is-invalid
                            @enderror"
                                id="price" name="price" data-provide="typeahead" value="{{ old('price') }}" autofocus
                                required>
                            @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 ">

                            <input type="text" autocomplete="off"
                                class="form-control shadow-none text-secondary border-secondary bg-dark border-2 d-none @error('slug')
                                is-invalid
                            @enderror"
                                id="slug" name="slug" data-provide="typeahead" value="{{ old('slug') }}" autofocus
                                required>
                            @error('slug')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                    </div>
                    <div class="col-lg-7">
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea
                                class="form-control shadow-none border-2 border-white bg-dark  @error('deskripsi')
                        is-invalid
                    @enderror"
                                id="deskripsi" rows="3" style="height: 15rem" name="deskripsi" required>{{ old('deskripsi') }} </textarea>
                            @error('deskripsi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button class="btn btn-light mb-3 col-md" type="submit" name="submit">Create new Menu</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <script>
        const name = document.querySelector('#name')
        const slug = document.querySelector('#slug')
        // scirpt untuk membuat slug otomatis
        name.addEventListener('keyup', function() {
            let preslug = name.value;
            preslug = preslug.replace(/ /g, "-");
            slug.value = preslug.toLowerCase();
        })
    </script>
@endsection
