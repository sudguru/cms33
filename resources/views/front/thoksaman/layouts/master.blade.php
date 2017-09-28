<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Thok Saman</title>	

		<meta name="keywords" content="" />
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Favicon -->
		<link rel="shortcut icon" href="/thoksaman/images/favicon.png" type="image/x-icon" />
		<link rel="apple-touch-icon" href="/thoksaman/images/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="/thoksaman/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="/thoksaman/vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="/thoksaman/vendor/animate/animate.min.css">
		<link rel="stylesheet" href="/thoksaman/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="/thoksaman/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="/thoksaman/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="/thoksaman/vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="/thoksaman/css/theme.css">
		<link rel="stylesheet" href="/thoksaman/css/theme-elements.css">
		<link rel="stylesheet" href="/thoksaman/css/theme-blog.css">
		<link rel="stylesheet" href="/thoksaman/css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="/thoksaman/vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="/thoksaman/vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="/thoksaman/vendor/rs-plugin/css/navigation.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="/thoksaman/css/skin.css"> 

		<!-- Demo CSS -->
		<link rel="stylesheet" href="/thoksaman/css/shop.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="/thoksaman/css/custom.css">

		<!-- Head Libs -->
		<script src="/thoksaman/vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body>

		<div class="body">
			@include('front.thoksaman.partials.header')

			@include("front.thoksaman.partials.mobilenav")
			
			<div id="mobile-menu-overlay"></div>

			<div role="main" class="main">
				
				@yield('content')
		
			</div>
			
			@include('front.thoksaman.partials.footer')
			
		</div>

		<!-- Vendor -->
		<script src="/thoksaman/vendor/jquery/jquery.min.js"></script>
		<script src="/thoksaman/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="/thoksaman/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="/thoksaman/vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="/thoksaman/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="/thoksaman/vendor/common/common.min.js"></script>
		<script src="/thoksaman/vendor/jquery.validation/jquery.validation.min.js"></script>
		<script src="/thoksaman/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
		{{-- <script src="/thoksaman/vendor/jquery.gmap/jquery.gmap.min.js"></script> --}}
		<script src="/thoksaman/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="/thoksaman/vendor/isotope/jquery.isotope.min.js"></script>
		<script src="/thoksaman/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="/thoksaman/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="/thoksaman/vendor/vide/vide.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="/thoksaman/js/theme.js"></script>


		<script src="/thoksaman/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="/thoksaman/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="/thoksaman/js/views/view.contact.js"></script>



		<!-- Demo -->
		<script src="/thoksaman/js/demos/demo-shop-11.js"></script>
		
		<!-- Theme Custom -->
		<script src="/thoksaman/js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="/thoksaman/js/theme.init.js"></script>
		
		@yield('footerscript')



	</body>
</html>
