@extends('dashboard.layouts.main')
@section('container')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <div class="body col-lg-8 d-flex  flex-column">
                    <h1>{{ $news->title }}</h1>
                    <div class="identitas pb-3 d-flex gap-4" style="font-size: 0.8rem;color:rgb(209, 208, 208)">
                        <div class="user d-flex align-items-center gap-2">
                            <i class="fa-solid fa-circle-user"></i>
                            <span>{{ auth()->user()->name }}</span>
                        </div>
                        <div class="date d-flex align-items-center gap-2">
                            <i class="fa-solid fa-calendar"></i>
                            <span>{{ $news->created_at->format('d, M Y') }}</span>
                        </div>
                    </div>
                    @if ($news->image)
                        <div class="menuImg rounded-4"
                            style="background-image: url({{ asset('storage/' . $news->image) }});height:25rem">
                        </div>
                    @endif
                    <span class="mt-3">
                        {!! $news->body !!}
                    </span>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
