<div class="row">
    <div class="col-md-6">
        <div class="form-group label-floating">
            <label class="control-label">Site URL</label>
            @if(old('siteUrl'))
            <input type="text" name="siteUrl" class="form-control" value="{{ old('siteUrl') }}"> @elseif(isset($site->siteUrl))
            <input type="text" name="siteUrl" class="form-control" value="{{ $site->siteUrl }}"> @else
            <input type="text" name="siteUrl" class="form-control" value=""> @endif
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group label-floating">
            <label class="control-label">Site Title</label>
            @if(old('siteTitle'))
            <input type="text" name="siteTitle" class="form-control" value="{{ old('siteTitle') }}"> @elseif(isset($site->siteTitle))
            <input type="text" name="siteTitle" class="form-control" value="{{ $site->siteTitle }}"> @else
            <input type="text" name="siteTitle" class="form-control" value=""> @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group label-floating">
            <label class="control-label">Skin</label>
            @if(old('skinCSS'))
            <input type="text" name="skinCSS" class="form-control" value="{{ old('skinCSS') }}"> @elseif(isset($site->skinCSS))
            <input type="text" name="skinCSS" class="form-control" value="{{ $site->skinCSS }}"> @else
            <input type="text" name="skinCSS" class="form-control" value=""> @endif
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group label-floating">
            <label class="control-label">Menus</label>
            @if(old('menus'))
            <input type="text" name="menus" class="form-control" value="{{ old('menus') }}"> @elseif(isset($site->menus))
            <input type="text" name="menus" class="form-control" value="{{ $site->menus }}"> @else
            <input type="text" name="menus" class="form-control" value=""> @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">Google Analytics Key</label>
            @if(old('gakey'))
            <input type="text" name="gakey" class="form-control" value="{{ old('gakey') }}"> @elseif(isset($site->gakey))
            <input type="text" name="gakey" class="form-control" value="{{ $site->gakey }}"> @else
            <input type="text" name="gakey" class="form-control" value=""> @endif
        </div>
    </div>
</div>
