<ul class="products-grid columns4">
	@foreach($products as $product)
	<li>
		<div class="product">
			<figure class="product-image-area">
				<a href="/product-detail/{{$product->slug}}/{{$product->id}}" title="{{$product->productname}}" class="product-image">
					<img src="/storage/{{$site->siteUrl}}/productimages/thumb_240/{{$product->featured_pic}}" alt="{{$product->productname}}">
				</a>

				<a class="lightbox product-quickview" href="/storage/{{session('siteUrl')}}/productimages/original/{{$product->featured_pic}}"  data-plugin-options="{'type':'image'}">
					<i class="fa fa-share-square-o"></i>
					<span>Larger Image</span>
				</a>
				{{-- <div class="product-label"><span class="discount">-10%</span></div> --}}
				<div class="product-label"><span class="new">New</span></div>
			</figure>
			<div class="product-details-area">
				<h2 class="product-name"><a href="/product-detail/{{$product->slug}}/{{$product->id}}" title="{{$product->productname}}">{{$product->productname}}</a></h2>
				<div class="product-ratings">
					<div class="ratings-box">
						<div class="rating" style="width:95%"></div>
					</div>
				</div>

				{{-- <div class="product-price-box">
					@if( $product->productprices->pluck('discounted')->first() > 0 )
					<span class="old-price">{{session('siteCurrency')}} {{ $product->productprices->pluck('regular')->first() }}</span>
					<span class="product-price">{{session('siteCurrency')}} {{ $product->productprices->pluck('discounted')->first() }}</span>
					@else
					&nsbp;<br/>
					<span class="product-price">{{session('siteCurrency')}} {{ $product->productprices->pluck('regular')->min() }}</span>
					@endif
				</div> --}}

				<div class="product-actions">
					<a href="/add-to-wish-list/{{$product->id}}" class="addtowishlist" title="Add to Wishlist">
						<i class="fa fa-heart"></i>
					</a>
					<a href="/product-detail/{{$product->slug}}/{{$product->id}}" class="addtocart" title="Add to Cart">
						<i class="fa fa-info"></i>
						<span>Product Detail</span>
					</a>
				</div>
			</div>
		</div>
	</li>
	@endforeach
</ul>