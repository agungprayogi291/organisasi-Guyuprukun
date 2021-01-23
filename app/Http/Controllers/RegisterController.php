<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('/Form.register');
    }
    public function register(Request $request){
        DB::table('users')->insert([
            'name' => $request->name,
            'level' => $request->level,
            'phone' => $request->phone,
            'jkel' => $request->jkel,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        return redirect()->route('daftarMember');
    }
}