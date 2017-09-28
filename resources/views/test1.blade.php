
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

  </head>

  <body>

  	

  	<div class="container">

  		<div class="radio">
                    <label>
                        <input type="radio" id="aleft" name="alignment" value="left" checked> Left
                    </label>
                </div>

                <div class="radio">
                    <label>
                        <input type="radio" id="aright" name="alignment" value="right"> Right
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" id="anone" name="alignment" value="none"> None
                    </label>
                </div>
  		

  	</div><!-- /.container -->
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function(){
    	var alignment = "none";
    	$('input[name=alignment][value='+alignment+']').prop("checked",true);
    });
    </script>
</body>
</html>
