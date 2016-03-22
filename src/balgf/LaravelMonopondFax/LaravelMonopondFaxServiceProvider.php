<?php namespace balgf\LaravelMonopondFax;

use Illuminate\Support\ServiceProvider;
use App\Services\PaypalAPI;

class PaypalAPIServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../config/monopond.php' => config_path('monopond.php'),
        ]);
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/monopond.php', 'monopond'
        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('laravel-monopond-fax',function(){
            return new MonopondSOAPClientV2("myusername", "mypassword", MPENV::Production);
        });
    }

}
