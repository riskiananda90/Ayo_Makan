@extends('layouts.partials.nav-sidebar-admin')
<header class="position-relative p-2" style="margin-top: 56px">
    <h1 class="fs-3 ms-4 ">Dashboard</h1>
</header>

    <main class="position-relative p-2">
        <section class="m-4 border p-3">
            <h5 class="fw-normal text-secondary ">Semua Order Terdaftar</h5>
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
                            <th scope="col">#</th>
                            <th scope="col">Total Harga</th>
                            <th scope="col">Waktu Pemesanan</th>
                            <th scope="col">Status Pemesanan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pesanan as $pesanan)
                            <tr>
                                <th scope="row"> {{ $pesanan->id }} </th>
                                <td> {{ $pesanan->total_harga }} </td>
                                <td> {{ $pesanan->waktu_pemesanan }} </td>
                                <td> {{ $pesanan->status_pemesanan }} </td>

                                <td>
                                    <a name="" id="" class="btn btn-success" href="#"
                                        role="button">
                                        <i class="fa-solid fa-pen-to-square me-2"></i>Edit
                                    </a>
                                    <a name="" id="" class="btn btn-danger" href="#"
                                        role="button">
                                        <i class="fa-solid fa-trash-can me-2"></i>Delete
                                    </a>
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