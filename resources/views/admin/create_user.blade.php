@extends('layouts.partials.nav-sidebar-admin')
    @section('header')
        <h1 class="fs-3 ms-4 ">Dashboard</h1>
    @endsection

    @section('main')
        <section class="m-4 border p-3">
            <h5 class="fw-normal text-secondary ">Membuat User</h5>
            <div class="card-body">
                <form action='{{ route('store_user') }}' method='post' enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <hr>
                        <div class="form-group mt-3">
                            <label class="control-label">Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Ahmad">
                        </div>
                        <div class="form-group mt-3">
                            <label class="control-label">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Ahmad@gmail.com">
                        </div>
                        <div class="form-group mt-3">
                            <label class="control-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control"
                                placeholder="jalan kampung asia">
                        </div>
                        <div class="form-group mt-3">
                            <label class="control-label">Nomor Telepon</label>
                            <input type="text" name="no_telp" class="form-control" placeholder="0123456789">
                        </div>
                        <div class="form-group mt-3 ">
                            <div class="">
                                <label for="role" class="form-label">Role</label>
                                <select class="form-select form-select-lg fs-6 " name="role" id="role">
                                    <option selected>Hak Akses</option>
                                    <option value="">Admin</option>
                                    <option value="">Restoran</option>
                                    <option value="">Pengguna</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="" />
                    </div>

                    <div class="form-actions mt-3">
                        <button type="submit" class="btn btn-danger me-2">Save</button>
                        <a href="dashboard.php" class="btn btn-outline-danger ">Cancel</a>
                    </div>
                </form>
            </div>
        </section>
    </main>
    @endsection