<?php

namespace App\Http\Controllers;

use App\Models\Backet;
use App\Models\TempBacket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CabinetController extends Controller
{
    public function index(Request $request){
        if(Auth::check()){
            $cards = Backet::query()->where('user_id', Auth::user()->id)->with(['product','user'])->get();
        }
        else{
            $cards = TempBacket::query()->where('ip', $request->ip())->with(['product'])->get();
        }
        $user = Auth::user();
        return view('cabinet', ['user' => $user, 'cards' => $cards]);
    }
}
