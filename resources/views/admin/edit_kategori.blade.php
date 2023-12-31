@extends('layouts.partials.nav-sidebar-admin')
    @section('header')
        <h1 class="fs-3 ms-4 ">Dashboard</h1>
    @endsection

    @section('main')
        <section class="m-4 border p-3">
            <h5 class="fw-normal text-secondary ">Edit Kategori</h5>
            <div class="card-body">
                <form action='{{ route('update_kategori', $kategori) }}' method='post' enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-body">
                        <hr>
                        <div class="form-group mt-3">
                            <label class="control-label">Nama Kategori</label>
                            <input type="text" name="nama_kategori" class="form-control" value="{{$kategori->nama_kategori}}">
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
    @endsection