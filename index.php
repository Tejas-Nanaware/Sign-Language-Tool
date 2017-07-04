<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Sign Language Tool</title>
		<!--Custom CSS-->
		<link rel="stylesheet" href="css/index.css">
	</head>
	<body>
		<?php
			require "nav.php";
		 ?>
		<section class="module parallax parallax-1">
			<div class="container">
				<h1>Why Sign Language?</h1>
			</div>
		</section>

		<section class="module content">
			<div class="container">
				<h2>Active Brain Simulation</h2>
				<p>Sign language is a medium of communicating your thoughts and ideas through the facial expressions, hand shapes and finger spellings.</p>
				<p>Bilingualism of any languages (whether signed or spoken) is a great booster for brains. It enriches and enhances your cognitive processes: higher abstract and creative thinking, better problem-solving, greater cognitive flexibility, better listening skills, greater academic achievement, and more! It also promotes cultural awareness, literacy, and other intellectual benefits.</p>
				<p>Not just bilingualism, but also why not bimodalism too? Bimodal, that is using visual-spatial medium, expands your visual-perceptual skills: spatial awareness, mental rotation skill, visual sensitivity, and more!</p>
				<p>Moreover it is a great skill set to possess.</p>
			</div>
		</section>

		<section class="module parallax parallax-2">
			<div class="container">
				<h1>About The Tool</h1>
			</div>
		</section>

		<section class="module content">
			<div class="container">
				<h2>ISL Fingerspelling</h2>
				<p>This application will help you to learn Indian Sign Language easily. We have an actively managed library that will help in learning the sign language.</p>
				<p>The application has 3D models of hands that will be animated as per the alphabet. This animation feed can be controlled and can be viewed in different angles.</p>
				<p>Read the instructions below and get started now!</p>
			</div>
		</section>

		<section class="module parallax parallax-3">
			<div class="container">
				<h1>How To Use?</h1>
			</div>
		</section>

		<section class="module content">
			<div class="container">
				<h2>Just Mouse &#128045;</h2>
				<p>There is an animated library created by us online that will show the 3D models.</p>
				<p>Simply press the letter buttons that are below the model that will show the 3D model of that alphabet. Click play button to play the model and then use mouse to view the model in different angles.</p>
				<p>Below there will be a settings icon that will help in changing the animation speed. <a href="trytool.php" class="btn btn-success" role="button">Try It!</a></p>
			</div>
		</section>
		<?php
			require "footer.php";
		 ?>
		<script>
			(function(){
				var parallax = document.querySelectorAll(".parallax"),
					speed = 0.5;
				window.onscroll = function(){
					[].slice.call(parallax).forEach(function(el,i){
					var windowYOffset = window.pageYOffset,
						elBackgrounPos = "50% " + (windowYOffset * speed) + "px";
					el.style.backgroundPosition = elBackgrounPos;
					});
				};
			})();
		</script>
	</body>
</html>