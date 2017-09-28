<div class="panel panel-default">
	<div class="panel-heading">
		<h4 class="panel-title">
			<a class="accordion-toggle" data-toggle="collapse" href="#panel-filter-size">
				Size
			</a>
		</h4>
	</div>
	<div id="panel-filter-size" class="accordion-body collapse" aria-expanded="false" style="height: 0px;">
		<div class="panel-body">
			<ul>
				@foreach($sizes as $size)
				<li>
					<a href="javascript:void(0)" class="btnD" id="sizes~{{$size->size}}~{{$size->id}}">
						{{ $size->size}}
					</a>
				</li>
				@endforeach
			</ul>
		</div>
	</div>
</div>