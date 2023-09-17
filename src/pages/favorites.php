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

<section class="">
  <h2 class="text-2xl py-4">Ciencia</h2>
  <div class="grid grid-cols-4">
    <?php
    $id = 1;
    include "../includes/book.php"
    ?>
  </div>
</section>

<?php include "../includes/footer.php" ?>