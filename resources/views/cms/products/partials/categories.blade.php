<div class="title">
	<h3>Select Categories</h3>
</div>
<?php 
		$apc = array();
		if(isset($product)) {
			$pc = $product->productcategories;
			foreach($pc as $cat)
			{
				array_push($apc, $cat->id);
			}
		}
		//var_dump($apc)
	?>

	@foreach ($productcategories as $parent)
		@php
		$c = '';
		if (in_array($parent->id, $apc)) {
		    $c = 'checked';
		}
		@endphp
		<div class="checkbox">
			<label>
				<input type="checkbox" value="{{ $parent->id }}" name="productcategories[]" {{ $c }}>
				{{ $parent->name }}
			</label>
		</div>
			@if ($parent->children->count())
					@foreach ($parent->children as $child)
						@php
						$c = '';
						if (in_array($child->id, $apc)) {
						    $c = 'checked';
						}
						@endphp
						<div class="checkbox" style="margin-left: 20px">
							<label>
								<input type="checkbox" value="{{ $child->id }}" name="productcategories[]" {{ $c }}>
								{{ $child->name }}
							</label>
						</div>
							@if ($child->children->count())
									@foreach ($child->children as $grandchild)
										@php
										$c = '';
										if (in_array($grandchild->id, $apc)) {
										    $c = 'checked';
										}
										@endphp
										<div class="checkbox" style="margin-left: 40px">
											<label>
												<input type="checkbox" value="{{ $grandchild->id }}" name="productcategories[]" {{ $c }}>
												{{ $grandchild->name }}
											</label>
										</div>
									@endforeach
							@endif
					@endforeach
			@endif
	@endforeach
	<hr>
	
	{{-- <div id="featured_pic_holder">
		@if($product->featured_pic)
			<img src="/storage/{{auth()->user()->site->siteUrl}}/productimages/thumb_240/{{$product->featured_pic}}" class="img-responsive" />
		@endif

	</div> --}}
	
	<style>
		.checkbox
		{
			border-bottom: 1px dotted #ccc;
		}
		#featured_pic_holder
		{
			padding: 15px;
			background-color: #e5e5e5;
			min-height: 100px;
			width: 100%;
		}
	</style>
