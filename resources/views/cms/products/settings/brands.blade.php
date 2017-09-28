<h3>Brands</h3>
<table class="table table-hover">
	<thead>
		<tr>
			<th>Brand</th>
			<th>Logo</th>
			<th>Description</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody id="tbodybrand">
		@foreach($brands as $brand)
		<tr id="trbrand-{{ $brand->id }}">
			<td>{{ $brand->brandname }}</td>
			<td id="brandlogo-{{$brand->id}}">
				@if($brand->picpath)
					<img src="/storage/{{auth()->user()->site->siteUrl}}/images/brands/{{$brand->picpath}}" height="40px" />
					<a href="/deletebrandimage/{{$brand->id}}"><i class="material-icons">delete_forever</i></a>
				@else
				 	<a href="javascript:void(0)" id="brandpic-{{$brand->id}}" class="addbrandlogo">Add Brand Logo</a>
				@endif
			</td>
			<td>{{ $brand->description }}</td>
			<td><a href="javascript:void(0)" class="deletebrand" id="bid-{{$brand->id}}">Delete</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
<hr>
<h3></h3>

<form action="productsettings/brands" method="POST" id="add-brand">
	<legend>Add New Brand</legend>
	{{ csrf_field() }}
	<div class="form-group">
		<label for="brand">Brand Name</label>
		<input type="text" class="form-control" id="brandname" placeholder="">
	</div>
	<div class="form-group">
		<label for="description">Description</label>
		<input type="text" class="form-control" id="descriptionb" placeholder="">
	</div>

	<button type="submit" class="btn btn-success">Save</button>
</form>
<!--modal-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Brand Image Manager</h4>
			</div>
			<div class="modal-body">
				<form action="/savebrandimage" method="POST" enctype="multipart/form-data"  id="brand-image-form">
					{{ csrf_field() }}
					<div class="form-group">
						<small><em>Please select small image.</em></small>
						<div id="imageHolder"><img src="/img/image_placeholder.jpg" class="img-responsive"></div>
						<span class="btn btn-round btn-info">
							<input id="image" type="file" name="photo"/>
						</span>
						<input type="hidden" name="modalbrandid" id="modalbrandid" value="0" />
						<input name="__submit__" type="submit" value="Upload" class="btn btn-success btn-sm" />
					</div>
				</form>
			</div>
		</div>
	</div>
</div>