@extends('front.shop7.layout')

@section('pageTitle')
	{{ $siteinfo->hp_title}}
@endsection

@section('content')
	
	@include('front.shop7.partials.homebanner')
	
	<div class="container">
		<div class="row">
			<div class="col-md-9" >
				@include('front.shop7.partials.homefeatured') 
			</div>
			<div class="col-md-3" style="padding-left: 0">
				<small>Advertisements</small><br/>
				@include('front.shop7.partials.homepagesideads') 
			</div>
		</div>
	</div>
	@include('front.shop7.partials.homesisters')

    <hr>
    <img src ="/storage/{{$site->siteUrl}}/images/ads/{{$popupad[0]['adpic']}}" />
    </hr>
	@include('front.shop7.partials.newsletterpopup')
	{{-- @include('front.shop7.partials.homeblogtestimonials') --}}
	{{-- @include('front.shop7.partials.homebrands') --}}
@endsection

@section('footerscript')
@endsection