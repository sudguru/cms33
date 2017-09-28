<h4>Manage Banner: <span id="currentCategory"></span></h4>
<div id="banner">
<form action="/saveproductcategorybanner" method="POST" enctype="multipart/form-data"  id="banner-form">
	{{ csrf_field() }}
	<div class="form-group">
		<small><em>Please upload appropriate size according to your site layout.</em></small>
		<div id="imageHolder"><img src="/img/image_placeholder.jpg" class="img-responsive"></div>
		<div id="upload_error"></div>
		<span class="btn btn-round btn-info">
			<input id="image" type="file" name="photo"/>
		</span>
		<input type="hidden" name="categoryid" id="categoryidforimage" value="0" />
		<input name="__submit__" type="submit" value="Upload" class="btn btn-success btn-sm" />
	</div>
</form>
<form action="/saveproductcategorydescription" method="POST"  id="banner-description-form">
	{{ csrf_field() }}
	<div class="form-group">
		<label for="description">Description</label>
		<input type="text" class="form-control" name="description" id="description" value="">
	</div>


	<div class="form-group">
		<label for="gist">Category Detail</label>
		<textarea class="form-control" name="gist" id="gist" rows="5"></textarea>
	</div>
	<input type="hidden" name="categoryid" id="categoryidfordescription" value="0" />
	<button class="btn btn-info" id="saveButton">Save</button>
</form>
</div>
