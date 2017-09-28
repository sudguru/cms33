<form action="/uploadimage" method="post" enctype="multipart/form-data" id="upload_form">
    {{ csrf_field() }}

    <div class="row">
    	<div class="col-md-5">
    		<div id="imageHolder"><img src="/img/image_placeholder.jpg" class="img-responsive"></div>
    		<span class="btn btn-info btn-round">
            	<input id="image" type="file" name="avatar"/>
                
        	</span>
            <input name="__submit__" type="submit" value="Upload" class="btn btn-success btn-sm" />
    	</div>
    	<div class="col-md-7">
            <div class="form-group nMargin">
                <lavel class="control-lable">Alignment</lavel>
                <select name="alignment" class="form-control">
                    <option value="left">Left</option>
                    <option value="right">Right</option>
                    <option value="none" selected>None</option>
                </select>
            </div>
            <div class="form-group nMargin">
                <lavel class="control-lable">Featured Image</lavel><br/>
                <label class="radio-inline">
                    <input type="radio" name="featured" value="yes">
                    Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" name="featured" checked value="no">
                    No
                </label>
            </div>
	    	<div class="form-group nMargin">
				<label class="control-label">Image Caption</label>
				<textarea name="caption" class="form-control" rows="3"></textarea>
			</div>
            <div class="form-group nMargin">
                    <label class="radio-inline">
                        <input type="radio" name="insert_size" value="original">
                        Original
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="insert_size">
                        Large
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="insert_size">
                        Medium
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="insert_size">
                        Small
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="insert_size">
                        Thumbnail
                    </label>
            </div>
			<input type="button" id="btnCancel" value="Cancel" class="btn btn-default pull-right" />
			<input type="button" id="btnInsert" value="Insert" class="btn btn-primary pull-right" />
            <input type="text" id="featured_pic_id" name="featured_pic_id" value="0" />
		</div>
    </div>
</form>



