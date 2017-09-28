@extends ('layouts.master')
@section('content')
	{{-- {{ dd(json_encode($ads)) }} --}}
	<h3>Manage Ads and Banners</h3><br/>
	<div class="row">
		<div class="col-md-3">
			@include("cms.ads.left")
		</div>
		<div class="col-md-9">
			@include("cms.ads.right")
		</div>
	</div>

@endsection

@section('footerjs')
	@include("cms.ads.js")
@endsection