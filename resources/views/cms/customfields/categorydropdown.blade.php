<div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="selectcategory" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Select Category <span class="caret"></span>

    </button>
    <ul class="dropdown-menu" aria-labelledby="selectcategory">
        @foreach ($categories as $parent)
        <li>
            <a href="#" id="id-{{ $parent->id }}" class="categorylink">{{ $parent->name }}</a>
        </li>
            {{--
            @if ($parent->children->count())
                @foreach ($parent->children as $child)
                    <li class="list-group-item">
                        <a href="#" id="id-{{ $child->id }}" class="categorylink">--- {{ $child->name }}</a>
                    </li>
                    @if ($child->children->count())
                        @foreach ($child->children as $grandchild)
                            <li class="list-group-item">
                                <a href="#" id="id-{{ $grandchild->id }}" class="categorylink">------ {{ $grandchild->name }}</a>
                            </li>
                        @endforeach
                    @endif
                @endforeach
            @endif
            --}}
        @endforeach
    </li>
</ul>
</div>