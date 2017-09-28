@extends ('layouts.master') @section('content')
<h3>Edit Gallery - {{ $gallery->description }}</h3>
<div class="row" style="border: 1px solid #eee; border-radius: 5px; margin: 15px 0 30px 0; padding-top: 15px">
    @foreach($gallerypics as $gallerypic)
    @php
        $pic_path = "/storage/images/" . auth()->user()->site->siteUrl . "/thumb_240/". $gallerypic->pic_path;
        $imagecaption = "";
        foreach($gallerypic->captions as $caption)
        {
            $language = $caption->language;
            $caption = $caption->caption;
            if($language == session('currentLanguage'))
            {
                $imagecaption = $caption;
            }
        }
    @endphp

    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
        <div class="thumbnail">
            <img src="{{ $pic_path }}" alt="{{ $imagecaption }}" class="img-responsive" />
            <div class="caption">
                <p>{{ $imagecaption }}</p>
                <p><a href="#" role="button"><i class="fa fa-pencil-square-o fa-lg"></i></a> | <a href="#" role="button"><i class="fa fa-trash fa-lg"></i></a></p>
            </div>
        </div>
    </div>
    @endforeach
    <div style="clear: both"></div>
    <hr/>
    <div style="padding:15px">Add Image(s) to this gallery
        <form action="/uploadgallerypic" method="POST" enctype="multipart/form-data"  id="gallery-form">
            {{ csrf_field() }}
            <div class="form-group" style="margin-top: 0">
                <div id="upload_error"></div>
                <span class="btn btn-round btn-info">
                    <input id="image" type="file" name="photos[]" multiple />
                </span>
                <input type="hidden" name="gallery_id" id="gallery_id" value="{{ $gallery->id }}" />
                <input name="__submit__" type="submit" value="Upload" class="btn btn-success btn-sm" />
            </div>
        </form>
    </div>
</div>

@endsection 
@section('footerjs') 
    @include("cms.galleries.js") 
@endsection
