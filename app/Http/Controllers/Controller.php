<?php

namespace App\Http\Controllers;

use App\Mail\SendNotification;
use App\Mail\SendQuestion;
use App\Models\Angle;
use App\Models\Categories;
use App\Models\Producer;
use App\Models\Products;
use App\Models\Series;
use App\Models\System;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function sendQuestions(Request $request){
        Mail::to('tdfurnitur@gmail.com')->send(new SendQuestion($request->get('name'), $request->get('phone'), $request->get('description')));
        $systems = System::all();
        return view('home', ['systems' => $systems]);
    }

    public function sendNotification(Request $request){
        Mail::to('tdfurnitur@gmail.com')->send(new SendNotification($request->get('name'), $request->get('phone'), $request->get('description'), $request->get('email'), $request->get('inn')));
        $systems = System::all();
        return view('home', ['systems' => $systems]);
    }

    public function filters(Request  $request){
        $series_id = [];
        $producers_id = [];
        $categories_id= [];
        $angles_id = [];
        foreach ($request->all() as $key => $value) {
            if(str_contains($key, 'producer')){
                $producers_id[] = intval(explode("_", $key)[1]);
            }
            if(str_contains($key, 'serie')){
                $series_id[] = intval(explode("_", $key)[1]);
            }
            if(str_contains($key, 'category')){
                $categories_id[] = intval(explode("_", $key)[1]);
            }
            if(str_contains($key, 'angle')){
                $angles_id[] = intval(explode("_", $key)[1]);
            }
        }
        $products = Products::with(['system', 'angle', 'producer']);
        if(!empty($producers_id)){
            $products = $products->whereIn('producer_id', $producers_id);
        }if(!empty($series_id)){
            $products = $products->whereIn('serial_id', $series_id);
        }if(!empty($categories_id)){
            $products = $products->whereIn('category_id', $categories_id);
        }if(!empty($angles_id)){
            $products = $products->whereIn('angle_id', $angles_id);
        }


        $systems = System::all();
        $producers = Producer::all();
        $series = Series::all();
        $categories =Categories::all();
        $angle = Angle::all();
        $count = count($products->get());
        return view('catalog', ['products' => $products->get(), 'count' => $count,  'systems' => $systems, 'producers' => $producers, 'series' => $series, 'categories' => $categories, 'angle' => $angle]);

    }


    public function run_script(Request $request){

    }
}
