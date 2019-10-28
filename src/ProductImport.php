<?php
namespace Saxum2010\Productimport;

use App\Product;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithProgressBar;
use Maatwebsite\Excel\Row;

class ProductImport implements OnEachRow, WithHeadingRow, WithChunkReading, WithProgressBar
{
    use Importable;

    public function onRow(Row $row)
    {
        $row = $row->toArray();
        $product = new Product();
        foreach ($product->getFillable() as $key => $value) {
            if(isset($row[$value])){
                $new_row[$value] = $row[$value];
            }
        }

        $product = Product::updateOrCreate(
            ['sku' => $row['sku']],
            $new_row
        );
    }

    public function chunkSize(): int
    {
        return 1000;
    }
}
