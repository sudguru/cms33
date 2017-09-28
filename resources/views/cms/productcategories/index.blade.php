@extends ('layouts.master')
@section('content')
	<div class="row">
		<div class="col-md-6">
			@include("cms.productcategories.nestable")
		</div>
		<div class="col-md-6">
			@include("cms.productcategories.form")
		</div>
	</div>

@endsection
@section('footerjs')

@include("cms.productcategories.js")

@endsection

