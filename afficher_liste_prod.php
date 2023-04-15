<?php
// Connect to database
$host = "melisswroig.mysql.db";
$username = "melisswroig";
$password = "dHeQ6ead7f93JtCF";
$database = "melisswroig";

$conn = mysqli_connect($host, $username, $password, $database);
mysqli_set_charset($conn, "utf8");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Récupérer les informations sur les produits
$sql = "SELECT * FROM produits";
$result = $conn->query($sql);

// Afficher les informations sur les produits dans une structure HTML similaire
echo "<section class='position_fruits'>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='fichefruit'>";
        echo "<a href='fiche_produit.php?id=".$row['id_produit']."'>";
        echo "<div class='".$row['nom_produit']."'></div>";
        echo "<div>";
        echo "<img src='https://melissa-roig.fr/duty_fruit/uploads/".$row['visuel_produit']."'>";
        echo "<p>".$row['nom_produit']."</p>";
        echo "<p>".$row['prix_produit']."€</p>";
        echo "</div>";
        echo "</a>";
        echo "</div>";
    }
} else {
    echo "Aucun produit disponible.";
}

echo "</section>";

// Fermer la connexion à la base de données
$conn->close();
?>