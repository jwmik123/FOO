<div class="background">


<?php
  if ($result = $mysqli->query("SElECT * FROM products LIMIT 0,33")) {
    while($row = $result->fetch_object()) {
?>

<div class="products">
    <div class="product-thumbnail" style="background-image: url(<?php echo $row->image ?>)">
      <div class="product-meta">
        <div class="name"><?php echo $row->brand ?></div>
        <div class="info"><?php echo $row->info ?></div>
        <div class="price">$<?php echo $row->price ?>,00</div>
        <hr>
        <span class="fi-shopping-cart"></span>
      </div>
    </div>
  </div>
  <?php
    }
  }
   ?>
