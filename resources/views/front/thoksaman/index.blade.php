@extends ('front.thoksaman.layouts.master')

@section('content')
	@include('front.thoksaman.partials.home.slider')
	@include('front.thoksaman.partials.home.topcategories')
	@include('front.thoksaman.partials.home.featured')
	@include('front.thoksaman.partials.home.topsellers')
	@include('front.thoksaman.partials.newsletter')
@endsection