<?php

namespace App\Http\Controllers;

use App\Models\System;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $systems = System::query()->paginate(8);
        return view('home', ['systems' => $systems]);
    }

    public function contacts(){
        return view('contacts');
    }
    public function politics(){
        return view('politics');
    }
    public function about(){
        return view('about');
    }
}
