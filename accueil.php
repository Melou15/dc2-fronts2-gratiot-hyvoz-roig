<?php
include 'db.class.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initiale-scale=1">
	<script src="https://kit.fontawesome.com/3f07be2185.js" crossorigin="anonymous"></script>
	<title>HYVOZ-GRATIOT-ROIG</title>
</head>
<body>
	<script src="./siteecommerce.js"></script>
	<?php include 'header.php';?>
	<?php include 'accueilcss.php' ;?>
	<h2> Présentation </h2>
	<section class="position_fruits">
		<div class="fichefruit">
			<img src="images/fraise.png">
			<p>Fraise</p>
			<p>1€</p>

		</div>
		<div class="fichefruit">
			<img src="images/framboise.png">
			<p>Framboise</p>
			<p>2€</p>
		</div>
		<div class="fichefruit">
			<img src="images/mangue.png">
			<p>Mangue</p>
			<p>3€</p>
		</div>
		<div class="fichefruit">
			<img src="images/poire.png">
			<p>Poire</p>
			<p>4€</p>
		</div>
		<div class="fichefruit">
			<img src="images/raisin.png">
			<p>Raisin</p>
			<p>5€</p>
		</div>
		<div class="fichefruit">
			<img src="images/banane.png">
			<p>Banane</p>
			<p>6€</p>
		</div>
	</section>

	<?php include 'footer.php';?>
</body>
</html>