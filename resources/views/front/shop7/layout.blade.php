<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>@yield('pageTitle')</title>	

		<meta name="keywords" content="" />
		<meta name="description" content="">
		<meta name="author" content="webtree.com.np">

		<!-- Favicon -->
		<link rel="shortcut icon" href="/img/favicon.png" type="image/x-icon" />
		<link rel="apple-touch-icon" href="/img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="/shop7/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="/shop7/vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="/shop7/vendor/animate/animate.min.css">
		<link rel="stylesheet" href="/shop7/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="/shop7/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="/shop7/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="/shop7/vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="/shop7/css/theme.css">
		<link rel="stylesheet" href="/shop7/css/theme-elements.css">
		<link rel="stylesheet" href="/shop7/css/theme-blog.css">
		<link rel="stylesheet" href="/shop7/css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="/shop7/vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="/shop7/vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="/shop7/vendor/rs-plugin/css/navigation.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="/shop7/css/skin-shop-7.css"> 

		<!-- Demo CSS -->
		<link rel="stylesheet" href="/shop7/css/shop-7.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="/shop7/css/custom.css">

		<!-- Head Libs -->
		<script src="/shop7/vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body>

		<div class="body">
			@include('front.shop7.partials.header')
			@include('front.shop7.partials.mobilenav')
	
			<div role="main" class="main">	
				@yield('content')
			</div>
			
			@include('front.shop7.partials.footer')
		</div>

		<!-- Vendor -->
		<script src="/shop7/vendor/jquery/jquery.min.js"></script>
		<script src="/shop7/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="/shop7/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="/shop7/vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="/shop7/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="/shop7/vendor/common/common.min.js"></script>
		<script src="/shop7/vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="/shop7/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="/shop7/vendor/isotope/jquery.isotope.min.js"></script>
		<script src="/shop7/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="/shop7/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="/shop7/vendor/vide/vide.min.js"></script>

		@yield('middlescript')
	
		<script src="/shop7/js/theme.js"></script>
		<!-- Shop -->
		<script src="/shop7/js/shop-7.js"></script>
		
		<!-- Theme Custom -->
		<script src="/shop7/js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="/shop7/js/theme.init.js"></script>

		@yield('footerscript')




		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->

	<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5983e3fdc62be6d5"></script> 
	</body>
</html>
