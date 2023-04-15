<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <script src="https://kit.fontawesome.com/2c70a62eec.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="panier.css">
    <link rel="stylesheet" href="accueil.css">
    <title>Récapitulatif des commandes passées</title>
</head>
<body>
    <?php 
    include 'header.php'; 
    ?>

    <h2>Récapitulatif des commandes passées</h2>

    <?php
    $host = "melisswroig.mysql.db";
    $username = "melisswroig";
    $password = "dHeQ6ead7f93JtCF";
    $database = "melisswroig";

    $conn = mysqli_connect($host, $username, $password, $database);
    mysqli_set_charset($conn, "utf8");

    // Récupérer toutes les commandes de la base de données
    $sql = "SELECT commande.*, client.nom_client, client.prenom_client FROM commande INNER JOIN client ON commande.id_client = client.id_client ORDER BY date_commande DESC";
    $result = $conn->query($sql);

    // Afficher le tableau des commandes
    echo '<table style="max-width: 800px;margin: 0 auto;">';
    echo '<thead><tr><th>ID commande</th><th>Nom client</th><th>Date commande</th><th>Heure commande</th><th>Montant total</th><th>Action</th></tr></thead>';
    echo '<tbody>';
    while ($row = $result->fetch_assoc()) {
        $id_commande = $row['id_commande'];
        $date_commande = date('d/m/Y', strtotime($row['date_commande']));
        $heure_commande = date('H:i:s', strtotime($row['date_commande']));
        $total_commande = $row['total_commande'];
        $nom_client = $row['prenom_client'] . ' ' . $row['nom_client'];

        echo '<tr>';
        echo '<td>' . $id_commande . '</td>';
        echo '<td>' . $nom_client . '</td>';
        echo '<td>' . $date_commande . '</td>';
        echo '<td>' . $heure_commande . '</td>';
        echo '<td>' . $total_commande . ' €</td>';
        echo '<td><a href="commande_detail.php?id_commande=' . $id_commande . '">Voir le détail</a></td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';

    // Fermer la connexion à la base de données
    $conn->close();
    ?>

    <?php include 'footer.php'; ?>
</body>
</html>
