<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KalenderController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\MessageController;



Route::get('/login',[LoginController::class,'pageLogin'])->name('login');
Route::post('/postLogin',[LoginController::class,'postLogin'])->name('postLogin');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');


Route::group(['middleware' =>['auth','ceklevel:ketua,bendahara,sekertaris,anggota']],function(){
    Route::get('/home',[HomeController::class,'index'])->name('home');
    Route::get('/upload',[UploadController::class,'index'])->name('upload');
    Route::get('/inbox',[MessageController::class,'index'])->name('inbox');
    Route::get('/calender',[KalenderController::class,'index'])->name('calender');
});
Route::group(['middleware' => ['auth','ceklevel:sekertaris']],function(){
    Route::get('/daftarMember',[MemberController::class,'index'])->name('daftarMember');
    Route::get('/register',[RegisterController::class,'index'])->name('register');
    Route::post('/postregister',[RegisterController::class,'register'])->name('postregister');
  
});

