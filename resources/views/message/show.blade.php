@extends('layouts.app')
@section('content-main')

<a href="/message" type="submit" class="btn btn-warning ml-5 mb-5">back</a>

	<div class="card col-md-10 m-auto">
			<p>{{$message->pesan}}</p>
	</div>
	
@endsection