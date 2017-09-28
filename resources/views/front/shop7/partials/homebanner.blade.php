@php
	foreach($bigsquares as $bigsquare)
	{
		$b1 = '/storage/'.session('siteUrl').'/images/ads/'.$bigsquare->adpic;
		$b = explode("~", $bigsquare->adtext);
		$b1_header = $b[0];
		$b1_body = array();
		if(isset($b[1])) $b1_body = explode(" ", $b[1]);
		$b1_body_0 = $b1_body_1 = $b1_body_2 = "";
		if(isset($b1_body[0])) $b1_body_0 = $b1_body[0];
		if(isset($b1_body[1])) $b1_body_1 = $b1_body[1];
		if(isset($b1_body[2])) $b1_body_2 = $b1_body[2];
		$l = $bigsquare->adlink;
		$b1_link = "";
		if($l != "")
		{
			$b1_link = '<a class="btn btn-warning btn-sm pull-right" href="'.$l.'">Show now ></a>';
		}
		
	}

	foreach($talls as $tall)
	{
		$b2 = '/storage/'.session('siteUrl').'/images/ads/'.$tall->adpic;
		$b = explode("~", $tall->adtext);
		$b2_header = $b[0];
		$b2_body = array();
		if(isset($b[1])) $b2_body = explode(" ", $b[1]);
		$b2_body_0 = $b2_body_1 = $b2_body_2 = "";
		if(isset($b2_body[0])) $b2_body_0 = $b2_body[0];
		if(isset($b2_body[1])) $b2_body_1 = $b2_body[1];
		if(isset($b2_body[2])) $b2_body_2 = $b2_body[2];
		$l = $tall->adlink;
		$b2_link = "";
		if($l != "")
		{
			$b2_link = '<a class="btn btn-warning btn-sm pull-right" href="'.$l.'">Show now ></a>';
		}
	}
	$i = 0;
	foreach($smallsquares as $smallsquare)
	{
		if($i == 0) {
			$b3 = '/storage/'.session('siteUrl').'/images/ads/'.$smallsquare->adpic;
			$b = explode("~", $smallsquare->adtext);
			$b3_header = $b[0];
			$b3_body = array();
			if(isset($b[1])) $b3_body = explode(" ", $b[1]);
			$b3_body_0 = $b3_body_1 = $b3_body_2 = "";
			if(isset($b3_body[0])) $b3_body_0 = $b3_body[0];
			if(isset($b3_body[1])) $b3_body_1 = $b3_body[1];
			if(isset($b3_body[2])) $b3_body_2 = $b3_body[2];
			$l = $smallsquare->adlink;
			$b3_link = "";
			if($l == "" or $l == "#")
			{}
			else
			{
				$b3_link = '<a class="btn btn-warning btn-sm pull-right" href="'.$l.'">Show now ></a>';
			}
		}
		else
		{
			$b4 = '/storage/'.session('siteUrl').'/images/ads/'.$smallsquare->adpic;
			$b = explode("~", $smallsquare->adtext);
			$b4_header = $b[0];
			$b4_body = array();
			if(isset($b[1])) $b4_body = explode(" ", $b[1]);
			$b4_body_0 = $b4_body_1 = $b4_body_2 = "";
			if(isset($b4_body[0])) $b4_body_0 = $b4_body[0];
			if(isset($b4_body[1])) $b4_body_1 = $b4_body[1];
			if(isset($b4_body[2])) $b4_body_2 = $b4_body[2];
			$l = $smallsquare->adlink;
			$b4_link = "";
			if($l == "" or $l == "#")
			{}
			else
			{
				$b4_link = '<a class="btn btn-primary btn-sm pull-right" href="'.$l.'">Show now ></a>';
			}
		}
		$i++;
	}
@endphp
<div class="banners-container">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="banner">
					@if(isset($b1))
					<a href="#"><img src="{{ $b1 }}" alt="{{ $b1_header }}"></a>
					<div class="banner-content v1">
						<h2>{{$b1_header}}</h2>
						{!! $b1_link !!}
					</div>
					<div class="banner-ribbon">
						<div class="ribbon-content">
							<span>{{ $b1_body_0 }}</span>
							<h3>{{ $b1_body_1 }}</h3>
							<h4>{{ $b1_body_2 }}</h4>
						</div>
					</div>
					@endif
				</div>
			</div>
			<div class="col-sm-3">
				<div class="banner">
					@if(isset($b2))
					<a href="#"><img src="{{ $b2 }}" alt="{{ $b2_header }}"></a>
					<div class="banner-content v2">
						<h2>{{$b2_header}}</h2>
						<h3>{{$b2_body_0}} {{$b2_body_1}} {{$b2_body_2}}</h3>
						{!! $b2_link !!}
					</div>
					@endif
				</div>
			</div>
			<div class="col-sm-3">
				<div class="banner">
					@if(isset($b3))
					<a href="#"><img src="{{ $b3 }}" alt="{{ $b3_header }}"></a>
					<div class="banner-content v3">
						<h3>{{$b3_header}}</h3>
						<p>{{$b3_body_0}} {{$b3_body_1}} {{$b3_body_2}}</p>
						
						{!! $b3_link !!}
					</div>
					@endif
				</div>
				<div class="banner">
					@if(isset($b4))
					<a href="#"><img src="{{ $b4 }}" alt="{{ $b4_header }}"></a>
					<div class="banner-content v3">
						<h3>{{$b4_header}}</h3>
						<p>{{$b4_body_0}} {{$b4_body_1}} {{$b4_body_2}}</p>
						{!! $b4_link !!}
					</div>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>

<style>
	.v2 h3
	{
		color: #fff !important;
	}
	.v2 h2
	{
		color: #eee !important;
	}

	.v3
	{
		background-color: rgba(0,0,0,0.5) !important;
		padding: 7px
	}

	.v3 p
	{
		color: #fff !important;
	}
	.v3 h3
	{
		color: #eee !important;
	}
	
</style>