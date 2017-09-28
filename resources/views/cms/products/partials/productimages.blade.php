<h4>Product Images ( <a href="/productpartial/refresh/{{$product->id}}">Refresh</a> )
<div class="row" id="pimages">
	<div class="col-md-12">
	@foreach($product->productimages as $productimage)
		<div class="productimages">
			<img src="/storage/{{ auth()->user()->site->siteUrl }}/productimages/thumb_240/{{$productimage->picpath}}" style="width:120px" id="img-{{$productimage->id}}"  />
				<div class="productdelete">
					<a  href="/productpartial/images/{{$product->id}}/{{$productimage->id}}/delete" title="Delete this Imaage">
						<span class="fa-stack fa-lg">
						  <i class="fa fa-circle fa-stack-2x"></i>
						  <i class="fa fa-trash fa-stack-1x fa-inverse"></i>
						</span>
					</a>
				</div>
				<div class="productdefaultpic">
					<a class="{{ $product->featured_pic == $productimage->picpath ? "active" : "" }}" href="/productpartial/images/{{$product->id}}/{{$productimage->id}}/set" title="Set as Default Product Image">
						<span class="fa-stack fa-lg">
						  <i class="fa fa-circle fa-stack-2x"></i>
						  <i class="fa fa-check fa-stack-1x fa-inverse"></i>
						</span>
					</a>
				</div>
		</div>

	@endforeach
	</div>
</div>
<hr/>
<form action="/productpartial/images/{{$product->id}}" method="POST" enctype="multipart/form-data" id="product-image-form">
	<small><em>Minimum Width: 240px. Upload Product images of similar size for better result.</em></small>

	{{ csrf_field() }}
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<div id="upload_error"></div>
				<span class="btn btn-round btn-info">
					<input id="image" type="file" name="photo"/>
				</span>
			</div>

			<div class="form-group">
				<label class="control-label">Color</label>
				<select name="color_id" id="imagecolor_id" class="form-control">
					<option value="0">Not Applicable</option>
					@foreach($colors as $color)
						<option value="{{$color->id}}">{{$color->color}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label class="control-label">Size</label>
				<select name="size_id" id="imagesize_id" class="form-control">
					<option value="0">Not Applicable</option>
					@foreach($sizes as $size)
						<option value="{{$size->id}}">{{$size->size}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label class="control-label">Featured Images ?</label>
				<div class="radio">
					<label>
						<input type="radio" name="featured" value="1"> Yes
					</label>
				</div>

				<div class="radio">
					<label>
						<input type="radio" name="featured" value="0" checked> No
					</label>
				</div>
			</div>
			<input name="__submit__" type="submit" value="Upload" class="btn btn-success btn-sm" />
		</div>
	</div>
	
</form>