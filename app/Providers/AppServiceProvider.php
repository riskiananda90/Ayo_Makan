<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\keranjang;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layouts.partials.navbar', function ($view) {
            $keranjang = Keranjang::with('menu')->where('id_user', auth()->id())->get();
            $totalHarga = $keranjang->sum('total_harga');

            $view->with(['keranjang' => $keranjang, 'totalHarga' => $totalHarga]);
        });
    }
}
