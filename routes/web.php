<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\RestoranController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\KategoriController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/menu/create', [MenuController::class, 'create_menu'])->name('create_menu');
Route::post('/menu/create', [MenuController::class, 'store_menu'])->name('store_menu');
Route::get('/restoran/create', [RestoranController::class, 'create_restoran'])->name('create_restoran');
Route::post('/restoran/create', [RestoranController::class, 'store_restoran'])->name('store_restoran');
Route::get('/user/create', [UserController::class, 'create_user'])->name('create_user');
Route::post('/user/create', [UserController::class, 'store_user'])->name('store_user');
Route::get('/kategori/create', [kategoriController::class, 'create_kategori'])->name('create_kategori');
Route::post('/kategori/create', [kategoriController::class, 'store_kategori'])->name('store_kategori');

