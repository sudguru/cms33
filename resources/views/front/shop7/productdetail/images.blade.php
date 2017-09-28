<div class="product-img-box col-sm-4">
	<div class="product-img-box-wrapper">
		<div class="product-img-wrapper">
			<img id="product-zoom" src="/storage/{{$site->siteUrl}}/productimages/thumb_240/{{$product->featured_pic}}" alt="{{ $product->productname}}" data-zoom-image="/storage/{{$site->siteUrl}}/productimages/original/{{$product->featured_pic}}" alt="{{ $product->productname}}">
		</div>

		<a href="#" class="product-img-zoom" style="color:#fff" title="Zoom">
			<span class="glyphicon glyphicon-search"></span>
		</a>
	</div>

	<div class="owl-carousel manual" id="productGalleryThumbs">
		@foreach($product->productimages as $productimage)
		<div class="product-img-wrapper">
			<a href="#" data-image="/storage/{{$site->siteUrl}}/productimages/thumb_240/{{$productimage->picpath}}" data-zoom-image="/storage/{{$site->siteUrl}}/productimages/original/{{$productimage->picpath}}" class="product-gallery-item">
				<img src="/storage/{{$site->siteUrl}}/productimages/thumb_240/{{$productimage->picpath}}" alt="{{$product->productname}}">
			</a>
		</div>
		@endforeach
	</div>
</div>