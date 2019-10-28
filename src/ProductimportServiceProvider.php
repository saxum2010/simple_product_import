<?php

namespace Saxum2010\Productimport;

use Illuminate\Support\ServiceProvider;

class ProductimportServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        if ($this->app->runningInConsole()) {
            $this->commands([
                ProductImportCommand::class,
            ]);
        }
    }
}
