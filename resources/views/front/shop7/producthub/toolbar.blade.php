<div class="toolbar mb-none">
				<div class="sorter">
					<div class="sort-by">
						<label>Sort by:</label>
						<select>
							<option value="category">Category</option>
							<option value="productname">Name</option>
							<option value="discounted">Price</option>
							<option value="materialtype">Material Type</option>
							<option value="color">Color</option>
						</select>
						<a href="#" title="Set Desc Direction">
							<img src="/shop7/img/i_asc_arrow.gif" alt="Set Desc Direction">
						</a>
					</div>

					<div class="view-mode">
						@if(!isset($_GET['viewmode']) or $_GET['viewmode'] == "grid")
						<span title="Grid">
							<i class="fa fa-th"></i>
						</span>
						<a href="#" title="List">
							<i class="fa fa-list-ul"></i>
						</a>
						@else
						<a href="#" title="Grid">
							<i class="fa fa-th"></i>
						</a>
						<span title="List">
							<i class="fa fa-list-ul"></i>
						</span>
						@endif
					</div>

					<ul class="pagination">
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#"><i class="fa fa-caret-right"></i></a></li>
					</ul>

					<div class="limiter">
						<label>Show:</label>
						<select>
							<option value="12">12</option>
							<option value="24">24</option>
							<option value="36">36</option>
						</select>
					</div>
				</div>
			</div>