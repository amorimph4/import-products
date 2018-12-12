<?php

namespace App\Imports;

use App\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithBatchInserts;

class ProductImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if($row[0] == 'lm' || !isset($row[0]) ){
            return null;
        }

        return new Product([
            'lm' => $row[0],
            'name' => $row[1], 
            'free_shipping' => $row[2], 
            'description' => $row[3], 
            'price' => $row[4]
        ]);
    }
}
