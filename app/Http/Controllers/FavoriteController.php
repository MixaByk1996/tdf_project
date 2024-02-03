<?php

namespace App\Http\Controllers;

use App\Models\Favorites;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function index(){

        $favorites = Favorites::query()->where('user_id', Auth::user()->id)->get()->toArray();
        $products_id = array_column($favorites, 'product_id');
        $products = Products::with(['system', 'angle', 'producer']);
        if(!empty($products_id)){
            $products = $products->whereIn('id', $products_id);
        }

        return view('favorite', ['products' => $products->get()]);
    }
}
