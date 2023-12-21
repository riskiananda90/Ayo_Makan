@extends('layouts.partials.nav-sidebar-admin')

@section('header')
    <h1 class="fs-3 ms-4 ">Dashboard</h1>
@endsection

@section('main')
<main class="d-flex">
    <div class="box card my-5 bg-primary">
        <div class="card-body d-flex justify-content-between align-items-center">
            <i class="fa-solid fa-users text-light icon"></i>
            <div class="d-flex flex-column justify-content-end align-items-end">
                <h2 class="card-title m-0 text-light">8</h2>
                <p class="card-text fs-4 m-0 text-light ">User</p>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-between bg-light">
            <small class="text-body-secondary">View Details</small>
            <a href="#" class="text-primary"><i class="fa-solid fa-right-to-bracket"></i></a>
        </div>
    </div>
    <div class="box card my-5 bg-warning">
        <div class="card-body d-flex justify-content-between align-items-center">
            <i class="fa-solid fa-shop text-light icon"></i>
            <div class="d-flex flex-column justify-content-end align-items-end">
                <h2 class="card-title m-0 text-light ">8</h2>
                <p class="card-text fs-4 m-0 text-light ">Toko</p>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-between bg-light ">
            <small class="text-body-secondary">View Details</small>
            <a href="#" class="text-warning"><i class="fa-solid fa-right-to-bracket"></i></a>
        </div>
    </div>
    <div class="box card my-5 bg-danger ">
        <div class="card-body d-flex justify-content-between align-items-center">
            <i class="fa-solid fa-utensils text-light icon"></i>
            <div class="d-flex flex-column justify-content-end align-items-end">
                <h2 class="card-title m-0 text-light">8</h2>
                <p class="card-text fs-4 m-0 text-light">Menu</p>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-between bg-light">
            <small class="text-body-secondary">View Details</small>
            <a href="#" class="text-danger"><i class="fa-solid fa-right-to-bracket"></i></a>
        </div>
    </div>
    <div class="box card my-5 bg-success">
        <div class="card-body d-flex justify-content-between align-items-center">
            <i class="fa-solid fa-cart-shopping text-light icon"></i>
            <div class="d-flex flex-column justify-content-end align-items-end">
                <h2 class="card-title m-0 text-light">8</h2>
                <p class="card-text fs-4 m-0 text-light">Orders</p>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-between bg-light">
            <small class="text-body-secondary">View Details</small>
            <a href="#" class="text-success "><i class="fa-solid fa-right-to-bracket"></i></a>
        </div>
    </div>
</main>

@endsection
