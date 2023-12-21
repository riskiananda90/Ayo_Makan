@extends('layouts.partials.nav-sidebar-admin')
    @section('header')
        <h1 class="fs-3 ms-4 ">Dashboard</h1>
    @endsection

    @section('main')
        <section class="m-4 border p-3">
            <h5 class="fw-normal text-secondary ">Semua Restoran Terdaftar</h5>
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
                <div class="table-responsive">
                    <table class="table table-bordered border mt-3">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nama Restoran</th>
                                <th scope="col">Email</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Nomor Telepon</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($restoran as $restoran)
                                <tr>
                                    <th scope="row"> {{ $restoran->id }} </th>
                                    <td> {{ $restoran->nama_restoran }} </td>
                                    <td> {{ $restoran->email }} </td>
                                    <td> {{ $restoran->alamat }} </td>
                                    <td> {{ $restoran->no_telp }} </td>
                                    <td>
                                        <form action="{{ route('edit_restoran', $restoran) }}" method="get">
                                            <button type="submit" class="btn btn-success" role="button">
                                                <i class="fa-solid fa-pen-to-square me-2"></i>Edit
                                            </button>
                                        </form>
                                        <form action="{{ route('delete_restoran', $restoran) }}" method="post">
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
                </div>
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
    @endsection
