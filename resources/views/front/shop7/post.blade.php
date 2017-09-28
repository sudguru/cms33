@extends('front.shop7.layout')

@section('pageTitle')
	{{ $post->title }} | {{ $siteinfo->hp_title}}
@endsection

@section('content')

	
	<div class="container">
		
		<div class="row">
			<div class="col-md-9">
				
					<ol class="breadcrumb">
					  <li><a href="/">Home</a></li>
					  <li><a href="/post-category/{{ $postcategory->slug }}/{{ $postcategory->id }}">{{ $postcategory->name }}</a></li>
					</ol>

						<div style="margin-bottom: 40px; padding: 0 50px 0 0">
							<h2>{{ $post->title }}</h2>
							<p>{!! $post->content !!}</p>
							{{-- <a href="/blog-post/{{$post->slug}}/{{$post->id}}" class="btn btn-primary btn-xs">Read More</a> --}}
							{{-- @if($key < count($post)) <hr/> @endif --}}
						</div>
						<hr/>
						<h4>Related</h4>
						@foreach($post->categories as $category)
							
							@foreach($category->posts as $relatedpost)
							@if($relatedpost->id != $post->id )
							<a href="/blog-post/{{ $relatedpost->slug }}/{{ $relatedpost->id }}"><h5>{{ $relatedpost->title}} <small>( {{ $category->name }} )</small></h5></a> 
							@endif
							@endforeach
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