<?php
$title = "Categorias";
include "../includes/header.php";
?>

<h2 class="text-2xl py-4">Categorias</h2>

<section class="">
  <h2 class="text-2xl py-4">Ciencia</h2>
  <div class="grid grid-cols-4">
    <?php
    $id = 1;
    include "../includes/book.php"
    ?>
  </div>
</section>

<section class="">
  <h2 class="text-2xl py-4">Historia</h2>
  <div class="grid grid-cols-4">
    <?php
    $id = 1;
    include "../includes/book.php"
    ?>
  </div>
</section>

<section class="">
  <h2 class="text-2xl py-4">Miedo</h2>
  <div class="grid grid-cols-4">
    <?php
    $id = 3;
    include "../includes/book.php"
    ?>
  </div>
</section>

<?php include "../includes/footer.php" ?>