<h3>Sizes</h3>
<table class="table table-hover">
	<thead>
		<tr>
			<th>Size</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody id="tbodysize">
		@foreach($sizes as $size)
		<tr id="trsize-{{$size->id}}">
			<td>{{ $size->size }}</td>
			<td><a href="javascript:void(0)" class="deletesize" id="sizeid-{{$size->id}}">Delete</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
<hr>
<h3></h3>

<form action="productsettings/sizes" method="POST" id="add-size">
	<legend>Add New Size</legend>
	{{ csrf_field() }}
	<div class="form-group">
		<label for="size">Size</label>
		<input type="text" class="form-control" id="size" placeholder="">
	</div>

	<button type="submit" class="btn btn-success">Save</button>
</form>