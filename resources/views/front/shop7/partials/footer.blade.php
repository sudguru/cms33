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
						<a href="/blog-post/about-us">About Us</a>
					</li>
					<li>
						<i class="fa fa-caret-right text-color-primary"></i>
						<a href="/blog-post/contact-us">Contact Us</a>
					</li>
					<li>
						<i class="fa fa-caret-right text-color-primary"></i>
						<a href="/blog-post/my-account">My account</a>
					</li>
					<li>
						<i class="fa fa-caret-right text-color-primary"></i>
						<a href="/blog-post/order-history">Orders history</a>
					</li>
					<li>
						<i class="fa fa-caret-right text-color-primary"></i>
						<a href="/product-category/all">Advanced search</a>
					</li>
				</ul>
			</div>
			<div class="col-md-3">
				<div class="contact-details">
					<h4>Contact Information</h4>
					<ul class="contact">
						<li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong><br> 
						{{ $siteinfo->address }}, {{ $siteinfo->city }}, {{ $siteinfo->country }}
						</p></li>
						<li><p><i class="fa fa-phone"></i> <strong>Phone:</strong><br> {{ $siteinfo->phone }}</p></li>
						<li><p><i class="fa fa-envelope-o"></i> <strong>Email:</strong><br> <a href="mailto:{{ $siteinfo->email }}">{{ $siteinfo->email }}</a></p></li>
						<li><p><i class="fa fa-clock-o"></i> <strong>Working Days/Hours:</strong><br> {{ $siteinfo->working_hours }}</p></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<h4>FAQ</h4>
				<ul class="features">
					@foreach($faqs as $faq)
					<li>
						
						<i class="fa fa-check text-color-primary"></i>
						{{-- <a href="/post-category/{{ $faq->categories->pluck('slug')->first() }}/{{ $faq->categories->pluck('id')->first() }}">{{ $faq->title }}</a> --}}
						<a href="/blog-post/{{ $faq->slug}}/{{ $faq->id}}">{{ $faq->title }}</a> 
					</li>
					@endforeach
				</ul>
			</div>
			<div class="col-md-3">
				<div class="newsletter">
					<h4>Be the First to Know</h4>
					<p class="newsletter-info">Get all the latest information about our Products,<br> Sales and Offers. Sign up for newsletter today.</p>
					<div class="alert alert-success hidden" id="newsletterSuccess">
						<strong>Success!</strong> You've been added to our email list.
					</div>
					<div class="alert alert-danger hidden" id="newsletterError"></div>
					<p>Enter your e-mail Address:</p>
					<form id="newsletterForm" action="#" method="POST">
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
				<img alt="{{ $siteinfo->description }}" class="img-responsive" src="/shop7/img/logo.png">
			</a>
			<ul class="social-icons">
			
				@for($i = 0; $i < sizeof($site->socials); $i++)
					<li class="social-icons-{{ $site->socials[$i]['name'] }}"><a href="{{ $site->socials[$i]['pageurl'] }}" target="_blank" title="{{ ucfirst($site->socials[$i]['name']) }}"><i class="fa fa-{{ $site->socials[$i]['name'] }}"></i></a></li>
				@endfor
				
			</ul>
			<img data-plugin-tooltip alt="Payments" src="/shop7/img/payments.png" class="footer-payment" data-toggle="tooltip" data-placement="top" title="Esewa, iPay, nPay, Cash On Delivery, Cash on Pickup">
			<p class="copyright-text">© Copyright {{ date('Y') }}. All Rights Reserved.</p>
		</div>
	</div>
</footer>