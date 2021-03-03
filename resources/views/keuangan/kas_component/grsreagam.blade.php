<div class="card bg-white col-md-10  mb-4 ml-auto mr-auto p-2">
		<h4 class="text-center mb-5 mt-4">Guyup Rukun Sreagam</h4>
		<form action="" method="post" class="form col-md-10 m-auto ">
		<table>
			<tr>
				<td>Jumlah kotak</td>
				<td>
					<select>
						<option>1</option>
						<option>2</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Total Pemasukan</td>
				<td><input type="text" name="jumah"></td>
			</tr>
			<tr>
				<td></td>
				<td><button name="submit" class="btn btn-primary px-4">Save</button></td>
			</tr>
		</table>
			
		</form class="mb-4">
		
		
		<table class=" table mt-3 table-bordered table-hover">
			<thead class="bg-dark">
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
					<td></td>
					<td>{{$type->name}}</td>
					<td>{{$type->subtotal}}</td>
					<td>{{$type->created_At}}</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>