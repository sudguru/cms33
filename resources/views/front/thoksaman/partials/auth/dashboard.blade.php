
			<section class="page-header">
				<div class="container">
					<ul class="breadcrumb">
						<li><a href="#">Home</a></li>

						<li class="active">Dashboard</li>
					</ul>
				</div>
			</section>
				
				<div class="container">
					<div class="row">
						<div class="col-md-9 col-md-push-3 my-account">
							<h1 class="h2 heading-primary font-weight-normal">My Dashboard</h1>
							<div class="alert alert-success success-msg mb-xl" role="alert">
								Thank you for registering with Thoksaman.com
							</div>

							<div class="alert alert-success mb-xlg" role="alert">
								Hello, <strong>ThokSaman.com customer!</strong> From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.
							</div>

							<h2 class="h3 mb-sm"><strong>Account Information</strong></h2>

							<div class="row">
								<div class="col-sm-6">
									<div class="panel-box">
										<div class="panel-box-title">
											<h3>Contact Information</h3>
											<a href="#" class="panel-box-edit">Edit</a>
										</div>

										<div class="panel-box-content">
											<p>Name LastName<br>
											you@mail.com<br>
											<a href="#">Change Password</a></p>
										</div>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="panel-box">
										<div class="panel-box-title">
											<h3>Newsletters</h3>
											<a href="#" class="panel-box-edit">Edit</a>
										</div>

										<div class="panel-box-content">
											<p>You are currently not subscribed to any newsletter.</p>
										</div>
									</div>
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
