<?php
$title = "Favoritos";
include "../includes/header.php";
?>

<nav class="sticky top-0 z-10 h-16 flex items-center bg-white">
  <a class="flex gap-4" href="./index.php">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
    </svg>
    <?php echo $title ?>
  </a>
</nav>

<section class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
  <?php
  $user_id = $_SESSION['id'];

  if ($user_id) {
    include "../services/conexion.php";
    include "../services/favorites.php";

    $books = obtenerLibrosFavoritos($user_id);

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