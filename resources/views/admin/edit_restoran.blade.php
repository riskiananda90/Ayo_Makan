@extends('layouts.partials.nav-sidebar-admin')
<header class="position-relative p-2" style="margin-top: 56px">
    <h1 class="fs-3 ms-4 ">Dashboard</h1>
</header>

    <main class="position-relative p-2">
        <section class="m-4 border p-3">
            <h5 class="fw-normal text-secondary ">Semua Menu Terdaftar</h5>
            <div class="card-body">
                <form action='{{ route('update_restoran', $restoran) }}' method='post' enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-body">
                        <hr>
                        <div class="form-group mt-3">
                            <label class="control-label">Nama Restoran</label>
                            <input type="text" name="nama_restoran" class="form-control" value="{{$restoran->nama_restoran}}">
                        </div>
                        <div class="form-group mt-3">
                            <label class="control-label">Email</label>
                            <input type="text" name="email" class="form-control" value="{{$restoran->email}}">
                        </div>
                        <div class="form-group mt-3">
                            <label class="control-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="{{$restoran->alamat}}">
                        </div>
                        <div class="form-group mt-3">
                            <label class="control-label">Nomor Telepon</label>
                            <input type="text" name="no_telp" class="form-control" value="{{$restoran->no_telp}}">
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
