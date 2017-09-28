<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 146, 'stickySetTop': '-146px', 'stickyChangeLogo': false}">
				<div class="header-body">
					<div class="header-top">
						<div class="container">
							<div class="dropdowns-container">

								@include('front.thoksaman.partials.headers.compare')
							</div>		
							
							<div class="top-menu-area">
								<a href="#">Links <i class="fa fa-caret-down"></i></a>
								<ul class="top-menu">
									<li><a href="/thoksaman/myaccount">My Account</a></li>
									<li><a href="#">Daily Deal</a></li>
									<li><a href="#">My Wishlist</a></li>
									<li><a href="/thoksaman/blog">Blog</a></li>
									<li><a href="/thoksaman/login">Log in</a></li>
								</ul>
							</div>
							<p class="welcome-msg">Welcome to ThokSaman.com!</p>
						</div>
					</div>
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="row">
									<div class="header-search">
										<a href="#" class="search-toggle"><i class="fa fa-search"></i></a>
										<form action="/thoksaman/search" method="POST">
											<div class="header-search-wrapper">
												<input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
												<select id="cat" name="cat">
													<option value="">All Categories</option>
														@foreach ($productcategories as $parent)
														<option value="{{ $parent->id }}">{{ $parent->name }}</option>
														@if ($parent->children->count())
															@foreach ($parent->children as $child)
																<option value="{{ $child->id }}">-----{{ $child->name }}</option>
															@endforeach
														@endif
														@endforeach
		
                                                </select>
												<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
											</div>
										</form>
									</div>

									<a href="#" class="mmenu-toggle-btn" title="Toggle menu">
										<i class="fa fa-bars"></i>
									</a>
								</div>
							</div>
							<div class="header-column header-column-center">
								<div class="header-logo">
									<a href="/">
										<img alt="" width="111" height="51" src="/thoksaman/images/logo.png">
									</a>
								</div>
							</div>
							<div class="header-column">
								<div class="row">
									<div class="cart-area">
										<div class="custom-block">
											<i class="fa fa-phone"></i>
											<span>(+977) 123 45 67</span>
											<span class="split"></span>
											<a href="/thoksaman/contact">CONTACT US</a>
										</div>

										@include('front.thoksaman.partials.headers.cart')
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header-container header-nav">
						<div class="container">
							<div class="header-nav-main">
								<nav>
									<ul class="nav nav-pills" id="mainNav">
										<li class="dropdown active">
											<a href="/">
												Home
											</a>
										</li>
										<li class="dropdown">
											<a class="dropdown-toggle" href="#">
												Products
											</a>
											<ul class="dropdown-menu">
												@foreach ($productcategories as $parent)
												@if ($parent->children->count())
													<li class="dropdown-submenu">
												@else
													<li>
												@endif
													<a href="/thoksaman/pc/{{ $parent->slug }}">{{ $parent->name }}</a>
													@if ($parent->children->count())
													<ul class="dropdown-menu">
														@foreach ($parent->children as $child)
														<li>
															<a href="/thoksaman/pc/{{ $child->slug }}">{{ $child->name }}</a>
														</li>
														@endforeach
													</ul>
													@endif
												</li>
												@endforeach
											</ul>
										</li>
										<li class="dropdown">
											<a href="#">
												About Us
											</a>
										</li>
										<li class="pull-right">
											<a href="#">
												How it works ? <span class="tip tip-hot">Hot!</span>
											</a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</header>