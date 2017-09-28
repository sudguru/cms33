@extends('layouts.master')

@section('content')
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Profile / Edit User</h4></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/profile/{{ $user->id }}">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                @if(old('name'))
                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required autofocus>
                                @else
                                    <input type="text" name="name" class="form-control" value="{{ $user->name }}" required autofocus>
                                @endif

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <strong>{{ $user->email }}</strong>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="changePassword" class="col-md-4 control-label">Change Password?</label>
                            <div class="col-md-6">
                                <div class="checkbox">
                                    <label>
                                        <input id="changePassword" type="checkbox" name="changePassword" {{ old('changePassword') ? 'checked' : '' }}> 
                                    </label>
                                </div>
                            </div>
                        </div>


                        <div class="pass form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="pass form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>
                        <div class="text-center pass"><em>If you do not supply passwords, then password won't be changed.</em></div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update Profile
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footerjs')
    <script>
        $(document).ready(function(){
            $('#changePassword').on('click', function(){
                if($(this).prop('checked') == true)
                {
                    $('.pass').show();
                }
                else
                {
                    $('.pass').hide();
                }
            });
            if($('#changePassword').prop('checked') == true)
            {
                $('.pass').show();
            }
        });
    </script>
    <style>
        .pass
        {
            display: none;
        }
    </style>
@endsection
