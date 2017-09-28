<div class="cart-dropdown">
	<a href="#" class="cart-dropdown-icon">
		<i class="minicart-icon"></i>
		<span class="cart-info">
			<span class="cart-qty">1</span>
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
						<a href="/" title="Product Name" class="product-image">
							<img src="/" alt="Product Name">
						</a>
					</figure>
					<div class="product-details-area">
						<h2 class="product-name"><a href="/" title="Product Name">Blue Women Top</a></h2>
						<div class="cart-qty-price">
							1 X
							<span class="product-price">{{session('siteCurrency')}} 65.00</span>
						</div>
					</div>
				</div>
			</div>
			<div class="cart-totals">
				Total: <span>{{session('siteCurrency')}} 104.00</span>
			</div>
			<div class="cart-actions">
				<a href="/shopping-cart" class="btn btn-primary">View Cart</a>
				<a href="/check-out" class="btn btn-primary">Checkout</a>
			</div>
		</div>
	</div>
</div>