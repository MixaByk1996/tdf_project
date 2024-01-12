<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class UserController extends Controller
{
    public function register(Request $request)
    {

        $check_user = Users::where('email', '=', $request->get('emailreg'))->where('phone', '=', $request->get('phonereg'))->first();
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
            return redirect('')->with('status', 'Аккаунт успешно зарегистрирован');
        }
        else{
           return redirect('');
        }
    }
    public function auth(Request $request)
    {
        $check_authuser = Users::where('email', '=', $request->get('emailauth'))->where('password', '=', md5($request->get('passwordauth')))->first();
        if($check_authuser==null){
            return redirect('home');
        }
        else{
            Auth::loginUsingId($check_authuser->id);
            $user = Auth::user();
            return view('cabinet', ['user' => $user]);
        }
    }
    public function logout(): \Illuminate\Http\JsonResponse
    {
        Auth::logout();
        Session::flush();
        return response()->json(["logout"=>"success"]);
    }
}
