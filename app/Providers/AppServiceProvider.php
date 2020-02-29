<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App;

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
        Schema::defaultStringLength(191);
        DB::enableQueryLog();
        DB::listen(function ($query) {
            $ignoreKyes = [
                'insert into `jobs`',
                'select * from `jobs`',
                'insert into `admin_jobs`',
                'select * from `admin_jobs`'
            ];
            Log::debug('SQL', [
                'sql' => $query->sql,
                'bindings' => $query->bindings,
                'runtime' => $query->time
            ]);
        });
    }
}
