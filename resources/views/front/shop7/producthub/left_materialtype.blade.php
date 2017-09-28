<div class="panel panel-default">
	<div class="panel-heading">
		<h4 class="panel-title">
			<a class="accordion-toggle" data-toggle="collapse" href="#panel-filter-mt">
				Material Type
			</a>
		</h4>
	</div>
	<div id="panel-filter-mt" class="accordion-body collapse" aria-expanded="false" style="height: 0px;">
		<div class="panel-body">
			<ul>
				@foreach($materialtypes as $materialtype)
				<li>
					<a href="javascript:void(0)" class="btnD" id="materialtype~{{$materialtype->materialtype}}~{{$materialtype->id}}">
						{{ $materialtype->materialtype}}
					</a>
					</li>
				@endforeach
			</ul>
		</div>
	</div>
</div>