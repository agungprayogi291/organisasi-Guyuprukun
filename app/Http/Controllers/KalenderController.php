<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalenderController extends Controller
{
    public function index(){
        return view('Template.Kalender.kalender');
    }
}
