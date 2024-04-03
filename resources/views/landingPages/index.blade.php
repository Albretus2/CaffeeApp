@extends('landingPages.layouts.main')

@section('container')
    <!-- start banner Area -->
    <section class="banner-area" id="home">
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-start" style="background-attachment:fixed;">
                <div class="banner-content col-lg-7">
                    <h6 class="text-white text-uppercase">Now you can feel the Energy</h6>
                    <h1>
                        Start your day with <br>
                        a black Coffee
                    </h1>
                    <a href="#reservasi" class="btnToReservasi primary-btn text-uppercase">Reservation Now</a>

                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start video-sec Area -->
    <section class="video-sec-area pb-100 pt-40" id="about">
        <div class="container">
            <div class="row justify-content-start align-items-center">
                <div class="col-lg-6 video-right justify-content-center align-items-center d-flex">
                    <div class="overlay overlay-bg"></div>
                    <a class="play-btn text-light" style="font-size: 3rem"
                        href="https://www.youtube.com/watch?v=QOUcIsvymOY"><i class="fa-solid fa-play "></i></a>
                </div>
                <div class="col-lg-6 video-left">
                    <h6>Live Coffee making process.</h6>
                    <h1>We Telecast our <br>
                        Coffee Making Live</h1>
                    <p><span>We are here to listen from you deliver exellence</span></p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim.
                    </p>
                    <img class="img-fluid" src="img/signature.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End video-sec Area -->

    <!-- Start menu Area -->
    <section class="menu-area section-gap" id="coffee">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10">What kind of Coffee we serve for you</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($menues as $menu)
                    <div class="col-lg-4">
                        <div class="single-menu" style="height: 10rem;overflow:hidden;">
                            <div class="title-div justify-content-between d-flex">
                                <h4>{{ $menu->name }}</h4>
                                <p class="price float-right">
                                    ${{ $menu->price }}
                                </p>
                            </div>
                            <p>
                                {{ $menu->deskripsi }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End menu Area -->

    <!-- Start gallery Area -->
    <section class="gallery-area section-gap" id="gallery">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10">What kind of Coffee we serve for you</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            @if ($gallery->count())
                <div class="row">
                    <div class="col-lg-4">
                        <a href="{{ asset('storage/' . $gallery[0]->image) }}" class="img-pop-home">
                            <div class="image mb-4"
                                style="height: 25rem;background-image: url({{ asset('storage/' . $gallery[0]->image) }})">
                            </div>
                        </a>
                        <a href="{{ asset('storage/' . $gallery[1]->image) }}" class="img-pop-home">
                            <div class="image mb-4"
                                style="height: 25rem;background-image: url({{ asset('storage/' . $gallery[1]->image) }})">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-8">
                        <a href="{{ asset('storage/' . $gallery[2]->image) }}" class="img-pop-home">
                            <div class="image"
                                style="height: 51rem;background-image: url({{ asset('storage/' . $gallery[2]->image) }})">
                            </div>
                        </a>

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <a href="{{ asset('storage/' . $gallery[3]->image) }}" class="img-pop-home">
                            <div class="image"
                                style="height: 25rem;background-image: url({{ asset('storage/' . $gallery[3]->image) }})">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a href="{{ asset('storage/' . $gallery[4]->image) }}" class="img-pop-home">
                            <div class="image"
                                style="height: 25rem;background-image: url({{ asset('storage/' . $gallery[4]->image) }})">
                            </div>
                        </a>
                    </div>
                </div>
            @endif
            <div class="row justify-content-end px-3" style="margin-top: 2rem">
                <h2 class="text-end ">
                    <a href="/gallery" class="text-decoration-none text-dark "><i
                            class="fa-solid fa-arrow-right-long"></i></a>
                </h2>

            </div>

        </div>
    </section>
    <!-- End gallery Area -->

    <!-- Start review Area -->
    <section class="review-area section-gap" id="review">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10">What kind of Coffee we serve for you</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 single-review">
                    <img src="img/r1.png" alt="">
                    <div class="title d-flex flex-row">
                        <h4>lorem ipusm</h4>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                    <p>
                        Accessories Here you can find the best computer accessory for your laptop, monitor, printer,
                        scanner, speaker. Here you can find the best computer accessory for your laptop, monitor,
                        printer, scanner, speaker.
                    </p>
                </div>
                <div class="col-lg-6 col-md-6 single-review">
                    <img src="img/r2.png" alt="">
                    <div class="title d-flex flex-row">
                        <h4>lorem ipusm</h4>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                    <p>
                        Accessories Here you can find the best computer accessory for your laptop, monitor, printer,
                        scanner, speaker. Here you can find the best computer accessory for your laptop, monitor,
                        printer, scanner, speaker.
                    </p>
                </div>
            </div>
            <div class="row counter-row">
                <div class="col-lg-3 col-md-6 single-counter">
                    <h1 class="counter">2536</h1>
                    <p>Happy Client</p>
                </div>
                <div class="col-lg-3 col-md-6 single-counter">
                    <h1 class="counter">7562</h1>
                    <p>Total Projects</p>
                </div>
                <div class="col-lg-3 col-md-6 single-counter">
                    <h1 class="counter">2013</h1>
                    <p>Cups Coffee</p>
                </div>
                <div class="col-lg-3 col-md-6 single-counter">
                    <h1 class="counter">10536</h1>
                    <p>Total Submitted</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End review Area -->

    <!-- Start blog Area -->
    <section class="blog-area section-gap" id="blog">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10">What kind of Coffee we serve for you</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($news as $item)
                    <div class="col-lg-6 col-md-6 single-blog">
                        <div class="galeryImg"
                            style="background-image: url({{ asset('storage/' . $item->image) }});height:20rem">
                        </div>
                        <ul class="post-tags">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Life Style</a></li>
                        </ul>
                        <a href="/post/{{ $item->id }}">
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
                    <a href="/news" class="text-dark"><i class="fa-solid fa-arrow-right-long "></i></a>
                </h2>
            </div>
        </div>
    </section>
    <!-- End blog Area -->
    <!-- Start blog Area -->
    <section class="reservasi-area section-gap" id="reservasi">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10">Reservation</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-4 text-light">
                <div class="col-md-10">
                    <div class="rounded p-4" style="background-color: #764116;">
                        <p>1. Untuk bisa melakukan Reservasi, harus <a href="/login"
                                class="text-decoration-none text-light"><strong>Login</strong></a>
                            terlebih
                            dahulu
                            dan
                            jika belum memiliki akun maka lakukan <a href="/sign"
                                class="text-decoration-none text-light"><strong>Register</strong> </a></p>
                        <p>2. akan muncul notif ketika meja yang di pilih sudah di resevasi oleh orang lain
                        </p>
                        <p>3. Buka setiap hari mulai dari jam 9:00 - 21:00
                        </p>
                    </div>

                </div>
            </div>
            <form action="/dashboard/reservasi" method="POST">
                @csrf
                <div class="row
                justify-content-center mb-4">
                    <div class="col-md-5 mb-3">
                        <label for="date">Date</label>
                        <input type="date"
                            class="cta-res form-control @error('date')
                        is-invalid
                        @enderror"
                            id="date" name="date" value="{{ old('date') }}">
                        @error('date')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-5 mb-3">
                        <label for="time">Time</label>
                        <input type="time"
                            class="cta-res form-control @error('time')
                        is-invalid
                        @enderror"
                            id="time" name="time" min="90:00" max="21:00" value="{{ old('time') }}">
                        @error('time')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-5 mb-3">
                        <select name="table_id"
                            class="cta-res form-select p-2 
                            @error('table_id')
                        is-invalid
                        @enderror">
                            <option selected disabled value="0">Pilih Meja</option>
                            @foreach ($table as $item)
                                <option value="{{ $item->id }}">
                                    {{ $item->name }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="col-md-5">
                        <button class="btn col text-light" style="background-color: #965b2a;"
                            @auth @else disabled @endauth>Book
                            a
                            Table</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- End blog Area -->
@endsection
