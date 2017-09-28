<h3>Colors</h3>
<table class="table table-hover">
	<thead>
		<tr>
			<th>Color</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody id="tbodycolor">
		@foreach($colors as $color)
		<tr id="trcolor-{{$color->id}}">
			<td>{{ $color->color }}</td>
			<td><a href="javascript:void(0)" class="deletecolor" id="colorid-{{$color->id}}">Delete</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
<hr>
<h3></h3>

<form action="productsettings/colors" method="POST" id="add-color">
	<legend>Add New Color</legend>
	{{ csrf_field() }}
	<div class="form-group">
		<label for="color">Color</label>
		<input type="text" class="form-control" id="color" placeholder="">
	</div>

	<button type="submit" class="btn btn-success">Save</button>
</form>