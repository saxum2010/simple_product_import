# Simple product import
This library import product data into Product model for Laravel 

## Installation

> composer require saxum2010/product-import

Add service providers
### config/app.php

> Maatwebsite\Excel\ExcelServiceProvider::class,
> Saxum2010\Productimport\ProductimportServiceProvider::class,

## Use
> php artisan import:products products.csv
