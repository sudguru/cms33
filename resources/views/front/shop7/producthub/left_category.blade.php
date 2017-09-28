<div class="panel panel-default">
	<div class="panel-heading">
		<h4 class="panel-title">
			<a class="accordion-toggle" data-toggle="collapse" href="#panel-filter-category">
				Categories
			</a>
		</h4>
	</div>
	<div id="panel-filter-category" class="accordion-body collapse in">
		<div class="panel-body">
			<ul>
				@foreach ($productcategories as $parent)

					<li><a href="javascript:void(0)" class="btnD" id="productcategories~{{$parent->slug}}~{{$parent->id}}">{{ $parent->name }}</a></li>
					@if ($parent->children->count())
						@foreach ($parent->children as $child)
						<li>
							---<a href="javascript:void(0)" class="btnD" id="productcategories~{{$child->slug}}~{{$child->id}}">{{ $child->name }}</a>
						</li>
						@endforeach
					@endif
				</li>
				@endforeach
			</ul>
		</div>
	</div>
</div>
