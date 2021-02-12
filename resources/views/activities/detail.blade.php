@extends('layouts.app')
@section('title','GR|detail activity')
@section('content-main')    

    <div class="row col-md-12  p-4">
        <div class="col-md-12 card m-auto p-3">
    
            <div class="card-header">
                <h3>{{$activity->name}}</h3>
            </div>
            <div class="card-body">
                
                <img src="/image/{{$activity->image}}" alt="img" max-width="500px" name="image" >
                <p name="description">{{$activity->description}}</p>
           
				 <h4 name="user" >Post by:<p class="text-secondary">{{$activity->user->name}}<p></h4>
				<h4> email  : <p class="text-secondary">{{$activity->user->email}}</p></h4>
				
                <h4 name="date">{{$activity->created_at}}</h4>
				<h4> jabatan :<p class="text-secondary"> {{$activity->user->level}}</p></h4>
				<a href="#" class="btn btn-primary px-4 py-2">View {{$activity->user->name}}</a>
            </div>
        </div>
    </div>
@endsection