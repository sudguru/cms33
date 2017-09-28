
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          <strong>Categories</strong>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
          @foreach ($categories as $parent)
            <a href="javascript:void(0)" id="id~{{ $parent->id }}~{{ $parent->slug }}" class="categorylink">{{ $parent->name }}</a><br/>
            @if ($parent->children->count())
            @foreach ($parent->children as $child)
              -------<a href="#" id="id~{{ $child->id }}~{{ $child->slug }}" class="categorylink">{{ $child->name }}</a><br/>
              @if ($child->children->count())
              @foreach ($child->children as $grandchild)
                --------------<a href="#" id="id~{{ $grandchild->id }}~{{ $grandchild->slug }}" class="categorylink">{{ $grandchild->name }}</a><br/>
              @endforeach
              @endif
            @endforeach
            @endif
          @endforeach
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <strong>Posts</strong>
          </a>
        </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
        <div class="panel-body">
          @foreach ($posts as $post)
            <a href="javascript:void(0)" id="id~{{ $post->id }}~{{ $post->slug }}" class="postlink">{{ $post->title }}</a><br/>
          @endforeach
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingThree">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <strong>Menu Link</strong>
          </a>
        </h4>
      </div>
      <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
        <div class="panel-body">
          @include('cms.menus.form')
        </div>
      </div>
    </div>
  </div>

  