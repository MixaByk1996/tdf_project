<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAPIController extends Controller
{
    public function register(Request $request): \Illuminate\Http\JsonResponse
    {
        $check_user = Users::where('email', '=', $request->get('email'))->where('phone', '=', $request->get('phone'))->where('is_admin', 1)->first();
        if($check_user==null){
            $user=Users::create([
                'fio'=>$request->get('fioreg'),
                'email'=>$request->get('emailreg'),
                'phone'=>$request->get('phonereg'),
                'city'=>$request->get('cityreg'),
                'balance'=>0.0,
                'password'=>md5($request->get('passreg'))
            ]);
            Auth::loginUsingId($user->id, $remember = true);
            return response()->json([
                'message' => 'Админ успешно зарегистрирован'
            ]);
        }
        else{
            return response()->json([
                'message' => 'Админ уже зарегистрирован'
            ], 404);
        }
    }

    public function auth(Request $request): \Illuminate\Http\JsonResponse
    {
        $check_authuser = Users::where('email', '=', $request->get('email'))->where('password', '=', md5($request->get('password')))->where('is_admin', 1)->first();
        if($check_authuser==null){
            return response()->json([
                'message' => 'Неверный логин/пароль'
            ], 500);
        }
        else{
            Auth::loginUsingId($check_authuser->id);
            $user = Auth::user();
            return response()->json([
                'user' => $user
            ]);
        }
    }
}
