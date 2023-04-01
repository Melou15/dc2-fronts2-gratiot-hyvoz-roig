<?php
// Get form data
$name = $_POST['name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$description = $_POST['description'];
$picture = $_FILES['picture']['name'];

// Connect to database
$host = "localhost";
$username = "roig";
$password = "dc2dutyfruits";
$database = "duty_fruit";

$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Insert product into database
$sql = "INSERT INTO produits (nom_produit, prix_produit, qt_produit, desc_produit, visuel_produit) VALUES ('$name', '$price', '$quantity', '$description', '$picture')";

if (mysqli_query($conn, $sql)) {
  move_uploaded_file($_FILES['picture']['tmp_name'], "uploads/$picture");
  echo "Product added successfully!";
} else {
  echo "Error adding product: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
