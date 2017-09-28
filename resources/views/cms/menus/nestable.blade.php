<h3>Manage Menu - {{ $menuname }}</h3>
<div class="dd nestable" id="nestable">
<ol class="dd-list">
	@foreach ($menus as $parent)
	<li class="dd-item" data-id="{{ $parent->id }}" data-title="{{ $parent->title }}" data-link="{{ $parent->link }}" data-new="0" data-deleted="0">
		<div class="dd-handle">{{ $parent->title }}</div>
		<span class="button-delete btn btn-white btn-xs pull-right" data-owner-id="{{ $parent->id }}">
			<i class="fa fa-times-circle-o" aria-hidden="true"></i>
		</span>
		<span class="button-edit btn btn-white btn-xs pull-right" data-owner-id="{{ $parent->id }}">
			<i class="fa fa-pencil" aria-hidden="true"></i>
		</span>
			@if ($parent->children->count())
				<ol class="dd-list">
					@foreach ($parent->children as $child)
						<li class="dd-item" data-id="{{ $child->id }}" data-title="{{ $child->title }}" data-link="{{ $child->link }}" data-new="0" data-deleted="0">
							<div class="dd-handle">{{ $child->title }}</div>
							<span class="button-delete btn btn-white btn-xs pull-right" data-owner-id="{{ $child->id }}">
								<i class="fa fa-times-circle-o" aria-hidden="true"></i>
							</span>
							<span class="button-edit btn btn-white btn-xs pull-right" data-owner-id="{{ $child->id }}">
								<i class="fa fa-pencil" aria-hidden="true"></i>
							</span>
							@if ($child->children->count())
								<ol class="dd-list">
									@foreach ($child->children as $grandchild)
										<li class="dd-item" data-id="{{ $grandchild->id }}" data-title="{{ $grandchild->title }}" data-link="{{ $grandchild->link }}" data-new="0" data-deleted="0">
											<div class="dd-handle">{{ $grandchild->title }}</div>
											<span class="button-delete btn btn-white btn-xs pull-right" data-owner-id="{{ $grandchild->id }}">
												<i class="fa fa-times-circle-o" aria-hidden="true"></i>
											</span>
											<span class="button-edit btn btn-white btn-xs pull-right" data-owner-id="{{ $grandchild->id }}">
												<i class="fa fa-pencil" aria-hidden="true"></i>
											</span>
										</li>
									@endforeach
								</ol>
							@endif
						</li>
					@endforeach
				</ol>
			@endif
		</li>
		@endforeach
	</ol>
</div>
<hr/>



<div class="mydangeralert" id="changespending"></div>
<form action="/menus/{{ $menuname }}" method="POST">
  {{ csrf_field() }}
  <textarea name="jsondata" id="json-output" cols="30" rows="10" style="display: none"></textarea>
  <button class="btn btn-primary">Save Changes</button>
</form>