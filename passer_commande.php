<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Passer commande</title>
    <script src="https://kit.fontawesome.com/2c70a62eec.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="accueil.css">
    <link rel="stylesheet" href="panier.css">
    </head>
<body>
    
    <?php 
    include 'header.php'; ?>

    <h2>Récapitulatif de commande</h2>
    
    <?php include 'affiche_panier.php'; ?>
    
    <h2>Informations de livraison et de facturation</h2>

    <form action="valider_commande.php" method="post">
        <fieldset>
            <legend>Informations personnelles</legend>
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required>

            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="telephone">Téléphone:</label>
            <input type="tel" id="telephone" name="telephone" required>
        </fieldset>

        <fieldset>
            <legend>Adresse de livraison</legend>
            <label for="adresse">Adresse:</label>
            <input type="text" id="adresse" name="adresse" required>

            <label for="code_postal">Code postal:</label>
            <input type="text" id="code_postal" name="code_postal" required>

            <label for="ville">Ville:</label>
            <input type="text" id="ville" name="ville" required>
        </fieldset>

        <input type="submit" value="Valider la commande">
    </form>

    <?php include 'footer.php'; ?>
</body>
</html>
