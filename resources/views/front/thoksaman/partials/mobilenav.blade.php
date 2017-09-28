
<div class="mobile-nav">
	<div class="mobile-nav-wrapper">
		<ul class="mobile-side-menu">
			<li><a href="/">Home</a></li>
			<li>
				<span class="mmenu-toggle"></span>
				<a href="#">Products <span class="tip tip-new">New</span></a>
				<ul>
					@foreach ($productcategories as $parent)
					<li>
					
					<a href="/thoksaman/pc/{{ $parent->slug }}">{{ $parent->name }}</a>
					@if ($parent->children->count())
					<span class="mmenu-toggle"></span>
					<ul>
						@foreach ($parent->children as $child)
						<li>
							<a href="/thoksaman/pc/{{ $child->slug }}">{{ $child->name }}</a>
						</li>
						@endforeach
					</ul>
					@endif
				</li>
				@endforeach
			</ul>
		</li>
		<li>
			<a href="demo-shop-11-about-us.html">About Us</a>
		</li>
	</ul>
</div>
</div>