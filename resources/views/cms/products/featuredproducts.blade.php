@extends ('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-6"><h3>Featured Products</h3></div>
    </div>


    <!-- Display List of all Sites -->

            <div class="table-responsive">
                <table class="table table-striped">
                <thead>
                    <tr class="text-primary">
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Type</th>
                        <th class="text-right">Actions</th> 
                    </tr> 
                </thead> 
                <tbody class="sortable">

                	@foreach($featuredproducts as $featuredproduct)
                    <tr class="sortable-tr">
                        <td class='pt'>{{ $featuredproduct->product->productname}}</td>
                        <td>
                           @foreach($featuredproduct->product->productcategories as $category)
                                {{ $category->name }}, 
                            @endforeach
                        </td>
                        <td>{{ $featuredproduct->product->brand->brandname}}</td>
                        <td>{{ $featuredproduct->product->materialtype->materialtype}}</td>
                        <td class="td-actions text-right">
                            <form action="/featuredproducts/{{ $featuredproduct->id }}" method="POST" style="display: inline; margin: 0; padding: 0">
                                {{ csrf_field() }}
                                {{ method_field("DELETE") }}
                                <button    class="btn btn-danger btn-simple btn-xs" onclick="if ( confirm('You are about to delete this item ?\n \'Cancel\' to stop, \'OK\' to delete.') ) { return true;}return false;"><i class="fa fa-times"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

{{-- $sites->links() --}}
<div style="clear:both"></div>
{{-- $sites->total() }} Total Sites --}}
</div>

@endsection

@section('footerjs')
    <script src="/js/html.sortable.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        


        sortable('.sortable', {
            items: "tr.sortable-tr",
            placeholder: "<tr><td colspan=\"4\"><span class=\"center\">The row will appear here</span></tr>",
            forcePlaceholderSize: false
        })

        sortable('.sortable')[0].addEventListener('sortupdate', function(e) {

            var neworder = e.detail.index + 1;
            var oldorder =  e.detail.oldElementIndex + 1;
            $.ajax({
                method: "POST",
                url: "/featuredproducts/reorder",
                data: { "_token": "{{ csrf_token() }}", "neworder": neworder, "oldorder" : oldorder }
            }).done(function( msg ) {
                $.toaster(msg, 'Reorder', 'success');
            }).error(function(response){
                console.log(response)
            });
        });
        });
    </script>
@endsection