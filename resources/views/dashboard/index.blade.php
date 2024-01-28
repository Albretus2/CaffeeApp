@extends('dashboard.layouts.main')

@section('container')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row ">
                <section class="col-lg-3">
                    <div class="card shadow-sm" style="background-color:rgba(0, 0, 0, .25);border: none;">
                        <div class="card-body ">
                            <h3 class="text-secondary "> <i class="fa-solid fa-hat-wizard text-warning fs-4 me-2"></i>Welcome
                                to
                                the
                                <span class="text-light">Dashboard</span> page
                            </h3>
                        </div>
                    </div>
                </section>

                @cannot('user')
                    <!-- Left col -->
                    <section class="col-lg-12">
                        <div class="card shadow-sm text-light "
                            style="background-color:rgba(0, 0, 0, .25);height:15rem;overflow: hidden;border: none;">
                            <div class="card-img-overlay">
                                <div class="row">
                                    <div class="col-md-6 mt-4">
                                        <h5><i class="bi bi-quote"></i></h5>
                                        <h5 class="card-title fs-3 quote" id="quote"></h5>
                                        <p class="card-text author" id="author"></p>
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-end align-items-center mt-5 ">
                                        <img src="{{ asset('assets/img/coffee.png') }}" alt="kopi-hitam" class="gmbr me-5"
                                            width="180px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- right col -->
                @endcan


                <section class="col-md-1">
                    <div class="card shadow-sm" style="background-color:rgba(0, 0, 0, .25);border: none;">
                        <div class="">

                        </div>
                    </div>
                </section>

            </div>
            <!-- /.row (main row) -->
            @if ($dataReservasi->count())
                <div class="row">

                    @can('user')
                        <section class="col-lg-3">
                            <div class="card shadow-sm text-light " style="background-color:rgba(0, 0, 0, .25);border: none;">
                                <div class="card-body">
                                    <h4>Your Reservation -></h4>
                                    <div class="row p-2">
                                        @foreach ($dataReservasi as $item)
                                            <div class="col-md me-3 p-3" style="border: white dashed 1px;border-radius:3px">
                                                <p> Table : {{ $item->table_id }} <br>
                                                    Time : {{ $item->time }} <br>
                                                    Date : {{ $item->date }} <br>
                                                    status : <span
                                                        class="@if ($item->status == 'selesai') text-success
                                                    @else
                                                    text-danger @endif">
                                                        {{ $item->status }}</span>
                                                </p>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </section>
                    @endcan

                </div>
            @endif
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


    <script>
        const text = document.getElementById('quote');
        const author = document.getElementById('author');

        const getNewQuote = async () => {

            var url = "https://type.fit/api/quotes";

            const response = await fetch(url);
            console.log(typeof response);

            const allquotes = await response.json();

            const index = Math.floor(Math.random() * allquotes.length);

            const quote = allquotes[index].text;

            const auth = allquotes[index].author;

            if (auth == null) {
                author = "Anonymous;"
            }

            text.innerHTML = quote;
            author.innerHTML = "- " + auth;
        }
        getNewQuote()
    </script>
@endsection
