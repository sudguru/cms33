@extends('front.shop7.layout')

@section('pageTitle')
	Login | {{ $siteinfo->hp_title}}
@endsection

@section('content')

	
	<div class="container">
		
		<div class="row">
			<div class="col-md-9">
				
					<ol class="breadcrumb">
					  <li><a href="/">Home</a></li>
					  <li><a href="/user-login">Log-in</a></li>
					</ol>

						<div style="margin-bottom: 40px; padding: 0 50px 0 0">
							<section class="form-section register-form">

								<h1 class="h2 heading-primary font-weight-normal mb-md mt-lg">Create an Account</h1>

								<div class="featured-box featured-box-primary featured-box-flat featured-box-text-left mt-md">
									<div class="box-content">
										<form action="/user-register" method="POST">
											{{ csrf_field() }}
											<h4 class="heading-primary text-uppercase mb-lg">PERSONAL INFORMATION</h4>
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label class="font-weight-normal">First Name <span class="required">*</span></label>
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

													<div class="checkbox mb-xlg">
														<label>
															<input type="checkbox" value="1">
															 Sign Up for Newsletter
														</label>
													</div>

													<h4 class="heading-primary text-uppercase mb-lg">LOGIN INFORMATION</h4>
												</div>
											</div>

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

											<div class="row">
												<div class="col-xs-12">
													<p class="required mt-lg mb-none">* Required Fields</p>

													<div class="form-action clearfix mt-none">
														<a href="demo-shop-7-login.html" class="pull-left"><i class="fa fa-angle-double-left"></i> Back</a>

														<input type="submit" class="btn btn-primary" value="Submit">
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>

						</section>

						</div>
						

			</div>
			<div class="col-md-3" style="padding-left: 0">
				<small>Advertisements</small><br/>
				@include('front.shop7.partials.homepagesideads') 
			</div>
		</div>
	</div>
	<div style="margin-bottom: 25px"></div>
	@include('front.shop7.partials.homesisters')

	
	{{-- @include('front.shop7.partials.homeblogtestimonials') --}}
	{{-- @include('front.shop7.partials.homebrands') --}}
@endsection

@section('footerscript')
@endsection
