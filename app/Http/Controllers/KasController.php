<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\TipeKas;
use App\Models\TipeKasDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('keuangan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$users= User::all();
		$tipe = TipeKas::all();
		$data = [
			'users'=>$users,
			'types'=>$tipe
		];
        return view('keuangan.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        	$items = collect($request->items)->filter(function ($item){
			return isset($item['user_id']);
			});
			
			if($items->count() <= 0 ){
				return back()->with('error_message','astagfiruloh belum ada yang mengumpulkan');
			
			}
		
			DB::transaction(function() use ($items,$request){
				
				$items = $items->map(function($item) use($request) {
					$user = User::find($item['user_id']);
					 
				
					$Details  = new TipeKasDetail();
					$Details->name= $user->name;
					$Details->subtotal = $item['subtotal'] ;
					$Details->tipe_kas_id = $request->tipe_kas_id;
					$Details->users_id = $item['user_id'];
					return $Details;
					
				});
				
				$tipeKas = TipeKas::find($request->tipe_kas_id);
				
				$tipeKas->subtotal = $items->sum('subtotal');
				$tipeKas->save();
	
				$tipeKas->tipeKasDetail()->saveMany($items);
				
					
			});
			return redirect('/kas/create')->with('success_message','saving data berhasil');
		
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kas  $kas
     * @return \Illuminate\Http\Response
     */
    public function show($kas)
    {
        $detail = TipeKasDetail::all()->where('tipe_kas_id',$kas);
		
		$data = [
			'details' => $detail
		];
		
		return view('keuangan.show',$data);
			
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kas  $kas
     * @return \Illuminate\Http\Response
     */
    public function edit(Kas $kas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kas  $kas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kas $kas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kas  $kas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kas $kas)
    {
        //
    }
	
	
	/**
	sehariseribu a newly created resource in storage
	*/
	public function seribusehari(Request $request){

		
	}
}









