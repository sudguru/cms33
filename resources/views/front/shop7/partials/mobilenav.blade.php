<div class="mobile-nav">
				<div class="mobile-nav-wrapper">
					<ul class="mobile-side-menu">
						<li><a href="/">Home</a></li>
						<li>
							<span class="mmenu-toggle"></span>
							<a href="#">Products</a>			
							<ul>
								<li>
									<span class="mmenu-toggle"></span>
									<a href="#">By Category</a>
									<ul>
										@foreach($productcategories as $productcategory)
											<li><a href="/product-category/{{$productcategory->slug}}">{{$productcategory->name}}</a></li>
										@endforeach
									</ul>
								</li>
								{{-- <li>
									<span class="mmenu-toggle"></span>
									<a href="#">By Size</a>			
									<ul>
										@foreach($productsizes as $productsize)
											<li><a href="/search/product-size/{{$productsize}}">{{$productsize}}</a></li>
										@endforeach
									</ul>
								</li> --}}
								<li>
									<span class="mmenu-toggle"></span>
									<a href="#">By Brand</a>
			
									<ul>
										@foreach($brands as $brand)
											<li><a href="/product-materialtype/{{$brand->brandname}}">{{$brand->brandname}}</a></li>
										@endforeach

									</ul>
								</li>
								<li>
									<span class="mmenu-toggle"></span>
									<a href="#">By Material Type</a>
			
									<ul>
										@foreach($materialtypes as $materialtype)
											<li><a href="/product-materialtype/{{$materialtype->materialtype}}">{{$materialtype->materialtype}}</a></li>
										@endforeach
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<a href="/blog-post/how-it-works">How It Works?</a>
						</li>
						<li>
							<a href="demo-shop-7-contact-us.html">Contact Us</a>
						</li>
						<li>
							<a href="/blog-post/faq">FAQ</a>
						</li>
						<li>
							<a href="/blog-post/contact-us">Contact Us</a>
						</li>
					</ul>
				</div>
			</div>

			<div id="mobile-menu-overlay"></div>