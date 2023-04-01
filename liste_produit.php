<?php
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

// Retrieve products from database
$sql = "SELECT * FROM produits";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // Display products in a table
  echo "<table>";
  echo "<tr><th>ID</th><th>Name</th><th>Price</th><th>Quantity</th><th>Description</th><th>Picture</th></tr>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['id_produit'] . "</td>";
    echo "<td>" . $row['nom_produit'] . "</td>";
    echo "<td>" . $row['prix_produit'] . "</td>";
    echo "<td>" . $row['qt_produit'] . "</td>";
    echo "<td>" . $row['desc_produit'] . "</td>";
    echo "<td><img src='uploads/" . $row['visuel_produit'] . "' width='100' height='100'></td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "No products found.";
}

mysqli_close($conn);
?>
