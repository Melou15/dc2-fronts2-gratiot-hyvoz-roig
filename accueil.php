<?php
include 'db.class.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<script src="https://kit.fontawesome.com/2c70a62eec.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;500&display=swap" rel="stylesheet">
	<title>HYVOZ-GRATIOT-ROIG</title>
</head>
<body>
	<?php include 'header.php';?>
	<?php include 'accueilcss.php' ;?>

	<img class="banière" src="images/banière-dutty-fruit.png" alt="banière-dutty-fruit">

	<h2> Qui sommes-nous ?</h2>

	<div class="presentation">

		<div><img class="img_pres" src="images/presentation.png" alt="personne travaillant dans les champs">
		</div>

		<div class="txt_pres">
			<p>Notre entreprise, Dutti-Fruits, est une société à responsabilité limitée (SARL) spécialisée dans la vente de fruits. Nous proposons une large gamme de fruits frais, de saison et de qualité supérieure, soigneusement sélectionnés auprès de producteurs locaux et régionaux.

				<br>Notre objectif est de fournir à nos clients des fruits frais, sains et savoureux, tout en soutenant les producteurs locaux et en encourageant une agriculture durable. Nous sommes passionnés par la qualité de nos produits et nous nous engageons à offrir un service client exceptionnel à chaque étape de l'achat.</p>

				<p>Chez Dutti-Fruits, nous sommes convaincus que manger des fruits frais est essentiel pour une vie saine et équilibrée. C'est pourquoi nous sommes fiers de proposer une large sélection de fruits, du plus commun au plus exotique, afin de répondre aux goûts et aux besoins de chacun.

					<br>Nous sommes ravis de partager notre passion pour les fruits avec vous et nous nous engageons à fournir des produits frais, sains et savoureux pour votre plus grand plaisir.</p>
				</div>
			</div>

			<h2>Nos fruits</h2>	
			<section class="position_fruits">


				<div class="fichefruit">
					<a href="#">
						<div class="fraise"></div>	
						<div>
							<img src="images/fraise.png">
							<p>FRAISE</p>
							<p> 1€ </p>
						</div>
					</a>
				</div>

				<div class="fichefruit">
					<a href="#">
						<div class="framboise"></div>	
						<div>
							<img src="images/framboise.png">
							<p>FRAMBOISE</p>
							<p> 2€ </p>
						</div>
					</a>
				</div>

				<div class="fichefruit">
					<a href="#">
						<div class="mangue"></div>	
						<div>
							<img src="images/mangue.png">
							<p>MANGUE</p>
							<p> 3€ </p>
						</div>
					</a>
				</div>

				<div class="fichefruit">
					<a href="#">
						<div class="poire"></div>	
						<div>
							<img src="images/poire.png">
							<p>POIRE</p>
							<p> 4€ </p>
						</div>
					</a>
				</div>

				<div class="fichefruit">
					<a href="#">
						<div class="raisin"></div>	
						<div>
							<img src="images/raisin.png">
							<p>RAISIN</p>
							<p> 5€ </p>
						</div>
					</a>
				</div>

				<div class="fichefruit">
					<a href="#">
						<div class="banane"></div>	
						<div>
							<img src="images/banane.png">
							<p>BANANE</p>
							<p> 6€ </p>
						</div>
					</a>
				</div>
			</section>

			<p class="citation">"Un fruit mûr et savoureux est la preuve que la nature peut nous offrir à la fois le plaisir et la santé." - S. Khosla</p>

			<h2>Ils nous ont fait confiance</h2>

			<div class="conf">

			<div><a href="https://cyrillignac.com"><img src="images/cyril.png" alt="logo cyril lignac"></div></a>
			<div><a href="http://www.michelkayser.com/"><img src="images/alexandre.png" alt="logo alexandre"></a></div>
			<div><a href="https://www.relaischateaux.com/fr/france/restaurant/jardin-des-sens-montpellier"><img src="images/jardin.png" alt="logo jardin des sens"></a></div>
		</div>


			<?php include 'footer.php';?>
		</body>
		</html>