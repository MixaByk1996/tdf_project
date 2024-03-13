<?php

namespace App\Http\Controllers;

use App\Imports\ExcelImport;
use App\Imports\PricesImport;
use App\Mail\SendNotification;
use App\Mail\SendQuestion;
use App\Models\Angle;
use App\Models\Backet;
use App\Models\Categories;
use App\Models\Producer;
use App\Models\Products;
use App\Models\Series;
use App\Models\Svg;
use App\Models\System;
use App\Models\TempBacket;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

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
        if(Auth::check()){
            $cards = Backet::query()->where('user_id', Auth::user()->id)->with(['product','user'])->get();
        }
        else{
            $cards = TempBacket::query()->where('ip', $request->ip())->with(['product'])->get();
        }
        $series_id = [];
        $producers_id = [];
        $categories_id= [];
        $angles_id = [];
        $systems_id = [];
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
            } if(str_contains($key, 'system')){
                $systems_id[] = intval(explode("_", $key)[1]);
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
        }if(!empty($systems_id)){
            $products = $products->whereIn('system_id', $systems_id);
        }

        $systems = System::query()->whereIn('id', [1,2,3,4,5,6,7,8])->get();
        $producers = Producer::all();
        $series = Series::all();
        $categories =Categories::all();
        $angle = Angle::all();
        $count = count($products->paginate(10));
        return view('catalog', ['products' => $products->paginate(10), 'cards' => $cards, 'count' => $count,  'systems' => $systems, 'producers' => $producers, 'series' => $series, 'categories' => $categories, 'angle' => $angle]);
    }


    public function run_script(Request $request){
        $data = \App\Models\Excel::all();
        foreach ($data as $item){
            if($item->id != 1){
                $product = new Products();
                $filename = explode('\\',$item->photo_url)[5];
                $product->image_path =  "image/$filename";
                $product->name = $item->name;
                $product->price = 13;
                $product->serial_id = 1;
                $product->description = $item->description;
                $product->article = $item->article;
                $product->system_id = 1;
                $product->producer_id = 1;
                $product->category_id = 1;
                $product->angle_id = 1;
                $product->save();
            }
        }
        return response()->json([
            'message' => 'ok'
        ]);

    }

    public function importExcel(Request $request): \Illuminate\Http\JsonResponse
    {
        Excel::import(new ExcelImport(), storage_path('app/public/excel.xlsx'));
        $data = \App\Models\Excel::all();
        return response()->json($data);
    }

    public function importPrices(Request $request): \Illuminate\Http\JsonResponse
    {
        Products::query()->delete();
        System::query()->delete();
        Excel::import(new PricesImport(),storage_path('app/public/prices.xlsx'));
        $data = Products::all();
        return response()->json($data);
    }

    public function set_svg(Request $request): \Illuminate\Http\JsonResponse
    {
        $name = $request->get('name');
        $data = Svg::all();
        if(count($data) > 0){
            $item = $data->where('id',1)->first();
            $item->name = $name;
            $item->save();
        }
        else{
            Svg::query()->create([
                'name' => $name
            ]);
        }
        return response()->json([
            'message' => 'ok'
        ]);
    }



    public function get_svg(Request $request){
        $name = 'svgOne';
        $data = Svg::query()->where('id', 1)->first();
        if($data){
            $name = $data->name;
        }
        return response()->json([
            'name' => $name
        ]);
    }

    public function toPlay(Request $request){
        static $rates;
        $email = Auth::user()->email;
        if ($rates === null) {
            $rates = json_decode(file_get_contents('https://www.cbr-xml-daily.ru/daily_json.js'));
        }
        $price = 0;
        $cards = Backet::query()->where('user_id', Auth::user()->id)->with(['product','user'])->get();
        foreach ($cards as $card){
            $price += $card->product->price;
        }
        $price_ru = $price * $rates->Valute->EUR->Value;
        $fio = Auth::user()->fio;
        $phone = Auth::user()->phone;
        $city = Auth::user()->city;
        $description = 'Заказ из TDF';
        $number = rand(10, 1000);
        if(Auth::check()){
            $cards = Backet::query()->where('user_id', Auth::user()->id)->with(['product','user'])->get();
        }
        else{
            $cards = TempBacket::query()->where('ip', $request->ip())->with(['product'])->get();
        }


        return view('payment',['amount' => $price_ru,'cards' =>$cards, 'order' => $number,'city' => $city, 'description' => $description, 'name' => $fio, 'email' => $email, 'phone' => $phone]);
    }
}
