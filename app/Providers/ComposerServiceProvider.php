<?php

namespace App\Providers;

use App\Http\Composers\AdminGlobalComposer;
use App\Http\Composers\MainGlobalComposer;
use Illuminate\Support\ServiceProvider;
use View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('admin/dashboard/*', AdminGlobalComposer::class);
        View::composer('main/*', MainGlobalComposer::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
