<?php
include 'db.class.php';
?>
<!DOCTYPE html>
<html>
<head>
	<head>
  	<script src="https://kit.fontawesome.com/2c70a62eec.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;500&display=swap" rel="stylesheet">
</head>
	<title>Formulaire de commande de fruits</title>
</head>
<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #F2F2F2;
		}
		form {
			max-width: 500px;
			margin: 0 auto;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
			background-color: #fff;
			box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
		}
		label {
			display: block;
			margin-bottom: 10px;
			font-weight: bold;
			color: #555;
		}
		input[type="text"],
		input[type="email"],
		textarea {
			display: block;
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			margin-bottom: 20px;
			box-sizing: border-box;
			font-size: 16px;
			color: #555;
		}
		input[type="submit"] {
			background-color: #F4315B;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
		}
		input[type="submit"]:hover {
			background-color: #F4315B;
		}
	</style>
<body>
	<?php include 'header.php';?>
	<form>
		<label for="nom">Nom :</label>
		<input type="text" id="nom" name="nom" required>
		<label for="prenom">Prénom :</label>
		<input type="text" id="prenom" name="prenom" required>
		<label for="email">Adresse email :</label>
		<input type="email" id="email" name="email" required>
		<label for="adresse">Adresse :</label>
		<textarea id="adresse" name="adresse" rows="4" required></textarea>
		<label for="telephone">Téléphone :</label>
		<input type="text" id="telephone" name="telephone" required>
		<input type="submit" value="Envoyer">
	</form>

	<?php include 'footer.php';?>
</body>
</html>