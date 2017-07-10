<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Sign Language Tool</title>
		<link rel="stylesheet" href="css/contact.css">
	</head>
	<body>
		<?php
			require "nav.php";
		?>
		<div class="jumbotron jumbotron-sm">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-lg-12">
						<h1 class="h1"><small>Feel free to contact us</small></h1>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="well well-sm">
						<iframe class="maps" width="600" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJOcDvifHH5zsRTonFxaTO_Wg&key=AIzaSyCOn4MA3zKAvAWXmmr3JaPhGCTP1kitNq0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-4">
					<form>
					<legend><span class="glyphicon glyphicon-globe"></span> Address</legend>
					<address>
						<strong>IIT Bombay</strong><br>
						Powai, Mumbai - 400 076<br>
						<span class="glyphicon glyphicon-phone-alt"></span>
						+91 (22) 2572 2545 
					</address>
					<address>
						<strong>Sameer Sahasrabuddhe</strong><br>
						<a href="mailto:iamsameerss@gmail.com?Subject=Fingerspelling%20web%20app%20Indian%20Sign%20Language">iamsameerss@gmail.com</a>
					</address>
					</form>
				</div>
			</div>
		</div>
		<?php
			require "footer.php";
		 ?>
	</body>
</html>