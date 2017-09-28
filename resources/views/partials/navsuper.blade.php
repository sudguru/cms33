  	<?php 
	$activeSites = $activeUsers  = $activeLanguages = $activeLoggedUser = "";
	if(isset($activeMenu))
	{
		if($activeMenu == "Sites") $activeSites = "active";
		if($activeMenu == "Users") $activeUsers = "active";
		if($activeMenu == "Permissions") $activeLanguages = "active";
		if($activeMenu == "SiteUsers") $activeLoggedUser = "active";
	}

	?>
	<nav class="navbar navbar-default navbar-static-top">
    	<div class="container">
            <div class="navbar-header">
            	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar">
            		<span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            	<a href="/sites">
	        		<div class="logo-container">
	                	<div class="logo">
	                    <img src="/img/logo_light.png" alt="WebTree Admin" rel="tooltip" title="Custom CMS Built by WebTree for our Valued Customers" data-placement="bottom" data-html="true">
	                	</div>
	                	<div class="brand">
	                    	WT<br/>Churo
	                	</div>
					</div>
	      		</a>
            </div>

            <div class="collapse navbar-collapse" id="example-navbar">
            	<ul class="nav navbar-nav">
					<li class="<?= $activeSites; ?>"><a href="/sites">Web Sites</a></li>
					<li class="<?= $activeUsers; ?>"><a href="/admins">Users</a></li>
   				</ul>
            	@include('partials.toprightmenu')
            </div>
		</div>
    </nav>
