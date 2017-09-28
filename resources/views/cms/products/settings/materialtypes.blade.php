<h3>Material Types</h3>
<table class="table table-hover">
	<thead>
		<tr>
			<th>Material Type</th>
			<th>Description</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody id="tbodymt">
		@foreach($materialtypes as $materialtype)
		<tr id="trmt-{{$materialtype->id}}">
			<td>{{ $materialtype->materialtype }}</td>
			<td>{{ $materialtype->description }}</td>
			<td><a href="javascript:void(0)" class="deletemt" id="mtid-{{$materialtype->id}}">Delete</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
<hr>
<h3></h3>

<form action="productsettings/materialtypes" method="POST" id="add-mt">
	<legend>Add New Material Type</legend>
	{{ csrf_field() }}
	<div class="form-group">
		<label for="materialtype">Material Type</label>
		<input type="text" class="form-control" id="materialtype" placeholder="">
	</div>
	<div class="form-group">
		<label for="description">Description</label>
		<input type="text" class="form-control" id="description" placeholder="">
	</div>

	<button type="submit" class="btn btn-success">Save</button>
</form>