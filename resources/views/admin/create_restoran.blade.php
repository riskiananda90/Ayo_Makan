@extends('layouts.partials.nav-sidebar-admin')
<header class="position-relative p-2" style="margin-top: 56px">
    <h1 class="fs-3 ms-4 ">Dashboard</h1>
</header>

    <main class="position-relative p-2">
        <section class="m-4 border p-3">
            <h5 class="fw-normal text-secondary ">Semua Menu Terdaftar</h5>
            <div class="card-body">
                <form action='{{route('store_restoran')}}' method='post' enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Nama Restoran</label>
                                    <input type="text" name="nama_restoran" class="form-control" placeholder="Rumah Makan Jawir">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group has-danger">
                                    <label class="control-label">Email</label>
                                    <input type="text" name="email" class="form-control form-control-danger"
                                        placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20 mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" placeholder="Jalan kampung jawir no 20">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group has-danger">
                                    <label class="control-label">Nomor telepon</label>
                                    <input type="number" name="no_telp" class="form-control form-control-danger" placeholder="0123456789">
                                </div>
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