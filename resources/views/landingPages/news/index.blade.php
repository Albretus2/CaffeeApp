@extends('landingPages.layouts.main')
@section('container')
    <!-- Start blog Area -->
    <section class="blog-area py-5" id="blog">
        <div class="container">
            <div class="row d-flex mb-5">
                <div class="menu-content  col-lg-9">
                    <h2>
                        <a href="{{ route('HOME') }}" class="text-dark"><i class="fa-solid fa-arrow-left-long"></i></a>
                    </h2>
                    <div class="title ">
                        <h1 class="mb-10" style="font-size: 5rem">What kind of Coffee we serve for you</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-12 single-blog">
                    <div class="galeryImg"
                        style="background-image: url({{ asset('storage/' . $news[0]->image) }});height:25rem">
                    </div>
                    <div class="body d-flex flex-column align-items-center">
                        <ul class="post-tags">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Life Style</a></li>
                        </ul>
                        <a href="#">
                            <h4>{{ $news[0]->title }}</h4>
                        </a>
                        <p>
                            {{ $news[0]->excerpt }}
                        </p>
                        <p class="post-date">
                            {{ $news[0]->updated_at->format('F d, Y') }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($news->skip(1) as $item)
                    <div class="col-lg-6 col-md-6 single-blog">
                        <div class="galeryImg"
                            style="background-image: url({{ asset('storage/' . $item->image) }});height:20rem">
                        </div>
                        <ul class="post-tags">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Life Style</a></li>
                        </ul>
                        <a href="#">
                            <h4>{{ $item->title }}</h4>
                        </a>
                        <p>
                            {{ $item->excerpt }}
                        </p>
                        <p class="post-date">
                            {{ $item->updated_at->format('F d, Y') }}
                        </p>
                    </div>
                @endforeach
            </div>
            <div class="row justify-content-end ">
                <h2 class="mt-5">
                    {{ $news->links() }}
                </h2>
            </div>
        </div>
    </section>
    <!-- End blog Area -->
@endsection
