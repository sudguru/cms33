@php
$data = $site->languages;
@endphp
<table class="table table-hover">
	<thead>
		<tr>
			<th>Language</th>
			<th>Caption</th>
			<th>Default</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody id="lang_tbody">
		@for($i = 0; $i < sizeof($data); $i ++)
		<tr id="trlang-{{ $data[$i]['name'] }}">
			<td>{{ $data[$i]['name'] }}</td>
			<td>{{ $data[$i]['caption'] }}</td>
			<td>{{ $data[$i]['default'] }}</td>
			<td><a href="#" id="lang-{{ $data[$i]['name'] }}" class="langdel">Delete</a></td>
		</tr>
		@endfor
	</tbody>
</table>
<div class="well">
<h4>Add New Language</h4>
<form id="lang-form" method="POST" action="/sites/languages/{{ $site->id }}" >
{{ csrf_field() }}
<table class="table">

	<tbody>
		<tr>
			<td><input type="text" class="form-control" name="lang_name" id="lang_name" placeholder="Language Short Form (en)"></td>
			<td><input type="text" class="form-control" name="lang_caption" id="lang_caption" placeholder="Caption"></td>
			<td><input type="text" class="form-control" name="lang_default" id="lang_default" placeholder="Default ?"></td>
			<td><input type="submit" class="btn btn-default btn-success" value="Add"></td>
		</tr>
	</tbody>
</table>
</form>
</div>