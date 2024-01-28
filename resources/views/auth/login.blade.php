@extends('auth.layouts.main')
@section('container')
    <div class="col-xxl-7">
        <div class="mains row  align-items-center justify-content-center" style="height: 100%">
            <div class="col-md-5">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session()->has('failed'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('failed') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <h2>Login to your account</h2>
                <p>Don't have an account? <a href="/sign" class="fw-bold text-dark text-decoration-none">SignUp
                        here</a></p>
                <form action="/login" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email"
                            class="form-control shadow-none border-2 border-secondary @error('email')
                            is-invalid
                        @enderror"
                            id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
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
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-dark col-md-12">Login</button>
                </form>
            </div>
        </div>

    </div>
@endsection
