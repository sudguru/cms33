@php


	$asizes = array();
	$ss = $product->productsizes;
	foreach($ss as $s)
	{
		array_push($asizes, $s->id);
	}

	$acolors = array();
	$cs = $product->productcolors;
	foreach($cs as $c)
	{
		array_push($acolors, $c->id);
	}

@endphp


<form action="/productpartial/{{$product->id}}" method="POST" id="product-units-form">
{{ csrf_field() }}
<div class="row">

	<div class="col-md-6">
		<div class="title">
			<h4>Select Sizes</h4>
			@foreach($sizes as $size)
				@php
					$c = '';
					if (in_array($size->id, $asizes)) {
					    $c = 'checked';
					}
				@endphp
				<div class="checkbox">
					<label>
						<input type="checkbox" value="{{ $size->id }}" name="productsizes[]" {{ $c }}>
						{{ $size->size }}
					</label>
				</div>
			@endforeach
			<a href="/productsettings" class="btn btn-default btn-sm">Add New Size</a>
		</div>
	</div>
	<div class="col-md-6">
		<div class="title">
			<h4>Select Colors</h4>
			@foreach($colors as $color)
				@php
					$c = '';
					if (in_array($color->id, $acolors)) {
					    $c = 'checked';
					}
				@endphp
				<div class="checkbox">
					<label>
						<input type="checkbox" value="{{ $color->id }}" name="productcolors[]" {{ $c }}>
						{{ $color->color }}
					</label>
				</div>
			@endforeach
			<a href="/productsettings" class="btn btn-default btn-sm">Add New Color</a>
		</div>
	</div>
</div>
<input type="submit" class="btn btn-success pull-right" value="Update Sizes and Colors">
</form>