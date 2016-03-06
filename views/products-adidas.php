<?php
  if ($result = $mysqli->query("SElECT * FROM products LIMIT 33,33")) {
    while($row = $result->fetch_object()) {
?>

<div class="products1">
    <div class="product-thumbnail1" style="background-image: url(<?php echo $row->image ?>)">
      <div class="product-meta1">
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
