@extends('dashboard.layouts.main')

@section('container')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid ">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="font-size:3rem;">Create New User</h1>
                    <h5 style="font-size: 1rem;margin:0.6rem 0 0.8rem 0;color:#bababa">make the user you like</h5>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <form action="/dashboard/user" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row gap-3">
                    <div class="col-lg-4 ">
                        <div class="mb-3 ">
                            <label for="name" class="form-label">Username</label>
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
                            <label for="email" class="form-label">Email</label>
                            <input type="email" autocomplete="off"
                                class="form-control shadow-none text-light border-white  bg-dark border-2 @error('email')
                                is-invalid
                            @enderror"
                                id="emai" name="email" data-provide="typeahead" value="{{ old('email') }}" autofocus
                                required>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 ">
                            <label for="password" class="form-label">Password</label>
                            <input type="text" autocomplete="off"
                                class="form-control shadow-none text-light border-white  bg-dark border-2 @error('password')
                                is-invalid
                            @enderror"
                                id="password" name="password" data-provide="typeahead" value="{{ old('password') }}"
                                autofocus required>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>
                    <div class="col-lg-4 ps-4" style="border-left:white 2px dashed ">
                        <div class="mb-3 ">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" autocomplete="off"
                                class="form-control shadow-none text-light border-white  bg-dark border-2 @error('alamat')
                                is-invalid
                            @enderror"
                                id="alamat" name="alamat" data-provide="typeahead" value="{{ old('alamat') }}" autofocus
                                required>
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="number" autocomplete="off"
                                class="form-control shadow-none text-light border-white  bg-dark border-2 @error('phone')
                                is-invalid
                            @enderror"
                                id="phone" name="phone" data-provide="typeahead" value="{{ old('phone') }}" autofocus
                                required>
                            @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 ">
                            <label for="role">Role</label>
                            <select autocomplete="off"
                                class="form-select shadow-none text-light border-white  bg-dark border-2 @error('role')
                                is-invalid
                            @enderror"
                                id="role" name="role" data-provide="typeahead" value="{{ old('role') }}"
                                autofocus required>
                                @foreach (['user', 'admin', 'super_admin'] as $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                            @error('role')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>
                    <div class="col-lg-2 ps-4  d-flex align-items-center" style="border-left:white 2px dashed ">

                        <button class="btn btn-light mb-3 col-md" type="submit" name="submit">Create new User</button>

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
