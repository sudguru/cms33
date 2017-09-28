<div class="checkout">
					<div class="container">
						<h1 class="h2 heading-primary mt-lg mb-md clearfix">
							Checkout
						</h1>

						<div class="checkout-menu clearfix">
							<a href="#" class="btn btn-primary pull-left mb-sm" data-toggle="modal" data-target=".shop-login-modal">LOGIN</a>

							<div class="dropdown pull-right checkout-review-dropdown">
								<button class="btn btn-primary mb-sm" id="reviewTable" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    	<i class="fa fa-shopping-cart"></i>
									Rs.689.00
							  	</button>
								<div class="dropdown-menu" aria-labelledby="reviewTable">
							    	<h3>Review Your Order</h3>
							    	<table>
							    		<thead>
							    			<tr>
							    				<th>Product Name</th>
								    			<th class="text-center">Qty</th>
								    			<th class="text-right">Subtotal</th>
							    			</tr>
							    		</thead>

							    		<tbody>
							    			<tr>
							    				<td>Jewellery Bracelets-M</td>
								    			<td class="text-center">1</td>
								    			<td class="text-right">Rs.189.00</td>
							    			</tr>
							    		</tbody>

							    		<tfoot>
							    			<tr>
							    				<td class="text-right" colspan="2">Subtotal</td>
							    				<td class="text-right">Rs.189.00</td>
							    			</tr>
							    		</tfoot>
							    	</table>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">
								<div class="form-col">
									<h3>Name &amp; Address</h3>

									<div class="row">
										<div class="col-xs-6 col-md-6">
											<div class="form-group">
												<label>First Name<span class="required">*</span></label>
												<input type="text" class="form-control" required>
											</div>
										</div>
										<div class="col-xs-6 col-md-6">
											<div class="form-group">
												<label>Middle Name/Initial</label>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6 col-md-6">
											<div class="form-group">
												<label>Last Name<span class="required">*</span></label>
												<input type="text" class="form-control" required>
											</div>
										</div>
										<div class="col-xs-6 col-md-6">
											<div class="form-group">
												<label>Company</label>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-12 col-md-12">
											<div class="form-group wide">
												<label>Email<span class="required">*</span></label>
												<input type="email" class="form-control" required>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-12 col-md-12">
											<div class="form-group wide">
												<label>Address<span class="required">*</span> 
												<span class="label label-success" id="directionmap">Success</span>
												</label>

												<input type="text" class="form-control" required>
											</div>
										</div>
										<div class="col-xs-12 col-md-12">
											<div class="form-group wide">
												<input type="text" class="form-control">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6 col-md-6">
											<div class="form-group">
												<label>City<span class="required">*</span></label>
												<input type="text" class="form-control" value="Kathmandu" required>
											</div>
										</div>
										<div class="col-xs-6 col-md-6">
											<div class="form-group">
												<label>State/Province<span class="required">*</span></label>
												<select class="form-control">
													<option value="Please select region">Please select region</option>
													<option value="Alabama">Kathmandu</option>
													<option value="Alaska">Pokhara</option>
												</select>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6 col-md-6">
											<div class="form-group">
												<label>Zip/Postal Code<span class="required">*</span></label>
												<input type="text" class="form-control" required>
											</div>
										</div>
										<div class="col-xs-6 col-md-6">
											<div class="form-group">
												<label>Country<span class="required">*</span></label>
												<select class="form-control">
													<option value="United States">Nepal</option>
													<option value="United States">India</option>
													<option value="United States">US</option>
													<option value="China">China</option>
													<option value="England">England</option>
												</select>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6 col-md-6">
											<div class="form-group">
												<label>Telephone<span class="required">*</span></label>
												<input type="text" class="form-control" required>
											</div>
										</div>
										<div class="col-xs-6 col-md-6">
											<div class="form-group">
												<label>Fax</label>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>

									<div class="checkbox mb-sm">
										<label>
											<input type="checkbox" value="1">
											Create an account for later use
										</label>
									</div>

									<div class="checkbox mb-sm">
										<label>
											<input type="checkbox" value="1">
											Ship to this address
										</label>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-col">
									<h3>Shipping</h3>
									<div class="ship-list">
										<div class="radio">
											<label>
												<input type="radio" value="1" name="shipping" checked="checked">
												Deliver to me @ Rs. 120/Km.
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" value="0" name="shipping">
												I will pick up myself <span class="text-primary">Rs. 0.00</span>
											</label>
										</div>
									</div>
									
									<div id="mapwrapper">
						                  
											<input id="pac-input" class="form-control" type="text" placeholder="Enter Your City / Location to find Map">
											<input type="text" name="latlng" id="latlng" value="lat: 27.728946124394863, lng: 85.3706118298553" />
											<div id="map"></div>
											
						              </div>

									<h3 class="no-border">Discount Codes <a class="expand-plus collapsed" role="button" data-toggle="collapse" href="#discountArea" aria-expanded="false" aria-controls="discountArea"></a></h3>

									<div class="collapse" id="discountArea">
										<div class="form-group wide">
											<label>Enter your coupon code:</label>
											<input type="text" class="form-control">
										</div>

										<a href="#" class="btn btn-primary">Apply</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-col">
									<h3>Payment Method</h3>

									<div class="checkout-payment-method">
										<div class="radio">
											<label>
												<input type="radio" value="checkmo" name="payment[method]" checked="checked" class="payment-card-check">
												ESewa
											</label>
										</div>

										<div class="radio">
											<label>
												<input type="radio" value="checkcard"  name="payment[method]">
												SCT/nPay
											</label>
										</div>

										<div class="radio">
											<label>
												<input type="radio" value="checkcard"  name="payment[method]">
												iPay
											</label>
										</div>

										<div class="radio">
											<label>
												<input type="radio" value="checkcard"  name="payment[method]">
												Cash on Delivery
											</label>
										</div>

										<div class="radio">
											<label>
												<input type="radio" value="checkcard"  name="payment[method]">
												Cash on Pickup
											</label>
										</div>

									</div>

									<div class="checkout-review-action">
										<h5>Grand Total <span>Rs.389.00</span></h5>
										<a href="#" class="btn btn-primary">Place Order now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade shop-login-modal" tabindex="-1" role="dialog" aria-labelledby="myLoginModal">
					<div class="modal-dialog modal-sm" role="document">
						<div class="modal-content">

							<form action="#">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
									<h4 class="modal-title" id="myLoginModal">Login to your Account</h4>
								</div>

								<div class="modal-body">
									<div class="form-group">
										<label class="mb-xs">Email Address <span class="required">*</span></label>
										<input type="email" class="form-control" required>
									</div>

									<div class="form-group">
										<label class="mb-xs">Password <span class="required">*</span></label>
										<input type="password" class="form-control" required>
									</div>
								</div>

								<div class="modal-footer">
									<a href="#" class="btn btn-link pull-left" data-toggle="modal" data-target=".shop-fpass-modal" data-dismiss="modal">Forget Your Password?</a>
									<input type="submit" class="btn btn-primary" value="Login">
								</div>
							</form>

						</div>
					</div>
				</div>

				<div class="modal fade shop-fpass-modal" tabindex="-1" role="dialog" aria-labelledby="myRecoverModal">
					<div class="modal-dialog modal-sm" role="document">
						<div class="modal-content">

							<form action="#">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
									<h4 class="modal-title" id="myRecoverModal">Recover your password</h4>
								</div>

								<div class="modal-body">
									<p>Please enter your email address below. You will receive a link to reset your password.</p>
									<div class="form-group">
										<label class="mb-xs">Email Address <span class="required">*</span></label>
										<input type="email" class="form-control" required>
									</div>
								</div>

								<div class="modal-footer">
									<a href="#" class="btn btn-link pull-left" data-toggle="modal" data-target=".shop-login-modal" data-dismiss="modal"><i class="fa fa-angle-double-left mr-xs"></i>Back to Login</a>
									<input type="submit" class="btn btn-primary" value="Recover">
								</div>
							</form>

						</div>
					</div>
				</div>

<?php
$ll = "lat: 27.728946124394863, lng: 85.3706118298553";
?>
	<script>
	function initMap() {
		var kathmandu = {<?php echo $ll; ?>};
		map = new google.maps.Map(document.getElementById('map'), {
			zoom: 14,
			center: kathmandu,
            scrollwheel:  false
		});

		var marker = new google.maps.Marker({
			position: kathmandu,
			map: map,
			draggable: true
		});

    	// Create the search box and link it to the UI element.
    	var input = document.getElementById('pac-input');
    	var searchBox = new google.maps.places.SearchBox(input);

    	// Bias the SearchBox results towards current map's viewport.
   		map.addListener('bounds_changed', function() {
    		searchBox.setBounds(map.getBounds());
    	});

    	searchBox.addListener('places_changed', function() {
    		var places = searchBox.getPlaces();

    		if (places.length == 0) {
    			return;
    		}

      		// For each place, get the icon, name and location.
      		var bounds = new google.maps.LatLngBounds();

      		places.forEach(function(place) {
                
                marker.setPosition(place.geometry.location);

                var latLng = marker.getPosition(); 
                currentLatitude = latLng.lat();
                currentLongitude = latLng.lng();
                var latlng_data = "lat: "+currentLatitude+", lng: "+currentLongitude;
                //$('#latlng').val(latlng_data);
            	//$('#map-form').submit();

                if (place.geometry.viewport) {
                    bounds.union(place.geometry.viewport);
                } else {
                	bounds.extend(place.geometry.location);
                }
            });
      		map.fitBounds(bounds);
		});

          marker.addListener('dragend', function() {
        	map.setCenter(marker.getPosition());
        	var latLng = marker.getPosition(); 
        	currentLatitude = latLng.lat();
        	currentLongitude = latLng.lng();
        	var latlng_data = "lat: "+currentLatitude+", lng: "+currentLongitude;
        	//$('#latlng').val(latlng_data);
            //$('#map-form').submit();
        });

        map.addListener('dragend', function () {
		    marker.setPosition(this.getCenter()); // set marker position to map center
		    var latLng = marker.getPosition(); 
		    currentLatitude = latLng.lat();
		    currentLongitude = latLng.lng();
		    var latlng_data = "lat: "+currentLatitude+", lng: "+currentLongitude;
		    //$('#latlng').val(latlng_data);
            //$('#map-form').submit();
		});
	}
</script>