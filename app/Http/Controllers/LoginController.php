<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function pageLogin(){
        return view('Form.login');
    }
    public function postLogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/daftarMember');
        }
        return redirect('/login');
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
