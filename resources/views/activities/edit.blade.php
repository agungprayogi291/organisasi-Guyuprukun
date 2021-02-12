@extends('layouts.app')
@section('title','Edit')


@section('header-title');
    <h1>Reset</h1>
@endsection

@section('content-main')
    <form action="/activity/{{$activity->id}}" method="post" class="form p-2">
    @csrf 
    @method('PUT')
   
        <div class="mb-2">
            <input type="text" name="name" placeholder="title" class="form-control" value="{{$activity->name}}">
        </div>
        <div class="mb-2 bg-white border p-2 text-center">
             <img src="/image/{{$activity->image}}" alt="" class="mb-1" width="400px"><br>
            <input type="file" name="image" name="image" value="{{$activity->image}}">
        </div>
        <div class="mb-5 ">
            <textarea name="description" id="" cols="30" rows="4" class="form-control">
            {{$activity->description}}
            </textarea>
        </div>
      
        <input type="hidden" value="{{$activity->post_by}}" name="post_by">
        <button class="btn btn-primary px-5 py-2" type="submit">Submit</button>
    </form>
@endsection