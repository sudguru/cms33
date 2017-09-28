<div class="row">
	<div class="col-md-12">
		<div class="form-group label-floating">
			<label class="control-label">Video URL</label>
			@if(old('video_url'))
			<input type="text" name="video_url" class="form-control" value="{{ old('video_url') }}">
			@elseif(isset($post->video_url))
			<input type="text" name="video_url" class="form-control" value="{{ $post->video_url }}">
			@else
			<input type="text" name="video_url" class="form-control" value="">
			@endif
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="form-group label-floating">
			<label class="control-label">Slug</label>
			@if(old('slug'))
			<input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug') }}">
			@elseif(isset($post->slug))
			<input type="text" name="slug" id="slug" class="form-control" value="{{ $post->slug }}">
			@else
			<input type="text" name="slug" id="slug" class="form-control" value="">
			@endif
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="form-group label-floating">
			<label class="control-label">Post Status</label>
			<select name="post_status" id="post_status" class="form-control">
				@php
				if(old('post_status')) {
					$status = old('post_status');
				}
				elseif(isset($post->post_status)) {
					$status = $post->post_status;
				}
				else {
					$status = "";
				}
				@endphp
				<option value="Published" @php if($status == "Published") echo "selected"; @endphp>Published</option>
				<option value="Draft" @php if($status == "Draft") echo "selected"; @endphp>Draft</option>
			</select>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group label-floating">
			<label class="control-label">Comment Status</label>
			<select name="comment_status" id="comment_status" class="form-control">
				@php
				$status = "";
				if(old('comment_status')) {
					$status = old('comment_status');
				}
				elseif(isset($post->comment_status)) {
					$status = $post->comment_status;
				}
				else {
					$status = "";
				}
				@endphp
				<option value="None" @php if($status == "None") echo "selected"; @endphp>None</option>
				<option value="Facebook" @php if($status == "Facebook") echo "selected"; @endphp>Facebook</option>
				<option value="Simple" @php if($status == "Simple") echo "selected"; @endphp>Simple</option>
			</select>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="form-group label-floating">
			<label class="control-label">Permission</label>
			
			<select id="role_id" name="role_id" class="form-control">
				<option value="0">Public</option>
				@foreach($roles as $role)
				@php
				$crole = "0";
				if(old('comment_status')) {
					$crole = old('role_id');
				}
				elseif(isset($post->role_id)) {
					$crole = $post->role_id;
				}
				else {
					$crole = "0";
				}
				$s = "";
				if($crole==$role->id) $s="selected";
				@endphp
				<option value="{{ $role->id }}" {{ $s }}>{{ $role->name }}</option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group label-floating">
			<label class="control-label">Related Gallery</label>
			<select name="gallery_id" id="gallery_id" class="form-control">
				@php
				$status = "";
				if(old('gallery_id')) {
					$status = old('gallery_id');
				}
				elseif(isset($post->gallery_id)) {
					$status = $post->gallery_id;
				}
				else {
					$status = "";
				}
				@endphp
				<option value="0" @php if($status == "None") echo "selected"; @endphp>None</option>
			</select>
		</div>
	</div>
</div>

