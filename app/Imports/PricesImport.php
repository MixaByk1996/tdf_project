<?php

namespace App\Imports;

use App\Models\Angle;
use App\Models\Excel;
use App\Models\Products;
use App\Models\System;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Symfony\Component\HttpKernel\HttpCache\Ssi;

class PricesImport implements ToModel
{
    public function model(array $row)
    {
        static $rates;
        if ($rates === null) {
            $rates = json_decode(file_get_contents('https://www.cbr-xml-daily.ru/daily_json.js'));
        }
        $price = $row[6] ?? '0';
        $price_ru = floatval($price) * $rates->Valute->EUR->Value;
        $data = Products::query()->where('article', $row[1])->get();
        if($data->count() > 0){
            return null;
        }

        $angle_id = Angle::query()->first()->id;

        $systemstr = trim($row[11]);

        $data_t = System::query()->where('name', $systemstr)->first();
        if ($data_t){
            $system_id = $data_t->id;
        }
        else{
            $item = System::query()->create([
                'name' => $systemstr
            ]);
            $system_id = $item->id;
        }

        $count = Products::query()->where('article','=', $row[0])->get()->count();
        $obj = null;
        if ($count > 0){
            $obj = Products::query()->where('article','=', $row[0])->first();
            $obj->update([
                'name' => $row[2] ?? 'Не указаны данные',
                'price' => $price_ru,
                'photo_url' => '',
                'image_path' => 'image/LEumoBOXxcev1dXsnbt8qplYKGVsINPe5S2gsYba.png',
                'serial_id' => 1,
                'angle_id' => $angle_id,
                'description' => 'Не указано описание',
                'article' => $row[0],
                'system_id' => $system_id,
                'producer_id' => 1,
                'category_id' => 1,
                'currency' => 'RUB',
                'tdf' => floatval($row[6]) * $rates->Valute->EUR->Value,
                'tdf_ros' => floatval($row[7]) * $rates->Valute->EUR->Value,
                'ves' => $row[8]?? '',
                'barcode' => $row[9] ?? '',
                'model' => $row[1] ?? '',
            ]);
        }
        else{
            $obj = new Products([
                'name' => $row[2] ?? 'Не указаны данные',
                'price' => $price_ru,
                'photo_url' => '',
                'image_path' => 'image/LEumoBOXxcev1dXsnbt8qplYKGVsINPe5S2gsYba.png',
                'serial_id' => 1,
                'angle_id' => $angle_id,
                'description' => 'Не указано описание',
                'article' => $row[0],
                'system_id' => $system_id,
                'producer_id' => 1,
                'category_id' => 1,
                'currency' => 'RUB',
                'tdf' => floatval($row[6]) * $rates->Valute->EUR->Value,
                'tdf_ros' => floatval($row[7]) * $rates->Valute->EUR->Value,
                'ves' => $row[8]?? '',
                'barcode' => $row[9] ?? '',
                'model' => $row[1] ?? '',
            ]);
        }


        return $obj;
    }
}
