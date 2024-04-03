@extends('dashboard.layouts.main')
@section('container')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">

                @if ($user->count())
                    <!-- Left col -->
                    <div class="col-lg-12 table-responsive py-4">
                        <table class="table-bordered col py-3">
                            <caption>Statement Summary</caption>
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Alam at</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $item)
                                    <tr>
                                        <td data-label="No">{{ $loop->iteration }}</td>
                                        <td data-label="Username">{{ $item->name }}</td>
                                        <td data-label="Email">{{ $item->email }}</td>
                                        <td data-label="Alamat">{{ $item->alamat }}</td>
                                        <td data-label="Phone">{{ $item->phone }}</td>
                                        <td data-label="Role">{{ $item->role }}</td>
                                        <td data-label="Action">
                                            <form action="/dashboard/user/{{ $item->id }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <div>
                                                    <a style="margin-right: ;cursor: pointer;" data-bs-toggle="offcanvas"
                                                        data-bs-target="#{{ $item->id }}"
                                                        aria-controls="offcanvasRight"><i
                                                            class="fa-solid fa-square-pen fs-4 "></i></a>
                                                    <button type="submit"
                                                        class="border-0 shadow-none bg-transparent p-0"><i
                                                            class="fa-solid fa-square-minus fs-4"
                                                            style="color: #FC6736 "></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                    {{-- Offcanvas untuk reservasi --}}
                                    <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="{{ $item->id }}"
                                        aria-labelledby="offcanvasRightLabel">
                                        <div class="offcanvas-body px-4 d-flex flex-column">
                                            <div class="judul pb-4 mb-5" style="border-bottom: 2px dashed white">
                                                <h1 class="text-secondary">Edit data <br><span
                                                        class="text-light">User</span>
                                                </h1>
                                            </div>
                                            <form action="/dashboard/user/{{ $item->id }}" method="post">
                                                @method('put')
                                                @csrf
                                                <div class="mb-3 ">
                                                    <label for="name" class="form-label">Username</label>
                                                    <input type="text" autocomplete="off"
                                                        class="form-control shadow-none text-light border-white  bg-dark border-2 @error('name')
                                                    is-invalid
                                                @enderror"
                                                        id="name" name="name" data-provide="typeahead"
                                                        value="{{ old('name', $item->name) }}" autofocus required>
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
                                                        id="emai" name="email" data-provide="typeahead"
                                                        value="{{ old('email', $item->email) }}" autofocus required>
                                                    @error('email')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                {{-- @if ($item->email == 'test@example.com')
                                                    <div class="mb-3 d-none">
                                                        <label for="password" class="form-label">Password</label>
                                                        <input type="text" autocomplete="off"
                                                            class="form-control shadow-none text-light border-white  bg-dark border-2 @error('password')
                                                    is-invalid @enderror"
                                                            id="password" name="password" data-provide="typeahead"
                                                            value="{{ old('password', $item->password) }}" autofocus
                                                            required>
                                                        @error('password')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                @else
                                                    <div class="mb-3 ">
                                                        <label for="password" class="form-label">Password</label>
                                                        <input type="text" autocomplete="off"
                                                            class="form-control shadow-none text-light border-white  bg-dark border-2 @error('password')
                                                        is-invalid @enderror"
                                                            id="password" name="password" data-provide="typeahead"
                                                            value="{{ old('password', $item->password) }}" autofocus
                                                            required>
                                                        @error('password')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                @endif --}}
                                                <div class="mb-3 ">
                                                    <label for="alamat" class="form-label">Alamat</label>
                                                    <input type="text" autocomplete="off"
                                                        class="form-control shadow-none text-light border-white  bg-dark border-2 @error('alamat')
                                                    is-invalid
                                                @enderror"
                                                        id="alamat" name="alamat" data-provide="typeahead"
                                                        value="{{ old('alamat', $item->alamat) }}" autofocus required>
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
                                                        id="phone" name="phone" data-provide="typeahead"
                                                        value="{{ old('phone', $item->phone) }}" autofocus required>
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
                                                        id="role" name="role" data-provide="typeahead"
                                                        value="{{ old('role') }}" autofocus required>
                                                        @foreach (['user', 'admin', 'super_admin'] as $r)
                                                            <option value="{{ $r }}"
                                                                {{ old('role', $item->role) == $r ? 'selected' : '' }}>
                                                                {{ $r }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('role')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <button class="btn btn-light mt-3" type="submit" name="submit">Update
                                                </button>
                                            </form>

                                            <p class="text-center mt-auto text-secondary" style="font-size: 0.8rem">
                                                CaffeApp.</p>
                                        </div>
                                    </div>
                                    {{-- End Offcanvas  --}}
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- right col -->
                @else
                    <div class="row justify-content-center text-center">
                        <img src="{{ asset('assets/img/notFound.png') }}" alt=""
                            style="height: 250px;width:250px" class="mb-4 mt-5 ">
                        <p>OHH NOO, user not found</p>
                    </div>
                @endif
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
