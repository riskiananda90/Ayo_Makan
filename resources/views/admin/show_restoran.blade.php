@extends('layouts.partials.nav-sidebar-admin')
    @section('header')
        <h1 class="fs-3 ms-4 ">Dashboard</h1>
    @endsection

    @section('main')
        <section class="m-4 border p-3">
            <h5 class="fw-normal text-secondary ">Restoran</h5>
            <div class="card-body">
                <div class="form-body">
                    <hr>
                    <div class="form-group mt-3">
                        <label class="control-label">Nama Restoran</label>
                        <p class="form-control-static">{{ $restoran->nama_restoran }}</p>
                    </div>
                    <div class="form-group mt-3">
                        <label class="control-label">Email</label>
                        <p class="form-control-static">{{ $restoran->email }}</p>
                    </div>
                    <div class="form-group mt-3">
                        <label class="control-label">Alamat</label>
                        <p class="form-control-static">{{ $restoran->alamat }}</p>
                    </div>
                    <div class="form-group mt-3">
                        <label class="control-label">Nomor Telepon</label>
                        <p class="form-control-static">{{ $restoran->no_telp }}</p>
                    </div>
                </div>
                <div class="form-actions mt-3">
                    <a href="dashboard.php" class="btn btn-outline-danger ">Back to Dashboard</a>
                </div>
            </div>
        </section>
    </main>

    @endsection