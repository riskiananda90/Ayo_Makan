@extends('layouts.partials.nav-sidebar-admin')
<header class="position-relative p-2" style="margin-top: 56px">
    <h1 class="fs-3 ms-4 ">Dashboard</h1>
</header>
 
    <main class="position-relative p-2">
        <section class="m-4 border p-3">
            <h5 class="fw-normal text-secondary ">Semua Menu Terdaftar</h5>
            <div class="d-flex justify-content-between align-items-center mt-4">
                <div class="d-flex align-items-center">
                    <p class="text-secondary m-0 me-2">Show</p>
                    <form action="" class="me-2">
                        <select class="form-select form-select-sm" aria-label="Small select example">
                            <option selected>10</option>
                            <option value="1">25</option>
                            <option value="2">50</option>
                            <option value="3">100</option>
                        </select>
                    </form>
                    <p class="text-secondary m-0 ">Entri</p>
                </div>
                <form action="">
                    <div class="d-flex align-items-center ">
                        <label for="" class="form-label me-3">Search: </label>
                        <input type="text" class="form-control" name="" id=""
                            aria-describedby="helpId" placeholder="">
                    </div>
                </form>
            </div>
            <div>
                <table class="table border mt-3">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Restoran</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($menu as $menu)
                            <tr>
                                <th scope="row"> {{ $menu->id }} </th>
                                <td> {{ $menu->nama_menu }} </td>
                                <td> {{ $menu->harga_menu }} </td>
                                <td> {{ $menu->deskripsi }} </td>
                                <td> {{ $menu->kategori->nama_kategori }} </td>
                                <td> {{ $menu->restoran->nama_restoran }} </td>
                                <td> <img src="{{ url('storage/' . $menu->image) }}" alt=""> </td>
                                <td>
                                    <form action="{{ route('edit_menu', $menu) }}" method="get">
                                        <button type="submit" class="btn btn-success" role="button">
                                            <i class="fa-solid fa-pen-to-square me-2"></i>Edit
                                        </button>
                                    </form>
                                    <form action="{{ route('delete_menu', $menu)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger" role="button">
                                            <i class="fa-solid fa-trash-can me-2"></i>Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-between align-items-center ">
                    <p class="text-secondary m-0 ">Showing 1 to 10 of 10 entri</p>
                    <div class="d-flex align-items-center ">
                        <a href="" class="page-link">
                            <p class="border m-0 p-1 px-3 ">Previous</p>
                        </a>
                        <a href="" class="page-link">
                            <p class="border m-0 p-1 px-3 ">1</p>
                        </a>
                        <a href="" class="page-link">
                            <p class="border m-0 p-1 px-3 ">2</p>
                        </a>
                        <a href="" class="page-link">
                            <p class="border m-0 p-1 px-3 ">Next</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
