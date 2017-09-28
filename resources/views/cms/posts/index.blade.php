@extends ('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-6"><h3>Posts</h3></div>
        <div class="col-md-6"><a href="/posts/create" class="btn btn-success pull-right">Create New Post</a></div>
    </div>


    <!-- Display List of all Sites -->

            <div class="table-responsive">
                <table class="table table-striped" id="datatables">
                <thead>
                    <tr class="text-primary">
                        <th class="text-center">#</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Category</th>
                        <th>Featured</th>
                        <th class="text-right">Actions</th> 
                    </tr> 
                </thead> 
                <tbody class="sortable">
                	<?php $x = 1; 
                    //dd($sites);
                    ?>
                	@foreach($posts as $post)
                    <tr class="sortable-tr">
               			<td style="text-align: center;">{{ $x }}</td>
                        <td class='pt'>{{ $post->title }}</td>
                        <td>
                           {{ $post->user->name }}
                        </td>
                        <td>
                            @foreach($post->categories as $category)
                                {{ $category->name }}, 
                            @endforeach
                        </td>
                        <td>
                            <form action="/featuredposts/{{ $post->id }}" method="POST" style="display: inline; margin: 0; padding: 0">
                                {{ csrf_field() }}
                                @if($post->featuredpost and $post->featuredpost->count() > 0 )
                                <button class="btn btn-success btn-simple btn-xs">Featured</button>
                                @else
                                <button class="btn btn-danger btn-simple btn-xs">Set</button>
                                @endif
                            </form>
                        </td>
                        <td class="td-actions text-right">
                        	<a href="#" class="btn btn-info btn-simple btn-xs">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="/posts/{{ $post->id }}/edit"  class="btn btn-success btn-simple btn-xs">
                                <i class="fa fa-edit"></i>
                            </a>

                            <form action="/posts/{{ $post->id }}" method="POST" style="display: inline; margin: 0; padding: 0">
                                {{ csrf_field() }}
                                {{ method_field("DELETE") }}
                                <button    class="btn btn-danger btn-simple btn-xs" onclick="if ( confirm('You are about to delete this item ?\n \'Cancel\' to stop, \'OK\' to delete.') ) { return true;}return false;"><i class="fa fa-times"></i></button>
                            </form>

                            
                        </td>
                    </tr>
            		<?php $x++; ?>
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
    <link rel="stylesheet" href="/css/datatables-bootstrap.css">
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="/js/html.sortable.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatables').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search records",
                },
                "columnDefs": [ {
                    "targets": [0, 5],
                    "orderable": false
                } ]

            });


            $('.table-responsive label').addClass('form-group');
            
            sortable('.sortable', {
                items: "tr.sortable-tr",
                placeholder: "<tr><td colspan=\"6\"><span class=\"center\">The row will appear here</span></tr>",
                forcePlaceholderSize: false
            })

            sortable('.sortable')[0].addEventListener('sortupdate', function(e) {

                var neworder = e.detail.index + 1;
                var oldorder =  e.detail.oldElementIndex + 1;
                $.ajax({
                    method: "POST",
                    url: "/posts/reorder",
                    data: { "_token": "{{ csrf_token() }}", "neworder": neworder, "oldorder" : oldorder }
                }).done(function( msg ) {
                    $.toaster(msg, 'Reorder', 'success');
                }).error(function(response){
                    console.log(response)
                });
            });
            
            $('.paginate_button').on('click', function(){
                alert("hi");
                sortable('.sortable');
            });
            

            
            


        });
    </script>
    
    
@endsection