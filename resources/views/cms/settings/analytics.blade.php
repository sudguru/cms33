@extends ('layouts.master')

@section('content')
<h3>Your Google Analytics Key</h3>
@include("partials.errors")
    <br>
    <strong>{{ $site->gakey }}</strong>
@endsection

@section('footerjs')

@endsection