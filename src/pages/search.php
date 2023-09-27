<?php
$title = "Biblioteca";
include "../includes/header.php";
?>

<nav class="sticky top-0 z-10 h-16 flex items-center bg-white">
  <?php include "../includes/buscador.php" ?>
</nav>

<section class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "../services/conexion.php";
    include "../services/book.php";


    $search = $_POST["search"];

    $books = searchBooks($search);

    foreach ($books as $book) {
      $book_id = $book["id"];
      $book_title = $book["title"];
      $book_cover = $book["cover_url"];
      include "../includes/book.php";
    }
  }
  ?>
</section>

<?php include "../includes/footer.php" ?>