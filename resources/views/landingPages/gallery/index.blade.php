@extends('landingPages.layouts.main')
@section('container')
    <!-- Start gallery Area -->
    <section class="gallery-area section-gap" id="gallery">
        <div class="container  ">
            <div class="row d-flex">
                <div class="menu-content pb-60 col-lg-6">
                    <h2>
                        <a href="{{ route('HOME') }}" class="text-dark"><i class="fa-solid fa-arrow-left-long"></i></a>
                    </h2>
                    <div class="title">
                        <h1 class="mb-10" style="font-size: 5rem">What kind of Coffee we serve for you</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($gallery as $item)
                    <div class="col-lg-4">
                        <a href="{{ asset('storage/' . $item->image) }}" class="img-pop-home">
                            <div class="image mb-4"
                                style="height: 25rem;background-image: url({{ asset('storage/' . $item->image) }})">
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            {{ $gallery->links() }}

        </div>
    </section>
    <!-- End gallery Area -->
@endsection
