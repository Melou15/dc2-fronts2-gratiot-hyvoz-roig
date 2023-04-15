<?php
// Get form data
$name = utf8_encode($_POST['name']);
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$description = utf8_encode($_POST['description']);
$picture = $_FILES['picture']['name'];

// Connect to database
$host = "melisswroig.mysql.db";
$username = "melisswroig";
$password = "dHeQ6ead7f93JtCF";
$database = "melisswroig";

$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Insert product into database
$sql = "INSERT INTO produits (nom_produit, prix_produit, qt_produit, desc_produit, visuel_produit) VALUES ('$name', '$price', '$quantity', '$description', '$picture')";

if (mysqli_query($conn, $sql)) {
  move_uploaded_file($_FILES['picture']['tmp_name'], "uploads/$picture");
  // Redirect to ajoutprod.php
  header('Location: https://melissa-roig.fr/duty_fruit/ajoutprod.php');
  exit;
} else {
  echo "Error adding product: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
