<div class="container mb-xlg">
	<h2 class="slider-title">
	<span class="inline-title">SISTER ORGANIZATIONS / PARTNERS</span>
	<span class="line"></span>
	</h2>
	<div class="owl-carousel owl-theme" data-plugin-options="{'items':4, 'loop': true, 'nav': true, 'dots': false, 'margin': 10}">
		@foreach($sisters as $sister)
		<div class="cat-box">
			<a href="{{ $sister->adlink }}">
				<img src="/storage/{{ session('siteUrl') }}/images/ads/{{ $sister->adpic }}" alt="{{$sister->adtext}}">
			</a>
			<h3>{{$sister->adtext}}</h3>
		</div>
		@endforeach
	</div>
</div>