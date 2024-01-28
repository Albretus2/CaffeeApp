@extends('auth.layouts.main')
@section('container')
    <div class="col-xxl-7">
        <div class="mains row  align-items-center justify-content-center" style="height: 100%">
            <div class="col-md-5">
                <h2>Sign up for created new account</h2>
                <p>Already have an account? <a href="/login" class="fw-bold text-dark text-decoration-none">Login
                        here</a></p>
                <form action="/sign" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label></label>
                        <input type="text"
                            class="form-control shadow-none border-2 border-secondary @error('name')
                            is-invalid
                        @enderror"
                            name="name">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email"
                            class="form-control shadow-none border-2 border-secondary @error('email')
                            is-invalid
                        @enderror"
                            id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                        </div>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label ">Password</label>
                        <input type="password"
                            class="form-control shadow-none border-2 border-secondary @error('password')
                            is-invalid
                        @enderror"
                            id="exampleInputPassword1" name="password">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label ">Alamat</label>
                        <input type="text"
                            class="form-control shadow-none border-2 border-secondary @error('alamat')
                            is-invalid
                        @enderror"
                            id="alamat" name="alamat">
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label ">Phone*</label>
                        <input type="number"
                            class="form-control shadow-none border-2 border-secondary @error('phone')
                            is-invalid
                        @enderror"
                            id="phone" name="phone">
                        @error('phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-dark col-md-12">Sign up</button>
                </form>
            </div>
        </div>

    </div>
@endsection
