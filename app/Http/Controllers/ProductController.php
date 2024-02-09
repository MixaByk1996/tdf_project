<?php

namespace App\Http\Controllers;

use App\Models\Backet;
use App\Models\Favorites;
use App\Models\Products;
use App\Models\TempBacket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(Request $request, string $id){
        $product = Products::query()->where('id', $id)->first();
        if(Auth::check()){
            $cards = Backet::query()->where('user_id', Auth::user()->id)->with(['product','user'])->get();
        }
        else{
            $cards = TempBacket::query()->where('ip', $request->ip())->with(['product'])->get();
        }
        return view('product', ['product' => $product, 'cards' => $cards]);
    }

    public function addFavorite(Request $request,string $id){
        $check = Favorites::query()->where('product_id', $id)->where('user_id', Auth::user()->id)->first();
        if(!$check){
            $fav = new Favorites();
            $fav->product_id = $id;
            $fav->user_id = Auth::user()->id;
            $fav->save();
        }
        if(Auth::check()){
            $cards = Backet::query()->where('user_id', Auth::user()->id)->with(['product','user'])->get();
        }
        else{
            $cards = TempBacket::query()->where('ip', $request->ip())->with(['product'])->get();
        }
        $product = Products::query()->where('id', $id)->first();
        return redirect()->back();//view('product', ['product' => $product, 'cards' => $cards]);

    }

}
