<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\KasController;
use App\Http\Controllers\MessageController;




Route::get('/login',[LoginController::class,'pageLogin'])->name('login');
Route::post('/postLogin',[LoginController::class,'postLogin'])->name('postLogin');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');




Route::middleware(['auth','ceklevel:ketua,bendahara,sekertaris,anggota'])->group(function(){
    Route::resource('activity',ActivityController::class);
	Route::resource('message',MessageController::class);
});

Route::middleware(['auth','ceklevel:sekertaris'])->group(function(){
	Route::resource('kas',KasController::class)->only(['create','show','store']);
	Route::resource('member',MemberController::class);
	Route::post('/kas/seribusehari',[KasController::class,'seribusehari']);
		
});
Route::middleware(['auth','ceklevel:ketua'])->group(function(){
	Route::resource('kas',KasController::class)->only(['index']);
	Route::resource('member',MemberController::class)->only(['index']);
});




// Route::group(['middleware' =>['auth','ceklevel:ketua,bendahara,sekertaris,anggota']],function(){
//     Route::get('/home',[HomeController::class,'index'])->name('home');
//     Route::get('/upload',[UploadController::class,'index'])->name('upload');
//     Route::get('/inbox',[MessageController::class,'index'])->name('inbox');
//     Route::get('/calender',[KalenderController::class,'index'])->name('calender');
// });
// Route::group(['middleware' => ['auth','ceklevel:ketua,sekertaris']],function(){
//     Route::get('/daftarMember',[MemberController::class,'index'])->name('daftarMember');
//     Route::get('/register',[RegisterController::class,'index'])->name('register');
//     Route::post('/postregister',[RegisterController::class,'register'])->name('postregister');
  
// });

// Route::group(['middleware' => ['auth','ceklevel:bendahara']],function(){
//     Route::get('/accounting/arisan',[AccountingController::class,'arisan'])->name('arisan');
// });

