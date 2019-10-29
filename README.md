# Simple laravel product import
This library import product data into Product model for Laravel 

## Installation

```
composer require saxum2010/product-import
```

If you're using an older verson of Laravel (<5.5) then just manually add the provider to `config/app.php` file.

```php
Maatwebsite\Excel\ExcelServiceProvider::class,
Saxum2010\Productimport\ProductimportServiceProvider::class,
```

## Use
> php artisan import:products products.csv
