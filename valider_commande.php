<?php
session_start();

// Vérifiez si le panier est vide avant de continuer
if (!isset($_SESSION['panier']) || count($_SESSION['panier']) == 0) {
    header("Location: panier.php?error=panier_vide");
    exit();
}

$host = "melisswroig.mysql.db";
$username = "melisswroig";
$password = "dHeQ6ead7f93JtCF";
$database = "melisswroig";

$conn = mysqli_connect($host, $username, $password, $database);
mysqli_set_charset($conn, "utf8");

// Récupérer les informations du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$adresse = $_POST['adresse'];
$code_postal = $_POST['code_postal'];
$ville = $_POST['ville'];

// Insérer les informations du client dans la table `client`
$sql = "INSERT INTO client (nom_client, prenom_client, mail_client, adresse_client, tel_client) VALUES ('$nom', '$prenom', '$email', '$adresse', '$telephone')";
$result = $conn->query($sql);

// Récupérer l'ID du client inséré
$id_client = $conn->insert_id;

// Calculer le montant total de la commande
$total_commande = 0;
foreach ($_SESSION['panier'] as $produit) {
    $total_commande += $produit['prix'] * $produit['quantite'];
}

// Ajouter la commande à la table `commande`
$date_commande = date("Y-m-d H:i:s");
$sql = "INSERT INTO commande (id_client, date_commande, total_commande, email_client) VALUES ('$id_client', '$date_commande', '$total_commande', '$email')";
$result = $conn->query($sql);

// Récupérer l'ID de la commande insérée
$id_commande = $conn->insert_id;

// Parcourir le panier et ajouter chaque produit à la commande
foreach ($_SESSION['panier'] as $produit) {
    $id_produit = $produit['id'];
    $quantite = $produit['quantite'];
    $prix_unitaire = $produit['prix'];

    $sql = "INSERT INTO commande_detail (id_commande, id_produit, quantite, prix_unitaire) VALUES ('$id_commande', '$id_produit', '$quantite', '$prix_unitaire')";
    $result = $conn->query($sql);
}

// Vider le panier
$_SESSION['panier'] = [];

// Fermer la connexion à la base de données
$conn->close();

// Rediriger l'utilisateur vers une page de confirmation
header("Location: confirmation.php");
exit();
?>
