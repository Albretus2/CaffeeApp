@extends('dashboard.layouts.main')

@section('container')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
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

                {{-- layout yang tidak bisa di lihat, kecuali role usr --}}
                @can('user')
                    @if ($dataReservasi->count())
                        <section class="col-lg-3">
                            <div class="card shadow-sm"
                                style="background-color:rgba(0, 0, 0, .25);border: none;cursor: pointer;"
                                data-bs-toggle="offcanvas" data-bs-target="#reservasi" aria-controls="offcanvasRight">
                                <div class="card-body d-flex flex-column text-light p-3">
                                    <div class=" d-flex justify-content-between py-1 align-items-center">
                                        <span>Your Reservation</span>
                                        <i class="fa-solid fa-arrow-right-long fs-5 " style="color: #FC6736 ;"></i>
                                    </div>
                                    <span class="fs-3">{{ $dataReservasi[0]->table->name }}</span>
                                </div>
                            </div>
                        </section>
                        {{-- Offcanvas untuk reservasi --}}
                        <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="reservasi"
                            aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-body px-4 d-flex flex-column">
                                <div class="judul pb-4 " style="border-bottom: 2px dashed white">
                                    <h1 class="text-secondary">Your <span class="text-light">Reservation</span></h1>
                                </div>
                                <div class="mt-5 d-flex  gap-4 py-2 align-items-center">
                                    <i class="fa-solid fa-border-top-left fs-4"></i>
                                    Meja 2
                                </div>
                                <div class="mt-2 d-flex  gap-4 py-2 align-items-center">
                                    <i class="fa-regular fa-calendar fs-4"></i>
                                    {{ $dataReservasi[0]->date }}
                                </div>
                                <div class="mt-2 d-flex  gap-4 py-2 align-items-center">
                                    <i class="fa-regular fa-clock fs-4"></i>
                                    {{ $dataReservasi[0]->time }}
                                </div>
                                <div class="mt-2 d-flex  gap-2 py-2 align-items-center">
                                    <strong>Status -></strong>
                                    <span
                                        class="@if ($dataReservasi[0]->status == 'selesai') text-success @else
                                    text-warning @endif">{{ $dataReservasi[0]->status }}</span>
                                </div>
                                <p class="text-center mt-auto text-secondary" style="font-size: 0.8rem">CaffeApp.</p>
                            </div>
                        </div>
                        {{-- End Offcanvas  --}}
                    @endif
                @endcan
                {{-- end// --}}

                {{-- layout yang tidak bisa di lihat oleh role user --}}
                @cannot('user')
                    {{-- card usr --}}
                    <section class="col-lg-3">
                        <a href="/dashboard/user" class="text-decoration-none text-light">
                            <div class="card shadow-sm" style="background-color:rgba(0, 0, 0, .25);border: none;">
                                <div class="card-body d-flex flex-column text-light p-3">
                                    <div class=" d-flex justify-content-between py-1 align-items-center">
                                        <span>User</span>
                                        <i class="fa-solid fa-arrow-right-long fs-5" style="color: #FC6736 "></i>
                                    </div>
                                    <span class="fs-3">{{ $user->count() }}</span>
                                </div>
                            </div>
                        </a>
                    </section>
                    {{-- end// --}}

                    {{-- card reservations --}}
                    <section class="col-lg-3">
                        <a href="/dashboard/reservasi" class="text-decoration-none">
                            <div class="card shadow-sm" style="background-color:rgba(0, 0, 0, .25);border: none;">
                                <div class="card-body d-flex flex-column text-light p-3">
                                    <div class=" d-flex justify-content-between py-1 align-items-center">
                                        <span>Reservation</span>
                                        <i class="fa-solid fa-arrow-right-long fs-5" style="color: #FC6736 "></i>
                                    </div>
                                    <span class="fs-3">{{ $reservasi->count() }}</span>
                                </div>
                            </div>
                        </a>
                    </section>
                    {{-- end// --}}

                    {{-- card visitor --}}
                    <section class="col-lg-3">
                        <div class="card shadow-sm" style="background-color:rgba(0, 0, 0, .25);border: none;">
                            <div class="card-body d-flex flex-column text-light p-3">
                                <div class=" d-flex justify-content-between py-1 align-items-center">
                                    <span>Visitor</span>
                                    <i class="fa-regular fa-eye fs-5" style="color: #FC6736 "></i>
                                </div>
                                <span class="fs-3">2,234</span>
                            </div>
                        </div>
                    </section>
                    {{-- end// --}}
                    <div class="col-lg-6 mb-3">
                        <div class="row flex-column">
                            <!-- card qoutes -->
                            <section>
                                <div class="card shadow-sm text-light "
                                    style="background-color:rgba(0, 0, 0, .25);border: none;">
                                    <div class="card-body ">
                                        <h1><i class="bi bi-quote"></i></h1>
                                        <h1 class="card-title  quote mb-4" id="quote" style="font-size: 2.5rem;width:80%">
                                        </h1>
                                        <p class="card-text author" id="author"></p>
                                    </div>
                                </div>
                            </section>
                            <!-- end// -->

                            {{-- to do list section --}}
                            <section>
                                <div class="todoBody px-4  py-4 rounded-3" style="border: rgba(0, 0, 0, .25) 3px solid">
                                    <p class="text-secondary" style="font-size: 0.9rem">{{ $date }}
                                    </p>
                                    <div class="titleTodo d-flex align-items-center justify-content-between  mb-4">
                                        <h3>Todo list</h3>
                                        <a href="#" class="text-light text-decoration-none" data-bs-target="#todoCreate"
                                            data-bs-toggle="offcanvas" style="cursor: pointer">
                                            Create new
                                        </a>
                                    </div>
                                    @foreach ($todos as $item)
                                        <div class="item row">
                                            <div class="col-lg-12">
                                                <div class="todolist form-check px-3 rounded-3 py-3 d-flex justify-content-between"
                                                    style="background-color:rgba(0, 0, 0, .25); ">
                                                    <div class="kontenTodo">
                                                        <input type="checkbox" id="checkbox">
                                                        <span for="checkbox">{{ $item->konten }}</span>
                                                    </div>
                                                    <div class="">
                                                        <form action="/todolist/{{ $item->id }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button href="/todolist" class="p-0 border-0 bg-transparent">
                                                                <i class="fa-solid fa-square-minus fs-4"
                                                                    style="color: #FC6736 "></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- card image -->
                        <section>
                            <div class="card cardImg text-light shadow-none"
                                style="background-image: url({{ asset('assets/img/bg-auth.jpg') }}); min-height: 40rem;">
                            </div>
                        </section>
                        <!-- end// -->
                    </div>
                </div>

                {{-- offcanvans create todolist --}}
                <div class="offcanvas offcanvas-bottom bg-dark" tabindex="-1" id="todoCreate"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-body text-light row justify-content-center">
                        <div class="col-md-4 mt-3">
                            <form action="/todolist" method="POST">
                                @csrf
                                <div class="konten mb-3">
                                    <label for="konten">Content</label>
                                    <input type="text" name="konten" id="konten"
                                        class="form-control bg-transparent border-2 border-light text-light ">
                                </div>
                                <button type="submit" class="col border-0 p-2 rounded-3">Create</button>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- end .. --}}

                {{-- end// --}}
            @endcannot
            {{-- end// --}}
        </div>
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
