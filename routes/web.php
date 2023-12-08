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

// rute menu
Route::get('/menu/create', [MenuController::class, 'create_menu'])->name('create_menu');
Route::post('/menu/create', [MenuController::class, 'store_menu'])->name('store_menu');
Route::get('/menu', [MenuController::class, 'index_menu'])->name('index_menu');
Route::get('/menu/{menu}', [MenuController::class, 'show_menu'])->name('show_menu');
Route::get('/menu/{menu}/edit', [MenuController::class, 'edit_menu'])->name('edit_menu');
Route::patch('/menu/{menu}/update', [MenuController::class, 'update_menu'])->name('update_menu');
Route::delete('/menu/{menu}', [MenuController::class, 'delete_menu'])->name('delete_menu');

// rute restoran
Route::get('/restoran/create', [RestoranController::class, 'create_restoran'])->name('create_restoran');
Route::post('/restoran/create', [RestoranController::class, 'store_restoran'])->name('store_restoran');
Route::get('/restoran', [RestoranController::class, 'index_restoran'])->name('index_restoran');
Route::get('/restoran/{restoran}', [RestoranController::class, 'show_restoran'])->name('show_restoran');
Route::get('/restoran/{restoran}/edit', [RestoranController::class, 'edit_restoran'])->name('edit_restoran');
Route::patch('/restoran/{restoran}/update', [RestoranController::class, 'update_restoran'])->name('update_restoran');
Route::delete('/restoran/{restoran}', [RestoranController::class, 'delete_restoran'])->name('delete_restoran');

// rute user
Route::get('/user/create', [UserController::class, 'create_user'])->name('create_user');
Route::post('/user/create', [UserController::class, 'store_user'])->name('store_user');
Route::get('/user', [UserController::class, 'index_user'])->name('index_user');
Route::get('/user/{user}', [UserController::class, 'show_user'])->name('show_user');
Route::get('/user/{user}/edit', [UserController::class, 'edit_user'])->name('edit_user');
Route::patch('/user/{user}/update', [UserController::class, 'update_user'])->name('update_user');
Route::delete('/user/{user}', [UserController::class, 'delete_user'])->name('delete_user');

// rute kategori
Route::get('/kategori/create', [KategoriController::class, 'create_kategori'])->name('create_kategori');
Route::post('/kategori/create', [KategoriController::class, 'store_kategori'])->name('store_kategori');
Route::get('/kategori', [KategoriController::class, 'index_kategori'])->name('index_kategori');
Route::get('/kategori/{kategori}', [KategoriController::class, 'show_kategori'])->name('show_kategori');
Route::get('/kategori/{kategori}/edit', [KategoriController::class, 'edit_kategori'])->name('edit_kategori');
Route::patch('/kategori/{kategori}/update', [KategoriController::class, 'update_kategori'])->name('update_kategori');
Route::delete('/kategori/{kategori}', [KategoriController::class, 'delete_kategori'])->name('delete_kategori');