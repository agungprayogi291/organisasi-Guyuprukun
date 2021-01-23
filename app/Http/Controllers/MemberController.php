<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(){
    $users = DB::table('users')->get();
    return view('Page.member.daftar_member',['users'=>$users]);
    }
}
