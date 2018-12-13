<?php
if (isset($_POST['search'])) {
function search() {
  include("connect.php");
  $search_text = $_POST['search'];
  $book = $pdo->query("SELECT transaction.id_book, transaction.number, transaction.bought, book.id_author, book.name, book.description, book.price, book.image, author.author_name FROM transaction INNER JOIN book ON transaction.id_book = book.id INNER JOIN author ON book.id_author = author.id WHERE (book.name LIKE '%$search_text%' OR author.author_name LIKE '%$search_text%')");
  $books = $book->fetchAll();
  return $books;
}
?>

<?php $books = search();?>
<?php foreach($books as $book): ?>
<div class="card-book">
  <div class="wrapper">
    <a href="#"><img class="card-book-image" src="/images/books/<?= $book['author_name'] ?>/<?= $book['image'] ?>"></a>
    <div class="data">
      <div class="content-card">
        <h5 class="title m-0"><a href="#"><?= $book['name'] ?></a></h5>
        <span class="author"><small><?= $book['author_name'] ?></small></span>
        <span><small>Ужасы</small></span>
        <p class="mb-2">Цена: <?= $book['price'] ?> <i class="fa fa-rub" aria-hidden="true"></i></p>
      </div>
      <div class="card-book-action text-center">
        <div class="card-book-button-description pt-2">
          <a href="#">О книге</a>
        </div>
        <div class="card-book-button-cart pt-2">
          <a class="add-to-card" data-id="<?php echo $book['id_book']; ?>" href="actionAdd.php?product=<?php echo $book['id_book']; ?>">В корзину</i></a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
<?php } ?>
