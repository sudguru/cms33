@extends ('layouts.master')
@section('content')
    <h3>Add New Product
		<a href="/products" class="btn btn-simple">Cancel</a>
    </h3>
    		<form method="POST" action="/products">
    		    {{ csrf_field() }}
    		    <div class="card card-nav-tabs card-plain">
    				<div class="header header-info">
    					<div class="nav-tabs-navigation">
    						<div class="nav-tabs-wrapper">
    							<ul class="nav nav-tabs" data-tabs="tabs">
    								<li class="active"><a href="#basic" data-toggle="tab">Basic</a></li>
    								<li class="pull-right">
    									<button type="submit" class="btn btn-success private-save-btn">Save</button>
    								</li>					
    							</ul>
    						</div>
    					</div>
    				</div>
    				<div class="content">
                        @include ('partials.errors')
    					<div class="tab-content">
    						<div class="tab-pane active" id="basic">
                                <div class="row">
                                    <div class="col-md-9">@include('cms.products.partials.basic')</div>
                                    <div class="col-md-3">@include('cms.products.partials.categories')</div>
                                </div>
    							
    						</div>
    					</div>
    					
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
    @include("cms.products.js")
 
@endsection
