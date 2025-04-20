<?php

namespace Elokaily\Public\Providers;


use Illuminate\Support\ServiceProvider;

class PublicProvider extends ServiceProvider {

    public function boot() {

        $this->loadRoutesFrom(__DIR__ . "/../routes/web.php");
        $this->loadViewsFrom(__DIR__ . "/../resources/views", "public");
        $this->loadMigrationsFrom(__DIR__ . "/../database/migrations");

        // public assets from my packages
        $this->publishes([
            __DIR__.'/../resources/assets/css' => public_path('public/css'),
            __DIR__.'/../resources/assets/js' => public_path('public/js'),
            __DIR__.'/../resources/assets/img' => public_path('public/img'),
            __DIR__.'/../resources/assets/scss' => public_path('public/scss'),
            __DIR__.'/../resources/assets/lib' => public_path('public/lib'),
        ], 'public');
    }
}
