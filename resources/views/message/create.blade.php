@extends('layouts.app')

@section('content-main')
<div class="row col-md-10 m-auto">
<a href="/message" class=" btn btn-warning text-secondary">Pesan</a>
</div>
<div class="container m-auto p-2">
<form class="form" method="post" action="/message">
@csrf
	<div class="card row col-md-10 m-auto p-4 text-dark">
		<table class="mb-3">
		<input type="hidden" value="{{auth()->user()->email}}" name="email_pengirim">
		<tr class="mb-3">
			<td>
				<label >Adrees</label>
			</td>
			<td>
				<input type="email" class="form-control" placeholder="exampl@gmail.com" name="address">
			</td>
		</tr>
		<tr class="mb-3">
			<td>
				<label>Pesan</label>
			</td>
			<td>
				<textarea name="pesan" col="30" rows="5" class="form-control" placeholder="assalamualaikum"></textarea>
			</td>
		</tr>
		</table>
		<button class="btn btn-primary">Send</button>
	</div>
	
</form>
</div>
@endsection