<?php

$id = $_GET["id"];

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biblioteca</title>
  <link rel="stylesheet" href="../../assets/css/styles.css">
  <script src="../assets/js/navigation.js"></script>

</head>

<body>
  <?php include "../../includes/menu.php" ?>

  <main class="ml-60">
    <section class="flex-1 px-8 py-4">
      <?php include "../../includes/buscador.php" ?>
      <div class="flex py-8">
        <div>
          <img class="w-96" src="../../assets/images/<?php echo $id ?>.jpg" style="view-transition-name: book<?php echo $id ?>" alt="">

        </div>
        <div class="flex-1 px-8">
          <h2 class="text-2xl mb-8">Libro1</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam dignissimos molestias quas suscipit sequi. Ad numquam aliquam veniam consequatur quae totam, perferendis cumque modi, mollitia, voluptatibus recusandae voluptatem! Facilis, accusantium.</p>

        </div>

      </div>
    </section>
  </main>

</body>

</html>