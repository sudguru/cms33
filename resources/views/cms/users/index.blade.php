@extends ('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-6"><h3>Users</h3></div>
        <div class="col-md-6"><a href="/users/create" class="btn btn-success pull-right">Create New User</a></div>
    </div>


    <hr />
    <!-- Display List of all Sites -->
    <div class="table-responsive">
    <table class="table">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th class="text-right">Actions</th>
        </tr>
    </thead>
    <tbody>
    	<?php 
        $x = 1; 
        //dd($sites);
        ?>
    	@foreach($users as $user)
        <tr class="{{ ($user->userLevel == 5) ? 'bold_class' : '' }}">
   			<td style="text-align: center;"> {{ $x }} </td>
            <td>{{ $user->name  }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ App\User::find($user->id)->role->name }} </td>
            <td class="td-actions text-right">
                <a href="/users/{{ $user->id }}/edit"  class="btn btn-success btn-simple btn-xs">
                    <i class="fa fa-edit"></i>
                </a>
                <form action="/users/{{ $user->id }}" method="POST" style="display: inline; margin: 0; padding: 0">
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

@endsection

@section('footerjs')
    <style>
        .bold_class
        {
            font-weight: bold;
            color: green;
        }
    </style>
@endsection