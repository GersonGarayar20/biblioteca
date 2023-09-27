<?php
$title = "Biblioteca";
include "../includes/header.php";
?>

<nav class="sticky top-0 z-10 h-16 flex items-center bg-white">
  <?php include "../includes/buscador.php" ?>
</nav>



<!-- <script>
  document.addEventListener("click", (e) => {
    const filter = document.getElementById("filter")

    if (e.target.matches("#btn-filter") || e.target.matches("#btn-filter > *")) {
      if (filter.style.display === "block") {
        filter.style.display = "none"
      } else {
        filter.style.display = "block"
      }

    }
  })
</script> -->

<h2 class="text-2xl py-4">Home</h2>

<!-- <div class="flex justify-between">
  <button id="btn-filter" class="w-16 h-16 flex justify-center items-center">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
    </svg>
  </button>
</div> -->


<!-- <section id="filter" class="hidden">
  <h4>Autor</h4>
  <div>
    <a href="">Angel</a>
    <a href="">Jose</a>
  </div>
  <h4>Año</h4>
  <div>
    <a href="">2020</a>
    <a href="">2017</a>
  </div>
</section> -->


<section class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
  <?php
  include "../services/conexion.php";
  include "../services/book.php";

  $books = getAllBooks();

  foreach ($books as $book) {
    $book_id = $book["id"];
    $book_title = $book["title"];
    $book_cover = $book["cover_url"];
    include "../includes/book.php";
  }
  ?>
</section>

<?php include "../includes/footer.php" ?>