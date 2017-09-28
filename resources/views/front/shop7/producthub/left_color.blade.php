<div class="panel panel-default">
	<div class="panel-heading">
		<h4 class="panel-title">
			<a class="accordion-toggle" data-toggle="collapse" href="#panel-filter-color">
				Color
			</a>
		</h4>
	</div>
	<div id="panel-filter-color" class="accordion-body collapse in">
		<div class="panel-body">
			<ul>

				@foreach($colors as $key=>$color)
				<li>
					<div style="float:left; margin-right: 15px; text-align: center; width: 40px; height: 40px; overflow: hidden">
						<img src="/shop7/img/{{$key}}-color.jpg" />
					</div>
					<a href="javascript:void(0)" class="btnD" id="colors~{{$color->color}}~{{$color->id}}">{{ $color->color}}</a>
					<div style="clear: both; margin-bottom: 3px"></div>
				</li>
				@endforeach
			</ul>
		</div>
	</div>
</div>