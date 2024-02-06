<?php

namespace App\Http\Controllers;

use App\Models\Angle;
use App\Models\Backet;
use App\Models\Categories;
use App\Models\Producer;
use App\Models\Products;
use App\Models\Series;
use App\Models\System;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CatalogController extends Controller
{
    public function index(Request $request){
//        dd($request);
        $products = Products::with(['system', 'angle', 'producer'])->paginate(10);
        $systems = System::all();
        $producers = Producer::all();
        $series = Series::all();
        $categories =Categories::all();
        $angle = Angle::all();
        $count = count($products);
        return view('catalog', ['products' => $products, 'count' => $count,  'systems' => $systems, 'producers' => $producers, 'series' => $series, 'categories' => $categories, 'angle' => $angle]);
    }


    public function withCategories($id){
        $products = Products::with(['system', 'angle', 'producer'])->where('system_id', $id)->paginate(10);
        $systems = System::all();
        $producers = Producer::all();
        $series = Series::all();
        $categories =Categories::all();
        $angle = Angle::all();
        $count = count($products);
        return view('catalog', ['products' => $products, 'count' => $count,  'systems' => $systems, 'producers' => $producers, 'series' => $series, 'categories' => $categories, 'angle' => $angle]);
    }
    public function addToCard(string $product_id){
        $backet = new Backet();
        $backet->product_id = $product_id;
        $backet->count = 1;
        $backet->user_id = Auth::user()->id;
        $backet->save();
        $products = Products::with(['system', 'angle', 'producer'])->paginate(10);
        $systems = System::all();
        return view('catalog', ['products' => $products, 'systems' => $systems]);
    }
    public function removeFromCard(string $product_id){
        $backet = Backet::query()->where('product_id', $product_id)->where('user_id', Auth::user()->id)->first()->delete();
        $cards = Backet::query()->where('user_id', Auth::user()->id)->with(['product','user'])->get();
        return view('cart', ['cards'=> $cards]);
    }
}
