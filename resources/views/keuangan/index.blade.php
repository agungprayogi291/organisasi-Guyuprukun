@extends('layouts.app')
@section('title','GR|admin|bendahara-kas')
@section('header-title')
    <h1 class="text-center">Kas & Dana GuyupRukun's</h1>
@endsection

@section('content-main')

    <div class="row p-4 m-auto ">
	@foreach($kas as $k)
        <div class="card col-md-4 p-4" >
            <h4>{{$k->name}}</h4>
                <h1> {{$k->subtotal}}</h1>
        </div>
       @endforeach
    </div>

@endsection

