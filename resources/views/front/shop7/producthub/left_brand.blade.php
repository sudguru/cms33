<div class="panel panel-default">
	<div class="panel-heading">
		<h4 class="panel-title">
			<a class="accordion-toggle" data-toggle="collapse" href="#panel-filter-brand">
				Brands
			</a>
		</h4>
	</div>
	<div id="panel-filter-brand" class="accordion-body collapse in">
		<div class="panel-body">
			<ul>
				@foreach($brands as $brand)
				
				@if(strtolower($brand->brandname) == "none")
					<div style="float:left; margin-right: 15px; text-align: center; width: 50px; height: 47px; overflow: hidden">
						<a href="javascript:void(0)" class="btnD" id="brand~all-brands~{{$brand->id}}">
						<img src="/storage/{{$site->siteUrl}}/images/brands/{{$brand->picpath}}" width="50px" />
						<br><small>{{$brand->brandname}}</small>
						</a>
					</div>
				@else
					<div style="float:left; margin-right: 15px; text-align: center; width: 50px; height: 47px; overflow: hidden">
						<a href="javascript:void(0)" class="btnD" id="brand~{{$brand->brandname}}~{{$brand->id}}">
						<img src="/storage/{{$site->siteUrl}}/images/brands/{{$brand->picpath}}" width="50px" />
						<br><small>{{$brand->brandname}}</small>
						</a>
					</div>
				@endif
				@endforeach
			</ul>
		</div>
	</div>
</div>