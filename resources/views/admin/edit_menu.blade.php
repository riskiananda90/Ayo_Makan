@extends('layouts.partials.nav-sidebar-admin')
<header class="position-relative p-2" style="margin-top: 56px">
    <h1 class="fs-3 ms-4 ">Dashboard</h1>
</header>
 
    <main class="position-relative p-2">
        <section class="m-4 border p-3">
            <h5 class="fw-normal text-secondary ">Semua Menu Terdaftar</h5>
            <div class="card-body">
                <form action='{{ route('update_menu', $menu) }}' method='post' enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-body">
                        <hr>
                        <div class="form-group mt-3">
                            <label class="control-label">Nama</label>
                            <input type="text" name="nama_menu" class="form-control" value="{{$menu->nama_menu}}">
                        </div>
                        <div class="form-group mt-3">
                            <label class="control-label">Harga</label>
                            <input type="text" name="harga_menu" class="form-control" value="{{$menu->harga_menu}}">
                        </div>
                        <div class="form-group mt-3">
                            <label class="control-label">Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control" value="{{$menu->deskripsi}}">
                        </div>
                        <div class="form-group mt-3">
                            <label class="control-label">Gambar</label>
                            <br>
                            @if ($menu->image)
                                <img src="{{ asset('storage/' . $menu->image) }}" alt="Current Image">
                            @endif
                            <input type="file" name="image" class="form-control" accept="image/*">
                        </div>                        
                        <div class="form-group mt-3">
                            <label class="control-label">Pilih Restoran</label>
                            <select name="id_restoran" class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                <option value="">--Restoran--</option>
                                @foreach ($restoran as $res)
                                    <option value="{{ $res->id }}" {{ $res->id == $menu->id_restoran ? 'selected' : '' }}>{{ $res->nama_restoran }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <label class="control-label">Pilih Kategori</label>
                            <select name="id_kategori" class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                <option value="">--Kategori--</option>
                                @foreach ($kategori as $kat)
                                    <option value="{{ $kat->id }}" {{ $kat->id == $menu->id_kategori ? 'selected' : '' }}>{{ $kat->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        

                    <div class="form-actions mt-3">
                        <button type="submit" class="btn btn-danger me-2">Save</button>
                        <a href="dashboard.php" class="btn btn-outline-danger ">Cancel</a>
                    </div>
                </form>
            </div>
        </section>
    </main>