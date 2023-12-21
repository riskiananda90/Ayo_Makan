@extends('layouts.partials.nav-sidebar-admin')
    @section('header')
        <h1 class="fs-3 ms-4 ">Dashboard</h1>
    @endsection

    @section('main')
        <section class="m-4 border p-3">
            <h5 class="fw-normal text-secondary ">Membuat menu</h5>
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
    @endsection