@php
$data = $site->socials;

@endphp
<table class="table table-hover">
	<thead>
		<tr>
			<th>Network</th>
			<th>URL</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody id="socials_tbody">
		@for($i = 0; $i < sizeof($data); $i ++)
		<tr id="trsocials-{{ $data[$i]['name'] }}">
			<td>{{ $data[$i]['name'] }}</td>
			<td>{{ $data[$i]['pageurl'] }}</td>
			<td><a href="#" id="socials-{{ $data[$i]['name'] }}" class="socialsdel">Delete</a></td>
		</tr>
		@endfor
	</tbody>
</table>
<div class="well">
<h4>Add New Social Network</h4>
<form id="socials-form" method="POST" action="/sites/socials/{{ $site->id }}" >
{{ csrf_field() }}
<table class="table">

	<tbody>
		<tr>
			<td><input type="text" class="form-control" name="socials_name" id="socials_name" placeholder="Network Name"></td>
			<td><input type="text" class="form-control" name="socials_url" id="socials_url" placeholder="URL"></td>
			<td><input type="submit" class="btn btn-default btn-success" value="Add"></td>
		</tr>
	</tbody>
</table>
</form>
<hr>
<strong>Values for Newwork :</strong> (All small letters)<br/>
facebook <br/>
twitter<br/>
foursquare<br/>
linkedin<br/>
pinterest<br/>
tumblr<br/>
whatsapp<br/>
youtube<br/>
flickr<br/>
google-plus<br/>
instagram<br/>
vimeo<br/>
wechat
</div>