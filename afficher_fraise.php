<?php
$host = "melisswroig.mysql.db";
$username = "melisswroig";
$password = "dHeQ6ead7f93JtCF";
$database = "melisswroig";

$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Récupérer les informations sur les fraises depuis la base de données
$sql = "SELECT * FROM produits WHERE nom_produit='fraise'";
$result = $conn->query($sql);

// Vérifier si des fraises ont été trouvées dans la base de données
if ($result->num_rows > 0) {
    // Afficher les informations sur les fraises dans une fiche produit HTML
    $row = $result->fetch_assoc();
    echo "<div class='product-container'>";
    echo "<div>";
    echo "<img class='product-image' src='https://melissa-roig.fr/duty_fruit/uploads/".$row['visuel_produit']."' alt='image de ".$row['nom_produit']."'>";
    echo "</div>";
    echo "<div class='product-details'>";
    echo "<h1 class='product-name'>".$row['nom_produit']."</h1>";
    echo "<h2 class='product-price'>".$row['prix_produit']."€</h2>";
    echo "<p class='product-quantity'>Quantité: <input type='number' value='1'></p>";
    echo "<p class='product-description'>".$row['desc_produit']."</p>";
    echo "</div>";
    echo "</div>";
} else {
    // Afficher un message si aucune fraise n'a été trouvée
    echo "Aucune fraise disponible.";
}

// Fermer la connexion à la base de données
$conn->close();
?>