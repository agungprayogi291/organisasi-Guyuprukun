<div class="card bg-white col-md-10 mb-5 ml-auto mr-auto p-2">
		<h4 class="text-center mt-4">Guyup Rukun sehari seribu saja</h4>
		<form action="/kas" method="post" class="form col-md-10 m-auto">
		@csrf 
		<select name="tipe_kas_id" class="form-control mb-1">
			<option>--pilih Type kas--</option>
			@foreach($types as $type)
			<option value="{{$type->id}}">{{$type->name}}</option>
			@endforeach
		</select>
			<table class="table table-bordered">
			<thead>
				<tr >
					<th ></th>
					<th>Name</th>
					<th>Subtotal</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
				<tr>
					<td>
					<input type="checkbox"  name="items[{{$loop->index}}][user_id]" value="{{$user->id}}">
					</td>
					<td>
					<label>{{$user->name}}</label>
					</td>
					<td>
						<input type="text" class="form-control" name="items[{{$loop->index}}][subtotal]">
					</td>
				</tr>
				@endforeach
			<tbody>
			</table>
			<button class="btn btn-primary px-4 mb-4">Submit</button>
			
		</form>
		
		<table class="table table-bordered table-hover">
			<thead class="bg-dark ">
				<tr>
					<th>No</th>
					<th>Jenis</th>
					<th>Subtotal</th>
					<th>Detail</th>
				</tr>
			</thead>
			<tbody>
			@foreach($types as $type)
				<tr>
					<td>{{$type->id}}</td>
					<td>{{$type->name}}</td>
					<td>{{$type->subtotal}}</td>
					<td><a href="/kas/{{$type->id}}">Show</a></td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>