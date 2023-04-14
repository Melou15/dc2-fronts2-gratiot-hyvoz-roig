<?php
session_start();

$host = "melisswroig.mysql.db";
$username = "melisswroig";
$password = "dHeQ6ead7f93JtCF";
$database = "melisswroig";

$conn = mysqli_connect($host, $username, $password, $database);
mysqli_set_charset($conn, "utf8");

// Vérifier si l'action est définie
if (isset($_POST['action'])) {
    // Mettre à jour le panier en fonction de l'action
    switch ($_POST['action']) {
        case 'mettre_a_jour':
            foreach ($_POST['quantite'] as $id_produit => $quantite) {
                // Vérifier si la quantité est valide
                if ($quantite <= 0) {
                    // Supprimer le produit du panier si la quantité est invalide
                    unset($_SESSION['panier'][$id_produit]);
                } else {
                    // Mettre à jour la quantité du produit dans le panier
                    $_SESSION['panier'][$id_produit]['quantite'] = $quantite;
                }
            }
            break;
        case 'supprimer':
            $id_produit = $_POST['id_produit'];
            unset($_SESSION['panier'][$id_produit]);
            break;
        default:
            // Ne rien faire si l'action est inconnue
            break;
    }
}

// Rediriger l'utilisateur vers la page du panier
header("Location: panier.php");
exit();

// Fermer la connexion à la base de données
$conn->close();
?>
