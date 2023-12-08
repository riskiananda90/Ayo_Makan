<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AyoMakan</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- FontAwesome 6.2.0 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- (Optional) Use CSS or JS implementation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
        integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="{{ asset('build/assets/admin/css/dashboard.css') }}">
</head>

<body>
    <div class="sidebar position-fixed h-100 z-3 ">
        <div class="logo-details w-100 d-flex align-items-center">
            <i class="fa fa-solid fa-bowl-rice text-white text-center icon"></i>
            <span class="logo-name text-white">AyoMakan</span>
        </div>
        <ul class="navbar-nav h-100 pt-2">
            <li class="item nav-item my-2">
                <div class="d-flex justify-content-between align-items-center">
                    <a href="#" class="nav-link d-flex align-items-center ">
                        <i class="fa-solid fa-border-all icon"></i>
                        <span class="fs-6 fw-normal text-white ">Dashboard</span>
                    </a>
                    <i class='fa-solid fa-caret-down icon arrow '></i>
                </div>
                <ul class="sub-menu navbar-nav">
                    <li><a href="#" class="link-head nav-link text-white">Dashboard</a></li>
                    <li><a href="#" class="nav-link text-white">Halaman Utama</a></li>
                </ul>
            </li>
            <li class="item nav-item my-2">
                <div class="d-flex justify-content-between align-items-center item">
                    <a href="#" class="nav-link d-flex align-items-center ">
                        <i class="fa-solid fa-users icon"></i>
                        <span class="fs-6 fw-normal text-white ">Users</span>
                    </a>
                    <i class='fa-solid fa-caret-down icon arrow'></i>
                </div>
                <ul class="sub-menu navbar-nav">
                    <li><a href="#" class="link-head nav-link text-white">Users</a></li>
                    <li><a href="#" class="nav-link text-white">Semua Users</a></li>
                    <li><a href="#" class="nav-link text-white">Tambahkan Users</a></li>
                </ul>
            </li>
            <li class="item nav-item my-2 ">
                <div class="d-flex justify-content-between align-items-center item">
                    <a href="#" class="nav-link d-flex align-items-center ">
                        <i class="fa-solid fa-shop icon"></i>
                        <span class="fs-6 fw-normal text-white ">Toko</span>
                    </a>
                    <i class='fa-solid fa-caret-down icon arrow'></i>
                </div>
                <ul class="sub-menu navbar-nav">
                    <li><a href="#" class="link-head nav-link text-white">Toko</a></li>
                    <li><a href="#" class="nav-link text-white">Semua Toko</a></li>
                    <li><a href="#" class="nav-link text-white">Tambahkan Toko</a></li>
                    <li><a href="#" class="nav-link text-white">Tambahkan Kategori</a></li>
                </ul>
            </li>
            <li class="item nav-item my-2">
                <div class="d-flex justify-content-between align-items-center item">
                    <a href="#" class="nav-link d-flex align-items-center ">
                        <i class="fa-solid fa-utensils icon"></i>
                        <span class="fs-6 fw-normal text-white ">Menu</span>
                    </a>
                    <i class='fa-solid fa-caret-down icon arrow'></i>
                </div>
                <ul class="sub-menu navbar-nav">
                    <li><a href="#" class="link-head nav-link text-white">Menu</a></li>
                    <li><a href="#" class="nav-link text-white">Semua Menu</a></li>
                    <li><a href="#" class="nav-link text-white">Tambahkan Menu</a></li>
                </ul>
            </li>
            <li class="item nav-item my-2">
                <div class="d-flex justify-content-between align-items-center item">
                    <a href="#" class="nav-link d-flex align-items-center ">
                        <i class="fa-solid fa-cart-shopping icon"></i>
                        <span class="fs-6 fw-normal text-white ">Orders</span>
                    </a>
                    <i class='fa-solid fa-caret-down icon arrow'></i>
                </div>
                <ul class="sub-menu navbar-nav">
                    <li><a href="#" class="link-head nav-link text-white">Orders</a></li>
                    <li><a href="#" class="nav-link text-white">Semua Order</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <nav class="navbar navbar-expand-sm position-relative z-3">
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
            aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto p-0 mt-lg-0">
                <li class="nav-item icon-bar">
                    <i class="fa-solid fa-bars icon"></i>
                </li>
            </ul>
            <form action="" class="d-flex justify-content-center w-75">
                <input type="search" class="form-control" id="search" placeholder="Search">
                <button class="btn btn-outline-danger ms-3 me-5 " type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <i class="fas fa-search"></i> <span></span>
                </button>
            </form>
            <div class="btn-group mx-4">
                <button type="button" class="btn btn-outline-danger dropdown-toggle" data-bs-toggle="dropdown"
                    data-bs-display="static" aria-expanded="false">
                    <i class="fa-regular fa-circle-user btn-outline-danger"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-start dropdown-menu-lg-end">
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="position-relative p-2">
        <h1 class="fs-3 ms-4 ">Dashboard</h1>
    </header>

    <main class="position-relative p-2">
        <section class="m-4 border p-3">
            <h5 class="fw-normal text-secondary ">Semua Menu Terdaftar</h5>
            <div class="card-body">
                <form action='{{ route('store_menu') }}' method='post' enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Nama Menu</label>
                                    <input type="text" name="nama_menu" class="form-control"
                                        placeholder="Nasi goreng">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group has-danger">
                                    <label class="control-label">Deskripsi</label>
                                    <input type="text" name="deskripsi" class="form-control form-control-danger"
                                        placeholder="Deskripsi">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20 mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Harga</label>
                                    <input type="number" name="harga_menu" class="form-control"
                                        placeholder="Rp.10000">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group has-danger">
                                    <label class="control-label">Image</label>
                                    <input type="file" name="image"
                                        class="form-control form-control-danger" placeholder="12n">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Pilih Restoran</label>
                                    <select name="id_restoran" class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                        <option>--Restoran--</option>
                                        @foreach ($restoran as $resto)
                                            <option value="{{ $resto->id }}">{{ $resto->nama_restoran }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Pilih Kategori</label>
                                        <select name="id_kategori" class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                            <option>--Kategori--</option>
                                            @foreach ($kategori as $kat)
                                                <option value="{{ $kat->id }}">{{ $kat->nama_kategori }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                            </div>
                        </div>
                        
                        
                    <div class="form-actions mt-3">
                        <button type="submit" class="btn btn-danger me-2">Save</button>
                        <a href="dashboard.php" class="btn btn-outline-danger ">Cancel</a>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script src="{{ asset('build/assets/admin/js/dashboard.js') }}"></script>
</body>

</html>
