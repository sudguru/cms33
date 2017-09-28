<div class="panel-group produt-panel" id="accordion">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse1One">
					Specifications
				</a>
			</h4>
		</div>
		<div id="collapse1One" class="accordion-body collapse">
			<div class="panel-body">
				<div class="product-desc-area">
					{!! $product->specification !!}
				</div>
			</div>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse1Three">
					Tags
				</a>
			</h4>
		</div>
		<div id="collapse1Three" class="accordion-body collapse">
			<div class="panel-body">
				<div class="product-tags-area">
					{{ $product->tags }}
				</div>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse1Four">
					Reviews
				</a>
			</h4>
		</div>
		<div id="collapse1Four" class="accordion-body collapse">
			<div class="panel-body">
				<div class="collateral-box">
					<ul class="list-unstyled">
						<li>Be the first to review this product</li>
					</ul>
				</div>

				<div class="add-product-review">
					<h3 class="text-uppercase heading-text-color font-weight-semibold">WRITE YOUR OWN REVIEW</h3>
					<p>How do you rate this product? *</p>

					<form action="#">
						<table class="ratings-table">
							<thead>
								<tr>
									<th>&nbsp;</th>
									<th>1 star</th>
									<th>2 stars</th>
									<th>3 stars</th>
									<th>4 stars</th>
									<th>5 stars</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Quality</td>
									<td>
										<input type="radio" name="ratings[1]" id="Quality_1" value="1" class="radio">
									</td>
									<td>
										<input type="radio" name="ratings[1]" id="Quality_2" value="2" class="radio">
									</td>
									<td>
										<input type="radio" name="ratings[1]" id="Quality_3" value="3" class="radio">
									</td>
									<td>
										<input type="radio" name="ratings[1]" id="Quality_4" value="4" class="radio">
									</td>
									<td>
										<input type="radio" name="ratings[1]" id="Quality_5" value="5" class="radio">
									</td>
								</tr>
								<tr>
									<td>Value</td>
									<td>
										<input type="radio" name="value[1]" id="Value_1" value="1" class="radio">
									</td>
									<td>
										<input type="radio" name="value[1]" id="Value_2" value="2" class="radio">
									</td>
									<td>
										<input type="radio" name="value[1]" id="Value_3" value="3" class="radio">
									</td>
									<td>
										<input type="radio" name="value[1]" id="Value_4" value="4" class="radio">
									</td>
									<td>
										<input type="radio" name="value[1]" id="Value_5" value="5" class="radio">
									</td>
								</tr>
								<tr>
									<td>Price</td>
									<td>
										<input type="radio" name="price[1]" id="Price_1" value="1" class="radio">
									</td>
									<td>
										<input type="radio" name="price[1]" id="Price_2" value="2" class="radio">
									</td>
									<td>
										<input type="radio" name="price[1]" id="Price_3" value="3" class="radio">
									</td>
									<td>
										<input type="radio" name="price[1]" id="Price_4" value="4" class="radio">
									</td>
									<td>
										<input type="radio" name="price[1]" id="Price_5" value="5" class="radio">
									</td>
								</tr>
							</tbody>
						</table>

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