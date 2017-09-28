@extends ('layouts.master') @section('content')
<h3>Add New Gallery</h3>
<div class="row" style="border: 1px solid #eee; border-radius: 5px; margin: 15px 0 30px 0">
    <div class="col-md-12">
        <form action="/galleries" method="POST"  id="gallery-form">
            {{ csrf_field() }}
            
            <div class="form-group">
                <label for="galleryname" class="col-md-2 control-label">Gallery Name</label>
                <div class="col-md-6">
                    <input id="galleryname" type="galleryname" class="form-control" name="galleryname" value="{{ old('galleryname') }}"> 
                    @if ($errors->count())
                    @endif
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
            
        </form>
        @include('partials/errors')
    </div>
</div>


@endsection 
@section('footerjs') 
    
@endsection
