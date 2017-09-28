@extends('layouts.master')
@section('content')
	<h3>Manage Banner & Heading for Category</h3>
	<div class="row">
		<div class="col-md-6">
			@include('cms.categories.categorylist')
		</div>
		<div class="col-md-6">
			@include('cms.categories.banner')
		</div>
	</div>
@endsection

@section('footerjs')
	@include('cms.categories.bannerjs')
@endsection