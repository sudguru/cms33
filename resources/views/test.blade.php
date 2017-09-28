
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">

	<title>Starter Template for Bootstrap</title>

	<!-- Bootstrap core CSS -->
	<link href="/css/bootstrap.min.css" rel="stylesheet">

	<style>
		body {
			padding-top: 50px;
		}
		.starter-template {
			padding: 40px 15px;
			text-align: center;
		}
		footer
		{
			min-height: 1000px;
			background-color: #333;
		}
		.affix-top {
		  position: relative;
		}

		.affix {
		  top: 100px;
		}

		.affix, 
		.affix-bottom {
		    width: 300px;
		}

		.affix-bottom {
		  position: absolute;
		}
		@media (min-width:1200px) {
		  .affix, 
		  .affix-bottom {
		    width: 263px;
		  }
		}
		#myDiv
		{
			font-weight: bold;
			font-size: 44px;
			padding: 15px;
			background-color: #efefef;

		}
		  
	</style>

  </head>

  <body>

  	<nav class="navbar navbar-inverse navbar-fixed-top">
  		<div class="container">
  			<div class="navbar-header">
  				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
  					<span class="sr-only">Toggle navigation</span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  				</button>
  				<a class="navbar-brand" href="#">Project name</a>
  			</div>
  			<div id="navbar" class="collapse navbar-collapse">
  				<ul class="nav navbar-nav">
  					<li class="active"><a href="#">Home</a></li>
  					<li><a href="#about">About</a></li>
  					<li><a href="#contact">Contact</a></li>
  				</ul>
  			</div><!--/.nav-collapse -->
  		</div>
  	</nav>

  	<div class="container">

  		<div class="starter-template">
  			<h1>Bootstrap starter template</h1>
  			<p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
  		</div>
		<div class="row">
			<div class="col-md-8" style="min-height: 1000px">
				 asdf asdfasd fasd
			</div>
			<div class="col-md-4">
				<div data-spy="affix" id="myDiv">
					I am Affix
				</div>				
			</div>
		</div>
  		

  	</div><!-- /.container -->
	<footer>
  			asdf 
  	</footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script>
        $('#myDiv').affix({
        offset: {     
          top: 100,
          bottom: ($('footer').outerHeight(true) + $('.application').outerHeight(true)) + 40
        }
    });
      //# sourceURL=pen.js
      </script>
</body>
</html>
