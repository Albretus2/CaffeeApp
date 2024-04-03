@extends('dashboard.layouts.main')
@section('container')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row flex-column">
                @if ($news->count())
                    <!-- Left col -->
                    @foreach ($news as $item)
                        <div class="card bg-transparent border-0 shadow-none">
                            <div class="card-body row text-light py-5" style="border-bottom: 2px dashed white">
                                <div class="col  d-flex align-items-center">
                                    <span class="fs-5">{{ $loop->iteration }}.</span>
                                </div>
                                <div class="col-lg-2 ">
                                    <div class="cardImg rounded-4"
                                        style="background-image: url({{ asset('storage/' . $item->image) }});min-height:6rem">
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex align-items-center">
                                    <span class="fs-5" style="width:20rem">{{ $item->title }}</span>
                                </div>
                                <div class="col-lg-3  d-flex align-items-center">
                                    <span><span class="text-secondary">created/updated:
                                        </span>{{ $item->updated_at->format('M d, Y') }}</span>
                                </div>
                                <div class="col-lg-2 d-flex align-items-center  gap-3">
                                    <a href="/dashboard/news/{{ $item->id }}" class="text-light">Preview</a>
                                    <a href="/dashboard/news/{{ $item->id }}/edit" class="text-light">Edit</a>
                                    <form action="/dashboard/news/{{ $item->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="submit p-0 bg-transparent border-0 shadow-none">
                                            <span style="color:#FC6736  ">Delete</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- right col -->
                @else
                    <div class="row justify-content-center text-center">
                        <img src="{{ asset('assets/img/notFound.png') }}" alt="" style="height: 250px;width:250px"
                            class="mb-4 mt-5">
                        <p>OHH NOO, Post not found</p>
                    </div>
                @endif
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
