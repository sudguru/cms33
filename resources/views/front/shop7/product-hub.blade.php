@extends('front.shop7.layout')

@section('pageTitle')
	{{ $pagetitle }} | {{ $siteinfo->hp_title}}
@endsection

@section('content')

	<div class="container">
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
				@include('front.shop7.producthub.productgrid')
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
@section('middlescript')
	<script src="/shop7/vendor/nouislider/nouislider.min.js"></script>
@endsection

@section('footerscript')

	@php
		$searchid = 0;
		$dept = '';
		if(isset($deptid)) {
			$searchid = $deptid;
		}
		if(isset($departmant)) {
			$dept = $departmant;
		}
	@endphp
	<script>
		var searchid = <?php echo $searchid; ?>;
		var dept = '<?php echo $dept; ?>';
	</script>
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


	    var productcategories = [];
	    // if(searchid > 0 && dept == "productcategories") productcategories.push(searchid);
	    console.log("here: " + dept)
		var sizes = [];
		var colors = [];
		var brand = [];
		// if(searchid > 0 && dept == "brand") brands.push($searchid);
		var materialtype = [];
		// if(searchid > 0 && dept == "materialtype") materialtypes.push($searchid);
		var min = 0;
		var max = 20000000;
		var searched = [];
		var ctr = '';
		var index = 0;

		log();
		if(dept == "search")
		{
			searched = JSON.search(obj, '//products');
		}
		else
		{
			searched = JSON.search(obj, '//*['+dept+'[id='+searchid+']]');
		}
		console.log(searched)
		renderProducts(searched);

		 
		$(document).ready(function(){
			

			$('.btnD').on('click', function(){
		
				var clicked = this.id.split("~");

				var ctr = clicked[0];
				var caption = clicked[1];
				var id = clicked[2];

				$(this).toggleClass('selected')
				if($(this).hasClass('selected'))
				{
					if(ctr == "productcategories") productcategories.push(id);
			  		if(ctr == "brand") brand.push(id);
			  		if(ctr == "materialtype") materialtype.push(id);
			  		if(ctr == "colors") colors.push(id);
			  		if(ctr == "sizes") sizes.push(id);
				}
				else
				{
					if(ctr == "productcategories") {
						index = productcategories.indexOf(id);
						if (index > -1) {
						    productcategories.splice(index, 1);
						}
					} 
					if(ctr == "brands") {
						index = brand.indexOf(id);
						if (index > -1) {
						    brand.splice(index, 1);
						}
					}
					if(ctr == "materialtype") {
						index = materialtype.indexOf(id);
						if (index > -1) {
						    materialtype.splice(index, 1);
						}
					}
					if(ctr == "colors") {
						index = colors.indexOf(id);
						if (index > -1) {
						    colors.splice(index, 1);
						}
					}
					if(ctr == "sizes") {
						index = sizes.indexOf(id);
						if (index > -1) {
						    sizes.splice(index, 1);
						}
					}

					
				}

				log();
				searched = searchData();
				console.log(searched)
				renderProducts(searched);
				
			});

			var priceSlider = document.getElementById('price-slider');
			priceSlider.noUiSlider.on('end', function(){

				max = $('#price-range-high').val();
				min = $('#price-range-low').val();
				searched = searchData();
				console.log(searched)
				renderProducts(searched);
				
			});

			// var priceSlider = document.getElementById('price-slider');
			// priceSlider.noUiSlider.on('end', function(){
			// 	$('#prod-grid').html('');
			// 	var max = $('#price-range-high').val();
			// 	var min = $('#price-range-low').val();

			// 	var search = JSON.search(obj, '//*[productprices[regular >= '+min+' and regular <= '+ max +']]');
			// 	var output = '';
			// 	for(var i=0; i< search.length; i++)
			// 	{
			// 		output += `
			// 			<div>${search[i].productname}</div>
			// 		`;
			// 	}
			// 	$('#prod-grid').html(output);
			// });
		});
		
		function log()
		{
			// console.log('searched' + searched)
	  		console.log('productcategories' + productcategories)
	  		console.log('sizes' + sizes)
	  		console.log('colors' + colors)
	  		console.log('brands' + brand)
	  		console.log('materialtype' + materialtype)
	  		console.log('rangefrom' + min)
	  		console.log('rangeto' + max)
		}

		function searchData()
		{
			var searchstring = createSearchString();
			return JSON.search(obj, searchstring);
		}

		function createSearchString()
		{
			var searchstring = '//*[';
			//searchstring = '//*[productcategories[id=' + productcategories[0] + ' or id=' + productcategories[1] + ']'
				if(productcategories.length > 0) 
				{
					searchstring += 'productcategories[';
					for(i = 0; i < productcategories.length; i++)
					{
						searchstring += 'id=' + productcategories[i];
						if(i < productcategories.length-1)
						{
							searchstring += ' or '
						}
					}
					searchstring += '] and ';
				}
				

				if(sizes.length > 0) 
				{
					searchstring += 'sizes[';
					for(i = 0; i < sizes.length; i++)
					{
						searchstring += 'id=' + sizes[i];
						if(i < sizes.length-1)
						{
							searchstring += ' or '
						}
					}
					searchstring += '] and ';
				}


				if(materialtype.length > 0) 
				{
					searchstring += 'materialtype[';
					for(i = 0; i < materialtype.length; i++)
					{
						searchstring += 'id=' + materialtype[i];
						if(i < materialtype.length-1)
						{
							searchstring += ' or '
						}
					}
					searchstring += '] and '; 
				}

				if(brand.length > 0) 
				{
					searchstring += 'brand[';
					for(i = 0; i < brand.length; i++)
					{
						searchstring += 'id=' + brand[i];
						if(i < brand.length-1)
						{
							searchstring += ' or '
						}
					}
					searchstring += '] and '; 
				}

				if(colors.length > 0) 
				{
					searchstring += 'colors[';
					for(i = 0; i < colors.length; i++)
					{
						searchstring += 'id=' + colors[i];
						if(i < colors.length-1)
						{
							searchstring += ' or '
						}
					}
					searchstring += ']'; 
				}
				console.log(searchstring.slice(-5))
				if(searchstring.slice(-5) == ' and ') searchstring = searchstring.slice(0,-5);

				searchstring += ']';

				if(searchstring == '//*[]') searchstring = '//products';

				console.log(searchstring)
				return searchstring
		}

		// function createSearchString()
		// {
		// 	var searchstring = '//*[';
		// 	//searchstring = '//*[productcategories[id=' + productcategories[0] + ' or id=' + productcategories[1] + ']'
		// 		searchstring += 'productcategories[';
		// 		for(i = 0; i < productcategories.length; i++)
		// 		{
		// 			searchstring += 'id=' + productcategories[i];
		// 			if(i < productcategories.length-1)
		// 			{
		// 				searchstring += ' or '
		// 			}
		// 		}
		// 		searchstring += ']';
		// 		if(sizes.length > 0) 
		// 		{
		// 			searchstring += ' and sizes[';
		// 			for(i = 0; i < sizes.length; i++)
		// 			{
		// 				searchstring += 'id=' + sizes[i];
		// 				if(i < sizes.length-1)
		// 				{
		// 					searchstring += ' or '
		// 				}
		// 			}
		// 		}
		// 		if(sizes.length > 0) searchstring += ']';


		// 	searchstring += ']';
		// 	console.log(searchstring)
		// 	return searchstring
		// }

		// function renderProducts(searched)
		// {
		// 	$('#prod-grid').html('');
		// 		var output = '';
		// 		for(var i=0; i< searched.length; i++)
		// 		{
		// 			output += `
		// 				<div>${searched[i].productname}</div>
		// 			`;
		// 		}
		// 		$('#prod-grid').html(output);
		// }

		function renderProducts(searched)
		{
			$('#prod-grid').html('');
				var output = '<ul class="products-grid columns4">';
				for(var i=0; i< searched.length; i++)
				{
					output += `
						<li>
							<div class="product">
								<figure class="product-image-area">
									<a href="/product-detail/${searched[i].slug}/${searched[i].id}" title="${searched[i].productname}" class="product-image">
										<img src="/storage/{{$site->siteUrl}}/productimages/thumb_240/${searched[i].featured_pic}" alt="${searched[i].productname}">
									</a>

									<a class="lightbox product-quickview" href="/storage/{{session('siteUrl')}}/productimages/original/${searched[i].featured_pic}"  data-plugin-options="{'type':'image'}">
										<i class="fa fa-share-square-o"></i>
										<span>Larger Image</span>
									</a>
									{{-- <div class="product-label"><span class="discount">-10%</span></div> --}}
									<div class="product-label"><span class="new">New</span></div>
								</figure>
								<div class="product-details-area">
									<h2 class="product-name"><a href="/product-detail/${searched[i].slug}/${searched[i].id}" title="${searched[i].productname}">${searched[i].productname}</a></h2>
									<div class="product-ratings">
										<div class="ratings-box">
											<div class="rating" style="width:95%"></div>
										</div>
									</div>

									<div class="product-actions">
										<a href="/add-to-wish-list/${searched[i].id}" class="addtowishlist" title="Add to Wishlist">
											<i class="fa fa-heart"></i>
										</a>
										<a href="/product-detail/${searched[i].slug}/${searched[i].id}" class="addtocart" title="Add to Cart">
											<i class="fa fa-info"></i>
											<span>Detail</span>
										</a>
										<a href="#" class="comparelink" title="Add to Compare">
											<i class="glyphicon glyphicon-signal"></i>
										</a>
									</div>
								</div>
							</div>
						</li>
					`;
				}
				output += '</ul>';
				$('#prod-grid').html(output);
		}
		
	</script>
@endsection




	