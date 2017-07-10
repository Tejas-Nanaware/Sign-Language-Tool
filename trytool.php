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
			<iframe class="myframe" src="models/1.jpg" frameborder="0" allowvr allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" onmousewheel=""></iframe>
		</div>

		<div id="buttonGroup" class="container">
			<div class="btn-group">
				<a href="#" class="btn btn-default" role="button" data-url="9075b82cae8d419886b6a11951c2f0cf/embed">A</a>
				<a href="#" class="btn btn-default" role="button" data-url="b774b548711e43ed9b16dc14a0032f87/embed">B</a>
				<a href="#" class="btn btn-default" role="button" data-url="614fd356920e4c908c4be41fb5883fec/embed">C</a>
				<a href="#" class="btn btn-default" role="button" data-url="23e9e3e34f6241d4a8f2d01616dc6cdd/embed">D</a>
				<a href="#" class="btn btn-default" role="button" data-url="15230faca28a47beb2255942f4841309/embed">E</a>
				<a href="#" class="btn btn-default" role="button" data-url="2596e851d4274fe0b39dfda55412de1a/embed">F</a>
				<a href="#" class="btn btn-default" role="button" data-url="7591a02864db4f259f91f9f88d28546c/embed">G</a>
				<a href="#" class="btn btn-default" role="button" data-url="5dc8267001a245739f1904bed7ae9756/embed">H</a>
				<a href="#" class="btn btn-default" role="button" data-url="4303d009d21f43f598cde28f906361e3/embed">I</a>
				<a href="#" class="btn btn-default" role="button" data-url="f4510afab4aa4cf39f5411e1c1e792f8/embed">J</a>
				<a href="#" class="btn btn-default" role="button" data-url="044ad8cfa83547a8b9c4f98e7e116978/embed">K</a>
				<a href="#" class="btn btn-default" role="button" data-url="38eddccf058b42e6a03240adee1c6976/embed">L</a>
				<a href="#" class="btn btn-default" role="button" data-url="b3c70e8ccbd54b75aeb5633281211811/embed">M</a>
				<a href="#" class="btn btn-default" role="button" data-url="c271d13c52bd443bb71f7a02459c6725/embed">N</a>
				<a href="#" class="btn btn-default" role="button" data-url="105dc6374c0d46a59f33a0755344c7d0/embed">O</a>
				<a href="#" class="btn btn-default" role="button" data-url="b0e98d28485d4a5ea696c31616c71a6d/embed">P</a>
				<a href="#" class="btn btn-default" role="button" data-url="c1804263c0f943bcabe55f248ebb3f77/embed">Q</a>
				<a href="#" class="btn btn-default" role="button" data-url="2a40912498ae46289cea327f85cf8776/embed">R</a>
				<a href="#" class="btn btn-default" role="button" data-url="eb60aed483f1467f9bfa90aa7adb3fcc/embed">S</a>
				<a href="#" class="btn btn-default" role="button" data-url="e57345bfc3674b5c9f536b23d3e089f1/embed">T</a>
				<a href="#" class="btn btn-default" role="button" data-url="d2ec7df874a24b9ba64017d6eabe23d9/embed">U</a>
				<a href="#" class="btn btn-default" role="button" data-url="dd2fab89730042cea73f37ff0d9ebb20/embed">V</a>
				<a href="#" class="btn btn-default" role="button" data-url="c158405093b0475d9633a2c48d3b9c0f/embed">W</a>
				<a href="#" class="btn btn-default" role="button" data-url="7ccee3beb65b4ceb85b14f9b56ed07de/embed">X</a>
				<a href="#" class="btn btn-default" role="button" data-url="51bfdd44b72b4c11a359bbc792ec76d1/embed">Y</a>
				<a href="#" class="btn btn-default" role="button" data-url="cdc77349be504c01bcdcce71ff17dbfa/embed">Z</a>
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