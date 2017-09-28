<div class="row">
    	<div class="col-md-5">
            <form action="/uploadimage" method="post" enctype="multipart/form-data" id="upload_form">
                {{ csrf_field() }}
        		<div id="imageHolder"><img src="/img/image_placeholder.jpg" class="img-responsive"></div>
        		<div id="upload_error"></div>
                <span class="btn btn-info btn-round">
                	<input id="image" type="file" name="photo"/>
            	</span>
                <input name="__submit__" type="submit" value="Upload" class="btn btn-success btn-sm" />
            </form>
    	</div>
    	<div class="col-md-7">
            <form action="/savecaption" method="post" id="caption_form">
            {{ csrf_field() }}
            <div class="form-group nMargin">
                <label class="control-lable">Alignment</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="alignment" value="left" checked> Left
                    </label>
                </div>

                <div class="radio">
                    <label>
                        <input type="radio" name="alignment" value="right"> Right
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="alignment" value="none"> None
                    </label>
                </div>
            </div>
            <div class="form-group nMargin">
                <label class="control-label">Featured Images ?</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="featured" value="1"> Yes
                    </label>
                </div>

                <div class="radio">
                    <label>
                        <input type="radio" name="featured" value="0" checked> No
                    </label>
                </div>
            </div>

	    	<div class="form-group nMargin">
				<label class="control-label">Image Caption</label>
				<textarea id="caption" name="caption" class="form-control" rows="3"></textarea>
			</div>
            <div class="form-group nMargin">
                <label class="control-label">Select Size</label><br/>
                <div class="radio">
                    <label data-toggle="tooltip" data-placement="top" data-trigger="hover" title="Original">
                        <input type="radio" name="insert_size" value="original" data-toggle="tooltip" data-placement="top" data-trigger="hover" title="Original">
                        Original
                    </label>
                </div>
                <div class="radio">
                    <label data-toggle="tooltip" data-placement="top" data-trigger="hover" title="1200px">
                        <input type="radio" name="insert_size" id="lg" value="thumb_1200" data-toggle="tooltip" data-placement="top" data-trigger="hover" title="1200px">
                        Large
                    </label>
                </div>
                <div class="radio">
                    <label data-toggle="tooltip" data-placement="top" data-trigger="hover" title="800px">
                        <input type="radio" name="insert_size" id="md" value="thumb_800" data-toggle="tooltip" data-placement="top" data-trigger="hover" title="800px">
                        Medium
                    </label>
                </div>
                <div class="radio">
                    <label data-toggle="tooltip" data-placement="top" data-trigger="hover" title="400px">
                        <input type="radio" name="insert_size" id="sm" value="thumb_400" data-toggle="tooltip" data-placement="top" data-trigger="hover" title="400px">
                        Small
                    </label>
                </div>
                <div class="radio">
                    <label data-toggle="tooltip" data-placement="top" data-trigger="hover" title="240px">
                        <input type="radio" name="insert_size" id="xs" value="thumb_240" checked="checked" data-toggle="tooltip" data-placement="top" data-trigger="hover" title="240px">
                        Thumbnail
                    </label>
                </div>
            </div>
            <input type="hidden" name="pic_id" id="pic_id" value="0" />
            <input type="hidden" name="pic_name" id="pic_name" value="" />
			<input type="button" id="btnCancel" value="Cancel" class="btn btn-default pull-right" />
			<input type="submit" id="btnInsert" value="Insert" class="btn btn-primary pull-right" />

            </form>
		</div>
    </div>