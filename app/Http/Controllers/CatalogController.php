<?php

namespace App\Http\Controllers;

use App\Models\Angle;
use App\Models\Backet;
use App\Models\Categories;
use App\Models\Producer;
use App\Models\Products;
use App\Models\Series;
use App\Models\System;
use App\Models\TempBacket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CatalogController extends Controller
{
    public function index(Request $request){
//        dd($request);
        $products = Products::with(['system', 'category', 'angle', 'producer'])->paginate(10);

        if(Auth::check()){
            $cards = Backet::query()->where('user_id', Auth::user()->id)->with(['product','user'])->get();
        }
        else{
            $cards = TempBacket::query()->where('ip', $request->ip())->with(['product'])->get();
        }
        $systems = System::query()->whereIn('id', [1,2,3,4,5,6,7,8,9,10,11])->get();
        $producers = Producer::all();
        $series = Series::all();
        $categories =Categories::all();
        $angle = Angle::all();
        $count = count($products);
        return view('catalog', ['products' => $products, 'cards' => $cards, 'count' => $count,  'systems' => $systems, 'producers' => $producers, 'series' => $series, 'categories' => $categories, 'angle' => $angle]);
    }


    public function search(Request $request){
        if(Auth::check()){
            $cards = Backet::query()->where('user_id', Auth::user()->id)->with(['product','user'])->get();
        }
        else{
            $cards = TempBacket::query()->where('ip', $request->ip())->with(['product'])->get();
        }
        $text = $request->get('text');
        $products = Products::with(['system', 'category','angle', 'producer'])->where('name', 'like', '%' . $text . '%' )->where('description', 'like', '%' . $text . '%' )->paginate(10);
        $systems = System::query()->whereIn('id', [1,2,3,4,5,6,7,8,9,10,11])->get();
        $producers = Producer::all();
        $series = Series::all();
        $categories =Categories::all();
        $angle = Angle::all();
        $count = count($products);
        return view('catalog', ['products' => $products, 'cards' => $cards, 'count' => $count,  'systems' => $systems, 'producers' => $producers, 'series' => $series, 'categories' => $categories, 'angle' => $angle]);
    }


    public function withCategories(Request $request, $id){
        if(Auth::check()){
            $cards = Backet::query()->where('user_id', Auth::user()->id)->with(['product','user'])->get();
        }
        else{
            $cards = TempBacket::query()->where('ip', $request->ip())->with(['product'])->get();
        }
        $products = Products::with(['system','category', 'angle', 'producer'])->where('system_id', $id)->paginate(10);
        $systems = System::query()->whereIn('id', [1,2,3,4,5,6,7,8,9,10,11])->get();
        $producers = Producer::all();
        $series = Series::all();
        $categories =Categories::all();
        $angle = Angle::all();
        $count = count($products);
        return view('catalog', ['products' => $products, 'cards' => $cards, 'count' => $count,  'systems' => $systems, 'producers' => $producers, 'series' => $series, 'categories' => $categories, 'angle' => $angle]);
    }
    public function addToCard(Request $request, string $product_id){
        if (Auth::check()){
            $backet = new Backet();
            $backet->product_id = $product_id;
            $backet->count = 1;
            $backet->user_id = Auth::user()->id;
            $backet->save();
        }
        else{
            $temp = new TempBacket();
            $temp->product_id = $product_id;
            $temp->count = 1;
            $temp->ip = $request->ip();
            $temp->save();
        }
        $producers = Producer::all();
        $series = Series::all();
        $categories =Categories::all();
        $angle = Angle::all();
        if(Auth::check()){
            $cards = Backet::query()->where('user_id', Auth::user()->id)->with(['product','user'])->get();
        }
        else{
            $cards = TempBacket::query()->where('ip', $request->ip())->with(['product'])->get();
        }
        $products = Products::with(['system', 'angle', 'producer'])->paginate(10);
        $count = count($products);
        $systems = System::all();
        return redirect()->back();//view('catalog', ['products' => $products, 'cards' => $cards, 'count' => $count,  'systems' => $systems, 'producers' => $producers, 'series' => $series, 'categories' => $categories, 'angle' => $angle]);
    }
    public function removeFromCard(string $product_id){
        $backet = Backet::query()->where('product_id', $product_id)->where('user_id', Auth::user()->id)->first()->delete();
        $cards = Backet::query()->where('user_id', Auth::user()->id)->with(['product','user'])->get();
        return view('cart', ['cards'=> $cards]);
    }


    public function removeFromModal(Request $request, string $product_id): \Illuminate\Http\RedirectResponse
    {
        if(Auth::check()){
            Backet::query()->where('user_id', Auth::user()->id)->where('product_id', $product_id)->delete();
        }
        else{
            TempBacket::query()->where('ip', $request->ip())->where('product_id', $product_id)->delete();
        }
        return redirect()->back();
    }
}
