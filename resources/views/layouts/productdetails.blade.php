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
																<a href="product-details.html" title="Product Name" class="product-image">
																	<img src="/mithaipasal/img/demos/shop/products/thumbs/cart-product1.jpg" alt="Product Name">
																</a>
															</figure>
															<div class="product-details-area">
																<h2 class="product-name"><a href="product-details.html" title="Product Name">Interior Door</a></h2>

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
																<a href="product-details.html" title="Product Name" class="product-image">
																	<img src="/mithaipasal/img/demos/shop/products/thumbs/cart-product2.jpg" alt="Product Name">
																</a>
															</figure>
															<div class="product-details-area">
																<h2 class="product-name"><a href="product-details.html" title="Product Name">Patio Door</a></h2>

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
														<a href="cart.php" class="btn btn-primary">View Cart</a>
														<a href="checkout.php" class="btn btn-primary">Checkout</a>
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
													<a href="index.php">
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
																					<li><a href="#">By Configuration</a></li>
																				</ul>
																			</div>
																			<div class="col-md-6">
																				<a href="category-4col.html" class="dropdown-mega-sub-title">Exterior Doors</a>
																				<ul class="dropdown-mega-sub-nav">
																					<li><a href="#">By Size</a></li>
																					<li><a href="#">By Color</a></li>
																					<li><a href="#">By Material</a></li>
																					<li><a href="#">By Configuration</a></li>
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
																					<li><a href="#">By Configuration</a></li>
																				</ul>
																			</div>
																			<div class="col-md-6">
																				<a href="category-4col.html" class="dropdown-mega-sub-title">Patio Doors</a>
																				<ul class="dropdown-mega-sub-nav">
																					<li><a href="#">By Size</a></li>
																					<li><a href="#">By Color</a></li>
																					<li><a href="#">By Material</a></li>
																					<li><a href="#">By Configuration</a></li>
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
											<a href="product-details.html">Product Details 1</a>
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



			<div class="container">
				
			</div>




<section class="page-header">
				<div class="container">
					<ul class="breadcrumb">
						<li><a href="#">Home</a></li>

						<li><a href="#">Fashion</a></li>
						<li class="active">Black Maxi Dress</li>
					</ul>
				</div>
			</section>
			
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="product-view">
							<div class="product-essential">
								<div class="row">
									<div class="product-img-box col-sm-5">
										<div class="product-img-box-wrapper">
	                                        <div class="product-img-wrapper">
	                                        	<img id="product-zoom" src="/mithaipasal/images/s6.jpg" data-zoom-image="/mithaipasal/images/s6.jpg" alt="Product main image">
	                                        </div>

											<a href="#" class="product-img-zoom" title="Zoom">
												<span class="glyphicon glyphicon-search"></span>
											</a>
										</div>

										<div class="owl-carousel manual" id="productGalleryThumbs">
											<div class="product-img-wrapper">
												<a href="#" data-image="/mithaipasal/images/s1.jpg" data-zoom-image="/mithaipasal/images/s1.jpg" class="product-gallery-item">
                                                    <img src="/mithaipasal/images/s1.jpg" alt="product">
                                                </a>
											</div>
											<div class="product-img-wrapper">
												<a href="#" data-image="/mithaipasal/images/s2.jpg" data-zoom-image="/mithaipasal/images/s2.jpg" class="product-gallery-item">
                                                    <img src="/mithaipasal/images/s2.jpg" alt="product">
                                                </a>
											</div>
											<div class="product-img-wrapper">
												<a href="#" data-image="/mithaipasal/images/s3.jpg" data-zoom-image="/mithaipasal/images/s3.jpg" class="product-gallery-item">
                                                    <img src="/mithaipasal/images/s3.jpg" alt="product">
                                                </a>
											</div>
											<div class="product-img-wrapper">
												<a href="#" data-image="/mithaipasal/images/s4.jpg" data-zoom-image="/mithaipasal/images/s4.jpg" class="product-gallery-item">
                                                    <img src="/mithaipasal/images/s4.jpg" alt="product">
                                                </a>
											</div>
											<div class="product-img-wrapper">
												<a href="#" data-image="/mithaipasal/images/s5.jpg" data-zoom-image="/mithaipasal/images/s5.jpg" class="product-gallery-item">
                                                    <img src="/mithaipasal/images/s5.jpg" alt="product">
                                                </a>
											</div>
										</div>
									</div>

									<div class="product-details-box col-sm-7">
										<div class="product-nav-container">
											<div class="product-nav product-nav-prev">
												<a href="#" title="Previous Product">
													<i class="fa fa-chevron-left"></i>
												</a>

												<div class="product-nav-dropdown">
													<img src="../img/demos/shop/products/product1.jpg" alt="Product">
													<h4>Enterior Door</h4>
												</div>
											</div>
											<div class="product-nav product-nav-next">
												<a href="#" title="Next Product">
													<i class="fa fa-chevron-right"></i>
												</a>

												<div class="product-nav-dropdown">
													<img src="../img/demos/shop/products/product2.jpg" alt="Product">
													<h4>Interior Door</h4>
												</div>
											</div>
										</div>
										<h1 class="product-name">
											Front Door
										</h1>

										<div class="product-rating-container">
                                            <div class="product-ratings">
												<div class="ratings-box">
													<div class="rating" style="width:60%"></div>
												</div>
											</div>
                                            <div class="review-link">
                                                <a href="#" class="review-link-in" rel="nofollow"> <span class="count">1</span> customer review</a> | 
                                                <a href="#" class="write-review-link" rel="nofollow">Add a review</a>
                                            </div>
                                        </div>

                                        <div class="product-short-desc">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
											<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										</div>

										<div class="product-detail-info">
											<div class="product-price-box">
												<span class="old-price">Rs. 9999.00</span>
												<span class="product-price">Rs 8999.00</span>
											</div>
											<p class="availability">
												<span class="font-weight-semibold">Availability:</span>
												In Stock
											</p>
											<p class="email-to-friend"><a href="#">Email to a Friend</a></p>
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
								</div>
							</div>
							<div class="tabs product-tabs">
								<ul class="nav nav-tabs">
									<li class="active">
										<a href="#product-desc" data-toggle="tab">Description</a>
									</li>
									<li>
										<a href="#product-add" data-toggle="tab">Additional</a>
									</li>
									<li>
										<a href="#product-tags" data-toggle="tab">Tags</a>
									</li>
									<li>
										<a href="#product-reviews" data-toggle="tab">Reviews</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="product-desc" class="tab-pane active">
										<div class="product-desc-area">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
											<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
											<ul>
												<li>Simple, Configurable (e.g. size, color, etc.), Bundled and Grouped Products</li>
												<li>Downloadable/Digital Products, Virtual Products</li>
												<li>Inventory Management with Backordered items</li>
												<li>Customer Personalized Products - upload text for embroidery, monogramming, etc.</li>
												<li>Create Store-specific attributes on the fly</li>
												<li>Advanced Pricing Rules and support for Special Prices</li>
												<li>Tax Rates per location, customer group and product type</li>
											</ul>
										</div>
									</div>
									<div id="product-add" class="tab-pane">
										<table class="product-table">
											<tbody>
												<tr>
													<td class="table-label">Color</td>
													<td>Black</td>
												</tr>
												<tr>
													<td class="table-label">Size</td>
													<td>16mx24mx18m</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div id="product-tags" class="tab-pane">
										<div class="product-tags-area">
											<form action="#">
												<div class="form-group">
													<label>Add Your Tags:</label>
													<div class="clearfix">
														<input type="text" class="form-control pull-left" required>
														<input type="submit" class="btn btn-primary" value="Add Tags">
													</div>
												</div>
											</form>
											<p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
										</div>
									</div>
									<div id="product-reviews" class="tab-pane">
										<div class="collateral-box">
											<ul class="list-unstyled">
												<li>Be the first to review this product</li>
											</ul>
										</div>

										<div class="add-product-review">
											<h3 class="text-uppercase heading-text-color font-weight-semibold">WRITE YOUR OWN REVIEW</h3>
											<p>How do you rate this product? *</p>

											<form action="#">


												<div class="form-group">
													<label>Nickname<span class="required">*</span></label>
													<input type="text" class="form-control" required>
												</div>
												<div class="form-group">
													<label>Summary of Your Review<span class="required">*</span></label>
													<input type="text" class="form-control" required>
												</div>
												<div class="form-group mb-xlg">
													<label>Review<span class="required">*</span></label>
													<textarea cols="5" rows="6" class="form-control"></textarea>
												</div>

												<div class="text-right">
													<input type="submit" class="btn btn-primary" value="Submit Review">
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>

						<h2 class="slider-title">
                            <span class="inline-title">Also Purchased</span>
                            <span class="line"></span>
                        </h2>

                        <div class="owl-carousel owl-theme" data-plugin-options="{'items':4, 'margin':20, 'nav':true, 'dots': false, 'loop': false}">
							<div class="product">
								<figure class="product-image-area">
									<a href="#" title="Product Name" class="product-image">
										<img src="../img/demos/shop/products/product1.jpg" alt="Product Name">
										<img src="../img/demos/shop/products/product1-2.jpg" alt="Product Name" class="product-hover-image">
									</a>

									<a href="#" class="product-quickview">
										<i class="fa fa-share-square-o"></i>
										<span>Quick View</span>
									</a>
									<div class="product-label"><span class="discount">-10%</span></div>
									<div class="product-label"><span class="new">New</span></div>
								</figure>
								<div class="product-details-area">
									<h2 class="product-name"><a href="#" title="Product Name">Noa Sheer Blouse</a></h2>
									<div class="product-ratings">
										<div class="ratings-box">
											<div class="rating" style="width:60%"></div>
										</div>
									</div>

									<div class="product-price-box">
										<span class="old-price">$99.00</span>
										<span class="product-price">$89.00</span>
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
									<a href="#" title="Product Name" class="product-image">
										<img src="../img/demos/shop/products/product2.jpg" alt="Product Name">
										<img src="../img/demos/shop/products/product2-2.jpg" alt="Product Name" class="product-hover-image">
									</a>

									<a href="#" class="product-quickview">
										<i class="fa fa-share-square-o"></i>
										<span>Quick View</span>
									</a>
									<div class="product-label"><span class="discount">-25%</span></div>
								</figure>
								<div class="product-details-area">
									<h2 class="product-name"><a href="#" title="Product Name">Women Fashion Blouse</a></h2>
									<div class="product-ratings">
										<div class="ratings-box">
											<div class="rating" style="width:0%"></div>
										</div>
									</div>

									<div class="product-price-box">
										<span class="old-price">$120.00</span>
										<span class="product-price">$90.00</span>
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
									<a href="#" title="Product Name" class="product-image">
										<img src="../img/demos/shop/products/product3.jpg" alt="Product Name">
									</a>

									<a href="#" class="product-quickview">
										<i class="fa fa-share-square-o"></i>
										<span>Quick View</span>
									</a>
								</figure>
								<div class="product-details-area">
									<h2 class="product-name"><a href="#" title="Product Name">Fashion Dress</a></h2>
									<div class="product-ratings">
										<div class="ratings-box">
											<div class="rating" style="width:60%"></div>
										</div>
									</div>

									<div class="product-price-box">
										<span class="product-price">$70.00</span>
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
									<a href="#" title="Product Name" class="product-image">
										<img src="../img/demos/shop/products/product4.jpg" alt="Product Name">
									</a>

									<a href="#" class="product-quickview">
										<i class="fa fa-share-square-o"></i>
										<span>Quick View</span>
									</a>
									<div class="product-label"><span class="discount">-20%</span></div>
								</figure>
								<div class="product-details-area">
									<h2 class="product-name"><a href="#" title="Product Name">Fashion Sweater</a></h2>
									<div class="product-ratings">
										<div class="ratings-box">
											<div class="rating" style="width:80%"></div>
										</div>
									</div>

									<div class="product-price-box">
										<span class="old-price">$100.00</span>
										<span class="product-price">$90.00</span>
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
									<a href="#" title="Product Name" class="product-image">
										<img src="../img/demos/shop/products/product11.jpg" alt="Product Name">
									</a>

									<a href="#" class="product-quickview">
										<i class="fa fa-share-square-o"></i>
										<span>Quick View</span>
									</a>
								</figure>
								<div class="product-details-area">
									<h2 class="product-name"><a href="#" title="Product Name">Woman Shee Blouse</a></h2>
									<div class="product-ratings">
										<div class="ratings-box">
											<div class="rating" style="width:0%"></div>
										</div>
									</div>

									<div class="product-price-box">
										<span class="product-price">$70.00</span>
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
					<aside class="col-md-3 sidebar product-sidebar">
						<div class="feature-box feature-box-style-3">
							<div class="feature-box-icon">
								<i class="fa fa-truck"></i>
							</div>
							<div class="feature-box-info">
								<h4>FREE SHIPPING</h4>
								<p class="mb-none">Free shipping on all orders over $99.</p>
							</div>
						</div>

						<div class="feature-box feature-box-style-3">
							<div class="feature-box-icon">
								<i class="fa fa-dollar"></i>
							</div>
							<div class="feature-box-info">
								<h4>MONEY BACK GUARANTEE</h4>
								<p class="mb-none">100% money back guarantee.</p>
							</div>
						</div>

						<div class="feature-box feature-box-style-3">
							<div class="feature-box-icon">
								<i class="fa fa-support"></i>
							</div>
							<div class="feature-box-info">
								<h4>ONLINE SUPPORT 24/7</h4>
								<p class="mb-none">Lorem ipsum dolor sit amet.</p>
							</div>
						</div>

						<hr class="mt-xlg">

						<div class="owl-carousel owl-theme" data-plugin-options="{'items':1, 'margin': 5}">
							<a href="#">
								<img class="img-responsive" src="../img/demos/shop/banners/banner1-blue.jpg" alt="Banner">
							</a>
							<a href="#">
								<img class="img-responsive" src="../img/demos/shop/banners/banner2-blue.jpg" alt="Banner">
							</a>
						</div>

						<hr>
					</aside>
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
