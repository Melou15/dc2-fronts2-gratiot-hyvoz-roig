<?php
include 'db.class.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/2c70a62eec.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;500&display=swap" rel="stylesheet">
  <title>Product Page</title>
  <style>
    body {
      font-family: 'Raleway', sans-serif;
    }
    .product-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
      max-width: 1200px;
      margin: 0 auto;
    }
    .product-image {
      width: 350px;
        margin:10px 50px 10px 200px;
        border-radius: 200px;
        border: solid #F4315B 5px;
    }
    .product-details {
      max-width: 500px;
    }
    .product-name {
      font-size: 50px;
      font-weight: bold;
      margin-bottom: 20px;
    }
    .product-price {
      font-size: 30px;
      font-weight: bold;
      margin-bottom: 20px;
    }
    .product-quantity {
      font-size: 15px;
      margin-bottom: 20px;
    }
    .product-description {
      font-size: 15px;
      line-height: 1.5;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <?php include 'header.php';?>
  <div class="product-container">
    <div>
      <img class="product-image" src="images/poire.png" alt="image de fraises">
    </div>
    <div class="product-details">
      <h1 class="product-name">POIRE</h1>
      <h2 class="product-price">4€</h2>
      <p class="product-quantity">Quantité: <input type="number" value="1"></p>
      <p class="product-description">La poire est appréciée pour sa chair douce et fondante, qui est souvent décrite comme ayant une saveur délicate et parfumée. Elles sont également faibles en calories, ce qui en fait un choix sain et délicieux pour une collation ou un dessert. Que vous les mangiez nature, que vous les ajoutiez à des salades de fruits, nos poires sont un choix savoureux et sain pour tous les amateurs de fruits.</p>
    </div>
  </div>
  <?php include 'footer.php';?>
</body>
</html>