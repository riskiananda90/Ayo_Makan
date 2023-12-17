@extends('layouts.partials.nav-sidebar-admin')
@section('header')
    <h1 class="fs-3 ms-4 ">Dashboard</h1>
@endsection

@section('main')
    <section class="m-4 border p-3">
        <h5 class="fw-normal text-secondary ">Semua Menu Terdaftar</h5>
        <div class="card-body">
            <div class="form-body">
                <hr>
                <div class="form-group mt-3">
                    <label class="control-label">Nama</label>
                    <p class="form-control-static">{{ $menu->nama_menu }}</p>
                </div>
                <div class="form-group mt-3">
                    <label class="control-label">Harga</label>
                    <p class="form-control-static">{{ $menu->harga_menu }}</p>
                </div>
                <div class="form-group mt-3">
                    <label class="control-label">Deskripsi</label>
                    <p class="form-control-static">{{ $menu->deskripsi }}</p>
                </div>
                <div class="form-group mt-3">
                    <label class="control-label">Gambar</label>
                    <br>
                    @if ($menu->image)
                        <img src="{{ asset('storage/' . $menu->image) }}" alt="Menu Image">
                    @else
                        <p class="form-control-static">Tidak ada gambar</p>
                    @endif
                </div>
                <div class="form-group mt-3">
                    <label class="control-label">Restoran</label>
                    <p class="form-control-static">{{ $menu->restoran->nama_restoran }}</p>
                </div>
                <div class="form-group mt-3">
                    <label class="control-label ">Kategori</label>
                    <p class="form-control-static">{{ $menu->kategori->nama_kategori }}</p>
                </div>

            </div>
            <div class="form-actions mt-3">
                <a href="dashboard.php" class="btn btn-outline-danger ">Back to Dashboard</a>
            </div>
        </div>
    </section>
@endsection
