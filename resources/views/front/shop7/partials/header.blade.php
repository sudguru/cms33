<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 147, 'stickySetTop': '-41px', 'stickyChangeLogo': false}">
	<div class="header-body">
		<div class="header-top">
			<div class="container">
				<div class="dropdowns-container">
					<div class="header-dropdown cur-dropdown">
						<a href="#">{{ $site->currencies[0]['symbol']  }} <i class="fa fa-caret-down"></i></a>
						<ul class="header-dropdownmenu">
							@for($i = 0; $i < sizeof($site->currencies); $i++)
							<li><a href="#"><strong>{{ $site->currencies[$i]['symbol'] }}</strong></a></li>
							@endfor
						</ul>
					</div>
					<div class="header-dropdown lang-dropdown">
						<a href="#"><img src="/flags/{{session('siteLanguage')}}.png" alt="English">{{ session('siteLanguageCaption') }} <i class="fa fa-caret-down"></i></a>
						<ul class="header-dropdownmenu">
							@for($i = 0; $i < sizeof($site->languages); $i++)
							<li><a href="/siteLanguage/{{ $site->languages[$i]['name']}}"><img src="/flags/{{ $site->languages[$i]['name'] }}.png" alt="{{ $site->languages[$i]['caption'] }}">{{ $site->languages[$i]['caption'] }}</a></li>
							@endfor
						</ul>
					</div>
				</div>
				
				<div class="top-menu-area">
					<a href="#">Links <i class="fa fa-caret-down"></i></a>
					<ul class="top-menu">
						@if(Auth::check())
							<li><a href="/post-category/blogs/7">Blog</a></li>
							<li><a href="/daily-deals">Daily Deals</a></li>
							<li><a href="/my-profile"><strong>User Name</strong></a></li>
							<li><a href="/my-account">My Account</a></li>
							<li><a href="/my-wishlist">My Wishlist</a></li>
							<li><a href="/log-out">Log Out</a></li>
						@else
							<li><a href="/post-category/blogs/7">Blog</a></li>
							<li><a href="/daily-deals/">Daily Deals</a></li>
							<li><a href="#"><strong>Guest</strong></a></li>
							<li><a href="/user-login">Log in / Register</a></li>
						@endif
						
						
					</ul>
				</div>
				<p class="welcome-msg">{{ $siteinfo->welcomemsg }}</p>
			</div>
		</div>
		<div class="header-container container">
			<div class="header-row">
				<div class="header-column">
					<div class="header-logo">
						<a href="/">
							<img alt="{{$siteinfo->description}}" width="108" height="50" src="/shop7/img/logo.png">
						</a>
					</div>
				</div>
				<div class="header-column">
					<div class="row">
						<div class="cart-area">
							<div class="custom-block">
								<i class="fa fa-phone"></i>
								<span>{{ $siteinfo->phone }}</span>
								<span class="split"></span>
								<a href="/blog-post/contact-us">CONTACT US</a>
							</div>
							@include('front.shop7.partials.quickcart')
						</div>
						<a href="#" class="mmenu-toggle-btn" title="Toggle menu">
							<i class="fa fa-bars"></i>
						</a>
						<div class="header-search">
							<a href="#" class="search-toggle"><i class="fa fa-search"></i></a>
							<form action="#" method="get">
								<div class="header-search-wrapper">
									<input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
									<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
								</div>
							</form>
						</div>
						<div class="header-nav-main">
							<nav>
								<ul class="nav nav-pills" id="mainNav">
									<li class="active">
										<a href="/">Home</a>
									</li>
									<li class="dropdown">
										<a class="dropdown-toggle" href="#">
											Products
										</a>
										<ul class="dropdown-menu">
											<li class="dropdown-submenu">
												<a href="#">By Category</a>
												<ul class="dropdown-menu">
												@foreach ($productcategories as $parent)
												@if ($parent->children->count())
													<li class="dropdown-submenu">
												@else
													<li>
												@endif
													<a href="/product-hub/productcategories/{{ $parent->slug }}/{{ $parent->id }}">{{ $parent->name }}</a>
													@if ($parent->children->count())
													<ul class="dropdown-menu">
														@foreach ($parent->children as $child)
														<li>
															<a href="/product-hub/productcategories/{{ $child->slug }}/{{ $child->id }}">{{ $child->name }}</a>
														</li>
														@endforeach
													</ul>
													@endif
												</li>
												@endforeach
											</ul>
											</li>
											<li class="dropdown-submenu">
												<a href="#">By Brand</span></a>
												<ul class="dropdown-menu">
													@foreach($brands as $brand)
														@if(strtolower($brand->brandname) == "none")
															<li><a href="/product-hub/brand/all-brands/{{$brand->id}}">All Brands</a></li>
														@else
															<li><a href="/product-hub/brand/{{ $brand->brandname }}/{{$brand->id}}">{{ $brand->brandname }}</a></li>
														@endif
													@endforeach
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a href="#">By Material Type</span></a>
												<ul class="dropdown-menu">
													@foreach($materialtypes as $materialtype)
														<li><a href="/product-hub/materialtype/{{$materialtype->materialtype}}/{{$materialtype->id}}">{{$materialtype->materialtype}}</a></li>
													@endforeach
												</ul>
											</li>
										</ul>
									</li>
									<li>
										<a href="/product-hub/search/hub/0">Search</a>
									</li>
									<li>
										<a href="/blog-post/how-it-works/3">How It Works?</a>
									</li>
									<li>
										<a href="/post-category/frequently-asked-questions/3">FAQ</a>
									</li>
									
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>