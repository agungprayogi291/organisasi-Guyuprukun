@extends('layouts.app')
@section('title','GR|create')
@section('header-title')

    <h1 class="text-center"> Upload</h1>
@endsection
@section('content-main')

    <div class="row m-auto col-md-6 ">
        <div class="card m-auto">
            <div class="card-header bg-secondary">
                <h4 class="text-center ">Guyuprukun</h4>
            </div>
            <div class="card-body">
                <form action="/activity" class="form " method="POST">
                @csrf 
                <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
                    <input type="text" name="name" placeholder="title" class="form-control mb-2">
                    <div class="p-5 form-control mb-2 "  >
                        <input type="file" name="image" class="text-center ">
                    </div>
                
                    <textarea name="description" id="" cols="30" rows="3" placeholder="Lorem ipsum dolor sit amet" class="form-control mb-2"></textarea>
                    <button class="bg-primary form-control ">Upload</button>
                </form>
            </div>
        </div>
    </div>

@endsection