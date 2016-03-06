<?php
  $sql = "SELECT image FROM products";

  $result = $mysqli->query($sql);

  $result = resultToArray($result);


 ?>
