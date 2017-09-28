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
							<section class="form-section">

								<h1 class="h2 heading-primary font-weight-normal mb-md mt-lg">Login or Create an Account</h1>

								<div class="featured-box featured-box-primary featured-box-flat featured-box-text-left mt-md">
									<div class="box-content">

											<div class="row">
												<div class="col-sm-6">
													<div class="form-content">
														<h3 class="heading-text-color font-weight-normal">New Customers</h3>
														<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
													</div>

													<div class="form-action clearfix">
														<a href="/user-register" class="btn btn-primary">Create an Account</a>
													</div>
												</div>
												<div class="col-sm-6">
													<form action="/user-login" method="POST">
														{{ csrf_field() }}
														<div class="form-content">
															<h3 class="heading-text-color font-weight-normal">Registered Customers</h3>
															<p>If you have an account with us, please log in.</p>
															<div class="form-group">
																<label class="font-weight-normal">Email Address <span class="required">*</span></label>
																<input type="email" class="form-control" required>
															</div>

															<div class="form-group">
																<label class="font-weight-normal">Password <span class="required">*</span></label>
																<input type="password" class="form-control" required>
															</div>

															<p class="required">* Required Fields</p>
														</div>

														<div class="form-action clearfix">
															<a href="#" class="pull-left">Forgot Your Password?</a>

															<input type="submit" class="btn btn-primary" value="Log In">
														</div>
														@include('partials.errors')
													</form>
												</div>
											</div>
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
