<?php
session_start();

$host = "melisswroig.mysql.db";
$username = "melisswroig";
$password = "dHeQ6ead7f93JtCF";
$database = "melisswroig";

$conn = mysqli_connect($host, $username, $password, $database);
mysqli_set_charset($conn, "utf8");

// Vérifier si le panier est vide
if (!isset($_SESSION['panier']) || count($_SESSION['panier']) == 0) {
    echo "<p>Votre panier est vide.</p>";
} else {
    // Afficher le contenu du panier
    echo "<form method='post' action='mise_a_jour_panier.php'>";
    echo "<table>";
    echo "<thead><tr><th>Image</th><th>Produit</th><th>Prix</th><th>Quantité</th><th>Total</th><th>Action</th></tr></thead>";
    echo "<tbody>";
    $total = 0;
    foreach ($_SESSION['panier'] as $id_produit => $produit) {
        $sql = "SELECT * FROM produits WHERE id_produit='$id_produit'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $prix = $row['prix_produit'];
            $quantite = $produit['quantite'];
            $total_produit = $prix * $quantite;
            echo "<tr>";
            echo "<td><img src='https://melissa-roig.fr/duty_fruit/uploads/".$row['visuel_produit']."' alt='".$row['nom_produit']."' width='50'></td>";
            echo "<td>".$row['nom_produit']."</td>";
            echo "<td>".$prix."€</td>";
            echo "<td><input type='number' name='quantite[$id_produit]' value='".$quantite."' min='1' max='".$row['qt_produit']."'></td>";
            echo "<td>".$total_produit."€</td>";
            echo "<td><button type='submit' name='action' value='supprimer' onclick='return confirm(\"Êtes-vous sûr de vouloir supprimer ce produit ?\")'>Supprimer</button></td>";
            echo "<input type='hidden' name='id_produit' value='".$id_produit."'>";
            echo "</tr>";
            $total += $total_produit;
        }
    }
    echo "<tr><td colspan='4'>Total</td><td>".$total."€</td><td><button type='submit' name='action' value='mettre_a_jour'>Mettre à jour le panier</button></td></tr>";
    echo "</tbody>";
    echo "</table>";
    echo "</form>";
}

// Fermer la connexion à la base de données
$conn->close();
?>
