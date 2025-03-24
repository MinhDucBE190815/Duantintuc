<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $menu = DB::table('loaitin')
        ->select('id', 'tenloai')
        ->orderBy('id', 'asc')
        ->where('id', '>', 0)
        ->limit(5)
        ->get();

    // Chia sẻ $menu cho tất cả các view
    View::share('menu', $menu);
    }
}
