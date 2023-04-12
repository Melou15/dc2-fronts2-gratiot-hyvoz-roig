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
      <img class="product-image" src="images/framboise.png" alt="image de framboise">
    </div>
    <div class="product-details">
      <h1 class="product-name">FRAMBOISE</h1>
      <h2 class="product-price">2€</h2>
      <p class="product-quantity">Quantité: <input type="number" value="1"></p>
      <p class="product-description">Nous sommes heureux de vous présenter notre sélection de framboises, un fruit sucré et juteux qui est parfait pour les desserts, les smoothies et autres préparations culinaires.

Nos framboises sont cultivées avec soin dans des fermes locales et sélectionnées pour leur qualité supérieure. Elles sont cueillies à la main à leur apogée de maturité pour garantir leur goût sucré et leur texture juteuse. Les framboises que nous proposons sont 100% naturelles, sans conservateurs ni additifs, pour une expérience gustative pure et saine.

Les framboises sont riches en vitamine C, en fibres alimentaires et en antioxydants, ce qui les rend non seulement délicieuses, mais également bénéfiques pour la santé. Elles sont parfaites pour ajouter de la couleur et de la saveur à vos plats.

</p>
    </div>
  </div>
  <?php include 'footer.php';?>
</body>
</html>
