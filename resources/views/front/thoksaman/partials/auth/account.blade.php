<section class="page-header">
				<div class="container">
					<ul class="breadcrumb">
						<li><a href="#">Home</a></li>

						<li class="active">My Account</li>
					</ul>
				</div>
			</section>
				
				<div class="container">
					<div class="row">
						<div class="col-md-9 col-md-push-3 my-account form-section">
							<h1 class="h2 heading-primary font-weight-normal">Edit Account Information</h1>
							
							<div class="featured-box featured-box-primary featured-box-flat featured-box-text-left mt-md">
								<div class="box-content">
									<form action="#">

										<h4 class="heading-primary text-uppercase mb-lg">ACCOUNT INFORMATION</h4>
										<div class="row">
											<div class="col-sm-4 col-md-3">
												<div class="form-group">
													<label class="font-weight-normal">First Name <span class="required">*</span></label>
													<input type="text" class="form-control" required>
												</div>
											</div>
											<div class="col-sm-4 col-md-3">
												<div class="form-group">
													<label class="font-weight-normal">Middle Name</label>
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="col-sm-4 col-md-5">
												<div class="form-group">
													<label class="font-weight-normal">Last Name <span class="required">*</span></label>
													<input type="text" class="form-control" required>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-xs-12">
												<div class="form-group">
													<label class="font-weight-normal">Email Address <span class="required">*</span></label>
													<input type="email" class="form-control" required>
												</div>
											</div>

											<div class="col-xs-12">
												<div class="form-group">
													<label class="font-weight-normal">Current Password <span class="required">*</span></label>
													<input type="password" class="form-control" required>
												</div>
											</div>
										</div>

										<div class="checkbox mb-xs">
											<label>
												<input type="checkbox" value="1" id="change-pass-checkbox">
												Change Password
											</label>
										</div>

										<div id="account-chage-pass">
											<h4 class="heading-primary text-uppercase mb-lg">CHANGE PASSWORD</h4>
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<label class="font-weight-normal">Password <span class="required">*</span></label>
														<input type="password" class="form-control" required>
													</div>
												</div>

												<div class="col-sm-6">
													<div class="form-group">
														<label class="font-weight-normal">Confirm Password <span class="required">*</span></label>
														<input type="password" class="form-control" required>
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-xs-12">
												<p class="required mt-lg mb-none">* Required Fields</p>

												<div class="form-action clearfix mt-none">
													<a href="demo-shop-11-login.html" class="pull-left"><i class="fa fa-angle-double-left"></i> Back</a>

													<input type="submit" class="btn btn-primary" value="Save">
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>

						<div class="col-md-3 col-md-pull-9">
							<aside class="sidebar">

								<h4>My Account</h4>
								@include('front.thoksaman.partials.auth.sidelinks')

							</aside>
						</div>
					</div>
				</div>