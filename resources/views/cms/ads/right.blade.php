<div class="panel-group sortableaccordian" id="accordion" role="tablist" aria-multiselectable="true">
	@php 
	$i = 0; 
	$formin =''; 
	if(count($errors)) {
		$formin = "in";
	}
	@endphp
	@if(sizeof($ads) > 0)
	@foreach($ads as $ad)
	@php
	$i += 1; $inclass = ''; 
	
	if(isset($in) && $in == $i) {
		$inclass="in";
	} 
	elseif($i == 1){
		$inclass="in";
	}
	@endphp
	<div class="panel panel-default" id="panel-{{ $ad->id }}">
		<div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#itemCollapse{{ $i }}" aria-expanded="false" aria-controls="itemCollapse{{ $i }}"  role="tab" id="heading{{ $i }}">
			<div style="font-weight: bold;" id="title-{{ $ad->id }}">{{ $ad->adname }}</div>
		</div>
		<div id="itemCollapse{{ $i }}" class="panel-collapse collapse {{ $inclass }}" role="tabpanel" aria-labelledby="heading{{ $i }}">
			<div class="panel-body">
				<div class="row">
					<div class="col-md-4"><img src="/storage/{{ auth()->user()->site->siteUrl }}/images/thumb_240/{{ $ad->adpic }}" class="img-responsive" /></div>
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-2" style="padding-top: 10px; color:#bbb">Ad Name</div>
							<div class="col-md-8 col-sm-10 col-xs-9">
								<input type="text" value="{{ $ad->adname }}" id="adname-id-{{ $ad->id }}" class="form-control" />
							</div>
							<div class="col-md-2 col-sm-2 col-xs-3" style="padding-top: 10px">
								<a href="javascript:void(0)" id="editid-{{ $ad->id }}-adname" class='edit'><i class="material-icons">autorenew</i></a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2" style="padding-top: 10px; color:#bbb">Ad Text</div>
							<div class="col-md-8 col-sm-10 col-xs-9">
								<input type="text" value="{{ $ad->adtext }}" id="adtext-id-{{ $ad->id }}" class="form-control" />
							</div>
							<div class="col-md-2 col-sm-2 col-xs-3" style="padding-top: 10px">
								<a href="javascript:void(0)" id="editid-{{ $ad->id }}-adtext" class='edit'><i class="material-icons">autorenew</i></a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2" style="padding-top: 10px; color:#bbb">Ad Link</div>
							<div class="col-md-8 col-sm-10 col-xs-9">
								<input type="text" value="{{ $ad->adlink }}" id="adlink-id-{{ $ad->id }}" class="form-control" />
							</div>
							<div class="col-md-2 col-sm-2 col-xs-3" style="padding-top: 10px">
								<a href="javascript:void(0)" id="editid-{{ $ad->id }}-adlink" class='edit'><i class="material-icons">autorenew</i></a>
							</div>
						</div>
						<a href="javascript:void(0)" id="delid-{{ $ad->id }}" class="btn btn-danger btn-xs delad">Delete</a>
					</div>
				</div>

			</div>
		</div>
	</div>
	@endforeach
	@else

		There is no Ad / Banner for this position.
		<br><br>
	@endif

	<div class="panel panel-default newform">
		<div class="panel-heading" role="tab" id="newOne">
			<h4 class="panel-title">
				<a role="button" data-toggle="collapse" data-parent="#accordion" href="#newCollapseOne" aria-expanded="true" aria-controls="newCollapseOne">
					<strong>Add New Ad / Banner to this Position</strong>
				</a>
			</h4>
		</div>
		<div id="newCollapseOne" class="panel-collapse collapse {{ $formin }}" role="tabpanel" aria-labelledby="newOne">
			<div class="panel-body">
				@include('cms.ads.form')
			</div>
		</div>
	</div>

</div>

