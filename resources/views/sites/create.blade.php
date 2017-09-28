@extends('layouts.master')
@section('content')
    <h3>Add New Site
		<a href="/sites" class="btn btn-simple">Cancel</a>
    </h3>
    <!-- Display List of all Sites -->
    <form method="POST" action="/sites">
    {{ csrf_field() }}
    <div class="card card-nav-tabs card-plain">
		<div class="header header-info">
			<!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
			<div class="nav-tabs-navigation">
				<div class="nav-tabs-wrapper">
					<ul class="nav nav-tabs" data-tabs="tabs">
						<li class="active"><a href="#basic" data-toggle="tab">Basic</a></li>		
					</ul>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="tab-content">
				<div class="tab-pane active" id="basic">
					@include('sites.partials.basic')
					<button type="submit" class="btn btn-success private-save-btn pull-right">Save</button>
				</div>
			</div>
			@include ('partials.errors')
		</div>
	</div>
</form>
@endsection

@section('footerjs')
	<style>
		.private-save-btn {
			margin: 0;
		}
	</style>
@endsection