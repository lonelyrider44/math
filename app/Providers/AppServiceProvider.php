<?php

namespace App\Providers;

use DB;
use File;
use Illuminate\Support\ServiceProvider;

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
        // Add in boot function
        // DB::listen(function ($query) {
        //     File::append(
        //         storage_path('/logs/query.log'),
        //         '[' . date('Y-m-d H:i:s') . ']' . PHP_EOL . $query->sql . ' [' . implode(', ', $query->bindings) . ']' . PHP_EOL . PHP_EOL
        //     );

        // });
    }
}