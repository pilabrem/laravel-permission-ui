<?php

namespace Pilabrem\LaravelPermissionUI;

use Illuminate\Support\ServiceProvider;

class LaravelPermissionUiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/ressources/Views', 'laravel-permission-ui');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        //$this->loadTranslationsFrom(__DIR__.'/ressources/lang/en/', 'courier');

        $this->publishes([
            __DIR__.'/ressources/Views' => resource_path('views'),
        ], 'views');

        $this->publishes([
            __DIR__.'/ressources/lang' => resource_path('lang'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Binding de la classe DBLog pour être utilisé dans sa facade
        /* $this->app->bind('classe.dblog', function () {
            return new DBLog();
        }); */
    }
}
