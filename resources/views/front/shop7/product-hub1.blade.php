@extends('front.shop7.layout')

@section('pageTitle')
	{{ $pagetitle }} | {{ $siteinfo->hp_title}}
@endsection

@section('content')

	<div class="container" id="app">
		{{-- <div class="row">
			<div class="col-md-12">
				<ol class="breadcrumb">
				  <li><a href="/">Home</a></li>
				  <li><a href="/product-category/{{ $productcategory->slug }}/{{ $productcategory->id }}">{{ $productcategory->name }}</a></li>
				</ol>
			</div>
		</div> --}}
		<div class="row">
			<div class="col-md-9 col-md-push-3">
				@include('front.shop7.producthub.toolbar')
				@include('front.shop7.producthub.productgrid1')
				@include('front.shop7.producthub.toolbarbottom')
			</div>

			<aside class="col-md-3 col-md-pull-9 sidebar shop-sidebar">
					<div class="panel-group">
						@include('front.shop7.producthub.left_category')
						@include('front.shop7.producthub.left_price')
						@include('front.shop7.producthub.left_size')
						@include('front.shop7.producthub.left_brand')
						@include('front.shop7.producthub.left_color')
						@include('front.shop7.producthub.left_materialtype')
					</div>
			</aside>
		</div>
	</div>
	<div style="margin-bottom: 25px"></div>
	@include('front.shop7.partials.homesisters')

	
	{{-- @include('front.shop7.partials.homeblogtestimonials') --}}
	{{-- @include('front.shop7.partials.homebrands') --}}
@endsection

@section('footerscript')
	<script src="/js/defiant.min.js"></script>
	<script>
	String.prototype.escapeSpecialChars = function() {
    return this.replace(/\\n/g, '')
               .replace(/\\'/g, '')
               .replace(/\\\"/g, '\"')
               .replace(/\\&/g, "\\&")
               .replace(/\\r/g, '')
               .replace(/\\t/g, '')
               .replace(/\\b/g, '')
               .replace(/\\f/g, '');
	};

		var products = <?php echo $products; ?>;
		

		products = JSON.stringify(products);
		var data = products.escapeSpecialChars();
		
		
		var obj = {
	        products: JSON.parse(data)
	    };

    	//search = JSON.search(obj, '//products');
		//search = JSON.search(obj, '//*[materialtype[id=1]]');
		// search = JSON.search(obj, '//*[brand[id=1]]');
		// search = JSON.search(obj, '//*[productcategories[id=1]]/productname');
		// var search = JSON.search(obj, '//*[productprices[regular >= '+min+']]');
		// var search = JSON.search(obj, '//*['+what+'[id='+id+']]');
		// console.log( search );
		// console.log(" ")
	</script>
	<script src="/js/app.js"></script>
	{{-- <script>
		var app = new Vue({
  el: '#app',
  data: {
    searched: [],
    productcategories: [],
    brands: [],
    materialtypes: [],
    colors: [],
    sizes: [],
    rangefrom: 0,
    rangeto: 500000,
    searchstring : ''
  },
  methods: {
  	search(ctr, slug, id) {
  		if(ctr == "productcategories") this.productcategories.push(id);
  		if(ctr == "brands") this.brands.push(id);
  		if(ctr == "materialtypes") this.materialtypes.push(id);
  		if(ctr == "colors") this.colors.push(id);
  		if(ctr == "sizes") this.sizes.push(id);
  		this.
  		this.log()
  	},
  	searchrange(rangefrom, rangeto) {
  		this.rangefrom = rangefrom
  		this.rangeto = rangeto
  		this.log()
  	},
  	saysomething() {
  		alert('Something')
  	},
  	log() {
  		console.log('searched' + this.searched)
  		console.log('productcategories' + this.productcategories)
  		console.log('sizes' + this.sizes)
  		console.log('colors' + this.colors)
  		console.log('brands' + this.brands)
  		console.log('materialtypes' + this.materialtypes)
  		console.log('rangefrom' + this.rangefrom)
  		console.log('rangeto' + this.rangeto)
  		console.log('searchstring' + this.searchstring)
  	}

  }
})
		//book[@price > 10 and @price<19 or ./children[name="hari"]]
	</script> --}}
@endsection