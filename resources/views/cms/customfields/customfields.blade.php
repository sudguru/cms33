@extends('layouts.master')
@section('content')
	
	<div class="row">
		<div class="col-md-8">
			<h3 style="margin-top: 0;">Manage Custom Fields for Categories</h3>
		</div>
		<div class="col-md-4">
			@include('cms.customfields.categorydropdown')
		</div>
	</div>
	<div class="row">
		<div class="col-md-7">
			@include('cms.customfields.fields')
		</div>
		<div class="col-md-5">
			@include('cms.customfields.customform')
		</div>
	</div>
@endsection

@section('footerjs')
	@include('cms.customfields.customfieldsjs')
@endsection