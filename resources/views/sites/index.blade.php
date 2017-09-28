@extends ('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-6"><h3>Sites</h3></div>
        <div class="col-md-6"><a href="/sites/create" class="btn btn-success pull-right">Create New Site</a></div>
    </div>


    <!-- Display List of all Sites -->

            <div class="table-responsive">
                <table class="table table-striped" id="datatables">
                <thead>
                    <tr class="text-primary">
                        <th class="text-center">#</th>
                        <th>Site Name</th>
                        <th>Users</th>
                        <th class="text-right">Actions</th> 
                    </tr> 
                </thead> 
                <tbody>
                	<?php $x = 1; 
                    //dd($sites);
                    ?>
                	@foreach($sites as $site)
                    <tr>
               			<td style="text-align: center;">{{ $x }}</td>
                        <td class='pt'>{{ $site->siteUrl }}</td>
                        <td>
                           <?php $count = 0;?>
                            @foreach($site->siteusers as $siteuser)
                                <?php $count++; if($count==1) { ?>
                                {{ $siteuser->email }} &nbsp;  ( {{ App\User::find($siteuser->id)->role->name }} )
                                <?php } ?>
                            <br/>
                            @endforeach
                        </td>
                        <td class="td-actions text-right">
                            <?php $count = 0;?>
                            @foreach($site->siteusers as $siteuser)
                            <?php $count++; if($count==1) { ?>
                            <form action="/spy/{{ $siteuser->id }}" method="POST" style="display: inline; margin: 0; padding: 0">
                                {{ csrf_field() }}
                                <button    class="btn btn-default btn-simple btn-xs"><i class="fa fa-user-secret"></i></button>
                            </form>
                            <?php } ?>
                            @endforeach

                            <a href="/sites/{{ $site->id }}/edit"  class="btn btn-success btn-simple btn-xs">
                                <i class="fa fa-edit"></i>
                            </a>

                            <form action="/sites/{{ $site->id }}" method="POST" style="display: inline; margin: 0; padding: 0">
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
                    "targets": [0, 3],
                    "orderable": false
                } ]

            });


            $('.table-responsive label').addClass('form-group');

            $('#example').dataTable( {
  
} );
        });
    </script>
@endsection