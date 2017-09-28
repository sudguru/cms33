@php
$data = $site->ads;

@endphp
<table class="table table-hover">
	<thead>
		<tr>
			<th>Position</th>
			<th>Slot Name</th>
			<th>Width</th>
			<th>Height</th>
			<th>Nos.</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody id="ads_tbody">
		@for($i = 0; $i < sizeof($data); $i ++)
		<tr id="trads-{{ $data[$i]['pos'] }}">
			<td>{{ $data[$i]['pos'] }}</td>
			<td>{{ $data[$i]['name'] }}</td>
			<td>{{ $data[$i]['width'] }}</td>
			<td>{{ $data[$i]['height'] }}</td>
			<td>{{ $data[$i]['nos'] }}</td>
			<td><a href="#" id="ads-{{ $data[$i]['pos'] }}" class="adsdel">Delete</a></td>
		</tr>
		@endfor
	</tbody>
</table>
<div class="well">
<h4>Add New Ad Positions</h4>
<form id="ads-form" method="POST" action="/sites/ads/{{ $site->id }}" >
{{ csrf_field() }}
<table class="table">

	<tbody>
		<tr>
			<td><input type="text" class="form-control" name="ads_pos" id="ads_pos" placeholder="Position (Number)"></td>
			<td><input type="text" class="form-control" name="ads_name" id="ads_name" placeholder="Ad Slot Name"></td>
			<td><input type="text" class="form-control" name="ads_width" id="ads_width" placeholder="Ad Width"></td>
			<td><input type="text" class="form-control" name="ads_height" id="ads_height" placeholder="Ad Height(0 for any)"></td>
			<td><input type="text" class="form-control" name="ads_nos" id="ads_nos" placeholder="How Many?"></td>
			<td><input type="submit" class="btn btn-default btn-success" value="Add"></td>
		</tr>
	</tbody>
</table>
</form>
</div>