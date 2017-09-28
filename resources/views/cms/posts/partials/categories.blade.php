<div class="title">
	<h3>Select Categories</h3>
</div>
<?php 
		$apc = array();
		if(isset($post)) {
			$pc = $post->categories;
			foreach($pc as $cat)
			{
				array_push($apc, $cat->id);
			}
		}
		//var_dump($apc)
	?>

	@foreach ($categories as $parent)
		@php
		$c = '';
		if (in_array($parent->id, $apc)) {
		    $c = 'checked';
		}
		@endphp
		<div class="checkbox">
			<label>
				<input type="checkbox" value="{{ $parent->id }}" name="categories[]" {{ $c }}>
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
								<input type="checkbox" value="{{ $child->id }}" name="categories[]" {{ $c }}>
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
												<input type="checkbox" value="{{ $grandchild->id }}" name="categories[]" {{ $c }}>
												{{ $grandchild->name }}
											</label>
										</div>
									@endforeach
							@endif
					@endforeach
			@endif
	@endforeach
	
	<style>
		.checkbox
		{
			border-bottom: 1px dotted #ccc;
		}
	</style>
