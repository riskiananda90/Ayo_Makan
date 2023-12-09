@extends('layouts.partials.nav-sidebar-admin')
    @section('header')
        <h1 class="fs-3 ms-4 ">Dashboard</h1>
    @endsection

    @section('main')
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
                    <div class="form-body">
                        <hr>
                        <div class="form-group mt-3">
                            <label class="control-label">Nama</label>
                            <p class="form-control-static">{{ $user->nama }}</p>
                        </div>
                        <div class="form-group mt-3">
                            <label class="control-label">Email</label>
                            <p class="form-control-static">{{ $user->email }}</p>
                        </div>
                        <div class="form-group mt-3">
                            <label class="control-label">Alamat</label>
                            <p class="form-control-static">{{ $user->alamat }}</p>
                        </div>
                        <div class="form-group mt-3">
                            <label class="control-label">Nomor Telepon</label>
                            <p class="form-control-static">{{ $user->no_telp }}</p>
                        </div>
                        <div class="form-group mt-3 ">
                            <div class="">
                                <label for="role" class="form-label">Role</label>
                                <p class="form-control-static">{{ $user->role }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label for="password" class="form-label">Password</label>
                        <p class="form-control-static">********</p>
                    </div>
                    <div class="form-actions mt-3">
                        <a href="dashboard.php" class="btn btn-outline-danger ">Back to Dashboard</a>
                    </div>
                </div>
            </section>

    </main>
    @endsection