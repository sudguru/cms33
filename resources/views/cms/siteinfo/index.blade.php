@extends ('layouts.master')






@section('content')
<h3>Site Info</h3>
<form action="/siteinfo" method="POST">
    {{ csrf_field() }}

    <div class="row">
        <div class="col-md-12">
            <div class="form-group label-floating">
                <label class="control-label">Keywords</label>
                @if(old('keywords'))
                <input type="text" name="keywords" class="form-control" value="{{ old('keywords') }}">
                @elseif(isset($siteinfo->keywords))
                <input type="text" name="keywords" class="form-control" value="{{ $siteinfo->keywords }}">
                @else
                <input type="text" name="keywords" class="form-control" value="">
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group label-floating">
                <label class="control-label">Description</label>
                @if(old('description'))
                <input type="text" name="description" class="form-control" value="{{ old('description') }}">
                @elseif(isset($siteinfo->description))
                <input type="text" name="description" class="form-control" value="{{ $siteinfo->description }}">
                @else
                <input type="text" name="description" class="form-control" value="">
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group label-floating">
                <label class="control-label">Welcome Message</label>
                @if(old('welcomemsg'))
                <input type="text" name="welcomemsg" class="form-control" value="{{ old('welcomemsg') }}">
                @elseif(isset($siteinfo->welcomemsg))
                <input type="text" name="welcomemsg" class="form-control" value="{{ $siteinfo->welcomemsg }}">
                @else
                <input type="text" name="welcomemsg" class="form-control" value="">
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group label-floating">
                <label class="control-label">Working Hours</label>
                @if(old('working_hours'))
                <input type="text" name="working_hours" class="form-control" value="{{ old('working_hours') }}">
                @elseif(isset($siteinfo->working_hours))
                <input type="text" name="working_hours" class="form-control" value="{{ $siteinfo->working_hours }}">
                @else
                <input type="text" name="working_hours" class="form-control" value="">
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group label-floating">
                <label class="control-label">Company Name</label>
                @if(old('company_name'))
                <input type="text" name="company_name" class="form-control" value="{{ old('company_name') }}">
                @elseif(isset($siteinfo->company_name))
                <input type="text" name="company_name" class="form-control" value="{{ $siteinfo->company_name }}">
                @else
                <input type="text" name="company_name" class="form-control" value="">
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group label-floating">
                <label class="control-label">Home Page Title</label>
                @if(old('hp_title'))
                <input type="text" name="hp_title" class="form-control" value="{{ old('hp_title') }}">
                @elseif(isset($siteinfo->hp_title))
                <input type="text" name="hp_title" class="form-control" value="{{ $siteinfo->hp_title }}">
                @else
                <input type="text" name="hp_title" class="form-control" value="">
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group label-floating">
                <label class="control-label">Address</label>
                @if(old('address'))
                <input type="text" name="address" class="form-control" value="{{ old('address') }}">
                @elseif(isset($siteinfo->address))
                <input type="text" name="address" class="form-control" value="{{ $siteinfo->address }}">
                @else
                <input type="text" name="address" class="form-control" value="">
                @endif
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group label-floating">
                <label class="control-label">City</label>
                @if(old('city'))
                <input type="text" name="city" class="form-control" value="{{ old('city') }}">
                @elseif(isset($siteinfo->city))
                <input type="text" name="city" class="form-control" value="{{ $siteinfo->city }}">
                @else
                <input type="text" name="city" class="form-control" value="">
                @endif
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group label-floating">
                <label class="control-label">Country</label>
                @if(old('country'))
                <input type="text" name="country" class="form-control" value="{{ old('country') }}">
                @elseif(isset($siteinfo->country))
                <input type="text" name="country" class="form-control" value="{{ $siteinfo->country }}">
                @else
                <input type="text" name="country" class="form-control" value="">
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group label-floating">
                <label class="control-label">Phone</label>
                @if(old('phone'))
                <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
                @elseif(isset($siteinfo->phone))
                <input type="text" name="phone" class="form-control" value="{{ $siteinfo->phone }}">
                @else
                <input type="text" name="phone" class="form-control" value="">
                @endif
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group label-floating">
                <label class="control-label">Fax</label>
                @if(old('fax'))
                <input type="text" name="fax" class="form-control" value="{{ old('fax') }}">
                @elseif(isset($siteinfo->fax))
                <input type="text" name="fax" class="form-control" value="{{ $siteinfo->fax }}">
                @else
                <input type="text" name="fax" class="form-control" value="">
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group label-floating">
                <label class="control-label">Email</label>
                @if(old('email'))
                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                @elseif(isset($siteinfo->email))
                <input type="email" name="email" class="form-control" value="{{ $siteinfo->email }}">
                @else
                <input type="email" name="email" class="form-control" value="">
                @endif
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group label-floating">
                <label class="control-label">Feefback Email</label>
                @if(old('feedback_email'))
                <input type="text" name="feedback_email" class="form-control" value="{{ old('feedback_email') }}">
                @elseif(isset($siteinfo->feedback_email))
                <input type="text" name="feedback_email" class="form-control" value="{{ $siteinfo->feedback_email }}">
                @else
                <input type="text" name="feedback_email" class="form-control" value="">
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <input type="hidden" name="id" value="{{ $siteinfo->id }}" />
            <button class="btn btn-primary">Save</button>
        </div>

    </div>
</form>

<div class="row">
    <div class="col-md-12">
        <form action="/siteinfosaveogimage" method="POST" enctype="multipart/form-data"  id="banner-form">
            {{ csrf_field() }}
            <div class="form-group">
                <h4>Social Sharing Image for the Site</h4>
                <small><em>Minimum Width: 800px</em></small>
                @php
                    if(strlen($siteinfo->og_image) > 4)
                    {
                        $img_path = '/storage/' . auth()->user()->site->siteUrl . '/images/thumb_800/' . $siteinfo->og_image;
                    }
                    else
                    {
                        $img_path = '/img/image_placeholder.jpg';
                    }
                @endphp
                <div id="imageHolder"><img src="{{ $img_path }}" class="img-responsive"></div>
                @include('partials.errors')
                <span class="btn btn-round btn-info">
                    <input id="image" type="file" name="photo"/>
                </span>
                <input type="hidden" name="id" value="{{ $siteinfo->id }}" />
                <input name="__submit__" type="submit" value="Upload" class="btn btn-success btn-sm" />

            </div>
        </form>
        <form action="/siteinforemoveogimage" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $siteinfo->id }}" />
            <button class="btn btn-warning btn-sm" onclick="if ( confirm('You are about to delete this item ?\n \'Cancel\' to stop, \'OK\' to delete.') ) { return true;}return false;" href="/siteinforemoveogimage">Remove This Image</button>
        </form>
    </div>
</div>


@endsection

@section('footerjs')
    <style>
        #imageHolder {
            max-width: 300px;
            min-width: 300px;
        }
        #imageHolder img
        {
            display: block;
            margin: 0 auto;
        }
    </style>
@endsection