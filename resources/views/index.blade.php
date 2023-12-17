@extends('layouts.partials.navbar')

@section('section')
    <section class="main d-flex flex-column justify-content-center">
        <div class="row align-self-center my-5">
            <h1 class="display-1 text-white fw-bold" style="font-size: 52px;">Lorem ipsum<br>dolor sit amet.</h1>
        </div>
        <div class="row align-self-center my-5">
            <a href="#beli" class="btn btn-danger fs-5 fw-bold rounded-pill" style="width: 100px;">Beli</a>
        </div>
    </section>

    <section class="about m-5">
        <h2 class="text-center my-5">Why choose use</h2>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card h-100 border-0 w-75 mx-auto">
                    <img src="{{ asset('assets/Image/about1.png') }}" class="card-img-top" alt="">
                    <div class="card-body text-center">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional
                            content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 border-0 w-75 mx-auto">
                    <img src="{{ asset('assets/Image/about2.png') }}" class="card-img-top" alt="">
                    <div class="card-body text-center">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 border-0 w-75 mx-auto">
                    <img src="{{ asset('assets/Image/about3.png') }}" class="card-img-top" alt="">
                    <div class="card-body text-center">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional
                            content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-center">
        <h2 class="text-center my-5">Pilih Menu Makanan & Minuman</h2>
        <div class="list-produk container-fluid my-5">
            <div id="kategoriList" class="row justify-content-center m-5">
                @foreach ($showKategori as $index => $kategori)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4" data-index="{{ $index }}">
                        <div class="card m-1">
                            <img src="{{ $kategori->gambar }}" alt="{{ $kategori->nama_kategori }}" class="card-img-top"
                                style="height: 200px; object-fit: cover;">
                            <div class="card-body text-center">
                                <h5 class="card-title fs-5 fw-semibold">{{ $kategori->nama_kategori }}</h5>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
        <h5>
            <p id="moreBtn" class="btn btn-outline-danger mt-5">More</p>
        </h5>
    </section>

    <section>
        <h2 class="text-center mt-5">Food Discovery</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4" style="margin: 0px 80px;">
            @foreach ($menu as $makanan)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ url('storage/' . $makanan->image) }}" alt="{{ $makanan->nama_menu }}"
                            class="card-img-top img-fluid" style="object-fit: contain; width: 100%; height: 100%;">
                    </div>
                </div>
            @endforeach
        </div>
    </section>


    <section class="my-5">
        <div class="card flex-column justify-content-center align-items-center p-5 m-5 email-card bg-body-secondary">
            <h1 class="card-title mb-4"><b>Lorem ipsum dolor sit amet.</b></h1>
            <p class="card-text mb-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum
                voluptates commodi exercitationem?
            </p>
            <form action="" class="container-fluid d-flex justify-content-center align-items-center">
                <input type="email" class="form-control w-75 h-25 p-3 m-3" id="exampleFormControlInput1"
                    placeholder="name@example.com">
                <input type="submit" id="submit" class="btn btn-danger  p-3" value="Lorem" style="border-0"/>
            </form>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            // Menyembunyikan semua item kecuali 3 pertama
            var visibleItems = 3;
            var $items = $('.list-produk .col-12');

            $items.slice(visibleItems).hide();

            // Menangani klik pada tombol "More"
            $('#moreBtn').on('click', function() {
                $items.slice(visibleItems, visibleItems + 5).fadeIn();

                visibleItems += 5;

                // Menyembunyikan tombol "More" jika semua item sudah ditampilkan
                if (visibleItems >= $items.length) {
                    $('#moreBtn').hide();
                }
            });
        });
    </script>
@endsection
