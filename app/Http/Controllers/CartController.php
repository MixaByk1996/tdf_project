<?php

namespace App\Http\Controllers;

use App\Models\Backet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){
        $cards = Backet::query()->where('user_id', Auth::user()->id)->with(['product','user'])->get();
        return view('cart', ['cards'=> $cards]);
    }
}
