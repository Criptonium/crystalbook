<?php
  if(isset($_SESSION['products'])) {
      $productInCart =  $_SESSION['products'];
      $productId = array_keys($productInCart);
      $idString = implode(',', $productId);
} else {
  $idString = "";
}
?>
