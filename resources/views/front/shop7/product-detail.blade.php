@extends('front.shop7.layout')

@section('pageTitle')
	{{ $pagetitle}} | Home Page
@endsection

@section('content')
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="/">Home</a></li>
			<li><a href="/product-hub/search/hub/0">Search</a></li>
			<li><a href="/product-detail/{{$product->slug}}/{{$product->id}}">{{$product->productname}}</a></li>
		</ol>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="product-view">
					<div class="product-essential">
						<div class="row">
							@include('front.shop7.productdetail.images')
							@include('front.shop7.productdetail.main')				
						</div>
					</div>
					@include('front.shop7.productdetail.accordion')	
					
				</div>
				@include('front.shop7.productdetail.alsopurchased')	
				
			</div>
			<aside class="col-md-3 sidebar product-sidebar">
				@include('front.shop7.productdetail.detailpagesideads')	
				@include('front.shop7.productdetail.related')	

			</aside>
		</div>
	</div>
	<div style="margin-bottom: 25px"></div>
	@include('front.shop7.partials.homesisters')

	
	{{-- @include('front.shop7.partials.homeblogtestimonials') --}}
	{{-- @include('front.shop7.partials.homebrands') --}}
@endsection

@section('middlescript')
	<script src="/shop7/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>		
	<script src="/shop7/vendor/elevatezoom/jquery.elevatezoom.js"></script>
@endsection

@section('footerscript')

@endsection