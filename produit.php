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
	<title>PAGE FRUIT</title>
	<style>

		 body {
        font-family: 'Raleway', sans-serif;
    }
     h2{
        text-align: center;
        font-size: 40px;
    }
		.fichefruit{

        width: 400px;
        height: auto;
        background-color: #F3C9D3;
        border-radius:20px;
        padding: 1%;
        text-align: center;
        margin: 10px 0 10px 0;
    }

    .position_fruits{
        display: flex;
        justify-content: space-around;
        flex-direction: row;
        flex-wrap: wrap;
        padding:10px;
    }

    .fichefruit img
    {
        background-size: cover;
        background-position: center;
        width: 200px;
        height: auto;
        border-radius: 100px;
        border: solid #F4315B 5px;
    }

    .fichefruit a, a:hover{

        text-decoration: none;

    }
	</style>
</head>
<body>
	<?php include 'header.php';?>

			<h2>Nos fruits</h2>	
			<?php include 'afficher_liste_prod.php';?>

			<?php include 'footer.php';?>
		</body>
		</html>