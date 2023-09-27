<?php

$id = $_GET["id"];

include "../services/conexion.php";
include "../services/book.php";

$book = getBookById($id);

if ($book !== null) {
  $book_title = $book["title"];
  $book_author = $book["author"];
  $book_editorial = $book["editorial"];
  $book_year = $book["publication_year"];
  $book_cover = $book["cover_url"];
  $book_pdf = $book["pdf_url"];
} else {
  header("Location: ./404.php");
}

?>
<?php
$title = $book_title;
include "../includes/header.php";
?>

<nav class="sticky top-0 z-10 h-16 flex items-center bg-white">
  <a class="flex gap-2" href="./index.php">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
    </svg>
    <?php echo $title ?>
  </a>
</nav>


<div class="flex md:flex-row flex-col gap-8">

  <section class="flex justify-center">
    <div class="aspect-[2/3] w-60 md:w-80 border shadow">
      <img class="w-full h-full object-cover" src="../assets/images/<?php echo $book_cover ?>" alt="">
    </div>
  </section>

  <aside class="flex-1">
    <h2 class="text-2xl font-bold text-center md:text-left mb-2"><?php echo $book_title ?></h2>
    <p class="text-center md:text-left mb-4"><?php echo $book_author ?></p>

    <div class="flex justify-center md:justify-start gap-2 mb-4">
      <a class="w-32 bg-orange-100 hover:bg-orange-200 p-2 flex gap-2 transition-all" href="../assets/books/<?php echo $book_pdf ?>" download="<?php echo $book_title ?>.pdf">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
        </svg>
        Descargar
      </a>
      <a class="w-32 bg-orange-100 hover:bg-orange-200 p-2 flex gap-2 transition-all" href="./bookpdf.php?id=<?php echo $id ?>">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
        </svg>
        Leer
      </a>
    </div>

    <!-- categorias -->
    <!-- <section class="flex gap-2 mb-4">
      <a href="">Categoria1</a>
      <a href="">Categoria2</a>
      <a href="">Categoria3</a>
    </section> -->
    <!-- informacion -->
    <section class="w-full grid grid-cols-2 border-y py-4 gap-4">
      <div>
        <p class="text-sm text-neutral-500">Editorial</p>
        <a href=""><?php echo $book_editorial ?></a>
      </div>
      <?php if ($book_year !== null) { ?>
        <div>
          <p class="text-sm text-neutral-500">Año de publicacion</p>
          <p><?php echo $book_year ?></p>
        </div>
      <?php } ?>
    </section>
  </aside>
</div>


<?php include "../includes/footer.php" ?>