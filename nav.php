<?php
	$current = basename($_SERVER['PHP_SELF']);
?>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Sign Language Tool</title>

		<!--Font Awesome CSS-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!--Bootstrap CSS-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!--MDBootstrap CSS-->
		<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.0/css/mdb.min.css">-->
	</head>
	<body>
	<!--Navbar-->
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a class="navbar-brand" href="index.php">Sign Language Tool</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li <?php if($current == 'index.php') {echo 'class="active"';} ?>><a href="index.php">Home</a></li>
					<li <?php if($current == 'trytool.php') {echo 'class="active"';} ?>><a href="trytool.php">Try The Tool</a></li>
					<li <?php if($current == 'about.php') {echo 'class="active"';} ?>><a href="about.php">About Us</a></li>
					<li <?php if($current == 'contact.php') {echo 'class="active"';} ?>><a href="contact.php">Contact Us</a></li>
				</ul>
				</div>
			</div>
		</nav>
		<!--/.Navbar-->
		<!--JQuery JS-->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!--Tether JS-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
	<!--Bootstrap JS-->
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!--MDBootstrap JS-->
	<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.0/js/mdb.min.js"></script>-->

	</body>
</html>