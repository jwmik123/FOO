<?php
$search = $_GET['q'];

$con = mysqli_connect('localhost','18828_jwmik','fovcwolc','18828_faseOvergangsOpdracht');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
    exit;
}

mysqli_select_db($con,"products");
$sql="SELECT * FROM products WHERE brand LIKE '$search%' ";
$result = mysqli_query($con,$sql);


while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
?>
<div class="search-products" >
  <div class="search-thumbnail" style="background-image: url(<?php echo $row['image'] ?>)">
  <div class="brand">
    <h3><?php echo $row['brand'] ?></h3>
  </div>
  <div class="info">
    <?php echo $row['info'] ?>
  </div>
  <div class="price">
    $<?php echo $row['price'] ?>,00
  </div>
</div>
</div>


<?php
}

mysqli_close($con);
?>
