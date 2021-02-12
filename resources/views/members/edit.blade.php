@extends('layouts.app')

@section('content-main')
<div class="p-5">
<div class="card p-3">
    <form  method="POST" action="/member/{{$user->id}}" class="form">
    @csrf 
    @method('PUT')
    <div class="mb-3">
        <label for="">Name</label>
        <input type="text" name="name" value="{{$user->name}}" class="form-control">
    </div>
 
    <div class="mb-3">
        <label for="">Email</label>
        <input type="email" name="email" value="{{$user->email}}" class="form-control ">
    </div>

    <div class="mb-3">
        <label for="">level</label>
        <input type="text" name="level" value="{{$user->level}}" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">Phone</label>
        <input type="text" name="phone" value="{{$user->phone}}" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">status</label>
        <input type="text" name="status" value="{{$user->status}}" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">Jenis Kelamin</label>
        <input type="text" name="jkel" value="{{$user->jkel}}" class="form-control">
    </div>

   
    
    <button class="btn btn-primary">Submit</button>
    </form>
</div>
</div>

@endsection