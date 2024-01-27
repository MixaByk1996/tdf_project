<?php

namespace App\Http\Controllers;

use App\Models\Favorites;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(string $id){
        $product = Products::query()->where('id', $id)->first();
        return view('product', ['product' => $product]);
    }

    public function addFavorite(string $id){
        $check = Favorites::query()->where('product_id', $id)->where('user_id', Auth::user()->id)->first();
        if(!$check){
            $fav = new Favorites();
            $fav->product_id = $id;
            $fav->user_id = Auth::user()->id;
            $fav->save();
        }
        $product = Products::query()->where('id', $id)->first();
        return view('product', ['product' => $product]);

    }

}
