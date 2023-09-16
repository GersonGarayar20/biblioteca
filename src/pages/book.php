<?php

$id = $_GET["id"];

?>
<?php
$title = "book" . $id;
include "../includes/header.php";
?>

<nav class="nav h-20 flex items-center">
  <a class="flex gap-2" href="./index.php">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
    </svg>
    Volver
  </a>
</nav>


<div class="flex md:flex-row flex-col gap-8">

  <img class="w-96 rounded-xl" src="../assets/images/<?php echo $id ?>.jpg" style="view-transition-name: book<?php echo $id ?>" alt="">

  <section class="flex-1 flex flex-col gap-4">
    <h2 class="text-2xl font-bold text-center md:text-left">Libro1</h2>
    <p class="text-center md:text-left">autor</p>
    <a class="w-32 border border-blue-200 hover:bg-blue-200 p-2 flex gap-2" href="">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
      </svg>
      Descargar
    </a>
    <div class="flex gap-2">
      <a href="">Categoria1</a>
      <a href="">Categoria2</a>
      <a href="">Categoria3</a>
    </div>
    <div class="grid grid-cols-2 border-y py-4 gap-4">
      <div>
        <p class="text-sm text-neutral-500">Editorial</p>
        <a href="">Feedbooks</a>
      </div>
      <div>
        <p class="text-sm text-neutral-500">Año de publicacion</p>
        <p>2000</p>
      </div>
      <div>
        <p class="text-sm text-neutral-500">Idioma</p>
        <p>Castellano</p>
      </div>
      <div>
        <p class="text-sm text-neutral-500">ISBB</p>
        <p>121546546</p>
      </div>
    </div>
  </section>
</div>

<?php include "../includes/footer.php" ?>