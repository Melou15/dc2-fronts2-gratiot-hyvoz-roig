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
	<link rel="stylesheet" href="accueil.css">
	<title>HYVOZ-GRATIOT-ROIG</title>
</head>
<body>
	<?php include 'header.php';?>

	<h2>Nos fruits</h2>	
			<section class="position_fruits">
			</section>	


				<?php include 'afficher_liste_prod.php';?>

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