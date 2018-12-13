<?php
session_start();
if(isset($_GET['product'])){
    $id = $_GET['product'];
 }

  $id = intval($id);

  $productsInCart = array();

  if(isset($_SESSION['products'])) {

    $productsInCart = $_SESSION['products'];
  }

  if(array_key_exists($id, $productsInCart)) {
    $productsInCart[$id] ++;
  } else {
    $productsInCart[$id] = 1;
  }

  $_SESSION['products'] = $productsInCart;
  header('Location: http://localhost');
//echo '<pre>';print_r($_SESSION['products']);die();
