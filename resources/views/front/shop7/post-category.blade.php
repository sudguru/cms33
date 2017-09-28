@extends('front.shop7.layout')

@section('pageTitle')
	{{ $postcategory->name }} | {{ $siteinfo->hp_title}}
@endsection

@section('content')

	
	<div class="container">
		
		<div class="row">
			<div class="col-md-9">
				
					<ol class="breadcrumb">
					  <li><a href="/">Home</a></li>
					  <li><a href="/post-category/{{ $postcategory->slug }}/{{ $postcategory->id }}">{{ $postcategory->name }}</a></li>
					</ol>
					@foreach($posts as $key=>$post)
						<div style="margin-bottom: 40px">
							<h3>{{ $post->title }}</h3>
							<p>{!! $post->excerpt !!}</p>
							<a href="/blog-post/{{$post->slug}}/{{$post->id}}" class="btn btn-primary btn-xs">Read More</a>
							@if($key < count($post)) <hr/> @endif
						</div>
					@endforeach
			</div>
			<div class="col-md-3" style="padding-left: 0">
				<small>Advertisements</small><br/>
				@include('front.shop7.partials.homepagesideads') 
			</div>
		</div>
	</div>
	<div style="margin-bottom: 25px"></div>
	@include('front.shop7.partials.homesisters')

	
	{{-- @include('front.shop7.partials.homeblogtestimonials') --}}
	{{-- @include('front.shop7.partials.homebrands') --}}
@endsection

@section('footerscript')
@endsection