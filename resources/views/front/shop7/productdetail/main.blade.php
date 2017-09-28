<div class="product-details-box col-sm-8">
{{-- 	<div class="product-nav-container">
		<div class="product-nav product-nav-prev">
			<a href="#" title="Previous Product">
				<i class="fa fa-chevron-left"></i>
			</a>

			<div class="product-nav-dropdown">
				<img src="../img/demos/shop/products/product1.jpg" alt="Product">
				<h4>Blue Denim Dress</h4>
			</div>
		</div>
		<div class="product-nav product-nav-next">
			<a href="#" title="Next Product">
				<i class="fa fa-chevron-right"></i>
			</a>

			<div class="product-nav-dropdown">
				<img src="../img/demos/shop/products/product2.jpg" alt="Product">
				<h4>Black Woman Shirt</h4>
			</div>
		</div>
	</div> --}}
	<h1 class="product-name">
		{{$product->productname}}
	</h1>

	<div class="product-rating-container">
		<div class="product-ratings">
			<div class="ratings-box">
				<div class="rating" style="width:95%"></div>
			</div>
		</div>
		{{-- <div class="review-link">
			<a href="#" class="review-link-in" rel="nofollow"> <span class="count">1</span> customer review</a> | 
			<a href="#" class="write-review-link" rel="nofollow">Add a review</a>
		</div> --}}
	</div>

	<div class="product-short-desc">
		<p>{!! $product->description !!}</p>
	</div>

	<div class="product-detail-info">
		<div class="product-price-box">
			<span class="old-price">{{session('siteCurrency')}} 99.00</span>
			<span class="product-price">{{session('siteCurrency')}} 89.00</span>
		</div>
		<p class="availability">
			<span class="font-weight-semibold">Availability:</span>
			In Stock
		</p>
		<p class="email-to-friend"><a href="#">Email to a Friend</a></p>
	</div>

	<div class="product-detail-options">
		<div class="row">
			<div class="col-xs-6">
				<label><span class="required">*</span>Color:<span class="text-primary">Black</span></label>
				<ul class="configurable-filter-list filter-list-color">
					@foreach($product->productcolors as $key=>$color)
					<li>
						<a href="#">
							<img src="/shop7/img/{{$key}}-color.jpg" alt="{{$color->color}}" title="{{$color->color}}" />
						</a>
					</li>
					@endforeach
					
				</ul>
			</div>
			<div class="col-xs-6">
				<label><span class="required">*</span>Size:<span class="text-primary">S</span></label>
				<select name="selectSize" id="selectSize" class="form-control">
					@foreach($product->productsizes as $size)
					<option value="{{ $size->id }}">{{ $size->size}}</option>
					@endforeach
				</select>
			</div>
		</div>
	</div>

	<div class="product-actions">
		<div class="product-detail-qty">
			<input type="text" value="1" class="vertical-spinner" id="product-vqty">
		</div>
		<a href="#" class="addtocart" title="Add to Cart">
			<i class="fa fa-shopping-cart"></i>
			<span>Add to Cart</span>
		</a>
		
		<div class="actions-right">
			<a href="#" class="addtowishlist" title="Add to Wishlist">
				<i class="fa fa-heart"></i>
			</a>
			<a href="#" class="comparelink" title="Add to Compare">
				<i class="glyphicon glyphicon-signal"></i>
			</a>
		</div>
	</div>

	<div class="product-share-box">
		<div class="addthis_inline_share_toolbox"></div>
		
	</div>
</div>