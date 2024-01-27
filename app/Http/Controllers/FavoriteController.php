<?php

namespace App\Http\Controllers;

use App\Models\Favorites;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function index(){

        $products = Favorites::query()->where('user_id', Auth::user()->id)->get();
        return view('favorite', ['products' => $products]);
    }
}
