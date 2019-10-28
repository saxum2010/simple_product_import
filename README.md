# Simple product import
for Laravel Product model

Add service providers
### config/app.php

> Maatwebsite\Excel\ExcelServiceProvider::class,
> Saxum2010\Productimport\ProductimportServiceProvider::class,

## Use
> php artisan import:products products.csv
