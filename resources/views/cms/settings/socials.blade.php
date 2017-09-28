@extends ('layouts.master')

@section('content')
@php 
$data = $socials; 
@endphp
<h3>Social Settings</h3>
@include("partials.errors")
<table class="table table-hover">
	<thead>
		<tr>
			<th>Network</th>
			<th>URL</th>
		</tr>
	</thead>
	<tbody id="socials_tbody">
		@for($i = 0; $i < sizeof($data); $i ++)
		<tr>
			<td>{{ $data[$i]['name'] }}</td>
			<td><input type="text" class="form-control socialinput" value="{{ $data[$i]['pageurl'] }}" id="socials-{{ $data[$i]['name'] }}" /></td>
		</tr>
		@endfor
	</tbody>
</table>
@endsection

@section('footerjs')
<script>
	$(document).ready(function(){

		$('.socialinput').on('change', function(event) {
			//alert("hi");
			event.preventDefault();
			var aid = this.id.split('-');
			var id = aid[1];
			var val = $('#socials-'+id).val();
			$.ajax({
				method: "POST",
				url: "/socialsettings/edit",
				data: { "_token": "{{ csrf_token() }}", "id": id, "val" : val}
			}).done(function( msg ) {
				$('#socials-'+id).removeClass('dirty');
				$.toaster('URL Updated', 'Edit', 'success');
			}).error(function(response){
				console.log(response)
			});
		});

		$('#socials_tbody input').on('keyup', function(){
            var originalVal = this.getAttribute('value');
            var currentVal = $(this).val();
            console.log(originalVal);
            console.log(currentVal);
            if(originalVal != currentVal) $(this).addClass('dirty');
            if(originalVal == currentVal) $(this).removeClass('dirty');
        });
	});
</script>
<style>
	.dirty 
	{
		color: red;
	}

	.form-group
	{
		padding: 0;
		margin:0;
	}
</style>
@endsection