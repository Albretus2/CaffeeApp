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
                    <a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid"
                            src="img/play-icon.png" alt=""></a>
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
            <div class="row">
                <div class="col-lg-4">
                    <a href="{{ asset('style_landingPages/img/g1.jpg') }}" class="img-pop-home">
                        <img class="img-fluid" src="{{ asset('style_landingPages/img/g1.jpg') }}" alt="">
                    </a>
                    <a href="{{ asset('style_landingPages/img/g2.jpg') }}" class="img-pop-home">
                        <img class="img-fluid" src="{{ asset('style_landingPages/img/g2.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-8">
                    <a href="{{ asset('style_landingPages/img/g3.jpg') }}" class="img-pop-home">
                        <img class="img-fluid" src="{{ asset('style_landingPages/img/g3.jpg') }}" alt="">
                    </a>
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="{{ asset('style_landingPages/img/g4.jpg') }}" class="img-pop-home">
                                <img class="img-fluid" src="{{ asset('style_landingPages/img/g4.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <a href="{{ asset('style_landingPages/img/g5.jpg') }}" class="img-pop-home">
                                <img class="img-fluid" src="{{ asset('style_landingPages/img/g5.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
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
                <div class="col-lg-6 col-md-6 single-blog">
                    <img class="img-fluid" src="{{ asset('style_landingPages/img/b1.jpg') }}" alt="">
                    <ul class="post-tags">
                        <li><a href="#">Travel</a></li>
                        <li><a href="#">Life Style</a></li>
                    </ul>
                    <a href="#">
                        <h4>Portable latest Fashion for young women</h4>
                    </a>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore.
                    </p>
                    <p class="post-date">
                        31st January, 2018
                    </p>
                </div>
                <div class="col-lg-6 col-md-6 single-blog">
                    <img class="img-fluid" src="{{ asset('style_landingPages/img/b2.jpg') }}" alt="">
                    <ul class="post-tags">
                        <li><a href="#">Travel</a></li>
                        <li><a href="#">Life Style</a></li>
                    </ul>
                    <a href="#">
                        <h4>Portable latest Fashion for young women</h4>
                    </a>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore.
                    </p>
                    <p class="post-date">
                        31st January, 2018
                    </p>
                </div>
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
                    <div class="rounded p-4" style="background-color: #965b2a;">
                        <p>1. Untuk bisa melakukan Reservasi, harus <a href="/login" class="text-warning">Login</a>
                            terlebih
                            dahulu
                            dan
                            jika belum memiliki akun maka lakukan <a href="/sign" class="text-warning">Register</a></p>
                        <p>2. Jika meja yang di inginkan tidak ada dalam list pilihan meja, maka meja
                            tersebut sudah di reservasi oleh orang lain
                        </p>
                        <p>3. Buka setiap hari mulai dari jam 9:00 - 21:00
                        </p>
                        <p class="text-danger">
                            @error('user_id')
                                {{ $message }}
                            @enderror
                        </p>
                    </div>

                </div>
            </div>
            <form action="/dashboard/reservasi" method="POST" id="formReservasi">
                @csrf
                <div class="row justify-content-center mb-4">
                    <div class="col-md-5 mb-3">
                        <label for="date">Date</label>
                        <input type="date"
                            class="cta-res form-control @error('date')
                        is-invalid
                        @enderror"
                            id="date" name="date">
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
                            id="time" name="time" min="90:00" max="21:00">
                        @error('time')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-5 mb-3">
                        @error('table_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <select name="table_id"
                            class="cta-res form-select p-2 
                            @error('table_id')
                        is-invalid
                        @enderror">
                            <option selected>Pilih Meja</option>
                            @foreach ($table as $item)
                                <option value="{{ $item->id }}" @if ($item->id == $item->reservasi->table_id) disabled @endif>
                                    {{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-5">
                        <button class="btn col text-light" style="background-color: #965b2a;"
                            @auth @else disabled @endauth type="submit" onclick="data()">Book
                            a
                            Table</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- End blog Area -->
    <script>
        function data(e) {
            e.preventDevault();
        }
        data.addEvenListener()
    </script>
@endsection
