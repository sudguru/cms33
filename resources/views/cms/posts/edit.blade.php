@extends ('layouts.master')
@section('content')
    <h3>Edit Post
		<a href="/posts" class="btn btn-simple">Cancel</a>
    </h3>
    <!-- Display List of all Sites -->

    		<form method="POST" action="/posts/{{ $post->id }}">
    		    {{ csrf_field() }}
                {{ method_field('PATCH')}}
    		    <div class="card card-nav-tabs card-plain">
    				<div class="header header-info">
    					<!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
    					<div class="nav-tabs-navigation">
    						<div class="nav-tabs-wrapper">
    							<ul class="nav nav-tabs" data-tabs="tabs">
    								<li class="active"><a href="#basic" data-toggle="tab">Basic</a></li>
    								<li><a href="#advanced" data-toggle="tab">Advanced</a></li>
    								<li class="pull-right">
    									<button type="submit" class="btn btn-success private-save-btn">Save</button>
    								</li>					
    							</ul>
    						</div>
    					</div>
    				</div>
    				<div class="content">
    					<div class="tab-content">
    						<div class="tab-pane active" id="basic">
    							<div class="row">
                                    <div class="col-md-9">@include('cms.posts.partials.basic')</div>
                                    <div class="col-md-3">@include('cms.posts.partials.categories')</div>
                                </div>
    						</div>
    						<div class="tab-pane" id="advanced">
    							@include('cms.posts.partials.advanced')
    						</div>
    					</div>
    					@include ('partials.errors')
    				</div>
    			</div>
    		</form>
    <!--modals-->
    @include('cms.upload.imagemanager')
    @include('cms.uploadfile.filemanager')
    
@endsection
@section('footerjs')
	<style>
		.private-save-btn {
			margin: 0;
		}
	</style>
    @include("cms.upload.js")
    @include("cms.uploadfile.js")
    @include("cms.posts.postjs")
 
@endsection
