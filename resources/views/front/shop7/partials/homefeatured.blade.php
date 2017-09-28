
				<h2 class="slider-title">
                    <span class="inline-title">FEATURED PRODUCTS</span>
                    <span class="line"></span>
                </h2>

                <div class="owl-carousel owl-theme manual featured-products-carousel">
                @if(sizeof($featuredproducts) > 0)
					@foreach($featuredproducts as $featuredproduct)
					<div class="product">
						<figure class="product-image-area">
							<a href="/product-detail/{{$featuredproduct->product->slug}}/{{$featuredproduct->product_id}}" title="{{$featuredproduct->product->productname}}" class="product-image">
								<img src="/storage/{{session('siteUrl')}}/productimages/original/{{$featuredproduct->product->featured_pic}}" alt="{{$featuredproduct->product->productname}}">
							</a>

							<a class="lightbox product-quickview" href="/storage/{{session('siteUrl')}}/productimages/original/{{$featuredproduct->product->featured_pic}}"  data-plugin-options="{'type':'image'}">
								<i class="fa fa-share-square-o"></i>
								<span>Larger Image</span>
							</a>
							<div class="product-label"><span class="discount">-10%</span></div>
						</figure>
						<div class="product-details-area">
							<h2 class="product-name"><a href="demo-shop-7-product-details.html" title="{{$featuredproduct->product->productname}}">{{$featuredproduct->product->productname}}</a></h2>
							<div class="product-ratings">
								<div class="ratings-box">
									<div class="rating" style="width:95%"></div>
								</div>
							</div>

							<div class="product-price-box">
								@if( $featuredproduct->product->productprices->pluck('discounted')->first() > 0 )
								<span class="old-price">{{session('siteCurrency')}} {{ $featuredproduct->product->productprices->pluck('regular')->first() }}</span>
								<span class="product-price">{{session('siteCurrency')}} {{ $featuredproduct->product->productprices->pluck('discounted')->first() }}</span>
								@else
								&nsbp;<br/>
								<span class="product-price">{{session('siteCurrency')}} {{ $featuredproduct->product->productprices->pluck('regular')->min() }}</span>
								@endif
							</div>

							<div class="product-actions">
								<a href="/add-to-wish-list/{{$featuredproduct->product->id}}" class="addtowishlist" title="Add to Wishlist">
									<i class="fa fa-heart"></i>
								</a>
								<a href="/product-detail/{{$featuredproduct->product->slug}}/{{$featuredproduct->product_id}}" class="addtocart" title="Add to Cart">
									<i class="fa fa-info"></i>
									<span>Detail</span>
								</a>
								<a href="#" class="comparelink" title="Add to Compare">
									<i class="glyphicon glyphicon-signal"></i>
								</a>
							</div>
						</div>
					</div>
					@endforeach
				@endif
				</div>
	