@extends('layouts.partials.nav-sidebar-admin')
    @section('header')
        <h1 class="fs-3 ms-4 ">Dashboard</h1>
    @endsection

    @section('main')
        <section class="m-4 border p-3">
            <h5 class="fw-normal text-secondary ">Semua Menu Terdaftar</h5>
            <div class="card-body">
                <form action='{{ route('update_user', $user) }}' method='post' enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-body">
                        <hr>
                        <div class="form-group mt-3">
                            <label class="control-label">Nama</label>
                            <input type="text" name="nama" class="form-control" value="{{$user->nama}}">
                        </div>
                        <div class="form-group mt-3">
                            <label class="control-label">Email</label>
                            <input type="text" name="email" class="form-control" value="{{$user->email}}">
                        </div>
                        <div class="form-group mt-3">
                            <label class="control-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="{{$user->alamat}}">
                        </div>
                        <div class="form-group mt-3">
                            <label class="control-label">Nomor Telepon</label>
                            <input type="text" name="no_telp" class="form-control" value="{{$user->no_telp}}">
                        </div>
                        <div class="form-group mt-3 ">
                            <div class="">
                                <label for="role" class="form-label">Role</label>
                                <select class="form-select form-select-lg fs-6 " name="role" id="role">
                                    <option selected disabled value="{{$user->role}}">Hak Akses</option>
                                    <option value="admin">Admin</option>
                                    <option value="restoran">Restoran</option>
                                    <option value="pengguna">Pengguna</option>
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