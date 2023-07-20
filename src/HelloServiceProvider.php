<?php 
namespace Akp\Hello;
use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{
    public function boot() {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'hello');

        $this->publishes([
            __DIR__.'/views' => resource_path('views/hello'),
        ]);
    }

    public function register() {

    }
}