<?php

namespace Saxum\ProductImport;

use Illuminate\Support\ServiceProvider;

class ProductImportServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands(
            'Saxum\Productimport\Console\Commands\ProductImportCommand'
        );
    }
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
