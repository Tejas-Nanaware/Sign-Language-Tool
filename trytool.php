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
			<iframe class="myframe" src="http://www.peopleofar.com/wp-content/uploads/JNTU-EXPRESS-Welcome.jpg" frameborder="0" allowvr allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" onmousewheel=""></iframe>
		</div>

		<div id="buttonGroup" class="container">
			<div class="btn-group">
				<a href="#" class="btn btn-default" role="button" data-url="5c84c18e3d574805b2a04bb0c80ef4bc/embed">A</a>
				<a href="#" class="btn btn-default" role="button" data-url="3714a54a51f9400192b89adae7fc608a/embed">B</a>
				<a href="#" class="btn btn-default" role="button">C</a>
				<a href="#" class="btn btn-default" role="button">D</a>
				<a href="#" class="btn btn-default" role="button" data-url="84f6851afd3f452eb0590890aca6229e/embed">E</a>
				<a href="#" class="btn btn-default" role="button">F</a>
				<a href="#" class="btn btn-default" role="button">G</a>
				<a href="#" class="btn btn-default" role="button">H</a>
				<a href="#" class="btn btn-default" role="button">I</a>
				<a href="#" class="btn btn-default" role="button">J</a>
				<a href="#" class="btn btn-default" role="button">K</a>
				<a href="#" class="btn btn-default" role="button">L</a>
				<a href="#" class="btn btn-default" role="button">M</a>
				<a href="#" class="btn btn-default" role="button">N</a>
				<a href="#" class="btn btn-default" role="button">O</a>
				<a href="#" class="btn btn-default" role="button">P</a>
				<a href="#" class="btn btn-default" role="button">Q</a>
				<a href="#" class="btn btn-default" role="button">R</a>
				<a href="#" class="btn btn-default" role="button">S</a>
				<a href="#" class="btn btn-default" role="button">T</a>
				<a href="#" class="btn btn-default" role="button">U</a>
				<a href="#" class="btn btn-default" role="button">V</a>
				<a href="#" class="btn btn-default" role="button">W</a>
				<a href="#" class="btn btn-default" role="button">X</a>
				<a href="#" class="btn btn-default" role="button">Y</a>
				<a href="#" class="btn btn-default" role="button">Z</a>
			</div>
		</div>
		<?php
			require "footer.php";
		 ?>
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