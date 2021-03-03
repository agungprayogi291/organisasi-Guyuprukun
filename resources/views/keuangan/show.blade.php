@extends('layouts.app')

@section('content-main')
	
	<table class="table table-bordered table-hover">
		<thead class="bg-secondary">
			<tr>
				<th>no</th>
				<th>name</th>
				<th>subtotal</th>
				<th>date</th>
			</tr>

		</thead>
		<tbody>
		@foreach($details as $detail)
			<tr>
				<td>{{$detail->id}}</td>
				<td>{{$detail->name}}</td>
				<td>{{$detail->subtotal}}</td>
				<td>{{$detail->created_at}}</td>
			</tr>
		@endforeach
		</tbody>
	</table>
	
@endsection