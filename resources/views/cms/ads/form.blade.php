<form action="/saveadbanner" method="POST" enctype="multipart/form-data">
	{{ csrf_field() }}
	@include('partials.errors')
	<div class="row">
		<div class="col-md-4">
			<small><em>Dimensions: {{ $w }} x {{ $h }}</em></small>
			<img src="/img/image_placeholder.jpg" width="240px" id="myimage" />
			
			<span class="btn btn-round btn-info btn-sm">
				<input id="image" type="file" name="photo"/>
			</span>

		</div>
		<div class="col-md-8">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Ad / Banner Name" id="adname" name="adname">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Ad Text" id="adtext" name="adtext">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Link" id="adlink" name="adlink">
			</div>
			<input type="hidden" name="pos" id="pos" value="{{ $p }}" />
			<input name="__submit__" type="submit" value="Upload & Save" class="btn btn-success" />

		</div>
	</div>

</form>