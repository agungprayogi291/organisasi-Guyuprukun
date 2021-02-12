@extends('layouts.app')
@section('title','GR|Activities')
@section('header-title')
    <h1>Activites</h1>
@endsection
@section('content-main')

    <div class="row col-md-12  p-4">
    @foreach($activities as $activity)
        <div class="col-md-4 card ">
            <div class="card-header">
                <h4>{{$activity->name}}</h4>
            </div>
            <div class="card-body">
                <img src="/image/{{$activity->image}}" alt="" width="300px">
                <p>{{$activity->description}}</p>
            </div>
        </div>
    @endforeach
    </div>
@endsection