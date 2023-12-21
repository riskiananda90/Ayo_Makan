    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>

    @extends('layouts.partials.navbar')

    @section('section')
        <main>
            <div class="container ">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5  border-top">
                    <div class="col">
                        <div class="card shadow-sm">
                            <video id="myVideo" class="embed-responsive-item" controls autoplay>
                                <source src="/gambar/poster4.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <video id="myVideo" class="embed-responsive-item" controls autoplay>
                                <source src="/gambar/poster3.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <video class="embed-responsive-item" controls autoplay>
                                <source src="/gambar/poster4.mp4" type="video/mp4">
                            </video>
                        </div>

                    </div>
                    <div class="col">
                        <div id="myVideo" class="card shadow-sm">
                            <video class="embed-responsive-item" controls autoplay>
                                <source src="/gambar/poster6.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="col">
                        <div id="myVideo" class="card shadow-sm ">
                            <video class="embed-responsive-item" controls autoplay>
                                <source src="/gambar/poster7.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>

            <section class="m-5">
                @foreach ($menu as $kategoriId => $menuItems)
                    @php
                        $kategori = App\Models\Kategori::find($kategoriId);
                        $menuItems = $menuItems->take(3); // Ambil 3 menu pertama
                    @endphp
                    <h1 class="fs-2 fw-bold mt-3">{{ $kategori->nama_kategori }}</h1>
                    <div class="row my-4" id="kategori_{{ $kategoriId }}">
                        @include('layouts.partials.menu-main', ['menu' => $menuItems])
                    </div>
                    <div class="text-center">
                        @if ($menuItems->count() >= 3)
                            <button class="more-btn btn btn-outline-danger" data-id-restoran="{{ $restoran->id }}"
                                data-id-kategori="{{ $kategori->id }}">More</button>
                        @endif
                    </div>
                @endforeach
            </section>
        @endsection

        <script>
            function toggleSearch() {
                var searchContainer = document.getElementById('searchContainer');
                searchContainer.classList.toggle('d-none');
            }
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
            integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        {{-- <script src="{{ asset('assets/js/color-modes.js') }}"></script> --}}
        <script>
            // Autoplay the video when the page is loaded
            document.addEventListener('DOMContentLoaded', function() {
                var myVideo = document.getElementById('myVideo');
                myVideo.play();
            });
        </script>
        <script>
            $(document).ready(function() {
                $('.more-btn').on('click', function() {
                    var idRestoran = $(this).data('id-restoran');
                    var idKategori = $(this).data('id-kategori');
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
                    var idRestoran = $(this).data('id-restoran');
                    var idKategori = $(this).data('id-kategori');
                    var jumlahMenu = $('#kategori_' + idKategori + ' .card').length;
                    if (jumlahMenu >= 3) {
                        $('.more-btn[data-id-restoran="' + idRestoran + '"][data-id-kategori="' + idKategori +
                            '"]').show();
                    }
                });

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
