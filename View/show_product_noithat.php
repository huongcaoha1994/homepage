<!DOCTYPE html>
<html>
<head>
  <title>Product List Example</title>

  <style>
    .product-item {
      position: relative;
      overflow: hidden;
    }

    .product-item img {
      width: 400px;
      height: 300px;
      object-fit: cover;
      transition: transform 0.3s;
    }

    .product-item:hover img {
      transform: scale(1.05);
    }

    .product-details {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      padding: 10px;
      background-color: rgba(0, 0, 0, 0.7);
      color: #fff;
      opacity: 0;
      transition: opacity 0.3s;
    }

    .product-item:hover .product-details {
      opacity: 1;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="row">
    <?php 
    include("../Model/database.php");
    $select_product = "SELECT * FROM products WHERE category = 'NỘI THẤT';" ;
    $result_product = $connect->query($select_product);
    if ($result_product->num_rows > 0) {
      while ($row = $result_product->fetch_assoc()) {
        ?>
        <div class="col-md-4 mb-4">
          <div class="product-item">
            <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['product_name']; ?>" class="img-fluid">
            <div class="product-details">
              <h6><?php echo $row['product_name']; ?></h6>
              <p><?php echo $row['owner']; ?></p>
              <p class="text-uppercase"><?php echo $row['category']; ?></p>
            </div>
          </div>
        </div>
        <?php
      }
    }
    ?>
  </div>
</div>


</body>
</html>