@extends ('layouts.master')
@section('content')
	<div class="row">
		<div class="col-md-6">
			@include("cms.categories.nestable")
		</div>
		<div class="col-md-6">
			@include("cms.categories.form")
		</div>
	</div>

@endsection

@section('footerjs')
	@include("cms.categories.js")
@endsection

