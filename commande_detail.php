<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <script src="https://kit.fontawesome.com/2c70a62eec.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;500&display=swap" rel="stylesheet">
    <title>Détails de la commande</title>
    <link rel="stylesheet" href="accueil.css">
    <link rel="stylesheet" href="panier.css">
</head>
<body>
    <?php 
        include 'header.php'; 
    ?>

    <?php
    $host = "melisswroig.mysql.db";
    $username = "melisswroig";
    $password = "dHeQ6ead7f93JtCF";
    $database = "melisswroig";

    $conn = mysqli_connect($host, $username, $password, $database);
    mysqli_set_charset($conn, "utf8");

    // Récupérer l'ID de la commande à partir de l'URL
    $id_commande = $_GET['id_commande'];

    // Récupérer les informations de la commande
    $sql_commande = "SELECT * FROM commande WHERE id_commande = '$id_commande'";
    $result_commande = $conn->query($sql_commande);
    $row_commande = $result_commande->fetch_assoc();

    // Stocker les informations de la commande dans des variables
    $date_commande = date('d/m/Y', strtotime($row_commande['date_commande']));
    $email_client = $row_commande['email_client'];

    // Récupérer les détails de la commande
    $sql = "SELECT commande_detail.*, produits.nom_produit FROM commande_detail INNER JOIN produits ON commande_detail.id_produit = produits.id_produit WHERE commande_detail.id_commande = '$id_commande'";
    $result = $conn->query($sql);
    ?>

    <h2>Détails de la commande n°<?php echo $id_commande; ?> - Date : <?php echo $date_commande; ?> - Email client : <?php echo $email_client; ?></h2>

    <table style="max-width: 800px;margin: 0 auto;">
        <thead>
            <tr>
                <th>Produit</th>
                <th>Quantité</th>
                <th>Prix unitaire</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $total_commande = 0;
            while ($row = $result->fetch_assoc()) {
                $nom_produit = $row['nom_produit'];
                $quantite = $row['quantite'];
                $prix_unitaire = $row['prix_unitaire'];
                $total_ligne = $quantite * $prix_unitaire;
                $total_commande += $total_ligne;

                echo '<tr>';
                echo '<td>' . $nom_produit . '</td>';
                echo '<td>' . $quantite . '</td>';
                echo '<td>' . $prix_unitaire . ' €</td>';
                echo '<td>' . $total_ligne . ' €</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3">Total de la commande</th>
                <th><?php echo $total_commande; ?> €</th>
            </tr>
        </tfoot>
    </table>

    <?php
    // Fermer la connexion à la base de données
    $conn->close();
    ?>

    <?php include 'footer.php'; ?>
</body>
</html>
