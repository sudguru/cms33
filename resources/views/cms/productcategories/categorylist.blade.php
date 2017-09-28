<h4>Existing Categories</h4>
<ul class="list-group">
	@foreach ($productcategories as $parent)
	<li class="list-group-item">
		<a href="#" id="id-{{ $parent->id }}" class="categorylink">{{ $parent->name }}</a>
			@if ($parent->children->count())
					@foreach ($parent->children as $child)
						<li class="list-group-item">
						-------<a href="#" id="id-{{ $child->id }}" class="categorylink">{{ $child->name }}</a>
							@if ($child->children->count())
									@foreach ($child->children as $grandchild)
										<li class="list-group-item">
										--------------<a href="#" id="id-{{ $grandchild->id }}" class="categorylink">{{ $grandchild->name }}</a>
										</li>
									@endforeach
							@endif
						</li>
					@endforeach
			@endif
	</li>
	@endforeach
</ul>