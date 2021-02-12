<?php

namespace App\Http\Controllers;
use App\Models\Activity;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $activity = Activity::all();
   
        $data= [
            'activities' => $activity
        ];
       
        return view('activities.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        return view('activities.create');
    }

    /**
     * show the all post form store
     * 
     */
    public function data(){
        $activity = Activity::all();
       
        $data = [
            'activities'=>$activity,
         
        ];
      
        return view('activities.dataManagement',$data)->with('success_message','item berhasi dirubah');
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
            'image' => 'required',
            'description' =>'required'
        ]);
      
        
            $file =$request->image;
            
            $activity = new Activity();
            $activity->name = $request->name;
            $activity->image =$file ;
            $activity->description = $request->description;
     
            $activity->users_id =$request->user_id ;
            
            $activity->save();

        return redirect('/activity')->with('success_message','Upload berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show($activity)
    {
        $activities= Activity::find($activity);
        $data = [
            'activity' => $activities
        ];
        return view('activities.detail',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit( $activity)
    {
        $activity = Activity::find($activity);
        $data = [
            'activity' =>$activity
        ];
        return view('activities.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request  ,$ac)
    {
      
        $activity = Activity::find($ac);
        $activity->name = $request->name;
        $activity->description = $request->description;
        $activity->image= $request->image;
        $activity->post_by = $request->post_by;
       
        $activity->save;
        return redirect('/data')->with('success_message','edit berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy($activity)
    {
        $data = Activity::find($activity);
        $data->delete();
        return redirect('/data');
    }
}
