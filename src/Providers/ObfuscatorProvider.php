<?php


namespace Deno\Obfuscator\Providers;

use Illuminate\Support\ServiceProvider;

class ObfuscatorProvider extends ServiceProvider
{
    /**
     * Bootstrap any  services.
     *
     * @return void
     */
    public function boot()
    {
        //load our package route
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        //load package views 
        $this->loadViewsFrom(__DIR__.'/../views', 'obfuscator');

    }
}