<?php
$title = "Biblioteca";
include "../includes/header.php";
?>

<nav class="h-20 flex items-center">
  <?php include "../includes/buscador.php" ?>
</nav>

<h2 class="text-2xl py-4">Home</h2>

<section class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
  <?php
  $id = 1;
  include "../includes/book.php"
  ?>
  <?php
  $id = 2;
  include "../includes/book.php"
  ?>
  <?php
  $id = 3;
  include "../includes/book.php"
  ?>
  <?php
  $id = 4;
  include "../includes/book.php"
  ?>
  <?php
  $id = 5;
  include "../includes/book.php"
  ?>
  <?php
  $id = 6;
  include "../includes/book.php"
  ?>
</section>

<?php include "../includes/footer.php" ?>