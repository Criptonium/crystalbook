<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Интернет-магазин книжной литературы "Crystal Book"</title>
  </head>
  <body>
    <?php
    session_start();
    include 'main_menu.php';
    include 'getProductsById.php';
    ?>
    <div class="content" style="padding-top: 100px;">
      <?php if ($idString != "") {?>
        <h2 class="text-center text-uppercase">Ваша корзина</h2>
        <?php foreach($card_products as $card_product): ?>
          <div class="card-book text-left">
            <div class="wrapper">
              <a href="#"><img class="card-book-image" src="/images/books/<?= $card_product['author_name'] ?>/<?= $card_product['image'] ?>"></a>
              <div class="data">
                <div class="content-card">
                  <h5 class="title m-0"><a href="#"><?= $card_product['name'] ?></a></h5>
                  <span class="author"><small><?= $card_product['author_name'] ?></small></span>
                  <span><small>Ужасы</small></span>
                  <p class="mb-2">Цена: <?= $card_product['price'] ?> <i class="fa fa-rub" aria-hidden="true"></i></p>
                </div>
                <div class="card-book-action text-center">
                  <div class="card-book-button-description pt-2">
                    <a href="#">О книге</a>
                  </div>
                  <div class="card-book-button-cart pt-2">
                    <a class="add-to-card" data-id="<?php echo $card_product['id_book']; ?>" href="actionRemove.php?product=<?php echo $card_product['id_book']; ?>">Удалить</i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php } else { ?>
        <div class="content text-center">
          <img class="undefinde-image" src="https://i.imgur.com/dgF7vr5.gif">
          <h2 class="text-center text-uppercase">Ваша корзина ПУСТААААА!</br>/ᐠ｡‸｡ᐟ\</h2>
        </div>
      <?php }?>
    </div>
    <?php include 'footer.php'; ?>
  </body>
