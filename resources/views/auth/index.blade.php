@extends ('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-6"><h3>Admin Users</h3></div>
        <div class="col-md-6"><a href="/register" class="btn btn-success pull-right">Create New Admin User</a></div>
    </div>


    <!-- Display List of all Sites -->

            <div class="table-responsive">
                <table class="table table-striped" id="datatables">
                <thead>
                    <tr class="text-primary">
                        <th class="text-center">#</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Site Name</th>
                        <th>Role</th>
                        <th class="text-right">Actions</th> 
                    </tr> 
                </thead> 
                <tbody>
                	<?php $x = 1; 
                    //dd($sites);
                    ?>
                	@foreach($users as $user)
                    <tr>
               			<td style="text-align: center;">{{ $x }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->site->siteUrl }}</td>
                        <td>{{ $user->role->name }}</td>
                        <td class="td-actions text-right">
                            <a href="/admins/{{ $user->id }}/edit"  class="btn btn-success btn-simple btn-xs">
                                <i class="fa fa-edit"></i>
                            </a>

                            <form action="/admins/{{ $user->id }}" method="POST" style="display: inline; margin: 0; padding: 0;">
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
                    "targets": [0, 4],
                    "orderable": false
                } ]

            });


            $('.table-responsive label').addClass('form-group');

            $('#example').dataTable( {
  
} );
        });
    </script>
@endsection