<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- FontAwesome 6.2.0 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- (Optional) Use CSS or JS implementation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
        integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>AyoMakan</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
</head>

<body>

    <nav class="navbar sticky-top navbar-expand-lg bg-body-white">
        <div class="container-fluid">
            <a class="navbar-brand ms-4" href="{{ url('/') }}"><img
                    src=" {{ asset('assets/Image/AyoMakan.png') }} " alt="" style="width: 120px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mb-2 mb-lg-0 align-items-center justify-content-between w-100 ">
                    <li class="nav-item">
                        @php
                            $kategoriId = App\Models\Kategori::pluck('id')->toArray(); // Mengambil semua ID kategori dari database
                            $randomId = $kategoriId[array_rand($kategoriId)]; // Memilih secara acak dari array ID kategori
                        @endphp
                        <a class="nav-link text-dark"
                            href="{{ route('makanan', ['id' => $randomId]) }} ">Rekomendasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">FAQ</a>
                    </li>
                    <li class="w-100 ">
                        <form class="d-flex my-lg-0">
                            <input class="form-control me-sm-2" type="text" placeholder="Search">
                            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit"><i
                                    class="fas fa-search"></i></button>
                        </form>
                    </li>
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="btn btn-outline-danger my-sm-0" href="{{ route('login') }}"
                                    style="width: 100px;">Login</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="btn btn-danger my-sm-0" href="{{ route('register') }}" style="width: 100px;">Sign
                                    in</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                                data-bs-target="#cartModal">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </li>
                        <li class="nav-item dropdown">
                            <button type="button" class="btn btn-outline-danger dropdown-toggle" data-bs-toggle="dropdown"
                                data-bs-display="static" aria-expanded="false">
                                <i class="fa-regular fa-circle-user btn-outline-danger"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-start dropdown-menu-lg-end"
                                aria-labelledby="navbarDropdown">
                                @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                                    <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Admin Dashboard</a>
                                    </li>
                                @endif
                                <li>
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest

                </ul>
            </div>
        </div>
    </nav>

    {{-- Modal --}}
    <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 fw-bolder" id="staticBackdropLabel">Pesanan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="max-height: 300px; overflow-y: auto;">
                    @if ($keranjang->isEmpty())
                        <p class="text-center">Keranjang Anda kosong.</p>
                    @else
                        <div class="row">
                            @foreach ($keranjang as $item)
                                <hr>
                                <div class="col-12 mb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center w-50 ">
                                            <img src="{{ url('storage/' . $item->menu->image) }}"
                                                alt="{{ $item->menu->nama_menu }}" class="img-thumbnail"
                                                style="width: 80px; height: 80px; object-fit: cover;">
                                            <span class="ms-2">{{ $item->menu->nama_menu }}</span>
                                        </div>
                                        <div class="d-flex flex-column-reverse w-25">
                                            <div class="mt-2 ">
                                                <span>Harga: Rp.
                                                    {{ number_format($item->menu->harga_menu) }}</span>
                                                <br>
                                                <button class="btn btn-danger btn-remove mt-2"
                                                    id="cart-item-{{ $item->id }}"
                                                    data-menu-id="{{ $item->id }}">Hapus</button>
                                            </div>
                                            <div class="input-group">
                                                <button class="btn btn-outline-danger btn-minus"
                                                    data-menu-id="{{ $item->id }}">-</button>
                                                <input type="text" class="form-control text-center jumlah-menu"
                                                    id="jumlah-menu-{{ $item->id }}"
                                                    value="{{ $item->jumlah }}">
                                                <button class="btn btn-outline-danger btn-plus"
                                                    data-menu-id="{{ $item->id }}">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="modal-footer justify-content-center">
                    <div class="d-flex justify-content-between w-100">
                        <p class="fs-5 fw-bold">Total Harga</p>
                        <p class="fs-5 fw-bold" id="total-harga">Rp.{{ number_format($totalHarga) }}</p>
                    </div>
                    {{-- <button type="button" class="btn btn-danger w-100">Pesan</button> --}}
                    <a type="button" class="btn btn-danger w-100" href="{{route('pembayaran')}}">Pesan</a>
                </div>
            </div>
        </div>
    </div>


    @yield('section')

    <footer class="text-center text-lg-start bg-dark text-white mt-5">
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>

            <div>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-github"></i>
                </a>
            </div>
        </section>

        <section class="">
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            <img src="gambar/AyoMakan.png" alt="">
                        </h6>
                        <p>
                            Here you can use rows and columns to organize your footer content. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>

                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">lorem</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">lorem</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">lorem</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">lorem</a>
                        </p>
                    </div>

                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">lorem</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">lorem</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">lorem</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">lorem</a>
                        </p>
                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3 text-secondary"></i>Lorem, ipsum.</p>
                        <p>
                            <i class="fas fa-envelope me-3 text-secondary"></i>
                            info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3 text-secondary"></i> 12 34 56 78 90</p>
                        <p><i class="fas fa-print me-3 text-secondary"></i> 12 34 56 78 90</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">

            <p class="text-reset fw-bold">AyoMakan</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tambahkan event listener untuk tombol tambah, kurang, dan hapus
            document.querySelectorAll('.btn-minus').forEach(function(button) {
                button.addEventListener('click', function() {
                    updateCartQuantity(this.dataset.menuId, -1);
                });
            });

            document.querySelectorAll('.btn-plus').forEach(function(button) {
                button.addEventListener('click', function() {
                    updateCartQuantity(this.dataset.menuId, 1);
                });
            });

            document.querySelectorAll('.btn-remove').forEach(function(button) {
                button.addEventListener('click', function() {
                    const menuId = this.dataset.menuId;

                    // Hapus elemen tampilan item keranjang langsung
                    const cartItemElement = document.getElementById(`cart-item-${menuId}`);
                    if (cartItemElement) {
                        cartItemElement.remove();
                    } else {
                        console.error(`Element with ID cart-item-${menuId} not found.`);
                    }

                    // Kirim permintaan AJAX ke server untuk menghapus item keranjang
                    fetch(`/delete-item/${menuId}`, {
                            method: 'DELETE',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector(
                                    'meta[name="csrf-token"]').getAttribute(
                                    'content')
                            },
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (!data.success) {
                                console.error('Gagal menghapus item keranjang:', data.error);
                            }
                        })
                        .catch(error => {
                            console.error('Terjadi kesalahan:', error);
                        });
                });
            });



            function updateCartQuantity(menuId, keranjangChange) {
                // Ambil nilai jumlah baru dari elemen jumlah
                const jumlahElement = document.getElementById(`jumlah-menu-${menuId}`);
                const newQuantity = parseInt(jumlahElement.value) + keranjangChange;

                // Kirim permintaan AJAX ke server untuk memperbarui keranjang
                fetch(`/update-keranjang/${menuId}/${keranjangChange}`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                'content')
                        },
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Perbarui nilai langsung pada elemen jumlah tanpa perlu refresh
                            jumlahElement.value = newQuantity;
                            // Perbarui tampilan total harga secara real-time
                            updateCartView();
                        } else {
                            console.error('Gagal memperbarui keranjang:', data.error);
                        }
                    })
                    .catch(error => {
                        console.error('Terjadi kesalahan:', error);
                    });
            }

            function deleteCartItem(menuId) {
                // Kirim permintaan AJAX ke server untuk menghapus item keranjang
                fetch(`/delete-item/${menuId}`, {
                        method: 'DELETE',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                'content')
                        },
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Perbarui tampilan keranjang secara real-time
                            updateCartView();
                        } else {
                            console.error('Gagal menghapus item keranjang:', data.error);
                        }
                    })
                    .catch(error => {
                        console.error('Terjadi kesalahan:', error);
                    });
            }


            function updateCartView() {
                const keranjangElements = document.querySelectorAll('.keranjang-menu');
                const totalHargaElement = document.getElementById('total-harga');

                fetch('/get-cart-data', {
                        method: 'GET',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                'content')
                        },
                    })
                    .then(response => response.json())
                    .then(data => {
                        keranjangElements.forEach((element, index) => {
                            element.value = data[index].keranjang;
                        });
                        totalHargaElement.innerText = formatCurrency(data.totalHarga);
                    })
                    .catch(error => {
                        console.error('Terjadi kesalahan:', error);
                    });
            }

            // Fungsi untuk memformat angka sebagai mata uang
            function formatCurrency(amount) {
                return new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR'
                }).format(amount);
            }

        });
    </script>
