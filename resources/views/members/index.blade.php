@extends('layouts.app')
@section('title','GR|home-ketua')
@section('header-title')
  <h1>Daftar Anggota</h1>
@endsection
<!--
   content for page hoem admin
   extends template.dashboard  -->
@section('content-main')
  <div class="row m-auto">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Guyuprukun anggota</h3>
                <div style="float:right;">
                <a href="/member/create" class="btn btn-success px-4 py-2">Register</a>
                </div>
               
            </div>
              <!-- /.card-header -->
           <div class="card-body">
           @if(session()->has('success_message'))
              <div class="mb-2 alert alert-success">{{session('success_message')}}</div>
           @endif
              <table id="example2" class="table table-bordered table-hover ">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>level</th>
                    <th>phone</th>
                    <th>status</th>
                    <th>Jkel</th>
                    <th>email</th>
                    <th>aksi</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                  <tr >
                    <td>{{$user->name}}</td>
                    <td>{{$user->level}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->status}}</td>
                    <td>{{$user->jkel}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                      <a href="/member/{{$user->id}}/edit" class="btn btn-link text-info ">Edit</a>
                      <form action="/member/{{$user->id}}" method="POST">
                      @csrf 
                      @method('DELETE')
                        <button class="btn btn-link text-danger ">DELETE</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
             </div>
              <!-- /.card-body -->
        </div>
            <!-- /.card -->
      </div>
</div>
@endsection
<!--  -->