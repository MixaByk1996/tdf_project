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
        $data = Products::query()->where('article', $row[1])->get();
        if($data->count() > 0){
            return null;
        }

        $angle_id = 0;
        $angle = Angle::query()->where('name', '0')->first();
        if(!$angle){
            $temp = Angle::query()->create([
                'name' => '0'
            ]);
            $angle_id = $temp->id;
        }else{
            $angle_id = $angle->id;
        }

        $system_id = 1;
        if(count(explode(',', $row[2])) > 2){
            $systemstr = trim(strtolower(explode(',', $row[2])[1]));
        }
         else{
             $systemstr = '';
         }


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

        $temp_angle_str = trim(strtolower(explode(',', $row[2])[0]));
        $temp_angle_arr = explode(" ", $temp_angle_str);
        $res = '';
        foreach ($temp_angle_arr as $it){
            if(str_contains('°', $it)){
                $res = $it;
                break;
            }
        }
        if($res != ''){
            $angle_temp = Angle::query()->where('name', $res)->first();
            if($angle_temp){
                $angle_id = $angle_temp->id;
            }
            else{
                $cr = Angle::query()->create([
                    'name' => $res
                ]);
                $angle_id = $cr->id;
            }
        }

        return new Products([
            'name' => $row[0] ?? 'Не указаны данные',
            'price' => $row[6] ?? '0',
            'photo_url' => $row[1],
            'image_path' => 'image/LEumoBOXxcev1dXsnbt8qplYKGVsINPe5S2gsYba.png',
            'serial_id' => 1,
            'description' => 'Не указано описание',
            'article' => $row[4],
            'system_id' => $system_id,
            'producer_id' => 1,
            'category_id' => 2,
            'angle_id' => $angle_id,
        ]);
    }
}
