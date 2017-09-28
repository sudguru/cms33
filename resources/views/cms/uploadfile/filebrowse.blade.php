<div class="row">
	<div class="col-md-6"><h3 id="imgTitle">Available Files</h3></div>
	<div class="col-md-6">
		<form action="/searchfile" method="post"  id="search_form_file">
			{{ csrf_field() }}
			<div class="form-group label-floating">
				<label class="control-label">Search by File Caption (Type and Hit Enter)</label>
				<input type="text" name="s" class="form-control" value="{{ old('s') }}">
			</div>
		</form>
	</div>
</div>
<div class="row" id="file_browse" style="max-height: 500px; overflow: scroll;">
	@foreach($files as $file)
		@php
		$ext = pathinfo($file->filepath, PATHINFO_EXTENSION);
		$pos = strpos('ppt,pptx,psd,mp3,mp4,mov,css,html,doc,docx,pdf,xls,xlsx,jpg,jpeg,zip', $ext);
		if($pos === false)
		{
			$fileicon = 'na.png';
		}
		else
		{
			$fileicon = $ext.'.png';	
		}
		$this_caption = "";
		$d = $file->captions;
		$currentlanguage = session('currentLanguage');
		if($d) $this_caption = $d[0][$currentlanguage];
		@endphp
		<div class="col-sm-6 col-md-3">
			<div class="thumbnail">
				<div class="fixedbox"> 
				<img src="/img/filetypes/{{ $fileicon }}" class="img-responsive files" id="file-{{ $file->id }}" data-caption="{{ $this_caption }}" />
				</div>
				<div class="caption">
					{{ $this_caption }} &nbsp;
				</div>
			</div>
		</div>
	@endforeach
</div>
