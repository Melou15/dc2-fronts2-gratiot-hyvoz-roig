<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initiale-scale=1">
  <script src="https://kit.fontawesome.com/3f07be2185.js" crossorigin="anonymous"></script>
  <title>Ajouter un produit</title>
</head>
<body>
  <?php include 'liste_produit.php';?>
  <?php include './ajoutprodcss.php';?>
  <div class="form-container">
    <h1>Ajouter un produit</h1>
    <form method="post" action="add_product.php" enctype="multipart/form-data">
      <label for="name">Nom:</label>
      <input type="text" name="name" required>
      
      <label for="price">Prix:</label>
      <input type="number" name="price" required>
      
      <label for="quantity">Quantité:</label>
      <input type="number" name="quantity" required>
      
      <label for="description">Description:</label>
      <textarea name="description" required></textarea>
      
      <label for="picture">Photo:</label>
      <input type="file" name="picture" required>
      
      <input type="submit" name="submit" value="Add Product">
    </form>