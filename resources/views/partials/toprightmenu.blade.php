<ul class="nav navbar-nav wt-pull-right">
    @if($userRole != 'Super')
    <li class="dropdown <?= $activeLanguages; ?>">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="material-icons">translate</i>
            <b class="caret"></b>
        </a>
        <ul class="dropdown-menu dropdown-menu-right">
            <li class="dropdown-header">Available Languages</li>
            @php
                $languages = $currentUSER->site->languages;
            @endphp
            @for($i = 0; $i < sizeof($languages); $i ++)
                @php
                    $icon = 'done';
                    if($languages[$i]['name'] == session('currentLanguage')) $icon = 'done_all';
                @endphp
                <li><a href="/setlanguage/{{ trim($languages[$i]['name']) }}"><i class="material-icons">{{ $icon }}</i> {{ trim($languages[$i]['caption']) }}</a></li>
            @endfor
            
        </ul>
    </li>
    @endif

    <li class="dropdown <?= $activeLoggedUser; ?>">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="material-icons">account_circle</i>
            <b class="caret"></b>
        </a>
        <ul class="dropdown-menu dropdown-menu-right">
            @if(session('spy') == '%4sVbf23@!#HH')
                <li><form action="/spy/goback/now" method="POST" style="display: inline; margin: 0; padding: 3px 0">
                                {{ csrf_field() }}
                                <button  class="btn btn-default btn-simple btn-sm"><i class="material-icons">assignment_ind</i> Go Back as Super Admin</button>
                            </form></li>
                <li class="divider"></li>
            @endif
            <li class="dropdown-header">@lang('labels.user_and_profile')</li>
            <li><a href="/profile/{{ $currentUSER->id }}/edit"><i class="material-icons">person</i> @lang('labels.my_profile')</a></li>
            <li class="divider"></li>

            @if($userRole == 'Admin')
                <li><a href="/users"><i class="material-icons">group_add</i> @lang('labels.manage_users')</a></li>
                <li class="divider"></li>
            @endif

            <li>
                <a href="#"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    <i class="material-icons">power_settings_new</i> @lang('labels.logout') {{ $currentUSER->name }} 
                </a>

                <form id="logout-form" action="/logout" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </li>
    
</ul>
