@extends('layouts.master')

@section ('content')
<a href="/sites" class="btn btn-simple btn-success">Back</a>
<h3>Details of {{ $site->siteUrl }}</h3>
<ul class="list-group">
	<li class="list-group-item"><strong>Site Title: </strong>{{ $site->siteTitle }}</li>
	<li class="list-group-item"><strong>Languages: </strong>{{ $site->languages }}</li>
	<li class="list-group-item"><strong>Default Language: </strong>{{ $site->defaultLanguage }}</li>
	<li class="list-group-item"><strong>Skin CSS: </strong>{{ $site->skinCSS }}</li>
	<li class="list-group-item"><strong>Menus: </strong>{{ $site->menus }}</li>
	<li class="list-group-item"><strong>Ad Positions: </strong>{{ $site->adPositions }}</li>
	<li class="list-group-item"><strong>HP Slider One Name: </strong>{{ $site->hpSliderOneName }}</li>
	<li class="list-group-item"><strong>No of Captions: </strong>{{ $site->hpSliderOneNoCaptions }}</li>
	<li class="list-group-item"><strong>Dimensions: </strong>{{ $site->hpSliderOneDimension }}</li>
	<li class="list-group-item"><strong>HP Slider Two Name: </strong>{{ $site->hpSliderTwoName }}</li>
	<li class="list-group-item"><strong>No of Captions: </strong>{{ $site->hpSliderTwoNoCaptions }}</li>
	<li class="list-group-item"><strong>Dimensions: </strong>{{ $site->hpSliderTwoDimension }}</li>
</ul>
<hr />
<h4>Site  Users</h4>
@foreach($site->siteusers as $siteuser)
{{ $siteuser->email }} ( {{ App\User::find($siteuser->id)->role->name }} )
<form action="/userdelete/{{ $siteuser->id }}" method="POST" style="display: inline; margin: 0; padding: 0">
    {{ csrf_field() }}
    {{ method_field("DELETE") }}
    <button    class="btn btn-danger btn-simple btn-xs" onclick="if ( confirm('You are about to delete this User from this Site ?\n \'Cancel\' to stop, \'OK\' to delete.') ) { return true;}return false;"><i class="fa fa-times"></i></button>
</form>
<br />

                <br/>
                @endforeach
@endsection