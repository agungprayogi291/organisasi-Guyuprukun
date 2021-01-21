<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KalenderController;
Route::get('/', function () {
    return view('welcome');
});


Route::get('/login',[LoginController::class,'pageLogin'])->name('login');
Route::post('/postLogin',[LoginController::class,'postLogin'])->name('postLogin');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::group(['middleware' => ['auth','ceklevel:ketua']],function(){
    Route::get('/home',[HomeController::class,'index'])->name('home');
    Route::get('/kalender',[KalenderController::class,'index'])->name('kalender');
});

