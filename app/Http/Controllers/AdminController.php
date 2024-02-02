<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        return view('admin');
    }

    public function index(Request $request){
        $name = $request->get('name');
        $password = $request->get('password');
        if($name == $password && $password == 'root'){
            return view('admin.index');
        }
        else{
            return view('admin');
        }

    }

}
