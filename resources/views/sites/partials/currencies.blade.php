@php
$data = $site->currencies;

@endphp
<table class="table table-hover">
	<thead>
		<tr>
			<th>Symbol</th>
			<th>Weight</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody id="currencies_tbody">
		@for($i = 0; $i < sizeof($data); $i ++)
		<tr id="trcurrencies-{{ $data[$i]['symbol'] }}">
			<td>{{ $data[$i]['symbol'] }}</td>
			<td>{{ $data[$i]['weight'] }}</td>
			<td><a href="#" id="currencies-{{ $data[$i]['symbol'] }}" class="currenciesdel">Delete</a></td>
		</tr>
		@endfor
	</tbody>
</table>
<div class="well">
<h4>Add New Currency</h4>
<form id="currencies-form" method="POST" action="/sites/currencies/{{ $site->id }}" >
{{ csrf_field() }}
<table class="table">

	<tbody>
		<tr>
			<td><input type="text" class="form-control" name="currencies_symbol" id="currencies_symbol" placeholder="Currency Symbol"></td>
			<td><input type="text" class="form-control" name="currencies_weight" id="currencies_weight" placeholder="Weight against other Currencies"></td>
			<td><input type="submit" class="btn btn-default btn-success" value="Add"></td>
		</tr>
	</tbody>
</table>
</form>
</div>