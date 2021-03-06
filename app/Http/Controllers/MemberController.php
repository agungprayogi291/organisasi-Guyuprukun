<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $data = [
            'users' => $users
        ];
        return view('members.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|Email',
            'level' => 'required',
            'phone' => 'required',
            'status' => 'required',
            'jkel' => 'required',
            'password' =>'required'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->level = $request->level;
        $user->phone = $request->phone;
        $user->status = $request->status;
        $user->jkel = $request->jkel;
        $user->password = bcrypt($request->password);
        $user->remember_token = Str::random(60);
        $user->save();
        return redirect('/member')->with('success_message','registrasi success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($user)
    {
        $user = User::find($user);
        $data = [
            'user' =>$user
        ];
        return view('members.edit',$data);
       
    

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $user)
    {
        $user = User::find($user);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->level = $request->level;
        $user->phone = $request->phone;
        $user->status = $request->status;
        $user->jkel = $request->jkel;
        $user->save();
        return redirect('/member')->with('success_message','registrasi success');
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($user)
    {
        $user = User::find($user);
   
        $user->delete();
        return redirect('/member');


    }
}
