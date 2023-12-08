@extends('layouts.partials.nav-sidebar-admin')
<header class="position-relative p-2" style="margin-top: 56px">
    <h1 class="fs-3 ms-4 ">Dashboard</h1>
</header>
 
    <main class="position-relative p-2">
        <section class="m-4 border p-3">
            <h5 class="fw-normal text-secondary ">Semua Kategori Terdaftar</h5>
            <div class="card-body">
                <div class="form-body">
                    <hr>
                    <div class="form-group mt-3">
                        <label class="control-label">Nama Kategori</label>
                        <p class="form-control-static">{{ $kategori->nama_kategori}}</p>
                    </div>
                </div>
                <div class="form-actions mt-3">
                    <a href="dashboard.php" class="btn btn-outline-danger ">Back to Dashboard</a>
                </div>
            </div>
        </section>
    </main>

