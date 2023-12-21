<link rel="stylesheet" href="{{ asset('assets/css/pemesanan.css') }}">
<style>
    .hidden-menu {
        display: none;
    }
</style>
@extends('layouts.partials.navbar')

@section('section')
    <main class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="d-flex me-5 mt-5">
                    <div class="flex-grow-1">
                        <h2 class="fw-bolder">
                            {{ $menuTerpilih->nama_menu }}
                        </h2>
                        <div class="d-flex align-items-center mt-3">
                            <div class="rekomendasi d-flex align-items-center text-bg-danger rounded-pill">
                                <i class="fa fa-thumbs-up" aria-hidden="true" style="height: 20px;"></i>
                                <p class="m-0 ms-3">Rekomendasi</p>
                            </div>
                            <p class="m-0 ms-3 fs-6 fw-medium">{{ $kategori->nama_kategori }}</p>
                            <p class="m-0 ms-3 fs-6 fw-medium">Rp {{ $menuTerpilih->harga_menu }}</p>
                        </div>
                        <div class="open d-flex align-items-center bg-opacity-75 rounded-pill mt-3">
                            <i class="fa fa-circle icon" aria-hidden="true"></i>
                            <p class="m-0 ms-3 fs-6 text-black opacity-100">Open</p>
                        </div>
                    </div>
                    <div class="w-50">
                        <img src="{{ url('storage/' . $menuTerpilih->image) }}" alt="{{ $menuTerpilih->nama_menu }}"
                            class="img-thumbnail rounded-5">
                    </div>
                </div>

                <div class="">
                    <ul class="list-group list-group-horizontal my-5">
                        <li class="item list-group-item d-flex flex-column align-items-center justify-content-center">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-star text-warning" aria-hidden="true" style="height: 20px;"></i>
                                <p class="m-0 ms-2">2.6</p>
                            </div>
                            <p class="m-0 fw-lighter text-body-tertiary mt-2 ">1k+ Ratings</p>
                        </li>
                        <li class="item list-group-item d-flex flex-column align-items-center justify-content-center">
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-location-dot text-danger" aria-hidden="true"
                                    style="height: 20px;"></i>
                                <p class="m-0 ms-2">0.22 km</p>
                            </div>
                            <p class="m-0 fw-lighter text-body-tertiary mt-2 ">Distance</p>
                        </li>
                        <li class="item list-group-item d-flex flex-column align-items-center justify-content-center">
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-dollar-sign mx-1 " aria-hidden="true" style="height: 20px;"></i>
                                <i class="fa-solid fa-dollar-sign mx-1 " aria-hidden="true" style="height: 20px;"></i>
                                <i class="fa-solid fa-dollar-sign mx-1 opacity-50 " aria-hidden="true"
                                    style="height: 20px;"></i>
                                <i class="fa-solid fa-dollar-sign mx-1 opacity-50 " aria-hidden="true"
                                    style="height: 20px;"></i>
                            </div>
                            <p class="m-0 fw-lighter text-body-tertiary mt-2 ">36k - 44k</p>
                        </li>
                        <li class="item list-group-item d-flex flex-column align-items-center justify-content-center">
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-thumbs-up text-danger" aria-hidden="true" style="height: 20px;"></i>
                                <p class="m-0 ms-2">10+ ratings</p>
                            </div>
                            <p class="m-0 fw-lighter text-body-tertiary mt-2 ">Great taste</p>
                        </li>
                        <li class="item list-group-item d-flex flex-column align-items-center justify-content-center">
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-drumstick-bite text-danger" aria-hidden="true"
                                    style="height: 20px;"></i>
                                <p class="m-0 ms-2">5+ ratings</p>
                            </div>
                            <p class="m-0 fw-lighter text-body-tertiary mt-2 ">Fair portion</p>
                        </li>
                        <li class="item list-group-item d-flex flex-column align-items-center justify-content-center">
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-wallet text-danger" aria-hidden="true" style="height: 20px;"></i>
                                <p class="m-0 ms-2">5+ ratings</p>
                            </div>
                            <p class="m-0 fw-lighter text-body-tertiary mt-2 ">Value for money</p>
                        </li>
                    </ul>
                    <div class="d-flex justify-content-center ">
                        <a class="btn btn-danger me-2" href="#">menu</a>
                        <a class="btn btn-outline-danger ms-2" href="#" tabindex="-1" aria-disabled="true">Review</a>
                    </div>

                    <section class="mt-5 me-5">
                        @foreach ($menu as $kategoriId => $menuItems)
                            @php
                                $kategori = App\Models\Kategori::find($kategoriId);
                                $menuItems = $menuItems->take(3); // Ambil 3 menu pertama
                            @endphp

                            <h1 class="fs-2 fw-bold mt-3">{{ $kategori->nama_kategori }}</h1>
                            <div class="row my-4" id="kategori_{{ $kategoriId }}">
                                @include('layouts.partials.menu', ['menu' => $menuItems])
                            </div>
                            <div class="text-center">
                                @if ($menuItems->count() >= 3)
                                    <button class="more-btn btn btn-outline-danger" data-id-restoran="{{ $restoran->id }}"
                                        data-id-kategori="{{ $kategori->id }}">More</button>
                                @endif
                            </div>
                        @endforeach
                    </section>
                </div>
            </div>

            <aside class="col-md-3 bg-white position-fixed">
                <div class="container mt-5 text-center">
                    <h1 class="fs-5 fw-bold ">Pesanan Anda</h1>
                    <div class="text-start my-3">
                        @foreach ($keranjang as $item)
                            <p>{{ $item->menu->nama_menu }} - Rp {{ number_format($item->menu->harga_menu) }}</p>
                        @endforeach
                    </div>
                </div>
                <hr>
                <div class="container">
                    <div class="d-flex justify-content-between">
                        <p>Subtotal</p>
                        <p>Rp {{ number_format($totalHarga) }}</p>
                    </div>
                </div>
                <div class="container position-absolute bottom-0 w-100">
                    <div class="d-flex justify-content-between">
                        <p>Total Harga</p>
                        <p>Rp {{ number_format($totalHarga) }}</p>
                    </div>
                    {{-- <form action="{{ route('proses.pembayaran') }}" method="post"> --}}
                    @csrf
                    {{-- <button class="btn btn-danger w-100" type="submit">Bayar</button> --}}
                    <a class="btn btn-danger w-100" type="submit" href="{{route('pembayaran')}}">Bayar</a>
                    </form>
                </div>
            </aside>
        </div>
    </main>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {
            $('.more-btn').on('click', function() {
                var idRestoran = $(this).attr('data-id-restoran');
                var idKategori = $(this).attr('data-id-kategori');
                var jumlahMenuTampil = $('#kategori_' + idKategori + ' .card').length;

                $.ajax({
                    url: '/get-more-menu/' + idRestoran + '/' + idKategori + '/' + jumlahMenuTampil,
                    type: 'GET',
                    success: function(response) {
                        // Tambahkan animasi fade-in pada setiap kartu menu yang baru
                        var newMenu = $(response.html).css('opacity', '0').appendTo(
                            '#kategori_' + idKategori);
                        newMenu.animate({
                            opacity: 1
                        }, 300);

                        // Sembunyikan tombol "More" jika tidak ada menu tambahan lagi
                        if (response.count === 0) {
                            $('.more-btn[data-id-restoran="' + idRestoran +
                                '"][data-id-kategori="' + idKategori + '"]').hide();
                        }
                    },
                    error: function(error) {
                        console.error('Error:', error);
                    }
                });
            });

            // Tampilkan tombol "More" jika jumlah menu awal kurang dari 3
            $('.kategori-container').each(function() {
                var idRestoran = $(this).attr('data-id-restoran');
                var idKategori = $(this).attr('data-id-kategori');
                var jumlahMenu = $('#kategori_' + idKategori + ' .card').length;
                if (jumlahMenu >= 3) {
                    $('.more-btn[data-id-restoran="' + idRestoran + '"][data-id-kategori="' + idKategori +
                        '"]').show();
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.add-to-cart-form').each(function() {
                var form = $(this);
                var inputJumlah = form.find('.jumlah-menu');
                var btnPlus = form.find('.btn-plus');
                var btnMinus = form.find('.btn-minus');

                btnPlus.on('click', function() {
                    var jumlah = parseInt(inputJumlah.val()) + 1;
                    inputJumlah.val(jumlah);
                });

                btnMinus.on('click', function() {
                    var jumlah = parseInt(inputJumlah.val()) - 1;
                    inputJumlah.val(jumlah >= 1 ? jumlah : 1);
                });
            });

            $('.add-to-cart-btn').on('click', function() {
                var form = $(this).closest('.add-to-cart-form');
                var menuId = form.data('menu-id');
                var hargaMenu = form.data('harga-menu');
                var csrfToken = form.find('input[name="_token"]').val();
                var jumlah = form.find('.jumlah-menu').val();

                // Logika AJAX untuk mengirim data ke server
                $.ajax({
                    url: '/tambah-keranjang/' + menuId,
                    type: 'POST',
                    data: {
                        '_token': csrfToken,
                        'jumlah': jumlah,
                        'total_harga': hargaMenu * jumlah,
                    },
                    success: function(response) {
                        alert(response.success);
                    },
                    error: function(error) {
                        console.error('Error:', error);
                    }
                });
            });
        });
    </script>
@endsection
