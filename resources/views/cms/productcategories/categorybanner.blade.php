@extends('layouts.master')
@section('content')
	<h3>Manage Banner & Heading for Product Category</h3>
	<div class="row">
		<div class="col-md-6">
			@include('cms.productcategories.categorylist')
		</div>
		<div class="col-md-6">
			@include('cms.productcategories.banner')
		</div>
	</div>
@endsection

@section('footerjs')
	@include('cms.productcategories.bannerjs')
@endsection