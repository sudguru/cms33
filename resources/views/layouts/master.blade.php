@php
	App::setLocale(session('currentLanguage'));
@endphp
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="robots" content="noindex">
	<link rel="apple-touch-icon" sizes="76x76" href="/img/favicon.png">
	<link rel="icon" type="image/png" href="/img/favicon.png">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('pageTitle') - WebTree CMS Admin</title>
	
	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/material-kit.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head>

<body>

<div class="wrapper">
<div class="header">
	@php
		$userRole = auth()->user()->role->name;
		$currentUSER = auth()->user();
	@endphp
	@if( $userRole == 'Super' )
		@include('partials.navsuper')
	@elseif( $userRole == 'Admin' || $userRole == 'Editor' )
		@include('partials.nav')
	@elseif( $userRole == 'Author' )
		@include('partials.navauther')
	@elseif( $userRole == 'Contributor' )
		@include('partials.navcontributor')
	@else
		{{ dd(Auth::check()) }}
	@endif
			

</div>


	<!-- you can use the class main-raised if you want the main area to be as a page with shadows -->
	<div class="main-raised" style="background-color: #fff">
		<div class="container" style="padding-top: 25px; padding-bottom: 100px">
			@if( $userRole != 'Super')
				<ol class="breadcrumb">
				  <li>
				  	You are managing: <a href="http:\/\/{{ $currentUSER->site->siteUrl }}" target="_blank">http://{{ $currentUSER->site->siteUrl }}</a> 
				  </li>
				  <li>
				  	Logged in as <strong>{{ $currentUSER->email }}</strong> ( {{ $userRole }} )
				  </li>
				  <li>
				  	Selected Language: {{ session('currentLanguage') }}
				  </li>
				  	@if(session('spy') == '%4sVbf23@!#HH')
		                <li><i class="fa fa-user-secret"></i> Spy Mode</li>
		            @endif

				</ol>
			@endif
			<!-- here you can add your content -->
			
			@yield('content')
			
		</div>
	</div>
	<div style="text-align: center; color: #ca25ed; margin-top: 30px">
		&copy; Web Tree Pvt. Ltd. info@webtree.com.np
	</div>
</div><!--wrapper-->


</body>

	<!--   Core JS Files   -->
	<script src="/js/jquery.min.js" type="text/javascript"></script>
	<script src="/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="/js/material.min.js"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="/js/material-kit.js" type="text/javascript"></script>
	<script src="/js/jquery.toaster.js"></script>
	@if($flash = session('flashmessage'))
		<script>
			$.toaster({ priority : 'success', title : 'Success', message : '{{ $flash }}' });
		</script>
	@endif
	@yield("footerjs")

	

</html>
