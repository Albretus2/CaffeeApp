@extends('dashboard.layouts.main')
@section('container')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid ">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="font-size:3rem;">Create News</h1>
                    <h5 style="font-size: 1rem;margin:0.6rem 0 0.8rem 0;color:#bababa">make the news you like</h5>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content pb-5">
        <div class="container-fluid">
            <form action="/dashboard/news" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row justify-content-between">
                    <div class="col-lg-6 ">
                        <div class="mb-3 ">
                            <label for="title" class="form-label">title</label>
                            <input type="text" autocomplete="off"
                                class="form-control shadow-none text-light border-white  bg-dark border-2 @error('title')
                                is-invalid
                            @enderror"
                                id="title" name="title" data-provide="typeahead" value="{{ old('title') }}" autofocus
                                required>
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div clsass="mb-3">
                            <label for="image" class="form-label">Upload Image </label>
                            <input type="file" autocomplete="off"
                                class="form-control shadow-none text-secondary border-secondary bg-dark border-2 @error('image')
                                    is-invalid
                                @enderror"
                                id="image" name="image" value="{{ old('image') }}" autofocus>
                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button class="btn btn-light col-md mt-3 mb-3" type="submit" name="submit">Create News</button>

                        <div class="body  text-dark ">
                            <textarea id="editor" name="body" type="text"
                                class="@error('body')
                            is-invalid
                            @enderror"></textarea>
                            @error('body')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                    </div>
                    <div class="col-lg-6 d-flex justify-content-center align-items-start" style="margin-top: -8rem">
                        <img src="{{ asset('assets/img/newsImage.png') }}" alt="" class="newsImg"
                            style="height:35rem">
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
@section('script')
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
    {{-- <script>
        DecoupledEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                const toolbarContainer = document.querySelector('#toolbar-container');

                toolbarContainer.appendChild(editor.ui.view.toolbar.element);
            })
            .catch(error => {
                console.error(error);
            });
    </script> --}}
@endsection
