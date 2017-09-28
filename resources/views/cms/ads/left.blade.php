<ul class="list-group">
	<li class="list-group-item"><h4 class="panel-title"><strong>Ad Positions</strong></h4></li>
	@for($i = 0; $i < sizeof($adtypes); $i++)
	@php
		$nos = $aCounts[$i];
		$ac = "";
		if($adtypes[$i]['pos'] == $p) $ac = "activeleft";
	@endphp
	<li class="list-group-item {{ $ac }}"><a href="/ads/{{ $i }}" >{{ $adtypes[$i]['name'] }}</a> <small style="float: right">(<span id="no-{{ $adtypes[$i]['pos'] }}">{{ $nos }}</span> / {{ $adtypes[$i]['nos'] > 0 ? $adtypes[$i]['nos']: "&#x221e;" }})</small></li>
	@endfor
</ul>