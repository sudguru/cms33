@extends ('layouts.master')
@section('content')
	<div class="row">
		<div class="col-md-6">
			@include("cms.menus.collapse")
		</div>
		<div class="col-md-6">
			@include("cms.menus.nestable")
		</div>
	</div>

@endsection
@section('footerjs')

@include("cms.menus.js")
<style>
	.mydangeralert
	{
		border: 1px dotted red;
		border-radius: 10px;
		padding: 7px 20px;
		color: red;
		max-width: 300px;
	}
</style>
@endsection

