<?php

namespace App\Http\Controllers;

use App\Models\Backet;
use App\Models\Products;
use App\Models\System;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CatalogController extends Controller
{
    public function index(){
        $products = Products::with(['system', 'angle', 'producer'])->get();
        $systems = System::all();
        return view('catalog', ['products' => $products, 'systems' => $systems]);
    }

    public function addToCard(string $product_id){
        $backet = new Backet();
        $backet->product_id = $product_id;
        $backet->count = 1;
        $backet->user_id = Auth::user()->id;
        $backet->save();
        $products = Products::with(['system', 'angle', 'producer'])->get();
        $systems = System::all();
        return view('catalog', ['products' => $products, 'systems' => $systems]);
    }
    public function removeFromCard(string $product_id){
        $backet = Backet::query()->where('product_id', $product_id)->where('user_id', Auth::user()->id)->first()->delete();
        $cards = Backet::query()->where('user_id', Auth::user()->id)->with(['product','user'])->get();
        return view('cart', ['cards'=> $cards]);
    }
}
