<?php
// Connexion à la base de données
$host = "melisswroig.mysql.db";
$username = "melisswroig";
$password = "dHeQ6ead7f93JtCF";
$database = "melisswroig";

$conn = mysqli_connect($host, $username, $password, $database);

// Vérifier connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Vérifier si ID produit est défini
if (!isset($_GET['id'])) {
  die("Product ID not specified.");
}

// Désinfection ID du produit
$id_produit = mysqli_real_escape_string($conn, $_GET['id']);

// Supprimer le produit de la base de donnée
$sql = "DELETE FROM produits WHERE id_produit = $id_produit";

if (mysqli_query($conn, $sql)) {
  echo "Product deleted successfully.";
} else {
  echo "Error deleting product: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
