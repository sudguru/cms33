@php
	App::setLocale(session('currentLanguage'));
@endphp
<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Doormandu</title>	

		<meta name="keywords" content="Door and Accessories" />
		<meta name="description" content="Doormandu">
		<meta name="author" content="">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="/mithaipasal/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="/mithaipasal/vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="/mithaipasal/vendor/animate/animate.min.css">
		<link rel="stylesheet" href="/mithaipasal/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="/mithaipasal/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="/mithaipasal/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="/mithaipasal/vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="/mithaipasal/css/theme.css">
		<link rel="stylesheet" href="/mithaipasal/css/theme-elements.css">
		<link rel="stylesheet" href="/mithaipasal/css/theme-blog.css">
		<link rel="stylesheet" href="/mithaipasal/css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="/mithaipasal/vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="/mithaipasal/vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="/mithaipasal/vendor/rs-plugin/css/navigation.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="/mithaipasal/css/skins/skin-shop-7.css"> 

		<!-- Demo CSS -->
		<link rel="stylesheet" href="/mithaipasal/css/demos/demo-shop-7.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="/mithaipasal/css/custom.css">

		<!-- Head Libs -->
		<script src="/mithaipasal/vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body>

		<div class="body">
		<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 147, 'stickySetTop': '-41px', 'stickyChangeLogo': false}">
				<div class="header-body">
					<div class="header-top">
						<div class="container">
							<div class="dropdowns-container">
								Welcome to Doormandu.com
							</div>		
							
							<div class="top-menu-area">
								<a href="#">Links <i class="fa fa-caret-down"></i></a>
								<ul class="top-menu">
									<li><a href="myaccount.html">My Account</a></li>
									<li><a href="#">Daily Deal</a></li>
									<li><a href="login.html">Log in</a></li>
								</ul>
							</div>
							
						</div>
					</div>
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-logo">
									<a href="index.php">
										<img alt="Mithai Pasal" width="108" height="50" src="/mithaipasal/images/logo.png">
									</a>
								</div>
							</div>
							<div class="header-column">
								<div class="row">


									<div class="cart-area">
										<div class="custom-block">
											<i class="fa fa-phone"></i>
											<span>(+977) 9851112345</span>
											<span class="split"></span>
											<a href="#">CONTACT US</a>
										</div>

										<div class="cart-dropdown">
											<a href="#" class="cart-dropdown-icon">
												<i class="minicart-icon"></i>
												<span class="cart-info">
													<span class="cart-qty">2</span>
													<span class="cart-text">item(s)</span>
												</span>
											</a>

											<div class="cart-dropdownmenu right">
												<div class="dropdownmenu-wrapper">
													<div class="cart-products">
														<div class="product product-sm">
															<a href="#" class="btn-remove" title="Remove Product">
																<i class="fa fa-times"></i>
															</a>
															<figure class="product-image-area">
																<a href="/productdetails" title="Product Name" class="product-image">
																	<img src="/mithaipasal/img/demos/shop/products/thumbs/cart-product1.jpg" alt="Product Name">
																</a>
															</figure>
															<div class="product-details-area">
																<h2 class="product-name"><a href="/productdetails" title="Product Name">Interior Door</a></h2>

																<div class="cart-qty-price">
																	1 X 
																	<span class="product-price">Rs.65.00</span>
																</div>
															</div>
														</div>
														<div class="product product-sm">
															<a href="#" class="btn-remove" title="Remove Product">
																<i class="fa fa-times"></i>
															</a>
															<figure class="product-image-area">
																<a href="/productdetails" title="Product Name" class="product-image">
																	<img src="/mithaipasal/img/demos/shop/products/thumbs/cart-product2.jpg" alt="Product Name">
																</a>
															</figure>
															<div class="product-details-area">
																<h2 class="product-name"><a href="/productdetails" title="Product Name">Patio Door</a></h2>

																<div class="cart-qty-price">
																	2 X 
																	<span class="product-price">Rs.140.00</span>
																</div>
															</div>
														</div>
													</div>

													<div class="cart-totals">
														Total: <span>Rs.205.00</span>
													</div>

													<div class="cart-actions">
														<a href="/cart" class="btn btn-primary">View Cart</a>
														<a href="/checkout" class="btn btn-primary">Checkout</a>
													</div>
												</div>
											</div>
										</div>
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
													<a href="/">
														Home
													</a>
												</li>

												<li class="dropdown dropdown-mega-small">
													<a href="category-4col.html" class="dropdown-toggle">
														Products <span class="tip tip-new">New</span>
													</a>
													<ul class="dropdown-menu">
														<li>
															<div class="dropdown-mega-content dropdown-mega-content-small">
																<div class="row">
																	<div class="col-md-7">
																		<div class="row">
																			<div class="col-md-6">
																				<a href="category-4col.html" class="dropdown-mega-sub-title">Front Doors</a>
																				<ul class="dropdown-mega-sub-nav">
																					<li><a href="#">By Size</a></li>
																					<li><a href="#">By Color</a></li>
																					<li><a href="#">By Material</a></li>
																					<li><a href="#">Single / Double Door</a></li>
																				</ul>
																			</div>
																			<div class="col-md-6">
																				<a href="category-4col.html" class="dropdown-mega-sub-title">Exterior Doors</a>
																				<ul class="dropdown-mega-sub-nav">
																					<li><a href="#">By Size</a></li>
																					<li><a href="#">By Color</a></li>
																					<li><a href="#">By Material</a></li>
																					<li><a href="#">Single / Double Door</a></li>
																				</ul>
																			</div>
																		</div>
	
																		<div class="row">
																			<div class="col-md-6">
																				<a href="category-4col.html" class="dropdown-mega-sub-title">Inner Room Doors<span class="tip tip-hot">Hot!</span></a>
																				<ul class="dropdown-mega-sub-nav">
																					<li><a href="#">By Size</a></li>
																					<li><a href="#">By Color</a></li>
																					<li><a href="#">By Material</a></li>
																					<li><a href="#">Single / Double Door</a></li>
																				</ul>
																			</div>
																			<div class="col-md-6">
																				<a href="category-4col.html" class="dropdown-mega-sub-title">Patio Doors</a>
																				<ul class="dropdown-mega-sub-nav">
																					<li><a href="#">By Size</a></li>
																					<li><a href="#">By Color</a></li>
																					<li><a href="#">By Material</a></li>
																					<li><a href="#">Single / Double Door</a></li>
																				</ul>
																			</div>
																		</div>
																	</div>

																	<div class="col-md-5 mega-banner-bg">
																		<img src="/mithaipasal/images/doors.jpg" alt="Banner bg">
																	</div>
																</div>
															</div>
														</li>
													</ul>
												</li>


												<li>
													<a href="#">
														How to Order ? <span class="tip tip-hot">Hot!</span>
													</a>
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

			<div class="mobile-nav">
				<div class="mobile-nav-wrapper">
					<ul class="mobile-side-menu">
						<li><a href="demo-shop-7.html">Home</a></li>
						<li>
							<span class="mmenu-toggle"></span>
							<a href="#">Fashion <span class="tip tip-new">New</span></a>
			
							<ul>
								<li>
									<span class="mmenu-toggle"></span>
									<a href="#">Women</a>
									<ul>
										<li>
											<a href="#">Tops &amp; Blouses</a>
										</li>
										<li>
											<a href="#">Accessories</a>
										</li>
										<li>
											<a href="#">Dresses &amp; Skirts</a>
										</li>
										<li>
											<a href="#">Shoes &amp; Boots</a>
										</li>
									</ul>
								</li>
								<li>
									<span class="mmenu-toggle"></span>
									<a href="#">Men</a>
			
									<ul>
										<li>
											<a href="#">Accessories</a>
										</li>
										<li>
											<a href="#">Watch &amp; Fashion <span class="tip tip-new">New</span></a>
										</li>
										<li>
											<a href="#">Tees, Knits &amp; Polos</a>
										</li>
										<li>
											<a href="#">Pants &amp; Denim</a>
										</li>
									</ul>
								</li>
								<li>
									<span class="mmenu-toggle"></span>
									<a href="#">Jewellery <span class="tip tip-hot">Hot</span></a>
			
									<ul>
										<li>
											<a href="#">Sweaters</a>
										</li>
										<li>
											<a href="#">Heels &amp; Sandals</a>
										</li>
										<li>
											<a href="#">Jeans &amp; Shorts</a>
										</li>
									</ul>
								</li>
								<li>
									<span class="mmenu-toggle"></span>
									<a href="#">Kids Fashion</a>
			
									<ul>
										<li>
											<a href="#">Casual Shoes</a>
										</li>
										<li>
											<a href="#">Spring &amp; Autumn</a>
										</li>
										<li>
											<a href="#">Winter Sneakers</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<span class="mmenu-toggle"></span>
							<a href="#">Pages <span class="tip tip-hot">Hot!</span></a>
			
							<ul>
								<li>
									<span class="mmenu-toggle"></span>
									<a href="#">Category</a>
									<ul>
										<li>
											<a href="category-2col.html">2 Columns</a>
										</li>
										<li>
											<a href="category-3col.html">3 Columns</a>
										</li>
										<li>
											<a href="category-4col.html">4 Columns</a>
										</li>
										<li>
											<a href="category-5col.html">5 Columns</a>
										</li>
										<li>
											<a href="category-6col.html">6 Columns</a>
										</li>
										<li>
											<a href="category-7col.html">7 Columns</a>
										</li>
										<li>
											<a href="category-8col.html">8 Columns</a>
										</li>
										<li>
											<a href="category-right-sidebar.html">Right Sidebar</a>
										</li>
										<li>
											<a href="category-list.html">Category List</a>
										</li>
									</ul>
								</li>
								<li>
									<span class="mmenu-toggle"></span>
									<a href="#">Category Banners</a>
									<ul>
										<li>
											<a href="category-banner-boxed-slider.html">Boxed slider</a>
										</li>
										<li>
											<a href="category-banner-boxed-image.html">Boxed Image</a>
										</li>
										<li>
											<a href="category-banner-fullwidth.html">Fullwidth</a>
										</li>
									</ul>
								</li>
								<li>
									<span class="mmenu-toggle"></span>
									<a href="#">Product Details</a>
									<ul>
										<li>
											<a href="/productdetails">Product Details 1</a>
										</li>
										<li>
											<a href="product-details2.html">Product Details 2</a>
										</li>
										<li>
											<a href="product-details3.html">Product Details 3</a>
										</li>
										<li>
											<a href="product-details4.html">Product Details 4</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="cart.html">Shopping Cart</a>
								</li>
								<li>
									<a href="checkout.html">Checkout</a>
								</li>
								<li>
									<span class="mmenu-toggle"></span>
									<a href="#">Loign &amp; Register</a>
									<ul>
										<li>
											<a href="login.html">Login</a>
										</li>
										<li>
											<a href="register.html">Register</a>
										</li>
									</ul>
								</li>
								<li>
									<span class="mmenu-toggle"></span>
									<a href="#">Dashboard</a>
									<ul>
										<li>
											<a href="dashboard.html">Dashboard</a>
										</li>
										<li>
											<a href="myaccount.html">My Account</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<a href="about-us.html">About Us</a>
						</li>
						<li>
							<span class="mmenu-toggle"></span>
							<a href="#">Blog</a>
							<ul>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="blog-post.html">Blog Post</a></li>
							</ul>
						</li>
						<li>
							<a href="contact-us.html">Contact Us</a>
						</li>
						<li>
							<a href="#">Buy Mithai Pasal!</a>
						</li>
					</ul>
				</div>
			</div>
			
			<div id="mobile-menu-overlay"></div>

			<div role="main" class="main">
			<div class="banners-container">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<div class="banner">
								<a href="#"><img src="/mithaipasal/images/main1.jpg" alt="Banner"></a>

								<div class="banner-content v1">
									<h2><strong>Huge</strong> Sale</h2>
									<p>Now starting at <strong>Rs. 599</strong></p>
									<a href="#">Shop now ></a>
								</div>

								<div class="banner-ribbon">
									<div class="ribbon-content">
										<span>Up to</span>
										<h3>70%</h3>
										<h4>Off</h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="banner">
								<a href="#"><img src="/mithaipasal/images/main2.jpg" alt="Banner"></a>
								<div class="banner-content v2">
									<h3>amazing</h3>
									<h2>doors</h2>
									<a href="#">Show now ></a>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="banner">
								<a href="#"><img src="/mithaipasal/images/main3.jpg" alt="Banner"></a>

								<div class="banner-content v3">
									<p>Fresh !</p>
									<h4>Rs 450.00</h4>
									<h3>Rs 350.<span>00</span></h3>
									<a href="#">Shop now ></a>
								</div>
							</div>

							<div class="banner">
								<a href="#"><img src="/mithaipasal/img/demos/shop/banners/shop7/banner4.jpg" alt="Banner"></a>

								<div class="banner-content v4">
									<h2><strong>Deals</strong> +<br> PROMOS</h2>
									<p>Limited sales in<br>our categories.</p>
									<a href="#" class="btn btn-primary">SHOP NOW <i class="fa fa-caret-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="container">
				<h2 class="slider-title">
                    <span class="inline-title">POPULAR PRODUCTS</span>
                    <span class="line"></span>
                </h2>

                <div class="owl-carousel owl-theme manual featured-products-carousel">
					<div class="product">
						<figure class="product-image-area">
							<a href="/productdetails" title="Product Name" class="product-image">
								<img src="/mithaipasal/images/s1.jpg" alt="Product Name">
							</a>

							<a href="#" class="product-quickview">
								<i class="fa fa-share-square-o"></i>
								<span>Quick View</span>
							</a>
							<div class="product-label"><span class="discount">-10%</span></div>
						</figure>
						<div class="product-details-area">
							<h2 class="product-name"><a href="/productdetails" title="Product Name">Gajar Haluwa</a></h2>
							<div class="product-ratings">
								<div class="ratings-box">
									<div class="rating" style="width:60%"></div>
								</div>
							</div>

							<div class="product-price-box">
								<span class="old-price">Rs.99.00</span>
								<span class="product-price">Rs.89.00</span>
							</div>

							<div class="product-actions">
								<a href="#" class="addtowishlist" title="Add to Wishlist">
									<i class="fa fa-heart"></i>
								</a>
								<a href="#" class="addtocart" title="Add to Cart">
									<i class="fa fa-shopping-cart"></i>
									<span>Add to Cart</span>
								</a>
								<a href="#" class="comparelink" title="Add to Compare">
									<i class="glyphicon glyphicon-signal"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="product">
						<figure class="product-image-area">
							<a href="/productdetails" title="Product Name" class="product-image">
								<img src="/mithaipasal/images/s2.jpg" alt="Product Name">
							</a>

							<a href="#" class="product-quickview">
								<i class="fa fa-share-square-o"></i>
								<span>Quick View</span>
							</a>
							<div class="product-label"><span class="discount">-25%</span></div>
						</figure>
						<div class="product-details-area">
							<h2 class="product-name"><a href="/productdetails" title="Product Name">Dudh Khir</a></h2>
							<div class="product-ratings">
								<div class="ratings-box">
									<div class="rating" style="width:0%"></div>
								</div>
							</div>

							<div class="product-price-box">
								<span class="old-price">Rs.120.00</span>
								<span class="product-price">Rs.90.00</span>
							</div>

							<div class="product-actions">
								<a href="#" class="addtowishlist" title="Add to Wishlist">
									<i class="fa fa-heart"></i>
								</a>
								<a href="#" class="addtocart" title="Add to Cart">
									<i class="fa fa-shopping-cart"></i>
									<span>Add to Cart</span>
								</a>
								<a href="#" class="comparelink" title="Add to Compare">
									<i class="glyphicon glyphicon-signal"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="product">
						<figure class="product-image-area">
							<a href="/productdetails" title="Product Name" class="product-image">
								<img src="/mithaipasal/images/s3.jpg" alt="Product Name">
							</a>

							<a href="#" class="product-quickview">
								<i class="fa fa-share-square-o"></i>
								<span>Quick View</span>
							</a>
						</figure>
						<div class="product-details-area">
							<h2 class="product-name"><a href="/productdetails" title="Product Name">Special Peda</a></h2>
							<div class="product-ratings">
								<div class="ratings-box">
									<div class="rating" style="width:60%"></div>
								</div>
							</div>

							<div class="product-price-box">
								<span class="product-price">Rs.70.00</span>
							</div>

							<div class="product-actions">
								<a href="#" class="addtowishlist" title="Add to Wishlist">
									<i class="fa fa-heart"></i>
								</a>
								<a href="#" class="addtocart" title="Add to Cart">
									<i class="fa fa-shopping-cart"></i>
									<span>Add to Cart</span>
								</a>
								<a href="#" class="comparelink" title="Add to Compare">
									<i class="glyphicon glyphicon-signal"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="product">
						<figure class="product-image-area">
							<a href="/productdetails" title="Product Name" class="product-image">
								<img src="/mithaipasal/images/s4.jpg" alt="Product Name">
							</a>

							<a href="#" class="product-quickview">
								<i class="fa fa-share-square-o"></i>
								<span>Quick View</span>
							</a>
							<div class="product-label"><span class="discount">-20%</span></div>
						</figure>
						<div class="product-details-area">
							<h2 class="product-name"><a href="/productdetails" title="Product Name">Panir Masala</a></h2>
							<div class="product-ratings">
								<div class="ratings-box">
									<div class="rating" style="width:80%"></div>
								</div>
							</div>

							<div class="product-price-box">
								<span class="old-price">Rs.100.00</span>
								<span class="product-price">Rs.90.00</span>
							</div>

							<div class="product-actions">
								<a href="#" class="addtowishlist" title="Add to Wishlist">
									<i class="fa fa-heart"></i>
								</a>
								<a href="#" class="addtocart" title="Add to Cart">
									<i class="fa fa-shopping-cart"></i>
									<span>Add to Cart</span>
								</a>
								<a href="#" class="comparelink" title="Add to Compare">
									<i class="glyphicon glyphicon-signal"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="product">
						<figure class="product-image-area">
							<a href="/productdetails" title="Product Name" class="product-image">
								<img src="/mithaipasal/images/s6.jpg" alt="Product Name">
							</a>

							<a href="#" class="product-quickview">
								<i class="fa fa-share-square-o"></i>
								<span>Quick View</span>
							</a>
						</figure>
						<div class="product-details-area">
							<h2 class="product-name"><a href="/productdetails" title="Product Name">Bombay Barfi</a></h2>
							<div class="product-ratings">
								<div class="ratings-box">
									<div class="rating" style="width:0%"></div>
								</div>
							</div>

							<div class="product-price-box">
								<span class="product-price">Rs.70.00</span>
							</div>

							<div class="product-actions">
								<a href="#" class="addtowishlist" title="Add to Wishlist">
									<i class="fa fa-heart"></i>
								</a>
								<a href="#" class="addtocart" title="Add to Cart">
									<i class="fa fa-shopping-cart"></i>
									<span>Add to Cart</span>
								</a>
								<a href="#" class="comparelink" title="Add to Compare">
									<i class="glyphicon glyphicon-signal"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container mb-xlg">
        		<h2 class="slider-title">
                    <span class="inline-title">BROWSE OUR CATEGORIES</span>
                    <span class="line"></span>
                </h2>

                <div class="owl-carousel owl-theme" data-plugin-options="{'items':4, 'loop': false, 'nav': true, 'dots': false, 'margin': 10}">
					<div class="cat-box">
						<a href="#">
							<img src="/mithaipasal/img/demos/shop/category/category1.jpg" alt="Category">
						</a>
						<h3>Front Doors</h3>
					</div>

					<div class="cat-box">
						<a href="#">
							<img src="/mithaipasal/img/demos/shop/category/category2.jpg" alt="Category">
						</a>
						<h3>Inner Room Doors</h3>
					</div>

					<div class="cat-box">
						<a href="#">
							<img src="/mithaipasal/img/demos/shop/category/category3.jpg" alt="Category">
						</a>
						<h3>Patio Doors</h3>
					</div>

					<div class="cat-box">
						<a href="#">
							<img src="/mithaipasal/img/demos/shop/category/category4.jpg" alt="Category">
						</a>
						<h3>External Doors</h3>
					</div>

					<div class="cat-box">
						<a href="#">
							<img src="/mithaipasal/img/demos/shop/category/category1.jpg" alt="Category">
						</a>
						<h3>Security Doors</h3>
					</div>
				</div>
			</div>



			<div class="container mb-xlg">
                <div class="row">
                	<div class="col-sm-6">
                		<h2 class="slider-title mt-sm">
		                    <span class="inline-title">LATESt BLOG POSTS</span>
		                </h2>

		                <div class="owl-carousel owl-theme recent-posts-carousel" data-plugin-options="{'items':1, 'loop': false}">
							<article class="post">
								<div class="row">
									<div class="col-sm-5">
										<div class="post-image">
											<div class="img-thumbnail">
												<img class="img-responsive" src="/mithaipasal/img/demos/shop/blog/blog-shop-1.jpg" alt="Post">
											</div>
										</div>
									</div>

									<div class="col-sm-7">
										<div class="post-date">
											<span class="day">10</span>
											<span class="month">Jan</span>
										</div>
										<h2><a href="blog-post.php">Post Format - Image Gallery</a></h2>

										<div class="post-content">

											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi…</p>

											<a href="blog-post.php" class="btn btn-link">Read more</a>
										</div>
									</div>
								</div>
							</article>

							<article class="post">
								<div class="row">
									<div class="col-sm-5">
										<div class="post-image">
											<div class="img-thumbnail">
												<img class="img-responsive" src="/mithaipasal/img/demos/shop/blog/blog-shop-2.jpg" alt="Post">
											</div>
										</div>
									</div>

									<div class="col-sm-7">
										<div class="post-date">
											<span class="day">22</span>
											<span class="month">Dec</span>
										</div>
										<h2><a href="blog-post.php">Post Format - Video</a></h2>

										<div class="post-content">
											<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent…</p>

											<a href="blog-post.php" class="btn btn-link">Read more</a>
										</div>
									</div>
								</div>
							</article>
						</div>
                	</div>

                	<div class="col-sm-6">
                		<h2 class="slider-title mt-sm">
		                    <span class="inline-title">WHAT CLIENT'S SAY</span>
		                </h2>

		                <div class="row">
							<div class="owl-carousel owl-theme mb-none" data-plugin-options="{'items': 1}">
								<div>
									<div class="col-md-12">
										<div class="testimonial testimonial-primary">
											<blockquote>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.  Donec hendrerit vehicula est, in consequat.  Donec hendrerit vehicula est, in consequat.</p>
											</blockquote>
											<div class="testimonial-arrow-down"></div>
											<div class="testimonial-author">
												<div class="testimonial-author-thumbnail img-thumbnail">
													<img src="/mithaipasal/img/clients/client-1.jpg" alt="">
												</div>
												<p><strong>John Smith</strong><span>CEO & Founder - Okler</span></p>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="col-md-12">
										<div class="testimonial testimonial-primary">
											<blockquote>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
											</blockquote>
											<div class="testimonial-arrow-down"></div>
											<div class="testimonial-author">
												<div class="testimonial-author-thumbnail img-thumbnail">
													<img src="/mithaipasal/img/clients/client-1.jpg" alt="">
												</div>
												<p><strong>John Smith</strong><span>CEO & Founder - Okler</span></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                	</div>
                </div>
			</div>

			<div class="container mb-xlg">
				<h2 class="slider-title">
                    <span class="inline-title">FEATURED BRANDS</span>
                    <span class="line"></span>
                    <a href="#" class="view-all">View All</a>
                </h2>

				<div class="owl-carousel owl-theme manual clients-carousel owl-no-narrow">
					<a href="#" title="Brand Name" class="client">
						<img class="img-responsive" src="/mithaipasal/img/demos/shop/brands/square/brand1.jpg" alt="Brand">
					</a>
					<a href="#" title="Brand Name" class="client">
						<img class="img-responsive" src="/mithaipasal/img/demos/shop/brands/square/brand2.jpg" alt="Brand">
					</a>
					<a href="#" title="Brand Name" class="client">
						<img class="img-responsive" src="/mithaipasal/img/demos/shop/brands/square/brand3.jpg" alt="Brand">
					</a>
					<a href="#" title="Brand Name" class="client">
						<img class="img-responsive" src="/mithaipasal/img/demos/shop/brands/square/brand4.jpg" alt="Brand">
					</a>
					<a href="#" title="Brand Name" class="client">
						<img class="img-responsive" src="/mithaipasal/img/demos/shop/brands/square/brand5.jpg" alt="Brand">
					</a>
					<a href="#" title="Brand Name" class="client">
						<img class="img-responsive" src="/mithaipasal/img/demos/shop/brands/square/brand6.jpg" alt="Brand">
					</a>
					<a href="#" title="Brand Name" class="client">
						<img class="img-responsive" src="/mithaipasal/img/demos/shop/brands/square/brand1.jpg" alt="Brand">
					</a>
				</div>
			</div>

			</div>

			<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="footer-ribbon">
							<span>Get in Touch</span>
						</div>
						
						<div class="col-md-3">
							<h4>My Account</h4>
							<ul class="links">
								<li>
									<i class="fa fa-caret-right text-color-primary"></i>
									<a href="about-us.html">About Us</a>
								</li>
								<li>
									<i class="fa fa-caret-right text-color-primary"></i>
									<a href="contact-us.html">Contact Us</a>
								</li>
								<li>
									<i class="fa fa-caret-right text-color-primary"></i>
									<a href="myaccount.html">My account</a>
								</li>
								<li>
									<i class="fa fa-caret-right text-color-primary"></i>
									<a href="#">Orders history</a>
								</li>
								<li>
									<i class="fa fa-caret-right text-color-primary"></i>
									<a href="#">Advanced search</a>
								</li>
							</ul>
						</div>
						<div class="col-md-3">
							<div class="contact-details">
								<h4>Contact Information</h4>
								<ul class="contact">
									<li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong><br> 1234 Street Name, Kathmandu, Nepal</p></li>
									<li><p><i class="fa fa-phone"></i> <strong>Phone:</strong><br> (123) 456-7890</p></li>
									<li><p><i class="fa fa-envelope-o"></i> <strong>Email:</strong><br> <a href="mailto:mail@example.com">mail@example.com</a></p></li>
									<li><p><i class="fa fa-clock-o"></i> <strong>Working Days/Hours:</strong><br> Mon - Sun / 9:00AM - 8:00PM</p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<h4>Main Features</h4>
							<ul class="features">
								<li>
									<i class="fa fa-check text-color-primary"></i>
									<a href="#">Feature One</a>
								</li>
								<li>
									<i class="fa fa-check text-color-primary"></i>
									<a href="#">This is 2nd Feature</a>
								</li>
								<li>
									<i class="fa fa-check text-color-primary"></i>
									<a href="#">Third Feaature</a>
								</li>
								<li>
									<i class="fa fa-check text-color-primary"></i>
									<a href="#">Interesting New Feature</a>
								</li>
								<li>
									<i class="fa fa-check text-color-primary"></i>
									<a href="#">One More Feature</a>
								</li>
							</ul>
						</div>
						<div class="col-md-3">
							<div class="newsletter">
								<h4>Be the First to Know</h4>
								<p class="newsletter-info">Get all the latest information on Events,<br> Sales and Offers. Sign up for newsletter today.</p>

								<div class="alert alert-success hidden" id="newsletterSuccess">
									<strong>Success!</strong> You've been added to our email list.
								</div>

								<div class="alert alert-danger hidden" id="newsletterError"></div>


								<p>Enter your e-mail Address:</p>
								<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
									<div class="input-group">
										<input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
										<span class="input-group-btn">
											<button class="btn btn-primary" type="submit">Submit</button>
										</span>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<a href="index.html" class="logo">
							<img alt="Mithai Pasal" class="img-responsive" src="/mithaipasal/images/logo_footer.png">
						</a>
						<ul class="social-icons">
							<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						</ul>

						<p class="copyright-text">© Copyright 2017. All Rights Reserved.</p>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="/mithaipasal/vendor/jquery/jquery.min.js"></script>
		<script src="/mithaipasal/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="/mithaipasal/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="/mithaipasal/vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="/mithaipasal/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="/mithaipasal/vendor/common/common.min.js"></script>
		<script src="/mithaipasal/vendor/jquery.validation/jquery.validation.min.js"></script>
		<script src="/mithaipasal/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
		<script src="/mithaipasal/vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="/mithaipasal/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="/mithaipasal/vendor/isotope/jquery.isotope.min.js"></script>
		<script src="/mithaipasal/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="/mithaipasal/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="/mithaipasal/vendor/vide/vide.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="/mithaipasal/js/theme.js"></script>


		<script src="/mithaipasal/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="/mithaipasal/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="/mithaipasal/js/views/view.contact.js"></script>



		<!-- Demo -->
		<script src="/mithaipasal/js/demos/demo-shop-7.js"></script>
		
		<!-- Theme Custom -->
		<script src="/mithaipasal/js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="/mithaipasal/js/theme.init.js"></script>





	</body>
</html>
