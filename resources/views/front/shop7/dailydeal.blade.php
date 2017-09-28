@extends('front.shop7.layout')

@section('pageTitle')
	Daily Deals| {{ $siteinfo->hp_title}}
@endsection

@section('content')

	
	<div class="container">
		
		<div class="row">
			<div class="col-md-9">
				
					<ol class="breadcrumb">
					  <li><a href="/">Home</a></li>
					  <li><a href="/daily-deal">Daily Deal</a></li>
					</ol>

						<div style="margin-bottom: 40px; padding: 0 50px 0 0">
							<h2>Daily Deals</h2>
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