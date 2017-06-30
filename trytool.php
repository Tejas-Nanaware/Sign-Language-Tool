<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Sign Language Tool</title>
		<link rel="stylesheet" href="css/trytool.css">
		<!--Font Awesome CSS-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!--Bootstrap CSS-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
		<?php
			require "nav.php";
		 ?>
		<div class="sketchfab">
			<iframe class="myframe" src="" frameborder="0" allowvr allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" onmousewheel=""></iframe>
		</div>
		<!--Accordion-->
		<div class="container">
			<a href=# data-url="5c84c18e3d574805b2a04bb0c80ef4bc/embed">A</a>
			<a href=# data-url="3714a54a51f9400192b89adae7fc608a/embed">B</a>
			<a href=# data-url="">C</a>
			<a href=# data-url="">D</a>
			<a href=# data-url="84f6851afd3f452eb0590890aca6229e/embed">E</a>
		</div>
		<script>
			$(function() {
				$('a').click(function() {
  					var _this = $(this),
					iframe = $('iframe');
					iframe.attr('src','https://sketchfab.com/models/' + _this.attr('data-url'));
  				});
			});
		</script>
	<!--JQuery JS-->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!--Tether JS-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
	<!--Bootstrap JS-->
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>