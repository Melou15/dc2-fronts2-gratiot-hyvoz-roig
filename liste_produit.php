<?php
// Connexion à la base de donnée
$host = "melisswroig.mysql.db";
$username = "melisswroig";
$password = "dHeQ6ead7f93JtCF";
$database = "melisswroig";

$conn = mysqli_connect($host, $username, $password, $database);

// Vérifier la connexion
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Récupération produits depuis la base de donnée
$sql = "SELECT * FROM produits";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // Afficher les produits dans le tableau
  echo "<div style='max-width: 800px; margin: 0 auto;'>";
  echo "<table>";
  echo "<tr><th>ID</th><th>Nom</th><th>Prix</th><th>Quantité</th><th>Description</th><th>Photo</th><th>Supprimer</th></tr>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['id_produit'] . "</td>";
    echo "<td>" . utf8_encode($row['nom_produit']) . "</td>";
    echo "<td>" . $row['prix_produit'] . "</td>";
    echo "<td>" . $row['qt_produit'] . "</td>";
    echo "<td>" . utf8_encode($row['desc_produit']) . "</td>";
    echo "<td><img src='uploads/" . $row['visuel_produit'] . "' width='100' height='100'></td>";
    echo "<td><a href='javascript:deleteProduct(" . $row['id_produit'] . ")'><i class='fas fa-trash'></i></a></td>";
    echo "</tr>";
  }
  echo "</table>";
  echo "</div>";
} else {
  echo "No products found.";
}


mysqli_close($conn);
?>
<script>

function deleteProduct(id) {
  if (confirm("Voulez-vous vraiment supprimer ce produit ?")) {
    // Envoyer une requete AJAX pour supprimer produit
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "supprimer_produit.php?id=" + id, true);
    xhr.onload = function() {
      console.log(xhr.responseText);
      // Recharger page pour mettre à jour produit
      location.reload();
    };
    xhr.send();
  }
}

</script>