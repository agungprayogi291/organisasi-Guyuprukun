@extends('layouts.app')


@section('content-main')
<div class="row col-md-10 m-auto ">	
<h2 class="" >Inbox </h2>
<a href="/message/create" class="btn btn-success ml-auto mb-3">Create pesan<a>
</div>
	<div class="row m-auto card col-md-10">
		<div class="col-md-12  ">
			<table class="table table-hover">
				<thead>
					<tr class="row">
						
						<th class="col-md-2">pengirim</th>
						<th class="col-md-7">Date</th>
						<th class="col">Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($messages as $message)
					<tr class="row">
						<td class="col-md-2">{{$message->email_pengirim}}</td>
						<td class="col-md-7">{{$message->created_at}}</td>
						<td class="col">
						<a class="text-primary" href="/message/{{$message->id}}">Read</a>
						<form action="/message/{{$message->id}}" method="post">
						@csrf
						@method("Delete")
							<button class="btn btn-link text-danger">Delete</button>
						</form>
					
						</td>
					</tr>
				@endforeach
				</tbody>
				
			</table>
		</div>
	</div>

@endsection
