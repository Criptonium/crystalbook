<?php
function countitems() {
  if(isset($_SESSION['products'])) {
    $count = 0;
    foreach ($_SESSION['products'] as $id => $quantity) {
      $count = $count + $quantity;
    }
    return $count;
  } else {
    return 0;
  }
}
