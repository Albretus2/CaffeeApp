@extends('landingPages.layouts.main')
@section('container')
    <section class="blog-area py-5" id="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 d-flex flex-column ">
                    <a href="{{ route('HOME') }}" style="font-size: 2rem"><i
                            class="fa-solid fa-arrow-left-long text-dark"></i></a>
                    <h1 style="font-size: 2.8rem">{{ $post->title }}</h1>
                    <div class="info d-flex pt-3 " style="font-size: 0.8rem;color:rgb(128, 122, 122);gap: 1rem">
                        <div class="user d-flex align-items-center" style="gap: 0.4rem">
                            <i class="fa-solid fa-circle-user"></i>
                            <span>{{ $post->user->name }}</span>
                        </div>
                        <div class="date d-flex align-items-center" style="gap: 0.4rem">
                            <i class="fa-solid fa-calendar"></i>
                            <span>{{ $post->updated_at->format('F d, Y') }}</span>
                        </div>
                    </div>

                    <div class="image mb-4 mt-3"
                        style="background-image: url({{ asset('storage/' . $post->image) }});height:30rem">
                    </div>
                    <span class="text-dark" style="font-weight: 400">
                        {!! $post->body !!}
                    </span>
                </div>
            </div>
        </div>
    </section>
@endsection
