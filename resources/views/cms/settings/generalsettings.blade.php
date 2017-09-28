@extends ('layouts.master')

@section('content')
<h3>General Settings</h3>
@include("partials.errors")
<form action="/generalsettings" method="POST">
	{{ csrf_field() }}
    <div class="row">
        <div class="col-md-12">
            <div class="form-group label-floating">
            <label class="control-label">Hit Count (Number)</label>
                @if(old('hitCount'))
                <input type="text" name="hitCount" id="hitCount" class="form-control" value="{{ old('hitCount') }}">
                @elseif(isset($site->hitCount))
                <input type="text" name="hitCount" id="hitCount" class="form-control" value="{{ $site->hitCount }}">
                @else
                <input type="text" name="hitCount" id="hitCount" class="form-control"  value="">
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group label-floating">
                <label class="control-label">Show Hit Count (1 = Yes / 0 = No)</label>
                @if(old('showHitCount'))
                <input type="text" name="showHitCount" id="showHitCount" class="form-control" value="{{ old('showHitCount') }}">
                @elseif(isset($site->showHitCount))
                <input type="text" name="showHitCount" id="showHitCount" class="form-control" value="{{ $site->showHitCount }}">
                @else
                <input type="text" name="showHitCount" id="showHitCount" class="form-control"  value="">
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group label-floating">
                <label class="control-label">Posts Per Page (Number)</label>
                @if(old('postPerPage'))
                <input type="text" name="postPerPage" id="postPerPage" class="form-control" value="{{ old('postPerPage') }}">
                @elseif(isset($site->postPerPage))
                <input type="text" name="postPerPage" id="postPerPage" class="form-control" value="{{ $site->postPerPage }}">
                @else
                <input type="text" name="postPerPage" id="postPerPage" class="form-control"  value="">
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <input type="submit" value="Save" class="btn btn-success pull-right" />
        </div>
    </div>
</form>
@endsection

@section('footerjs')

@endsection