<?php
session_start();

$host = "melisswroig.mysql.db";
$username = "melisswroig";
$password = "dHeQ6ead7f93JtCF";
$database = "melisswroig";

$conn = mysqli_connect($host, $username, $password, $database);
mysqli_set_charset($conn, "utf8");

// Vérifier si la quantité est valide
if ($_POST['quantite'] <= 0) {
    header("Location: produit.php?error=quantite_invalid");
    exit();
}

// Récupérer les informations sur le produit depuis la base de données
$id_produit = $_POST['id_produit'];
$sql = "SELECT * FROM produits WHERE id_produit='$id_produit'";
$result = $conn->query($sql);

// Vérifier si le produit existe dans la base de données
if ($result->num_rows > 0) {
    // Récupérer les informations sur le produit
    $row = $result->fetch_assoc();

    // Vérifier si le produit existe déjà dans le panier
    if (isset($_SESSION['panier'][$id_produit])) {
        // Ajouter la quantité spécifiée à la quantité existante
        $_SESSION['panier'][$id_produit]['quantite'] += $_POST['quantite'];
    } else {
        // Ajouter le produit au panier avec la quantité spécifiée
        $produit = array(
            'id' => $row['id_produit'],
            'nom' => $row['nom_produit'],
            'prix' => $row['prix_produit'],
            'quantite' => $_POST['quantite']
        );
        $_SESSION['panier'][$id_produit] = $produit;
    }

    header("Location: produit.php?success=produit_ajoute_au_panier");
    exit();
} else {
    // Rediriger l'utilisateur vers la page d'affichage des fruits avec un message d'erreur
    header("Location: produit.php?error=produit_non_trouve");
    exit();
}

// Fermer la connexion à la base de données
$conn->close();

?>