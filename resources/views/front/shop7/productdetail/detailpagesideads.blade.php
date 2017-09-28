

<div class="feature-box feature-box-style-3">
	<div class="feature-box-icon">
		<i class="fa fa-truck"></i>
	</div>
	<div class="feature-box-info">
		<h4>SHIPPING FACILITY</h4>
		<p class="mb-none">Free shipping for all purchases if quantity is more than 9.</p>
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
		<h4>ACCESSORIES</h4>
		<p class="mb-none">We also sell all accessories for your doors.</p>
	</div>
</div>

<hr class="mt-xlg">

<div class="owl-carousel owl-theme" data-plugin-options="{'items':1, 'margin': 5}">
	
	@foreach($detailpagesideads as $detailpagesidead)
		<a href="{{$detailpagesidead->adlink}}">
			<img class="img-responsive" src="/storage/{{session('siteUrl')}}/images/ads/{{$detailpagesidead->adpic}}" alt="{{{$detailpagesidead->adtext}}}">
		</a>
	@endforeach
</div>

<hr class="mb-xlg">