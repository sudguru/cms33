

@foreach($ads as $ad)
	{{ $ad->name }} <br/>
	@for ($i = 0; $i < sizeof($ad->ads); $i++)
    	&nbsp;&nbsp;&nbsp; {{ $ad->ads[$i]['symbol'] }}, {{ $ad->ads[$i]['name'] }}, {{ $ad->ads[$i]['base'] }} <br/>
	@endfor

@endforeach
