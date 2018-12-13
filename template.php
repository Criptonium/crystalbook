<?php
session_start();

function get_popular_book() {
  include("connect.php");
  $popular_book = $pdo->query('SELECT transaction.id_book, transaction.number, transaction.bought, book.id_author, book.name, book.description, book.price, book.image, author.author_name FROM transaction INNER JOIN book ON transaction.id_book = book.id INNER JOIN author ON book.id_author = author.id ORDER BY bought DESC');
  $popular_books = $popular_book->fetchAll();
  return $popular_books;
}

?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Интернет-магазин книжной литературы "Crystal Book"</title>
  </head>
  <body>
    <?php include 'main_menu.php' ?>


    <!--
    <div id="mySidenav" class="sidenav">
        <div class="container" style="background-color: #2874f0; padding-top: 10px;">
            <span class="sidenav-heading">Home</span>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        </div>
        <a href="http://clashhacks.in/">Link</a>
        <a href="http://clashhacks.in/">Link</a>
        <a href="http://clashhacks.in/">Link</a>
        <a href="http://clashhacks.in/">Link</a>
    </div>
    -->
    <?php if (isset($_POST['search'])) { ?>
      <div class="content-search">
        <h2 class="text-uppercase text-center pb-3">Всё, что удалось найти по "<?=$_POST['search'] ?>"</h2>
        <?php include "search.php"; ?>
      </div>
    <?php }
    else { ?>
    <div id="recomendation-books" class="container mb-5">
    <h2 class="text-uppercase text-center pb-3">Рекомендация</h2>
      <div class="row mx-auto my-auto">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
          <div class="carousel-inner w-100" role="listbox">
            <div class="carousel-item active">
              <div class="carousel-card-book">
                <div class="wrapper">
                  <a href="#"><img class="card-book-image" src="/images/books/Стивен Кинг/it.jpg"></a>
                  <div class="data">
                    <div class="content-card">
                      <h5 class="title m-0"><a href="#">ОНО</a></h5>
                      <span class="author"><small>Stephen King</small></span>
                      <span><small>Ужасы</small></span>
                      <p class="mb-2">Цена: 1 200 <i class="fa fa-rub" aria-hidden="true"></i></p>
                    </div>
                    <div class="card-book-action text-center">
                      <div class="card-book-button-description pt-2">
                        <a href="#">О книге</a>
                      </div>
                      <div class="card-book-button-cart pt-2">
                        <a href="#">В корзину</i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-card-book">
                <div class="wrapper">
                  <a href="#"><img class="card-book-image" src="/images/books/Стивен Кинг/kladbische_domashnih_zhivotnyh.jpg"></a>
                  <div class="data">
                    <div class="content-card">
                      <h5 class="title m-0"><a href="#">ОНО</a></h5>
                      <span class="author"><small>Stephen King</small></span>
                      <span><small>Ужасы</small></span>
                      <p class="mb-2">Цена: 1 200 <i class="fa fa-rub" aria-hidden="true"></i></p>
                    </div>
                    <div class="card-book-action text-center">
                      <div class="card-book-button-description pt-2">
                        <a href="#">О книге</a>
                      </div>
                      <div class="card-book-button-cart pt-2">
                        <a href="#">В корзину</i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-card-book">
                <div class="wrapper">
                  <a href="#"><img class="card-book-image" src="/images/books/Стивен Кинг/dolgaya_progulka.jpg"></a>
                  <div class="data">
                    <div class="content-card">
                      <h5 class="title m-0"><a href="#">ОНО</a></h5>
                      <span class="author"><small>Stephen King</small></span>
                      <span><small>Ужасы</small></span>
                      <p class="mb-2">Цена: 1 200 <i class="fa fa-rub" aria-hidden="true"></i></p>
                    </div>
                    <div class="card-book-action text-center">
                      <div class="card-book-button-description pt-2">
                        <a href="#">О книге</a>
                      </div>
                      <div class="card-book-button-cart pt-2">
                        <a href="#">В корзину</i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-card-book">
                <div class="wrapper">
                  <a href="#"><img class="card-book-image" src="/images/books/Стивен Кинг/strana_radosty.jpg"></a>
                  <div class="data">
                    <div class="content-card">
                      <h5 class="title m-0"><a href="#">ОНО</a></h5>
                      <span class="author"><small>Stephen King</small></span>
                      <span><small>Ужасы</small></span>
                      <p class="mb-2">Цена: 1 200 <i class="fa fa-rub" aria-hidden="true"></i></p>
                    </div>
                    <div class="card-book-action text-center">
                      <div class="card-book-button-description pt-2">
                        <a href="#">О книге</a>
                      </div>
                      <div class="card-book-button-cart pt-2">
                        <a href="#">В корзину</i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-card-book">
                <div class="wrapper">
                  <a href="#"><img class="card-book-image" src="/images/books/Стивен Кинг/carrie.jpg"></a>
                  <div class="data">
                    <div class="content-card">
                      <h5 class="title m-0"><a href="#">ОНО</a></h5>
                      <span class="author"><small>Stephen King</small></span>
                      <span><small>Ужасы</small></span>
                      <p class="mb-2">Цена: 1 200 <i class="fa fa-rub" aria-hidden="true"></i></p>
                    </div>
                    <div class="card-book-action text-center">
                      <div class="card-book-button-description pt-2">
                        <a href="#">О книге</a>
                      </div>
                      <div class="card-book-button-cart pt-2">
                        <a href="#">В корзину</i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-card-book">
                <div class="wrapper">
                  <a href="#"><img class="card-book-image" src="/images/books/Стивен Кинг/11.22.63.jpg"></a>
                  <div class="data">
                    <div class="content-card">
                      <h5 class="title m-0"><a href="#">ОНО</a></h5>
                      <span class="author"><small>Stephen King</small></span>
                      <span><small>Ужасы</small></span>
                      <p class="mb-2">Цена: 1 200 <i class="fa fa-rub" aria-hidden="true"></i></p>
                    </div>
                    <div class="card-book-action text-center">
                      <div class="card-book-button-description pt-2">
                        <a href="#">О книге</a>
                      </div>
                      <div class="card-book-button-cart pt-2">
                        <a href="#">В корзину</i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    <div class="content">
        <h2 class="text-center text-uppercase">ПОПУЛЯРНОЕ</h2>
        <?php $popular_books = get_popular_book();?>
  			<?php foreach($popular_books as $popular_book): ?>
        <div class="card-book">
          <div class="wrapper">
            <a href="#"><img class="card-book-image" src="/images/books/<?= $popular_book['author_name'] ?>/<?= $popular_book['image'] ?>"></a>
            <div class="data">
              <div class="content-card">
                <h5 class="title m-0"><a href="#"><?= $popular_book['name'] ?></a></h5>
                <span class="author"><small><?= $popular_book['author_name'] ?></small></span>
                <span><small>Ужасы</small></span>
                <p class="mb-2">Цена: <?= $popular_book['price'] ?> <i class="fa fa-rub" aria-hidden="true"></i></p>
              </div>
              <div class="card-book-action text-center">
                <div class="card-book-button-description pt-2">
                  <a href="#">О книге</a>
                </div>
                <div class="card-book-button-cart pt-2">
                  <a class="add-to-card" data-id="<?php echo $popular_book['id_book']; ?>" href="actionAdd.php?product=<?php echo $popular_book['id_book']; ?>">В корзину</i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php } ?>

    <?php include 'footer.php'; ?>
  </body>
</html>
