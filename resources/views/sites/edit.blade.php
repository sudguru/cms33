@extends('layouts.master')
@section('content')
    <h3>Edit Site: {{ $site->siteUrl }}
		<a href="/sites" class="btn btn-simple">Cancel</a>
    </h3>
    <!-- Display List of all Sites -->
    
    <div class="card card-nav-tabs card-plain">
		<div class="header header-info">
			<!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
			<div class="nav-tabs-navigation">
				<div class="nav-tabs-wrapper">
					<ul class="nav nav-tabs" data-tabs="tabs">
						<li class="active"><a href="#basic" data-toggle="tab">Basic</a></li>
						<li><a href="#languages" data-toggle="tab">Languages</a></li>
						<li><a href="#ads" data-toggle="tab">Ads - Banner - Slides</a></li>
						<li><a href="#social" data-toggle="tab">Social Networks</a></li>
						<li><a href="#currencies" data-toggle="tab">Currencies</a></li>
						<li><a href="#apis" data-toggle="tab">APIs</a></li>	
					</ul>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="tab-content">
				<div class="tab-pane active" id="basic">
					<form method="POST" action="/sites/{{ $site->id }}">
					    {{ csrf_field() }}
					    {{ method_field('PATCH')}}
						@include('sites.partials.basic')
						<button type="submit" class="btn btn-success private-save-btn pull-right">Update</button>
					</form>
				</div>
				<div class="tab-pane" id="languages">@include('sites.partials.languages')</div>
				<div class="tab-pane" id="ads">@include('sites.partials.ads')</div>
				<div class="tab-pane" id="social">@include('sites.partials.socials')</div>
				<div class="tab-pane" id="currencies">@include('sites.partials.currencies')</div>
				<div class="tab-pane" id="apis">@include('sites.partials.apis')</div>
			</div>
			@include ('partials.errors')
		</div>
	</div>
<input type="text" value="{{ $site->id }}" id="site_id" />
@endsection

@section('footerjs')
	<style>
		.private-save-btn {
			margin: 0;
		}
	</style>
	@include('sites.partials.languagesJS')
	@include('sites.partials.adsJS')
	@include('sites.partials.socialsJS')
	@include('sites.partials.currenciesJS')
@endsection