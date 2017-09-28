
<div class="row">
	<div class="col-md-12">
		<div class="form-group label-floating">
			<label class="control-label">Title</label>
			@if(old('title'))
				<input type="text" name="title" id="title" class="form-control" onblur="slug_it(this.value)" value="{{ old('title') }}">
			@elseif(isset($post->title))
				<input type="text" name="title" id="title" class="form-control" onblur="slug_it(this.value)" value="{{ $post->title }}">
			@else
				<input type="text" name="title" id="title" class="form-control" onblur="slug_it(this.value)"  value="">
			@endif
		</div>
	</div>
</div>


<div class="row">
	<div class="col-md-12">
		<div class="form-group">
			<label class="control-label">Content</label>
			
			@if(old('content'))
				<textarea class="form-control" name="content" id="content" rows="25">{{ old('content') }}</textarea>
			@elseif(isset($post->content))
				<textarea class="form-control" name="content" id="content" rows="25">{{ $post->content }}</textarea>
			@else
				<textarea class="form-control" name="content" id="content" rows="25"></textarea>
			@endif
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="form-group">
		<label class="control-label">Excerpt</label>
			@if(old('excerpt'))
				<textarea class="form-control" name="excerpt" id="excerpt" rows="5">{{ old('excerpt') }}</textarea>
			@elseif(isset($post->excerpt))
				<textarea class="form-control" name="excerpt" id="excerpt" rows="5">{{ $post->excerpt }}</textarea>
			@else
				<textarea class="form-control" name="excerpt" id="excerpt" rows="5"></textarea>
			@endif
		</div>
	</div>
</div>

<input type="text" id="featured_pic_id" name="featured_pic_id" value="{{ isset($post->featured_pic_id) ? $post->featured_pic_id : 0 }}" />
