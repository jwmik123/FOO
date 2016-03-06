<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../assets/css/all-items.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="../css/animations.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <div class="header">
        <section>
            <!-- <div id="logo"><img src="assets/img/logo.png" alt="" width="120px" height="100px"></div> -->
            <a href="../index.php" id="title"><h2 id="page-title">Shoe Store</h2></a>
            <a href="../index.php" id="title"><p id="page-title-slogan">All kinds of shoes</p></a>
        </section>
        <section>
            <div class="navigation">
                <ul>
                    <a href="../index.php" class="a-all"><li>Go Back &#8617;</li></a>
                </ul>
            </div>
        </section>
    </div>




<?php
require '../config/config.php';
if ($result = $mysqli->query("SElECT * FROM products")) {
  while($row = $result->fetch_object()) {
?>



<div class="products " >
  <div class="product-thumbnail" style="background-image: url('../<?php echo $row->image ?>')">

<div class="product-meta">
  <div class="brand">
    <h3><?php echo $row->brand ?></h3>
  </div>
  <div class="info">
    <?php echo $row->info ?>
  </div>
  <div class="price">
    $<?php echo $row->price ?>,00
  </div>
</div>
</div>
</div>




<?php }} ?>
