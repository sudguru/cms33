

    <div class="row">
    	<div class="col-md-5">
            <form action="/uploadfile" method="post" enctype="multipart/form-data" id="upload_form_file">
                {{ csrf_field() }}
        		<div id="imageHolderFile"><img src="/img/filetypes/na.png" class="img-responsive"></div>
        		<div id="upload_error_file"></div>
                <span class="btn btn-info btn-round">
                	<input id="file" type="file" name="filename"/>
            	</span>
                <input name="__submit__" type="submit" value="Upload" class="btn btn-success btn-sm" />
            </form>
    	</div>
    	<div class="col-md-7">
            <form action="/savecaptionfile" method="post" id="caption_form_file">
            {{ csrf_field() }}


	    	<div class="form-group nMargin">
				<label class="control-label">File Caption</label>
				<textarea id="captionfile" name="captionfile" class="form-control" rows="3"></textarea>
			</div>

            <input type="hidden" name="file_id" id="file_id" value="0" />
            <input type="hidden" name="file_name" id="file_name" value="" />
			<input type="button" id="btnCancelFile" value="Cancel" class="btn btn-default pull-right" />
			<input type="submit" id="btnInsertFile" value="Insert" class="btn btn-primary pull-right" />

            </form>
		</div>
    </div>