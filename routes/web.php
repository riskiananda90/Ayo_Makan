    <?php

    use App\Http\Controllers\AdminController;
    use App\Http\Controllers\MenuController;
    use App\Http\Controllers\RestoranController;
    use App\Http\Controllers\UserController;
    use Illuminate\Support\Facades\Route;
    use Illuminate\Support\Facades\Auth;
    use App\Http\Controllers\KategoriController;
    use App\Http\Controllers\HalamanController;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\KeranjangController;

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



    Auth::routes();

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/menu/{id}', [HomeController::class, 'produk'])->name('makanan');
    Route::get('/pemesanan/{id}/{id_menu}', [HomeController::class, 'showPemesanan'])
        ->name('showPemesanan');
    Route::get('/get-more-menu/{idRestoran}/{idKategori}/{jumlahMenuTampil}', [HomeController::class, 'getMoreMenu']);
    Route::get('/check-more-menu/{kategoriId}/{jumlahMenuTampil}', [HomeController::class, 'checkMoreMenu']);
    Route::post('/tambah-keranjang/{menu}', [KeranjangController::class, 'tambah_keranjang'])->name('tambah-keranjang');
    Route::get('/get-keranjang', [KeranjangController::class, 'index'])->name('index-keranjang');
    Route::get('/get-cart-data', [KeranjangController::class, 'getCartData']);
    Route::post('/update-keranjang/{id}/{keranjangChange}', [KeranjangController::class, 'update_keranjang'])->name('update_keranjang');
    Route::delete('/delete-item/{menuId}', [KeranjangController::class, 'delete_item'])->name('delete_item');
    Route::view('/pembayaran', 'pembayaran')->name('pembayaran');

    Route::view('/admin/dashboard', 'admin.dashboard')->middleware(['auth', 'checkRole:1,2'])->name('admin.dashboard');
    // Rute menu
    Route::get('/admin/menu/create', [MenuController::class, 'create_menu'])->middleware(['auth', 'checkRole:1,2'])->name('create_menu');
    Route::post('/admin/menu/create', [MenuController::class, 'store_menu'])->middleware(['auth', 'checkRole:1,2'])->name('store_menu');
    Route::get('/admin/menu', [MenuController::class, 'index_menu'])->middleware(['auth', 'checkRole:1,2'])->name('index_menu');
    Route::get('/admin/menu/{menu}', [MenuController::class, 'show_menu'])->middleware(['auth', 'checkRole:1,2'])->name('show_menu');
    Route::get('/admin/menu/{menu}/edit', [MenuController::class, 'edit_menu'])->middleware(['auth', 'checkRole:1,2'])->name('edit_menu');
    Route::patch('/admin/menu/{menu}/update', [MenuController::class, 'update_menu'])->middleware(['auth', 'checkRole:1,2'])->name('update_menu');
    Route::delete('/admin/menu/{menu}', [MenuController::class, 'delete_menu'])->middleware(['auth', 'checkRole:1,2'])->name('delete_menu');

    // Rute restoran
    Route::get('/admin/restoran/create', [RestoranController::class, 'create_restoran'])->middleware(['auth', 'checkRole:1'])->name('create_restoran');
    Route::post('/admin/restoran/create', [RestoranController::class, 'store_restoran'])->middleware(['auth', 'checkRole:1'])->name('store_restoran');
    Route::get('/admin/restoran', [RestoranController::class, 'index_restoran'])->middleware(['auth', 'checkRole:1'])->name('index_restoran');
    Route::get('/admin/restoran/{restoran}', [RestoranController::class, 'show_restoran'])->middleware(['auth', 'checkRole:1'])->name('show_restoran');
    Route::get('/admin/restoran/{restoran}/edit', [RestoranController::class, 'edit_restoran'])->middleware(['auth', 'checkRole:1'])->name('edit_restoran');
    Route::patch('/admin/restoran/{restoran}/update', [RestoranController::class, 'update_restoran'])->middleware(['auth', 'checkRole:1'])->name('update_restoran');
    Route::delete('/admin/restoran/{restoran}', [RestoranController::class, 'delete_restoran'])->middleware(['auth', 'checkRole:1'])->name('delete_restoran');

    // Rute user
    Route::get('/admin/user/create', [UserController::class, 'create_user'])->middleware(['auth', 'checkRole:1'])->name('create_user');
    Route::post('/admin/user/create', [UserController::class, 'store_user'])->middleware(['auth', 'checkRole:1'])->name('store_user');
    Route::get('/admin/user', [UserController::class, 'index_user'])->middleware(['auth', 'checkRole:1'])->name('index_user');
    Route::get('/admin/user/{user}', [UserController::class, 'show_user'])->middleware(['auth', 'checkRole:1'])->name('show_user');
    Route::get('/admin/user/{user}/edit', [UserController::class, 'edit_user'])->middleware(['auth', 'checkRole:1'])->name('edit_user');
    Route::patch('/admin/user/{user}/update', [UserController::class, 'update_user'])->middleware(['auth', 'checkRole:1'])->name('update_user');
    Route::delete('/admin/user/{user}', [UserController::class, 'delete_user'])->middleware(['auth', 'checkRole:1'])->name('delete_user');

    // Rute kategori
    Route::get('/admin/kategori/create', [KategoriController::class, 'create_kategori'])->middleware(['auth', 'checkRole:1'])->name('create_kategori');
    Route::post('/admin/kategori/create', [KategoriController::class, 'store_kategori'])->middleware(['auth', 'checkRole:1'])->name('store_kategori');
    Route::get('/admin/kategori', [KategoriController::class, 'index_kategori'])->middleware(['auth', 'checkRole:1'])->name('index_kategori');
    Route::get('/admin/kategori/{kategori}', [KategoriController::class, 'show_kategori'])->middleware(['auth', 'checkRole:1'])->name('show_kategori');
    Route::get('/admin/kategori/{kategori}/edit', [KategoriController::class, 'edit_kategori'])->middleware(['auth', 'checkRole:1'])->name('edit_kategori');
    Route::patch('/admin/kategori/{kategori}/update', [KategoriController::class, 'update_kategori'])->middleware(['auth', 'checkRole:1'])->name('update_kategori');
    Route::delete('/admin/kategori/{kategori}', [KategoriController::class, 'delete_kategori'])->middleware(['auth', 'checkRole:1'])->name('delete_kategori');
