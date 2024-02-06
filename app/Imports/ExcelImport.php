<?php

namespace App\Imports;

use App\Models\Excel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExcelImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return Excel
     */
    public function model(array $row)
    {
        return new Excel([
            'name' => $row[0],
            'article' => $row[2],
            'photo_url' => $row[1],
            'description' => $row[4],
        ]);
    }
}
