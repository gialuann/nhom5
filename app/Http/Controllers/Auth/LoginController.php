<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function showLogin(){
        if (Auth::check()) {
            return redirect()->route("client.home");
        }
        return view("client.sign-in.login");
    }
    public function login(Request $request){
        $credentials=[
            "email"=> $request->email,
            "password"=> $request->password,
            "status"=>1
        ];
        if (Auth::attempt($credentials) ){
            if(Auth::user()->level== 2){
            return redirect()->route("client.home");
        }elseif(Auth::user()->level== 1){
            return redirect()->route("admin.user.index");
        }
        }
        return redirect()->back();
}
}
