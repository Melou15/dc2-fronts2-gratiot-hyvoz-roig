<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <script src="https://kit.fontawesome.com/2c70a62eec.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="accueil.css">
    <link rel="stylesheet" href="panier.css">
  <title>Fiche produit</title>
  <style>

    body {
      font-family: 'Raleway', sans-serif;
    }
    .product-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
      max-width: 1200px;
      margin: 0 auto;
    }
    
    .product-image {
      width: 350px;
        margin:10px 50px 10px 200px;
        border-radius: 200px;
        border: solid #F4315B 5px;
    }
    
    .product-details {
      max-width: 500px;
    }

    .product-name {
      font-size: 50px;
      font-weight: bold;
      margin-bottom: 20px;
    }
    
    .product-price {
      font-size: 30px;
      font-weight: bold;
      margin-bottom: 20px;
    }
    
    .product-quantity {
      font-size: 15px;
      margin-bottom: 20px;
    }
    
    .product-description {
      font-size: 15px;
      text-align: justify; 
      margin-bottom: 20px;
    }

    button{
      margin-left: 20px;
    }

  </style>
</head>
<body>
  <?php include 'header.php';?>
<?php
    $host = "melisswroig.mysql.db";
    $username = "melisswroig";
    $password = "dHeQ6ead7f93JtCF";
    $database = "melisswroig";

    $conn = mysqli_connect($host, $username, $password, $database);
    mysqli_set_charset($conn, "utf8");
    

    // Vérifier la connexion
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    // Récupérer l'ID du produit depuis l'URL
    $id_produit = $_GET['id'];

    // Préparer la requête SQL pour récupérer les informations sur le produit spécifié
    $sql = "SELECT * FROM produits WHERE id_produit = $id_produit";
    $result = $conn->query($sql);

    // Vérifier si des produits ont été trouvés dans la base de données
    if ($result->num_rows > 0) {
        // Afficher les informations sur le produit dans une fiche produit HTML
        $row = $result->fetch_assoc();
        echo "<div class='product-container'>";
        echo "<div>";
        echo "<img class='product-image' src='https://melissa-roig.fr/duty_fruit/uploads/".$row['visuel_produit']."' alt='image de ".$row['nom_produit']."'>";
        echo "</div>";
        echo "<div class='product-details'>";
        echo "<h1 class='product-name'>".$row['nom_produit']."</h1>";
        echo "<h2 class='product-price'>".$row['prix_produit']."€</h2>";
        echo "<form method='post' action='ajouter_au_panier.php'>";
        echo "<input type='hidden' name='id_produit' value='".$row['id_produit']."'>";
        echo "<label>Quantité:</label>";
        echo "<input type='number' name='quantite' value='1' max='".$row['qt_produit']."'>";
        echo "<button type='submit' name='acheter'>Acheter</button>";
        echo "</form>";
        echo "<p class='product-description'>".$row['desc_produit']."</p>";
        echo "<p class='product-stock'>En stock: ".$row['qt_produit']."</p>";
        echo "</div>";
        echo "</div>";
    } else {
        // Afficher un message si aucun produit n'a été trouvé
        echo "Produit non disponible.";
    }

    // Fermer la connexion à la base de données
    $conn->close();
?>


  <?php include 'footer.php';?>
</body>
</html>
