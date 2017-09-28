@extends ('layouts.master') 
@section('content')
<h3 class="pull-left">Manage Photo Galleries</h3>
<a href="/galleries/create" class="btn btn-success btn-sm pull-right"><i class="material-icons">collections</i> New</i></a>
<div class="row">
    <div class="col-md-12">
    	<table class="table table-stripe">
    		<tr>
    			<th>SN</th>
    			<th>Gallery Name</th>
    			<th>No of Pics</th>
    			<th>Manage</th>
    		</tr>
    		@php $c = 1; @endphp
    		@foreach($galleries as $gallery)
    		<tr>
    			<td>{{ $c }}</td>
    			<td>{{ $gallery->description }}</td>
    			<td>{{ $gallery->photos->count() }}</td>
    			<td><a href="galleries/{{ $gallery->id }}/edit">Manage</a> | <a href="galleries/{{ $gallery->id }}/edit">Delete</a> </td>
    		</tr>
    		@php $c += 1; @endphp
    		@endforeach
    	</table>
    </div>
</div>
@endsection 
@section('footerjs') 
    @include("cms.galleries.js") 
@endsection
