<?php
  include("connect.php");
  include("getProduct.php");
  if ($idString != "") {
    $card_product = $pdo->query("SELECT transaction.id_book, transaction.number, transaction.bought, book.id_author, book.name, book.description, book.price, book.image, author.author_name FROM transaction INNER JOIN book ON transaction.id_book = book.id INNER JOIN author ON book.id_author = author.id WHERE book.id IN ($idString)");
    $card_products = $card_product->fetchAll();
    return $card_products;
  } else {
    return false;
  }
