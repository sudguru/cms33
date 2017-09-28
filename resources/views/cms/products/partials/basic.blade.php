
<div class="row">
	<div class="col-md-12">
		<div class="form-group">
			<label class="control-label">Product Name</label>
			@if(old('productname'))
				<input type="text" name="productname" id="productname" class="form-control" onblur="slug_it(this.value)" value="{{ old('productname') }}">
			@elseif(isset($product->productname))
				<input type="text" name="productname" id="productname" class="form-control" onblur="slug_it(this.value)" value="{{ $product->productname }}">
			@else
				<input type="text" name="productname" id="productname" class="form-control" onblur="slug_it(this.value)"  value="">
			@endif
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="form-group">
			<label class="control-label">Slug</label>
			@if(old('slug'))
			<input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug') }}">
			@elseif(isset($product->slug))
			<input type="text" name="slug" id="slug" class="form-control" value="{{ $product->slug }}">
			@else
			<input type="text" name="slug" id="slug" class="form-control" value="">
			@endif
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label class="control-label">Code / SKU / ISBN</label>
			@if(old('sku'))
			<input type="text" name="sku" id="sku" class="form-control" value="{{ old('sku') }}">
			@elseif(isset($product->sku))
			<input type="text" name="sku" id="sku" class="form-control" value="{{ $product->sku }}">
			@else
			<input type="text" name="sku" id="sku" class="form-control" value="">
			@endif
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label class="control-label">Price Factors</label>
			<select name="pricefactor" id="pricefactor" class="form-control">
					@php
						$sSize = "";
						if(old('pricefactor') && old('pricefactor') == "Size") $sSize = " selected";
						if(isset($product->pricefactor) && $product->pricefactor == "Size") $sSize = " selected";
						$sColor = "";
						if(old('pricefactor') && old('pricefactor') == "Color") $sColor = " selected";
						if(isset($product->pricefactor) && $product->pricefactor == "Color") $sColor = " selected";
						$sBoth = "";
						if(old('pricefactor') && old('pricefactor') == "Both") $sBoth = " selected";
						if(isset($product->pricefactor) && $product->pricefactor == "Both") $sBoth = " selected";
					@endphp
					<option value="None" selected>None</option>
					<option value="Size" {{ $sSize }}>Size</option>
					<option value="Color" {{ $sColor }}>Color</option>
					<option value="Both" {{ $sBoth }}>Both Size & Color</option>
			</select>			
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label class="control-label">Material Type</label>
			<select name="materialtype_id" id="materialtype_id" class="form-control">
				@foreach($materialtypes as $materialtype)
					@php
						$s = "";
						if(old('materialtype_id') && old('materialtype_id') == $materialtype->id) $s = " selected";
						if(isset($product->materialtype_id) && $product->materialtype_id == $materialtype->id) $s = " selected";
					@endphp
					<option value="{{ $materialtype->id }}" {{ $s }}>{{ $materialtype->materialtype }}</option>
				@endforeach
			</select>			
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label class="control-label">Brand Name</label>
			<select name="brand_id" id="brand_id" class="form-control">
				@foreach($brands as $brand)
					@php
						$s = "";
						if(old('brand_id') && old('brand_id') == $brand->id) $s = " selected";
						if(isset($product->brand_id) && $product->brand_id == $brand->id) $s = " selected";
					@endphp
					<option value="{{ $brand->id }}" {{ $s }}>{{ $brand->brandname }}</option>
				@endforeach
			</select>			
		</div>
	</div>
</div>


<div class="row">
	<div class="col-md-12">
		<div class="form-group">
		<label class="control-label">Description</label>
			@if(old('description'))
				<textarea class="form-control" name="description" id="description" rows="4">{{ old('description') }}</textarea>
			@elseif(isset($product->description))
				<textarea class="form-control" name="description" id="description" rows="4">{{ $product->description }}</textarea>
			@else
				<textarea class="form-control" name="description" id="description" rows="4"></textarea>
			@endif
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="form-group">
		<label class="control-label">Specification</label>
			@if(old('specification'))
				<textarea class="form-control" name="specification" id="specification" rows="4">{{ old('specification') }}</textarea>
			@elseif(isset($product->specification))
				<textarea class="form-control" name="specification" id="specification" rows="4">{{ $product->specification }}</textarea>
			@else
				<textarea class="form-control" name="specification" id="specification" rows="4"></textarea>
			@endif
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label class="control-label">product Status</label>
			<select name="product_status" id="product_status" class="form-control">
				@php
				if(old('product_status')) {
					$status = old('product_status');
				}
				elseif(isset($product->product_status)) {
					$status = $product->product_status;
				}
				else {
					$status = "";
				}
				@endphp
				<option value="Published" @php if($status == "Published") echo "selected"; @endphp>Published</option>
				<option value="Draft" @php if($status == "Draft") echo "selected"; @endphp>Draft</option>
			</select>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label class="control-label">Review Status</label>
			<select name="review_status" id="review_status" class="form-control">
				@php
				$status = "";
				if(old('review_status')) {
					$status = old('review_status');
				}
				elseif(isset($product->review_status)) {
					$status = $product->review_status;
				}
				else {
					$status = "";
				}
				@endphp
				<option value="None" @php if($status == "None") echo "selected"; @endphp>None</option>
				<option value="Facebook" @php if($status == "Facebook") echo "selected"; @endphp>Facebook</option>
				<option value="Simple" @php if($status == "Simple") echo "selected"; @endphp>Simple</option>
			</select>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="form-group">
			<label class="control-label">Tags</label>
			@if(old('tags'))
			<input type="text" name="tags" id="tags" class="form-control" value="{{ old('tags') }}">
			@elseif(isset($product->tags))
			<input type="text" name="tags" id="tags" class="form-control" value="{{ $product->tags }}">
			@else
			<input type="text" name="tags" id="tags" class="form-control" value="">
			@endif
		</div>
	</div>
</div>



