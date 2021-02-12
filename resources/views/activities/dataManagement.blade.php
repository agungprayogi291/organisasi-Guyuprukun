@extends('layouts.app')
@section('title','GR|Admin|data-activiies')
@section('header-content')

<h1>Data management activites control</h1>
@endsection
@section('content-main')

<div class="m-auto">
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Image</th>
                <th class="text-center">description</th>
                <th>Date</th>
                <th>Post by:</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
		@if('success_message')
			<div class="mb-3 btn btn-success">{{$success_message}}</div>
		@endif
        @foreach($activities as $activity)
	
       
            <tr>
                <td>{{$activity->name}}</td>
                <td><img src="/image/{{$activity->image}}" alt="" width="80px"></td>
                <td class="p-0"><p class="text-center ">{{$activity->description}}</p></td>
                <td>{{$activity->created_at}}</td>
                <td>{{$activity->user->name}}</td>
                <td>
                    <a href="/activity/{{$activity->id}}" class="text-info">Details</a>
                    <form action="/activity/{{$activity->id}}" method="POST">
                        @csrf 
                        @method('DELETE')
                        <button class="btn btn-link text-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection